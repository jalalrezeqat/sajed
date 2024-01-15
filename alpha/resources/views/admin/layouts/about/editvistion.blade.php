@extends('admin.layouts.app')
@section('content')
<a href="{{route('admin.about')}}"><button  class="btnaboutadd btn btn-dark">رجوع</button> </a>
<div class="formaddm">
    <form action="{{url('admin/about/updatevistion/'.$about->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="inputtitelmistion">رؤيتنا</label>

          <textarea name="our_vision" class="form-control editvistion" id="our_vision" >{{$about->our_vision}}</textarea>

        </div>
       
        
        <button type="submit" class="btn btn-info">تعديل</button>
      </form>
</div>
@endsection