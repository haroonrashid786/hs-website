<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #ffffff; /* Default background color */
        }
        table {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            vertical-align: top;
            border-bottom: 1px solid #f0f0f0;
        }
        th {
            background-color: #0d6efd; /* Header background color */
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
        }
        td {
            font-size: 14px;
        }
        .header {
            background-color: #062344; /* Header background color */
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #f8f9fa;
            color: #666666;
            font-size: 12px;
            text-align: center;
            padding: 10px;
        }

        /* Dark mode styles */
        @media (prefers-color-scheme: dark) {
            body, html {
                background-color: #121212; /* Dark mode background color */
                color: #ffffff; /* Dark mode text color */
            }
            table, th, td {
                background-color: #1f1f1f; /* Dark mode table background color */
                color: #ffffff; /* Dark mode table text color */
            }
            .header {
                background-color: #1a1a1a; /* Dark mode header background color */
            }
            .footer {
                background-color: #2b2b2b; /* Dark mode footer background color */
            }
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td class="header">
            <img src="{{ asset('assets/images/Logo.png') }}" alt="{{ config('app.name') }} Logo" style="max-width: 150px;">
        </td>
    </tr>
    <tr>
        <td class="content">
            <h2>New @if(!empty($lead) && $lead->type == 'lead') Lead @else Contact Message @endif Received</h2>
            <p><strong>Name:</strong> {{ $lead->name }}</p>
            <p><strong>Company:</strong> {{ $lead->company }}</p>
            <p><strong>Email:</strong> {{ $lead->email }}</p>
            <p><strong>Mobile:</strong> {{ $lead->mobile }}</p>
            @if(!empty($lead->hear_about))
            <p><strong>Hear About:</strong> {{ $lead->hear_about }}</p>
            @endif
            <p><strong>Message:</strong></p>
            <p>{{ $lead->message }}</p>
        </td>
    </tr>
    <tr>
        <td class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </td>
    </tr>
</table>

</body>
</html>
