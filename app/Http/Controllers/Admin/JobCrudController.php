<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class JobCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class JobCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData(){
        return [
            [
                'name' => 'position',
                'label'=> 'Position',
                'type' => 'text'
            ],
            [
                'name' => 'published',
                'label' => 'Published',
                'type' => 'date',
            ],
            [
                'label' => 'City',
                'type'  => 'select',
                'name'  => 'city_id',
                'entity' => 'cities',
                'model'  => 'App\Models\City',
                'attribute' => 'name', 
            ],
            [
                'label' => 'Company',
                'type'  => 'select',
                'name'  => 'company_id',
                'entity' => 'companies',
                'model'  => 'App\Models\Company',
                'attribute' => 'name', 
            ],
            [
                'label' => 'Description',
                'type'  => 'ckeditor',
                'name'  => 'description', 
            ]
        ];

    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Job::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/job');
        CRUD::setEntityNameStrings('job', 'jobs');
        $this->crud->addFields($this->getFieldsData());
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('position');
        CRUD::column('published');
        CRUD::column('created_at');
        CRUD::column('updated_at');
        CRUD::column('city_id');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(JobRequest::class);

        CRUD::field('id');
        CRUD::field('position');
        CRUD::field('published');
        CRUD::field('created_at');
        CRUD::field('updated_at');
        CRUD::field('city_id');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    protected function setupShowOperation()
    {
    // by default the Show operation will try to show all columns in the db table,
    // but we can easily take over, and have full control of what columns are shown,
    // by changing this config for the Show operation
    $this->crud->set('show.setFromDb', false);
    $this->crud->addColumns($this->getFieldsData(TRUE));
    }
}
