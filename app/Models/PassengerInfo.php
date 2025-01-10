<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PassengerInfo extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'passenger_info';
  
}