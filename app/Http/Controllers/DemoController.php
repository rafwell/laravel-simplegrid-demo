<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rafwell\Simplegrid\Grid;
use App\Employe;

class DemoController extends Controller
{
    public function index(){

    	$Grid = new Grid(Employe::query(), 'Employes');
    	
    	$Grid->fields([
    		'birth_date'=>'Birthday',
    		'first_name'=>'First Name',
    		'last_name'=>'Last Name',
    		'gender'=>[
                'label'=>'Gender',
                'field'=>"case when gender = 'M' then 'Male' else 'Female' end"
            ]
    	])
        ->actionFields([
            'emp_no' //The fields used for process actions. those not are showed 
        ])
        ->advancedSearch([
            'birth_date'=>['type'=>'date','label'=>'Birthday'],
            'first_name'=>'First Name', // It's a shortcut for ['type'=>'text', 'label'=>'First Name'],
            'last_name'=>[
                //omiting the label. I'ts a shortcut, like above
                'type'=>'text'
            ],
            'gender'=>[
                'type'=>'select',
                'label'=>'Gender',
                'options'=>['Male'=>'Male', 'Female'=>'Female'] //The key is the value of option
            ]
        ]);

        $Grid->action('Edit', 'test/edit/{emp_no}')
        ->action('Delete', 'test/{emp_no}', [
            'confirm'=>'Do you with so continue?',
            'method'=>'DELETE',
        ]);

        $Grid->checkbox(true, 'emp_no');
        $Grid->bulkAction('Delete selected itens', '/test/bulk-delete');

        //dd( $Grid->make()->render() );
        
    	return view('demo.index', ['grid'=>$Grid]);
    }
}
