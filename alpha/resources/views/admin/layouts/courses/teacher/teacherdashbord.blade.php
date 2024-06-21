@extends('admin.layouts.app')
@section('content')
    <div>

        <a href="{{ route('admin.teacher.dashbord.add') }}"><button class="btnaboutadd btn btn-dark">اضافة الى
                المعلم</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الصورة</th>
                    <th scope="col">اسم المدرس </th>
                    <th scope="col">الايميل </th>
                    <th scope="col">رقم الهاتف </th>

                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tetcher as $tetchers)
                    <tr>
                        <td class="tdnamecontectus "><img src="{{ asset('img/user_profile/' . $tetchers->user_img) }}"
                                class="img-dashbord rounded-circle" alt="" loading="lazy" /></td>
                        <td class="">{{ $tetchers->name }} </td>
                        <td class="">{{ $tetchers->email }} </td>
                        <td class="">{{ $tetchers->phone }} </td>



                        <td class=""> <a href="{{ route('admin.teacherdashbord.edit', $tetchers->id) }}"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="{{ route('admin.teacherdashbord.destroy', $tetchers->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
