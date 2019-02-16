@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Detail Produk</h3>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Kode Produk :</strong> {{$produk->Kode}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nama Produk :</strong> {{$produk->Nama}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Merk :</strong> {{$produk->Merk}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Harga :</strong> {{$produk->Harga}}
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
        </div>
    @endsection
