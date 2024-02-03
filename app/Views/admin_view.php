<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/path/to/your-custom.css">

    <style>
        body {
            background-color: #333;
            /* Màu nền tối */
            color: #fff;
            /* Màu chữ trắng */
        }

        .container {
            background-color: #222;
            /* Màu nền container */
            border-radius: 10px;
            /* Bo tròn viền container */
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1 class="mt-4 mb-4">Trang Quản Trị</h1>
        <div class="row">
            <!-- Form thêm bài báo -->
            <div class="col-md-4">
                <h2>Thêm bài báo</h2>
                <form method="post" action="<?= base_url('add-savearticle') ?>">
                    <div class="mb-3">
                        <label for="Title" class="form-label">ID:</label>
                        <input type="text" class="form-control" name="id">
                    </div>

                    <div class="mb-3">
                        <label for="Title" class="form-label">Tiêu đề:</label>
                        <input type="text" class="form-control" name="Title">
                    </div>

                    <div class="mb-3">
                        <label for="Title" class="form-label">URL Hình ảnh:</label>
                        <input type="text" class="form-control" name="HeaderImageURL">
                    </div>

                    <div class="mb-3">
                        <label for="Title" class="form-label">Content:</label>
                        <input type="text" class="form-control" name="Content">
                    </div>

                    <div class="mb-3">
                        <label for="Title" class="form-label">Categories_ID</label>
                        <input type="text" class="form-control" name="categories_id">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm bài báo</button>
                </form>
            </div>

            <!-- Form sửa bài báo -->
            <div class="col-md-4">
                <h2>Sửa bài báo</h2>
                <form method="post" action="<?= base_url('editArticle') ?>">
                    <div class="mb-3">
                        <label for="article_id" class="form-label">Nhập ID bài báo cần sửa:</label>
                        <input type="text" class="form-control" name="id">
                    </div>
                    <button type="submit" class="btn btn-success">Sửa bài báo</button>
                </form>
            </div>

            <!-- Form xóa bài báo -->
            <div class="col-md-4">
                <h2>Xóa bài báo</h2>
                <form method="post" action="<?= base_url('delete-savearticle') ?>">
                    <div class="mb-3">
                        <label for="article_id" class="form-label">ID bài báo cần xóa:</label>
                        <input type="text" class="form-control" name="id">
                    </div>
                    <button type="submit" class="btn btn-danger">Xóa bài báo</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Thêm các liên kết đến các tệp JS của Bootstrap tại đây nếu cần -->

</body>

</html>