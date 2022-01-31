<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Plan extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable =[
        'title',
        'price',
        'period',
        'description',
        'button_text',
        'button_link'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
