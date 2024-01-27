@extends('admin.layouts.app')
@section('content')
<a href="{{route('admin.slidertetcher')}}"><button  class="btnaboutadd btn btn-dark">رجوع</button> </a>
<div class="formaddm">
    <form action="{{url('admin/slider/update/'.$slider->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="inputtitelmistion">الصورة</label>
          <input type="file" class="form-control" name='img' id="img">
        </div>
        <div class="form-group" hidden>
            <label for="cars">اختار الصفحة :</label>
            <select class="form-control" name="page" id="page">
            <option name="page" value="المعلم">المعلم</option>
            
            </select>
        </div>
        <button type="submit" class="btn btn-info">تحديث</button>
      </form>
</div>
@endsection