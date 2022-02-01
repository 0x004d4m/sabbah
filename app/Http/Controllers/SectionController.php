<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\SectionRequest;

class SectionController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Section");
        $this->crud->setRoute("admin/section");
        $this->crud->setEntityNameStrings('section', 'sections');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('name',[
            'label' => "Name",
            'name' => "name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('title',[
            'label' => "Title",
            'name' => "title",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('text',[
            'label' => "Text",
            'name' => "text",
            'type' => 'textarea'
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(SectionRequest::class);

        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name','attributes' => ['readonly' => 'readonly',],]);
        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addField(['name' => 'text', 'type' => 'textarea', 'label' => 'Text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('name',[
            'label' => "Name",
            'name' => "name",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('title',[
            'label' => "Title",
            'name' => "title",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('text',[
            'label' => "Text",
            'name' => "text",
            'type' => 'textarea'
        ]);
    }
}
