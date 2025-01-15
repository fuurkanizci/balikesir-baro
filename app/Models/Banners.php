<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'button_1',
        'button_2',
        'title_2',
        'sub_title_2',
        'button_1_2',
        'button_2_2',
    ];
}
