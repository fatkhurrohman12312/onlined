<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $photo_path = $request->file('photo')->storeAs('public/teachers',$filename);

        //menghapus string 'public/' karena dapat menyulitkan pemanggilan di blade.
        $photo_path = str_replace('public/','',$photo_path); 

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'work_hour' => $request->work_hour,            
            'photo' => $photo_path,
        ];

        $teacher = Teacher::create($data);

        return redirect()->route('admin.teacher.index');
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
        $teacher = Teacher::find($id);
        return view('admin.teacher.update', compact('teacher'));
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
        $file = $request->file('photo');
        if ($file != null) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $photo_path = $request->file('photo')->storeAs('public/teachers',$filename);
            //menghapus string 'public/' karena dapat menyulitkan pemanggilan di blade.
            $photo_path = str_replace('public/','',$photo_path); 
        }


        $teacher = Teacher::find($id);

        $teacher->name = $request->name;
        $teacher->description = $request->description;
        $teacher->work_hour = $request->work_hour;
        if ($file != null) {
            $teacher->photo = $photo_path;
        }
        $teacher->save();

        return redirect()->route('admin.teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect()->route('admin.teacher.index');
    }
}
