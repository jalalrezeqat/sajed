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
        $user = DB::table('users')->where('stutes', '=', null)->count();
        return view('admin.layouts.dashboard', compact('sumstudantinsubs', 'user', 'countonline', 'data', 'data1'));
    }

    public function studantdetales()

    {
        $user = DB::table('users')->where('id_teacher', '=', Null)->get();
        $usercount = DB::table('users')->where('id_teacher', '=', Null)->count();
        $msg = 'عدد الطلاب    : ';

        return view('admin.layouts.chart.studant', compact('user', 'usercount', 'msg'));
    }
    public function studantserch(Request $request)

    {

        $code  = DB::table('codecards')->get();
        $studant = $request->input('studant');
        // $student->name = $request->input('studant');
        if ($studant == '1') {

            foreach ($code as $codes) {
                $user = DB::table('users')->where('id', '=', $codes->user_id)->get();
                $usercount =
                    DB::table('users')->where('id', '=', $codes->user_id)->count();
                $msg = 'عدد الطلاب المشتركين : ';
            }
        } elseif ($studant == '2') {
            foreach ($code as $codes) {
                $user = DB::table('users')->where('id_teacher', '=', Null)->where('id', '!=', $codes->user_id)->get();
                $usercount =    DB::table('users')->where('id_teacher', '=', Null)->where('id', '!=', $codes->user_id)->count();
                $msg = 'عدد الطلاب غير المشتركين  : ';
            }
        }

        return view('admin.layouts.chart.studantserch', compact('user', 'usercount', 'msg'));
    }

    public function couresstauet()
    {
        $coures = DB::table('courses')->get();

        foreach ($coures as $couress) {
            $code  = DB::table('codecards')->where('user_id', '!=', null)->get();
            $code1 = DB::table('codecards')->where('user_id', '!=', null)->count();
            $code
                = DB::table('codecards')->where('user_id', '!=', null)
                ->where('courses', '=', $couress->id)->get();
        }
        return view('admin.layouts.chart.couresstut', compact('coures', 'code', 'code1'));
    }
    public function couresserch(Request $request)
    {
        $start = $request->input('stare');
        $end = $request->input('end');
        $coures = DB::table('courses')->get();

        foreach ($coures as $couress) {
            $code  = DB::table('codecards')->where('user_id', '!=', null)->get();
            $code1 = DB::table('codecards')->where('user_id', '!=', null)->count();
            $code
                = DB::table('codecards')->where('user_id', '!=', null)
                ->where('courses', '=', $couress->id)->where('startcode', '>', $start)
                ->where('startcode', '<', $end)->get();
        }
        return view('admin.layouts.chart.couresserch', compact('coures', 'code', 'code1', 'start', 'end'));
    }
}