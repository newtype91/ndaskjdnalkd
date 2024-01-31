
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <nav class="mt-2">
                <div style="margin-bottom: 60px">
                </div>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('admin.main.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Главная
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.news.index') }}" class="nav-link">
                            <i class="nav-icon far fa-newspaper"></i>
                            <p>
                                Новости
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.events.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-check"></i>
                            <p>
                                События
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.pages.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>
                                Страницы
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.teams.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users""></i>
                            <p>
                                Структура
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.docs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Документы
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.banners.index') }}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Баннеры
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
