@component('mail::message')

<h2>Welcome to our system  {{ $data['name'] }}</h2>

<h5>Your registration was succesfull</h5>

{{-- @component('mail::button', ['url' => 'localhost::8000/login'])
Log In
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
