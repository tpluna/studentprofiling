<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model

{
    use HasFactory;
    protected $table = 'students';

    protected $guarded = [];

}
