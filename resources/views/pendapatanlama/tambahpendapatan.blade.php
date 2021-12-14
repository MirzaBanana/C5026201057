@extends('layout.bahagia')

@section('title', 'DATA PENDAPATAN')

@section('konten')
	<h3>Data pendapatan</h3>

	<a href="/pendapatan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
        {{ csrf_field() }}
        <div class="container" id="ubah">

            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $c )
                                    <option value="{{ $c->pegawai_id }}"> {{ $c->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Bulan</label>
                        <div class='col-sm-4 input-group date' id='bulan'>
                            <input type="number" class="form-control" name="bulan" required="required" max="12">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Tahun</label>
                        <div class='col-sm-4 input-group date' id='tahun'>
                            <input type="number" class="form-control" name="tahun" required="required" max="12">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Gaji</label>
                        <div class='col-sm-4 input-group date' id='gaji'>
                            <input type="number" class="form-control" name="gaji" required="required" max="12">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Tunjangan</label>
                        <div class='col-sm-4 input-group date' id='tunjangan'>
                            <input type="number" class="form-control" name="tunjangan" required="required" max="12">
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-lg-12'>
                <div class="form-group">
                    <b>Status :</b>
                    <input type="radio" id="h" name="status" value="H">
                    <label for="h">HADIR</label>
                    <input type="radio" id="a" name="status" value="A" checked="checked">
                    <label for="a">TIDAK HADIR</label>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class='col-lg-12'>
                <input type="submit" class="btn btn-green" value="Simpan Data">
            </div>

        </div>

    </form>
@endsection
