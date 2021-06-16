<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $fillable=['name','dob','address','city','state','country','phonenumber','semester','clgname','course','role','pid','cover','avtar','email'];
}
