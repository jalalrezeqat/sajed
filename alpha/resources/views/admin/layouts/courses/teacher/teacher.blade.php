
@extends('admin.layouts.app')
@section('content')

    <div>

    <a href="{{route('admin.teacher.viweaddteacher')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى المعلم</button></a>
   
    </div>

    <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col ">الصورة</th>
              <th scope="col">اسم المدرس </th>
              <th scope="col">معلومات المدرس </th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($tetcher as $tetchers)
            <tr>
              <td class="tdnamecontectus "><img class="img-slider" src="{{asset('img/teacher/'.$tetchers->img)}}" alt=""></td>
              <td class="">{{$tetchers->name}} </td>
              <td class=" ">
                <?php
                echo     $tetchers->summernote
                ?>
              </td>

              <td class=""> <a href="{{route('admin.teacher.edit',$tetchers->id)}}"  class="btn btn-success editdelete">تعديل</a>
                    <a href="{{route('admin.teacher.destroy',$tetchers->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
              </td>
            
            </tr>
           @endforeach
          </tbody>
        </table>
        </div>

@endsection