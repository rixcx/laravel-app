@extends('layouts.app')

@section('title', 'プロフィール')

@push('styles')
  @vite(['resources/css/edit.scss'])
@endpush

@section('content')

<section class="">
    <h2 class="edit__title">プロフィール</h2>
    <p>名前：{{ $user->name }}</p>
    <div>
      <h3>回答一覧</h3>
      @foreach ($answers as $answer)
          <p>{{ $answer->question->text }}</p>
          <p>・{{ $answer->text }}</p>
      @endforeach
    </div>
</section>
@endsection