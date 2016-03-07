@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat datang</div>

                <div class="panel-body">
                    <div class="col-md-6">
                      <button type="button" class="btn btn-success btn-lg btn-block">Semua Pelayanan 1 hari jadi</button>
                      <button type="button" class="btn btn-success btn-lg btn-block">Hanya Dilayani di Kantor Desa</button>
                      <button type="button" class="btn btn-success btn-lg btn-block">Administrasi Kependudukan GRATIS</button>
                      <button type="button" class="btn btn-success btn-lg btn-block">Warga Harus Membawa Syarat</button>
                    </div>
                    <div class="col-md-6">
                      <!--kolom kanan-->
                      <div class="panel panel-primary">
                        <div class="panel-heading">Pelayanan Publik Desa</div>
                        <div class="panel-body">
                      <form class="form-horizontal">
					                    <div class="form-group">
						                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						                        <div class="col-sm-10">
						                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						                        </div>
					                    </div>
					                    <div class="form-group">
						                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						                        <div class="col-sm-10">
						                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						                        </div>
					                    </div>
					                    <div class="form-group">
						                    <div class="col-sm-offset-2 col-sm-10">
						                        <div class="checkbox">
							                          <label>
							                            <input type="checkbox"> Remember me
							                          </label>
						                        </div>
						                    </div>
					                    </div>
					                    <div class="form-group">
						                    <div class="col-sm-offset-2 col-sm-10">
						                        <button type="submit" class="btn btn-default">Sign in</button>
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
