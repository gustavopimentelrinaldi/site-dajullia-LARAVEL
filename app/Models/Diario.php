<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    use HasFactory;

    protected $table = 'diario.diario';

    protected $fillable = [
        'assunto',
        'texto',
    ];
}
