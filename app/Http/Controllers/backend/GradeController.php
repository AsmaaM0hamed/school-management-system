<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\backend\grade;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grades=grade::all();
        return view('backend.grades.allgrades',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.grades.addgrades');
    }


    public function store(Request $request)
    {

        grade::create
        ([
            'name'=>[
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ],
            'nots'=>$request->nots,

        ]);

         return redirect()->back()->with('add','تم اضافة المرحلة الدراسية');
    }


    public function show(grade $grade)
    {
        //
    }



    public function edit($id)
    {
        //
        $grade=grade::findorfail($id);

      return view("backend.grades.editgrades",compact("grade"));

    }


    public function update(Request $request, $id)
    {
        //
        grade::where('id',$id)
        ->update
        ([
            'name'=>[
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ],
            'nots'=>$request->nots,

        ]);
        return redirect()->route("grades.index")->with('edit','تم التعديل بنجاح');
    }

    public function destroy($id)
    {
        //
        grade::destroy($id);
        return redirect()->back()->with('delet','تم الحذف بنجاح');
    }
}
