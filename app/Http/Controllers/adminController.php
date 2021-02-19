<?php

namespace App\Http\Controllers;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
// Ignores notices and reports all other kinds... and warnings
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
class adminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	return view ('backend.index');
    }

    public function viewCategory(){
    	$data = DB::table('categories')->get();
    	return view ('backend.categories.category', ['data'=>$data]);
    }

    public function editCategory($id){
    	$singledata = DB::table('categories')->where('cid',$id)->first();
        if($singledata == NULL){
            return redirect ('viewcategory');
        }
    	$data = DB::table('categories')->get();
    	return view ('backend.categories.editcategory', ['data'=>$data, 'singledata'=>$singledata]);
    }

    public function multipleDelete(){
        $data = Input::except('_token');
        if($data['bulk-action'] == 0){
            session::flash('message','Please select the action you want to perform');
            return redirect()->back();
        }
        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);
        if(empty($data['select-data'])){
            session::flash('message','Please select the data you want to delete');
            return redirect()->back();
        }
        $ids = $data['select-data'];
        foreach ($ids as $id) {
            DB::table($tbl)->where($tblid,$id)->delete();
        }
        session::flash('message','Data deleted successfully');
            return redirect()->back();
    }
    public function settings(){
        $data = DB::table('settings')->first();
        if($data){
            $data->social = explode(',', $data->social);
        }
        return view ('backend.settings',['data'=>$data]);
    }

    public function addPost(){
        $categories = DB::table('categories')->get();
        return view ('backend.post.add-post',['categories'=>$categories]);
    }

    public function allPost(){
        $posts = DB::table('posts')->orderby('pid','DESC')->paginate(20);
        foreach($posts as $post){
            $categories = explode(',',$post->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(' , ', $postcategories);
            }
            $post->category_id = $postcat;
            $postcategories = [];
        }
        $published = DB::table('posts')->where('status','publish')->count();
        $allposts = DB::table('posts')->count();
        return view ('backend.post.all-post',['posts'=>$posts, 'published'=>$published, 'allposts'=>$allposts]);
    }

    public function editPost($id){
        $data = DB::table('posts')->where('pid',$id)->first();
        $postcat = explode(',', $data->category_id);
        $categories = DB::table('categories')->get();
        return view ('backend.post.edit', ['data'=>$data, 'categories'=>$categories,'postcat'=>$postcat]);
    }

    public function deletePst($id){
        DB::table('posts')->where('pid',$id)->delete();
            return redirect()->back();
    }

    public function addPage(){
        return view ('backend.pages.add-page');
    }

    public function allPages(){
        $posts = DB::table('pages')->get();
        $published = DB::table('pages')->where('status','publish')->count();
        $allposts = DB::table('pages')->count();
        return view ('backend.pages.all-pages',['posts'=>$posts, 'published'=>$published, 'allposts'=>$allposts]);
    }

    public function editPage($id){
        $data = DB::table('pages')->where('pageid',$id)->first();
        return view ('backend.pages.edit', ['data'=>$data]);
    }

    public function deletePgs($id){
        DB::table('pages')->where('pageid',$id)->delete();
            return redirect()->back();
    }

    public function messages(){
        $data = DB::table('messages')->orderby('mid','DESC')->paginate(20);
        return view ('backend.messages',['data'=>$data]);
    }

    public function deleteMsg($id){
        DB::table('messages')->where('mid',$id)->delete();
            return redirect()->back();
    }

    public function addAdv(){
        return view ('backend.advertisement.add-adv');
    }

    public function allAdv(){
        $data = DB::table('advertisements')->orderby('aid','DESC')->get();
        return view ('backend.advertisement.all-adv',['data'=>$data]);
    }

    public function deleteAdv($id){
        DB::table('advertisements')->where('aid',$id)->delete();
            return redirect()->back();
    }

    public function editAdv($id){
        $data = DB::table('advertisements')->where('aid',$id)->first();
        return view ('backend.advertisement.edit-adv',['data'=>$data]);
    }

    public function addSlider(){
        return view ('backend.slider.add-slider');
    }

    public function allSlider(){
        $data = DB::table('sliders')->orderby('sid','DESC')->get();
        return view ('backend.slider.all-slider',['data'=>$data]);
    }

    public function editSlider($id){
        $data = DB::table('sliders')->where('sid',$id)->first();
        return view ('backend.slider.edit-slider',['data'=>$data]);
    }

    public function deleteSld($id){
        DB::table('sliders')->where('sid',$id)->delete();
            return redirect()->back();
    }

    public function addApp(){
        return view ('backend.application.add-app');
    }

    public function allApp(){
        $data = DB::table('aplikasis')->orderby('apid','DESC')->get();
        return view ('backend.application.all-app',['data'=>$data]);
    }

    public function editApp($id){
        $data = DB::table('aplikasis')->where('apid',$id)->first();
        return view ('backend.application.edit-app',['data'=>$data]);
    }

    public function deleteApps($id){
        DB::table('aplikasis')->where('apid',$id)->delete();
            return redirect()->back();
    }

}
