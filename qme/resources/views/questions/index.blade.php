@extends('layouts.app')

@section('title', '質問一覧')

@section('content')
<div>
  質問一覧
  <ul>
    @foreach ($questions as $question)
        <li><a href="{{ route('questions.show', $question->id) }}">・{{ $question->text }}</a></li>
    @endforeach
  </ul>
</div>
@endsection
