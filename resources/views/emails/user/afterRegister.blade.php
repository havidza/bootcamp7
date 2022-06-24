@component('mail::message')
# Welcome !

Hai {{ $user->name }}
<br>
Selamat Datang di Codev8, akun kamu sudah berhasil dibuat. Sekarang kamu dapat memilih kursus sesuai hatimu!
@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
