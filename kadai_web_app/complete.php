<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録完了</title>
</head>

<body>
    <h1>登録が完了しました。</h1>
    <p>社員情報がデータベースに保存されました。</p>
    <button id="back">戻る</button>
    <script>
        const backBtn = document.querySelector('#back');
        backBtn.addEventListener('click', () => location.href = 'form.php')
    </script>
</body>

</html>