@extends('admin.layouts.app')
@section('content')
    <div>

    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم مكان الايقونة</th>
                    <th scope="col">صورة </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($favoriteicons as $favoriteiconss)
                    <tr>
                        <td class="tdnamecontectus">{{ $favoriteiconss->name }} </td>
                        <td class=""> <img src="{{ asset('img/Favoriteicon/' . $favoriteiconss->img) }}" alt="">
                        </td>

                        <td class=""> <a href="{{ route('admin.Favoriteicon.edit', $favoriteiconss->id) }}"
                                class="btn btn-success editdelete">تعديل</a>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
