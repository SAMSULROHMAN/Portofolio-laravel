@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Edit Biodata Karyawan</h3>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whopps! </strong>there where some problems with your input. <br>
                    <ul>
                        @foreach ($errors as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('produk.update',$produk->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <strong>Kode Produk :</strong>
                        <input type="text" name="Kode" class="form-control" value="{{$produk->Kode}}">
                    </div>
                    <div class="col-md-12">
                        <strong>Nama Produk :</strong>
                        <input type="text" name="Nama" class="form-control" value="{{$produk->Nama}}">
                    </div>
                    <div class="col-md-12">
                        <strong>Merk :</strong>
                        <input type="text" name="Merk" class="form-control" value="{{$produk->Merk}}">
                    </div>
                    <div class="col-md-12">
                        <strong>Harga :</strong>
                        <input type="text" name="Harga" class="form-control" value="{{$produk->Harga}}">
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
