<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
</head>
<body>

<p class="message">入力例は全部「1時間30分」です</p>
<br>
<p class="message">「稼働時間/h」以外は全く同じです</p>

<div class="flex">
  <h2>1：4桁のmmddを1つの入力欄に入れる</h2>
  <table>
    <thead>
      <th>日付</th>
      <th>稼働時間/h</th>
      <th>確定</th>
      <th>契約</th>
      <th>職種</th>
      <th>作業内容</th>
    </thead>
    <tbody>
      <?php for ($i=0; $i < 1; $i++) : ?>
      <tr>
        <td>
          <input type="text" class="datePicker">
        </td>
        <td>
          <input type="number" placeholder="例：0130">
        </td>
        <td></td>
        <td><select name="" id="">
          <option value="">契約名1</option>
          <option value="">契約名2</option>
          <option value="">契約名3</option>
        </select></td>
        <td><select name="" id="">
          <option value="">ディレクター</option>
          <option value="">デザイナー</option>
          <option value="">エンジニア</option></select></td>
        <td><textarea name="" id=""></textarea></td>
      </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>

<div class="flex">
<h2>2：2桁のmmとddをそれぞれの入力欄に入れる</h2>
  <table>
    <thead>
      <th>日付</th>
      <th>稼働時間/h</th>
      <th>確定</th>
      <th>契約</th>
      <th>職種</th>
      <th>作業内容</th>
    </thead>
    <tbody>
      <?php for ($i=0; $i < 1; $i++) : ?>
      <tr>
        <td>
          <input type="text" class="datePicker">
        </td>
        <td>
          <div class="col">
            <input type="number" placeholder="01" maxlength="2">
            <span>：</span>
            <input type="number" placeholder="30" maxlength="2">
          </div>
        </td>
        <td></td>
        <td><select name="" id="">
          <option value="">契約名1</option>
          <option value="">契約名2</option>
          <option value="">契約名3</option>
        </select></td>
        <td><select name="" id="">
          <option value="">ディレクター</option>
          <option value="">デザイナー</option>
          <option value="">エンジニア</option></select></td>
        <td><textarea name="" id=""></textarea></td>
      </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>

<div class="flex">
<h2>3：mmddを小数点ありの形式で1つの入力欄に入れる（今のスプシと同じ形式）</h2>
  <table>
    <thead>
      <th>日付</th>
      <th>稼働時間/h</th>
      <th>確定</th>
      <th>契約</th>
      <th>職種</th>
      <th>作業内容</th>
    </thead>
    <tbody>
      <?php for ($i=0; $i < 1; $i++) : ?>
      <tr>
        <td>
          <input type="text" class="datePicker">
        </td>
        <td>
            <input type="number" placeholder="例：1.5">
        </td>
        <td></td>
        <td><select name="" id="">
          <option value="">契約名1</option>
          <option value="">契約名2</option>
          <option value="">契約名3</option>
        </select></td>
        <td><select name="" id="">
          <option value="">ディレクター</option>
          <option value="">デザイナー</option>
          <option value="">エンジニア</option></select></td>
        <td><textarea name="" id=""></textarea></td>
      </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>

