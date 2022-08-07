<!DOCTYPE html>
<html>
<head>
	<title>Sertifikat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
			@php $i=1 @endphp
			@foreach($checkouts as $checkout)
            <div style="width:950px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
                <div style="width:900px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
                       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
                       <br><br>
                       <span style="font-size:25px"><i>This is to certify that</i></span>
                       <br><br>
                       <span style="font-size:30px"><b>{{ $checkout->User->name }}</b></span><br/><br/>
                       <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
                       <span style="font-size:30px">{{ $checkout->Camp->title }} ( Belajar Dasar Azure Cloud)</span> <br/><br/>
                       <span style="font-size:20px">with score of <b>100%</b></span> <br/><br/><br/><br/>
                       <span style="font-size:25px"><i>dated</i></span><br>
                        @php $date = date('d M Y'); @endphp
                        <span style="font-size:30px">@php echo $date; @endphp</span>
                </div>
                </div>
            @endforeach
                
</body>
</html>

