<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use App\Models\Result;
use Illuminate\Support\Facades\DB;
use App\Models\codecard;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(): View
    {
        $course = DB::table('codecards')->where('user_id', '=', Auth::user()->id)->get();
        $coursename = DB::table('courses')->where('status', '=', '1')->get();
        $lessonid  = DB::table('plays')->get();
        $quizreselt = DB::table('results')->where('user_id', '=', Auth::user()->id)->get();
        $quiz = DB::table('categories')->get();
        $lessons = DB::table('lessons')->get();
        $prog = DB::table('playbacks')->where('idofstudant', '=', Auth::user()->id)->get();
        $coures = DB::table('courses')->where('teacher_name', '=', Auth::user()->id_teacher)->get();
        $code = DB::table('codecards')->where('user_id', '!=', null)->get();
        $code1 = DB::table('codecards')->where('user_id', '!=', null)->count();
        foreach ($coures as $couress) {
            $code = DB::table('codecards')->where('user_id', '!=', null)->get();
            $code1 = DB::table('codecards')->where('user_id', '!=', null)->count();
            $code
                = DB::table('codecards')->where('user_id', '!=', null)
                ->where('courses', '=', $couress->id)->get();
        }
        return view('dashboard', compact('coures', 'code', 'code1', 'quizreselt', 'prog', 'lessons', 'course', 'coursename', 'lessonid', 'quiz'));
    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function couresserch(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');
        $coures = DB::table('courses')->where('teacher_name', '=', Auth::user()->id_teacher)->get();

        foreach ($coures as $couress) {
            // $code = DB::table('codecards')->where('user_id', '!=', null)->get();
            $code1 = DB::table('codecards')->where('user_id', '!=', null)->count();
            $code = DB::table('codecards')->where('user_id', '!=', null)
                ->where('courses', '=', $couress->id)->where('startcode', '>', $start)
                ->where('startcode', '<', $end)->get();
        }
        return view('profile.couresserch', compact('coures', 'code', 'code1', 'start', 'end'));
    }
    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    public function update(Request $request, $id)
    {


        $post = user::find($id);
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->phone = $request->input('phone');
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

        return  redirect()->route('dashboard');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function passwordChange()
    {
        return view('profile.update-password-form');
    }

    public function changePasswordSave(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "!كلمة المرور القديمة خاطئة ");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "تم تغير كلمة المرور");
    }
}