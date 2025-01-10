<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PassengerInfo;

class UserInfo extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'user_info';
    
    public function pass_info()
    {
         return $this->hasMany(PassengerInfo::class,'ui_id');
    }
  
}