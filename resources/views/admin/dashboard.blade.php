@extends('layouts.app-admin')
@section('content')
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 offset-0">
                <div class="card">
                    <div class="card-header">
                        List Camps Member Codev8
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User Code</th>
                                    <th>User</th>
                                    <th>Unique Code</th>
                                    <th>Camp</th>
                                    <th>Price</th>
                                    <th>Register Data</th>
                                    <th>Paid Status</th>
                                    <th>Contact User</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @forelse ($checkouts as $checkout)
                                    <tr>
                                        <td>USER-0{{ $i++ }}</td>
                                        <td>{{ $checkout->User->name }}</td>
                                        <td>{{ $checkout->uniquecode }}</td>
                                        <td>{{ $checkout->Camp->title }}</td>
                                        <td>Rp. {{ $checkout->Camp->price }}.000,00</td>
                                        <td>{{ $checkout->created_at->format('d M y') }}</td>
                                        <td>
                                            @if ($checkout->is_paid)
                                                <span class="badge bg-success">Sudah Bayar</span>
                                            @else
                                                <span class="badge bg-danger">Belum Bayar</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="https://wa.me/{{ $checkout->phone_number }}?text=Hi, saya Admin Codev ingin konfirmasi mengenai pembayaran kelas {{ $checkout->Camp->title }} oleh Kak {{ $checkout->User->name  }}. Harap untuk segera dibayar. Terimakasih." class="btn btn-success">
                                                Contact
                                            </a>
                                        </td>
                                        <td>
                                            @if (!$checkout->is_paid)
                                            <form action="{{ route('admin.checkout.update', $checkout->id) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-primary">
                                                    Approve
                                                </button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No Camps Registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <a href="{{ route('admin.cetak-pdf') }}" class="offset-11"><button>Print PDF</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection