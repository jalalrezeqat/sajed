@extends('admin.layouts.app')
@section('content')
    <br><br>
    <form action="{{ route('admin.dashbord.orderserch') }}" method="POST">
        @csrf

        <div class="row">
            <div class="form-grou col-3">
                <label for="inputtitelmistion"> من تاريخ</label>
                <input type="date" name="start" class="form-control" required>
            </div>
            <div class="form-grou col-3">
                <label for="inputtitelmistion">الى تاريخ </label>
                <input type="date" name="end" class="form-control" required>
            </div>
            <div class="  col-3">
                <label for="inputtitelmistion"></label>
                <button type="submit" class="btn btn-info  form-control">بحث</button>
            </div>
        </div>
    </form>

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
                    @if (Auth::guard('admin')->user()->stutes == 0)
                        <th scope="col">حذف</th>
                    @endif






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
                                    onclick="return confirm(' هل انت متاكد سيتم تحويل الطلب الى التوصيل') "
                                    class="btn btn-secondary editdelete">تم
                                    الطلب</a>
                            @endif
                            @if ($orders->stetus == 2)
                                <a href="{{ route('admin.order.tosucsses', $orders->id) }}"
                                    onclick="return confirm(' هل انت متاكد سيتم تحويل الطلب الى تم الاستلام ') "
                                    class="btn btn-info editdelete">تم
                                    الارسال الى التوصيل</a>
                            @endif
                            @if ($orders->stetus == 3)
                                <a href="{{ route('admin.order.toorder', $orders->id) }}"
                                    onclick="return confirm(' هل انت متاكد سيتم تحويل الطلب الى تم الطلب ') "
                                    class="btn btn-success editdelete">تم
                                    الاستلام </a>
                            @endif
                        </td>
                        @if (Auth::guard('admin')->user()->stutes == 0)
                            <td><a href="{{ route('admin.order.destroy', $orders->id) }}"
                                    onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                    class="btn btn-danger editdelete">حذف</a></td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
