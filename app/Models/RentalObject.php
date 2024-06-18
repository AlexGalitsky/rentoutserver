<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class RentalObject extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'descr', 'rate', 'object_status', 'object_type', 'area', 'floor', 'floors_number',
        'single_beds', 'double_beds', 'rooms', 'max_guests_per_request', 'max_families_per_time', 'bathrooms', 'min_cost_per_day',
        'bail', 'trip_docs', 'no_children', 'no_pets', 'no_smoking', 'no_alcohol', 'no_party', 'check_in_time', 'check_out_time',
    ];
}