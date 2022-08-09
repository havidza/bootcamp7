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
		<h4>Materi Bootcamp Online Codev8</h4>
        <h5>Belajar Dasar Dasar Cloud</h5>
	</center>
 
    Pembuat : PT. Codev8 Technology Indonesia <br>
    Tahun   : 2022 <br><br>
    
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Header</th>
                <th>Penjelasan Materi</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
            @foreach($camp_feeds as $cf)
				<tr><td>{{ $i++ }}</td>
                <td>{{ $cf->header }}</td>
                <td><p align="justify">{{ strip_tags( $cf->feed )}}</p></td>
            </tr>
            @endforeach
		</tbody>
	</table>
  
</body>
</html>