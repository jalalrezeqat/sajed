@extends('admin.layouts.app')
@section('content')
    <div class="table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
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
                        <td class="tdnamecontectus">{{ $orders->name }} </td>
                        <td class="">{{ $orders->email }} </td>
                        <td class="">{{ $orders->phone }} </td>
                        <td class="">{{ $orders->gavarment }} </td>
                        <td class="">{{ $orders->addres }} </td>
                        <td class="">
                            @foreach ($coureses as $couresess)
                                @if ($orders->course == $couresess->id)
                                    {{ $couresess->name }}
                                @endif
                            @endforeach
                        </td>

                        <td class="">{{ $orders->created_at }} </td>
                        <td>
                            @if ($orders->stetus == 1)
                            <a href="{{ route('admin.order.todelevary', $orders->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم تحويل الطلب الى التوصيل') " class="btn btn-secondary editdelete">تم
                                الطلب</a>
                            @endif
                            @if ($orders->stetus == 2)
                            <a href="{{ route('admin.order.tosucsses', $orders->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم تحويل الطلب الى تم الاستلام ') " class="btn btn-info editdelete">تم
                                الارسال الى التوصيل</a>
                            @endif
                            @if ($orders->stetus == 3)
                           <p class="btn btn-success editdelete">تم الاستلام</p>
                            @endif
                           </td>
                        <td><a href="{{ route('admin.order.destroy', $orders->id) }}"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
