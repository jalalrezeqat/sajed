@extends('layouts.app')
@section('content')
    <div class="container dir">

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font18px" style="background-color:#27AC1F;color:black">اختبار</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form method="POST" action="{{ url('test/' . $quiz->id) }}">
                            @csrf
                            @foreach ($categories as $category)
                                <div class="card mb-3">
                                    <div class="card-header  font18px" style="background-color:#27AC1F;color:black">
                                        {{ $category->name }}</div>

                                    <div class="card-body dir">
                                        @foreach ($category->categoryQuestions as $question)
                                            <div class="card @if (!$loop->last) mb-3 @endif">
                                                <div class="card-header font14px"
                                                    style="background-color:#27AC1F;color:black">
                                                    {{ $question->question_text }}</div>

                                                <div class="card-body " style="color:black">
                                                    <input type="hidden" name="questions[{{ $question->id }}]"
                                                        value="">
                                                    @foreach ($question->questionOptions as $option)
                                                        <div class="form-check "
                                                            style="text-align: right;position: inherit;  direction: rtl;
    unicode-bidi: bidi-override;">
                                                            <input
                                                                className="form-check-input appearance-none rounded-full h-7 w-7 border-4 border-[#5F6368] bg-[#C4C4C4] hover:shadow-lg hover:shadow-[#5F6368] hover:border-[#3B52B5] checked:bg-[#7EABFF] checked:border-[#3B52B5] focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-5 cursor-pointer"
                                                                type="radio" name="questions[{{ $question->id }}]"
                                                                id="option-{{ $option->id }}"
                                                                value="{{ $option->id }}"@if (old("questions.$question->id") == $option->id) checked @endif>


                                                            <label class="form-check-label"
                                                                for="option-{{ $option->id }}">
                                                                {{ $option->option_text }}
                                                            </label>

                                                        </div>
                                                    @endforeach

                                                    @if ($errors->has("questions.$question->id"))
                                                        <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;"
                                                            role="alert">
                                                            <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                            <?php $result = DB::table('results')
                                ->where('user_id', '=', Auth::user()->id)
                                ->where('namequiz', '=', $category->id)
                                ->first();
                            ?>
                            @if ($result == null)
                                <div class="form-group row mb-0">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            @elseif(($result->namequiz == $category->id) & ($result->user_id == Auth::user()->id))
                                <div class="form-group row mb-0">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
