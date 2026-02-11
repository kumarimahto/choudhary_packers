<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';
$route["photo-gallery"]="gallery/photo_gallery";
$route["video-gallery"]="gallery/video_gallery";
$route["(:any).htm"]="home/error";
$route["infrastructure"]="about/infrastructure";
$route["why-choose-us"]="about/choose";

$route['about-us'] = 'about';
$route['packing-and-moving'] = 'services/detail/packing-and-moving';
$route['transportation'] = 'services/detail/transportation';
$route['local-shifting'] = 'services/detail/local-shifting';
$route['home-relocation'] = 'services/detail/home-relocation';
$route['commercial-shifting'] = 'services/detail/commercial-shifting';
$route['car-carrier'] = 'services/detail/car-carrier';
$route['loading-and-unloading'] = 'services/detail/loading-and-unloading';
$route['warehouse-services'] = 'services/detail/warehouse-services';
$route['insurance-services'] = 'services/detail/insurance-services';

$route["our-branches"]="packers_movers/state";
$route["packers-movers-(:any)-india"]="packers_movers/state_services/$1";
$route["(:any)-packers-movers-(:any)"]="packers_movers/city/$2/$1";
$route["packers-movers-(:any)"]="packers_movers/state_services/$1";

$route['contact'] = 'contacts';
$route['privacy-policy'] = 'template/privacy';
$route['refund-cancellation-policy'] = 'template/refund_cancellation';
$route['terms-and-conditions'] = 'template/terms_condition';
$route['translate_uri_dashes'] = TRUE;

$route['services'] = 'services';
$route['gallery'] = 'gallery';

$route['payment-details'] = 'activities/payment_details';
$route['moving-tips'] = 'activities/moving_tips';
$route['detect-fraud'] = 'activities/detect_fraud';
$route['shipment-gallery'] = 'activities/shipment_gallery';
$route['video-gallery'] = 'activities/video_gallery';
$route['reviews'] = 'activities/reviews';
$route['partner'] = 'activities/partner';
$route['submit']='activities/submit';
