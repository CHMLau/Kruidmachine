<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kruid extends Model
{
    public $incrementing = false;
    protected $table = 'kruid';
    protected $primaryKey = 'kruid';
    public $timestamps = false;
    
    public function getKruid(){
    }
}
