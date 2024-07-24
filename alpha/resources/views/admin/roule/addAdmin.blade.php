@extends('admin.layouts.app')

@section('content')
    <div>

        <a href="{{ route('admin.addAdminStore') }}"><button class="btnaboutadd btn btn-dark">اضافة الى
                المسؤول </button></a>

    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الاسم</th>
                    <th scope="col"> الايمل</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admin as $admins)
                    <tr>
                        <td class="tdnamecontectus">{{ $admins->name }} </td>
                        <td class="">{{ $admins->email }} </td>

                        <td> <a href="{{ route('admin.admineditpassword.edit', $admins->id) }}"
                                class="btn btn-dark editdelete">تعديل
                            </a>
                            <a href="{{ route('admin.useradmin.destroy', $admins->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
