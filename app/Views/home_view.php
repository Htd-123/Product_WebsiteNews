<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Ví dụ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Định dạng danh sách các mục bài báo */
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

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
            height: auto;
            margin-right: 10px;
        }

        /* Định dạng tiêu đề */
        .article-title {
            font-weight: bold;
            max-width: 300px;
            word-wrap: break-word;
        }

        /* Định dạng phần bên phải */
        .right-sidebar {
            background-color: #f0f0f0;
            padding: 20px;
        }

        /* Định dạng phần thông tin hữu ích */
        .useful-info {
            margin-bottom: 20px;
        }

        /* Định dạng quảng cáo */
        .advertisement img {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <?php include 'menu_view.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Phần nội dung bên trái -->
            <div class="col-md-8 order-md-1">
                <ul>
                    <?php foreach ($articleTitles as $article) : ?>
                        <li class="article-item">
                            <img src="<?php echo $article->HeaderImageURL; ?>" alt="Hình ảnh" class="article-image">
                            <a href="<?= base_url('content/' . $article->id); ?>" style="text-decoration: none; color: black;">
                                <div class="article-title"><?= $article->Title; ?></div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Phần bên phải (Thông tin hữu ích hoặc quảng cáo) -->
            <div class="col-md-4 order-md-2 right-sidebar">
                <!-- Thông tin hữu ích -->
                <div class="useful-info">
                    <h3>Thông tin hữu ích</h3>
                    <ul>
                        <li><a href="#">Hướng dẫn sử dụng</a></li>
                        <li><a href="#">Liên hệ chúng tôi</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                    </ul>
                </div>

                <!-- Quảng cáo -->
                <div class="advertisement">
                    <h3>Quảng cáo</h3>
                    <img src="https://vending-cdn.kootoro.com/torov-cms/upload/image/1676025738872-quang-cao-san-pham-la-gi.jpg" alt="Quảng cáo">
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>