<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembershipPlanController;
use App\Http\Controllers\MembershipCustomerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PincodeController;
use App\Http\Controllers\ShipmentsController;
use App\Http\Controllers\CouponCodeController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/MembershipPlanList', [MembershipPlanController::class, 'index'])->name('MembershipPlanList');
Route::get('/MembershipPlan', [MembershipPlanController::class, 'create'])->name('MembershipPlan');
Route::get('/MembershipPlanEdit', [MembershipPlanController::class, 'updateData'])->name('MembershipPlanEdit');
Route::get('/MembershipPlanDelete', [MembershipPlanController::class, 'destroy'])->name('MembershipPlanDelete');
Route::post('/MembershipPlanCreate', [MembershipPlanController::class, 'store'])->name('MembershipPlanCreate');
Route::get('/MembershipCustomer', [MembershipCustomerController::class, 'index'])->name('MembershipCustomer');
Route::post('/MembershipCustomerCreate', [MembershipCustomerController::class, 'store'])->name('MembershipCustomerCreate');
Route::get('/MembershipCustomerList', [MembershipCustomerController::class, 'list'])->name('MembershipCustomerList');
Route::get('/MembershipCustomerEdit', [MembershipCustomerController::class, 'updateData'])->name('MembershipCustomerEdit');
Route::get('/MembershipCustomerDelete', [MembershipCustomerController::class, 'destroy'])->name('MembershipCustomerDelete');

Route::get('/customerCreate', [CustomerController::class, 'index'])->name('customerCreate');
Route::post('/CustomerAdd', [CustomerController::class, 'store'])->name('CustomerAdd');
Route::get('/CustomerList', [CustomerController::class, 'list'])->name('CustomerList');
Route::get('/CustomerEdit', [CustomerController::class, 'updateData'])->name('CustomerEdit');
Route::get('/CustomerDelete', [CustomerController::class, 'destroy'])->name('CustomerDelete');


Route::get('/customerAddressCreate', [CustomerController::class, 'addAddress'])->name('customerAddressCreate');
Route::post('/CustomerAddressAdd', [CustomerController::class, 'storeCustomerAddress'])->name('CustomerAddressAdd');
Route::get('/CustomerAddressList', [CustomerController::class, 'Addresslist'])->name('CustomerAddressList');
Route::get('/CustomerAddressEdit', [CustomerController::class, 'updateAddressData'])->name('CustomerAddressEdit');
Route::get('/CustomerAddressDelete', [CustomerController::class, 'destroyAddress'])->name('CustomerAddressDelete');

Route::get('/addEmployee', [EmployeeController::class, 'addEmployee'])->name('addEmployee');
Route::post('/employeeCreate', [EmployeeController::class, 'storeEmployee'])->name('employeeCreate');
Route::get('/employeeList', [EmployeeController::class, 'list'])->name('employeeList');
Route::get('/employeeEdit', [EmployeeController::class, 'updateData'])->name('employeeEdit');
Route::get('/employeeDelete', [EmployeeController::class, 'destroy'])->name('employeeDelete');

Route::get('/employeeCard', [EmployeeController::class, 'listCard'])->name('employeeCard');

Route::get('/warehouseIndia', [WarehouseController::class, 'listWarehouse'])->name('warehouseIndia');
Route::get('/warehouseEdit', [WarehouseController::class, 'updateData'])->name('warehouseEdit');
Route::get('/warehouseDelete', [WarehouseController::class, 'destroy'])->name('warehouseDelete');
Route::post('/warehouseCreate', [WarehouseController::class, 'storeWarehouse'])->name('warehouseCreate');

Route::get('/warehouseNepal', [WarehouseController::class, 'listNepalWarehouse'])->name('warehouseNepal');
Route::get('/warehouseNepalEdit', [WarehouseController::class, 'updateNepalWarehouseData'])->name('warehouseNepalEdit');
Route::get('/warehouseNepalDelete', [WarehouseController::class, 'destroyNepalWarehouse'])->name('warehouseNepalDelete');
Route::post('/warehouseNepalCreate', [WarehouseController::class, 'storeWarehouseNepal'])->name('warehouseNepalCreate');


