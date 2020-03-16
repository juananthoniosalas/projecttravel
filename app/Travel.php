<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travel';

    protected $fillable = ['nama','alamat','email','nomorhp','tanggal','gunung'];
}
