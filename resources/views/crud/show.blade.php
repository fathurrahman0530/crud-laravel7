@extends('layouts.master')

@section('title', 'Show Data')

@section('content')
<div class="page-heading">
    <h3>Show Data</h3>
</div>
<div class="page-content">
    <a href="{{ route('crud.insert') }}" class="btn btn-primary">Tambah Data</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Code Barang</th>
                <th>Nama Barang</th>
                <th>Stok Barang</th>
                <th>Tanggal Kadaluarsa</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>BRG0001</td>
                <td>Good Day Botol</td>
                <td>85 Stok</td>
                <td>25 - 05 - 2022</td>
                <td>
                    <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="" class="btn btn-light"><i class="fas fa-edit"></i></a>
                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
