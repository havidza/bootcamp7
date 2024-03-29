@extends('layouts.app')

@section('content')
<br><br>
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                   @forelse ($checkouts as $checkout)
                    <tr class="align-middle">
                        <td width="18%">
                        <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{ $checkout->Camp->title }}</strong>
                            </p>
                            <p>
                                {{ $checkout->created_at->format('d M Y') }}
                            </p>
                        </td>
                        <td>
                            <strong>Rp. {{ $checkout->Camp->price }}k</strong>
                        </td>
                        <td>
                            @if ($checkout->is_paid)
                                <strong class="text-success">Pembayaran Berhasil</strong>
                            @else
                                <strong>Menunggu Pembayaran</strong>
                            @endif
                        </td>
                        @if ($checkout->is_paid && $checkout->camp_id == 1) 
                            <td>
                            <a href="{{ route('user.class') }}" class="btn btn-primary"> Go To Class</a>
                            <td><a href="{{ route('user.invoice-done') }}" class="btn btn-primary">Invoice PDF</a></td>
                            </td>
                        @elseif ($checkout->is_paid && $checkout->camp_id == 2)
                            <td>
                            <a href="{{ route('user.class2') }}" class="btn btn-primary"> Go To Class</a>
                            <td><a href="{{ route('user.invoice-done') }}" class="btn btn-primary">Invoice PDF</a></td>
                        @else
                        </td>
                        <td><a href="{{ route('user.invoice') }}" class="btn btn-primary">Invoice PDF</a></td>
                        @endif
                        <td>
                            <a href="https://wa.me/081227360292?text=Hi, saya [nama] ingin bertanya tentang kelas {{ $checkout->Camp->title }}" class="btn btn-success">
                                Contact Support
                            </a>
                        </td>
                    </tr>
                   @empty
                        <tr colspan="5">
                            <td>No Data</td>
                        </tr>
                   @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
</section>


@endsection