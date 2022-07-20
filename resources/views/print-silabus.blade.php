<!DOCTYPE html>
<html>
<head>
	<title>Silabus Codev8</title>
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
		<h4>S I L A B U S </h4>
	</center>
 
    Pembuat : PT. Codev8 Technology Indonesia <br>
    Tahun   : 2022 <br><br>
    
    
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Jenis Bootcamp</th>
                <th>Kelas</th>
                <th>Materi Pembelajaran</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
				<tr><td rowspan="2">{{ $i++ }}</td>
                <td rowspan="2">Baru Belajar</td>
                <td rowspan="2">Belajar Dasar Azure Cloud</td>
                <td> Pengertian Komputasi Awan</td>
            </tr>
            <tr>
                <td>Manfaat Komputasi Awan</td>
            </tr>
            <tr><td rowspan="2">{{ $i++ }}</td>
                <td rowspan="2">Belajar Nagih</td>
                <td rowspan="2">Belajar Dasar Azure Cloud</td>
                <td> Pengertian Komputasi Awan</td>
            </tr>
            <tr>
                <td>Manfaat Komputasi Awan</td>
            </tr>
		</tbody>
	</table>
</body>
</html>