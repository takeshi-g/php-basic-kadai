<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nums = [15, 4, 18, 23, 10 ];
        function sort_2way ($array, $order) {
            if($order === TRUE) {
                echo '昇順にソートします。'  . '<br>';
                sort($array);
                
            } else {
                echo '降順にソートします。'  . '<br>';
                rsort($array);
            }
            foreach($array as $value) {
                echo $value . '<br>';
            }
            
        }
        sort_2way($nums, TRUE);
    ?>
</body>
</html>