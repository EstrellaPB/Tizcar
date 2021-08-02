<?php

namespace App\Http\Controllers;
use App\Sale;
use App\Customer;
use App\Automobile;
use App\Employee;


use App\Http\Requests\SaleRequest;


class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::All();
        return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::All();
        $automobiles = Automobile::All();
        $employees = Employee::All();
     
        return view('sales.create', compact('customers', 'automobiles', 'employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleRequest $request)
    {
        $sale = new Sale;
        $sale->customer_id =  $request->input('customer');
        $sale->employee_id =  $request->input('employee');
        $sale->automobile_id =  $request->input('automobile');
        $sale->extra = $request->input('extra');
        $sale->total = $request->input('total');
        $sale->save();
        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sale::findOrFail($id);
        return view('sales.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $customers = Customer::All();
        $automobiles = Automobile::All();
        $employees = Employee::All();
        $sale = Sale::findOrFail($id);
        return view('sales.edit', compact('sale', 'customers', 'automobiles', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaleRequest $request, $id)
    {
        $sale = Sale::findOrFail($id);
        $sale->customer_id =  $request->input('customer');
        $sale->employee_id =  $request->input('employee');
        $sale->automobile_id =  $request->input('automobile');
        $sale->extra = $request->input('extra');
        $sale->total = $request->input('total');
        $sale->update();
        return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = Sale::findOrFail($id)->delete();
        return redirect()->route('sales.index');
    }
}
