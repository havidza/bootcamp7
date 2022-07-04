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
	<center>
		<h4>Laporan Bulanan Bootcamp Codev8</h4>
		<h5>PT. Codev8 Technology Indonesia</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>User</th>
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
                </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>