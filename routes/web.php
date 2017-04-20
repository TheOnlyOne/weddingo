<?php
use App\CategoryInvitation;
use App\WeddingInvitation;
use \Webpatser\Uuid\Uuid as uid;

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

Route::get('/', 'master_client\ContactsManagement@index');
// Manage suppliers
Route::get('/suppliers/list', ['as' => '/suppliers/list', 'uses' => 'master_supplier\SuppliersListController@index']);
// View detailed supplier information
Route::get('/suppliers/detail/{id}', ['as' => '/suppliers/detail/{id}', 'uses' => 'master_supplier\SupplierDetailController@index']);
// Budget Management
Route::get('/wedding/budgets', ['as' => '/wedding/budgets', 'uses' => 'master_client\BudgetController@index']);
// Add budget item
Route::post('/wedding/budgets/new_budget', ['as' => '/wedding/budgets/new_budget', 'uses' => 'master_client\BudgetController@addBudget']);
// Delete specific budget item
Route::post('/wedding/budgets/delete_budget', ['as' => '/wedding/budgets/delete_budget', 'uses' => 'master_client\BudgetController@deleteBudget']);
// Upload media files (Images / Videos)
Route::get('/wedding/upload', ['as' => '/wedding/upload', 'uses' => 'master_client\UploadController@index']);
// Store selected media files
Route::post('/wedding/upload/store', ['as' => '/wedding/upload/store', 'uses' => 'master_client\UploadController@store']);
// Add media title to the media titles list
Route::post('/wedding/upload/new_title', ['as' => '/wedding/upload/new_title', 'uses' => 'master_client\UploadController@addTitle']);
// View gallery module
Route::get('/gallery', ['as' => '/gallery', 'uses' => 'master_client\GalleryController@index']);
// Store gallery data
Route::post('/gallery/store', ['as' => '/gallery/store', 'uses' => 'master_client\GalleryController@store']);
// Show the login module
Route::get('/login', ['as' => '/login', 'uses' => 'master_home\LoginController@index']);
// Apply the login operation
Route::post('/login/login', ['as' => '/login/login', 'uses' => 'master_home\LoginController@login']);
// Show the register module
Route::get('/register', ['as' => '/register', 'uses' => 'master_home\RegisterController@index']);
// Apply the registeration operation
Route::post('/register/store', ['as' => '/register/store', 'uses' => 'master_home\RegisterController@store']);
// Show the create wedding module
Route::get('/create-wedding', ['as' => '/create-wedding', 'uses' => 'master_home\CreateWeddingController@index']);
// Apply the logout operation
Route::get('/create-wedding/logout', ['as' => '/create-wedding/logout', 'uses' => 'master_home\CreateWeddingController@logout']);
// Save wedding data
Route::post('/create-wedding/store', ['as' => '/create-wedding/store', 'uses' => 'master_home\CreateWeddingController@store']);
// Show the pricing module
Route::get('/pricing', ['as' => '/pricing', 'uses' => 'master_client\PricingController@index']);
// Save regiseration data (user's data)
Route::post('/pricing/store', ['as' => '/pricing/store', 'uses' => 'master_client\PricingController@store']);
// Apply the logout operation
Route::get('/pricing/logout', ['as' => '/pricing/logout', 'uses' => 'master_client\PricingController@logout']);
// Redirect provider for socialite
Route::get('/redirect/{provider}', ['as' => '/redirect/{provider}', 'uses' => 'master_home\SocialAuthController@redirect']);
// Callback provider for socialite
Route::get('/callback/{provider}', ['as' => '/callback/{provider}', 'uses' => 'master_home\SocialAuthController@callback']);
// Add new group category
Route::post('master-client/add-new-group-category',['as' => 'master-client/add-new-group-category', 'uses' => 'master_client\ContactsManagement@add_guests_category']);
// Add new wedding guest
Route::post('master-client/add-new-wedding-guest',['as' => 'master-client/add-new-wedding-guest', 'uses' => 'master_client\ContactsManagement@add_wedding_guest']);
// Remove wedding guest
Route::post('master-client/remove-wedding-guest', ['as' => 'master-client/remove-wedding-guest', 'uses' => 'master_client\ContactsManagement@remove_wedding_guest']);
// Edit wedding guest
Route::post('master-client/edit-wedding-guest', ['as' => 'master-client/edit-wedding-guest', 'uses' => 'master_client\ContactsManagement@update_wedding_guest']);
// Fetch last changes of specific guest
Route::post('master-client/get-updated-guest-data', ['as' => 'master-client/get-updated-guest-data', 'uses' => 'master_client\ContactsManagement@get_updated_guest_data']);
// Update wedding guest data
Route::post('master-client/update_wedding_guest', ['as' => 'master-client/update_wedding_guest', 'uses' => 'master_client\ContactsManagement@update_wedding_guest']);
// Get last group category data
Route::post('master-client/get-last-group-category-data', ['as' => 'master-client/get-last-group-category-data', 'uses' => 'master_client\ContactsManagement@get_all_category_invitations']);
// Get total wedding categories per current wedding
Route::post('master-client/get_wedding_categories', ['as' => 'master-client/get_wedding_categories', 'uses' => 'master_client\ContactsManagement@get_wedding_categories']);
// Get total wedding guests per current wedding
Route::post('master-client/get_wedding_guests', ['as' => 'master-client/get_wedding_guests', 'uses' => 'master_client\ContactsManagement@get_wedding_guests']);
// Add guest validation
Route::post('master-client/validate-add-guest', ['as' => 'master-client/validate-add-guest', 'uses' => 'master_client\ContactsManagement@validate_add_guest']);
// Add category validation
Route::post('master-client/validate-add-category', ['as' => 'master-client/validate-add-category', 'uses' => 'master_client\ContactsManagement@validate_add_category']);
// Edit user's template
Route::get('master-client/edit-last-pick-template', ['as' => 'master-client/edit-last-pick-template', 'uses' => 'master_client\TemplateBuilder@index']);
// Update specific template element
Route::post('master-client/update-template-element', ['as' => 'master-client/update-template-element', 'uses' => 'master_client\TemplateBuilder@update_element']);
// View specific template
Route::get('view-template/{wedding_id}/{uid}', ['as' => 'view-template/{wedding_id}/{uid}', 'uses' => 'master_client\TemplateBuilder@get_template']);
// Send singular invite by SMS
Route::post('master-client/sendSmsGuest', ['as' => 'master-client/sendSmsGuest', 'uses' => 'master_client\SmsGateway@send_invite_via_sms']);
// Update user template pick (Update the template of a specific user)
Route::post('master-client/updateUserTemplate', ['as' => 'master-client/updateUserTemplate', 'uses' => 'master_client\UserTemplatePicker@updateUserTemplate']);
// Show the user's pick template module
Route::get('master-client/user-template-picks', ['as' => 'master-client/user-template-picks', 'uses' => 'master_client\UserTemplatePicker@index']);
// Show the contacts managemant
Route::get('master-client/manageguests', ['as' => 'master-client/manageguests', 'uses' => 'master_client\ContactsManagement@index']);
// Show the invoice page
Route::get('master-client/invoice', ['as' => 'master-client/invoice', 'uses' => 'master_client\InvoiceController@index']);
// Show the homepage
Route::get('master-client/index', ['as' => 'master-client/index', 'uses' => 'master_client\HomepageController@index']);
// Apply the update guest status for specific wedding
Route::post('confirmGuestAttending', ['as' => 'confirmGuestAttending', 'uses' => 'master_client\UserTemplatePicker@confirmGuestAttending']);
// Test the sms functionality
Route::get('testSMS', ['as' => 'testSMS', 'uses' => 'master_client\SmsGateway@test_send']);
// Present's main functionality
Route::get('/wedding/present', 'master_client\PresentController@index');
Route::post('/wedding/present/delete_present', 'master_client\PresentController@deletePresent');
Route::post('/wedding/present/new_present', 'master_client\PresentController@addPresent');
// Task's main functionality
//Route::get('testSMS', ['as' => 'testSMS', 'uses' => 'master_client\SmsGateway@test_send']);
Route::get('/wedding/task', ['as' => '/wedding/task', 'uses' => 'master_client\TaskController@index']);
Route::post('/wedding/task/change_status', ['as' => '/wedding/task/change_status', 'uses' => 'master_client\TaskController@changeStatus']);
Route::post('/wedding/task/delrec_task', 'master_client\TaskController@delrecTask');
Route::post('/wedding/task/get_all_tasks', 'master_client\TaskController@allTasks');
Route::post('/wedding/task/store', 'master_client\TaskController@store');