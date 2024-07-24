@extends('admin.layouts.app')
@section('content')
    <div>

        <a href="{{ route('admin.codegenaret.add') }}"><button class="btnaboutadd btn btn-dark">انشاء كود</button></a>

    </div>
    <br><br>
    <form action="{{ route('admin.dashbord.codesarch') }}" method="POST">
        @csrf

        <div class="row">
            <div class="form-grou col-3">
                <label for="inputtitelmistion"> من تاريخ</label>
                <input type="date" name="start" class="form-control" required>
            </div>
            <div class="form-grou col-3">
                <label for="inputtitelmistion">الى تاريخ </label>
                <input type="date" name="end" class="form-control" required>
            </div>
            <div class="  col-3">
                <label for="inputtitelmistion"></label>
                <button type="submit" class="btn btn-info form-control">بحث</button>
            </div>
        </div>
    </form>


    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الكود</th>
                    <th scope="col"> الدورة</th>
                    <th scope="col"> اسم الطالب</th>
                    <th scope="col"> تاريخ البداية</th>
                    <th scope="col"> تاريخ النهاية</th>
                    @if (Auth::guard('admin')->user()->stutes == 0)
                        <th scope="col"></th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($code as $code)
                    <tr>
                        <td class="tdnamecontectus">{{ $code->code }} </td>
                        <td class="">
                            @foreach ($courses as $coursess)
                                @if ($code->courses == $coursess->id)
                                    {{ $coursess->name }}
                                @endif
                            @endforeach
                        </td>

                        <td class="">
                            @foreach ($user as $users)
                                @if ($users->id == $code->user_id)
                                    {{ $users->name }}
                                @endif
                            @endforeach
                        </td>
                        <td class="">{{ $code->startcode }} </td>
                        <td class="">{{ $code->endcode }} </td>
                        @if (Auth::guard('admin')->user()->stutes == 0)
                            <td class="">
                                <a href="{{ route('admin.codegenaret.edit', $code->id) }}"
                                    class="btn btn-dark editdelete">تعديل
                                </a>
                                <a href="{{ route('admin.codegenaret.destroy', $code->id) }}"
                                    onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                    class="btn btn-danger editdelete">حذف</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
