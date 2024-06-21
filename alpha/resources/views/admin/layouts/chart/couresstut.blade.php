@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">

        <div class="row">
            @foreach ($coures as $couress)
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <h4 class="font-weight-normal mb-3">عدد المشتركين في دورة<i
                                    class="mdi mdi-chart-line mdi-24px float-right"></i>
                            </h4>
                            <h6 class="mb-5">{{ $couress->name }}</h6>
                            <?php
                            $code = DB::table('codecards')
                                ->where('user_id', '!=', null)
                                ->where('courses', '=', $couress->id)
                                ->get();
                            
                            echo $code->count();
                            ?>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
