
@extends('admin.layouts.app')
@section('content')

    <div>

    <a href="{{route('admin.teacher')}}"><button  class="btnaboutadd btn btn-dark">رجوع  </button></a>
   
    </div>
    <div class="formaddm">
        <form action="{{url('admin/teacher/update/'.$teacher->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            
            <div class="form-group">
                <label for="inputtitelmistion">اسم المعلم</label>
            <input type="text" class="form-control" name='name' id="name" value="{{$teacher->name}}" placeholder="اسم المعلم ">
              </div>
            <div class="form-group">
                <label for="inputtitelmistion">الصورة</label>
                <input type="file" class="form-control" name='img' id="img">
              </div>
              <div class="container">
                <div class="row">
                    <div class="form-group">
                        <label for="inputtitelmistion"> معلومات المعلم  </label>
                        <textarea name='summernote' id="summernote" class="summernote form-control formaddmtextarea">
                          {{$teacher->summernote}}
                        </textarea>
                    </div>    
                </div>
           
            <button type="submit" class="btn btn-info">تحديث</button>
          </form>
    </div>
@endsection