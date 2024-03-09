
@extends('admin.layouts.app')
@section('content')

<div>

    <a href="{{route('admin.courses.questionscours')}}"><button  class="btnaboutadd btn btn-dark"> رجوع</button></a>
   
    </div>


    <div class="formaddm">
        <form action="{{url('admin/questionscours/update/'.$questionscours->id)}}" method="POST" >
            @csrf
            @method('PUT')
  
            <div class="form-group">
                <label for="inputtitelmistion">السؤال</label>
                <input type="text" class="form-control" name='question' id="question" value="{{$questionscours->question}}" placeholder=" السؤال ">
              </div>
              <div class="container">
                <div class="row">
                    
                    <div class="form-group">
                        <label for="inputtitelmistion"> نص السؤال </label>
                        <textarea name='summernote' id="summernote" class="summernote form-control formaddmtextarea">
                            {{$questionscours->summernote}}
                        </textarea>
                    </div>    
                </div>
            </div>
            <div class="form-group">
              <label for="inputtitelmistion">الدورة</label>
              <select class="form-control" name="course" id="course">
              @foreach ($courses as $courses )
              <option  value="{{$courses->name}}">{{$courses->name}}</option>
              @endforeach
              </select>
          </div>
         
       
            
            <button type="submit" class="btn btn-info">اضافة</button>
          </form>
    </div>
@endsection