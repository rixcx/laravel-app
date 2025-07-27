@extends('layouts.app')

@section('title', '質問詳細')

@section('content')
<div>
  <h1>{{ $question->text }}</h1>
  <ul>
  @foreach ($question->answers as $answer)
    <li>
      <h2><a href="#">・{{ $answer->user->name }}</a></h2>
      <p>{{ $answer->text }}</p>
    </li>
  @endforeach
  </ul>
</div>
@endsection
