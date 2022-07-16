<!DOCTYPE html>
<html>
<head>
	<title>Laporan Bulanan Codev8</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    {{-- <img src="{{ asset('images/logo.png') }}" width="20%"> --}}
    @foreach($checkouts as $checkout)
    <div class="container">
    
    Dari : <b>PT. Codev8 Technology Indonesia</b><br>
        Nomor Invoice : <b>{{ $checkout->uniquecode }}</b><br><br>
        Dengan nama : <b>{{ $checkout->User->name }}</b><br>
        dan email : <b>{{ $checkout->User->email }}</b><br>
    
    </div>
    @endforeach <br><br>
    Dengan data yang tertera sebagai berikut : <br><br>
	<table class='table table-border'>
		<thead>
			<tr>
				<th>No</th>
                <th>Camp</th>
                <th>Price</th>
                <th>Register Data</th>
                <th>Paid Status</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($checkouts as $checkout)
				<tr><td>{{ $i++ }}</td>
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
                </tr>
            @endforeach
		</tbody>
	</table>
    <br>
    <p>Silahkan membayar melalui <b>Indomaret dan Alfamart</b> dengan menunjukan nomor <b>Invoice</b>. Lalu kirimkan bukti pembayaran melalui <b>Contact Support Admin</b> yang terdapat pada dashboard</p>
</body>
</html>

