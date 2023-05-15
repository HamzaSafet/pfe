@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Résultats 
                    <span class="print float-end" onclick="print()">
                        <i class="fa-solid fa-print" style="cursor: pointer"></i>
                    </span>
                </div>

                <div class="card-body">
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question Text</th>
                                <th>Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result->questions as $question)
                                <tr>
                                    <td>{{ $question->question_text }}</td>
                                    <td>
                                        @if(($question->pivot->points) === 0 )
                                        <span style="color:red;">
                                            <strong>{{ $question->pivot->points }}</strong></span>
                                        @else
                                        <span style="color:green"><strong>{{ $question->pivot->points }}</strong></span>
                                   @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <p class="float-end">
                        <span style="font-size: 1.5em">Total : 
                            <span class="text-warning">{{ $result->total_points }} points</span> </span> </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection