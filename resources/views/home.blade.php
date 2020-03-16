@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        Hello {{ Auth::user()->name }} <br/>
                        Anda Memakai Email : {{ Auth::user()->email }} <br/>
                    </div>
                    <a href="/travel/travel_home" class="btn btn-primary">DATA KONSUMEN</a>
                    <a href="/upload" class="btn btn-primary">BUAT PAKET BARU</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
