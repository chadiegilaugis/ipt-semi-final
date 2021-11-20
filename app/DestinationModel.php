<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinationModel extends Model
{

    protected $fillable = ['name','address','type','rating'];

    protected $table = 'destinations';
}
