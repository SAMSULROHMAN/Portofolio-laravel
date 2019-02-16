@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>New Produk </h3>
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

            <form class="" action="{{ route('produk.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <strong>Kode Produk :</strong>
                        <input type="text" name="Kode" class="form-control" placeholder="Kode Produk">
                    </div>
                    <div class="col-md-12">
                        <strong>Nama :</strong>
                        <input type="text" name="Nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="col-md-12">
                        <strong>Merk :</strong>
                        <input type="text" name="Merk" class="form-control" placeholder="Merk">
                    </div>
                    <div class="col-md-12">
                        <strong>Harga :</strong>
                        <input type="number" name="Harga" class="form-control" placeholder="Harga">
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('produk.index')}}" class="btn btn-sm btn-success">Back</a>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
