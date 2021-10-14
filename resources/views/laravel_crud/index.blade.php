@extends('layouts.master')

@section('content')
    <div class="main">
      <div class="main-content">
        <di class="conteiner-fluid">
          <div class="row">
            <div class="col-md-12">
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Buku Tamu</h3>
                  <div class="right">
                  <button type="button" class="btn btn-primary btn-sm float-right" 
                    data-toggle="modal" data-target="#exampleModal">Tambah Data Tamu
                  </button>
                  </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                      <td><strong>No.identitas</strong></td>
                        <td><strong>Nama</strong></td>
                        <td><strong>Jenis Kelamin</strong></td>
                        <td><strong>Instansi</strong></td>
                        <td><strong>Nama instansi/alamat</strong></td>
                        <td><strong>Nomor telepon</strong></td>
                        <td><strong>Jenis keperluan</strong></td>
                        <td><strong>Bidang yang dituju</strong></td>
                        <td><strong>Jumlah pengunjung</strong></td>
                        <td><strong>Aksi</strong></td>
                        <td><strong></strong></td>
											</tr>
										</thead>
										<tbody>
										
                    @foreach($data_laravel_crud as $laravel_crud)
                <tr>
                    <td>{{$laravel_crud->no_identitas}}</td>
                    <td>{{$laravel_crud->nama}}</td>
                    <td>{{$laravel_crud->jenis_kelamin}}</td>
                    <td>{{$laravel_crud->instansi}}</td>
                    <td>{{$laravel_crud->nama_instansi}}</td>
                    <td>{{$laravel_crud->no_tlpn}}</td>
                    <td>{{$laravel_crud->jenis_keperluan}}</td>
                    <td>{{$laravel_crud->bidang}}</td>
                    <td>{{$laravel_crud->jumlah_pengunjung}}</td>
                    <td><a href="/laravel_crud/{{$laravel_crud->id}}/edit" 
                    class="btn btn-warning btn-sm">Edit</a></td>
                    <td><a href="/laravel_crud/{{$laravel_crud->id}}/delete" 
                    class="btn btn-danger btn-sm" onclik="return confirm('Yakin mau dihapus?')">Delete</a></td>
                </tr>
                    @endforeach
										</tbody>
									</table>
								</div>
							</div>
            </div>
          </div>
        </di>
      </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Tamu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/laravel_crud/create" method="POST">
      {{csrf_field()}}

    <div class="row">
      <div class="col-md-6">
        <label for="exampleInputEmail1"><strong>No Identitas</strong><strong style="color:red">*</strong></label>
        <input name="no_identitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
      </div>   
    </div>

    <div class="row">
      <div class="col-md-6">
        <label for="exampleInputEmail1"><strong>Nama</strong><strong style="color:red">*</strong></label>
        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      </div>  

    <div class="col-md-6">
      <label for="exampleFormControlSelect1"><strong>Jenis Kelamin</strong><strong style="color:red">*</strong></label>
      <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      </div>
    </div>

    <div class="row">
      <div class="div col 6">
      <label for="exampleFormControlSelect1"><strong>Instansi</strong><strong style="color:red">*</strong></label>
      <select name="instansi" class="form-control" id="exampleFormControlSelect1">
          <option value="Akademik">Akademik </option>
          <option value="Pemerintah">Pemerintah</option>
          <option value="Swasta">Swasta</option>
          <option value="Individu">Individu </option>
          <option value="LSM/Komunitas">LSM/Komunitas</option>
      </select>
      </div>
      
    <div class="col-md-6">
          <label for="exampleInputEmail1"><strong>Nama instansi/alamat</strong><strong style="color:red">*</strong></label>
          <input name="nama_instansi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>   
    </div>

    <div class="row">
      <div class="col-md-6">
      <label for="exampleInputEmail1"><strong>Nomor yang bisa dihubungi</strong><strong style="color:red">*</strong></label>
      <input name="no_tlpn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1"><strong>Jenis keperluan</strong><strong style="color:red">*</strong></label>
      <select name="jenis_keperluan" class="form-control" id="exampleFormControlSelect1">
        <option value="Anggaran">Anggaran</option>
        <option value="Keuangan">Keuangan</option>
        <option value="Kegiatan">Kegiatan</option>
        <option value="Asset">Asset</option>
        <option value="Diklat">Diklat</option>
        <option value="Sertifikasi Komptetensi dan Penjaminan mutu">Sertifikasi Komptetensi dan Penjaminan mutu</option>
        <option value="Kerjasama Penyelenggara Diklat">Kerjasama Penyelenggara Diklat</option>
        <option value="SDM">SDM</option>
        <option value="Sewa">Sewa</option>
        <option value="Kunjungan Kerja">Kunjungan Kerja</option>
        <option value="Kerjasama penyelenggara diklat">Kerjasama penyelenggara diklat</option>
        <option value="Magang">Magang</option>
      </select>
    </div>

    <div class="row">
      <div class="col-md-6">
      <label for="exampleFormControlSelect1"><strong>Bidang Yang Dituju</strong><strong style="color:red">*</strong></label>
      <select name="bidang" class="form-control" id="exampleFormControlSelect1">
        <option value="Sektretaria">Sektretariat</option>
        <option value="PKT (teknis)"> PKT (teknis)  </option>
        <option value="PKJF (fungsional)">PKJF (fungsional) </option>
        <option value="PKM (pim)">PKM (pim) </option>
        <option value="SKPM (bangdal)">SKPM (bangdal)</option>
        <option value="operasi"> Koperasi </option>
        <option value="LSP">LSP </option>
      </select>
    </div>

    <div class="col-md-6">
      <label for="exampleInputEmail1"><strong>Jumlah Pengujung</strong><strong style="color:red">*</strong></label>
      <input name="jumlah_pengunjung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      </div>
    </div>

        </div>

        <div class="row">

          <div class="col-4">

          </div>

          <div class="col-4">

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
          
          </div>

          <div class="col-4">

          </div>
      
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop
@section('content1')

          @if(session('sukses'))
            <div class="alert alert-success" role="alert">
           {{session('sukses')}}
            </div>
          @endif
            <div class="row">
                <div class="col 6">
                <h3>DATA BUKU TAMU</h3>
                </div>

