<header class="d-flex justify-content-between align-items-center bg-secondary text-light p-4 shadow-sm">
    <!-- Logo hoặc Tiêu đề trang -->
    <div class="d-flex align-items-center">
        <a href="/nhd-admins" class="text-light text-decoration-none d-flex align-items-center">
            <img src="/img/sg-11134201-22120-pm45gidqo0kvd6.png" alt="Logo" class="me-2" style="height: auto ;width: 150px;"> <!-- Logo nhỏ -->
            <h3 class="mb-0">DASHBOARD</h3> <!-- Tiêu đề -->
        </a>
    </div>

    <!-- Menu người dùng và các chức năng khác -->
    <div class="d-flex align-items-center">
        <!-- Menu Thông báo -->
        <div class="position-relative me-3">
            <button class="btn btn-light rounded-circle" aria-label="Notifications">
                <i class="fas fa-bell"></i>
            </button>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                3 <!-- Số thông báo -->
            </span>
        </div>

        <!-- Menu Người dùng -->
        <div class="dropdown me-3">
            <button class="btn btn-light rounded-pill d-flex align-items-center dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/img/user-avatar.png" alt="User Avatar" class="rounded-circle me-2" style="height: 30px;">
                {{ Auth::user()->name ?? 'Guest' }}
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                <li><a class="dropdown-item" href="/profile">Hồ sơ</a></li>
                <li><a class="dropdown-item" href="/settings">Cài đặt</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout">Đăng xuất</a></li>
            </ul>
        </div>

        <!-- Menu Cài đặt -->
        <button class="btn btn-light rounded-circle" aria-label="Settings">
            <i class="fas fa-cogs"></i>
        </button>
    </div>
</header>
