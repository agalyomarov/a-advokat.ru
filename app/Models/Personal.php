<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'personals';
    public $timestamps = false;
    protected function publishing(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => boolval($value),
            set: fn ($value) => boolval($value),
        );
    }
}
