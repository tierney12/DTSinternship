<?php

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

Route::middleware(['auth', 'role:admin'])->domain('admin.'.config('app.host'))->namespace('Admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::post('/printImage', 'DashboardController@printImage');

    Route::get('/stockrequest', 'StockController@retrieve');

    Route::get('/getPricebandStocks', 'StockController@getPricebandStocks');

    Route::get('/addStockRow', 'StockController@addStockRow');

    Route::get('/addExceptionStockRow', 'StockController@addExceptionStockRow');

    Route::get('/findStockDetails', 'StockController@findStockDetails');

    Route::get('/findProsWorkDetails', 'ProsWorkController@findProsWorkDetails');

    Route::get('/findCBWorkDetails', 'CrownBridgeWorkController@findCBWorkDetails');

    Route::get('/findDepartmentWork', 'DepartmentController@findDepartmentWork');

    Route::get('/findJobWork', 'JobWorkController@findJobWork');

    Route::get('production', 'ProductionController@index')->name('production');

    Route::get('reports', 'ReportsController@index')->name('reports');

    Route::get('settings', 'SettingsController@index')->name('settings');

    Route::get('profile', 'UserProfileController@index')->name('profile');

    Route::resource('exceptions', 'ExceptionController');

    Route::resource('roles', 'RoleController');

    Route::resource('role-users', 'RoleUserController');

    Route::resource('permissions', 'PermissionController');

    Route::resource('permission-users', 'PermissionUserController');

    Route::resource('dentist-statuses', 'DentistStatusController');

    Route::resource('discounts', 'DiscountController');

    Route::resource('documents', 'DocumentController');

    Route::resource('nominal-codes', 'NominalCodeController');

    Route::resource('note-types', 'NoteTypeController');

    Route::resource('notes', 'NoteController');

    Route::resource('vat-rates', 'VatRateController');

    Route::resource('permission-roles', 'PermissionRoleController');

    Route::resource('practices', 'PracticeController');

    Route::resource('product-options', 'ProductOptionController');

    Route::resource('products', 'ProductController');

    Route::resource('statements', 'StatementController');

    Route::resource('transactions', 'TransactionController');

    Route::resource('addresses', 'AddressController');

    Route::resource('job-layouts', 'JobLayoutController');

    Route::resource('areas', 'AreaController');

    Route::resource('lab-sheets', 'LabSheetController');

    Route::resource('checklists', 'ChecklistController');

    Route::resource('courses', 'CourseController');

    Route::resource('roles', 'RoleController');

    Route::resource('role-users', 'RoleUserController');

    Route::resource('permissions', 'PermissionController');

    Route::resource('permission-users', 'PermissionUserController');

    Route::resource('dentist-statuses', 'DentistStatusController');

    Route::resource('discounts', 'DiscountController');

    Route::resource('documents', 'DocumentController');

    Route::resource('nominal-codes', 'NominalCodeController');

    Route::resource('note-types', 'NoteTypeController');

    Route::resource('notes', 'NoteController');

    Route::resource('vat-rates', 'VatRateController');

    Route::resource('permission-roles', 'PermissionRoleController');

    Route::resource('practices', 'PracticeController');

    Route::resource('product-options', 'ProductOptionController');

    Route::resource('products', 'ProductController');

    Route::resource('statements', 'StatementController');

    Route::resource('transactions', 'TransactionController');

    Route::resource('addresses', 'AddressController');

    Route::resource('job-layouts', 'JobLayoutController');

    Route::resource('areas', 'AreaController');

    Route::resource('lab-sheets', 'LabSheetController');

    Route::resource('checklists', 'ChecklistController');

    Route::resource('courses', 'CourseController');

    Route::resource('mailing-lists', 'MailingListController');

    Route::resource('remake-reasons', 'RemakeReasonController');

    Route::resource('service-report-issues', 'ServiceReportIssueController');

    Route::resource('service-report-recipients', 'ServiceReportRecipientController');

    Route::resource('dentists', 'DentistController');

    Route::resource('service-report-recipient-des', 'ServiceReportRecipientDes');

    Route::resource('staff', 'StaffController');

    Route::resource('stocks', 'StockController');

    Route::resource('visit-details', 'VisitDetailController');

    Route::resource('visits', 'VisitController');

    Route::resource('departments', 'DepartmentController');

    Route::resource('course-dentists', 'CourseDentistController');

    Route::resource('dentist-mailing-lists', 'DentistMailingListController');

    Route::resource('popups', 'PopupController');

    Route::resource('info-sent-to-dentists', 'InfoSentToDentistController');

    Route::resource('activities', 'ActivityController');

    Route::resource('dentist-spends', 'DentistSpendController');

    Route::resource('invoice-statuses', 'InvoiceStatusController');

    Route::resource('jobs', 'JobController');

    Route::resource('job-update-items', 'JobUpdateItemController');

    Route::resource('job-updates', 'JobUpdateController');

    Route::resource('job-items', 'JobItemController');

    Route::resource('payments', 'PaymentController');

    Route::resource('stock-pricebands', 'StockPricebandController');

    Route::resource('pricebands', 'PricebandController');

    Route::resource('estimates', 'EstimateController');

    Route::resource('estimate-details', 'EstimateDetailController');

    Route::resource('service-reports', 'ServiceReportController');

    Route::resource('invoices', 'InvoiceController');

    Route::resource('invoice-details', 'InvoiceDetailController');

    Route::resource('documents', 'DocumentController');

    Route::resource('notes', 'NoteController');

    Route::resource('activities', 'ActivityController');

    Route::resource('notes', 'NoteController');

    Route::resource('documents', 'DocumentController');

    Route::resource('assets', 'AssetController');

    Route::resource('asset-types', 'AssetTypeController');

    Route::resource('job-errors', 'JobErrorController');

    Route::resource('job-stocks', 'JobStockController');

    Route::resource('job-works', 'JobWorkController');

    Route::resource('crown-bridge-works', 'CrownBridgeWorkController');

    Route::resource('pros-works', 'ProsWorkController');

    Route::resource('checklists', 'ChecklistController');

    Route::resource('stock-pricebands', 'StockPricebandController');
});

Auth::routes();








Route::resource('stock-pricebands', 'StockPricebandController');