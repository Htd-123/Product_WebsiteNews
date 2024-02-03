<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bài báo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Tự động xuống hàng cho nội dung và căn đều */
        .article-content p {
            word-wrap: break-word;
            text-align: justify;
            text-justify: inter-word;
            margin-top: 100px;
        }

        /* Canh giữa nội dung */
        .article-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            margin-top: -70px;
        }
    </style>
</head>

<body>
    <?php include 'menu_view.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 style="margin-top: 30px;"><?= $new_items['Title'] ?></h1>
                <div class="article-content">
                    <p><?= $new_items['Content'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>