<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ваш_емейл@example.com";
    $subject = "Новое сообщение от $name";
    $body = "Имя: $namenEmail: $emailnСообщение:n$message";

    if (mail($to, $subject, $body)) {
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>