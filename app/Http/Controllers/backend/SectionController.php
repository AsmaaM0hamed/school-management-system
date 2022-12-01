<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\backend\grade;
use App\Models\backend\section;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\backend\classe;

class SectionController extends Controller
{

    public function index()
    {

        $grades=grade::all();

      return view('backend.sections.section',compact('grades'));
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


    public function store(Request $request)
    {
        //
       return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(section $section)
    {
        //
    }

}
