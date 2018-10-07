<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
// use App\User;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    

	/**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
        ]);
    }

    //
    public function listPorduct(Request $request){
    	// echo $request->items; exit();
    	// get all records
    	// $listPorduct = Product::paginate($request->items);
        $listPorduct = Product::paginate($request->perPage);

    	// create row
    	// $flight = Product::create(['name' => 'Flight 10','comment' => 'comment']);

    	// update row
    	/*$passport= Product::find(5);
        $passport->name='thamizh';
        $passport->save();*/

    	// delete row
        /*$passport = Product::find(4);
        $passport->delete();*/

    	/*foreach ($flights as $flight) {
		    echo $flight->name."----".$flight->id."<br>";
		}*/
		// $passport = Product::find(5);
    	// $product = new Product;
    	// print_r($passport->name);
    	// exit();
    	return view('listProduct1', ['products' => $listPorduct ]);
    }

    public function rules()
	{
	    return [
	        'name' => 'required|unique:products|max:255',
	        'comment' => 'required|max:255',
	    ];
	}

    public function addProduct(){
    	// $car = new Product;
    	// return view('addProduct', ['car' => $car ]);
// echo 1; exit();
    	 return view('addProduct');
    }

    public function addNewProduct(Request $request){

    	$validatedData = $request->validate($this->rules()); 
    	// print_r($validatedData); exit();
    	// create row
    	$insertProduct = Product::create(['name' => $request->name,'comment' => $request->comment]);
	    /*if ($validatedData->fails())
	    {
	    	$messages = $validatedData->messages();
// print_r($messages); exit();
	        return redirect('addProduct')->withErrors($messages);
	    }*/

    	// print_r($req->first_name); exit();
    	 // return view('addProduct');
	    return redirect('listProduct')->with('success', 'User created successfully.');
	            // return back()->with('success', 'You have just created one item');

    }

    public function editProduct($id){
        // echo $id;
        $getProduct = Product::find($id);
        return view('editProduct', ['products' => $getProduct ]);
    }

    public function editProductAction(Request $request){
        // echo $id;
        $products= Product::find($request->id);
        $products->name=$request->name;
        $products->comment=$request->comment;
        $products->save();
        return redirect('listProduct')->with('success', 'User updated successfully.');;
    }
}
