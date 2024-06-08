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
                    <h1 class="h3 mb-0 text-gray-800">{{ __('انشاء اختبار') }}</h1>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('رجوع') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('اسم الاختبار') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ __('اسم الاختبار') }}" name="name" value="{{ old('name') }}" />
                    </div>
                     <div class="form-group">
                        <label for="name">{{ __('اسم الدورة') }}</label>
                        <select class="form-control" name="courses" id="courses">
                        @foreach ($courses as $courses )
                       <option  value="{{$courses->name}}">{{$courses->name}}</option>
                        @endforeach
              </select>                    </div>
                     <div class="form-group">
                        <label for="name">{{ __('اسم الوحدة') }}</label>
                        <div class="form-group">
                        <select class="form-control" name="chabters" id="chabters">
                        @foreach ($chabters as $chabters )
                       <option  value="{{$chabters->name}}">{{$chabters->name}}</option>
                        @endforeach
                        </select>            
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('حفظ') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection