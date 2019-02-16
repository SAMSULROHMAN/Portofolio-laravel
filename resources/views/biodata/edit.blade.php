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

            <form enctype="multipart/form-data" action="{{ route('biodata.update',$biodata->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <strong>Nama Karyawan :</strong>
                        <input type="text" name="namaSiswa" class="form-control" value="{{$biodata->namaSiswa}}">
                    </div>
                    <div class="col-md-12">
                        <strong>Avatar</strong>
                        <input type="file" name="avatar" value="{{$biodata->avatar}}">
                    </div>
                    <div class="col-md-12">
                        <strong>Alamat Karyawan :</strong>
                        <textarea name="alamatSiswa" class="form-control" cols="80" rows="8" value="{{$biodata->alamatSiswa}}"></textarea>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
