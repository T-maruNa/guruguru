<DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')｜nodoame.net</title>
        <meta name="description" itemprop="description" content="@yield('description')">
        <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="/css/common/common.css" media="all">
        @yield('link')
    </head>
    <body>
        <header>
            <!-- 省略 -->
        </header>
        <div id="wrapper">
            @yield('content')
        </div>
        <footer>
            <!-- 省略 -->
        </footer>
    </body>
</html>