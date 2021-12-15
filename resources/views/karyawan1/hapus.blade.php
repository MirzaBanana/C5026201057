@extends('layout.bahagia')

@section('title', 'Hapus Data Karyawa')

@section('konten')n


<h3> Hapus Data Karyawan </h3>
	<a href="/karyawan1" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

    <h3>Apakah anda yakin ingin menghapus record ini?</h3>
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

