<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container mt-4">

        <?php
        if (empty($_COOKIE['user'])) :
        ?>

            <div class="row">
                <div class="col">
                    <h1>Форма регистрации</h1>
                    <form action="validation-form/check.php" method="POST">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                        <button class="btn btn-success" type="submit">Зарегистрироваться</button>
                    </form>
                </div>
                <div class="col">
                    <h1>Форма авторизации</h1>
                    <form action="validation-form/auth.php" method="POST">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                        <button class="btn btn-success" type="submit">Авторизоваться</button>
                    </form>
                </div>
            </div>

        <?php else : ?>
            <p>Привет <?= $_COOKIE['user'] ?>. Чтобы выйти нажмите <a href="exit.php">здесь</a>.</p>

        <?php
        endif;
        ?>

    </div>
</body>

</html>