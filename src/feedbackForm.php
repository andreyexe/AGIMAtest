<?php

$data = array();
$data['errors'] = array();
$data['fields'] = array();

if (!empty($_POST)) {
    if (!empty($_POST['name'])) {
        if (strlen($_POST['name']) < 15 && strlen($_POST['name']) > 0) {
            $data['fields']['name'] = htmlspecialchars($_POST['name']);
        } else {
            $data['errors'][] = '<li>' . 'Имя слишком длинное!(15 символов)' . '</li>';
            $data['fields']['name'] = htmlspecialchars($_POST['name']);
        }
    } else {
        $data['errors'][] = '<li>' . 'Введите имя!' . '</li>';
        $data['fields']['name'] = '';
    }

    if (!empty($_POST['email'])) {
        $data['fields']['email'] = htmlspecialchars($_POST['email']);
    } else {
        $data['errors'][] = '<li>' . 'Введите email!' . '</li>';
        $data['fields']['email'] = '';
    }


    if (!empty($_POST['score'])) {
        if (is_numeric($_POST['score']) && $_POST['score'] <= 5 && $_POST['score'] >= 0) {
            $data['fields']['score'] = $_POST['score'];
        } else {
            $data['errors'][] = '<li>' . 'Оценка должна быть числом в пределах от 0 до 5!' . '</li>';
            $data['fields']['score'] = htmlspecialchars($_POST['score']);
        }
    } else {
        $data['errors'][] = '<li>' . 'Введите оценку!' . '</li>';
        $data['fields']['score'] = '';
    }


    if (!empty($_POST['comment']) && strlen(trim($_POST['comment']))) {
        if (strlen($_POST['comment']) > 200) {
            $data['errors'][] = '<li>' . 'Комментарий должен быть не более 200 символов!' . '</li>';
        } else {
            $data['fields']['comment'] = htmlspecialchars($_POST['comment']);
        }
    } else {
        $data['errors'][] = '<li>' . 'Введите комментарий!' . '</li>';
        $data['fields']['comment'] = '';
    }


    if (empty($data['errors'])) {
        $json = json_encode($data['fields']);
        $file = fopen('file.txt', 'w');
        fwrite($file, $json);
        fclose($file);
        $data['message'] = 'Спасибо за ваше сообщение!';
    }
} else {
    $data['fields']['name'] = '';
    $data['fields']['comment'] = '';
    $data['fields']['score'] = '';
    $data['fields']['email'] = '';
}



