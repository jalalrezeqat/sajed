
@extends('admin.layouts.app')
@section('content')

    <div>

    <a href="{{route('admin.codegenaret.add')}}"><button  class="btnaboutadd btn btn-dark">انشاء كود</button></a>
   
    </div>

    <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col ">الكود</th>
              <th scope="col"> الدورة</th>
              <th scope="col"> اسم الطالب</th>
              <th scope="col"> تاريخ البداية</th>
              <th scope="col"> تاريخ النهاية</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($code as $code)
            <tr>
              <td class="tdnamecontectus">{{$code->code}} </td>
              <td class="">{{$code->courses}} </td>
              <td class="">{{$code->user}} </td>
              <td class="">{{$code->startcode}} </td>
              <td class="">{{$code->endcode}} </td>

              <td class=""> 
                 <a href="{{route('admin.codegenaret.edit',$code->id)}}"  class="btn btn-dark editdelete">تعديل </a>
                 <a href="{{route('admin.codegenaret.destroy',$code->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
              </td>
            
            </tr>
           @endforeach
          </tbody>
        </table>
        </div>
@endsection