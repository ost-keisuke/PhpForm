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
        <table border=1>
            <tr>
                <th><label for="surname">姓<span> 必須</span></label></th>
                <td><input id="surname" type="text" name="surname" placeholder="山田" size=10/></td>
            </tr>
            <tr>
                <th><label for="name">名<span> 必須</span></label></th>
                <td><input id="name" type="text" name="name" placeholder="太郎" size=10/></td>
            </tr>
            <tr>
                <th><label for="sex">性別<span> 必須</span></label></th>
                <td><input id="man" type="radio" name="sex" value="男性" /><label for="man">男性</label>
                    <input id="women" type="radio" name="sex" value="女性" /><label for="women">女性</label>
                    <input id="unknown" type="radio" name="sex" value="不明" /><label for="unknown">不明</label>
                </td>
            </tr>
            <tr>
                <th><label for="address">住所<span> 必須</span></label></th>
                <td><input id="address" type="text" size=50 name="address" placeholder="東京都江東区○○○1-1-1　exマンション"　　/></td>
            </tr>
            <tr>
                <th><label for="phone">電話番号<span> 必須</span></label></th>
                <td><input id="phone1" type="text" name="phone1" size=3 placeholder="090" />-
                    <input id="phone2" type="text" name="phone2" size=3 placeholder="1234" />-
                    <input id="phone3" type="text" name="phone3" size=3 placeholder="5678" />
                </td>
            </tr>
            <tr>
                <th><label for="email">メールアドレス<span> 必須</span></label></th>
                <td><input id="email1" name="email1" type="text" placeholder="@以前を入力" /> @
                    <input id="email2" name="email2" type="text" placeholder="@以降を入力" />
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
                        <option value=1>カテゴリーを選択してください</option>
                        <option value=2>商品について</option>
                        <option value=3>サイトについて</option>
                        <option value=4>その他</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="inquiry">お問い合わせ内容<span> 必須</span></label></th>
                <td><textarea id="inquiry" name="inquiry" cols="*" rows="*"></textarea></td>
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
