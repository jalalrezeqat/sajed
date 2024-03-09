
@extends('admin.layouts.app')
@section('content')

<div>

    <a href="{{route('admin.questionscours')}}"><button  class="btnaboutadd btn btn-dark">رجوع </button></a>
    <a href="{{route('admin.courses.questionscoursadd',$courses->id)}}"><button  class="btnaboutadd btn btn-dark">اضافة الى لااسئلة</button></a>

    </div>

    <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col ">السؤال </th>
              <th scope="col">نص السؤال</th>
              <th scope="col">الدورة </th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($questionscours as $questionscours)
            <tr>
              <td class="tdnamecontectus">{{$questionscours->question}} </td>
              {{-- <td class="tdnamecontectus">{{$questionscours->question_text}} </td> --}}
              <td class="">{{$questionscours->course}} </td>
  
              <td class=""> 
                 <a href="{{route('admin.questionscours.edit',$questionscours->id)}}"  class="btn btn-dark editdelete">تعديل </a>

                 <a href="{{route('admin.questionscours.destroy',$questionscours->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
                 
              </td>
            
            </tr>
           @endforeach
          </tbody>
        </table>
        </div>
@endsection