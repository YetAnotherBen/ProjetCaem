<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Membership extends Model
{
    use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    //protected $table = 'memberships';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    protected $fillable = [
        'date_start',
        'date_end',
        'person_id'
    ];



    public function person(){
        return $this->belongsTo('App\Models\Person');
    }

   
    /*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
