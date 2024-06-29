@extends('admin.layouts.app')
@section('content')
    <div>

    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الايميل </th>
                    <th scope="col">الهاتف </th>
                    <th scope="col">الموقع </th>

                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($connectwithus as $connectwithus)
                    <tr>
                        <td class="tdnamecontectus">{{ $connectwithus->email }} </td>
                        <td class="tdnamecontectus" style="direction: ltr;">{{ $connectwithus->phone }} </td>
                        <td class="tdnamecontectus">{{ $connectwithus->address }} </td>



                        <td class=""> <a href="{{ route('admin.ConnectWithUs.edit', $connectwithus->id) }}"
                                class="btn btn-success editdelete">تعديل</a>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
