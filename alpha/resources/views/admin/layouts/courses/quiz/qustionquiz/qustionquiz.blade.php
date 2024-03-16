
@extends('admin.layouts.app')
@section('content')

<div>

    <a href="{{route('admin.quiz.add')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى  الاسئلة </button></a>
    </div>

    <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col "> السؤال </th>
              <th scope="col"> الاختبار</th>
              <th scope="col"> الدورة</th>
              <th scope="col">الوحدة </th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

            <tr>
            <td class="tdnamecontectus">{{$qustionquiz->name}} </td>
            @foreach ($quiz as $quizs)

              <td class="tdnamecontectus">{{$quizs->name}} </td>
              <td class="">{{$quizs->courses}} </td>
               <td class="tdnamecontectus">{{$quizs->chabters}} </td> 
               @endforeach

  
              <td class=""> 
              <a href="{{route('admin.quiz.answers',$qustionquiz->id)}}"  class="btn btn-success editdelete"> اضافة الاجوبة </a>
                 <a href="{{route('admin.questionscours.edit',$quizs->id)}}"  class="btn btn-dark editdelete">تعديل </a>
                 <a href="{{route('admin.questionscours.destroy',$quizs->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
                 
              </td>
            
            </tr>
          </tbody>
        </table>
        </div>
@endsection