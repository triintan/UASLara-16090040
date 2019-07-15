<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Blog extends Model
{
	use Softdeletes;
	protected $dates =['deleted_at'];


    protected $table = 'tb_konten';
    protected $fillable = [
     'judul','kategori','isi','foto',
    ];
}
