<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model {
    use HasFactory;

    protected $fillable = [
        'nome', 'professor_id', 'curso_id'
    ];

    public function curso() {
        return $this->belongsTo(Curso::class);
    }

    public function professor() {
        return $this->belongsTo(Professor::class);
    }
}
