@extends('admin.layouts.app')
@section('content')
    <div>

        <a href="{{ route('admin.courses') }}"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

    </div>

    <div class="formaddm">
        <form action="{{ url('admin/chabter/update/' . $chabters->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="inputtitelmistion">اسم الفصل</label>
                <input type="text" class="form-control" name='name' id="name" value="{{ $chabters->name }}">
            </div>

            <div class="form-group">
                <label for="inputtitelmistion">الدورة</label>
                <select class="form-control" name="course" id="course">
                    @foreach ($courses as $courses)
                        <option value="{{ $courses->id }}">{{ $courses->name }}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-info">تحديث</button>
        </form>
    </div>
@endsection
