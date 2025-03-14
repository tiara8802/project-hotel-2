<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'user_id', 
        'room_id', 
        'check_in_date', 
        'check_out_date', 
        'status'
    ];

    protected $guarded = ['id'];
    
    public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        public function room()
        {
            return $this->belongsTo(Reservation::class);
        }
}
