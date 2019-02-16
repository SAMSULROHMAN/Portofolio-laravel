@extends('layouts.pdf')
    @section('content')
        @if (!empty($pdf))
            <table>
                <thead border=1>
                    <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Merk</th>
                    <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pdf as $produk)
                        <tr>
                            <td>{{$produk->Kode}}</td>
                            <td>{{$produk->Nama}}</td>
                            <td>{{$produk->Merk}}</td>
                            <td>{{$produk->Harga}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @else
                <p>Tidak ada Data Produk</p>
        @endif
    @endsection
