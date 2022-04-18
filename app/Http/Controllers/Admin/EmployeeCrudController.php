<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EmployeeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use phpDocumentor\Reflection\Type;

/**
 * Class EmployeeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EmployeeCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Employee::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/employee');
        CRUD::setEntityNameStrings('Empleado', 'Empleados');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::column('person_id')->label('Nombre');
        $this->crud->addColumn([
            'label'=> 'Nombre',
            'type' => 'select',
            'name' => 'person_id',
            'entity' => 'person',
            'attribute' => 'name',
            'model' => 'App\Models\Person'
        ]);
        //CRUD::column('deparment_id')->label('Departamento');
        $this->crud->addColumn([
            'label'=> 'Departamento',
            'type' => 'select',
            'name' => 'deparment_id',
            'entity' => 'deparment',
            'attribute' => 'name',
            'model' => 'App\Models\Deparment'
        ]);
        CRUD::column('workFor')->label('Empresa');
        CRUD::column('hireDate')->label('Fecha Contratacion');
        CRUD::column('activeState')->label('Estado');



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
        CRUD::setValidation(EmployeeRequest::class);
        CRUD::field('person_id')->label('Persona');
        CRUD::field('deparment_id')->label('Departamento');
        //CRUD::field('activeState')->label('Estado del Empleado')->pivot(true);

        CRUD::field('workFor')->label('Empresa & Accesos');
        $this->crud->addField([
            'name'=> 'accesos',
            'label'=> 'Google Wordspaces',
            'type' => 'checkbox',
            'entity' => false
        ]);
        $this->crud->addField([
            'name'=> 'accesos2',
            'label'=> 'Slack',
            'type' => 'checkbox',
            'entity' => false
        ]);
        $this->crud->addField([
            'name'=> 'accesos3',
            'label'=> 'Jira/Confluence',
            'type' => 'checkbox',
            'entity' => false
        ]);

        CRUD::field('hireDate')->label('Fecha de Contratacion');
        $this->crud->addField([
            'name'=> 'activeState',
            'label'=> 'Estado del Empleado',
            'value'=> true,
        ]);


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
