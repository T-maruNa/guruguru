<DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')｜nodoame.net</title>
        <meta name="description" itemprop="description" content="@yield('description')">
        <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="/css/common/common.css" media="all">
        <link rel="stylesheet" type="text/css" href="/css/common/style.css" media="all">
        @yield('link')
    </head>
    <body>
        <header class="header">
            <nav class="navbar">
                <div class="logo">
                <a href="index.html">ロゴ</a>
                </div>
                <form class="search-form" action="#" method="GET">
                <input type="text" name="search" placeholder="検索">
                <button type="submit">検索</button>
                </form>
                <ul class="nav-menu">
                <li><a href="#">ホーム</a></li>
                <li><a href="#">リポジトリ</a></li>
                <li><a href="#">プロフィール</a></li>
                <li><a href="#">ログアウト</a></li>
                </ul>
            </nav>
        </header>
        <div id="wrapper">
            @yield('content')
        </div>
        <footer>
            <!-- 省略 -->
        </footer>
    </body>
</html>