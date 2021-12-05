@extends('layouts.master')

@section('title', 'Insert Data')

@section('content')
<div class="page-heading">
    <h3>Insert Data</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card col-lg-6">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" enctype="multipart/form-data"
                                    action="app/system/mobil/add-mobil.php" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Code Barang</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" class="form-control" name="codeBarang">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Nama Barang</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="nama-barang" class="form-control" name="namaBarang"
                                                    placeholder="Nama Barang" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Jumlah Stok</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="jumlah-stok" class="form-control" name="jumlahStok"
                                                    placeholder="Jumlah Stok" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tanggal Kadeluarsa</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="date" id="tanggal-kadeluarsa" class="form-control" name="tanggalKadeluarsa"
                                                    placeholder="Tanggal Kadeluarsa" required="">
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" name="addMobil"
                                                    class="btn btn-primary me-1 mb-1">Save</button>
                                                <a href="/crud"
                                                    class="btn btn-light-secondary me-1 mb-1">Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
