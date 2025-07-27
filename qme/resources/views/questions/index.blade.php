@extends('layouts.app')

@section('title', '質問一覧')

@section('content')
<div>
  質問一覧
  <ul>
    @foreach ($questions as $question)
        <li>・{{ $question->text }}</li>
    @endforeach
  </ul>
</div>
@endsection
