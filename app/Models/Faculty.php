<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validated_data)
 */
class Faculty extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function departements()
    {
        return $this->hasMany(Departement::class);
    }

}
