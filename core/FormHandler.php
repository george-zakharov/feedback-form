<?php
//открываем сессию
session_start();
// переменная в которую будем сохранять результат работы
$data['result']='error';

// функция для проверки длины строки
function validStringLength($string,$min,$max) {
    $length = mb_strlen($string,'UTF-8');
    if (($length<$min) || ($length>$max)) {
        return false;
    }
    else {
        return true;
    }
}

// если данные были отправлены методом POST, то...
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // устанавливаем результат, равный success
    $data['result'] = 'success';
    //получить имя, которое ввёл пользователь
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if (!validStringLength($name, 2, 30)) {
            $data['name'] = 'Поля имя содержит недопустимое количество символов.';
            $data['result'] = 'error';
        }
    } else {
        $data['result'] = 'error';
    }
    //получить email, которое ввёл пользователь
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $data['email'] = 'Поле email введено неправильно';
            $data['result'] = 'error';
        }
    } else {
        $data['result'] = 'error';
    }
    //получить сообщение, которое ввёл пользователь
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
        if (!validStringLength($message, 20, 1000)) {
            $data['message'] = 'Поле сообщение содержит недопустимое количество символов.';
            $data['result'] = 'error';
        }
    } else {
        $data['result'] = 'error';
    }
}
// дальнейшие действия (ошибок не обнаружено)
if ($data['result']=='success') {
    //TODO: Send to DB
}
// формируем ответ, который отправим клиенту
echo json_encode($data);
