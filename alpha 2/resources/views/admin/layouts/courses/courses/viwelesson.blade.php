@extends('admin.layouts.app')
@section('content')

<div class="">
  <a href="{{ url()->previous() }}"><button  class="btnaboutadd btn btn-dark">رجوع </button></a>
   
</div>
<div class="formaddm">
    <h1> اسم الدرس : {{$chabter->name}}</h1>

</div>

<div class="formaddm d-flex justify-content-center">
<video width="70%" height="100%" controls>
    <source src="{{asset('img/vedio/'.$chabter->vedio)}}" type="video/mp4">
  Your browser does not support the video tag.
</video>
</div>


    @endsection