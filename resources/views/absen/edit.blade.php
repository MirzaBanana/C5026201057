@extends('layout.bahagia')

@section('title', 'ABSEN PEGAWAI')

@section('konten')

@section('judulhalaman', 'EDIT ABSEN')

<h3>Edit Absen</h3>
<a href="/absen" class="btn btn-secondary"> Kembali</a>


<h1>{{ $judul }}</h1>
	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        Pegawai <select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
            @endforeach
        </select><br>
        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" value="{{ $p->Tanggal }}"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br>
		Status <br />
        <input type="radio" id="hadir" name="status" value="H">
        <label for="hadir">Hadir</label><br>
        <input type="radio" id="html" name="status" value="I">
        <label for="html">Izin</label><br>
        <input type="radio" id="css" name="status" value="S" checked="checked">
        <label for="css">Sakit</label><br>
        <input type="radio" id="javascript" name="status" value="A">
        <label for="javascript">Alfa</label>
        <br>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach


    @endsection
