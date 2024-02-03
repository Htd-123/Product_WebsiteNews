<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa bài báo</title>

    <style>
        /* CSS cho form và trang */
        h1 {
            font-size: 24px;
            text-align: center;
            /* Để căn giữa văn bản */
        }

        form {
            width: 60%;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Sửa bài báo</h1>
    <form method="post" action="<?= site_url('update') ?>">
        <input type="hidden" name="id" value="<?= $article['id'] ?>">
        <label for="Title">Tiêu đề:</label>
        <input type="text" name="Title" value="<?= $article['Title'] ?>"><br>
        <label for="Title">Đường dẫn hình ảnh:</label>
        <input type="text" name="HeaderImageURL" value="<?= $article['HeaderImageURL'] ?>"><br>
        <label for="Content">Nội dung:</label>
        <textarea name="Content"><?= $article['Content'] ?></textarea><br>
        <label for="Title">Danh mục bài báo:</label>
        <input type="text" name="categories_id" value="<?= $article['categories_id'] ?>"><br>
        <input type="submit" value="Lưu">
    </form>
</body>

</html>