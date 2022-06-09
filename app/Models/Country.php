<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Country extends Model
{
    public function getAll(): Collection
    {
        $data = $this->orderBy('country_name')
                     ->pluck('country_name', 'id');

        return $data;
    }
}
