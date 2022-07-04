@extends('layouts.app-admin')
@section('content')
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-11 offset-0">
                <div class="card">
                    <div class="card-header">
                        List Camps Member Codev8
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Camp</th>
                                    <th>Price</th>
                                    <th>Register Data</th>
                                    <th>Paid Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                    <tr>
                                        <td>{{ $checkout->User->name }}</td>
                                        <td>{{ $checkout->Camp->title }}</td>
                                        <td>IDR {{ $checkout->Camp->price }}k</td>
                                        <td>{{ $checkout->created_at->format('d M y') }}</td>
                                        <td>
                                            @if ($checkout->is_paid)
                                                <span class="badge bg-success">Sudah Bayar</span>
                                            @else
                                                <span class="badge bg-danger">Belum Bayar</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!$checkout->is_paid)
                                            <form action="{{ route('admin.checkout.update', $checkout->id) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-primary btn-sm">
                                                    Atur Ke Bayar
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