<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Devmaster</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/home">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="/about-us">Tin tức</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Giới thiệu</a></li>
                <li class="nav-item"><a class="nav-link" href="/product">Sản phẩm</a></li>
                <li class="nav-item"><a class="nav-link" href="/promotion">Khuyến mãi</a></li>
            </ul>
            <!-- Thanh tìm kiếm -->
            <form class="d-flex" action="{{ route('search') }}" method="GET">
                <input class="form-control me-2" type="text" name="query" placeholder="Search..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
