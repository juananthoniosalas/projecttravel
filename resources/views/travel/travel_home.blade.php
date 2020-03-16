<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>TIGADEWA</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2 class="mb-0 site-logo"><img src="../images/logootiga.png" width="120px" height="120px">List Customer</h2>
                </div>
                <div class="card-body">
                    <a href="/travel/tambah_travel" class="btn btn-primary">Daftar Form</a>
                    <a href="/home" class="btn btn-primary">Kembali</a>
                    <a href="/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Nomor HP</th>
                                <th>Tanggal</th>
                                <th>Gunung</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($travel as $t)
                            <tr>
                                <td>{{ $t->nama }}</td>
                                <td>{{ $t->alamat }}</td>
                                <td>{{ $t->email }}</td>
                                <td>{{ $t->nomorhp }}</td>
                                <td>{{ $t->tanggal }}</td>
                                <td>{{ $t->gunung }}</td>
                                <td>
                                    <a href="/travel/edit/{{ $t->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/travel/hapus/{{ $t->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
