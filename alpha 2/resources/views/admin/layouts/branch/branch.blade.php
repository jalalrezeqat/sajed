@extends('admin.layouts.app')
@section('content')
<div>

  <a href="{{route('admin.branch.add')}}"><button  class="btnaboutadd btn btn-dark">اضافة الى الفروع</button> </a>
</div>
<div class=" table-responsive">

      <table class=" table-admin-connectus  ">
        <thead class="thead-green-connectus">
          <tr class="">
            <th scope="col ">اسم الفرع</th>
            <th scope="col">ملخص عن الفرع</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($branch as $branch)
          <tr>
            <td class="tdnamecontectus">{{$branch->name}} </td>
            <td class="">{{$branch->summary}} </td>

            <td class="">  <a href="{{route('admin.branch.edit',$branch->id)}}"  class="btn btn-success editdelete">تعديل</a>
                  <a href="{{route('admin.branch.destroy',$branch->id)}}" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
            </td>
          
          </tr>
         @endforeach
        </tbody>
      </table>
      </div>

   

@endsection