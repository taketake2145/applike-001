<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ホーム画面からの起動か判別する</title>
    <link rel="manifest" href="manifest.json" />
  </head>
  <body>

    <script>
    /**
     * ホーム画面からの起動か判別する
     */
    var is_standalone = function() {  
      var is_standalone;
      switch (true) {

        // manifest.jsonのstart_urlと比較する もしくは iOSの場合
        case (-1 != location.href.indexOf("?utm_source=homescreen")):
        case navigator.standalone:
          is_standalone = true;
          break;
        default:
          is_standalone = false;
      }
      return is_standalone;
    }
    </script>

    <script>
    if (is_standalone()) {
      document.write("ホーム画面からの起動です");
    } else {
      document.write("ブラウザーからの起動です");
    }
    </script>
  </body>
</html>