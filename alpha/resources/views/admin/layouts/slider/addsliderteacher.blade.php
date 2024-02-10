
@extends('admin.layouts.app')
@section('content')
<a href="{{route('admin.sliderteacher')}}"><button  class="btnaboutadd btn btn-dark">رجوع</button> </a>
<div class="formaddm">
    <form action="{{url('admin/sliderteacher1/add')}}" method="POST" enctype="multipart/form-data">
        @csrf
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
        <button type="submit" class="btn btn-info">اضافة</button>
      </form>
</div>
@endsection


