<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{	
    public $table = 'employees';
    protected $primary = 'emp_no';
}
