@extends('layouts.app')

@section('title', 'マイページ')

@push('styles')
  @vite(['resources/css/mypage.scss'])
@endpush

@section('content')

<div class="mypage">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
  <p>ようこそ、{{ Auth::user()->name }} さん！</p>
  <p>あなたはログイン済です。</p>
  
  <section class="mypage__menus">
    <div class="mypage__box">
      <a href="#">
        <h2>プロフィール</h2>
        <p>自分のプロフィールを表示します</p>
      </a>
    </div>
    <div class="mypage__box">
      <a href="{{ route('questions') }}">
        <h2>質問一覧</h2>
        <p>投稿された質問の一覧を表示します</p>
      </a>
    </div>
    <div class="mypage__box">
      <a href="{{ route('profile.edit') }}">
        <h2>設定</h2>
        <p>ユーザー情報の変更などはこちら</p>
      </a>
    </div>
  </section>

</div>
@endsection
