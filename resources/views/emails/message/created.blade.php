@component('mail::message')
# Bonjour Monsieur DIAGNE 

The body of your message.
<p> {{ $name }} </p>
<p> {{ $email}} </p>

@component('mail::panel')
{{ $msg }}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
