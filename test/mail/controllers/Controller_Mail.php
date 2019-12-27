<?php

class Mail
{
    function showForm()
    {
        include "mail/views/mail_view.tpl";
    }

    function sendMail()
    {
        if (!empty($_POST['mail'] && $_POST['name'] && $_POST['theme'] && $_POST['text'])) {
            extract($_POST);
            $text = "Вам было отправлено сообщение от пользователя $name ($mail)

$text";
            $status = mail('admin@site.ru', $theme, $text);
            if ($status) {
                echo 'Отправлено';
            } else {
                echo 'Ошибка';
            }
        } else {
            echo "Нет данных для обработки";
        }
    }
}