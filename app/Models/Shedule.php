<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'location_id',
        'time_from',
        'time_to',
    ];

    /**
     * Get the user associated with the Shedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the location associated with the Shedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
