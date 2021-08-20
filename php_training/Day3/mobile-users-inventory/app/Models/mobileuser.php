<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobileuser extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey='MobileNo';
    public $incrementing = false;

}
