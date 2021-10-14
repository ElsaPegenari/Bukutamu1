@extends('layouts.master')

@section('content')

<h3>Edit Buku Tamu</h3>
  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif


<div class="row">
  <div class="col-lg-6">
    <form action="/laravel_crud/{{$laravel_crud->id}}/update" method="POST">
      {{csrf_field()}}

    <div class="row">
        <div class="col-md-6">
          <label for="exampleInputEmail1">No Identitas<strong style="color:red">*</strong></label>
          <input name="no_identitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$laravel_crud->no_identitas}}" required>
        </div>   
    </div>

    <div class="row">
        <div class="col-md-6">
          <label for="exampleInputEmail1">Nama<strong style="color:red">*</strong></label>
          <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$laravel_crud->nama}}">
        </div>  

        <div class="col-md-6">
          <label for="exampleFormControlSelect1">Jenis Kelamin<strong style="color:red">*</strong></label>
          <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
            <option value="Laki-laki" @if($laravel_crud->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
            <option value="Perempuan" @if($laravel_crud->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
          </select>
        </div>
    </div>

    <div class="row">
      <div class="div col 6">
        <label for="exampleFormControlSelect1">Instansi<strong style="color:red">*</strong></label>
          <select name="instansi" class="form-control" id="exampleFormControlSelect1">
            <option value="Akademik" @if($laravel_crud->instansi == 'Akademik') selected @endif>Akademik </option>
            <option value="Pemerintah" @if($laravel_crud->instansi == 'Pemerintah') selected @endif>Pemerintah</option>
            <option value="Swasta" @if($laravel_crud->instansi == 'Swasta') selected @endif>Swasta</option>
            <option value="Individu" @if($laravel_crud->instansi == 'Individu') selected @endif>Individu </option>
            <option value="LSM/Komunitas" @if($laravel_crud->instansi == 'LSM/Komunitas') selected @endif>LSM/Komunitas</option>
          </select>
      </div>
  
      <div class="col-md-6">
        <label for="exampleInputEmail1">Nama instansi/alamat<strong style="color:red">*</strong></label>
        <input name="nama_instansi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$laravel_crud->nama_instansi}}">
      </div>   
    </div>

    <div class="row">
      <div class="col-md-6">
        <label for="exampleInputEmail1">Nomor yang bisa dihubungi<strong style="color:red">*</strong></label>
        <input name="no_tlpn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$laravel_crud->no_tlpn}}">
      </div>
    </div>

    <div class="row">
      <label for="exampleFormControlSelect1">Jenis keperluan<strong style="color:red">*</strong></label>
        <select name="jenis_keperluan" class="form-control" id="exampleFormControlSelect1">
          <option value="Anggaran" @if($laravel_crud->jenis_keperluan == 'Anggaran') selected @endif>Anggaran</option>
          <option value="Keuangan" @if($laravel_crud->jenis_keperluan == 'Keuangan') selected @endif>Keuangan</option>
          <option value="Kegiatan" @if($laravel_crud->jenis_keperluan == 'Kegiatan') selected @endif>Kegiatan</option>
          <option value="Asset" @if($laravel_crud->jenis_keperluan == 'Asset') selected @endif>Asset</option>
          <option value="Diklat" @if($laravel_crud->jenis_keperluan == 'Diklat') selected @endif>Diklat</option>
          <option value="Sertifikasi Komptetensi dan Penjaminan mutu" @if($laravel_crud->jenis_keperluan == 'Sertifikasi Komptetensi dan Penjaminan mutu') selected @endif>Sertifikasi Komptetensi dan Penjaminan mutu</option>
          <option value="Kerjasama Penyelenggara Diklat" @if($laravel_crud->instansi == 'Kerjasama Penyelenggara Diklat') selected @endif>Kerjasama Penyelenggara Diklat</option>
          <option value="SDM" @if($laravel_crud->jenis_keperluan == 'SDM') selected @endif>SDM</option>
          <option value="Sewa" @if($laravel_crud->jenis_keperluan == 'Sewa') selected @endif>Sewa</option>
          <option value="Kunjungan Kerja" @if($laravel_crud->jenis_keperluan == 'Kunjungan Kerja') selected @endif>Kunjungan Kerja</option>
          <option value="Kerjasama penyelenggara diklat" @if($laravel_crud->jenis_keperluan == 'Kerjasama penyelenggara diklat') selected @endif>Kerjasama penyelenggara diklat</option>
          <option value="Magang" @if($laravel_crud->jenis_keperluan == 'Magang') selected @endif>Magang</option>
        </select>
    </div>

    <div class="row">
      <div class="col-md-6">
        <select name="bidang" class="form-control" id="exampleFormControlSelect1">
          <label for="exampleFormControlSelect1">Bidang Yang Dituju<strong style="color:red">*</strong></label>

            <option value="Sektretaria"  @if($laravel_crud->bidang == 'Sektretariat') selected @endif>Sektretariat</option>
            <option value="PKT (teknis)"  @if($laravel_crud->bidang == 'PKT (teknis)') selected @endif> PKT (teknis)  </option>
            <option value="PKJF (fungsional)"  @if($laravel_crud->bidang == 'PKJF (fungsional)') selected @endif>PKJF (fungsional) </option>
            <option value="PKM (pim)"  @if($laravel_crud->bidang == 'PKM (pim)') selected @endif>PKM (pim) </option>
            <option value="SKPM (bangdal)"  @if($laravel_crud->bidang == 'SKPM (bangdal)') selected @endif>SKPM (bangdal)</option>
            <option value="operasi"  @if($laravel_crud->bidang == 'operasi') selected @endif> Koperasi </option>
            <option value="LSP"  @if($laravel_crud->bidang == 'LSP') selected @endif>LSP </option>

        </select>
      </div>

      <div class="col-md-6">
        <label for="exampleInputEmail1">Jumlah Pengujung<strong style="color:red">*</strong></label>
          <input name="jumlah_pengunjung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""  value="{{$laravel_crud->jumlah_pengunjung}}">
      </div>
    </div>

</div>

  <div class="row">

  <div class="col-4">

  </div>

  <div class="col-4">


        
  </div>

  <div class="col-4">

  </div>
      
      </div>
      </div>
    <br>
      <button type="submit" class="btn btn-warning btn-sm">Update</button>
    </form>
      </div>
    </div>
  </div>
</div>
@endsection

    

   
    