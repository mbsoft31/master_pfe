<?php


namespace App\Actions\Speciality;


use App\Models\Speciality;

class DeleteSpeciality
{

    /**
     * @param Speciality $departement departement to delete
     * @return bool|null
     */
    public function delete(Speciality $departement): ?bool
    {
        return $departement->delete();
    }

}
