@extends('admin.layouts.app')
@section('content')
    <div>

        <a href="{{ route('admin.courses.viweaddcourses') }}"><button class="btnaboutadd btn btn-dark">اضافة الى
                الدورات</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم الدورة</th>
                    <th scope="col">ملخص عن الدورة </th>
                    <th scope="col">حول الدورة </th>
                    <th scope="col">مدرس الدورة </th>
                    <th scope="col"> سعر الدورة </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $courses)
                    <tr>
                        <td class="tdnamecontectus">{{ $courses->name }} </td>
                        <td class="">{{ $courses->summary }} </td>
                        <td class="">{{ $courses->aboutcourse }} </td>
                        <td class="">
                            @foreach ($teatcher as $teatchers)
                                @if ($courses->teacher_name == $teatchers->id)
                                    {{ $teatchers->name }}
                                @endif
                            @endforeach
                        </td>
                        <td class="">{{ $courses->price }}₪</td>
                        <td class="">
                            <a href="{{ route('admin.courses.courseschabtar', $courses->id) }}"
                                class="btn btn-success editdelete">مشاهدة الفصول</a>
                            <a href="{{ route('admin.courses.edit', $courses->id) }}" class="btn btn-dark editdelete">تعديل
                            </a>
                            <a href="{{ route('admin.courses.destroy', $courses->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                                @if ($courses->status ==1)
                                <a href="{{ route('admin.courses.off', $courses->id) }}"
                                    onclick="return confirm(' هل انت متاكد سيتم الغاء تفعل الدورة ') "
                                    class="btn btn-success editdelete"> مفعل</a>
                                @endif
                                @if ($courses->status ==0)
                                <a href="{{ route('admin.courses.on', $courses->id) }}"
                                    onclick="return confirm(' هل انت متاكد سيتم  تفعل الدورة ') "
                                    class="btn btn-danger editdelete">غير مفعل</a>
                                @endif
                                    @if ($courses->fav ==1)
                                    <a href="{{ route('admin.courses.notfav', $courses->id) }}"
                                        onclick="return confirm(' هل انت متاكد سيتم الغاء اضافة للمفضلة ') "
                                        class="btn btn-success editdelete"> مفضلة</a>
                                    @endif
                                    @if ($courses->fav ==0)
                                    <a href="{{ route('admin.courses.fav', $courses->id) }}"
                                        onclick="return confirm(' هل انت متاكد سيتم اضافة للمفضلة ') "
                                        class="btn btn-danger editdelete"> غير مفضلة</a>
                                    @endif
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
