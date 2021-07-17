<nav class="sidebar">
    <div class="sidebar-header">
        @php
            $setting = App\Models\Settings::first();
        @endphp
        {{-- <img src="{{ ADMIN_SMALL_LOGO_IMAGE_PATH . '/' . $setting->id . '/' . $setting->admin_small_logo }}" alt=""> --}}
         <img class="text-center" src="http://systeqindia.therealcodes.in/public/files/site_logo/1/jOkQZeYUVv.png" width="80px" alt="">
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="fas fa-photo-video menu-icon"></i>
                    <span class="link-title">Banner</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('sliders.index') }}" class="nav-link">View Sliders</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sliders.create') }}" class="nav-link">Create Slider</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#contact" aria-expanded="false"
                    aria-controls="contact">
                    <i class="fas fa-map-marked menu-icon"></i>
                    <span class="link-title">Labour Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="contact" style="">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link " href="{{ route('category.index') }}">Service
                                Category</a></li>
                        <li class="nav-item"> <a class="nav-link "
                                href="{{ route('labour-management.create') }}">Labour Registration</a></li>
                        <li class="nav-item"> <a class="nav-link "
                                href="{{ route('labour-management.index') }}">Labour Details</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @if (Route::is('services.index')) active @endif">
                <a class="nav-link" href="{{ route('services.index') }}">
                    <i class="fas fa-people-carry menu-icon"></i>
                    <span class="link-title">Services</span>
                </a>
            </li>

            <li class="nav-item @if (Route::is('slider-services.index')) active @endif">
                <a class="nav-link" href="{{ route('slider-services.index') }}">
                    <i class="fas fa-people-carry menu-icon"></i>
                    <span class="link-title">Slider Services</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('about.create') }}">
                    <i class="fas fa-address-card menu-icon"></i>
                    <span class="link-title">About</span>
                </a>
            </li>

            <li class="nav-item @if (Route::is('teams.index')) active @endif">
                <a class="nav-link" href="{{ route('teams.index') }}">
                    <i class="fas fa-users menu-icon"></i>
                    <span class="link-title">Teams</span>
                </a>
            </li>

            <li class="nav-item @if (Route::is('founder-message.create')) active @endif">
                <a class="nav-link" href="{{ route('founder-message.create') }}">
                    <i class="fas fa-comment-alt menu-icon"></i>
                    <span class="link-title">Founder Message</span>
                </a>
            </li>

            <li class="nav-item @if (Route::is('working-areas.index')) active @endif">
                <a class="nav-link" href="{{ route('working-areas.index') }}">
                    <i class="fas fa-users menu-icon"></i>
                    <span class="link-title">Working Areas</span>
                </a>
            </li>



            <li class="nav-item ">
                <a class="nav-link" href="{{ route('blog.index') }}">
                    <i class="fab fa-blogger-b menu-icon"></i>
                    <span class="link-title">Blogs</span>
                    <i class="ti-angle-right"></i>
                </a>
            </li>

            <li class="nav-item @if (Route::is('missions.index')) active @endif">
                <a class="nav-link" href="{{ route('missions.index') }}">
                    <i class="fas fa-users menu-icon"></i>
                    <span class="link-title">Mission</span>
                </a>
            </li>


            <li class="nav-item @if (Route::is('testimonial.*')) active @endif">
                <a class="nav-link" href="{{ route('testimonial.index') }}">
                    <i class="fas fa-comment-alt menu-icon"></i>
                    <span class="link-title">Testimonials</span>
                </a>
            </li>

            <li class="nav-item @if (Route::is('teams.index')) active @endif">
                <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false"
                    aria-controls="settings">
                    <i class="fas fa-fw fa-cog menu-icon"></i>
                    <span class="link-title">Settings</span>
                    <i class="ti-angle-right"></i>
                </a>
                <div class="collapse show" id="settings">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('site-info.edit', ['site_info' => 1]) }}">Site Info</a></li>

                        <li class="nav-item"> <a class="nav-link "
                                href="{{ route('seo.edit', ['seo' => 1]) }}">Seo</a></li>

                        <li class="nav-item"> <a class="nav-link " href="{{ route('site-image.create') }}">Site
                                Images</a></li>
                    </ul>
                </div>
            </li>


        </ul>
    </div>
</nav>
