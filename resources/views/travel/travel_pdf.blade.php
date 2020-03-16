<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
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
		<h5>Laporan Customer</h4>
		<h2 class="mb-0 site-logo"><img src="images/logootiga.png" width="120px" height="120px"></h2>
	</center>
	
	<table class='table table-bordered'>
		<thead>
			<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Nomor HP</th>
        <th>Tanggal</th>
        <th>Gunung</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
      @foreach($travel as $t)
      <tr>
          <td>{{ $t->nama }}</td>
          <td>{{ $t->alamat }}</td>
          <td>{{ $t->email }}</td>
          <td>{{ $t->nomorhp }}</td>
          <td>{{ $t->tanggal }}</td>
          <td>{{ $t->gunung }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
