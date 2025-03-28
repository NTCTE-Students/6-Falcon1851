<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файла</title>
</head>
<body>
    <h1>Загрузка файла</h1>
    <!-- При отправке файлов через формы, обязательно нужно использовать метод POST и поставить атрибут "enctype" со значением "multipart/form-data" -->
    <form action="work_11-upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Выберите файл:</label>
        <input type="file" id="file" name="file" required>
        <br><br>
        <input type="submit" value="Загрузить">
    </form>
</body>
</html>
