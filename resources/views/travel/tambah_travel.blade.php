<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2 class="mb-0 site-logo"><img src="../images/logootiga.png" width="120px" height="120px">Form Daftar Pendakian</h2>
                </div>
                <div class="card-body">
                    <a href="/" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/travel/store" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap ..">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat .."></textarea>

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">

                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nomor HP</label>
                            <input type="tel" name="nomorhp" class="form-control" placeholder="Nomor HP">

                             @if($errors->has('nomorhp'))
                                <div class="text-danger">
                                    {{ $errors->first('nomorhp')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">

                             @if($errors->has('tanggal'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Gunung</label>
                            <input type="text" name="gunung" class="form-control" placeholder="Gunung">

                             @if($errors->has('gunung'))
                                <div class="text-danger">
                                    {{ $errors->first('gunung')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
