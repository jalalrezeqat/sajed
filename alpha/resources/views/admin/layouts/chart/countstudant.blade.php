@extends('admin.layouts.app')
@section('content')
    @extends('admin.layouts.app')
@section('content')
    <br><br>


    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">#</th>
                    <th scope="col ">الاسم</th>
                    <th scope="col"> الايمل</th>
                    <th scope="col"> الهاتف </th>
                    <th scope="col"> الفرع </th>
                    <th scope="col"> المحافظة </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                    <tr>
                        <td class="">{{ $users->id }} </td>
                        <td class="tdnamecontectus">{{ $users->name }} </td>
                        <td class="">{{ $users->email }} </td>
                        <td class="">{{ $users->phone }} </td>
                        <td class="">{{ $users->branch }} </td>
                        <td class="">{{ $users->Governorate }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@endsection
