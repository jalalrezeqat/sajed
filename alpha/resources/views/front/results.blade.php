@extends('layouts.app')

@section('content')
    <div class="container dir">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-5">
                <div class="card">
                    <div class="card-header">نتائج الاختبار</div>

                    <div class="card-body">
                        <p class="mt-5"> مجموع النقاط: {{ $result->total_points }} النقاط</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>نص السؤال </th>
                                    <th>النقاط</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result->questions as $question)
                                    <tr>
                                        <td>{{ $question->question_text }}</td>
                                        <td>{{ $question->pivot->points }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
