<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Visitor;
use App\Models\User;
use App\Models\aboutmore;
use App\Models\Admin;
use Illuminate\Support\Facades\File;


use Illuminate\Support\Facades\Hash;

use App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 2024-06-21

        ////bar chart
        $January = DB::table('visitors')->where('visited_at', '>=', '2024-1-1')->where('visited_at', '<=', '2024-1-31')->count();
        $February = DB::table('visitors')->where('visited_at', '>=', '2024-2-1')->where('visited_at', '<=', '2024-2-31')->count();
        $March = DB::table('visitors')->where('visited_at', '>=', '2024-3-1')->where('visited_at', '<=', '2024-3-31')->count();
        $April = DB::table('visitors')->where('visited_at', '>=', '2024-4-1')->where('visited_at', '<=', '2024-4-31')->count();
        $May = DB::table('visitors')->where('visited_at', '>=', '2024-5-1')->where('visited_at', '<=', '2024-5-31')->count();
        $June = DB::table('visitors')->where('visited_at', '>=', '2024-6-1')->where('visited_at', '<=', '2024-6-31')->count();
        $July = DB::table('visitors')->where('visited_at', '>=', '2024-7-1')->where('visited_at', '<=', '2024-7-31')->count();
        $August = DB::table('visitors')->where('visited_at', '>=', '2024-8-1')->where('visited_at', '<=', '2024-8-31')->count();
        $September = DB::table('visitors')->where('visited_at', '>=', '2024-9-1')->where('visited_at', '<=', '2024-9-31')->count();
        $October = DB::table('visitors')->where('visited_at', '>=', '2024-10-1')->where('visited_at', '<=', '2024-10-31')->count();
        $November = DB::table('visitors')->where('visited_at', '>=', '2024-11-1')->where('visited_at', '<=', '2024-11-31')->count();
        $December = DB::table('visitors')->where('visited_at', '>=', '2024-12-1')->where('visited_at', '<=', '2024-12-31')->count();

        // dd($January1->visited_at >= '1-6' & $January1->visited_at <= '20-6');
        $data1 = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            'data' => [$January, $February, $March, $April, $May, $June, $July, $August, $September, $October, $November, $December],
        ];

        //// bi chart
        $hebron = DB::table('users')->where('Governorate', '=', 'الخليل')->count();
        $ramallah = DB::table('users')->where('Governorate', '=', 'رام الله والبيرة')->count();
        $betlahem = DB::table('users')->where('Governorate', '=', 'بيت لحم')->count();
        $nables = DB::table('users')->where('Governorate', '=', 'نابلس')->count();
        $jereco = DB::table('users')->where('Governorate', '=', 'اريحا')->count();
        $jeneen = DB::table('users')->where('Governorate', '=', 'جنبن')->count();
        $twbas = DB::table('users')->where('Governorate', '=', 'طوباس')->count();
        $jerusalem = DB::table('users')->where('Governorate', '=', 'القدس')->count();
        $twlkarem = DB::table('users')->where('Governorate', '=', 'طولكرم')->count();
        $slfet = DB::table('users')->where('Governorate', '=', 'سلفيت')->count();
        $qalqelia = DB::table('users')->where('Governorate', '=', 'قلقيلية')->count();
        $gaza = DB::table('users')->where('Governorate', '=', 'قطاع غزة')->count();




        // Replace this with your actual data retrieval logic
        $data = [
            'labels' => ['الخليل', 'رام الله والبيرة', 'بيت لحم', 'نابلس', 'اريحا', 'جنين', 'طوباس', 'القدس', 'طولكرم', 'سلفيت', 'قلقيلية', 'قطاع غزة'],
            'data' => [$hebron, $ramallah, $betlahem, $nables, $jereco, $jeneen, $twbas, $jerusalem, $twlkarem, $slfet, $qalqelia, $gaza],
        ];
        $countonline = DB::table(config('session.table'))
            ->distinct()
            ->select(['users.id', 'users.name', 'users.email'])
            ->whereNotNull('user_id')
            ->where('sessions.last_activity', '>', Carbon::now()->subMinutes(30)->getTimestamp())
            ->leftJoin('users', config('session.table') . '.user_id', '=', 'users.id')
            ->get();

        $numberofvisit = DB::table(config('session.table'))->count();
        $sumstudantinsubs = DB::table('codecards')->where('user_id', '!=', null)->count();
        $user = DB::table('users')->where('stutes', '!=', 1)->count();
        return view('admin.layouts.dashboard', compact('sumstudantinsubs', 'user', 'countonline', 'data', 'data1'));
    }

    public function studantdetales()

    {
        $user = DB::table('users')->where('id_teacher', '=', Null)->get();
        $usercount = DB::table('users')->where('id_teacher', '=', Null)->count();
        $msg = ' عدد الطلاب المسجلين في المنصة   : ';
        $code  = DB::table('codecards')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.chart.studant', compact('user', 'usercount', 'msg', 'code'));
        } else
            return redirect()->back();
    }
    public function studantserch(Request $request)

    {

        $code  = DB::table('codecards')->get();
        $user = DB::table('users')->get();

        $studant = $request->input('studant');
        // $student->name = $request->input('studant');
        if ($studant == '1') {
            $count = 0;
            foreach ($user as $users) {

                foreach ($code as $codes) {

                    $user1 = DB::table('users')->where('id', '=', $codes->user_id)->get();
                    $usercount = DB::table('users')->where('id', '=', $codes->user_id)->count();
                }
            }
            $msg = 'عدد الطلاب المشتركين : ';
        } elseif ($studant == '2') {
            foreach ($code as $codes) {
                foreach ($user as $users) {
                    $user = DB::table('users')->where('id_teacher', '=', Null)->get();
                    // $usercount = DB::table('users')->where('id_teacher', '=', Null)->where('id', '!=', $codes->user_id)->count();
                    $msg = 'عدد الطلاب غير المشتركين : ';
                }
            }
        }
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.chart.studantserch', compact('user', 'user1', 'code',  'msg'));
        } else
            return redirect()->back();
    }

    public function couresstauet()
    {
        $coures = DB::table('courses')->get();

        foreach ($coures as $couress) {
            $code = DB::table('codecards')->where('user_id', '!=', null)->get();
            $code1 = DB::table('codecards')->where('user_id', '!=', null)->count();
            $code
                = DB::table('codecards')->where('user_id', '!=', null)
                ->where('courses', '=', $couress->id)->get();
        }
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.chart.couresstut', compact('coures', 'code', 'code1'));
        } else
            return redirect()->back();
    }
    public function couresserch(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');
        $coures = DB::table('courses')->get();

        foreach ($coures as $couress) {
            $code = DB::table('codecards')->where('user_id', '!=', null)->get();
            $code1 = DB::table('codecards')->where('user_id', '!=', null)->count();
            $code
                = DB::table('codecards')->where('user_id', '!=', null)
                ->where('courses', '=', $couress->id)->where('startcode', '>', $start)
                ->where('startcode', '<', $end)->get();
        }
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.chart.couresserch', compact('coures', 'code', 'code1', 'start', 'end'));
        } else
            return redirect()->back();
    }

    public function countstudant()
    {
        $coures = DB::table('courses')->get();

        foreach ($coures as $couress) {
            $code = DB::table('codecards')->where('user_id', '!=', null)->get();
            $code1 = DB::table('codecards')->where('user_id', '!=', null)->count();
            $code
                = DB::table('codecards')->where('user_id', '!=', null)
                ->where('courses', '=', $couress->id)->get();
        }
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.chart.countstudant', compact('coures', 'code', 'code1'));
        } else
            return redirect()->back();
    }

    public function codesarch(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');
        $coures = DB::table('codecards')->get();
        $user
            = DB::table('users')->get();
        foreach ($coures as $couress) {
            // $code = DB::table('codecards')->where('user_id', '!=', null)->get();
            // $code1 = DB::table('codecards')->where('user_id', '!=', null)->count();
            $code
                = DB::table('codecards')->where('user_id', '!=', null)
                ->where('startcode', '>', $start)
                ->where('startcode', '<', $end)->get();
            $codecount
                = DB::table('codecards')->where('user_id', '!=', null)
                ->where('startcode', '>', $start)
                ->where('startcode', '<', $end)->count();
        }
        $courses = DB::table('courses')->get();

        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.chart.codeserch', compact('coures', 'code', 'codecount', 'start', 'end', 'courses', 'user'));
        } else
            return redirect()->back();
    }

    public function editpassword(Request $request, $id)

    {
        $user = DB::table('users')->where('id', '=', $id)->first();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.chart.editpassword', compact('user'));
        } else
            return redirect()->back();
    }
    public function changePasswordSave2(Request $request, $id)
    {
        # Validation
        $user = DB::table('users')->where('id', '=', $id)->first();


        #Match The Old Password
        // if (!Hash::check($request->old_password, auth()->user()->password)) {
        //     return back()->with("error", "!كلمة المرور القديمة خاطئة ");
        // }


        #Update the new Password
        DB::table('users')->where('id', '=', $user->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "تم تغير كلمة المرور");
    }
    public function orderserch(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');
        $coures = DB::table('orders')->get();
        $coureses = DB::table('courses')->get();

        foreach ($coures as $couress) {
            $code = DB::table('codecards')->where('user_id', '!=', null)->get();
            $code1 = DB::table('codecards')->where('user_id', '!=', null)->count();


            $todaytimestamp = strtotime($start);
            $starttimestamp = strtotime($end);
            $order
                = DB::table('orders')
                ->whereBetween('orders.created_at', [
                    date('Y-m-d 00:00:00', strtotime($start)),
                    date('Y-m-d 23:59:59', strtotime($end)),
                ])->get();
        }
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.chart.orderserch', compact('coures', 'coureses', 'code', 'order', 'code1', 'start', 'end'));
        } else
            return redirect()->back();
    }
    public function profile(Request $request, $id)
    {
        $admin = DB::table('admins')->where('id', '=', $id)->get();
        return view('Admin.profile', compact('admin'));
    }
    public function update(Request $request, $id)
    {

        $post = Admin::find($id);
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->save();

        return  redirect()->route('admin.dashboard');
    }
    public function passwordChange()
    {
        return view('Admin.password');
    }
    public function changePasswordSave1(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, Auth::guard('admin')->user()->password)) {
            return back()->with("error", "!كلمة المرور القديمة خاطئة ");
        }


        #Update the new Password
        Admin::whereId(Auth::guard('admin')->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("status", "تم تغير كلمة المرور ");
    }
    public function addAdmin(Request $request)
    {
        $admin = DB::table('admins')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('Admin.roule.addAdmin', compact('admin'));
        } else
            return redirect()->back();
    }
    public function addAdminStore(Request $request)
    {
        $admin = DB::table('admins')->get();

        return view('Admin.roule.addAdminStor', compact('admin'));
    }
    public function addAdminPost(Request $request)
    {
        $admin = DB::table('admins')->get();
        $user = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'stutes' => $request->stutes,
            'password_verified_at' => Hash::make($request->passwpassword_verified_atord),

        ]);

        return redirect()->route('admin.addAdmin');
    }

    public function destroyadmin(int $admin_id)
    {
        $connectusDb = DB::table('admins');
        $connectusdelete = $connectusDb->where('id', $admin_id);
        $connectusdelete->delete();

        return  redirect()->back();
    }
    public function editpasswordadmin(Request $request, $id)

    {
        $user = DB::table('admins')->where('id', '=', $id)->first();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('Admin.roule.editpassword', compact('user'));
        } else
            return redirect()->back();
    }
    public function postChangePasswordadminrouel(Request $request, $id)
    {
        # Validation



        #Match The Old Password



        #Update the new Password
        Admin::whereId($id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("status", "تم تغير كلمة المرور ");
    }

    public function aboutmore(Request $request)
    {
        $admin = DB::table('aboutmore')->get();

        return view('admin.layouts.about.aboutmore.aboutmore', compact('admin'));
    }
    public function aboutmoreadd(Request $request)
    {
        $admin = DB::table('aboutmore')->get();

        return view('admin.layouts.about.aboutmore.add', compact('admin'));
    }

    public function aboutmorestore(Request $request)
    {
        $student = new aboutmore();


        if ($request->hasfile('vedio')) {

            $file = $request->file('vedio');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('img/aboutmore/', $filename);
            $student->vedio = $filename;
        }
        $student->save();
        return  redirect()->route('admin.aboutmore');
    }

    public function aboutmoreedit(Request $request, $id)
    {
        $admin = DB::table('aboutmore')->where('id', '=', $id)->first();

        return view('admin.layouts.about.aboutmore.edit', compact('admin'));
    }

    public function aboutmoredestroy(int $aboutmore)
    {
        $connectusDb = DB::table('aboutmore');
        $connectusdelete = $connectusDb->where('id', $aboutmore);
        $connectusdelete->delete();

        return  redirect()->back();
    }
    public function aboutmoreupdate(Request $request, $id)
    {
        $post = aboutmore::find($id);
        if ($request->hasfile('vedio')) {

            $distination = 'img/aboutmore/' . $post->vedio;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('vedio');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/aboutmore/', $file_name);
            $post->vedio     = $file_name;
        }
        $post->save();

        return  redirect()->route('admin.aboutmore');
    }
}
