@extends('admin.layouts.app')
@section('content')
<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>
<a href="{{route('admin.codegenaret')}}"><button  class="btnaboutadd btn btn-dark">رجوع</button> </a>
<div class="formaddm">
    <form action="{{url('admin/codegenaret/save')}}" method="POST">
        @csrf

        <div class="form-group">
          <label for="inputtitelmistion">انشاء كود</label>
          <input type="text" class="form-control" name='code' id="code" value="{{$code}}" required>
        </div>
         
        <div class="form-group">
              <label for="inputtitelmistion">الدورة</label>
              <select class="form-control" name="courses" id="courses">
              @foreach ($courses as $courses )
              <option  value="{{$courses->name}}">{{$courses->name}}</option>
              @endforeach
              <option  value="جميع الدورات">جميع الدورات</option>
              </select>
          </div>
        
          <div class="form-group">
          <label for="inputtitelmistion">تاريخ البداية </label>
          <input type="date" value="<?php echo $today; ?>" class="form-control" name='startcode' id="startcode" required>
        </div>
        <div class="form-group">
          <label for="inputtitelmistion">تاريخ النهاية </label>
          <input type="date" class="form-control" name='endcode' id="endcode" required >
        </div>
        <button type="submit" class="btn btn-info">انشاء</button>
      </form>
</div>
@endsection