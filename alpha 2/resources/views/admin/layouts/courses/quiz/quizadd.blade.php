
@extends('admin.layouts.app')
@section('content')

<div>

    <a href="{{route('admin.quiz')}}"><button  class="btnaboutadd btn btn-dark"> رجوع</button></a>
   
    </div>


    <div class="formaddm">
        <form action="{{url('admin/quizadd/add')}}" method="POST" >
            @csrf
            
            <div class="form-group">
                <label for="inputtitelmistion">اسم الاختبار</label>
                <input type="text" class="form-control" name='name' id="name	" placeholder=" السؤال ">
              </div>
             
            <div class="form-group">
              <label for="inputtitelmistion">الدورة</label>
              <select class="form-control" name="courses" id="courses">
              @foreach ($courses as $courses )
              <option  value="{{$courses->name}}">{{$courses->name}}</option>
              @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="inputtitelmistion">الوحدة</label>
              <select class="form-control" name="chabters" id="chabters">
              @foreach ($chabters as $chabters )
              <option  value="{{$chabters->name}}">{{$chabters->name}}</option>
              @endforeach
              </select>
          </div>
         
       
            
            <button type="submit" class="btn btn-info">اضافة</button>
          </form>
    </div>
    
@endsection

