@extends('layouts.app')

@section('title', 'マイページ')

@section('content')

<?php
session()->flash('status', 'ログインに成功しました！');
?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
  <p>ようこそ、{{ Auth::user()->name }} さん！</p>
  <p>あなたはログイン済です。</p>
</div>
@endsection
