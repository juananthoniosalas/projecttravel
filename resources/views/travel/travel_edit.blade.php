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
                    CRUD Data Pegawai - <strong>EDIT DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
                </div>
                <div class="card-body">
                    <a href="/travel/travel_home" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>


                    <form method="post" action="/travel/update/{{ $travel->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama" value=" {{ $travel->nama }}">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat" value=" {{ $travel->alamat }}">  </textarea>

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="email" value=" {{ $travel->email }}">

                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nomor HP</label>
                            <input type="tel" name="nomorhp" class="form-control" placeholder="nomorhp" value=" {{ $travel->nomorhp }}">

                            @if($errors->has('nomorhp'))
                                <div class="text-danger">
                                    {{ $errors->first('nomorhp')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" placeholder="tanggal" value=" {{ $travel->tanggal }}">

                            @if($errors->has('tanggal'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Gunung</label>
                            <input type="text" name="gunung" class="form-control" placeholder="gunung" value=" {{ $travel->gunung }}">

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
