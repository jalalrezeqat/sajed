
@extends('admin.layouts.app')
@section('content')

<div>
  <a href="{{ url()->previous() }}"><button  class="btnaboutadd btn btn-dark">رجوع </button></a>
  <a href="{{route('admin.courses.lessonadd',$chabter->id)}}"><button  class="btnaboutadd btn btn-dark">اضافة الى الدرس</button></a>
   
    </div>

    <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col ">اسم الدرس</th>
              <th scope="col">اسم الفصل</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($lesson as $lesson)
            <tr>
              <td class="tdnamecontectus">{{$lesson->name}} </td>
              <td class="">{{$lesson->chabters}} </td>
  
              <td class=""> 
                <a href="{{route('admin.courses.lesson.viwe1',$lesson->id)}}"  class="btn btn-info editdelete">مشاهدة الدرس </a>
                 <a href="{{route('admin.lesson.edit',$lesson->id)}}"  class="btn btn-success editdelete">تعديل </a>
                 <a href="{{route('admin.lesson.destroy',$lesson->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
                 
              </td>
            
            </tr>
           @endforeach
          </tbody>
        </table>
        </div>
@endsection