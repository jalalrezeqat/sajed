@extends('admin.layouts.app')
@section('content')
<div>


  <a href="{{route('admin.about.add')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى مهمتنا</button> </a>
</div>
<div class=" table-responsive">
    <table class=" table-admin-connectus  ">
        <thead class="thead-green-connectus">
          <tr class="">
            <th scope="col ">رؤيتنا</th>
            <th scope="col"></th>
           
          </tr>
        </thead>
        <tbody>
            @foreach ($vision as $vision)
          <tr>
            <td class=""> {{$vision->our_vision}} </td>
            <td> <a href="{{route('admin.about.editvistion',$vision->id)}}"  class="btn btn-success">تعديل</a>
                  <a href="{{route('admin.about.destroy',$vision->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger">حذف</a>
            </td>
          
          </tr>
         @endforeach
        </tbody>
      </table>

      <table class=" table-admin-connectus  ">
        <thead class="thead-green-connectus">
          <tr class="">
            <th scope="col ">مهمتنا</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($mission as $mission)
          <tr>
            <td class="tdnamecontectus">{{$mission->our_mission_titel}} </td>
            <td class="">{{$mission->our_mission_text}} </td>

            <td> <a href="{{route('admin.about.edit',$mission->id)}}"  class="btn btn-success">تعديل</a>
                  <a href="{{route('admin.about.destroy',$mission->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger">حذف</a>
            </td>
          
          </tr>
         @endforeach
        </tbody>
      </table>
      </div>

   

@endsection