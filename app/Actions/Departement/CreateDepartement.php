<?php


namespace App\Actions\Departement;


use App\Models\Departement;
use Illuminate\Validation\ValidationException;

class CreateDepartement
{

    /**
     * @param array $inputs user inputs
     * @throws ValidationException
     */
    public function create(array $inputs)
    {
        return Departement::create($inputs);
    }
}
