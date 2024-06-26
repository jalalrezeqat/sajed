@extends('admin.layouts.app')
@section('content')
    <br><br>
    <div class="formaddm">
        <form action="{{ route('admin.dashbord.serchstudant') }}" method="POST">
            @csrf

            <div class="row">
                <div class="form-grou col-8">
                    <select class="form-control" name="studant" id="courses">
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
    <div>
        <h2>{{ $msg }}{{ $usercount }}</h2>
    </div>
    <?php
    $c = 0;
    foreach ($code as $codes) {
        foreach ($user as $users) {
            if ($codes->user_id == $users->id) {
                $a = $users->name;
            }
        }
    }
    ?>
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
                    <th scope="col"> عدد الدورات التي يشترك فيها </th>

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
                        <?php $count = 0; ?>

                        @foreach ($code as $codes)
                            @if ($codes->user_id == $users->id)
                                <?php $c++;
                                $count = 0;
                                $count = $count + $c;
                                ?>
                            @endif
                        @endforeach
                        <?php $c = 0; ?>

                        <td class=""><?php echo $count; ?> </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
