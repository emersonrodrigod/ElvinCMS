@component('mail::message')

<h1>{{ $subject }}</h1>
<p>{{ $text }}</p>

{{ config('app.name') }}
@endcomponent
