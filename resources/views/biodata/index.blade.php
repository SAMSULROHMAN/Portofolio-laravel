@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>List Biodata Karyawan</h3>
                </div>
                <div class="col-md-1">
                    <a href="{{ url('/home')}}" class="btn btn-sm btn-outline-primary">Home</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('biodata.create')}}" class="btn btn-sm btn-outline-success">New Biodata</a>
                </div>

            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif

            <table class="table table-hover table-sm">
                <tr>
                    <th width="50px">No</th>
                    <th width="300px">Nama Karyawan</th>
                    <th>Avatar</th>
                    <th>Alamat Karyawan</th>
                    <th width="180px">Action</th>
                </tr>

                @foreach ($biodatas as $biodata)
                    <tr>
                        <td><b>{{++$i}}</b></td>
                        <td>{{$biodata->namaSiswa}}</td>
                        <td>
                           <img src="{{asset('upload/biodata/'.$biodata->avatar)}}" width="75px" height="75px" alt="avatar">
                        </td>
                        <td>{{$biodata->alamatSiswa}}</td>
                        <td>
                            <form action="{{ route('biodata.destroy', $biodata->id)}}" method="post">
                                <a class="btn btn-sm btn-success" href="{{ route('biodata.show',$biodata->id) }}">Show</a>
                                 <a class="btn btn-sm btn-warning" href="{{ route('biodata.edit',$biodata->id) }}">Edit</a>
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

        {{ $biodatas->links() }}
        </div>
    @endsection
