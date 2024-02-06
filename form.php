<?php

require_once __DIR__ . '/public/header.php';
require_once __DIR__ . '/src/feedbackForm.php';

global $data;

if (!empty($data['errors'])) {
    echo '<ul>';
    foreach ($data['errors'] as $error) {
        echo $error;
    }
    echo '</ul>';
} else {
    if (!empty($data['message'])) {
        echo '<h3>' . $data['message'] . '</h3>';
    }
}
?>
    <div class="container">
        <form method="post" class="form">
            <div>
                <label for="name">Имя</label>
                <input value="<?= $data['fields']['name'] ?>"
                       name="name" id="name" placeholder="Имя">
            </div>

            <div>
                <label for="email">Электронная почта</label>
                <input type="email"
                       value="<?= $data['fields']['email'] ?>"
                       name="email" id="email" placeholder="Email">
            </div>

            <div>
                <label for="score">Оценка</label>
                <input value="<?= $data['fields']['score'] ?>"
                       name="score" id="score" placeholder="Оценка">
            </div>

            <div>
                <label for="comment">Комментарий</label>
                <textarea name="comment" id="comment"
                          placeholder="Комментарий"><?= $data['fields']['comment'] ?></textarea>
            </div>

            <button type="submit">Отправить</button>
        </form>
    </div>
<?php

require_once __DIR__ . '/public/footer.php';
