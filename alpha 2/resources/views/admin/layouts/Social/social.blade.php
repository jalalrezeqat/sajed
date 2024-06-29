@extends('admin.layouts.app')
@section('content')
    <div>

    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم الموقع </th>
                    <th scope="col ">اسم الحساب </th>
                    <th scope="col">صورة </th>
                    <th scope="col">رابط</th>
                    <th scope="col">حالة الحساب</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($social as $socials)
                    <?php
                    if ($socials->status == '1') {
                        $status = 'نشط';
                    } else {
                        $status = 'غير نشط';
                    }
                    ?>
                    <tr>
                        <td class="tdnamecontectus">{{ $socials->name }} </td>
                        <td class="tdnamecontectus">{{ $socials->nameofpage }} </td>

                        <td class=""> <img src="{{ asset('img/socials/' . $socials->img) }}" alt="">
                        </td>
                        <td class="tdnamecontectus">{{ $socials->url }} </td>

                        <td class="tdnamecontectus">{{ $status }} </td>

                        <td class=""> <a href="{{ route('admin.socials.edit', $socials->id) }}"
                                class="btn btn-success editdelete">تعديل</a>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
