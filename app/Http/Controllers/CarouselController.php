<?php

namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		//读取数据库 获取广告数据
		$carousels = Carousel::orderBy('id', 'desc')
			->where('id', 'like', '%' . request()->keywords . '%')
			->paginate(10);
		return view('admin.carousels.index', ['carousels' => $carousels]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.carousels.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$carousels = new Carousel;

		$carousels->url_one = $request->url_one;
		//文件上传
		//检测是否有文件上传
		if ($request->hasFile('img_one')) {
			// dd('11');
			$carousels->img_one = '/' . $request->img_one->store('lunbotu/' . date('Ymd'));
		}

		if ($carousels->save()) {
			// dd('11');
			return redirect('/carousels')->with('success', '添加成功');
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
		//获取轮播图的信息
		$carousels = Carousel::findOrFail($id);
		//解析模板显示数据
		return view('admin.carousels.edit', ['carousels' => $carousels]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//获取广告的信息
		$carousels = Carousel::findOrFail($id);
		//更新
		$carousels->url_one = $request->url_one;

		//文件上传
		//检测是否有文件上传
		if ($request->hasFile('img_one')) {
			$carousels->img_one = '/' . $request->img_one->store('lunbotu/' . date('Ymd'));
		}

		if ($carousels->save()) {
			return redirect('/carousels')->with('success', '修改成功');
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
		$carousels = Carousel::findOrFail($id);

		if ($carousels->delete()) {
			return redirect('carousels')->with('success', '删除成功');
		} else {
			return back()->with('error', '删除失败');
		}
	}
}
