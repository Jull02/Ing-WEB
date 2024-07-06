<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
