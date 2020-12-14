<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    public function positions(){
        return $this -> belongsToMany(Position::class);
    }
}
//{!! Form::select('country',['Albania' => 'Albania','Kosovo'=>'Kosovo','Germany'=>'Germany','France'=>'France'],'Kosovo',['class'=>'form-control','placeholder'=>'Select Country']) !!}
