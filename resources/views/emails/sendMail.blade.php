<x-mail::message>
# Introduction
Name:{{ $maildata['name'] }} <br>
Price:{{ $maildata['price'] }} <br>
Quantity:{{ $maildata['quantity'] }} <br>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
