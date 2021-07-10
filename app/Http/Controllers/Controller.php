<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

define('SLIDER_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'sliders');
define('SLIDER_IMAGE_URL', url('/public/files/sliders'));

define('SERVICE_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'services');
define('SERVICE_IMAGE_URL', url('/public/files/services'));

define('TEAM_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'teams');
define('TEAM_IMAGE_URL', url('/public/files/teams'));

define('WORKING_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'working_areas');
define('WORKING_IMAGE_URL', url('/public/files/working_areas'));

define('FAVICON_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'favicon');
define('FAVICON_IMAGE_URL', url('/public/files/favicon'));

define('ADMIN_LOGO_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'admin_logo');
define('ADMIN_LOGO_IMAGE_URL', url('/public/files/admin_logo'));

define('ADMIN_SMALL_LOGO_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'admin_small_logo');
define('ADMIN_SMALL_LOGO_IMAGE_URL', url('/public/files/admin_small_logo'));

define('SITE_LOGO_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'site_logo');
define('SITE_LOGO_IMAGE_URL', url('/public/files/site_logo'));

define('ABOUT_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'about');
define('ABOUT_IMAGE_URL', url('/public/files/about'));

define('TESTIMONIAL_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'testimonials');
define('TESTIMONIAL_IMAGE_URL', url('/public/files/testimonials'));

define('FOUNDER_MESSAGE_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'founder_message');
define('FOUNDER_MESSAGE_IMAGE_URL', url('/public/files/founder_message'));

define('BLOG_IMAGE_PATH', public_path() . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'blogs');
define('BLOG_IMAGE_URL', url( '/public/files/blogs'));

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
