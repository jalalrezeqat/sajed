@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="mb-5">

            <a href="{{ route('admin.dashbord.coures') }}"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

        </div>

        <div class=" mb-5">
            <form action="{{ route('admin.dashbord.serchscoures') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="form-grou col-3">
                        <label for="inputtitelmistion"> من تاريخ</label>
                        <input type="date" name="start" required>
                    </div>
                    <div class="form-grou col-3">
                        <label for="inputtitelmistion">الى تاريخ </label>
                        <input type="date" name="end" required>
                    </div>
                    <div class="  col-3">

                        <button type="submit" class="btn btn-info">بحث</button>
                    </div>
                </div>
            </form>
        </div>


        <div class="row">
            @foreach ($coures as $couress)
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <h4 class="font-weight-normal mb-4">عدد المشتركين في دورة<i
                                    class="mdi mdi-chart-line mdi-24px float-right"></i>
                            </h4>
                            <h6 class="mb-4">{{ $couress->name }}</h6>
                            <?php
                            $code = DB::table('codecards')
                                ->where('user_id', '!=', null)
                                ->where('courses', '=', $couress->id)
                                ->where('startcode', '>=', $start)
                                ->where('startcode', '<=', $end)
                                ->get();
                            
                            ?>
                            <h6 class="mb-2"> عدد الطلاب المسجلين في الدورة من تاريخ : {{ $start }} -
                                {{ $end }}

                                <h6 class="mb-2"> عدد الطلاب المسجلين في الدورة : {{ $code->count() }}
                                </h6>
                                <h6 class="mb-2"> المبلغ المالي للمنصة : {{ $couress->price * 0.5 * $code->count() }}
                                </h6>
                                <h6 class="mb-2"> المبلغ المالي للمدرس : {{ $couress->price * 0.5 * $code->count() }}
                                </h6>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
