@extends('admin.layouts.app')
@section('content')
<a href="{{route('admin.branch')}}"><button  class="btnaboutadd btn btn-dark">رجوع</button> </a>
<div class="formaddm">
    <form action="{{url('admin/branch/update/'.$branch->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="inputtitelmistion">اسم الفرع </label>
          <input type="text" class="form-control" name='name' value="{{$branch->name}}" id="name" placeholder="عنوان المهة">
        </div>
        <div class="form-group">
          <label for="inputtitelmistion">ملخص الفرع</label>
          <input type="text" class="form-control" name='summary' value="{{$branch->summary}}" id="summary" placeholder="نص المهمة">
        </div>
        
        <button type="submit" class="btn btn-info">تعديل</button>
      </form>
</div>
@endsection