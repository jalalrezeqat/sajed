    @extends('admin.layouts.app')

    @section('content')
        <div class="dir ">
            <a href="{{ route('admin.dashbord.studant') }}"><button
                    class="btn btn-back-user btn-lg btn-success">رجوع</button></a>

            <div class="form-edit-user-profile">
                <form action="{{ route('admin.postChangePassworduser') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif


                        <div class="mb-3">
                            <label for="newPasswordInput" class="form-label">كلمة المرور الجديدة</label>
                            <input name="new_password" type="password" required class="form-control"
                                @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                placeholder="كلمة المرور الجديدة">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="confirmNewPasswordInput" class="form-label">تاكيد كلمة المرور</label>
                            <input name="new_password_confirmation" type="password" class="form-control"
                                id="confirmNewPasswordInput" placeholder="تاكيد كلمة المرور">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-submit-user btn-lg btn-success">حفظ</button>
                </form>
            </div>


        </div>
    @endsection
