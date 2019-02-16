@extends('layouts.pdf2')
    @section('content')
        @if (!empty($pdf))
            <table>
                <thead border=1>
                    <tr>
                    <th>Nama Karyawan</th>
                    <th>Avatar/Foto</th>
                    <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pdf as $biodata)
                        <tr>
                            <td>{{$biodata->namaSiswa}}</td>
                            <td>
                                <img src="{{asset('upload/biodata/'.$biodata->avatar)}}" width="75px" height="75px" alt="avatar">
                            </td>
                            <td>{{$biodata->alamatSiswa}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @else
                <p>Tidak ada Data Karyawan</p>
        @endif
    @endsection
