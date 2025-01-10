<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cruise extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'cruise_booking';
    protected $fillable = array(
        
    );

    public $timestamps = false;
}
