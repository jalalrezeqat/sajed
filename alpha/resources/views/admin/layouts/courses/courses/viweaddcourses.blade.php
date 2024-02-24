@extends('admin.layouts.app')
@section('content')

    <div>

    <a href="{{route('admin.courses')}}"><button  class="btnaboutadd btn btn-dark">رجوع  </button></a>
   
    </div>

    <div class="formaddm">
        <form action="{{url('admin/courses/add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="inputtitelmistion">اسم الدورة</label>
                <input type="text" class="form-control" name='name' id="name	" placeholder="اسم المعلم ">
              </div>
              <div class="form-group">
                <label for="inputtitelmistion">  ملخص عن الدورة </label>
                <input type="textarea" class="form-control" name='summary' id="summary	" placeholder="اسم المعلم ">
              </div>

              <div class="form-group">
                <label for="inputtitelmistion">السعر </label>
                <input type="number" class="form-control" name='price' id="price	" placeholder="السعر">
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
            <label for="inputtitelmistion">المعلم</label>
            <select class="form-control" name="teacher_name" id="teacher_name">
                @foreach ($teacher as $teacher )
                <option   value="{{$teacher->name}}">{{$teacher->name}}</option>
                @endforeach
            </select>
           </div>
            
            <button type="submit" class="btn btn-info">اضافة</button>
          </form>
    </div>
    @endsection