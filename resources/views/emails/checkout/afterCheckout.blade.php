@component('mail::message')
# Register Camp: {{ $checkout->Camp->title }}

Hai {{ $checkout->User->name }}
<br>
Terimakasih sudah registrasi di kursus <b>{{ $checkout->Camp->title }}</b>, untuk mendapatkan invoice pembelian silahkan klik tombol dibawah ini.

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
