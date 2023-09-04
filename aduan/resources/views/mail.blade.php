@component('mail::message')

@foreach ($komen as $komentar)
Aduan anda ditanggapi 
<b>{{ $komentar->user->name }}</b>
@component('mail::panel')
"{{ $komentar->comments }}"
@endcomponent

@component('mail::subcopy')
{{ $komentar->created_at }}
@endcomponent

@endforeach

Thanks,<br>
{{ config('app.name') }}
@endcomponent