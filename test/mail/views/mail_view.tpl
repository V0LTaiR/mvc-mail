<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>New message</title>
</head>
<body>
<form action="/mail/sendMail" method="post">
    <div>
        <p>Email пользователя: <input type="email" required name="mail" value=""></p>
        <p>Имя пользователя:<input type="text" required name="name" value=""></p>
        <p>Тема сообщения:<input type="text" required name="theme" value=""></p>
        <p>Текст сообщения:
            <textarea name="text" rows="10" required cols="45"></textarea>
        </p>
        <button>Отправить</button>
    </div>
</form>
</body>
</html>