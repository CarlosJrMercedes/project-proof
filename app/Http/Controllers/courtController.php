<?php

namespace App\Http\Controllers;

use App\Models\Court;
use App\Models\Customer;
use App\Models\Statu;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class courtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $customer = Customer::with('state')->find($id);
        $cases = Court::with('state')->where('id_client','=',$id)->get();
        // dd($cases);
        return view('case.index', compact('cases','customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('case.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $case = new Court();
        $case->case_number = $request->number;
        $case->folio = $request->folio;
        $case->name = $request->name;
        $case->requirement = $request->requeri;
        $case->commentary = $request->comment;
        $case->id_state = "1";
        $case->id_client = $request->id_client;
        if ($case->save()) {
            return redirect("case/".$request->id_client."/index");
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
        $state = Statu::get();
        // dd($state);
        $cases = Court::with('state')->find($id);
        return view('case.edit', compact('cases','state'));
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
        $case = Court::find($id);
        $case->case_number = $request->number;
        $case->folio = $request->folio;
        $case->name = $request->name;
        $case->requirement = $request->requeri;
        $case->commentary = $request->comment;
        $case->id_state = $request->state;
        if ($case->save()) {
            return redirect("case/".$request->id_client."/index");
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
    }
}
