@extends('admin.layouts.app')
@section('content')

    <div>

    <a href="{{route('admin.courses')}}"><button  class="btnaboutadd btn btn-dark">رجوع  </button></a>
   
    </div>

    <div class="formaddm">
        <form action="{{url('admin/courses/update/'.$courses->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="inputtitelmistion">اسم الدورة</label>
                <input type="text" class="form-control" name='name' id="name" value="{{$courses->name}}" >
              </div>
              <div class="form-group">
                <label for="inputtitelmistion">  ملخص عن الدورة </label>
                <input type="textarea" class="form-control" name='summary' id="summary	" value="{{$courses->summary}}">
              </div>
              <div class="form-group">
                <label for="inputtitelmistion">  حول  الدورة </label>
                <textarea type="textarea" class="form-control" name='aboutcourse' rows="3" id="aboutcourse	" value="{{$courses->aboutcourse}}">{{$courses->aboutcourse}}</textarea>
              </div>
              <div class="form-group">
                <label for="inputtitelmistion">السعر </label>
                <input type="number" class="form-control" name='price' id="price	" value="{{$courses->price}}">
              </div>
            <div class="form-group">
                <label for="inputtitelmistion">الصورة</label>
                <input type="file" class="form-control" name='img_name' id="img_name">
            </div>
            <div class="form-group">
              <label for="inputtitelmistion">الفرع</label>
              <select class="form-control" name="branche" id="branche">
              @foreach ($branch as $branch )
              <option  value="{{$branch->name}}">{{$branch->name}}</option>
              @endforeach
              </select>
          </div>
        <div class="form-group">
              <label for="inputtitelmistion">الفصل</label>
              <select class="form-control" name="chabters" id="chapter">
                <option name="chapter" value="الفصل الاول">الفصل الاول</option>
                <option name="chapter" value="الفصل الثاني">الفصل الثاني</option>
              </select>
            </div>
          <div class="form-group">
            <label for="inputtitelmistion">المعلم</label>
            <select class="form-control" name="teacher_name" id="teacher_name">
                @foreach ($teacher as $teacher )
                <option   value="{{$teacher->name}}">{{$teacher->name}}</option>
                @endforeach
            </select>
           </div>
            
            <button type="submit" class="btn btn-info">تحديث</button>
          </form>
    </div>
    @endsection