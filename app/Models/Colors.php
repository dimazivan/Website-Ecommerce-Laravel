<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    use HasFactory;
    protected $table = "colors";
    protected $fillable = [
       'umkms_id',
       'name',
    ];
    public function umkms()
    {
        return $this->belongsto('App\Models\Umkms');
    }
}
