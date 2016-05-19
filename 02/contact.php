<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrap">
    <h3>お問い合わせフォーム・入力ページ</h3>
    <form action="result.php" method="post">
        <table>
            <tr>
                <th><label for="surname">姓<span> 必須</span></label></th>
                <td><input id="surname" type="text" name="surname" placeholder="例）山田"/></td>
            </tr>
            <tr>
                <th><label for="name">名<span> 必須</span></label></th>
                <td><input id="name" type="text" name="name" placeholder="例）太郎"/></td>
            </tr>
            <tr>
                <th>性別</th>
                <td><input id="men" type="radio" name="sex" value="男性" /><label for="men">男性</label>
                    <input id="women" type="radio" name="sex" value="女性" /><label for="women">女性</label>
                    <input id="unknown" type="radio" name="sex" value="不明" /><label for="unknown">不明</label>
                </td>
            </tr>
            <tr>
                <th><label for="address">住所<span> 必須</span></label></th>
                <td><input id="address" type="text" name="address" size=50　placeholder="例）東京都江東区○○○1-1-1　マンション名" /></td>
            </tr>
            <tr>
                <th><label for="phone">電話番号<span> 必須</span></label></th>
                <td><input id="phone1" type="text" name="phone1" size=3 placeholder="例）090" />-
                    <input id="phone2" type="text" name="phone2" size=3 placeholder="例）1234" />-
                    <input id="phone3" type="text" name="phone3" size=3 placeholder="例）5678" />
                </td>
            </tr>
            <tr>
                <th><label for="mail">メールアドレス<span> 必須</span></label></th>
                <td><input id="mail1" name="mail1" type="text" placeholder="例）info" />@
                    <input id="mail2" name="mail2" type="text" placeholder="例）example.com" />
                </td>
            </tr>
            <tr>
                <th>どこでこのサイトを知りましたか？</th>
                <td>
                	<input id="magazine" name="magazine" type="checkbox" value="雑誌" /><label for="magazine">雑誌</label>
                    <input id="frend" name="frend" type="checkbox" value="知人の紹介" /><label for="frend">知人の紹介</label>
                	<input id="yahoo" name="yahoo" type="checkbox" value="ヤフー広告" /><label for="yahoo">ヤフー広告</label>
                </td>
            </tr>
            <tr>
                <th><label>質問カテゴリ<span> 必須</span></label></th>
                <td>
                    <select name="category">
                        <option value="商品について">商品について</option>

                        <option value="サイトについて">サイトについて</option>
                        <option value="その他">その他</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="inquiry">お問い合わせ内容<span> 必須</span></label></th>
                <td><textarea id="inquiry" name="inquiry" cols="50" rows="10"></textarea></td>
            </tr>
        </table>
        <div class="button">
        	<input type="submit" value="送信" />
        </div>
        <!--button_end -->
    </form>
</div>
<!--wrap_end-->
</body>
</html>
