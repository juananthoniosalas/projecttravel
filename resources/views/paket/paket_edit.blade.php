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
                    <a href="/paket_upload" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>


                    <form method="post" action="/update/{{ $mountains->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama Gunung</label>
                            <input type="name" class="form-control" name="nama_gunung" value=" {{ $mountains->nama_gunung }}">

                            @if($errors->has('nama_gunung'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_gunung')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="file" class="form-control"  value=" {{ $mountains->file }}">

                            @if($errors->has('file'))
                                <div class="text-danger">
                                    {{ $errors->first('file')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Overview</label>
                            <textarea name="overview" class="form-control"  value=" {{ $mountains->overview }}">  </textarea>

                             @if($errors->has('overview'))
                                <div class="text-danger">
                                    {{ $errors->first('overview')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control"  value=" {{ $mountains->price }}">

                            @if($errors->has('price'))
                                <div class="text-danger">
                                    {{ $errors->first('price')}}
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
