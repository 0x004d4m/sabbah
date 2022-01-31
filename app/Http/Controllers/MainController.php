<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\MainRequest;

class MainController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Main");
        $this->crud->setRoute("admin/main");
        $this->crud->setEntityNameStrings('main', 'mains');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('title',[
            'label' => "Title",
            'name' => "title",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('title_small',[
            'label' => "Title Small",
            'name' => "title_small",
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

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);

        $this->crud->setColumnDetails('features_title1',[
            'label' => "Features Title 1",
            'name' => "features_title1",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_icon1',[
            'label' => "Features Icon 1",
            'name' => "features_icon1",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_description1',[
            'label' => "Features Description 1",
            'name' => "features_description1",
            'type' => 'textarea'
        ]);

        $this->crud->setColumnDetails('features_title2',[
            'label' => "Features Title 2",
            'name' => "features_title2",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_icon2',[
            'label' => "Features Icon 2",
            'name' => "features_icon2",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_description2',[
            'label' => "Features Description 2",
            'name' => "features_description2",
            'type' => 'textarea'
        ]);

        $this->crud->setColumnDetails('features_title3',[
            'label' => "Features Title 3",
            'name' => "features_title3",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_icon3',[
            'label' => "Features Icon 3",
            'name' => "features_icon3",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_description3',[
            'label' => "Features Description 3",
            'name' => "features_description3",
            'type' => 'textarea'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(MainRequest::class);

        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addField(['name' => 'title_small', 'type' => 'text', 'label' => 'Title Small']);
        $this->crud->addField(['name' => 'button_text', 'type' => 'text', 'label' => 'Button Text']);
        $this->crud->addfield(['name' => "button_link", 'type' => 'text', 'label' => "Button Link"]);
        $this->crud->addField(['name' => 'image', 'type' => 'image', 'label' => 'Image']);
        $this->crud->addField(['name' => 'features_title1', 'type' => 'text', 'label' => 'Features Title 1']);
        $this->crud->addField(['name' => 'features_icon1', 'type' => 'text', 'label' => 'Features Icon 1']);
        $this->crud->addField(['name' => 'features_description1', 'type' => 'textarea', 'label' => 'Features Description 1']);
        $this->crud->addField(['name' => 'features_title2', 'type' => 'text', 'label' => 'Features Title 2']);
        $this->crud->addField(['name' => 'features_icon2', 'type' => 'text', 'label' => 'Features Icon 2']);
        $this->crud->addField(['name' => 'features_description2', 'type' => 'textarea', 'label' => 'Features Description 2']);
        $this->crud->addField(['name' => 'features_title3', 'type' => 'text', 'label' => 'Features Title 3']);
        $this->crud->addField(['name' => 'features_icon3', 'type' => 'text', 'label' => 'Features Icon 3']);
        $this->crud->addField(['name' => 'features_description3', 'type' => 'textarea', 'label' => 'Features Description 3']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(MainRequest::class);

        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addField(['name' => 'title_small', 'type' => 'text', 'label' => 'Title Small']);
        $this->crud->addField(['name' => 'button_text', 'type' => 'text', 'label' => 'Button Text']);
        $this->crud->addfield(['name' => "button_link", 'type' => 'text', 'label' => "Button Link"]);
        $this->crud->addField(['name' => 'image', 'type' => 'image', 'label' => 'Image']);
        $this->crud->addField(['name' => 'features_title1', 'type' => 'text', 'label' => 'Features Title 1']);
        $this->crud->addField(['name' => 'features_icon1', 'type' => 'text', 'label' => 'Features Icon 1']);
        $this->crud->addField(['name' => 'features_description1', 'type' => 'textarea', 'label' => 'Features Description 1']);
        $this->crud->addField(['name' => 'features_title2', 'type' => 'text', 'label' => 'Features Title 2']);
        $this->crud->addField(['name' => 'features_icon2', 'type' => 'text', 'label' => 'Features Icon 2']);
        $this->crud->addField(['name' => 'features_description2', 'type' => 'textarea', 'label' => 'Features Description 2']);
        $this->crud->addField(['name' => 'features_title3', 'type' => 'text', 'label' => 'Features Title 3']);
        $this->crud->addField(['name' => 'features_icon3', 'type' => 'text', 'label' => 'Features Icon 3']);
        $this->crud->addField(['name' => 'features_description3', 'type' => 'textarea', 'label' => 'Features Description 3']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('title',[
            'label' => "Title",
            'name' => "title",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('title_small',[
            'label' => "Title Small",
            'name' => "title_small",
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

        $this->crud->setColumnDetails('image',[
            'label' => "Image",
            'name' => "image",
            'type' => 'image'
        ]);

        $this->crud->setColumnDetails('features_title1',[
            'label' => "Features Title 1",
            'name' => "features_title1",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_icon1',[
            'label' => "Features Icon 1",
            'name' => "features_icon1",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_description1',[
            'label' => "Features Description 1",
            'name' => "features_description1",
            'type' => 'textarea'
        ]);

        $this->crud->setColumnDetails('features_title2',[
            'label' => "Features Title 2",
            'name' => "features_title2",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_icon2',[
            'label' => "Features Icon 2",
            'name' => "features_icon2",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_description2',[
            'label' => "Features Description 2",
            'name' => "features_description2",
            'type' => 'textarea'
        ]);

        $this->crud->setColumnDetails('features_title3',[
            'label' => "Features Title 3",
            'name' => "features_title3",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_icon3',[
            'label' => "Features Icon 3",
            'name' => "features_icon3",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('features_description3',[
            'label' => "Features Description 3",
            'name' => "features_description3",
            'type' => 'textarea'
        ]);
    }
}
