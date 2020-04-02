<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compartiment extends Model
{
    protected $table = 'compartiment';
    protected $primaryKey = 'comp_nummer';
    public $timestamps = false;
}
