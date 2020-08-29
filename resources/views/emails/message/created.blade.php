@component('mail::message')
# Bonjour Monsieur DIAGNE 

The body of your message.
<p> {{ $msg->name }} </p>
<p> {{ $msg->email}} </p>

@component('mail::panel')
{{ $msg->message }}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
