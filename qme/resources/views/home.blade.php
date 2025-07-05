@extends('layouts.app')

<!-- @section('title', '') -->

@section('content')
  @auth
  <div>
    <p>ようこそ、{{ Auth::user()->name }}さん！</p>
    <p>あなたはログイン済です。</p>
  </div>
  @endauth
  @guest
  <p>あなたは未ログインです。</p>
  @endguest

<div>
  <p>アカウントをお持ちですか？<a href="/login">【ログイン】</a></p>
  まだアカウントをお持ちでない場合<a href="/register">【新規登録】</a>
</div>
@endsection