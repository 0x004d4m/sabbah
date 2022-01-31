<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\PlanRequest;

class PlanController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Plan");
        $this->crud->setRoute("admin/plan");
        $this->crud->setEntityNameStrings('plan', 'plans');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('title',[
            'label' => "Title",
            'name' => "title",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('price',[
            'label' => "Price",
            'name' => "price",
            'type' => 'number'
        ]);

        $this->crud->setColumnDetails('period',[
            'label' => "Period",
            'name' => "period",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('button_text',[
            'label' => "Button Text",
            'name' => "button_text",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('button_link',[
            'label' => "Button Link",
            'name' => "button_link",
            'type' => 'image'
        ]);

        $this->crud->setColumnDetails('description',[
            'label' => "Description",
            'name' => "description",
            'type' => 'textarea'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PlanRequest::class);

        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addField(['name' => 'price', 'type' => 'number', 'label' => 'Price']);
        $this->crud->addField(['name' => 'period', 'type' => 'text', 'label' => 'Period']);
        $this->crud->addField(['name' => 'button_text', 'type' => 'text', 'label' => 'Button Text']);
        $this->crud->addField(['name' => 'button_link', 'type' => 'text', 'label' => 'Button Link']);
        $this->crud->addField(['name' => 'description', 'type' => 'textarea', 'label' => 'Description']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(PlanRequest::class);

        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addField(['name' => 'price', 'type' => 'number', 'label' => 'Price']);
        $this->crud->addField(['name' => 'period', 'type' => 'text', 'label' => 'Period']);
        $this->crud->addField(['name' => 'button_text', 'type' => 'text', 'label' => 'Button Text']);
        $this->crud->addField(['name' => 'button_link', 'type' => 'text', 'label' => 'Button Link']);
        $this->crud->addField(['name' => 'description', 'type' => 'textarea', 'label' => 'Description']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('title',[
            'label' => "Title",
            'name' => "title",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('price',[
            'label' => "Price",
            'name' => "price",
            'type' => 'number'
        ]);

        $this->crud->setColumnDetails('period',[
            'label' => "Period",
            'name' => "period",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('button_text',[
            'label' => "Button Text",
            'name' => "button_text",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('button_link',[
            'label' => "Button Link",
            'name' => "button_link",
            'type' => 'image'
        ]);

        $this->crud->setColumnDetails('description',[
            'label' => "Description",
            'name' => "description",
            'type' => 'textarea'
        ]);
    }
}
