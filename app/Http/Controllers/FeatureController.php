<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\FeatureRequest;

class FeatureController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Feature");
        $this->crud->setRoute("admin/feature");
        $this->crud->setEntityNameStrings('feature', 'features');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('title',[
            'label' => "Title",
            'name' => "title",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('body',[
            'label' => "Body",
            'name' => "body",
            'type' => 'textarea'
        ]);

        $this->crud->setColumnDetails('icon',[
            'label' => "Icon",
            'name' => "icon",
            'type' => 'text'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(FeatureRequest::class);

        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addField(['name' => 'body', 'type' => 'textarea', 'label' => 'Body']);
        $this->crud->addField(['name' => 'icon', 'type' => 'text', 'label' => 'Icon']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(FeatureRequest::class);

        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addField(['name' => 'body', 'type' => 'textarea', 'label' => 'Body']);
        $this->crud->addField(['name' => 'icon', 'type' => 'text', 'label' => 'Icon']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('title',[
            'label' => "Title",
            'name' => "title",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('body',[
            'label' => "Body",
            'name' => "body",
            'type' => 'textarea'
        ]);

        $this->crud->setColumnDetails('icon',[
            'label' => "Icon",
            'name' => "icon",
            'type' => 'text'
        ]);
    }
}
