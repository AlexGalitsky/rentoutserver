<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class RentalObjectAddress extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rental_object_id', 'string_address', 'json_address', 'entrance', 'intercom', 'floor', 'apartment', 'comment',
    ];
}