<div class="flex">
  <h2>4：1のセレクトボックスバージョン</h2>
  <table>
    <thead>
      <th>日付</th>
      <th>稼働時間/h</th>
      <th>確定</th>
      <th>契約</th>
      <th>職種</th>
      <th>作業内容</th>
    </thead>
    <tbody>
      <?php for ($i=0; $i < 1; $i++) : ?>
      <tr>
        <td>
          <input type="text" class="datePicker">
        </td>
        <td>
          <select name="" id="">
            <option value="">00:15</option>
            <option value="">00:30</option>
            <option value="">00:45</option>
            <option value="">01:00</option>
            <option value="">01:15</option>
            <option value="">01:30</option>
            <option value="">01:45</option>
            <option value="">02:00</option>
            <option value="">03:15</option>
            <option value="">03:30</option>
            <option value="">03:45</option>
            <option value="">04:00</option>
            <option value="">03:15</option>
            <option value="">03:30</option>
            <option value="">03:45</option>
            <option value="">04:00</option>
            <option value="">03:15</option>
            <option value="">03:30</option>
            <option value="">03:45</option>
            <option value="">04:00</option>
            <option value="">03:15</option>
            <option value="">03:30</option>
            <option value="">03:45</option>
            <option value="">04:00</option>
            <option value="">04:15</option>
            <option value="">04:30</option>
            <option value="">04:45</option>
            <option value="">05:00</option>
            <option value="">05:15</option>
            <option value="">05:30</option>
            <option value="">05:45</option>
            <option value="">06:00</option>
            <option value="">06:15</option>
            <option value="">06:30</option>
            <option value="">06:45</option>
            <option value="">07:00</option>
            <option value="">07:15</option>
            <option value="">07:30</option>
            <option value="">07:45</option>
            <option value="">08:00</option>
            <option value="">08:15</option>
            <option value="">08:30</option>
            <option value="">08:45</option>
            <option value="">04:00</option>
            <option value="">08:15</option>
            <option value="">08:30</option>
            <option value="">08:45</option>
            <option value="">09:00</option>
            <option value="">09:15</option>
            <option value="">09:30</option>
            <option value="">09:45</option>
            <option value="">10:00</option>
            <option value="">10:15</option>
            <option value="">10:30</option>
            <option value="">10:45</option>
            <option value="">11:00</option>
            <option value="">11:15</option>
            <option value="">11:30</option>
            <option value="">11:45</option>
            <option value="">12:00</option>
            <option value="">12:15</option>
            <option value="">12:30</option>
            <option value="">12:45</option>
            <option value="">13:00</option>
            <option value="">13:15</option>
            <option value="">13:30</option>
            <option value="">13:45</option>
            <option value="">14:00</option>
            <option value="">14:15</option>
            <option value="">14:30</option>
            <option value="">14:45</option>
            <option value="">15:00</option>
            <option value="">15:15</option>
            <option value="">15:30</option>
            <option value="">15:45</option>
            <option value="">16:00</option>
            <option value="">16:15</option>
            <option value="">16:30</option>
            <option value="">16:45</option>
            <option value="">17:00</option>
          </select>
        </td>
        <td></td>
        <td><select name="" id="">
          <option value="">契約名1</option>
          <option value="">契約名2</option>
          <option value="">契約名3</option>
        </select></td>
        <td><select name="" id="">
          <option value="">ディレクター</option>
          <option value="">デザイナー</option>
          <option value="">エンジニア</option></select></td>
        <td><textarea name="" id=""></textarea></td>
      </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>

<div class="flex">
  <h2>5：2のセレクトボックスバージョン</h2>
  <table>
    <thead>
      <th>日付</th>
      <th>稼働時間/h</th>
      <th>確定</th>
      <th>契約</th>
      <th>職種</th>
      <th>作業内容</th>
    </thead>
    <tbody>
      <?php for ($i=0; $i < 1; $i++) : ?>
      <tr>
        <td>
          <input type="text" class="datePicker">
        </td>
        <td>
          <div class="col2">
            <select name="" id="">
              <option value="">0</option>
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
              <option value="">5</option>
              <option value="">6</option>
              <option value="">7</option>
              <option value="">8</option>
              <option value="">9</option>
              <option value="">10</option>
              <option value="">11</option>
              <option value="">12</option>
              <option value="">13</option>
              <option value="">14</option>
              <option value="">15</option>
              <option value="">16</option>
              <option value="">17</option>
            </select>
            <span>：</span>
            <select name="" id="">
              <option value="">00</option>
              <option value="">15</option>
              <option value="">30</option>
              <option value="">45</option>
            </select>
          </div>
        </td>
        <td></td>
        <td><select name="" id="">
          <option value="">契約名1</option>
          <option value="">契約名2</option>
          <option value="">契約名3</option>
        </select></td>
        <td><select name="" id="">
          <option value="">ディレクター</option>
          <option value="">デザイナー</option>
          <option value="">エンジニア</option></select></td>
        <td><textarea name="" id=""></textarea></td>
      </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>


  <!-- <input type="number" id="datePicker" placeholder="日付を選択"> -->
  <!-- <button id="calendarBtn">カレンダーを開く</button> -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // カレンダーの設定
      const fp = flatpickr(".datePicker", {
          locale: 'ja',           // 日本語化
          // dateFormat: 'Y/m/d',    // 日付のフォーマット
          dateFormat: 'm/d',    // 日付のフォーマット
          enableTime: false,      // 時間選択を無効化
          position: 'below',      // カレンダーの表示位置
          defaultDate: 'today'
      });

      // // ボタンクリックでカレンダーを表示
      // document.getElementById('calendarBtn').addEventListener('click', function() {
      //     fp.open();
      // });
    });
  </script>

</body>
</html>