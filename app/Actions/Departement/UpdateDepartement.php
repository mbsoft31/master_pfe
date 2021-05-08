<?php


namespace App\Actions\Departement;


use App\Models\Departement;
use Illuminate\Validation\ValidationException;

class UpdateDepartement
{

    /**
     * @param Departement $faculty faculty to update
     * @param array $inputs user inputs
     * @return bool
     * @throws ValidationException
     */
    public function update(Departement $faculty, array $inputs)
    {
        return $faculty->update($inputs);
    }

}
