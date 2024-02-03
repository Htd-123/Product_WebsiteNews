<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Định dạng mỗi mục bài báo */
        .article-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            margin-top: 30px;
        }

        /* Định dạng hình ảnh */
        .article-image {
            max-width: 250px;

            /* Giới hạn chiều cao tối đa của hình ảnh */
            height: auto;
            margin-right: 10px;
        }

        /* Định dạng tiêu đề */
        .article-title {
            font-weight: bold;
            max-width: 300px;
            word-wrap: break-word;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php include 'menu_view.php'; ?>

    <ul>
        <?php foreach ($tieu_de_bai_bao as $tieuDeBaiBao) : ?>
            <li class="article-item">
                <img src="<?= $tieuDeBaiBao['HeaderImageURL'] ?>" alt="Hình ảnh" class="article-image">
                <a style="text-decoration: none; color: black;" href="<?= base_url("content/{$tieuDeBaiBao['id']}") ?>" class="article-title">
                    <?= $tieuDeBaiBao['Title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>