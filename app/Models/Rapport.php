<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rapport extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function ion():HasMany
    {
        return $this->hasMany(Rapport::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
}
