<?php


namespace App\Actions\Speciality;


use App\Models\Speciality;
use Illuminate\Validation\ValidationException;

class UpdateSpeciality
{

    /**
     * @param Speciality $departement departement to update
     * @param array $inputs user inputs
     * @return bool
     * @throws ValidationException
     */
    public function update(Speciality $departement, array $inputs)
    {
        return $departement->update($inputs);
    }

}
