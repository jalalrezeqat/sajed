@extends('admin.layouts.app')
@section('content')


<div>

    <a href="{{route('admin.questions.add')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى الاسئلة الشائعة</button> </a>
  </div>
  <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col ">السؤال</th>
              <th scope="col">نص السؤال</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($question as $question)
            <tr>
              <td class="tdnamecontectus">{{$question->question}} </td>
              <td class="">{{$question->question_text}} </td>
  
              <td class="">  <a href="{{route('admin.questions.edit',$question->id)}}"  class="btn btn-success editdelete">تعديل</a>
                    <a href="{{route('admin.questions.destroy',$question->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
              </td>
            
            </tr>
           @endforeach
          </tbody>
        </table>
        </div>


@endsection