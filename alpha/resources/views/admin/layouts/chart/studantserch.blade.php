@extends('admin.layouts.app')
@section('content')
    <br><br>
    <div>

        <a href="{{ route('admin.dashbord.studant') }}"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

    </div>

    <div class="formaddm">
        <form action="{{ route('admin.dashbord.serchstudant') }}" method="POST">
            @csrf

            <div class="row">
                <div class="form-grou col-8">
                    <select class="form-control" name="studant" id="studant">
                        <option value="1">الطلاب المشتركين</option>
                        <option value="2">الطلاب الغير مشتركين</option>
                    </select>
                </div>
                <div class="  col-3">
                    <button type="submit" class="btn btn-info">بحث</button>
                </div>
            </div>
        </form>
    </div>

    @foreach ($user as $key1 => $users)
        @foreach ($code as $key => $codes)
            @if ($users->id == $codes->user_id)
                @if ($user[$key1]->id == $user[$key1]->id)
                    <p>{{ $codes->user_id }} |
                        {{ $key }}
                        {{ $key }}

                        {{ $users->name }}
                        \+
                    </p>
                @endif
            @endif
        @endforeach
    @endforeach

    <div>
        <h2>{{ $msg }} {{ $count }} {{ $count }}</h2>
    </div>
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
                @foreach ($code as $codes)
                    @foreach ($user as $key1 => $users)
                        @if ($codes->user_id == $users->id)
                            <tr>
                                <td class="">{{ $users->id }} </td>
                                <td class="tdnamecontectus">{{ $users->name }} </td>
                                <td class="">{{ $users->email }} </td>
                                <td class="">{{ $users->phone }} </td>
                                <td class="">{{ $users->branch }} </td>
                                <td class="">{{ $users->Governorate }} </td>
                                <td class="">{{ $codes->courses }} </td>

                            </tr>
                        @endif
                    @endforeach
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
