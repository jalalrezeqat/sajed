<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teachers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\user;
use Illuminate\Support\Facades\Auth;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tetcher =  DB::table('teachers')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.teacher.teacher', compact('tetcher'));
        } else
            return redirect()->back();
    }
    public function indexdashbord()
    {
        $tetcher =  DB::table('users')->where('stutes', '=', '1')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.teacher.teacherdashbord', compact('tetcher'));
        } else
            return redirect()->back();
    }

    public function viweaddteacher()

    {
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.teacher.viweaddteacher');
        } else
            return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tetcher =  DB::table('teachers')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.teacher.teaherdashbordadd', compact('tetcher'));
        } else
            return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $student = new teachers();
        $student->name = $request->input('name');
        $student->summernote = $request->input('summernote');


        if ($request->hasfile('img')) {

            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('img/teacher/', $filename);
            $student->img = $filename;
        }
        if ($request->hasfile('sliders_teacher')) {

            $file = $request->file('sliders_teacher');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('img/slidertetcher/', $filename);
            $student->sliders_teacher = $filename;
        }

        $student->save();
        return  redirect()->route('admin.teacher');
    }
    public function storeteacherdahbord(Request $request)
    {
        $post = new user();
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->phone = $request->input('phone');
        $post->id_teacher = $request->input('id_teacher');
        $post->password = $request->input('password');
        $post->password_verified_at = $request->input('password_verified_at');
        $post->branch = '-';
        $post->Governorate = '-';
        $post->stutes = '1';




        //    $post->user_img =$request->input('user_img');
        if ($request->hasfile('user_img')) {

            $distination = 'img/user_profile/' . $post->user_img;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('user_img');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/user_profile/', $file_name);
            $post->user_img     = $file_name;
        }
        $post->save();
        return  redirect()->route('admin.teacher.dashbord');
    }
    public function updatedashbord(Request $request, $id)
    {
        $post = user::find($id);
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->phone = $request->input('phone');
        $post->id_teacher = $request->input('id_teacher');

        //    $post->user_img =$request->input('user_img');
        if ($request->hasfile('user_img')) {

            $distination = 'img/user_profile/' . $post->user_img;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('user_img');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/user_profile/', $file_name);
            $post->user_img     = $file_name;
        }
        $post->save();

        return  redirect()->route('admin.teacher.dashbord');
    }

    public function editdashbord(Request $request, $dashbord)
    {
        $tetcher =  DB::table('teachers')->get();
        $user = DB::table('users')->where('id', '=', $dashbord)->first();
        return view('admin.layouts.courses.teacher.editdashbord', compact('dashbord', 'user', 'tetcher'));
    }

    /**
     * Display the specified resource.
     */
    public function show(rc $rc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teachers $teacher)
    {
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.teacher.edit', compact('teacher'));
        } else
            return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $post = teachers::find($id);
        $post->name = $request->input('name');
        $post->summernote = $request->input('summernote');

        if ($request->hasfile('img')) {

            $distination = 'img/teacher/' . $post->img;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('img');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/teacher/', $file_name);
            $post->img     = $file_name;
        }
        if ($request->hasfile('sliders_teacher')) {

            $distination = 'img/slidertetcher/' . $post->sliders_teacher;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('img');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/slidertetcher/', $file_name);
            $post->sliders_teacher     = $file_name;
        }
        $post->save();

        return  redirect()->route('admin.teacher');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $teacher_id)
    {
        $post = teachers::find($teacher_id);
        $sliderDb = DB::table('teachers');
        $sliderdelete = $sliderDb->where('id', $teacher_id);
        $distination = 'img/teacher/' . $post->img;
        $distinationslider = 'img/slidertetcher/' . $post->sliders_teacher;
        if (File::exists($distination)) {
            File::delete($distination);
        }
        if (File::exists($distinationslider)) {
            File::delete($distinationslider);
        }
        $sliderdelete->delete();

        return  redirect()->back();
    }
    public function destroydashbord(int $teacher_id)
    {
        $post = user::find($teacher_id);
        $sliderDb = DB::table('users');
        $sliderdelete = $sliderDb->where('id', $teacher_id);
        $distinationslider = 'img/user_profile/' . $post->user_img;

        if (File::exists($distinationslider)) {
            File::delete($distinationslider);
        }
        $sliderdelete->delete();

        return  redirect()->back();
    }
}
