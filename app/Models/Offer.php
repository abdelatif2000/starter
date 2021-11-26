<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
     protected $table="offers";
     protected $fillable=['name_offer','price','photo'] ;
     protected $hidden=["create_at"];   
     public $timestamps=false; 
}
