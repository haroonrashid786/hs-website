<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class LeadsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $baseQuery = Lead::orderBy('created_at', 'desc');
        if (!empty($search)) {
            $baseQuery->where('name', 'like', "%{$search}%")
            ->orWhere('mobile', 'like', "%{$search}%")
            ->orWhere('company', 'like', "%{$search}%")
            ->orWhere('hear_about', 'like', "%{$search}%")
            ->orWhere('message', 'like', "%{$search}%")
            ->orWhere('service', 'like', "%{$search}%")
            ->orWhere('industry', 'like', "%{$search}%");
        }

        $leads = $baseQuery->paginate(20);
        return view('admin.leads', compact('leads'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|required_if:type,lead|email',
            'mobile' => 'required|string|max:20',
            'company' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'hear_about' => 'nullable|string|max:255',
            'message' => 'required|string',
            'type' => ['required', Rule::in(['lead', 'contact'])]
        ],[
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'mobile.required' => 'The mobile field is required.',
            'message.required' => 'The message field is required.',
            'company.required' => 'The company field is required.',
            'type.required' => 'The type field is required.',
            'type.in' => 'Invalid type value.',
        ]);

        // return $validatedData;

        // Create a new lead
        $lead = Lead::create($validatedData);

        $data = ['lead' => $lead];

        $message = $request->get('message');
        $email = $request->get('email');
        $mobile = $request->get('mobile');

        $isSpam = false;

        // Check if email domain is .ru
        if (preg_match('/\.ru$/', $email)) {
            $isSpam = true;
        }

        // Check if mobile or phone starts with 8
        if (preg_match('/^8/', $mobile) ) {
            $isSpam = true;
        }

        // Check if message contains only English characters
        if (!preg_match('/^[\x20-\x7E]+$/', $message)) {
            $isSpam = true;
        }


        // Additional spam check conditions
        // Check if message contains too many URLs
        if (substr_count($message, 'http') > 2) {
            $isSpam = true;
        }

        // Check if the message contains common spam words
        $spamWords = ['offer', 'free', 'click', 'promotion','test'];
        foreach ($spamWords as $word) {
            if (stripos($message, $word) !== false) {
                $isSpam = true;
                break;
            }
        }

        // Check if the email contains suspicious patterns
        if (preg_match('/^[a-zA-Z0-9._%+-]+@(example|test|mailinator|spam|tempmail)\.com$/', $email)) {
            $isSpam = true;
        }
        // Check if email or message contains excessive numbers
        if (preg_match('/\d{6,}/', $email) || preg_match('/\d{6,}/', $message)) {
            $isSpam = true;
        }

        // Check if message contains excessive punctuation
        if (preg_match('/[!?.]{4,}/', $message)) {
            $isSpam = true;
        }

        // Check if email is from a suspicious country domain
        $suspiciousDomains = ['.cn', '.br', '.in', '.xyz', '.top', '.pw', '.club'];
        foreach ($suspiciousDomains as $domain) {
            if (preg_match('/' . preg_quote($domain) . '$/', $email)) {
                $isSpam = true;
                break;
            }
        }

        // Check if the message is too short
        if (strlen($message) < 100) {
            $isSpam = true;
        }

        // Check if the message is too long
        if (strlen($message) > 500) {
            $isSpam = true;
        }

        if (!$isSpam) {
            // Send an email notification to the admin
            Mail::send('emails.lead', $data, function ($message) {
                $recipients = ['team@hashedsystem.com', 'business@hashedsystem.com'];
                $message->to($recipients)->subject('New Lead');
            });
        }


        return back()->with('success', 'Thank you for your submission!');
    }
}
