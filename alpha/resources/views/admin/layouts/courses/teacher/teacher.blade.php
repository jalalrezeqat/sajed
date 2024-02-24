
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
              @foreach ($tetcher as $tetcher)
            <tr>
              <td class="tdnamecontectus "><img class="img-slider" src="{{asset('img/teacher/'.$tetcher->img)}}" alt=""></td>
              <td class="">{{$tetcher->name}} </td>
              <td class="tdnamecontectus "><img class="img-slider" src="{{asset('img/slidertetcher/'.$tetcher->sliders_teacher)}}" alt=""></td>

              <td class="">  <a href="{{route('admin.teacher.edit',$tetcher->id)}}"  class="btn btn-success editdelete">تعديل</a>
                    <a href="{{route('admin.teacher.destroy',$tetcher->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
              </td>
            
            </tr>
           @endforeach
          </tbody>
        </table>
        </div>

@endsection