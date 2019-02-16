@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>List Produk</h3>
                </div>
                <div class="col-md-1">
                    <a href="{{ url('/home')}}" class="btn btn-sm btn-outline-primary">Home</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('produk.create')}}" class="btn btn-sm btn-outline-success">New Produk</a>
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
                    <th width="300px">Kode Produk</th>
                    <th>Nama</th>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th width="180px">Action</th>
                </tr>

                @foreach ($produks as $produk)
                    <tr>
                        <td><b>{{++$i}}</b></td>
                        <td>{{$produk->Kode}}</td>
                        <td>{{$produk->Nama}}</td>
                        <td>{{$produk->Merk}}</td>
                        <td>{{$produk->Harga}}</td>
                        <td>
                            <form action="{{ route('produk.destroy', $produk->id)}}" method="post">
                                <a class="btn btn-sm btn-success" href="{{ route('produk.show',$produk->id) }}">Show</a>
                                 <a class="btn btn-sm btn-warning" href="{{ route('produk.edit',$produk->id) }}">Edit</a>
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

        {{ $produks->links() }}
        </div>
    @endsection
