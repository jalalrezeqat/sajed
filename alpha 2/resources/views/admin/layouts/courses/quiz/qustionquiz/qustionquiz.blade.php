
@extends('admin.layouts.app')
@section('content')

<div>

    <a href="{{route('admin.qustionquizzes.add')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى  الاسئلة  </button></a>
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
            @foreach ($qustionquizzes as $qustionquizzes )

            <tr>
             <td class="tdnamecontectus">{{$qustionquizzes->name}} </td>

              <td class="tdnamecontectus">{{$quiz->name}} </td>
              <td class="">{{$quiz->courses}} </td>
               <td class="tdnamecontectus">{{$quiz->chabters}} </td> 

  
              <td class=""> 
              <a href="{{route('admin.quiz.answers',$qustionquizzes->id)}}"  class="btn btn-success editdelete"> اضافة الاجوبة </a>
                 <a href="{{route('admin.qustion.edit',$qustionquizzes->id)}}"  class="btn btn-dark editdelete">تعديل </a>
                 <a href="{{route('admin.qustion.destroy',$qustionquizzes->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
                 
              </td>

            </tr>
                @endforeach

          </tbody>
        </table>
        </div>
@endsection