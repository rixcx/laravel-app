<header class="header">
    <h1 class="header__title"><a href="/">Qme</a></h1>
    <nav class="header__nav">
      <ul>
        @auth
        <li><a href="/mypage">マイページ</a></li>
        @endauth
        <li><a href="/questions">質問一覧</a></li>
        @auth
        <li><a href="/settings">設定</a></li>
        @endauth
      </ul>
      <div>
        @auth
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            ログアウト
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
        @guest
        <a href="/register">新規登録</a>
        <a href="/login">ログイン</a>
        </div>
      @endguest
    </nav>
</header>