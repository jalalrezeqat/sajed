@extends('admin.layouts.app')
@section('content')
<div>
    <a href="{{route('admin.sliderteacher.add')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى سلايدر المعلم</button></a>

  </div>
  
        <div class=" table-responsive">
  
          <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
              <tr class="">
                <th scope="col ">الصورة</th>
                <th scope="col">الصفحة </th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($teacher as $teacher)
              <tr>
                <td class="tdnamecontectus "><img class="img-slider" src="{{asset('img/slider/'.$teacher->img)}}" alt=""></td>
                <td class="">{{$teacher->page}} </td>
    
                <td class="">  <a href="{{route('admin.sliderteacher.edit',$teacher->id)}}"  class="btn btn-success editdelete">تعديل</a>
                      <a href="{{route('admin.slider.destroy',$teacher->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
                </td>
              
              </tr> 
             @endforeach
            </tbody>
          </table>
          </div>


@endsection