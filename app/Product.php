<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    // protected $connection = 'sehrmd_june08';
    // protected $connection = 'mysql2';
    protected $perPage = 10;
    
    protected $table = 'products';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name','comment'];


/*    public function index()
	{
	    $books = Books::all();
	    return $books;
	}*/

   /* public function user() {
	    return $this->belongsTo('App\User'); // obviously ensure you correct the namespaces if necessary
	}

    public function listUsers(){
    	$users = Product::all();
    	// $departments = $this->product()->with('products')->get();
    	// print_r($departments); exit();
    	// return $this->hasOne($users);
    }*/

    /**
     * Get the product name.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

}
