<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;

    // Nama tabel di database
    protected $table = 'menu';

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
        'indexSort',
        'grupMenu',
        'namaMenu',
        'statusMenu',
        'idUser',
    ];

    // Tentukan kolom yang tidak bisa diisi
    protected $guarded = [];

    public function subMenu()
    {
        return $this->hasMany(MenuSub::class, 'idMenu', 'id');
    }
}
