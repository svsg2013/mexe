<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsProduct extends Model
{
    public $fillable = ['id_new','id_product'];
    public $timestamps = false;
}
