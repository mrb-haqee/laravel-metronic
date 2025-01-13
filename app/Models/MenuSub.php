<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSub extends Model
{
    /** @use HasFactory<\Database\Factories\MenuSubFactory> */
    use HasFactory;

    protected $table = 'menu_sub';

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
        'indexSort',
        'group',
        'path',
        'namaMenu',
        'statusMenu',
        'idUser',
    ];

    // Tentukan kolom yang tidak bisa diisi
    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
