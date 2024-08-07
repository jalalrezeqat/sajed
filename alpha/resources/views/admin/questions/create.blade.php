@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow dir">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('اضافة سؤال') }}</h1>
                    <a href="{{ route('admin.questions.index',$category_id) }}" class="btn btn-primary btn-sm shadow-sm">{{ __('رجوع') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.questions.store',$category_id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="question_text">{{ __('نص السؤال') }}</label>
                        <input type="text" class="form-control" id="question_text" placeholder="{{ __('نص السؤال ') }}" name="question_text" value="{{ old('question_text') }}" />
                    </div>
                    <div class="form-group">
                        <label for="category">{{ __('اسم الاختبار') }}</label>
                        <select class="form-control" name="category_id" id="category">
                            @foreach($categories as $id => $category)
                                <option value="{{ $id }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('حفظ') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection