<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ServiceRequest;

class ServiceController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Service");
        $this->crud->setRoute("admin/service");
        $this->crud->setEntityNameStrings('service', 'services');
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
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ServiceRequest::class);

        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addField(['name' => 'body', 'type' => 'textarea', 'label' => 'Body']);

        $this->crud->addfield([
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(ServiceRequest::class);

        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addField(['name' => 'body', 'type' => 'textarea', 'label' => 'Body']);

        $this->crud->addfield([
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
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
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
    }
}
