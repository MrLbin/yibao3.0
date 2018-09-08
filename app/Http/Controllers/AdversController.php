<?php

namespace App\Http\Controllers;

use App\Advers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdversController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		//读取数据库 获取广告数据
		$advers = Advers::orderBy('id', 'desc')
			->where('atitle', 'like', '%' . request()->keywords . '%')
			->paginate(10);
		//解析模板显示广告数据
		return view('admin.advers.index', ['advers' => $advers]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		// echo '123';
		return view('admin.advers.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$advers = new Advers;

		$advers->atitle = $request->atitle;
		$advers->aprice = $request->aprice;
		$advers->acustomer = $request->acustomer;
		$advers->data_max = $request->data_max;
		$advers->data_min = $request->data_min;
		$advers->guanggaowei1 = $request->guanggaowei1;
		$advers->aurl1 = $request->aurl1;
		$advers->guanggaowei2 = $request->guanggaowei2;
		$advers->aurl2 = $request->aurl2;
		$advers->cate = $request->cate;

		//文件上传
		//检测是否有文件上传
		if ($request->hasFile('pic1')) {
			$advers->pic1 = '/' . $request->pic1->store('uploads/' . date('Ymd'));
		}
		if ($request->hasFile('pic2')) {
			$advers->pic2 = '/' . $request->pic2->store('uploads/' . date('Ymd'));
		}

		DB::beginTransaction();

		//插入
		if ($advers->save()) {
			try {
				DB::commit();
				return redirect('/advers')->with('success', '添加成功');
			} catch (\Exception $e) {
				DB::rollback();
				return back()->with('error', '添加失败!');
			}
		} else {
			return back()->with('error', '添加失败!');
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
		//获取广告的信息
		$advers = Advers::findOrFail($id);
		//解析模板显示数据
		return view('admin.advers.edit', ['advers' => $advers]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
		//获取广告的信息
		$advers = Advers::findOrFail($id);

		//修改
		$advers->atitle = $request->atitle;
		$advers->aprice = $request->aprice;
		$advers->acustomer = $request->acustomer;
		$advers->data_max = $request->data_max;
		$advers->data_min = $request->data_min;
		$advers->guanggaowei1 = $request->guanggaowei1;
		$advers->aurl1 = $request->aurl1;
		$advers->guanggaowei2 = $request->guanggaowei2;
		$advers->aurl2 = $request->aurl2;
		$advers->cate = $request->cate;

		//文件上传
		//检测是否有文件上传
		if ($request->hasFile('pic1')) {
			$advers->pic1 = '/' . $request->pic1->store('uploads/' . date('Ymd'));
		}
		if ($request->hasFile('pic2')) {
			$advers->pic2 = '/' . $request->pic2->store('uploads/' . date('Ymd'));
		}

		if ($advers->save()) {
			return redirect('/advers')->with('success', '更新成功');
		} else {
			return back()->with('error', '修改失败');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		// dd('qqq');
		$advers = Advers::findOrFail($id);

		if ($advers->delete()) {
			return redirect('advers')->with('success', '删除成功');
		} else {
			return back()->with('error', '删除失败');
		}
	}
}
