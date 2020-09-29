<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\statu;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::withCount(['courts'])->where('id_state','!=','4')->get();
        // dd($customers);
        return view('customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->last_name = $request->lastName;
        $customer->dui = $request->dui;
        $customer->nit = $request->nit;
        $customer->direction = $request->direction;
        $customer->telephone_number = $request->phone;
        $customer->cell_phone_number = $request->cellPhone;
        $customer->note = $request->note;
        $customer->id_state = "1";
        if ($customer->save()) {
            return redirect('/');
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
        $customer = Customer::find($id);
        $status = Statu::get();
        return view('customer.edit',compact('customer','status'));
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
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->last_name = $request->lastName;
        $customer->dui = $request->dui;
        $customer->nit = $request->nit;
        $customer->direction = $request->direction;
        $customer->telephone_number = $request->phone;
        $customer->cell_phone_number = $request->cellPhone;
        $customer->note = $request->note;
        $customer->id_state = "1";
        if ($customer->save()) {
            return redirect('/');
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
        $customers = Customer::withCount(['courts'])->find($id);
        // dd($customers->courts_count);
        if ($customers->courts_count == "0") {
            $client = Customer::find($id);
            $client->id_state = "4";
            $client->save();
            return redirect('/');
        }
        else{
            return redirect('/');
        }
    }
}
