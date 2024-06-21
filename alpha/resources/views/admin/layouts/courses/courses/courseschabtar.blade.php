@extends('admin.layouts.app')
@section('content')
    <div>

        <a href="{{ route('admin.courses') }}"><button class="btnaboutadd btn btn-dark">رجوع </button></a>
        <a href="{{ route('admin.courses.courseschabtaradd', $courses->id) }}"><button class="btnaboutadd btn btn-dark">اضافة
                الى الفصول</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم الفصل</th>
                    <th scope="col">اسم الدورة</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chabter as $chabter)
                    <tr>
                        <td class="tdnamecontectus">{{ $chabter->name }} </td>
                        <td class="">{{ $courses->name }} </td>

                        <td class="">
                            <a href="{{ route('admin.courses.lesson', $chabter->id) }}"
                                class="btn btn-success editdelete">مشاهدة الدروس</a>
                            <a href="{{ url('admin/chabter/edit/' . $chabter->id, $courses->id) }}"
                                class="btn btn-dark editdelete">تعديل
                            </a>

                            <a href="{{ route('admin.chabtar.destroy', $chabter->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
