<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //function index untuk menampilkan data customer dan proses pencarian dan diarahkan ke view index
    public function index(Request $request)
    {
        if($request->has('search')){
            $data_customer =\App\Models\Customer::where('nama', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $data_customer =\App\Models\Customer::all();
        }
        return view('customer.index',['data_customer' => $data_customer]);
    }

    //function create untuk menambhakan/menginput data customer 
    public function create(Request $request)
    {
        \App\Models\Customer::create($request->all());
        return redirect('/customer')->with('sukses', 'Data pendaftar berhasil ditambahkan!');
    }

    //function edit untuk mengedit data customer 
    public function edit($id)
    {
        $customer = \App\Models\Customer::find($id);
        return view('/customer/edit', ['customer' => $customer]);
    }

    //function create untuk mengupdate data customer 
    public function update(Request $request, $id)
    {
        $customer = \App\Models\Customer::find($id);
        $customer -> update($request->all());
        return redirect('/customer')->with('sukses', 'Data pendaftar berhasil diupdate!');
    }

    //function create untuk menghapus data customer 
    public function delete($id)
    {
        $customer = \App\Models\Customer::find($id);
        $customer -> delete($customer);
        return redirect('/customer')->with('sukses', 'Data pendaftar berhasil dihapus!');
    }

    
}
