<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutus extends Model
{
    public function users(){
        return $this->belongsTo('App\Models\User');
    }}
