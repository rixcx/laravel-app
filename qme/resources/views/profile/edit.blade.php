@extends('layouts.app')

@section('title', '設定')

@push('styles')
  @vite(['resources/css/edit.scss'])
@endpush

@section('content')

<section class="edit">
    <h2 class="edit__title">設定</h2>
    <p class="edit__text">ユーザーネームやメールアドレスなど、アカウントの基本情報を更新できます。</p>
      @include('profile.partials.update-profile-information-form')
      @include('profile.partials.delete-user-form')
</section>
@endsection