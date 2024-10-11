<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hobby extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'beschreibung'];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
