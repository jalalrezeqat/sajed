@extends('admin.layouts.app')
@section('content')
<a href="{{route('admin.questions')}}"><button  class="btnaboutadd btn btn-dark">رجوع</button> </a>
<div class="formaddm">
    <form action="{{url('admin/questions/update/'.$question->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="inputtitelmistion">السؤال </label>
          <input type="text" class="form-control" name='question' value="{{$question->question}}" id="question" placeholder="السؤال ">
        </div>
        <div class="form-group">
          <label for="inputtitelmistion">نص السؤال </label>
          <input type="text" class="form-control" name='question_text' value="{{$question->question_text}}" id="question_text" placeholder="نص السؤال">
        </div>
        
        <button type="submit" class="btn btn-info">تعديل</button>
      </form>
</div>
@endsection