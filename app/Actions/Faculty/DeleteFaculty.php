<?php


namespace App\Actions\Faculty;


use App\Models\Faculty;

class DeleteFaculty
{

    /**
     * @param Faculty $faculty faculty to delete
     * @return bool|null
     */
    public function delete(Faculty $faculty): ?bool
    {
        return $faculty->delete();
    }

}
