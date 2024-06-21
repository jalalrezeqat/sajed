@extends('admin.layouts.app')
@section('content')
    <div>

        <a href="{{ route('admin.policies.add') }}"><button class="btnaboutadd btn btn-dark">اضافة الى سياسات الموقع
            </button> </a>
    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">سياسات الموقع</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($policies as $policiess)
                    <tr>
                        <td class="">

                            <?php
                            echo $policiess->summernote;
                            ?>
                        </td>


                        <td class=""> <a href="{{ route('admin.policies.edit', $policiess->id) }}"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="{{ route('admin.policies.destroy', $policiess->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
