@extends('layouts.app')

@section('title', '')

@push('styles')
  @vite(['resources/css/home.scss'])
@endpush

@section('content')
  @guest
  <section class="home">
    <h2 class="home__title">Qme</h2>
    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

    @auth
    <div>
      <p>ようこそ、{{ Auth::user()->name }}さん！</p>
      <p>あなたはログイン済です。</p>
    </div>
    @endauth

    <div class="home__container">
      <h3>Qmeにログインする</h3>
      <form class="home__form" method="POST" action="{{ route('login') }}">
          @csrf

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

          <x-primary-button :value="__('ログイン')" />

          <div class="home__request">
              @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}">
                      {{ __('パスワードをお忘れですか？') }}
                  </a>
              @endif
          </div>
      </form>
      <p class="home__register">まだアカウントをお持ちでない場合<br>新規登録は<a href="{{ route('register') }}">こちら</a></p>
    </div>
  </section>
  @endguest
@endsection