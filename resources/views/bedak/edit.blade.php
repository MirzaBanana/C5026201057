@extends('layout.bahagia')
@section('title', 'Data Bedak')
@section('judulhalaman', 'EDIT DATA Bedak')

@section('konten')
    <a href="/bedak"> Kembali</a>

    <br />
    <br />

    @foreach ($bedak as $p)
        <form action="/bedak/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->kodebedak }}">
            <div class="container" id="ubah">
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Merk Bedak</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='merk'>
                                <input type="text" class="form-control" required="required" name="merk"
                                    value="{{ $p->merkbedak }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg-12'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Stock Bedak</label>
                            <div class="col-sm-1">:</div>
                            <div class='col-sm-4 input-group date' id='stock'>
                                <input type="number" class="form-control" required="required" name="stock"
                                    value="{{ $p->stockbedak }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
                            <div class="col-sm-1"> : </div>
                            <div class="col-sm-2">
                                <input type="radio" id="y" name="tersedia" value="Y" @if ($p->tersedia === 'Y') checked="checked" @endif>
                                <label for="y">Ya</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" id="t" name="tersedia" value="T" @if ($p->tersedia === 'T') checked="checked" @endif>
                                <label for="t">TIDAK</label><br>
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
    @endforeach
@endsection
