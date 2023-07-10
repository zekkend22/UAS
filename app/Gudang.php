<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = "db_gudang";

    protected $primaryKey = 'id_gudang';

    protected $fillable = ['gudang_kode', 'gudang_barang',
    'gudang_jns', 'gudang_jml'];
}