<!-- Button trigger modal -->
<div class="col 6">
<button type="button" class="btn btn-primary  btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
Tambah Data Tamu
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Tamu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/laravel_crud/create" method="POST">
      {{csrf_field()}}

    <div class="row">
      <div class="col-md-6">
        <label for="exampleInputEmail1"><strong>No Identitas</strong><strong style="color:red">*</strong></label>
        <input name="no_identitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
      </div>   
    </div>

    <div class="row">
      <div class="col-md-6">
        <label for="exampleInputEmail1"><strong>Nama</strong><strong style="color:red">*</strong></label>
        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      </div>  

    <div class="col-md-6">
      <label for="exampleFormControlSelect1"><strong>Jenis Kelamin</strong><strong style="color:red">*</strong></label>
      <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      </div>
    </div>

    <div class="row">
      <div class="div col 6">
      <label for="exampleFormControlSelect1"><strong>Instansi</strong><strong style="color:red">*</strong></label>
      <select name="instansi" class="form-control" id="exampleFormControlSelect1">
          <option value="Akademik">Akademik </option>
          <option value="Pemerintah">Pemerintah</option>
          <option value="Swasta">Swasta</option>
          <option value="Individu">Individu </option>
          <option value="LSM/Komunitas">LSM/Komunitas</option>
      </select>
      </div>
      
    <div class="col-md-6">
          <label for="exampleInputEmail1"><strong>Nama instansi/alamat</strong><strong style="color:red">*</strong></label>
          <input name="nama_instansi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>   
    </div>

    <div class="row">
      <div class="col-md-6">
      <label for="exampleInputEmail1"><strong>Nomor yang bisa dihubungi</strong><strong style="color:red">*</strong></label>
      <input name="no_tlpn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      </div>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1"><strong>Jenis keperluan</strong><strong style="color:red">*</strong></label>
      <select name="jenis_keperluan" class="form-control" id="exampleFormControlSelect1">
        <option value="Anggaran">Anggaran</option>
        <option value="Keuangan">Keuangan</option>
        <option value="Kegiatan">Kegiatan</option>
        <option value="Asset">Asset</option>
        <option value="Diklat">Diklat</option>
        <option value="Sertifikasi Komptetensi dan Penjaminan mutu">Sertifikasi Komptetensi dan Penjaminan mutu</option>
        <option value="Kerjasama Penyelenggara Diklat">Kerjasama Penyelenggara Diklat</option>
        <option value="SDM">SDM</option>
        <option value="Sewa">Sewa</option>
        <option value="Kunjungan Kerja">Kunjungan Kerja</option>
        <option value="Kerjasama penyelenggara diklat">Kerjasama penyelenggara diklat</option>
        <option value="Magang">Magang</option>
      </select>
    </div>

    <div class="row">
      <div class="col-md-6">
      <label for="exampleFormControlSelect1"><strong>Bidang Yang Dituju</strong><strong style="color:red">*</strong></label>
      <select name="bidang" class="form-control" id="exampleFormControlSelect1">
        <option value="Sektretaria">Sektretariat</option>
        <option value="PKT (teknis)"> PKT (teknis)  </option>
        <option value="PKJF (fungsional)">PKJF (fungsional) </option>
        <option value="PKM (pim)">PKM (pim) </option>
        <option value="SKPM (bangdal)">SKPM (bangdal)</option>
        <option value="operasi"> Koperasi </option>
        <option value="LSP">LSP </option>
      </select>
    </div>

    <div class="col-md-6">
      <label for="exampleInputEmail1"><strong>Jumlah Pengujung</strong><strong style="color:red">*</strong></label>
      <input name="jumlah_pengunjung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      </div>
    </div>

        </div>

        <div class="row">

          <div class="col-4">

          </div>

          <div class="col-4">

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
          
          </div>

          <div class="col-4">

          </div>
      
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
            </div>
               <br></br>
                <table class="table table-hover">
                    <tr>
                    
                        <td><strong>No.identitas</strong></td>
                        <td><strong>Nama</strong></td>
                        <td><strong>Jenis Kelamin</strong></td>
                        <td><strong>Instansi</strong></td>
                        <td><strong>Nama instansi/alamat</strong></td>
                        <td><strong>Nomor telepon</strong></td>
                        <td><strong>Jenis keperluan</strong></td>
                        <td><strong>Bidang yang dituju</strong></td>
                        <td><strong>Jumlah pengunjung</strong></td>
                        <td><strong>Aksi</strong></td>
                        <td><strong></strong></td>
                    
                    </tr>

            @foreach($data_laravel_crud as $laravel_crud)
                <tr>
                    <td>{{$laravel_crud->no_identitas}}</td>
                    <td>{{$laravel_crud->nama}}</td>
                    <td>{{$laravel_crud->jenis_kelamin}}</td>
                    <td>{{$laravel_crud->instansi}}</td>
                    <td>{{$laravel_crud->nama_instansi}}</td>
                    <td>{{$laravel_crud->no_tlpn}}</td>
                    <td>{{$laravel_crud->jenis_keperluan}}</td>
                    <td>{{$laravel_crud->bidang}}</td>
                    <td>{{$laravel_crud->jumlah_pengunjung}}</td>
                    <td><a href="/laravel_crud/{{$laravel_crud->id}}/edit" 
                    class="btn btn-warning btn-sm">Edit</a></td>
                    <td><a href="/laravel_crud/{{$laravel_crud->id}}/delete" 
                    class="btn btn-danger btn-sm" onclik="return confirm('Yakin mau dihapus?')">Delete</a></td>
                </tr>
            @endforeach
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

    

