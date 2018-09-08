<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $address = Address::all();
        return view('home.address.index',['address'=>$address]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $address = new Address;
        $address -> name = $request -> name;
        $address -> phone = $request -> phone;
        $address -> city = $request -> address;
        $address -> street = $request -> street; 
        $address -> is_default = $request -> is_default;
        //dd($address);
        if($address -> save()){
            return redirect('/address') -> with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
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
        //
        $address = Address::findOrFail($id);


        return view('home.address.edit', compact('address'));
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
         $address = Address::findOrFail($id);

        $address -> name = $request -> name;
        $address -> phone = $request -> phone;
        $address -> is_default = $request -> is_default;
        $address-> city = $request -> city;
        $address-> street = $request -> street;

       

        //插入
        if($address->save()){
            return redirect('/address')->with('success','更新成功');
            
        }else{
            return back()->with('error','更新失败!');
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
        //
        $address = Address::findOrFail($id);

        if($address -> delete()){
            return redirect('/address')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        }  
    }
}
