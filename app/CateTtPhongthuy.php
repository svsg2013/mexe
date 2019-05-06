<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class CateTtPhongthuy extends Model

{
//fillable chi dung trong eloquent
    protected $fillable = [
        'name',
        'metaName',
        'description',
        'alias'
    ];

}

