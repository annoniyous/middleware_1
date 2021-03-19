<?php

namespace App\Http\Controllers;

use App\Models\Backoffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackofficeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware("auth")->only(["index"]);
    // }
    public function __construct()
    {
        $this->middleware("isConnected");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.backoffice");
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
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function show( $backoffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function edit( $backoffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $backoffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function destroy( $backoffice)
    {
        //
    }
}