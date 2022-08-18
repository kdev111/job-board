<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function location() {
        return $this->belongsTo(Location::class, 'location');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'companies_tags', 'company', 'tag');
    }
}
