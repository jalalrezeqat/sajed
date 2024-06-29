
@extends('admin.layouts.app')
@section('content')

<div>

    <a href="{{route('admin.quiz')}}"><button  class="btnaboutadd btn btn-dark"> رجوع</button></a>
   
    </div>


    <div class="formaddm">
        <form action="{{url('admin/answers/update/'.$answerquiz->id)}}" method="POST" >
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="inputtitelmistion">الاجابة</label>
                <input type="text" class="form-control" name='name' id="name" value="{{$answerquiz->name}}" placeholder=" السؤال ">
              </div>
              <div class="form-group">
              <label for="inputtitelmistion">حالة الاجابة </label>
              <select class="form-control" name="stutes" id="stutes">
              <option  value="صح">صح</option>
              <option  value="خطآ">خطآ</option>

              </select>
          </div>
            <div class="form-group">
              <label for="inputtitelmistion">اسم السؤال</label>
              <select class="form-control" name="qustionquizzes" id="qustionquizzes">
              @foreach ($qustion as $qustion )
              <option  value="{{$qustion->name}}">{{$qustion->name}}</option>
              @endforeach
              </select>
          </div>
         
           <div class="form-group">
              <label for="inputtitelmistion">اسم الاختبار</label>
              <select class="form-control" name="quizzes" id="quizzes">
              @foreach ($quiz as $quiz )
              <option  value="{{$quiz->name}}">{{$quiz->name}}</option>
              @endforeach
              </select>
          </div>
         
       
            
            <button type="submit" class="btn btn-info">اضافة</button>
          </form>
    </div>
    
@endsection

