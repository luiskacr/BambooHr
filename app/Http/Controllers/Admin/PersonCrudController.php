<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PersonRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PersonCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PersonCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Person::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/person');
        CRUD::setEntityNameStrings('perfil', 'perfil');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('cardId')->label('ID');
        CRUD::column('name')->label('Nombre');
        CRUD::column('lastname')->label('Apellido');
        CRUD::column('contact')->label('Contactos.');
        CRUD::column('email')->label('Correo E.');
        CRUD::column('birthDate')->label('Cumpleaños');
        CRUD::column('gender')->label('Genero');
        CRUD::column('address')->label('Dirrecion');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    protected function autoSetupShowOperation()
    {
        CRUD::column('cardId')->label('ID');
        CRUD::column('name')->label('Nombre');
        CRUD::column('lastname')->label('Apellido');
        CRUD::column('contact')->label('Contactos.');
        CRUD::column('email')->label('Correo E.');
        CRUD::column('birthDate')->label('Cumpleaños');
        CRUD::column('gender')->label('Genero');
        CRUD::column('address')->label('Dirrecion');

        CRUD::column('description')->type('relationship');
        CRUD::column('lenguages')->type('relationship');

        CRUD::column('title')->type('relationship');
        CRUD::column('where')->type('relationship');
        CRUD::column('endDate')->type('relationship');
        CRUD::column('typeTecnilogy')->type('relationship');

        CRUD::column('title')->type('relationship');
        CRUD::column('description')->type('relationship');
        CRUD::column('startDate')->type('relationship');
        CRUD::column('finishDate')->type('relationship');


    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PersonRequest::class);

        CRUD::field('cardId');
        CRUD::field('name');
        CRUD::field('lastname');
        CRUD::field('contact');
        CRUD::field('email');
        CRUD::field('birthDate');
        CRUD::field('gender');
        CRUD::field('address');


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
