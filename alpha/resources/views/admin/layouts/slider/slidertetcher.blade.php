@extends('admin.layouts.app')
@section('content')
<div>
    <a href="{{route('admin.slidertetcher.add')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى سلايدر المعلم</button></a>

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
                @foreach ($tetcher as $tetcher)
              <tr>
                <td class="tdnamecontectus "><img class="img-slider" src="{{asset('img/slider/'.$tetcher->img)}}" alt=""></td>
                <td class="">{{$tetcher->page}} </td>
    
                <td class="">  <a href="{{route('admin.slidertetcher.edit',$tetcher->id)}}"  class="btn btn-success editdelete">تعديل</a>
                      <a href="{{route('admin.slider.destroy',$tetcher->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
                </td>
              
              </tr> 
             @endforeach
            </tbody>
          </table>
          </div>


@endsection