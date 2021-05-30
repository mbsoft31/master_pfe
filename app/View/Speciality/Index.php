<?php

namespace App\View\Speciality;

use App\Actions\Speciality\CreateSpeciality;
use App\Actions\Speciality\DeleteSpeciality;
use App\Actions\Speciality\UpdateSpeciality;
use App\Models\Departement;
use App\Models\Speciality;
use Livewire\Component;

class Index extends Component
{
    public $create_modal;
    public $edit_modal;
    public $delete_modal;

    public $name;
    public $departement_id;
    public $degree;

    public $departements;
    public $speciality;

    protected $listeners = [
        "editSpeciality",
        "deleteSpeciality"
    ];

    protected $rules=[
        'departement_id' => ['required', 'integer', 'exists:departements,id'],
        'name' => ['required', 'string', 'min:3', 'unique:specialities,name'],
        'degree' => ['string'],

    ];
    public function openCreateModal()
    {
        $this->create_modal = true;
    }

    public function closeCreateModal()
    {
        $this->create_modal = false;
    }

    public function openEditModal()
    {
        $this->edit_modal = true;
    }

    public function closeEditModal()
    {
        $this->edit_modal = false;
    }

    public function openDeleteModal()
    {
        $this->delete_modal = true;
    }

    public function closeDeleteModal()
    {
        $this->delete_modal = false;
    }

    public function editSpeciality(Speciality $speciality)
    {
        $this->cancel();
        $this->openEditModal();
        $this->speciality = $speciality;
        $this->name = $speciality->name;
        $this->degree = $speciality->degree;
        $this->departement_id = $speciality->departement_id;
    }

    public function deleteSpeciality(Speciality $speciality)
    {
        $this->cancel();
        $this->openDeleteModal();
        $this->speciality = $speciality;
        $this->name = $speciality->name;
        $this->degree = $speciality->degree;
        $this->departement_id = $speciality->departement_id;
    }

    public function cancel()
    {
        $this->speciality = null;
        $this->closeCreateModal();
        $this->closeEditModal();
        $this->closeDeleteModal();
    }

    public function save()
    {
        $inputs = $this->validate();
        $speciality = (new CreateSpeciality())->create($inputs);
        $this->closeCreateModal();
    }

    public function edit()
    {
        $inputs = $this->validate([
            'departement_id' => ['required', 'integer', 'exists:faculties,id'],
            'name' => ['required', 'string', 'min:3', 'unique:specialities,name'],
            'degree' => ['required', 'string'],

        ]);
        $updated = (new UpdateSpeciality())->update($this->speciality, $inputs);
        $this->closeEditModal();
    }
    public function delete()
    {
        $deleted = (new DeleteSpeciality())->delete($this->speciality);
        $this->closeDeleteModal();
    }

    public function mount()
    {
        $this->cancel();
        $this->departements = Departement::all();
    }

    public function render()
    {
        return view('speciality.index',[
            "specialities" => Speciality::all(),
        ]);


    }
}
