<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\backend\grade;
use App\Models\backend\classe;
use App\Http\Controllers\Controller;

class ClasseController extends Controller
{

        public function index()
        {
            //
            $classes=classe::all();


           return view('backend.classes.allclasses',compact('classes'));
        }

        public function create()
        {
            //
            $grades= grade::all();
            return view('backend.classes.addclasses',compact('grades'));
        }


        public function store(Request $request)
        {
            //

            classe::create
            (
                [
                    'name'=>[
                        'en'=>$request->name_en,
                        'ar'=>$request->name_ar,
                    ],
                    'grade_id'=>$request->grade_id,
                ]
            );
            return redirect()->back()->with('add','تم اضافة المرحلة الدراسية');
        }


        public function show(classe $classe)
        {
            //
        }

        public function edit($id)
        {
            $class=classe::find($id);
            $grades=grade::all();
            return view('backend.classes.editclasses',compact('class','grades'));
        }


        public function update(Request $request, $id)

        {
            classe::where('id',$id)->update
            (
                [
                    'name'=>[
                        'en'=>$request->name_en,
                        'ar'=>$request->name_ar,
                    ],
                    'grade_id'=>$request->grade_id,
                ]
            );
            return redirect()->route("classes.index")->with('edit','تم التعديل بنجاح');
        }


        public function destroy($id)
        {
            //
            classe::destroy($id);
            return redirect()->back()->with('delet','تم الحذف بنجاح');

        }
}
