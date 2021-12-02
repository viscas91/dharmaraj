@component('mail::message')
Name: {{ $name }}
Email: {{ $email }}

{{ $message }}

Thanks,<br>

{{-- {{ config('app.name') }} --}}
@endcomponent
