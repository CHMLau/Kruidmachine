<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mix extends Model
{
    public $incrementing = false;
    protected $table = 'mix';
    protected $primaryKey = 'naam';
    public $timestamps = false;
}
