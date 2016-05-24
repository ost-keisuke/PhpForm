<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrap">
    <header><h1>お問い合わせフォーム・入力ページ</h1></header>
    <form action="result.php" method="post">

            <div class="form">
                <label for="surname">姓<span> 必須</span></label>
                <input id="surname" type="text" required="required" name="surname" placeholder="山田" size=10/>
            </div>
            <div class="form">
                <th><label for="name">名<span> 必須</span></label></th>
                <input id="name" type="text" required="required" name="name" placeholder="太郎" size=10/>
            </div>
            <div class="form">
                <th><label for="sex">性別<span> 必須</span></label></th>
                <input id="man" type="radio" name="sex" value=0 /><label for="man">男性</label>
                    <input id="women" type="radio" name="sex" value=1 /><label for="women">女性</label>
                    <input id="unknown" type="radio" name="sex" value=2 checked/><label for="unknown">不明</label>

            </div>
            <div class="form">
                <th><label for="address">住所<span> 必須</span></label></th>
                <input id="address" type="text" required="required" size=50 name="address" placeholder="東京都江東区○○○1-1-1　exマンション"　　/>
            </div>
            <div class="form">
                <th><label for="phone">電話番号<span> 必須</span></label></th>
                <input id="phone1" type="text" required="required" name="phone1" size=3 placeholder="090" /><p style="display: inline"> -</p>
                    <input id="phone2" type="text" required="required" name="phone2" size=3 placeholder="1234" /><p style="display: inline"> -</p>
                    <input id="phone3" type="text" required="required" name="phone3" size=3 placeholder="5678" />

            </div>
            <div class="form">
                <th><label for="email">メールアドレス<span> 必須</span></label></th>
                <input id="email1" name="email1" required="required" type="text" placeholder="@以前を入力" /> @
                    <input id="email2" name="email2" required="required" type="text" placeholder="@以降を入力" />

            </div>
            <div class="form">
                <th>どこでこのサイトを知りましたか？</th>

                	<input id="know" name="know" type="checkbox" value="0" /><label for="magazine">雑誌</label>
                    <input id="know" name="know" type="checkbox" value="1" /><label for="frend">広告</label>
                	<input id="know" name="know" type="checkbox" value="2" /><label for="yahoo">知人の紹介</label>

            </div>
            <div class="form">
                <th><label>質問カテゴリ<span> 必須</span></label></th>

                    <select name="category">
                        <option value=0>カテゴリーを選択してください</option>
                        <option value=1>商品について</option>
                        <option value=2>サイトについて</option>
                        <option value=3>その他</option>
                    </select>

            </div>
            <div class="form">
                <th><label for="inquiry">お問い合わせ内容<span> 必須</span></label></th>
                <textarea id="inquiry" required="required" name="inquiry" cols="50" rows="20"></textarea>
            </div>
        </table>
        <div class="button">
        	<input type="submit" value="送信" />
        </div>
        <!--button_end -->
    </list>
    </form>
</div>
<!--wrap_end-->
</body>
</html>
