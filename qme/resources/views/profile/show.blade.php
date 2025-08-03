@extends('layouts.app')

@section('title', 'プロフィール')

@push('styles')
  @vite(['resources/css/edit.scss'])
@endpush

@section('content')

<section class="">
    <h2 class="edit__title">プロフィール</h2>
    <p>名前：{{ $user->name }}</p>
</section>
@endsection