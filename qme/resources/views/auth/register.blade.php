@extends('layouts.app')

@section('title', '新規登録')

@push('styles')
  @vite(['resources/css/register.scss'])
@endpush

@section('content')
<section class="register">
  <div class="register__container">
    <h3>Qmeへようこそ</h3>
    <p>登録を始めましょう！</p>

    <form class="register__form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="input-group">
            <x-text-input id="name" type="name" name="name" :value="old('name')" required autofocus autocomplete="off" placeholder=" "/>
            <x-input-label for="name" :value="__('ユーザーネーム')" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div class="input-group">
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="off" placeholder=" "/>
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="input-group">
            <x-text-input id="password" type="password" name="password" required autocomplete="off" placeholder=" "/>
            <x-input-label for="password" :value="__('パスワード')" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="input-group">
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="off" placeholder=" "/>
            <x-input-label for="password_confirmation" :value="__('もう一度パスワードを入力してください')" />
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>
        
        <!-- Profile Image -->
        <div class="input-group">
            <x-image-input id="icon" name="icon" type="file" placeholder=" "/>
            <x-input-label for="icon" :value="__('プロフィール画像')" class="input-label--image" />
            <x-input-error :messages="$errors->get('icon')" />
            <ul class="input-note">
              <li>・2MB以下のJPG,PNG形式の画像を選択してください。</li>
            </ul>
        </div>

        <x-primary-button :value="__('新規登録')" />
    </form>
    <p class="register__login"> アカウントをお持ちですか？<br>ログインは<a class="" href="{{ route('login') }}">こちら</a></p>
  </div>
</section>
@endsection



