
<!doctype html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>簡易範例</title>
  <style>body{font-family:Segoe UI,Arial,sans-serif;margin:40px}button{padding:8px 12px}</style>
</head>
<body>
  <h1>簡易 HTML 檔案</h1>
  <p>這是一個簡單的範例檔案。</p>
  <button id="showTime">顯示現在時間</button>
  <script>
    document.getElementById('showTime').addEventListener('click',function(){
      alert('現在時間：' + new Date().toLocaleString());
    });
  </script>
</body>
</html>