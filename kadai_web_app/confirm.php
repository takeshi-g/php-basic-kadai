<?php
$employee_name = $_POST['employee_name'];
$employee_age = $_POST['employee_age'];
$department = $_POST['department'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力確認t</title>
</head>

<body>
    <h1>入力内容をご確認っください。</h1>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table>
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $employee_name ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $employee_age ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department ?></td>
        </tr>
    </table>
    <button id="confirm-btn">確定</button>
    <button id="cancel-btn">キャンセル</button>
    <script>
        const confirmBtn = document.querySelector('#confirm-btn');
        const cancelBtn = document.querySelector('#cancel-btn');
        console.log(confirmBtn, cancelBtn);
        confirmBtn.addEventListener('click', () => location.href = 'complete.php');
        cancelBtn.addEventListener('click', () => history.back());
    </script>
</body>

</html>