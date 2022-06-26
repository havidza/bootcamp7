@component('mail::message')
# Your Transaction Has Been Confirmed

Hai {{ $checkout->User->name }}
<br>
Transaksimu sudah di konfirmasi, sekarang kamu dapat menikmati manfaat dari kelas <b>{{ $checkout->Camp->title }}</b>
@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
