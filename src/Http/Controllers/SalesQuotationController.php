<?php

namespace Olee\Sales\Http\Controllers;
use Olee\Sales\Models\SalesQuotation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SalesQuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sales::salesQuotation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesQuotation  $salesQuotation
     * @return \Illuminate\Http\Response
     */
    public function show(SalesQuotation $salesQuotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesQuotation  $salesQuotation
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesQuotation $salesQuotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalesQuotation  $salesQuotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesQuotation $salesQuotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesQuotation  $salesQuotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesQuotation $salesQuotation)
    {
        //
    }
}
