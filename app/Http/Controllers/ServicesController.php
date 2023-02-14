<?php

namespace App\Http\Controllers;

use App\Http\Requests\store_services;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    protected $total;
    public function create()
    {
        return view('services.create');
    }
    public function store(store_services $request){
        $services=new Services;
        $datavalidate=$request->validated();
        $services->user_id=Auth::user()->id;
        $services->title=$datavalidate['title'];
        $services->description=$datavalidate['description'];
        $services->price=5;
        $services->another_title=$datavalidate['another_title'];
        $services->another_description=$datavalidate['another_description'];
        $services->another_price=$datavalidate['another_price'];
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ex=$file->getClientOriginalName();
            $image_name=time().'.'.$ex;
            $file->move('front/images/services/',$image_name);
            $services->image=$image_name;
        }
        if($request->hasFile('another_image')){
            $file_another=$request->file('another_image');
            $ex_another=$file_another->getClientOriginalName();
            $another_image=time().'.'.$ex_another;
            $file_another->move('front/images/services/',$another_image);
            $services->another_image=$another_image;
        }
        $services->save();
        return redirect()->route('services.create')->with('message','تم اضافه خدمه بنجاح');


    }
    public function show($id){
        $this->total=5;
        $data=DB::table('users')->join('services','users.id','=','services.user_id')->where('services.id','=',$id)->select(['services.*','users.name','users.email'])->first();


        return view('services.show',['data'=>$data,'total'=>$this->total,'status'=>'0']);
    }
    public function extra(Request $request)
    {
        $id=$request->id;
        $data=DB::table('users')->join('services','users.id','=','services.user_id')->where('services.id','=',$id)->select(['services.*','users.name','users.email'])->first();

       if($request->has('extra')&&$request->extra=='on'){
       $this->total=$data->price +$data->another_price;
        return view('services.show',['data'=>$data,'total'=>$this->total,'status'=>'1']);
       }
       else{
        $this->total=$data->price ;
        return view('services.show',['data'=>$data,'total'=>$this->total,'status'=>'0']);
       }
    }
}
