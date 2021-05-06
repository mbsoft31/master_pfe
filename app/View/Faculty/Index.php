<?php

namespace App\View\Faculty;

use App\Actions\Faculty\CreateFaculty;
use App\Models\Faculty;
use Livewire\Component;

class Index extends Component
{

    public $name;
    public $address;
    public $phone;

    protected $rules=[
        'name' => ['required', 'string', 'min:3', 'unique:faculties,name'],
        'address' => ['nullable', 'string'],
        'phone' => ['nullable', 'min:10', 'max:12']
    ];

    public function save()
    {
        $inputs = $this->validate();
        $faculty = (new CreateFaculty())->create($inputs);
    }

    public function mount()
    {

    }

    public function render()
    {
        return view('faculty.index',[
            "faculties" => Faculty::all(),
        ]);
    }
}
