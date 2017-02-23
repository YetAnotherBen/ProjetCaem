<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\Activity_webRequest as StoreRequest;
use App\Http\Requests\Activity_webRequest as UpdateRequest;

class Activity_webCrudController extends CrudController
{

    public function setUp()
    {

      
        $this->crud->setModel("App\Models\Activity_web");
        $this->crud->setRoute("admin/activity_web");
        $this->crud->setEntityNameStrings('activité web', 'activités web');

       

         $this->crud->setFromDb();

       
        $this->crud->addField([
            'name'  => 'name', 
            'label' => 'Nom', 
            'type'  => 'text'
            ]);
        
        $this->crud->addField(
           
           [  
            'label' => "Types",
            'type' => 'select',
            'name' => 'type_activity_id', 
            'entity' => 'type_activity', 
            'attribute' => 'name', 
            'model' => "App\Models\Types_activity" 
        

        $this->crud->addField([
            'name'  => 'day', 
            'label' => 'Jour', 
            'type'  => 'select_from_array',
            'options' => [
                        'Lundi' => 'Lundi',
                        'Mardi' => 'Mardi',
                        'Mercredi' => 'Mercredi',
                        'Jeudi' => 'Jeudi',
                        'Vendredi' => 'Vendredi',
                        'Samedi' => 'Samedi',
                        'Dimanche' => 'Dimanche'
                        ],
            'allows_null' => false,
            ]);

        

        $this->crud->addField([
            'name'  => 'status', 
            'label' => 'Status', 
            'type'  => 'select_from_array',
            'options' => [
                        'Online' => 'Online',
                        'Offline' => 'Offline'
                        ],
            'allows_null' => false,
            ]);

        

        $this->crud->addField([
            'name'  => 'description', 
            'label' => 'Description', 
            'type'  => 'textarea'
            ]);

        

        $this->crud->addField([
            'name'  => 'age_min', 
            'label' => 'Age min', 
            'type'  => 'number'
            ]);

       

        $this->crud->addField([
            'name'  => 'age_max', 
            'label' => 'Age max', 
            'type'  => 'number'
            ]);

        

        $this->crud->addField([
            'name'  => 'picture_1', 
            'label' => '1ere image', 
           'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads'
            ]);

        

        $this->crud->addField([
            'name'  => 'picture_2',  
            'label' => '2eme image',  
           'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads'
            ]);

        

        $this->crud->addField([
            'name'  => 'hour_start', 
            'label' => 'Heure de début', 
           'type' => 'time',
            
            ]);

        
        
        $this->crud->addField([
            'name'  => 'hour_end', 
            'label' => 'Heure de fin', 
           'type' => 'time',
            
            ]);

       

        $this->crud->addField([
            'name'  => 'when', 
            'label' => 'Quand', 
           'type' => 'text',
            
            ]);

        

        $this->crud->addField([
            'name'  => 'price', 
            'label' => 'Tarifs', 
           'type' => 'text',
            
            ]);

            
            $this->crud->setColumnDetails('name',
            [
            'name'  => 'name', 
            'label' => 'Nom', 
           ]
        );
        
        $this->crud->setColumnsDetails(['type_activity_id'],
            [
            'label' => 'Types', 
            'type' => 'select',
            'name' => 'type_activity_id', 
            'entity' => 'type_activity', 
            'attribute' => 'name', 
            'model' => "App\Models\Types_activity", 
        );

        $this->crud->setColumnDetails('day',
                    [
                     'name'  => 'day', 
                    'label' => 'Jour', 
                    'type'  => 'select_from_array',
                    'options' => [
                                'Lundi' => 'Lundi',
                                'Mardi' => 'Mardi',
                                'Mercredi' => 'Mercredi',
                                'Jeudi' => 'Jeudi',
                                'Vendredi' => 'Vendredi',
                                'Samedi' => 'Samedi',
                                'Dimanche' => 'Dimanche'
                                ],
                    'allows_null' => false,
                  
                   ]
                );

        $this->crud->setColumnDetails('status',
                    [
                     'name'  => 'status', 
                    'label' => 'Status', 
                    'type'  => 'select_from_array',
                    'options' => [
                                'Online' => 'Online',
                                'Offline' => 'Offline'
                                ],
                    'allows_null' => false,
                  
                   ]
                );

        $this->crud->setColumnDetails('description',
                    [
                    'name'  => 'description', 
                    'label' => 'Description', 
                    'type'  => 'textarea'
                    ]);

         $this->crud->setColumnDetails('age_min',
                    [
                    'name'  => 'age_min', 
                    'label' => 'Age min', 
                    'type'  => 'number'
                    ]);

        $this->crud->setColumnDetails('age_max',
                    [
                    'name'  => 'age_max', 
                    'label' => 'Age max', 
                    'type'  => 'number'
                    ]);

        $this->crud->setColumnDetails('picture_1',
                    [
                    'name'  => 'picture_1',  
                    'label' => '1ere image',  
                    'type'  => 'text'
                    ]);

        $this->crud->setColumnDetails('picture_2',
                    [
                    'name'  => 'picture_2', 
                    'label' => '2eme image',
                    'type'  => 'text'
                    ]);

        $this->crud->setColumnDetails('hour_start',
                    [
                    'name'  => 'hour_start', 
                    'label' => 'Heure de début', 
                    'type'  => 'text'
                    ]);

         $this->crud->setColumnDetails('hour_end',
                    [
                    'name'  => 'hour_end', 
                    'label' => 'Heure de fin', 
                    'type'  => 'text'
                    ]);

        $this->crud->setColumnDetails('when',
                    [
                    'name'  => 'when', 
                    'label' => 'Quand', 
                    'type'  => 'text'
                    ]);

         $this->crud->setColumnDetails('price',
                    [
                    'name'  => 'price', 
                    'label' => 'Tarifs', 
                    'type'  => 'text'
                    ]);
               
    }

	public function store(StoreRequest $request)
	{

        $redirect_location = parent::storeCrud();

        return $redirect_location;
	}

	public function update(UpdateRequest $request)
	{

        $redirect_location = parent::updateCrud();
        
        return $redirect_location;
	}
}