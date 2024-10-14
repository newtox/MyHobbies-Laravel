<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'style'];

    public function hobbies(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Hobby');
    }

    public function filteredHobbies(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Hobby')->wherePivot('tag_id', $this->id)->orderBy('updated_at', 'DESC');
    }
}
