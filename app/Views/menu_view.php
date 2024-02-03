<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="./home_view.php">Tin Tức Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <?php foreach ($categories as $category) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('tieu_de_bai_bao/' . $category->id) ?>"><?php echo $category->Name; ?></a>
                    </li>
                <?php endforeach; ?>

                <li class="nav-item">
                    <a class="nav-link" href="login_view.php">Quản trị admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>