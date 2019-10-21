<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
//use Kreait\Firebase\Configuration;
use App\Dr;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class DoctorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
 	
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
		// 	$ref=  $database->getReference('phds');
	
		// 	$drs =$ref->getValue();
		// 	foreach($drs as $dr){
		// 		$all_dr[]=$dr;
		// 	}
        //     //return (compact('all_dr'));
			return view('Doctors.index');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // return view ('Doctors.create');
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
		// 	$ref=  $database->getReference('phds');
			        
		// $fullname = $request->name;
		// $Email = $request->email;
		// $Department= $request->depart;
		// $Rate= $request->rate;
        // $Image = $request->image;
        // $id=$request->id;
 
        // $key = $ref->push()->getKey();
        // $key2=mt_rand(100000, 999999);
        
		// $ref->getChild($key)->set([
        //     'id'=>$key2,
		// 	'fullname'=>$fullname,
		// 	'Email'=>$Email,
		// 	'Department'=>$Department,
		// 	'Title'=>'Doctor',
		// 	'Rate'=>$Rate,
		// 	'Image'=>$Image
		// ]);

		
		// $drs =$ref->getValue();
		// 	foreach($drs as $dr){
		// 		$all_dr[]=$dr;
		// 	}

            return view('Doctors.index',['all_dr'=>$drs])->with('success','Doctor Created');   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function show($key) 
    {
        
    //     $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase-csat.json');
       
    //     $firebase = (new Factory)
	// 		->withServiceAccount($serviceAccount)
	// 		->withDatabaseUri('https://c-sat-17577.firebaseio.com')
	// 		->create();
    //     $database = $firebase->getDatabase();
    //     $drs =  $database->getReference('phds')
    //             ->orderByChild('id')
    //             ->equalTo((int)$key)->getValue();     
       

    //    foreach($drs as $dr){
	// 			$all_dr[]=$dr;
	// 		}
    //     // return dump ($drs);
    //     //$val = $dr->getValue();          
    //     //return dump($val);

       return view('Doctors.show');


          
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($key)
    {
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase-csat.json');
       
        // $firebase = (new Factory)
		// 	->withServiceAccount($serviceAccount)
		// 	->withDatabaseUri('https://c-sat-17577.firebaseio.com')
		// 	->create();
        // $database = $firebase->getDatabase();
        // $drs =  $database->getReference('phds','Reviews')
        //         ->orderByChild('id')
        //         ->equalTo((int)$key)->getValue();     
       

        // foreach($drs as $dr){
		// 		$all_dr[]=$dr;
        //     }
        return view('Doctors.edit');
            
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

        /*
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase-csat.json');
		$firebase = (new Factory)
			->withServiceAccount($serviceAccount)
			->withDatabaseUri('https://c-sat-17577.firebaseio.com')
			->create();
            $database = $firebase->getDatabase();

            $ref=  $database->getReference('phds')
                            ->orderByChild('is_read')
                            ->equalTo('false');
                            
			        
		
		$drs =$ref->getValue();
			foreach($drs as $dr){
				$all_dr[]=$dr;
			}

        return view('Doctors.index',['all_dr'=>$drs])->with('success','Doctor Created');  
        // return view('Doctors.index')->with('success','Doctor Created');  


        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
        //delete a node
        
    }
}
