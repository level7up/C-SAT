<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
//use Kreait\Firebase\Configuration;
use App\Emp;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase-csat.json');
		// $firebase = (new Factory)
		// 	->withServiceAccount($serviceAccount)
		// 	->withDatabaseUri('https://c-sat-17577.firebaseio.com')
		// 	->create();
			
		// 	$database = $firebase->getDatabase();
		// 	$ref=  $database->getReference('ta');
	
		// 	$tas =$ref->getValue();
		// 	foreach($tas as $ta){
		// 		$all_ta[]=$ta;
		// 	}
            //return (compact('all_ta'));
			return view('Teachers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase-csat.json');
		// $firebase = (new Factory)
		// 	->withServiceAccount($serviceAccount)
		// 	->withDatabaseUri('https://c-sat-17577.firebaseio.com')
		// 	->create();
		// 	$database = $firebase->getDatabase();
		// 	$ref=  $database->getReference('ta');
			


		// $fullname = $request->name;
		// $Email = $request->email;
		// $Department= $request->depart;
		// $Rate= $request->rate;
		// $Image = $request->image;

		// $key = $ref->push()->getKey();
        // $key2=mt_rand(10000, 99999);

		// $ref->getChild($key)->set([
			
        //     'fullname'=>$fullname,
        //     'id'=>$key2,
		// 	'Email'=>$Email,
		// 	'Department'=>$Department,
		// 	'Title'=>'Teacher Assistant',
		// 	'Rate'=>$Rate,
		// 	'Image'=>$Image
		// ]);

		
		// $tas =$ref->getValue();
		// 	foreach($tas as $ta){
		// 		$all_ta[]=$ta;
		// 	}

        //     return view('Teachers.index',['all_ta'=>$tas])->with('success','TA Created');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        
    //     $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase-csat.json');
       
    //     $firebase = (new Factory)
	// 		->withServiceAccount($serviceAccount)
	// 		->withDatabaseUri('https://c-sat-17577.firebaseio.com')
	// 		->create();
    //     $database = $firebase->getDatabase();
    //     $tas =  $database->getReference('ta')
    //             ->orderByChild('id')
    //             ->equalTo((int)$id)->getValue();     
       

    //    foreach($tas as $ta){
	// 			$all_ta[]=$ta;
    //         }
            


    //     // return dump ($tas);
    //     //$val = $ta->getValue();          
    //     //return dump($val);



    // //     $tas =  $database->getReference('Reviews')
    // //             ->orderByChild('rate')
    // //             ->equalTo((int)$key)->getValue();    
            
    // //    foreach($tas as $ta){
	// // 			$all_ta[]=$ta;
	// // 		} 
    // //      return dump ($tas);


    //    return view('Teachers.show',['ta'=>$ta]);
    return view('Teachers.show');


          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
