@extends('layout.bahagia')

@section('title', 'DETAIL DAFTAR bedak')

@section('konten')
<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<a href="\bedak" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($bedak as $p)

        <div class="col-sm-3">Merk </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <label> {{ $p->merkbedak }}</label> </div>
        <div class="col-sm-3">Stock</div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <label>{{ $p->stockbedak }}</label> </div>
        <div class="col-sm-3">Tersedia </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <label>{{ $p->tersedia }}</label> </div>




	@endforeach


</body>
</html>
@endsection
