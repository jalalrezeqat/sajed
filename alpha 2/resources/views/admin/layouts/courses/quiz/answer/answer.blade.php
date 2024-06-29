

@extends('admin.layouts.app')
@section('content')

<div>

    <a href="{{route('admin.answers.add')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى  الاجابات </button></a>
    </div>

    <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col"> الاجابات</th>                
              <th scope="col "> السؤال </th>
              <th scope="col"> الاختبار</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($answers as $answers )
            <tr>
             <td class="tdnamecontectus">{{$answers->name}} </td>
              <td class="tdnamecontectus">{{$quiz->name}} </td>
              <td class="">{{$quiz->quizzes}} </td>

              <td class=""> 
              <a href="{{route('admin.quiz.answers',$answers->id)}}"  class="btn btn-success editdelete"> اضافة الاجوبة </a>
                 <a href="{{route('admin.answers.edit',$answers->id)}}"  class="btn btn-dark editdelete">تعديل </a>
                 <a href="{{route('admin.answers.destroy',$answers->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
                 
              </td>

            </tr>
              @endforeach

          </tbody>
        </table>
        </div>
@endsection