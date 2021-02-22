<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    use HasFactory;

    protected $fillable = [ 'Name', 'Gender', 'Date_of_Birth', 'Blood_Type', 'Mobile_Number' , 'Email' , 
    'Address'];
}
