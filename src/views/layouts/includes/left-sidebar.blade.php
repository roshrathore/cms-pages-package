@php
    $routeName = Route::currentRouteName();
@endphp
<aside class="sidebar">
    <div class="sidebar-inner-wrapper">
        <div class="sidebar-heading">
            <a class="navbar-brand" href="dashboard.html">
                <div class="brand-logo">
                    <img class="img-fluid" src="{{ asset('images/admin/brand-logo.svg') }}" alt="branding logo">
                </div>
            </a>
        </div>
        <div class="sidebar-menu">
            <ul class="sidebar-menu-list">
                <li class="menu-list-item">
                    <a href="{{ route('admin.dashboard') }}" class="menu-link {{ (strpos($routeName, 'admin.dashboard') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-home-alt'></i>
                        <span class="menu-title">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="menu-list-item has-child-submenu level1">
                    <a href="#" class="menu-link">
                        <i class='bx bxs-user'></i>
                        <span class="menu-title">{{ __('Users') }}</span>
                        <i class='bx bxs-chevron-right'></i>
                    </a>
                    <ul class="sidebar-menu-list sub-menu-list">
                        <li class="menu-list-item">
                            <a href="{{ route('admin.users.index') }}" class="menu-link {{ (strpos($routeName, 'admin.users') === 0) ? 'active-link' : '' }}">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">{{ __('Users') }}</span>
                            </a>
                        </li>
                        <li class="menu-list-item">
                            <a href="{{ route('admin.admins.index') }}" class="menu-link {{ (strpos($routeName, 'admin.admins') === 0) ? 'active-link' : '' }}">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">{{ __('Admin Users') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-list-item">
                    <a href="{{ route('admin.examples.index') }}" class="menu-link {{ (strpos($routeName, 'admin.examples') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-select-multiple'></i>
                        <span class="menu-title">{{ __('Various Examples') }}</span>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="{{ route('admin.roles.index') }}" class="menu-link {{ (strpos($routeName, 'admin.roles') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-group'></i>
                        <span class="menu-title">{{ __('Roles') }}</span>
                    </a>
                </li>

                @permission('read-categories')
                <li class="menu-list-item">
                    <a href="{{ route('admin.categories.index') }}" class="menu-link {{ (strpos($routeName, 'admin.categories') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-notepad'></i>
                        <span class="menu-title">{{ __('Categories') }}</span>
                    </a>
                </li>
                @endpermission

                <li class="menu-list-item">
                    <a href="{{ route('admin.newcategories.index') }}" class="menu-link {{ (strpos($routeName, 'admin.newcategories') === 0) ? 'active-link' : '' }}">
                        <i class='bx bxs-collection'></i>
                        <span class="menu-title">{{ __('New Categories') }}</span>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="{{ route('admin.countries.index') }}" class="menu-link {{ (strpos($routeName, 'admin.countries') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-note'></i>
                        <span class="menu-title">{{ __('Countries') }}</span>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="{{ route('admin.email-templates.index') }}" class="menu-link {{ (strpos($routeName, 'admin.email-templates') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-mail-send'></i>
                        <span class="menu-title">{{ __('Email Templates') }}</span>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="{{ route('admin.newsletters.index') }}" class="menu-link {{ (strpos($routeName, 'admin.newsletters') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-news'></i>
                        <span class="menu-title">{{ __('Newsletter') }}</span>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="{{ route('admin.cms-pages.index') }}" class="menu-link {{ (strpos($routeName, 'admin.cms-pages') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-book-content'></i>
                        <span class="menu-title">{{ __('Cms Pages') }}</span>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="{{ route('admin.dynamiccms.index') }}" class="menu-link {{ (strpos($routeName, 'admin.dynamiccms') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-notepad'></i>
                        <span class="menu-title">{{ __('Dynamic Cms Pages') }}</span>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="{{ route('admin.getsetting') }}" class="menu-link {{ (strpos($routeName, 'admin.getsetting') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-cog'></i>
                        <span class="menu-title">{{ __('Global Settings') }}</span>
                    </a>
                </li>
                <!-- <li class="menu-list-item">
                    <a href="{{ route('admin.push_notification.create') }}" class="menu-link {{ (strpos($routeName, 'admin.push_notification') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-notification'></i>
                        <span class="menu-title">{{ __('Test Push Notification') }}</span>
                    </a>
                </li> -->
                <li class="menu-list-item">
                    <a href="{{ route('admin.qrcodes.index') }}" class="menu-link {{ (strpos($routeName, 'admin.qrcodes') === 0) ? 'active-link' : '' }}">
                        <i class='bx bx-barcode-reader'></i>
                        <span class="menu-title">{{ __('QR Codes') }}</span>
                    </a>
                </li>

                {{-- <li class="menu-list-item has-child-submenu level1">
                    <a href="#" class="menu-link">
                        <i class='bx bx-link-alt'></i>
                        <span class="menu-title">Content</span>
                        <i class='bx bxs-chevron-right'></i>
                    </a>
                    <ul class="sidebar-menu-list sub-menu-list">
                        <li class="menu-list-item">
                            <a href="content-static.html" class="menu-link">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">Static Pages</span>
                            </a>
                        </li>
                        <li class="menu-list-item">
                            <a href="content-blog.html" class="menu-link">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">Blogs</span>
                            </a>
                        </li>
                        <li class="menu-list-item">
                            <a href="faq.html" class="menu-link">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">FAQs</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="menu-list-item">
                    <a href="email-notification1.html" class="menu-link">
                        <i class='bx bx-notification'></i>
                        <span class="menu-title">Email &amp; Notification</span>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="master.html" class="menu-link">
                        <i class='bx bx-note'></i>
                        <span class="menu-title">Master</span>
                    </a>
                </li>
                <li class="settign-menu menu-list-item has-child-submenu level1">
                    <a href="#" class="menu-link">
                        <i class='bx bx-cog'></i>
                        <span class="menu-title">Settings</span>
                        <i class="bx bxs-chevron-right"></i>
                    </a>
                    <ul class="sidebar-menu-list sub-menu-list">
                        <li class="menu-list-item">
                            <a href="general-setting1.html" class="menu-link">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">General Settings</span>
                            </a>
                        </li>
                        <li class="menu-list-item child-menu level2">
                            <a href="social-media.html" class="menu-link">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">Social Media</span>
                                <i class="bx bxs-chevron-right"></i>
                            </a>
                            <ul class="sidebar-menu-list sub-menu-list">
                                <li class="menu-list-item level3">
                                    <a href="social-media.html" class="menu-link">
                                        <i class='bx bxs-right-arrow-alt'></i>
                                        <span class="menu-title">Social Media SDK Details</span>
                                    </a>
                                </li>
                                <li class="menu-list-item level3">
                                    <a href="#" class="menu-link">
                                        <i class='bx bxs-right-arrow-alt'></i>
                                        <span class="menu-title">Social Media Links</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-list-item">
                            <a href="payment-gateway.html" class="menu-link">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">Payment Gateway SDK Details</span>
                            </a>
                        </li>
                        <li class="menu-list-item">
                            <a href="smtp-details.html" class="menu-link">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">SMTP / SMS Details</span>
                            </a>
                        </li>
                        <li class="menu-list-item">
                            <a href="email-notifications.html" class="menu-link">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">Email Notification Settings</span>
                            </a>
                        </li>
                        <li class="menu-list-item">
                            <a href="push-notification1.html" class="menu-link">
                                <i class='bx bxs-right-arrow-alt'></i>
                                <span class="menu-title">Push Notifications Settings</span>
                            </a>
                        </li>
                    </ul>
                </li>--}}
            </ul>
        </div>
    </div>
</aside>
