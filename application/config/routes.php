<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['reset'] = 'web/Traveller/reset';
$route['phone_verification'] = 'web/Traveller/phone_verification';
$route['status'] = 'web/Traveller/status';
$route['logout'] = 'web/Traveller_login/logout';
$route['forgot'] = 'web/Traveller/forgot_process';
$route['signup'] ='web/traveller/traveller_signup';
$route['update-profile'] ='web/Traveller/update';
$route['web/profile_update'] ='web/traveller/profile_update';
$route['web/web_reset_password'] ='web/traveller/web_reset_password';
$route['Check_email_phone'] = 'web/Traveller/Check_email_phone';
$route['booking'] ='web/Booking';
$route['host'] ='web/Host';
$route['host-place'] ='web/Host/hostplace';
$route['property'] ='web/Property';
$route['booking-detail'] ='web/property/bookingDetail';
$route['check_email'] ='web/Traveller/checkEmailExist1';
$route['favourites'] ='web/property/favouriteProperty';
$route['insurance'] ='web/property/insurance';
$route['google/google_login'] = 'web/google/google_login';
$route['fb/fb_login'] = 'web/fb/fb_login';
$route['user-chat'] = 'web/chat/userchat';
$route['host'] = 'web/Host';
$route['stagging-list'] ='welcome/stagging_list';
$route['googleAjax'] ='welcome/googleAjax';
$route['fbAjax'] ='welcome/fbAjax';
$route['stagging-list/(:any)']='welcome/stagging_list';
$route['getproperty-detail'] ='welcome/getproperty_detail';
$route['payment/payment_detail'] ='web/payment/payment_detail';
$route['payment'] ='web/payment/payment';
$route['payment_process'] ='web/payment/payment_process';
$route['login'] ='web/Traveller_login/login_process';
$route['reservation'] ='web/Booking/reservation';
$route['msgowner'] ='web/Booking/msgowner';
$route['edit-host'] ='web/Host/edithost';
$route['view-property'] ='web/property/propert_view';
$route['incomplete-property'] ='web/host/incompleteHost';
$route['host/earning'] ='web/Host/earning';
$route['host/year_graph'] ='web/Host/year_graph';
$route['payments'] ='web/booking/payments';
$route['callA'] ='welcome/callA';
$route['callB'] ='welcome/callB';
$route['callC'] ='welcome/callC';
$route['property_comment'] ='welcome/property_comment';
$route['newsletter'] ='welcome/newsletter';
$route['cancelBooking'] ='web/Booking/cancelBooking';
$route['user-msg'] ='welcome/user_msg';
//==================footer route===========//

$route['terms-condition'] ='web/footerlinks/termscondition';
$route['about-us'] ='web/footerlinks/aboutus';
$route['careers'] ='web/footerlinks/careers';
$route['faq'] ='web/footerlinks/faq';
$route['policies'] ='web/footerlinks/policies';
$route['help'] ='web/footerlinks/help';

$route['history'] ='web/footerlinks/history';
$route['business-travel'] ='web/footerlinks/businesstravel';
$route['why-host'] ='web/footerlinks/whyhost';
$route['responsible-hosting'] ='web/footerlinks/responsiblehosting';

$route['cancel-refund-policy'] ='web/footerlinks/cancelRefund';
$route['covid-19-guidelines'] ='web/footerlinks/covid19_guidelines';
$route['referral'] ='web/footerlinks/referral';

//==============admin route================//
$route['admin/login'] = 'admin/Login/login';
$route['admin/logout'] ='admin/Login/logout';
$route['admin/forgot'] ='admin/Login/forgot';
$route['admin/reset'] ='admin/Admin_forgot/reset';
$route['admin/status'] ='admin/Admin_forgot/status';
$route['admin/user-list'] ='admin/Admin/user_list';
$route['admin/user-detail'] ='admin/Admin/user_detail';
$route['admin/user-detail/(:any)'] ='admin/Admin/user_detail';
$route['admin/dashboard'] = 'admin/Admin/dashboard';
$route['admin/popular-destination'] = 'admin/Admin/popular_destination';
$route['admin/popular-destination-list'] = 'admin/Admin/popular_destination_list';
$route['admin/discover'] = 'admin/Admin/discover';
$route['admin/discover-list'] = 'admin/Admin/discover_list';
$route['admin/stay-home'] = 'admin/Admin/stay_home';
$route['admin/stay-home-list'] = 'admin/Admin/stay_home_list';
$route['admin/most-popular'] = 'admin/Admin/most_popular';
$route['admin/most-popular-list'] = 'admin/Admin/most_popular_list';
$route['admin/change_password'] = 'admin/Admin/change_password';
$route['admin/change_password_process'] ='admin/Admin/change_password_process';
$route['admin/edit-image'] = 'admin/Admin/edit_image';
$route['admin/property-list'] = 'admin/Admin/property_list';
$route['admin/property-request-list'] = 'admin/Admin/property_request_list';
$route['admin/view-property'] = 'admin/Admin/view_property';
$route['admin/send-push'] = 'admin/Admin/send_push';
$route['admin/get_users'] = 'admin/Admin/get_users';
$route['admin/get_newsletter'] = 'admin/Admin/get_newsletter';
$route['admin/newsletter-list'] = 'admin/Admin/newsletter_list';
$route['admin/newsletter'] = 'admin/admin/newsletter';
$route['admin/terms-condition'] = 'admin/admin/terms_condition';
$route['admin/update-terms'] = 'admin/admin/update_terms';
$route['admin/privacy-policy'] = 'admin/admin/privacy_policy';
$route['admin/update-privacy'] = 'admin/admin/update_privacy';


$route['admin/help'] = 'admin/admin/helpNsupport';
$route['admin/update-help'] = 'admin/admin/update_helpSupport';

$route['admin/cancel-refund'] = 'admin/admin/cancelRefund';
$route['admin/update-cancel-refund'] = 'admin/admin/update_cancelRefund';

$route['admin/covid19-guidelines'] = 'admin/admin/covid19_guidelines';
$route['admin/update-covid19-guidelines'] = 'admin/admin/update_covid19_guidelines';

$route['admin/referral-program'] = 'admin/admin/referral';
$route['admin/update-referral-program'] = 'admin/admin/update_referral';

$route['admin/career'] = 'admin/admin/career';
$route['admin/update_career'] = 'admin/admin/update_career';

$route['admin/about-us'] = 'admin/admin/about_us';
$route['admin/update_about_us'] = 'admin/admin/update_about_us';

$route['admin/business_travel'] = 'admin/admin/business_travel';
$route['admin/update_business_travel'] = 'admin/admin/update_business_travel';

$route['admin/why-host'] = 'admin/admin/why_host';
$route['admin/update_why_host'] = 'admin/admin/update_why_host';


$route['admin/edit-most-popular'] = 'admin/admin/edit_most_popular';
$route['admin/booking-transactions'] = 'admin/Admin/transactions_list';
$route['admin/transactionslist'] = 'admin/Admin/transactionslist';

$route['admin/host-payments'] = 'admin/Admin/hostpay_list';
$route['admin/hostpaylist'] = 'admin/Admin/hostpaylist';
$route['admin/cancelled-list'] = 'admin/Admin/cancelled_list';
$route['admin/CancelBooking'] = 'admin/Admin/CancelBooking';
$route['admin/send-newsmail'] = 'admin/Admin/send_newsmail';







