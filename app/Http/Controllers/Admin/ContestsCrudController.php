<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContestsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ContestsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ContestsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Contests::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/contests');
        CRUD::setEntityNameStrings('concursante', 'concursantes');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::column('jobOffers_id')->label('Cartes');
        $this->crud->addColumn([
            'label'=> 'Cartel',
            'type' => 'select',
            'name'=> 'jobOffers_id',
            'entity'=> 'jobOffers',
            'attribute' =>'title',
            'model' => 'App\Models\JobOffers'
        ]);
        //CRUD::column('person_id')->label('Perfil');
        $this->crud->addColumn([
            'label'=> 'Perfil',
            'type' => 'select',
            'name'=> 'person_id',
            'entity'=> 'person',
            'attribute' =>'name',
            'model' => 'App\Models\Person'
        ]);
        $this->crud->addColumn([
            'label' => 'Etapa'
        ]);
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
        CRUD::setValidation(ContestsRequest::class);

        CRUD::field('jobOffers_id')->label('Cartel');
        CRUD::field('person_id')->label('Perfil');

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
}
