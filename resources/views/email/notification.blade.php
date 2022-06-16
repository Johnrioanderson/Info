@component('mail::message')
# New Application
{{ $message->first_name }} {{ $message->last_name }}
<br>
@component('mail::table')
| name | Value |
| -- |--------:|
@foreach($message->except('_token') as $key => $item)
| {{ ucfirst(str_replace('_', ' ', $key))  }} | {{ $item }}
@endforeach
@endcomponent

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
