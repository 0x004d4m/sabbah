<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Feature extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable =[
        'title',
        'body',
        'icon'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
