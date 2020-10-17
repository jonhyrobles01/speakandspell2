<?php

namespace App\Traits;

use App\Models\Students;

Trait StudentBirthday
{
    public function BirthdayListbyMonth($month)
    {
        return Students::where('activo', 1)
        ->whereMonth('nacimiento', $month)
        ->orderby('nacimiento', 'asc')
        ->get();
    }
}