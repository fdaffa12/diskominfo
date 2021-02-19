<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class crudController extends Controller
{
    public function insertData(){
    	$data = Input::except('_token');
    	$tbl = decrypt($data['tbl']);
    	unset($data['tbl']);
    	$data['created_at'] = date ('Y-m-d H:i:s');

        if(Input::has('social')){
            $data['social'] = implode(',',$data['social']);
        }

        if(Input::hasFile('image')){
            $data['image'] = $this->uploadimage($tbl,$data['image']);
        }

        if(Input::has('category_id')){
            $data['category_id'] = implode(',',$data['category_id']);
        }

    	DB::table($tbl)->insert($data);
        if($tbl == 'messages'){
            session::flash('message','Thank your for messanging us. We will get back to your shortly. Please keep patience');
        }else{
            session::flash('message','Data inserted successfully');
        }
    	return redirect()->back();
    }

    public function updateData(){
    	$data = Input::except('_token');
    	$tbl = decrypt($data['tbl']);
    	unset($data['tbl']);
    	$data['updated_at'] = date ('Y-m-d H:i:s');

        if(Input::has('social')){
            $data['social'] = implode(',',$data['social']);
        }

        if(Input::hasFile('image')){
            $data['image'] = $this->uploadimage($tbl,$data['image']);
        }

        if(Input::has('category_id')){
            $data['category_id'] = implode(',',$data['category_id']);
        }
        
    	DB::table($tbl)->where(key($data), reset($data))->update($data);
    	session::flash('message','Data updated successfully');
    	return redirect()->back();
    }

    public function uploadimage($location,$imagename){
        $name = $imagename->getClientOriginalName();
        $imagename->move(public_path().'/'.$location,date('ymdgis').$name);
        return date('ymdgis').$name;
    }
}
 