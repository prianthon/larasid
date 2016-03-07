@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat datang</div>

                <div class="panel-body">
                    <div class="col-md-4">
                      <button type="button" class="btn btn-success btn-lg btn-block">Semua Pelayanan 1 hari jadi</button>
                      <button type="button" class="btn btn-success btn-lg btn-block">Hanya Dilayani di Kantor Desa</button>
                      <button type="button" class="btn btn-success btn-lg btn-block">Administrasi GRATIS</button>
                      <button type="button" class="btn btn-success btn-lg btn-block">Warga Harus Membawa Syarat</button>
                    </div>
                    <div class="col-md-8">
                      <!--kolom kanan-->
                      <div class="panel panel-primary">
                        <div class="panel-heading"><strong>Pelayanan Publik Desa</strong></div>
                        <div class="panel-body">
                      <form class="form-horizontal">
					                    <div class="form-group">
						                    <label for="inputEmail3" class="col-sm-4 control-label">NIK</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" id="inputEmail3" placeholder="">
						                        </div>
					                    </div>
					                    <div class="form-group">
						                    <label for="inputPassword3" class="col-sm-4 control-label">Nama Lengkap</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
						                        </div>
					                    </div>
                              <div class="form-group">
						                    <label for="inputPassword3" class="col-sm-4 control-label">Kebutuhan Pelayanan</label>
						                        <div class="col-sm-8">
						                            <select class="form-control">
                                          <option>-- Klik untuk memilih --</option>
                                          <option>Surat Permohonan KTP F-1.21</option>
                                          <option>Surat Pengantar/Keterangan</option>
                                          <option>Surat Keterangan Bepergian</option>
                                          <option>Surat Keterangan Domisili</option>
                                          <option>Surat Keterangan Tidak Mampu</option>
                                          <option>Surat Pengantar SKCK</option>
                                        </select>
						                        </div>
					                    </div>
					                    <div class="form-group">
						                    <div class="col-sm-offset-4 col-sm-10">
						                        <button type="submit" class="btn btn-default">KIRIM</button>
						                    </div>
					                    </div>
					            </form>
                        </div>
                      </div>
                      <!--kolom kanan-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
