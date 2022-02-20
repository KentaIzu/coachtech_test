<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>内容確認</h1>
  <form method="post" action="{{ route('form.send') }}">
    @csrf
    <div class="form-item">
        <p class="form-item-label">お名前</p>
        {{ $input['name'] }}
      </div>

      <div class="form-item">
        <p class="form-item-label">性別</p>
        {{ $input['gender'] }}
      </div>

      <div class="form-item">
        <p class="form-item-label">メールアドレス</p>
        {{ $input['email'] }}
      </div>

      <div class="form-item">
        <p class="form-item-label">郵便番号</p>
        {{ $input['postcode'] }}
      </div>

      <div class="form-item">
        <p class="form-item-label">住所</p>
        {{ $input['address'] }}
      </div>

      <div class="form-item">
        <p class="form-item-label">建物名</p>
        {{ $input['building_name'] }}
      </div>

      <div class="form-item">
        <p class="form-item-label">ご意見</p>
        {{ $input['option'] }}
      </div>
    <input type="submit" value="送信" >
    <input name="back" type="submit" value="修正する" >
  </form>

</body>
</html>