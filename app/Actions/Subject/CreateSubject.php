<?php


namespace App\Actions\Subject;


use App\Models\Subject;
use Illuminate\Validation\ValidationException;

class CreateSubject
{

    /**
     * @param array $inputs user inputs
     * @throws ValidationException
     */
    public function create(array $inputs)
    {
        return Subject::create($inputs);
    }
}
