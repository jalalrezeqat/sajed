@extends('admin.layouts.app')
@section('content')
<a href="{{route('admin.about')}}"><button  class="btnaboutadd btn btn-dark">رجوع</button> </a>
<div class="formaddm">
    <form action="{{url('admin/about/add')}}" method="POST">
        @csrf

        <div class="form-group">
          <label for="inputtitelmistion">عنوان المهمة</label>
          <input type="text" class="form-control" name='our_mission_titel' id="our_mission_titel" placeholder="عنوان المهة">
        </div>
        <div class="form-group">
          <label for="inputtitelmistion">نص المهمة</label>
          <input type="text" class="form-control" name='our_mission_text' id="our_mission_text" placeholder="نص المهمة">
        </div>
        
        <button type="submit" class="btn btn-info">اضافة</button>
      </form>
</div>
@endsection