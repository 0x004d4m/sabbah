<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\TeamRequest;

class TeamController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Team");
        $this->crud->setRoute("admin/team");
        $this->crud->setEntityNameStrings('team', 'teams');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('name',[
            'label' => "Name",
            'name' => "name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('position',[
            'label' => "Position",
            'name' => "position",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);

        $this->crud->setColumnDetails('media1',[
            'label' => "Media 1",
            'type' => "image",
            'name' => 'media1',
        ]);

        $this->crud->setColumnDetails('media2',[
            'label' => "Media 2",
            'type' => "image",
            'name' => 'media2',
        ]);

        $this->crud->setColumnDetails('media3',[
            'label' => "Media 3",
            'type' => "image",
            'name' => 'media3',
        ]);

        $this->crud->setColumnDetails('media4',[
            'label' => "Media 4",
            'type' => "image",
            'name' => 'media4',
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(TeamRequest::class);

        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        $this->crud->addField(['name' => 'position', 'type' => 'text', 'label' => 'Position']);
        $this->crud->addField(['name' => 'media1', 'type' => 'text', 'label' => 'Media 1']);
        $this->crud->addField(['name' => 'media2', 'type' => 'text', 'label' => 'Media 2']);
        $this->crud->addField(['name' => 'media3', 'type' => 'text', 'label' => 'Media 3']);
        $this->crud->addField(['name' => 'media4', 'type' => 'text', 'label' => 'Media 4']);

        $this->crud->addfield([
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(TeamRequest::class);

        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        $this->crud->addField(['name' => 'position', 'type' => 'text', 'label' => 'Position']);
        $this->crud->addField(['name' => 'media1', 'type' => 'text', 'label' => 'Media 1']);
        $this->crud->addField(['name' => 'media2', 'type' => 'text', 'label' => 'Media 2']);
        $this->crud->addField(['name' => 'media3', 'type' => 'text', 'label' => 'Media 3']);
        $this->crud->addField(['name' => 'media4', 'type' => 'text', 'label' => 'Media 4']);

        $this->crud->addfield([
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('name',[
            'label' => "Name",
            'name' => "name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('position',[
            'label' => "Position",
            'name' => "position",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);

        $this->crud->setColumnDetails('media1',[
            'label' => "Media 1",
            'type' => "image",
            'name' => 'media1',
        ]);

        $this->crud->setColumnDetails('media2',[
            'label' => "Media 2",
            'type' => "image",
            'name' => 'media2',
        ]);

        $this->crud->setColumnDetails('media3',[
            'label' => "Media 3",
            'type' => "image",
            'name' => 'media3',
        ]);

        $this->crud->setColumnDetails('media4',[
            'label' => "Media 4",
            'type' => "image",
            'name' => 'media4',
        ]);
    }
}
