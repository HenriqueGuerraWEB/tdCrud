<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comissao extends Model
{
    use HasFactory;
    protected $table = 'comissoes';
    protected $fillable = [
        'title', 'body'
    ];
}
