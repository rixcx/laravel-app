@extends('layouts.app')

@section('title', 'ログイン')

@push('styles')
  @vite(['resources/css/login.scss'])
@endpush

@section('content')
<section class="login">
  <div class="login__container">
    <h3>Qmeにログインする</h3>
      <!-- Session Status -->
      <x-auth-session-status class="mb-4" :status="session('status')" />
      <form class="login__form" method="POST" action="{{ route('login') }}">
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

          <div class="login__request">
              @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}">
                      {{ __('パスワードをお忘れですか？') }}
                  </a>
              @endif
          </div>
      </form>
  </div>
</section>
@endsection