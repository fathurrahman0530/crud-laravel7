@extends('layouts.master')

@section('title', 'Show Data')

@section('content')
    <div class="page-heading">
        <h3>Show Data</h3>
    </div>
    <div class="page-content">
        <a href="crud/insert" class="btn btn-primary">Tambah Data</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Code Barang</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
