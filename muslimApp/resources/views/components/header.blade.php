<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#"
                    data-toggle="sidebar"
                    class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#"
                    data-toggle="search"
                    class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control "
                type="search"
                placeholder="Search Disini Akhi"
                aria-label="Search"
                data-width="350"
               >

               <button class="btn"
               type="submit"><i  class=" fas fa-search pt-1 pb-1" style="font-size: 16px;"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
                <div class="search-header">
                    Histories
                </div>
                <div class="search-item">
                    <a href="#">Sedang Dalam Tahap Pengembangan</a>
                    <a href="#"
                        class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-header">
                    Result
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded"
                            width="30"
                            src="{{ asset('img/products/product-3-50.png') }}"
                            alt="product">
                            Sedang Dalam Tahap Pengembangan
                    </a>
                </div>

            </div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#"
                data-toggle="dropdown"
                class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">

                    <a href="https://www.instagram.com/el.g.11"
                        class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image"
                                src="{{ asset('img/avatar/avatar-1.png') }}"
                                class="rounded-circle">
                            <div class="is-online"></div>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>M.U. EL Ghifari</b>
                            <p>Assalamu'alaikum akhi Jazakumullah sudah mampir semoga semua ini bisa bermanfaat untuk kita semua, BTW ini masih dalam tahap pertembangan ya</p>
                            <div class="time">jully 2024</div>
                        </div>
                    </a>

                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle"><a href="#"
                data-toggle="dropdown"
                class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">

                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-icon bg-info text-white">
                            <i class="fas fa-bell pt-2"></i>
                        </div>
                        <div class="dropdown-item-desc">
                           Bismillah semoga bermanfaat!
                            <div class="time">jully 2024</div>
                        </div>
                    </a>

                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown"><a href="#"
                data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image"
                    src="{{ asset('img/avatar/avatar-1.png') }}"
                    class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Ahlul Jannah</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 0 min ago</div>
                <a href="features-profile.html"
                    class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html"
                    class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html"
                    class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="#"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
