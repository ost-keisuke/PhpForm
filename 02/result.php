<div id="wrap">
    <h3>お問い合わせフォーム・エラーチェック・確認ページ</h3>
    <?PHP

	//すべて受信
	extract($_POST);


		echo '

    <form action="inq03.php" method="post">
        <table>
            <tr>
                <th>お名前</label></th>
                <td>'.$namae.'</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>'.$sex.'</td>
            </tr>
            <tr>
                <th>生年月日</th>
                <td>'.$yyyy.'年'.$mm.'月'.$dd.'日</td>
            </tr>
            <tr>
                <th>どこでこのサイトを知りましたか？</th>
                <td>'."$book"."$frend"."$yahoo".'</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>'.$email1.'</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>'.$naiyou.'</td>
            </tr>
        </table>
        <div class="button">
        	<input type="submit" value="送信する" /><input type="button" onclick="self.history.back()" value="入力画面に戻る" />
        </div>
        <!--button_end -->
     </form>';
	}
		?>


</div>
