@extends('admin.layouts.app')
@section('content')
    <div>
        <a href="{{ route('admin.aboutmore.add') }}"><button class="btnaboutadd btn btn-dark">اضافة فيديو تعرف اكثر </button>
        </a>


    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">تعرف اكثر</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($admin as $admins)
                    <tr>
                        <td class=""> {{ $admins->id }} </td>
                        <td class="editdelete"> <a href="{{ route('admin.aboutmore.show', $admins->id) }}"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="{{ route('admin.aboutmore.destroy', $admins->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
