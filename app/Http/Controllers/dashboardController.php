<?php

namespace App\Http\Controllers;

use App\Http\Requests\search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
class dashboardController extends Controller
{

    public function index(){

        $data=DB::table('users')->join('services','users.id','=','services.user_id')->select(['services.*','users.name','users.email'])->paginate(4);


        return view('index',['data'=>$data]);
    }

    public function more(){

        $data=DB::table('users')->join('services','users.id','=','services.user_id')->select(['services.*','users.name','users.email'])->get();


        return view('index',['data'=>$data]);
    }
    public function search(search $request){
        $name=$request->validated();
        $search=$name['search'];


        $data=DB::table('users')->join('services','users.id','=','services.user_id')->where('services.title','like',"%$search%")->select(['services.*','users.name','users.email'])->get();

       
          return view('index',['data'=>$data]);


    }
}
