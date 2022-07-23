<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>content</th>
            <th>question_id</th>
            <th>is_correct</th>
            <th colspan="2">thao tac</th>
        </tr>
        <tbody>
            <?php foreach($answer as $cmm): ?>
                <tr>
                    <th><?= $cmm->id ?></th>
                    <th><?= $cmm->content ?></th>
                    <th><?= $cmm->question_id ?></th>
                    <th><?= $cmm->is_correct ?></th>
                    <th>
                    <a href="<?= BASE_URL . 'answer/cap-nhat?id=' . $cmm->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'answer/xoa?id=' . $cmm->id ?>">Xóa</a>
                </th>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>