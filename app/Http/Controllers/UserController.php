<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//读取数据库  获取用户数据
		 $users = User::orderBy('id','asc')
            ->where('username','like', '%'.request()->keywords.'%')
            ->paginate(10);

		//解析模版显示用户数据
		return view('admin.user.index',['users'=>$users]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		return view('admin.user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//

		$user = new User;
		
		$user->username = $request->username;
		$user->password = Hash::make($request->password);
		$user->auth = $request->auth;

		if ($user->save()) {
			return redirect('/user')->with('success', '添加成功');
		} else {
			return back()->with('error', '添加失败');
		}
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
		//获取用户的信息
		$user = USer::findOrFail($id);
		//解析模版显示数据
		return view('admin.user.edit',['user'=>$user]);
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
		//获取用户的信息
		$user = USer::findOrFail($id);

		//更新
		$user -> username = $request->username;
		$user -> age = $request->age;
		$user -> sex = $request->sex;
		$user -> status = $request->status;
		$user -> upic = $request->upic;
		$user -> email = $request->email;
		$user -> tel = $request->tel;
		$user -> auth = $request->auth;
		$user -> uaddr = $request->uaddr;
		$user -> score = $request->score;

		//文件上传
        //检测是否有文件上传
        if ($request->hasFile('upic')) {
            $user->upic = '/'.$request->upic->store('uploads/'.date('Ymd'));
        }

        DB::beginTransaction();

        //插入
        if($user->save()){
           
            try{
               
                DB::commit();
                return redirect('/user')->with('success','添加成功');
            }catch(\Exception $e){
                DB::rollback();
                return back()->with('error','添加失败!');
            }
        }else{
            return back()->with('error','添加失败!');
        }

    

		

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) 
	{
		//获取用户的所有信息
		$user = User::findOrFail($id);

		if($user->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
	}
}
