<?php

namespace App\Http\Controllers;

use App\Gkinds;
use Illuminate\Http\Request;

class GkindsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() 
	{
		$gkinds = Gkinds::where('tname','like','%'.request()->keywords.'%')->paginate(5);
		// dd($gkinds);
		return view('admin.gkinds.index',compact('gkinds'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() 
	{
		$gkinds_data = Gkinds::get();
		return view('admin.gkinds.create',compact('gkinds_data'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) 
	{
		$data = $request -> except('_token');
		//判断是否根分类
		if($data['pid'] == 0){
			$data['path'] = 0;
		}else{
			//获取父类分类的id
			$parent_data = Gkinds::where('id','=',$data['pid'])->first();
		
			//拼接path
			$data['path'] = $parent_data['path'].$parent_data['id'].',';
			
		}

		$gkinds = new Gkinds;
		$gkinds -> tname = $data['tname'];
		$gkinds -> pid = $data['pid'];
		$gkinds -> path = $data['path'];

		if($gkinds -> save()){
			return redirect('/gkinds')->with('success','添加分类成功');
		}else{
			return back()->with('error','添加分类失败');
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
		$data = Gkinds::find($id);

		return view('admin.gkinds.edit',compact('data'));
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
		$data = $request -> except('_token','_method','pid');
		// dd($data);
		//检测当前分类是否有子分类
		$gkinds = Gkinds::where('pid',$id)->first();
		// dd($gkinds);s
		// dd($gkinds);
		if(!empty($gkinds)){
			return redirect('/gkinds')->with('error','当前分类下有子分类不允许修改');
		}

		//执行修改
		$gkind = Gkinds::find($id);
		
		$gkind -> tname = $data['tname'];
		// $gkind -> pid = $data['pid'];
		if($gkind -> save()){
			return redirect('/gkinds')->with('success','修改分类成功');
		}else{
			return back()->with('error','修改分类失败');
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
		//检查该分类是否有子分类
		$data = Gkinds::where('pid','=',$id)->first();
		if(!empty($data)){
			return redirect('/gkinds')->with('error','该分类下有子分类不允许删除');
		} 

		if(Gkinds::find($id)->delete()){
			return redirect('/gkinds')->with('success','删除分类成功');
		}else{
			return back()->with('error','删除分类失败');
		}

	}
}
