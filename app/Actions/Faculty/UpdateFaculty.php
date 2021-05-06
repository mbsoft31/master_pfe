<?php


namespace App\Actions\Faculty;


use App\Models\Faculty;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UpdateFaculty
{
    protected $rules=[
        'name' => ['required', 'string', 'min:3', 'unique:faculties,name'],
        'address' => ['nullable', 'string'],
        'phone' => ['nullable', 'min:10', 'max:12']
    ];

    /**
     * @param Faculty $faculty faculty to update
     * @param array $inputs user inputs
     * @return bool
     * @throws ValidationException
     */
    public function update(Faculty $faculty, array $inputs)
    {
        $validated_data = $this->validate($inputs);
        return $faculty->update($validated_data);
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
