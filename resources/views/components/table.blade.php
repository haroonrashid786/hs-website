<!-- resources/views/components/table.blade.php -->
 <div class="relative" style="overflow: auto;">
<div class="rounded-lg ">
                <table class="w-full text-sm !text-left rtl:text-left min-w-[900px]  rounded-lg ">
                    <thead class="text-sm border-b">
            <tr>
                @foreach ($headers as $header)
                <th scope="col" class="!text-left border-r w-fit px-4 py-3 message_col" style="text-align: left;">
                        {{ $header }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
</div>

