<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\View\View;
use Carbon\Carbon;
class BlogController extends Controller
{


      /**
     * Create a new controller instance.
     *
     * @return void
     */
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/post/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         /**
         *  Data  Validation.....
         */
        $v = Validator::make($request->all(), [
            'title' => 'required|max:200',
            'cat_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);

        $image = $request->file('image');

 /**
         * Check File is uploaded or not  time()."_".
         */
        if ($image) {
            $img_name = time()."_".$image->getClientOriginalName();


        }
        /**
         * Check Data is Valid or Not
         */
        if ($v->fails()) {
            \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');
            return redirect()->back()->withInput()->withErrors($v);;
        } else {

        $blog = new Blog();


        $blog->title = $request->title;
        $blog->cat_name = $request->cat_name;

        $blog->image = $img_name;


        $blog->content = $request->content;
        $blog->status = $request->status;
        $blog->save();

        }

        if ($image) {
            $destinationPathOne = public_path('images');
            $image->move($destinationPathOne, $img_name);
        }
        \Session::flash('message', 'Data Save Successfully ....... ');
        return redirect('/admin/addPost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
