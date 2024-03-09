
@extends('admin.layouts.app')
@section('content')

    <div>

    <a href="{{route('admin.courses.viweaddcourses')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى الاسئلة الشائعة</button></a>
   
    </div>

    <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col ">اسم الدورة</th>
              <th scope="col">حول الدورة  </th>
              <th scope="col"></th>
               
            </tr>
          </thead>
          <tbody>
              @foreach ($courses as $courses)
            <tr>
              <td class="tdnamecontectus">{{$courses->name}} </td>
              <td class="">{{$courses->aboutcourse}} </td>
              <td class=""> 
                 <a href="{{route('admin.courses.questionscours',$courses->id)}}"  class="btn btn-success editdelete">مشاهدة الاسئلة الشائعة</a>
                 <a href="{{route('admin.courses.edit',$courses->id)}}"  class="btn btn-dark editdelete">تعديل </a>
                 <a href="{{route('admin.courses.destroy',$courses->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
                
              </td>
            
            </tr>
           @endforeach
          </tbody>
        </table>
        </div>
@endsection