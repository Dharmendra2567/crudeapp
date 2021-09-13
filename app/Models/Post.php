<?php


namespace App\Models;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   // use HasFactory;
    protected $table='posts';  
    protected $fillable = [
        'name','address','symb','sname','dob','eng','nep','phy','chem','net','math','pro'];
}


