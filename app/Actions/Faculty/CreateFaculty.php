<?php


namespace App\Actions\Faculty;


use App\Models\Faculty;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CreateFaculty
{
    /**
     * @param array $inputs user inputs
     * @throws ValidationException
     */
    public function create(array $inputs)
    {
        return Faculty::create($inputs);
    }

}
