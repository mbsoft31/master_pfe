<?php


namespace App\Actions\Speciality;


use App\Models\Speciality;
use Illuminate\Validation\ValidationException;

class CreateSpeciality
{

    /**
     * @param array $inputs user inputs
     * @throws ValidationException
     */
    public function create(array $inputs)
    {
        return Speciality::create($inputs);
    }
}
