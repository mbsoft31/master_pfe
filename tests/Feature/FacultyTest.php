<?php

namespace Tests\Feature;

use App\Actions\Faculty\CreateFaculty;
use App\Actions\Faculty\DeleteFaculty;
use App\Actions\Faculty\UpdateFaculty;
use App\Models\Faculty;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FacultyTest extends TestCase
{

    use RefreshDatabase;

    /**
     * Testing CreateFaculty Action
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function test_faculty_action_create()
    {
        $data = [
            "name" => "Sci-Tech",
            "description" => "bla bla",
            "phone" => "0666666666",
        ];

        $faculty = (new CreateFaculty)->create($data);

        self::assertTrue(Faculty::whereName('Sci-Tech')->exists());
        self::assertEquals("Sci-Tech", $faculty->name);
    }

    /**
     * Testing UpdateFaculty Action
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function test_faculty_action_update()
    {
        $data = [
            "name" => "Sci-Tech",
            "description" => "bla bla",
            "phone" => "0666666666",
        ];
        $faculty = (new CreateFaculty)->create($data);

        $input = [
            "name" => "Science and Technology",
            "description" => "bla bla",
            "phone" => "0666666655",
        ];

        $saved = (new UpdateFaculty())->update($faculty, $input);
        $faculty->fresh();

        self::assertTrue($saved);
        self::assertTrue(Faculty::whereName('Science and Technology')->exists());
        self::assertFalse(Faculty::whereName('Sci-Tech')->exists());
        self::assertEquals("Science and Technology", $faculty->name);
    }

    /**
     * Testing DeleteFaculty Action
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function test_faculty_action_delete()
    {
        $data = [
            "name" => "Sci-Tech",
            "description" => "bla bla",
            "phone" => "0666666666",
        ];
        $faculty = (new CreateFaculty)->create($data);

        $deleted = (new DeleteFaculty())->delete($faculty);

        self::assertTrue($deleted);
        self::assertFalse(Faculty::whereName('Sci-Tech')->exists());
    }

}
