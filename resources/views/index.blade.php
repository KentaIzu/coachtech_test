<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>お問い合わせ</h1>
  <form method="post" action="{{ route('form.post') }}">
	@csrf
    <div class="form-item">
      <p class="form-item-label">お名前<span class="form-item-required">※</span></p>
      <input type="text" name="name" value="{{ old('name') }} " class="form-item-input">
      <p class="example">例）山田 太郎</p>
      @if ($errors->has('name'))
      <div style="color:red;">
        <p class="error-message">{{ $errors->first('name') }}</p>
      </div>
      @endif
    </div>

    <div class="form-item">
      <p class="form-item-label">性別<span class="form-item-required">※</span></p>
      <label>
        <input type="radio" name="gender"  class="form-item-input" value="男性" checked>
        男性
      </label>
      <label>
        <input type="radio" name="gender"  class="form-item-input" value="女性">
        女性
      </label>
    </div>

    <div class="form-item">
      <p class="form-item-label">メールアドレス<span class="form-item-required">※</span></p>
      <input name="email" value="{{ old('email') }} "type="email" class="form-item-input">
      <p class="example">例）test@example.com</p>
      @if ($errors->has('email'))
      <div style="color:red;">
        <p class="error-message">{{ $errors->first('email') }}</p>
      </div>
      @endif
    </div>

    <div class="form-item">
      <p class="form-item-label">郵便番号<span class="form-item-required">※</span></p>
      <label>〒<input type="text" name="postcode" value="{{ old('postcode') }}" class="form-item-input"></label>
      <p class="example">例）123-4567</p>
      @if ($errors->has('postcode'))
      <div style="color:red;">
        <p class="error-message">{{ $errors->first('postcode') }}</p>
      </div>
      @endif
    </div>

    <div class="form-item">
      <p class="form-item-label">住所<span class="form-item-required">※</span></p>
      <input type="text" name="address" value="{{ old('address') }} " class="form-item-input">
      <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
      @if ($errors->has('address'))
      <div style="color:red;">
        <p class="error-message">{{ $errors->first('address') }}</p>
      </div>
      @endif
    </div>

    <div class="form-item">
      <p class="form-item-label">建物名</p>
      <input type="text" name="building_name" class="form-item-input" value="{{ old('building_name')}}">
      <p class="example">例）千駄ヶ谷マンション101</p>
    </div>

    <div class="form-item">
      <p class="form-item-label">ご意見<span class="form-item-required">※</span></p>
      <textarea name="option">{{ old('option') }}</textarea>
      @if ($errors->has('option'))
      <div style="color:red;">
        <p class="error-message">{{ $errors->first('option') }}</p>
      </div>
      @endif
    </div>
    <input type="submit" value="確認" >
  </form>
  
</body>
</html>