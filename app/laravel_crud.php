<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laravel_crud extends Model
{
    protected $table = 'crud';
    protected $fillable = ['no_identitas','nama','jenis_kelamin','instansi','nama_instansi','no_tlpn','jenis_keperluan','bidang','jumlah_pengunjung'];
}
