<?php

namespace App\Http\Controllers;

use App\Setweb;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller {
	//
	public function index() 
	{

		return view('admin');
		
	}



    //网站设置
    public function setweb() {
        $setweb = Setweb::first();
        return view('admin.setweb.setweb',['setweb'=>$setweb]);
    }
    public function update(Request $request){
        $setweb = Setweb::first();

        if(!$setweb){
            $setweb = new Setweb;
        }

        $setweb -> sname = $request->sname;
        $setweb -> sdesc = $request->sdesc;
        $setweb -> dtel = $request->dtel;
        $setweb -> daddr = $request->daddr;
        $setweb -> dnul = $request->dnul;
        $setweb -> detial = $request->detial;
        $setweb -> status = $request->status;
        $setweb -> keywords = $request->keywords;
        $setweb-> logo = $request->input('logo', 'https://picsum.photos/400/300?image=2');

        if($setweb->save()){
            return back()->with('success','设置成功');
        }else{
            return back()->with('error','设置失败!!');
        }
        
    }



    
    //登录
    public function login()
    {
        return view('admin.login');
    }

    /**
     * 登陆操作
     */
    public function dologin(Request $request)
    {
        //获取用户的数据
        $user = User::where('username', $request->username)->first();

        if(!$user){
            return back()->with('error','登陆失败!');
        }

        //校验密码
        if(Hash::check($request->password, $user->password)){
            //写入session
            session(['username'=>$user->username, 'id'=>$user->id]);
            return redirect('/admin')->with('success','登陆成功');
        }else{
            return back()->with('error','登陆失败!');
        }
    }

    /**
     * 退出登陆
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin/login')->with('success','退出成功');
    }

}
