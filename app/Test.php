<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $table = 'tests';
    protected $fillable = ['name'];
}