Route::get('/addBlog', [BlogController::class, 'addBlog'])->name('addBlog');
Route::post('/blogCreate', [BlogController::class, 'storeBlog'])->name('blogCreate');
Route::post('/blogCreate', [BlogController::class, 'storeblog'])->name('blogCreate');
Route::get('/blogList', [BlogController::class, 'listBlog'])->name('blogList');
Route::get('/blogEdit', [BlogController::class, 'updateBlog'])->name('blogEdit');
Route::get('/blogDelete', [BlogController::class, 'destroyBlog'])->name('blogDelete');

Route::get('/cityList', [CityController::class, 'listCity'])->name('cityList');
Route::get('/addCity', [CityController::class, 'addCity'])->name('addCity');
Route::post('/cityCreate', [CityController::class, 'storeCity'])->name('cityCreate');
Route::get('/cityEdit', [CityController::class, 'updateCity'])->name('cityEdit');
Route::get('/cityDelete', [CityController::class, 'destroyCity'])->name('cityDelete');

Route::get('/pincodeList', [PincodeController::class, 'listPincode'])->name('pincodeList');
Route::get('/addPincode', [PincodeController::class, 'addPincode'])->name('addPincode');
Route::post('/pincodeCreate', [PincodeController::class, 'pincodeCreate'])->name('pincodeCreate');
Route::get('/PincodeEdit', [PincodeController::class, 'updatePincode'])->name('PincodeEdit');
Route::get('/pincodeDelete', [PincodeController::class, 'destroyPincode'])->name('pincodeDelete');

Route::get('/TodaysShipments', [ShipmentsController::class, 'listTodaysShipments'])->name('TodaysShipments');
Route::get('/WarehouseStock', [ShipmentsController::class, 'listWarehouseStock'])->name('WarehouseStock');
Route::get('/DispatchedToNepal', [ShipmentsController::class, 'listDispatchedToNepal'])->name('DispatchedToNepal');
Route::get('/WrongProduct', [ShipmentsController::class, 'listWrongProduct'])->name('WrongProduct');
Route::get('/viewShipment', [ShipmentsController::class, 'viewShipment'])->name('viewShipment');
Route::get('/dispatch_now', [ShipmentsController::class, 'dispatch_now'])->name('dispatch_now');
Route::get('/viewShipment', [ShipmentsController::class, 'viewShipment'])->name('viewShipment');

Route::get('/faqList', [FaqController::class, 'listFaq'])->name('faqList');
Route::get('/addFaq', [FaqController::class, 'addFaq'])->name('addFaq');
Route::post('/faqCreate', [FaqController::class, 'faqCreate'])->name('faqCreate');
Route::get('/faqEdit', [FaqController::class, 'updateFaq'])->name('faqEdit');
Route::get('/faqDelete', [FaqController::class, 'destroyFaq'])->name('faqDelete');

Route::get('/addArticle', [FaqController::class, 'addArticle'])->name('addArticle');
Route::post('/articleCreate', [FaqController::class, 'articleCreate'])->name('articleCreate');

Route::get('/addKnowledgebase', [FaqController::class, 'addKnowledgebase'])->name('addKnowledgebase');
Route::post('/knowledgebaseCreate', [FaqController::class, 'knowledgebaseCreate'])->name('knowledgebaseCreate');

Route::get('/addSupport', [FaqController::class, 'addSupport'])->name('addSupport');
Route::post('/supportCreate', [FaqController::class, 'supportCreate'])->name('supportCreate');

Route::get('/faq', [FaqController::class, 'faq'])->name('faq');

Route::post('/faqSearch', [FaqController::class, 'faqSearch'])->name('faqSearch');


