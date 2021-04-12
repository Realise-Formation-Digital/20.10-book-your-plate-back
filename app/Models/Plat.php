<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'typeplat',
        'deliverydate',
        'description',
        'specialinfo',
        'price',
        'image',
    ];

    protected $hidden = [
        'timestamps',
        'created_at',
        'updated_at',

    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
