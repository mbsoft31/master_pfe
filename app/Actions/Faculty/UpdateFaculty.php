<?php


namespace App\Actions\Faculty;


use App\Models\Faculty;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UpdateFaculty
{

    /**
     * @param Faculty $faculty faculty to update
     * @param array $inputs user inputs
     * @return bool
     * @throws ValidationException
     */
    public function update(Faculty $faculty, array $inputs)
    {
        return $faculty->update($inputs);
    }


}
