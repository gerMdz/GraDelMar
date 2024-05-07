<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nivel extends Model
{
    protected $table = 'niveles';
    use HasFactory;

    protected $fillable = ['nombre'];
    protected $guarded = [];

    public function lecciones(): HasMany
    {
        return $this->hasMany(Leccion::class);
    }
}
