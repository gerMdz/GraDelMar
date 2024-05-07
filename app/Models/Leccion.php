<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Leccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    protected $guarded = [

    ];

    public function categorias(): BelongsToMany
    {
     return   $this->belongsToMany(
            Categoria::class,
            'categoria_leccion',
            'leccion_id',
            'categoria_id');
    }

    public function nivel(): BelongsTo
    {
        return $this->belongsTo(Nivel::class);
    }


}
