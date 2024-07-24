@extends('layouts.app')

@section('content')
    @if (Auth::user()->stutes == 1)
        <br><br><br>
        <p class="text-center dir font18px " style="color: #27AC1F">مرحبا بك استاذ {{ Auth::user()->name }}</p>
        <div class="content-wrapper dir">


            <div class=" mb-5">
                <form action="{{ route('dashbord.serchscoures1') }}" method="POST">
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
                            <button type="submit" class="btn btn-info form-control">بحث</button>
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
                                <h6 class="mb-2"> عدد الطلاب المسجلين في الدورة من تاريخ : <p>{{ $start }} -
                                        {{ $end }}</p>

                                    <h6 class="mb-2"> عدد الطلاب المسجلين في الدورة : {{ $code->count() }}
                                    </h6>


                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <br><br><br>
    @endif
@endsection
