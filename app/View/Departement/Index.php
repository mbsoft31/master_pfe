<?php

namespace App\View\Departement;

use App\Actions\Departement\CreateDepartement;
use App\Actions\Departement\DeleteDepartement;
use App\Actions\Departement\UpdateDepartement;
use App\Models\Departement;
use App\Models\Faculty;
use Livewire\Component;

class Index extends Component
{
    public $create_modal;
    public $edit_modal;
    public $delete_modal;

    public $name;
    public $address;
    public $phone;
    public $faculty_id;

    public $faculties;
    public $departement;

    protected $listeners = [
        "editDepartement",
        "deleteDepartement"
    ];

    protected $rules=[
        'faculty_id' => ['required', 'integer', 'exists:faculties,id'],
        'name' => ['required', 'string', 'min:3', 'unique:faculties,name'],
        'address' => ['nullable', 'string'],
        'phone' => ['nullable', 'min:10', 'max:12']
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

    public function editDepartement(Departement $departement)
    {
        $this->cancel();
        $this->openEditModal();
        $this->departement = $departement;
        $this->name = $departement->name;
        $this->address = $departement->address;
        $this->phone = $departement->phone;
        $this->faculty_id = $departement->faculty_id;
    }

    public function deleteDepartement(Departement $departement)
    {
        $this->cancel();
        $this->openDeleteModal();
        $this->departement = $departement;
        $this->name = $departement->name;
        $this->address = $departement->address;
        $this->phone = $departement->phone;
        $this->faculty_id = $departement->faculty_id;
    }

    public function cancel()
    {
        $this->departement = null;
        $this->closeCreateModal();
        $this->closeEditModal();
        $this->closeDeleteModal();
    }

    public function save()
    {
        $inputs = $this->validate();
        $departement = (new CreateDepartement())->create($inputs);
        $this->closeCreateModal();
    }

    public function edit()
    {
        $inputs = $this->validate([
            'faculty_id' => ['required', 'integer', 'exists:faculties,id'],
            'name' => ['required', 'string', 'min:3'],
            'address' => ['nullable', 'string'],
            'phone' => ['nullable', 'min:10', 'max:12']
        ]);
        $updated = (new UpdateDepartement())->update($this->departement, $inputs);
        $this->closeEditModal();
    }

    public function delete()
    {
        $deleted = (new DeleteDepartement())->delete($this->departement);
        $this->closeDeleteModal();
    }

    public function mount()
    {
        $this->cancel();
        $this->faculties = Faculty::all();
    }
    public function render()
    {
        return view('departement.index',[
            "departements" => Departement::all(),
        ]);
    }
}
