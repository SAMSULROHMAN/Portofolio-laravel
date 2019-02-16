@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{route('biodata.index')}}" class="nav-link">Karyawan</a></li>
                    <li class="list-group-item"><a href="{{route('produk.index')}}" class="nav-link">Produk</a></li>
                    <li class="list-group-item"><a href="{{url('/pdf')}}" class="nav-link">Cetak Pdf Produk</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
