<nav class="navbar navbar-vertical navbar-expand-lg">
    <script>
    var navbarStyle = window.config.config.phoenixNavbarStyle;
    if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
    }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Kelib tushgan arizalar
                    </p>
                    <hr class="navbar-vertical-line" />
                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{route('application.index')}}"
                            role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="file-text"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Arizalar</span></span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Sayt ma'lumotlari
                    </p>
                    <hr class="navbar-vertical-line" />

                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="{{ route('branches.index') }}" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="git-branch"></span></span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Filiallar</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="{{ route('lavozim_categories.index') }}" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="trello"></span></span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Lavozim kategoriya</span>
                                </span>
                            </div>
                        </a>
                    </div>

                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{route('positions.index')}}"
                            role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="trello"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Lavozimlar</span></span>
                            </div>
                        </a>
                    </div>
                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{route('teams.index')}}"
                            role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="users"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Bizning jamoa</span></span>
                            </div>
                        </a>
                    </div>
                    <!-- parent pages-->
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Vakansiyalar
                    </p>
                    <hr class="navbar-vertical-line" />
                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{route('categories.index')}}"
                            role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="file-text"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Vakansiya uchun kategoriya</span></span>
                            </div>
                        </a>
                    </div>
                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{route('jobs.index')}}"
                            role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="edit-3"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Vakansiyalar</span></span>
                            </div>
                        </a>
                    </div>

                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer">
        <button
            class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span
                class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span
                class="navbar-vertical-footer-text ms-2">Yigʻilgan koʻrinish</span></button>
    </div>
</nav>