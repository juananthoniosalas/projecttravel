<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container">
			<div class="card mt-5">
		<center>	<h2 class="mb-0 site-logo"><img src="images/logootiga.png" width="120px" height="120px">Buat Paket Pendakian Baru</h2> </center>

			<div class="col-lg-8 mx-auto my-5">
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
				<a href="/home" class="btn btn-primary">Kembali</a>
<div class="card-body">

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

          <div class="form-group">
            <b>Nama Gunung</b><br/>
            <input type="text" name="nama_gunung">
          </div>

					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>

					<div class="form-group">
						<b>overview</b>
						<textarea class="form-control" name="overview"></textarea>
					</div>

          <div class="form-group">
            <b>Price</b><br/>
            <input type="text" name="price">
          </div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>

				<h4 class="my-5">Data</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nama Gunung</th>
							<th width="1%">File</th>
							<th>Overview</th>
							<th>Price	</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($mountains as $m)
						<tr>
              <td>{{$m->nama_gunung}}</td>
							<td><img width="150px" src="{{ url('/imagee/'.$m->file) }}"></td>
							<td>{{$m->overview}}</td>
              <td>{{$m->price}}</td>
							<td><a class="btn btn-danger" href="/hapus/{{ $m->id }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		</div>
	</div>
	</div>
</body>
</html>
