<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recado extends Model
{
    use HasFactory;

    protected $table = 'recado.recado';

    protected $fillable = [
        'assunto',
        'texto',
    ];
}
