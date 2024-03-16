
@extends('admin.layouts.app')
@section('content')

<div>

    <a href="{{route('admin.quiz.add')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى  الاختبارات </button></a>
    </div>

    <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col ">اسم الاختبار </th>
              <th scope="col"> الدورة</th>
              <th scope="col">الوحدة </th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($quiz as $quizs)
            <tr>
              <td class="tdnamecontectus">{{$quizs->name}} </td>
              <td class="">{{$quizs->courses}} </td>
               <td class="tdnamecontectus">{{$quizs->chabters}} </td> 

  
              <td class=""> 
                 <a href="{{route('admin.questionscours.edit',$quizs->id)}}"  class="btn btn-dark editdelete">تعديل </a>

                 <a href="{{route('admin.questionscours.destroy',$quizs->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
                 
              </td>
            
            </tr>
           @endforeach
          </tbody>
        </table>
        </div>
@endsection