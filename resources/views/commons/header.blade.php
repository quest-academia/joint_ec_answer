<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">

        <a class="navbar-brand" href="/">やんばるエキスパート</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        @guest
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                        </li>
                    @endif
                </ul>
            </div>
        @else
            <div class="collapse navbar-collapse justify-content-end" id="nav-bar">
                <div class="flex"> 
                    <div class="text-right">
                        {{ Auth::user()->last_name }}　{{ Auth::user()->first_name }}さん
                    </div>
                    <div>
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/products/" class="nav-link">商品検索</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">カート</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">注文履歴</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">ユーザ情報</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('ログアウト') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>    
                        </ul>
                    </div>
                </div>
            </div>
        @endguest

    </nav>
</header>