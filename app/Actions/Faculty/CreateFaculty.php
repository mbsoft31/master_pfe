<?php


namespace App\Actions\Faculty;


use App\Models\Faculty;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CreateFaculty
{

    protected $rules=[
        'name' => ['required', 'string', 'min:3', 'unique:faculties,name'],
        'address' => ['nullable', 'string'],
        'phone' => ['nullable', 'min:10', 'max:12']
    ];

    /**
     * @param array $inputs user inputs
     * @throws ValidationException
     */
    public function create(array $inputs)
    {
        $validated_data = $this->validate($inputs);
        return Faculty::create($validated_data);
    }

    /**
     * @param array $inputs inputs to validates
     * @return array validated data
     * @throws ValidationException
     */
    public function validate(array $inputs)
    {
        return Validator::make($inputs, $this->rules)->validate();
    }

}
