@extends('layouts.app')
@section('content')
    <div class="container dir">
     
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font18px" style="background-color:#27AC1F;color:white">اختبار</div>

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
                                    <div class="card-header" style="background-color:#7DCD78;color:white">{{ $category->name }}</div>

                                    <div class="card-body dir">
                                        @foreach ($category->categoryQuestions as $question)
                                            <div class="card @if (!$loop->last) mb-3 @endif">
                                                <div class="card-header" style="background-color:#a4dca0;color:white" >{{ $question->question_text }}</div>

                                                <div class="card-body" style="background-color:#239a1b;color:white"  >
                                                    <input type="hidden" name="questions[{{ $question->id }}]"
                                                        value="">
                                                    @foreach ($question->questionOptions as $option)
                                                        <div class="form-check " style="text-align: right;position: inherit;  direction: rtl;
    unicode-bidi: bidi-override;" >
                                                        <label class="form-check-label"
                                                                for="option-{{ $option->id }}">
                                                                {{ $option->option_text }}
                                                            </label>
                                                            <input class="form-check-input" type="radio"
                                                                name="questions[{{ $question->id }}]"
                                                                id="option-{{ $option->id }}"
                                                                value="{{ $option->id }}"@if (old("questions.$question->id") == $option->id) checked @endif>
                                                     
                                                            
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
                            @foreach( $results as  $results)
                            @if( $results->namequiz == $category->id  )
                            <div class="form-group row mb-0">
                                <div class="col-md-6">
                                 
                                </div>
                            </div>
                            @else
                            <div class="form-group row mb-0">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
