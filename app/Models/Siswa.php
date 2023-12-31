<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Siswa extends Model
{
    use HasFactory;
    protected $primaryKey='nisn';
    protected $keyType='string';
    protected $guarded=[];
    public function pengaduan(){
        return $this->hasMany(Pengaduan::class,'nisn');
    }
}
