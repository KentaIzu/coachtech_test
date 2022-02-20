<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>ご意見いただきありがとうございました。</h2>
  <form method="get" action="{{ route('form.show') }}">
    @csrf
    <input type="submit" value="トップページへ" >
  </form>
</body>
</html>