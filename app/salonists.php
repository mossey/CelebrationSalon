<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salonists extends Model
{
    protected $table="salonists";
    protected $fillable= array("stylistName","stylistSpecialization");
}
