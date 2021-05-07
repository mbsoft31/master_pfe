<?php

namespace App\View\Faculty;

use App\Actions\Faculty\CreateFaculty;
use App\Actions\Faculty\DeleteFaculty;
use App\Actions\Faculty\UpdateFaculty;
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

    public $faculty;

    protected $listeners = [
        "editFaculty",
        "deleteFaculty"
    ];

    protected $rules=[
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

    public function editFaculty(Faculty $faculty)
    {
        $this->cancel();
        $this->openEditModal();
        $this->faculty = $faculty;
        $this->name = $faculty->name;
        $this->address = $faculty->address;
        $this->phone = $faculty->phone;
    }

    public function deleteFaculty(Faculty $faculty)
    {
        $this->cancel();
        $this->openDeleteModal();
        $this->faculty = $faculty;
        $this->name = $faculty->name;
        $this->address = $faculty->address;
        $this->phone = $faculty->phone;
    }

    public function cancel()
    {
        $this->faculty = null;
        $this->closeCreateModal();
        $this->closeEditModal();
        $this->closeDeleteModal();
    }

    public function save()
    {
        $inputs = $this->validate();
        $faculty = (new CreateFaculty())->create($inputs);
        $this->closeCreateModal();
    }

    public function edit()
    {
        $inputs = $this->validate([
            'name' => ['required', 'string', 'min:3'],
            'address' => ['nullable', 'string'],
            'phone' => ['nullable', 'min:10', 'max:12']
        ]);
        $updated = (new UpdateFaculty())->update($this->faculty, $inputs);
        $this->closeEditModal();
    }

    public function delete()
    {
        $deleted = (new DeleteFaculty())->delete($this->faculty);
        $this->closeDeleteModal();
    }

    public function mount()
    {
        $this->cancel();
    }

    public function render()
    {
        return view('faculty.index',[
            "faculties" => Faculty::all(),
        ]);
    }
}