Route::get('/CouponCodeList', [CouponCodeController::class, 'listCouponCode'])->name('CouponCodeList');
Route::get('/addCouponCode', [CouponCodeController::class, 'addCouponCode'])->name('addCouponCode');
Route::post('/CouponCodeCreate', [CouponCodeController::class, 'CouponCodeCreate'])->name('CouponCodeCreate');
Route::get('/CouponCodeEdit', [CouponCodeController::class, 'updateCouponCode'])->name('CouponCodeEdit');
Route::get('/CouponCodeDelete', [CouponCodeController::class, 'destroyCouponCode'])->name('CouponCodeDelete');






Route::get('/orderRecords', [MembershipPlanController::class, 'index'])->name('orderRecords');
Route::get('/createOrder', [MembershipPlanController::class, 'create'])->name('createOrder');

























Route::get('/', function () {
    return redirect()->route('index');
})->name('/');

//Language Change
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'de', 'es','fr','pt', 'cn', 'ae'])) {
        abort(400);
    }   
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();
})->name('lang');
    
Route::prefix('dashboard')->group(function () {
    Route::view('index', 'dashboard.index')->name('index');
    Route::view('dashboard-02', 'dashboard.dashboard-02')->name('dashboard-02');
    Route::post('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
});

Route::prefix('widgets')->group(function () {
    Route::view('general-widget', 'widgets.general-widget')->name('general-widget');
    Route::view('chart-widget', 'widgets.chart-widget')->name('chart-widget');
});

Route::prefix('page-layouts')->group(function () {
    Route::view('box-layout', 'page-layout.box-layout')->name('box-layout');    
    Route::view('layout-rtl', 'page-layout.layout-rtl')->name('layout-rtl');    
    Route::view('layout-dark', 'page-layout.layout-dark')->name('layout-dark');    
    Route::view('hide-on-scroll', 'page-layout.hide-on-scroll')->name('hide-on-scroll');    
    Route::view('footer-light', 'page-layout.footer-light')->name('footer-light');    
    Route::view('footer-dark', 'page-layout.footer-dark')->name('footer-dark');    
    Route::view('footer-fixed', 'page-layout.footer-fixed')->name('footer-fixed');    
}); 

Route::prefix('project')->group(function () {
    Route::view('projects', 'project.projects')->name('projects');
    Route::view('projectcreate', 'project.projectcreate')->name('projectcreate');
});

Route::view('file-manager', 'file-manager')->name('file-manager');
Route::view('kanban', 'kanban')->name('kanban');

Route::prefix('ecommerce')->group(function () {
    Route::view('product', 'apps.product')->name('product');
    Route::view('product-page', 'apps.product-page')->name('product-page');
    Route::view('list-products', 'apps.list-products')->name('list-products');
    Route::view('payment-details', 'apps.payment-details')->name('payment-details');
    Route::view('order-history', 'apps.order-history')->name('order-history');
    Route::view('invoice-template', 'apps.invoice-template')->name('invoice-template');
    Route::view('cart', 'apps.cart')->name('cart');
    Route::view('list-wish', 'apps.list-wish')->name('list-wish');
    Route::view('checkout', 'apps.checkout')->name('checkout');
    Route::view('pricing', 'apps.pricing')->name('pricing');
});

Route::prefix('email')->group(function () {
    Route::view('email-application', 'apps.email-application')->name('email-application');
    Route::view('email-compose', 'apps.email-compose')->name('email-compose');
});

Route::prefix('chat')->group(function () {
    Route::view('chat', 'apps.chat')->name('chat');
    Route::view('chat-video', 'apps.chat-video')->name('chat-video');
});

Route::prefix('users')->group(function () {
    Route::view('user-profile', 'apps.user-profile')->name('user-profile');
    Route::view('edit-profile', 'apps.edit-profile')->name('edit-profile');
    Route::view('user-cards', 'apps.user-cards')->name('user-cards');
});


Route::view('bookmark', 'apps.bookmark')->name('bookmark');
Route::view('contacts', 'apps.contacts')->name('contacts');
Route::view('task', 'apps.task')->name('task');
Route::view('calendar-basic', 'apps.calendar-basic')->name('calendar-basic');
Route::view('social-app', 'apps.social-app')->name('social-app');
Route::view('to-do', 'apps.to-do')->name('to-do');
Route::view('search', 'apps.search')->name('search');

Route::prefix('ui-kits')->group(function () {
    Route::view('state-color', 'ui-kits.state-color')->name('state-color');
    Route::view('typography', 'ui-kits.typography')->name('typography');
    Route::view('avatars', 'ui-kits.avatars')->name('avatars');
    Route::view('helper-classes', 'ui-kits.helper-classes')->name('helper-classes');
    Route::view('grid', 'ui-kits.grid')->name('grid');
    Route::view('tag-pills', 'ui-kits.tag-pills')->name('tag-pills');
    Route::view('progress-bar', 'ui-kits.progress-bar')->name('progress-bar');
    Route::view('modal', 'ui-kits.modal')->name('modal');
    Route::view('alert', 'ui-kits.alert')->name('alert');
    Route::view('popover', 'ui-kits.popover')->name('popover');
    Route::view('tooltip', 'ui-kits.tooltip')->name('tooltip');
    Route::view('loader', 'ui-kits.loader')->name('loader');
    Route::view('dropdown', 'ui-kits.dropdown')->name('dropdown');
    Route::view('accordion', 'ui-kits.accordion')->name('accordion');
    Route::view('tab-bootstrap', 'ui-kits.tab-bootstrap')->name('tab-bootstrap');
    Route::view('tab-material', 'ui-kits.tab-material')->name('tab-material');
    Route::view('box-shadow', 'ui-kits.box-shadow')->name('box-shadow');
    Route::view('list', 'ui-kits.list')->name('list');
});

Route::prefix('bonus-ui')->group(function () {
    Route::view('scrollable', 'bonus-ui.scrollable')->name('scrollable');
    Route::view('tree', 'bonus-ui.tree')->name('tree');
    Route::view('bootstrap-notify', 'bonus-ui.bootstrap-notify')->name('bootstrap-notify');
    Route::view('rating', 'bonus-ui.rating')->name('rating');
    Route::view('dropzone', 'bonus-ui.dropzone')->name('dropzone');
    Route::view('tour', 'bonus-ui.tour')->name('tour');
    Route::view('sweet-alert2', 'bonus-ui.sweet-alert2')->name('sweet-alert2');
    Route::view('modal-animated', 'bonus-ui.modal-animated')->name('modal-animated');
    Route::view('owl-carousel', 'bonus-ui.owl-carousel')->name('owl-carousel');
    Route::view('ribbons', 'bonus-ui.ribbons')->name('ribbons');
    Route::view('pagination', 'bonus-ui.pagination')->name('pagination');
    Route::view('breadcrumb', 'bonus-ui.breadcrumb')->name('breadcrumb');
    Route::view('range-slider', 'bonus-ui.range-slider')->name('range-slider');
    Route::view('image-cropper', 'bonus-ui.image-cropper')->name('image-cropper');
    Route::view('sticky', 'bonus-ui.sticky')->name('sticky');
    Route::view('basic-card', 'bonus-ui.basic-card')->name('basic-card');
    Route::view('creative-card', 'bonus-ui.creative-card')->name('creative-card');
    Route::view('tabbed-card', 'bonus-ui.tabbed-card')->name('tabbed-card');
    Route::view('dragable-card', 'bonus-ui.dragable-card')->name('dragable-card');
    Route::view('timeline-v-1', 'bonus-ui.timeline-v-1')->name('timeline-v-1');
    Route::view('timeline-v-2', 'bonus-ui.timeline-v-2')->name('timeline-v-2');
    Route::view('timeline-small', 'bonus-ui.timeline-small')->name('timeline-small');
});

Route::prefix('builders')->group(function () {
    Route::view('form-builder-1', 'builders.form-builder-1')->name('form-builder-1');
    Route::view('form-builder-2', 'builders.form-builder-2')->name('form-builder-2');
    Route::view('pagebuild', 'builders.pagebuild')->name('pagebuild');
    Route::view('button-builder', 'builders.button-builder')->name('button-builder');
});

Route::prefix('animation')->group(function () {
    Route::view('animate', 'animation.animate')->name('animate');
    Route::view('scroll-reval', 'animation.scroll-reval')->name('scroll-reval');
    Route::view('aos', 'animation.aos')->name('aos');
    Route::view('tilt', 'animation.tilt')->name('tilt');
    Route::view('wow', 'animation.wow')->name('wow');
});


Route::prefix('icons')->group(function () {
    Route::view('flag-icon', 'icons.flag-icon')->name('flag-icon');
    Route::view('font-awesome', 'icons.font-awesome')->name('font-awesome');
    Route::view('ico-icon', 'icons.ico-icon')->name('ico-icon');
    Route::view('themify-icon', 'icons.themify-icon')->name('themify-icon');
    Route::view('feather-icon', 'icons.feather-icon')->name('feather-icon');
    Route::view('whether-icon', 'icons.whether-icon')->name('whether-icon');
    Route::view('simple-line-icon', 'icons.simple-line-icon')->name('simple-line-icon');
    Route::view('material-design-icon', 'icons.material-design-icon')->name('material-design-icon');
    Route::view('pe7-icon', 'icons.pe7-icon')->name('pe7-icon');
    Route::view('typicons-icon', 'icons.typicons-icon')->name('typicons-icon');
    Route::view('ionic-icon', 'icons.ionic-icon')->name('ionic-icon');
});

Route::prefix('buttons')->group(function () {
    Route::view('buttons', 'buttons.buttons')->name('buttons');
    Route::view('buttons-flat', 'buttons.buttons-flat')->name('buttons-flat');
    Route::view('buttons-edge', 'buttons.buttons-edge')->name('buttons-edge');
    Route::view('raised-button', 'buttons.raised-button')->name('raised-button');
    Route::view('button-group', 'buttons.button-group')->name('button-group');
});

Route::prefix('forms')->group(function () {
    Route::view('form-validation', 'forms.form-validation')->name('form-validation');
    Route::view('base-input', 'forms.base-input')->name('base-input');
    Route::view('radio-checkbox-control', 'forms.radio-checkbox-control')->name('radio-checkbox-control');
    Route::view('input-group', 'forms.input-group')->name('input-group');
    Route::view('megaoptions', 'forms.megaoptions')->name('megaoptions');
    Route::view('datepicker', 'forms.datepicker')->name('datepicker');
    Route::view('time-picker', 'forms.time-picker')->name('time-picker');
    Route::view('datetimepicker', 'forms.datetimepicker')->name('datetimepicker');
    Route::view('daterangepicker', 'forms.daterangepicker')->name('daterangepicker');
    Route::view('touchspin', 'forms.touchspin')->name('touchspin');
    Route::view('select2', 'forms.select2')->name('select2');
    Route::view('switch', 'forms.switch')->name('switch');
    Route::view('typeahead', 'forms.typeahead')->name('typeahead');
    Route::view('clipboard', 'forms.clipboard')->name('clipboard');
    Route::view('default-form', 'forms.default-form')->name('default-form');
    Route::view('form-wizard', 'forms.form-wizard')->name('form-wizard');
    Route::view('form-wizard-two', 'forms.form-wizard-two')->name('form-wizard-two');
    Route::view('form-wizard-three', 'forms.form-wizard-three')->name('form-wizard-three');
    Route::post('form-wizard-three', function(){
        return redirect()->route('form-wizard-three');
    })->name('form-wizard-three-post');
});

Route::prefix('tables')->group(function () {
    Route::view('bootstrap-basic-table', 'tables.bootstrap-basic-table')->name('bootstrap-basic-table');
    Route::view('bootstrap-sizing-table', 'tables.bootstrap-sizing-table')->name('bootstrap-sizing-table');
    Route::view('bootstrap-border-table', 'tables.bootstrap-border-table')->name('bootstrap-border-table');
    Route::view('bootstrap-styling-table', 'tables.bootstrap-styling-table')->name('bootstrap-styling-table');
    Route::view('table-components', 'tables.table-components')->name('table-components');
    Route::view('datatable-basic-init', 'tables.datatable-basic-init')->name('datatable-basic-init');
    Route::view('datatable-advance', 'tables.datatable-advance')->name('datatable-advance');
    Route::view('datatable-styling', 'tables.datatable-styling')->name('datatable-styling');
    Route::view('datatable-ajax', 'tables.datatable-ajax')->name('datatable-ajax');
    Route::view('datatable-server-side', 'tables.datatable-server-side')->name('datatable-server-side');
    Route::view('datatable-plugin', 'tables.datatable-plugin')->name('datatable-plugin');
    Route::view('datatable-api', 'tables.datatable-api')->name('datatable-api');
    Route::view('datatable-data-source', 'tables.datatable-data-source')->name('datatable-data-source');
    Route::view('datatable-ext-autofill', 'tables.datatable-ext-autofill')->name('datatable-ext-autofill');
    Route::view('datatable-ext-basic-button', 'tables.datatable-ext-basic-button')->name('datatable-ext-basic-button');
    Route::view('datatable-ext-col-reorder', 'tables.datatable-ext-col-reorder')->name('datatable-ext-col-reorder');
    Route::view('datatable-ext-fixed-header', 'tables.datatable-ext-fixed-header')->name('datatable-ext-fixed-header');
    Route::view('datatable-ext-html-5-data-export', 'tables.datatable-ext-html-5-data-export')->name('datatable-ext-html-5-data-export');
    Route::view('datatable-ext-key-table', 'tables.datatable-ext-key-table')->name('datatable-ext-key-table');
    Route::view('datatable-ext-responsive', 'tables.datatable-ext-responsive')->name('datatable-ext-responsive');
    Route::view('datatable-ext-row-reorder', 'tables.datatable-ext-row-reorder')->name('datatable-ext-row-reorder');
    Route::view('datatable-ext-scroller', 'tables.datatable-ext-scroller')->name('datatable-ext-scroller');
    Route::view('jsgrid-table', 'tables.jsgrid-table')->name('jsgrid-table');
});

Route::prefix('charts')->group(function () {
    Route::view('echarts', 'charts.echarts')->name('echarts');
    Route::view('chart-apex', 'charts.chart-apex')->name('chart-apex');
    Route::view('chart-google', 'charts.chart-google')->name('chart-google');
    Route::view('chart-sparkline', 'charts.chart-sparkline')->name('chart-sparkline');
    Route::view('chart-flot', 'charts.chart-flot')->name('chart-flot');
    Route::view('chart-knob', 'charts.chart-knob')->name('chart-knob');
    Route::view('chart-morris', 'charts.chart-morris')->name('chart-morris');
    Route::view('chartjs', 'charts.chartjs')->name('chartjs');
    Route::view('chartist', 'charts.chartist')->name('chartist');
    Route::view('chart-peity', 'charts.chart-peity')->name('chart-peity');
});

Route::view('sample-page', 'pages.sample-page')->name('sample-page');
Route::view('internationalization', 'pages.internationalization')->name('internationalization');

Route::prefix('starter-kit')->group(function () {
});

Route::prefix('others')->group(function () {
    Route::view('400', 'errors.400')->name('error-400');
    Route::view('401', 'errors.401')->name('error-401');
    Route::view('403', 'errors.403')->name('error-403');
    Route::view('404', 'errors.404')->name('error-404');
    Route::view('500', 'errors.500')->name('error-500');
    Route::view('503', 'errors.503')->name('error-503');
});

Route::prefix('authentication')->group(function () {
     // Route::view('login', 'auth.login')->name('login');
     Route::view('forget-password', 'authentication.forget-password')->name('forget-password');
     Route::view('maintenance', 'authentication.maintenance')->name('maintenance');
 });

Route::view('comingsoon', 'comingsoon.comingsoon')->name('comingsoon');
Route::view('comingsoon-bg-video', 'comingsoon.comingsoon-bg-video')->name('comingsoon-bg-video');
Route::view('comingsoon-bg-img', 'comingsoon.comingsoon-bg-img')->name('comingsoon-bg-img');

Route::view('basic-template', 'email-templates.basic-template')->name('basic-template');
Route::view('email-header', 'email-templates.email-header')->name('email-header');
Route::view('template-email', 'email-templates.template-email')->name('template-email');
Route::view('template-email-2', 'email-templates.template-email-2')->name('template-email-2');
Route::view('ecommerce-templates', 'email-templates.ecommerce-templates')->name('ecommerce-templates');
Route::view('email-order-success', 'email-templates.email-order-success')->name('email-order-success');


Route::prefix('gallery')->group(function () {
    Route::view('/', 'apps.gallery')->name('gallery');
    Route::view('gallery-with-description', 'apps.gallery-with-description')->name('gallery-with-description');
    Route::view('gallery-masonry', 'apps.gallery-masonry')->name('gallery-masonry');
    Route::view('masonry-gallery-with-disc', 'apps.masonry-gallery-with-disc')->name('masonry-gallery-with-disc');
    Route::view('gallery-hover', 'apps.gallery-hover')->name('gallery-hover');
});

Route::prefix('blog')->group(function () {
    Route::view('/', 'apps.blog')->name('blog');
    Route::view('blog-single', 'apps.blog-single')->name('blog-single');
    Route::view('add-post', 'apps.add-post')->name('add-post');
});


// Route::view('faq', 'apps.faq')->name('faq');

Route::prefix('job-search')->group(function () {
    Route::view('job-cards-view', 'apps.job-cards-view')->name('job-cards-view');
    Route::view('job-list-view', 'apps.job-list-view')->name('job-list-view');
    Route::view('job-details', 'apps.job-details')->name('job-details');
    Route::view('job-apply', 'apps.job-apply')->name('job-apply');
});

Route::prefix('learning')->group(function () {
    Route::view('learning-list-view', 'apps.learning-list-view')->name('learning-list-view');
    Route::view('learning-detailed', 'apps.learning-detailed')->name('learning-detailed');
});

Route::prefix('maps')->group(function () {
    Route::view('map-js', 'apps.map-js')->name('map-js');
    Route::view('vector-map', 'apps.vector-map')->name('vector-map');
});

Route::prefix('editors')->group(function () {
    Route::view('summernote', 'apps.summernote')->name('summernote');
    Route::view('ckeditor', 'apps.ckeditor')->name('ckeditor');
    Route::view('simple-mde', 'apps.simple-mde')->name('simple-mde');
    Route::view('ace-code-editor', 'apps.ace-code-editor')->name('ace-code-editor');
});

Route::view('knowledgebase', 'apps.knowledgebase')->name('knowledgebase');
Route::view('support-ticket', 'apps.support-ticket')->name('support-ticket');
Route::view('landing-page', 'pages.landing-page')->name('landing-page');

Route::prefix('layouts')->group(function () {
    Route::view('compact-sidebar', 'admin_unique_layouts.compact-sidebar'); //default //Dubai
    Route::view('box-layout', 'admin_unique_layouts.box-layout');    //default //New York //
    Route::view('dark-sidebar', 'admin_unique_layouts.dark-sidebar');

    Route::view('default-body', 'admin_unique_layouts.default-body');
    Route::view('compact-wrap', 'admin_unique_layouts.compact-wrap');
    Route::view('enterprice-type', 'admin_unique_layouts.enterprice-type');

    Route::view('compact-small', 'admin_unique_layouts.compact-small');
    Route::view('advance-type', 'admin_unique_layouts.advance-type');
    Route::view('material-layout', 'admin_unique_layouts.material-layout');

    Route::view('color-sidebar', 'admin_unique_layouts.color-sidebar');
    Route::view('material-icon', 'admin_unique_layouts.material-icon');
    Route::view('modern-layout', 'admin_unique_layouts.modern-layout');
});

Route::get('layout-{light}', function($light){
    session()->put('layout', $light);
    session()->get('layout');
    if($light == 'vertical-layout')
    {
        return redirect()->route('pages-vertical-layout');
    }
    return redirect()->route('index');
    return 1;
});
Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
})->name('clear.cache');