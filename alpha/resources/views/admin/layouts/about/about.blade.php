@extends('admin.layouts.app')
@section('content')
    <div>
        <a href="{{ route('admin.aboutalpha.add') }}"><button class="btnaboutadd btn btn-dark">اضافة الى حول الفا</button>
        </a>

        <a href="{{ route('admin.about.add.vistion') }}"><button class="btnaboutadd btn btn-dark">اضافة الى
                رويتنا</button>
        </a>
        <a href="{{ route('admin.about.add') }}"><button class="btnaboutadd btn btn-dark">اضافة الى مهمتنا</button> </a>

    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">حول الفا</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($aboutalph as $aboutalph)
                    <tr>
                        <td class=""> {{ $aboutalph->aboutalpha }} </td>
                        <td class="editdelete"> <a href="{{ route('admin.about.aboutalpha', $aboutalph->id) }}"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="{{ route('admin.about.destroy', $aboutalph->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">رؤيتنا</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($vision as $vision)
                    <tr>
                        <td class=""> {{ $vision->our_vision }} </td>
                        <td class="editdelete"> <a href="{{ route('admin.about.editvistion', $vision->id) }}"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="{{ route('admin.about.destroy', $vision->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">مهمتنا</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mission as $mission)
                    <tr>
                        <td class=" ">
                            <?php
                            echo $mission->summernote;
                            ?>
                        </td>
                        <td class="editdelete"> <a href="{{ route('admin.about.edit', $mission->id) }}"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="{{ route('admin.about.destroy', $mission->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
