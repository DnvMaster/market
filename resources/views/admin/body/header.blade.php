<div class="topbar-custom">
    <div class="container-xxl">
        <div class="d-flex justify-content-between">
            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                <li>
                    <button class="button-toggle-menu nav-link ps-0">
                        <i data-feather="menu" class="noti-icon"></i>
                    </button>
                </li>
                <li class="d-none d-lg-block">
                    <div class="position-relative topbar-search">
                        <input type="text" class="form-control bg-light bg-opacity-75 border-light ps-4" placeholder="{{ __('Поиск...') }}">
                        <i class="mdi mdi-magnify fs-16 position-absolute text-muted top-50 translate-middle-y ms-2"></i>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                <li class="d-none d-sm-flex">
                    <button type="button" class="btn nav-link" data-toggle="fullscreen">
                        <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                    </button>
                </li>
                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i data-feather="bell" class="noti-icon"></i>
                        <span class="badge bg-danger rounded-circle noti-icon-badge">{{ __('9') }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-lg">
        
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                <span class="float-end">
                                    <a href="" class="text-dark"><small> {{ __('Удалить все') }}</small></a>
                                </span>
                                {{ __('Уведомление') }}
                            </h5>
                        </div>
        
                        <div class="noti-scroll" data-simplebar>
        
                            <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary active">
                                <div class="notify-icon">
                                    <img src="{{ asset('backend/images/users/user-12.jpg') }}" class="img-fluid rounded-circle" alt=" {{ __('User image') }}">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="notify-details"> {{ __('Иван Федорович') }}</p>
                                    <small class="text-muted"> {{ __('5 минут назад') }}</small>
                                </div>
                                <p class="mb-0 user-msg">
                                    <small class="fs-14"> {{ __('Завершено') }} <span class="text-reset"> {{ __('Создаём только лучшее') }}</span></small>
                                </p>
                            </a>
        
                            <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                <div class="notify-icon">
                                    <img src="{{ asset('backend/images/users/user-2.jpg') }}" class="img-fluid rounded-circle" alt=" {{ __('user image') }}">
                                </div>
                                <div class="notify-content">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="notify-details"> {{ __('Виктория Овсиенко') }}</p>
                                        <small class="text-muted"> {{ __('1 минуту назад') }}</small>
                                    </div>
                                    <div class="d-flex mt-2 align-items-center">
                                        <div class="notify-sub-icon">
                                            <i class="mdi mdi-download-box text-dark"></i>
                                        </div>
                                        <div>
                                            <p class="notify-details mb-0"> {{ __('Тёмный режим') }}</p>
                                            <small class="text-muted"> {{ __('Размер 2.4 Мб') }}</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
        
                        </div>
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all"> {{ __('Просмотреть все') }}<i class="fe-arrow-right"></i></a> 
                    </div>
                </li>
                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('backend/images/users/user-11.jpg') }}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ms-1">
                             {{ __('Николай') }} <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0"> {{ __('Здравствуйте') }}</h6>
                        </div>
                        <a href="pages-profile.html" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                            <span> {{ __('Аккаунт') }}</span>
                        </a>
                        <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline fs-16 align-middle"></i>
                            <span> {{ __('Блокировка') }}</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                            <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                            <span> {{ __('Выход') }}</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>