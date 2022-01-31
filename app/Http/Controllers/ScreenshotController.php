<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ScreenshotRequest;

class ScreenshotController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Screenshot");
        $this->crud->setRoute("admin/screenshot");
        $this->crud->setEntityNameStrings('screenshot', 'screenshots');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ScreenshotRequest::class);

        $this->crud->addfield([
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(ScreenshotRequest::class);

        $this->crud->addfield([
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);
    }
}
