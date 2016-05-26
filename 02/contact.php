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
                <div class="tag"><label for="surname">姓<span>必須</span></label></div>
                <input id="surname" type="text" required="required"  name="surname" autofocus placeholder="山田" pattern="^[a-zA-Z0-9ａ-ｚＡ-Ｚァ-ンぁ-ん一-龥]+$" size=10/>
            </div>

            <div class="form">
                <div class="tag"><label for="name">名<span>必須</span></label></div>
                <input id="name" type="text" required="required" name="name" placeholder="太郎" pattern="^[a-zA-Z0-9ａ-ｚＡ-Ｚァ-ンぁ-ん一-龥]+$" size=10/>
            </div>

            <div class="form">
                <div class="tag"><label for="sex">性別<span>必須</span></label></div>
                <input id="man" type="radio" name="sex" value=0 /><label for="man">男性</label>
                <input id="women" type="radio" name="sex" value=1 /><label for="women">女性</label>
                <input id="unknown" type="radio" name="sex" value=2 checked/><label for="unknown">不明</label>
            </div>

            <div class="form">
                <div class="tag"><label for="address">住所<span>必須</span></label></div>
                <input id="address" type="text" required="required" size=50 name="address"　placeholder="東京都江東区○○○1-1-1　exマンション"　　/>
            </div>

            <div class="form">
                <div class="tag"><label for="phone">電話番号<span>必須</span></label></div>
                <input id="phone1" type="text" required="required" name="phone1" size=3 pattern="\d{2,4}" placeholder="090" /><p> -</p>
                <input id="phone2" type="text" required="required" name="phone2" size=3 pattern="\d{2,4}" placeholder="1234" /><p> -</p>
                <input id="phone3" type="text" required="required" name="phone3" size=3 pattern="^\d{3,4}" placeholder="5678" />
            </div>

            <div class="form">
                <div class="tag"><label for="email">メールアドレス<span>必須</span></label></div>
                <input id="email1" name="email1" required="required" type="text" pattern="^[a-zA-Z]{1}[0-9a-zA-Z]+[\w\.-]+$" placeholder="@以前を入力" /><p> @</p>
                <input id="email2" name="email2" required="required" type="text" pattern="^[\w\.-]+\.\w{2,}$" minlength=4 placeholder="@以降を入力" />
            </div>

            <div class="form">
                <div class="tag"><label for="know">サイトを知った経緯<span class=any>任意</span></label></div>
                <label><input name="know[]" type="checkbox" value=1 />雑誌</label>
                <label><input name="know[]" type="checkbox" value=2 />広告</label>
                <label><input name="know[]" type="checkbox" value=3 />知人の紹介</label>
            </div>

            <div class="form">
                <div class="tag"><label>お問い合わせカテゴリ<span>必須</span></label></div>
                <select name="category">
                    <option value=0>カテゴリーを選択してください</option>
                    <option value=1>商品について</option>
                    <option value=2>サイトについて</option>
                    <option value=3>その他</option>
                </select>
            </div>

            <div class="form">
                <div id="qa"><label for="inquiry">お問い合わせ内容<span>必須</span><p id=one>*2000文字まで</p></label></div>
                <textarea id="inquiry" required="required" name="inquiry" cols="50" rows="20"></textarea>
            </div>

            <div class="button">
                <input type="submit" value="送信" />
            </div>

        </form>
    </div>
    <!--wrap_end-->
</body>
</html>
