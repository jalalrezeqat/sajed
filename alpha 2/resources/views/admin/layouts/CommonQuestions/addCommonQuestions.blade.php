@extends('admin.layouts.app')
@section('content')
<a href="{{route('admin.CommonQuestions')}}"><button  class="btnaboutadd btn btn-dark">رجوع</button> </a>
<div class="formaddm">
    <form action="{{url('admin/CommonQuestions/add')}}" method="POST">
        @csrf

        <div class="form-group">
          <label for="inputtitelmistion">السؤال</label>
          <input type="text" class="form-control" name='question' id="question" placeholder="السؤال">
        </div>
        <div class="form-group">
          <label for="inputtitelmistion">نص السؤال </label>
          <input type="text" class="form-control" name='question_text' id="question_text" placeholder="نص السؤال">
        </div>
        
        <button type="submit" class="btn btn-info">اضافة</button>
      </form>
</div>
@endsection