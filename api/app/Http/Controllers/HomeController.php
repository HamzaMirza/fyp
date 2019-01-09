<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function designation(Request $request){
		
		$response=array();
		$response["success"]=0;
		$response["message"]="";
		$response["data"]='[]';
		
		$designation = DB::table('designation')->get();

		if($designation!=null && $designation!='[]')
		{
			$response["success"]=1;
			$response["message"]="Successfully Fetched";
			$response["data"]= $designation;
		}
		else
			$response["message"]="Unable to fetch data";
		
		return response()->json($response);
	}
	public function jobRoles(Request $request){
		
		$response=array();
		$response["success"]=0;
		$response["message"]="";
		$response["data"]='[]';
		
		$jobRoles = DB::table('roletype')->get();

		if($jobRoles!=null && $jobRoles!='[]')
		{
			$response["success"]=1;
			$response["message"]="Successfully Fetched";
			$response["data"]= $jobRoles;
		}
		else
			$response["message"]="Unable to fetch data";
		
		return response()->json($response);
	}
	public function companies(Request $request){
		
		$response=array();
		$response["success"]=0;
		$response["message"]="";
		$response["data"]='[]';
		
		$companies = DB::table('company')->get();

		if($companies!=null && $companies!='[]')
		{
			$response["success"]=1;
			$response["message"]="Successfully Fetched";
			$response["data"]= $companies;
		}
		else
			$response["message"]="Unable to fetch data";
		
		return response()->json($response);
	}
	public function company(Request $request){
		
		$response=array();
		$response["success"]=0;
		$response["message"]="";
		$response["data"]='[]';
		
		$company = DB::table('company')->where('id', $request->input('id'))->get();

		if($company!=null && $company!='[]')
		{
			$response["success"]=1;
			$response["message"]="Successfully Fetched";
			$response["data"]= $company;
		}
		else
			$response["message"]="Unable to fetch data";
		
		return response()->json($response);
	}
	public function categories(Request $request){
		
		$response=array();
		$response["success"]=0;
		$response["message"]="";
		$response["data"]='[]';
		
		$categories = DB::table('category')->get();

		if($categories!=null && $categories!='[]')
		{
			$response["success"]=1;
			$response["message"]="Successfully Fetched";
			$response["data"]= $categories;
		}
		else
			$response["message"]="Unable to fetch data";
		
		return response()->json($response);
	}
	public function vacancy(Request $request){
		
		$response=array();
		$response["success"]=0;
		$response["message"]="";
		$response["data"]='[]';
		
		$vacancies = DB::table('vacancy')
					->join('designation', 'vacancy.designationid', '=', 'designation.id')
					->join('roletype', 'vacancy.roletypeid', '=', 'roletype.id')
					->select('vacancy.*', DB::raw('roletype.name as jobRole'), DB::raw('designation.name as designation'))
					->where('vacancy.state',1)
					->where('vacancy.cid',$request->input('id'))
					->offset($request->input('offset'))
					->limit($request->input('limit'))
					->get();

		if($vacancies!=null && $vacancies!='[]')
		{
			$response["success"]=1;
			$response["message"]="Successfully Fetched";
			$response["data"]= $vacancies;
		}
		else
			$response["message"]="Unable to fetch data";
		
		return response()->json($response);
	}
	public function vacancies(Request $request){
		
		$response=array();
		$response["success"]=0;
		$response["message"]="";
		$response["data"]='[]';
		
		$vacancies = DB::table('vacancy')
					->join('designation', 'vacancy.designationid', '=', 'designation.id')
					->join('roletype', 'vacancy.roletypeid', '=', 'roletype.id')
					->select('vacancy.*', DB::raw('roletype.name as jobRole'), DB::raw('designation.name as designation'))
					->where('vacancy.state',1)
					->offset($request->input('offset'))
					->limit($request->input('limit'))
					->get();

		if($vacancies!=null && $vacancies!='[]')
		{
			$response["success"]=1;
			$response["message"]="Successfully Fetched";
			$response["data"]= $vacancies;
		}
		else
			$response["message"]="Unable to fetch data";
		
		return response()->json($response);
	}
	public function questions(Request $request){
		
		$response=array();
		$response["success"]=0;
		$response["message"]="";
		$response["data"]='[]';
		
		$questions = DB::table('questions')
					->where('questions.draft',0)
					->where('questions.c_id',$request->input('cid'))
					->offset($request->input('offset'))
					->limit($request->input('limit'))
					->get();

		if($questions!=null && $questions!='[]')
		{
			$response["success"]=1;
			$response["message"]="Successfully Fetched";
			$response["data"]= $questions;
		}
		else
			$response["message"]="Unable to fetch data";
		
		return response()->json($response);
	}	
	//Posting Methods
	public function login(Request $request)
	{
		$username = $request->input('username');
		$password = $request->input('password');
		$response=array();
		$response["success"]=0;
		$response["message"]="";
		$response["data"]='[]';
		
		$user = DB::table('users')->where('username', $username)->where('password',$password)->get();

		if($user!=null && $user!='[]')
		{
			$response["success"]=1;
			$response["message"]="User successfully authenticated";
			$response["data"]= $user;
		}
		else
			$response["message"]="Email or password is incorrect";
		
		return response()->json($response);
	}
	public function signup(Request $request) {		//signup
	
	$username = $request->input('username');
	$password = $request->input('password');
	$response=array();
	$response["success"]=0;
	$response["message"]="";
	$response["data"]='[]';
	
	if(self::getUserByEmail($username)>0)
	{
		$response["message"]="User already Exists";
		return response()->json($response); //returning because user already exists;
	}
		
	$user = DB::table('users')->insert([
    [
		'username'=>$username,
		'password'=>$password
	]
   ]);
   
	if($user==1) //user registered successfully
	{
		$response["success"]=1;
		$response["message"]="User successfully registered";
		$response["data"] = DB::table('users')->where('username', $username)->get();
	}
	
	return response()->json($response);
}
public function testscore(Request $request) {		//inserting test scores
	
	$response=array();
	$response["success"]=0;
	$response["message"]="";
	$response["data"]='[]';
	$cvurl="";

	if ($request->hasFile('cv'))
	{
		$cv = $request->file('cv');
		$cvurl= self::saveCv($cv) ;
	}
	
	$testscore = DB::table('testscore')-> insert(
	[
			'uid'=>$request->input('uid'),
			'cid'=>$request->input('cid'),
			'score'=>$request->input('score'),
			'date'=>$request->input('date'),
			'vacancyid'=>$request->input('vid'),
			'cv'=>$cvurl
	]);
	
	
	if($testscore==1) //testscore details successfully updated
	{
		$response["success"]=1;
		$response["message"]="User test scores successfully inserted";
		$response["data"]= DB::table('testscore')->where('vacancyid', $request->input('vid'))->get();
	}
	
	return response()->json($response);
}
public function userdetails(Request $request) {		//signup
	
	$response=array();
	$response["success"]=0;
	$response["message"]="";
	$response["data"]='[]';
	$imageurl="";
	$cvurl="";
	
	if ($request->hasFile('image'))
	{
		$image = $request->file('image');
		$imageurl= self::saveImage($image) ;
	}
	if ($request->hasFile('cv'))
	{
		$cv = $request->file('cv');
		$cvurl= self::saveCv($cv) ;
	}
	$user = DB::table('users')-> where('id', $request->input('id')) -> update(
	[
			'fname'=>$request->input('fname'),
			'lname'=>$request->input('lname'),
			'address'=>$request->input('address'),
			'education'=>$request->input('education'),
			'picture'=>$imageurl,
			'cv'=>$cvurl
	]);
	
	
	if($user==1) //user details successfully updated
	{
		$response["success"]=1;
		$response["message"]="User details successfully updated";
		$response["data"]= DB::table('users')->where('id', $request->input('id'))->get();
	}
	
	return response()->json($response);
}
private function getUserByEmail($username)
{
	$user = DB::table('users')->where('username', $username)->get();
	return sizeof($user);
}
private function saveImage($image)
{
		$path = $image->store('users');
		$foldername=explode("/",$path)[1];
		$foldername=explode(".",$foldername)[0];
		$fileName = $image->getClientOriginalName();
		$destinationPath = base_path() . '/public/images/users/' . $foldername;
		$image->move($destinationPath, $fileName);
		return '/public/images/users/' . $foldername.'/'.$fileName;
}
private function saveCv($cv)
{
		$path = $cv->store('users');
		$foldername=explode("/",$path)[1];
		$foldername=explode(".",$foldername)[0];
		$fileName = $cv->getClientOriginalName();
		$destinationPath = base_path() . '/public/docs/' . $foldername;
		$cv->move($destinationPath, $fileName);
		return '/public/docs/' . $foldername.'/'.$fileName;
}
}
