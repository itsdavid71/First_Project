<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <hr>
    <h1>Список пользователей:</h1>
    <hr>
    
    <?php foreach($users as $user) {
        echo '<h3>Логин: ' . $user['login'] . '</h3>';
        echo '<h4>Пароль: ' . $user['pass'] . '</h4>';
        echo '<a href="user_profile.php?id=' . $user['user_id'] . '">Ссылка на профиль</a><br><br>';
    } ?>

</body>
</html>
