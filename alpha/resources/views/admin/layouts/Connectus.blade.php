@extends('admin.layouts.app')
@section('content')
    <div class=" table-responsive">
        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الاسم</th>
                    <th scope="col">الايميل</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">الرسالة</th>
                    @if (Auth::guard('admin')->user()->stutes == 0)
                        <th scope="col"></th>
                    @endif

                </tr>
            </thead>

            <tbody>
                @foreach ($connectus as $connectus)
                    <tr>
                        <td class="tdnamecontectus"> {{ $connectus->firestname }} {{ $connectus->lastname }}</td>
                        <td>{{ $connectus->email }}</td>
                        <td>{{ $connectus->phone }}</td>
                        <td class="">{{ $connectus->note }}</td>
                        @if (Auth::guard('admin')->user()->stutes == 0)
                            <td> <a href="{{ route('admin.Connectus.destroy', $connectus->id) }}"
                                    onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger">حذف</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
