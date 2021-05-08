<?php


namespace App\Actions\Departement;


use App\Models\Departement;

class DeleteDepartement
{

    /**
     * @param Departement $faculty faculty to delete
     * @return bool|null
     */
    public function delete(Departement $faculty): ?bool
    {
        return $faculty->delete();
    }

}
