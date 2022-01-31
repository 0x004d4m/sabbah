<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\VideoRequest;

class VideoController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Video");
        $this->crud->setRoute("admin/video");
        $this->crud->setEntityNameStrings('video', 'videos');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('thumb',[
            'label' => "Thumb",
            'name' => "thumb",
            'type' => 'image'
        ]);

        $this->crud->setColumnDetails('video_link',[
            'label' => "Video Link", // Table column heading
            'type' => "image",
            'name' => 'video_link',
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(VideoRequest::class);

        $this->crud->addField(['name' => 'video_link', 'type' => 'text', 'label' => 'Video Link']);

        $this->crud->addfield([
            'label' => "Thumb",
            'name' => "thumb",
            'type' => 'image'
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(VideoRequest::class);

        $this->crud->addField(['name' => 'video_link', 'type' => 'text', 'label' => 'Video Link']);

        $this->crud->addfield([
            'label' => "Thumb",
            'name' => "thumb",
            'type' => 'image',
            'upload'=> true,
            'prefix'    => 'uploads/thumb/'
        ]);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('thumb',[
            'label' => "Thumb",
            'name' => "thumb",
            'type' => 'image'
        ]);

        $this->crud->setColumnDetails('video_link',[
            'label' => "Video Link", // Table column heading
            'type' => "image",
            'name' => 'video_link',
        ]);
    }
}
