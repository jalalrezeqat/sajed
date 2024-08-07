@extends('admin.layouts.app')
@section('content')
    <div>

        <a href="{{ route('admin.courses.questionscours', $chabterid) }}"><button class="btnaboutadd btn btn-dark">
                رجوع</button></a>

    </div>


    <div class="formaddm">
        <form action="{{ url('admin/questionscoursaddstore/add') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="inputtitelmistion">السؤال</label>
                <input type="text" class="form-control" name='question' id="question	" placeholder=" السؤال ">
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-group">
                        <label for="inputtitelmistion"> نص السؤال </label>
                        <textarea name='summernote' id="summernote" class="summernote form-control formaddmtextarea"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الدورة</label>
                <select class="form-control" name="course" id="course">
                    @foreach ($courses as $courses)
                        <option value="{{ $courses->id }}">{{ $courses->name }}</option>
                    @endforeach
                </select>
            </div>



            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
@endsection
