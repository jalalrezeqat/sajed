@extends('admin.layouts.app')
@section('content')
    <div>

        <a href="{{ route('admin.policies') }}"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

    </div>
    <div class="formaddm">
        <form action="{{ url('admin/policies/add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="form-group">
                        <label for="inputtitelmistion"> سياسات الموقع </label>
                        <textarea name='summernote' id="summernote" class="summernote form-control formaddmtextarea"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
@endsection
