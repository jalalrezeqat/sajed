@extends('admin.layouts.app')
@section('content')
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">#</th>
                    <th scope="col ">الاسم</th>
                    <th scope="col"> الايمل</th>
                    <th scope="col"> الهاتف </th>
                    <th scope="col"> المحافظة </th>
                    <th scope="col">العنوان </th>
                    <th scope="col">الدورة </th>
                    <th scope="col">تاريخ الطلب </th>
                    <th scope="col">الحالة</th>
                    <th scope="col">حذف</th>






                </tr>
            </thead>
            <tbody>
                @foreach ($order as $orders)
                    <tr>
                        <td class="">{{ $orders->id }} </td>
                        <td class="tdnamecontectus">{{ $orders->name }} </td>
                        <td class="">{{ $orders->email }} </td>
                        <td class="">{{ $orders->phone }} </td>
                        <td class="">{{ $orders->gavarment }} </td>
                        <td class="">{{ $orders->addres }} </td>
                        <td class="">{{ $orders->course }} </td>
                        <td class="">{{ $orders->created_at }} </td>





                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
