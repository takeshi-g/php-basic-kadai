<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員情報入力フォーム</title>
</head>

<body>
    <h1>社員情報入力フォーム</h1>
    <form action="confirm.php" method="POST">
        <div class="input-box">
            <label for="name">社員名</label>
            <input type="text" name="employee_name" id="name">
        </div>
        <div class="input-box">
            <label for="employee_age">年齢</label>
            <input type="number" name="employee_age" id="age">
        </div>
        <div class="input-box">
            <label for="department">所属部署</label>
            <select name="department" id="department">
                <option value="開発部">開発部</option>
                <option value="営業部">営業部</option>
                <option value="人事部">人事部</option>

            </select>
        </div>
        <button type="submit">送信</button>
    </form>

</body>

</html>