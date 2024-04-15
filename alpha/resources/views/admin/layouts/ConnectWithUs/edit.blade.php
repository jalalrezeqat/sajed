@extends('admin.layouts.app')
@section('content')
    <a href="{{ route('admin.ConnectWithUs') }}"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="{{ url('admin/ConnectWithUs/update/' . $connectWithUs->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputtitelmistion">الايميل </label>
                <input type="text" class="form-control" name='email' id="email" value="{{ $connectWithUs->email }}">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الهاتف </label>
                <input type="text" class="form-control" name='phone' id="phone"
                    value="{{ $connectWithUs->phone }}">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الموقع </label>
                <input type="text" class="form-control" name='address' id="address"
                    value="{{ $connectWithUs->address }}">
            </div>

            <button type="submit" class="btn btn-info">حفظ</button>
        </form>
    </div>
@endsection
