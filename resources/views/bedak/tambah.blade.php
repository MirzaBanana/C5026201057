@extends('layout.bahagia')

@section('title', 'TAMBAH DAFTAR PEGAWAI')

@section('konten')


<h3> TAMBAH PEGAWAI </h3>
	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/bedak/store" method="post">
        {{ csrf_field() }}
        <div class="container" id="tambah">
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="merk" class="col-sm-2 control-label">Merk Bedak</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='merk'>
                            <input type="text" class="form-control" name="merk" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="stock" class="col-sm-2 control-label">Stock Bedak</label>
                        <div class="col-sm-1"> : </div>
                        <div class='col-sm-4 input-group' id='stock'>
                            <input type="number" class="form-control" name="stock" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
                        <div class="col-sm-1"> : </div>
                        <div class="col-sm-2">
                            <input type="radio" id="y" name="tersedia" value="Y">
                            <label for="y">YA</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="radio" id="t" name="tersedia" value="T" checked="checked">
                            <label for="t">TIDAK</label>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-green" value="Simpan Data">
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection

