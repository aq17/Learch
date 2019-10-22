<!DOCTYPE html>
<html>
  <head>
    <title>Norail | 勉強をもっと楽しくはじめよう！</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>
  <body>
    <header>
      <img src="logo.png" class="home__header-logo"/>
      <!--ログインしてる時-->
      <ul>
        <li>
          カリキュラム一覧
        </li>
        <li>
          ランキング
        </li>
        <li>
          ヘルプセンター
        </li>
      </ul>
      <!--してない時-->
      <ul>
        <li>
          ログイン
        </li>
        <li>
          新規登録
        </li>
      </ul>
    </header>

    <div id="app"></div>

    <h1>楽しい勉強、していますか？</h1>
    <h2>Norailは、よりあなたの興味を伸ばすための勉強をサポートします。</h2>
    <script src=" {{ mix('js/app.js') }} "></script>
  </body>
</html>
