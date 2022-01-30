<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Feature extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable =[
        'image',
        'name',
        'position',
        'media1',
        'media2',
        'media3',
        'media4',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
