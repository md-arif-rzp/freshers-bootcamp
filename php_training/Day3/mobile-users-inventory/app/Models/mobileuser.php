<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobileuser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'UserNname',
        'UserEmail',
        'MobileNo'
    ];
    public $timestamps=false;
    protected $primaryKey='MobileNo';
    public $incrementing = false;

}
