<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  


  <h1>管理システム</h1>
  <form method="post" action="{{ route('form.search') }}">
    @csrf
    <div class="form-item">
        <p class="form-item-label">お名前</p>
        <input type="text" name="name" class="form-item-input">
      </div>
      
      <div class="form-item">
        <p class="form-item-label">性別</p>
        <label>
          <input type="radio" name="gender"  class="form-item-input" checked>
          全て
        </label>
        <label>
          <input type="radio" name="gender"  class="form-item-input">
          男性
        </label>
        <label>
          <input type="radio" name="gender" value="women" class="form-item-input">
          女性
        </label>
      </div>

      <div class="form-item">
        <p class="form-item-label">登録日</p>
        <input name="date" type="date" class="form-item-input">
        <span>～</span>
        <input name="date" type="date" class="form-item-input">
      </div>
      
      <div class="form-item">
        <p class="form-item-label">メールアドレス</p>
        <input name="email" type="email" class="form-item-input">
      </div>
      <input type="submit" value="検索">
      <input type="reset" name="reset" value="リセット">
  </form>

  @if (@isset($item))
  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
    </tr>
    @foreach($item as $item)
    <tr>
      <td>
        {{$item->getDetail()}}
      </td>
      <td>
        <form action="{{ route('form.delete', ['id' => $item->id]) }}" method="post">
        @csrf
          <button class="button-delete">削除</button>
        </form>
      </td>          
    </tr>
    @endforeach
  @endif

  </table>
  
</body>
</html>