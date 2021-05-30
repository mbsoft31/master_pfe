<?php

namespace App\View\Subject;
use App\Actions\Subject\CreateSubject;
use App\Models\Speciality;
use App\Models\Subject;
use Livewire\Component;

class Index extends Component
{
    public $create_modal;

    public $title;
    public $degree;
    public $speciality_id;
    public $description;
    public $keywords;

    public $specialities;
    public $subject;

    protected $rules=[
        'title' =>['required', 'string',  'unique:subjects,title'],
        'degree' => [ 'string'],
        'speciality_id' =>['required', 'integer', 'exists:specialities,id'],
        'description' => ['required', 'string', ],
        'keywords' => ['required', 'string'],

    ];

    public function save()
    {
        $inputs = $this->validate();
        $subject = (new CreateSubject())->create($inputs);

    }

    public function mount()
    {

        $this->specialities = Speciality::all();
    }
    public function render()
    {

        return view('subject.index',[
            "subjects" => Subject::all(),
        ]);
    }
}
