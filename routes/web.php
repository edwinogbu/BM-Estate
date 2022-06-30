<?php

use App\Models\Agent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddAgentController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\MbServiceController;
use App\Http\Controllers\AddPropertyController;
use App\Http\Controllers\DeleteAgentController;
use App\Http\Controllers\TestemonialController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UpdateAgentController;
use App\Http\Controllers\PropertyImageController;
use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardAgentController;
use App\Http\Controllers\DeletePropertyController;
use App\Http\Controllers\UpdatePropertyController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardPropertyController;
use App\Http\Controllers\ServiceController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


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


Route::get('add-agent', [AgentController::class, 'index'])->name('agent.index');
Route::get('create-agent', [AgentController::class, 'create'])->name('agent.create');
Route::get('show-agent/{agent}', [AgentController::class, 'show'])->name('agent.show');
Route::post('store-agent', [AgentController::class, 'store'])->name('agent.store');
Route::get('edit-agent/', [AgentController::class, 'edit'])->name('agent.edit');
Route::put('update-agent/{agent}', [AgentController::class, 'update'])->name('agent.update');
Route::delete('delete-agent/{agent}', [AgentController::class, 'destroy'])->name('agent.destroy');


Route::get('all-agents-list', [AgentController::class, 'allAgent'])->name('agent.view-agent-list');



Route::get('property-dashboard', [PropertyController::class, 'index'])->name('property.index');
Route::get('create-property', [PropertyController::class, 'create'])->name('property.create');
Route::get('edit-property/{property}', [PropertyController::class, 'edit'])->name('property.edit');
Route::post('store-property', [PropertyController::class, 'store'])->name('property.store');
Route::put('update-property/{property}', [PropertyController::class, 'update'])->name('property.update');
Route::delete('delete-property/{property}', [PropertyController::class, 'destroy'])->name('property.destroy');

Route::get('/', [PropertyController::class, 'frontendHome'])->name('welcome');
Route::get('homepage-properties', [PropertyController::class, 'homePageProperty'])->name('property.homePageProperty');
Route::get('property-details/{property}', [PropertyController::class, 'SingleProperty'])->name('property.view.property-detail');
Route::get('all-property-Listing', [PropertyController::class, 'PropertyListing'])->name('property.view.all-property-listing');
Route::get('filter-properties', [PropertyController::class, 'PropertyFilter'])->name('property.filter');
Route::get('search-properties', [PropertyController::class, 'search'])->name('property.search');



Route::get('add-about', [AboutController::class, 'index'])->name('about.index');
Route::get('create-about', [AboutController::class, 'create'])->name('about.create');
Route::get('show-about/{about}', [AboutController::class, 'show'])->name('about.show');
Route::post('store-about', [AboutController::class, 'store'])->name('about.store');
Route::get('edit-about/', [AboutController::class, 'edit'])->name('about.edit');
Route::put('update-about/{about}', [AboutController::class, 'update'])->name('about.update');
Route::delete('delete-about/{about}', [AboutController::class, 'destroy'])->name('about.destroy');




Route::get('add-service', [ServiceController::class, 'index'])->name('services.index');
Route::get('create-service', [ServiceController::class, 'create'])->name('services.create');
Route::get('show-service/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::post('store-service', [ServiceController::class, 'store'])->name('services.store');
Route::get('edit-service/{service}', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('update-service/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('delete-service/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');


Route::get('add-testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
Route::get('create-testimonial', [TestimonialController::class, 'create'])->name('testimonial.create');
Route::get('show-testimonial/{testimonial}', [TestimonialController::class, 'show'])->name('testimonial.show');
Route::post('store-testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');
Route::get('edit-testimonial/', [TestimonialController::class, 'edit'])->name('testimonial.edit');
Route::put('update-about/{testimonial}', [TestimonialController::class, 'update'])->name('testimonial.update');
Route::delete('delete-about/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');


Route::get('add-surveyor', [MbServiceController::class, 'index'])->name('surveyor.index');
Route::get('show-surveyor-request/{mbService}', [MbServiceController::class, 'show'])->name('surveyor.show');
Route::get('create-surveyor', [MbServiceController::class, 'create'])->name('surveyor.create');
Route::get('show-surveyor/{mbService}', [MbServiceController::class, 'show'])->name('testimonial.show');
Route::post('store-surveyor', [MbServiceController::class, 'store'])->name('surveyor.store');
Route::get('edit-surveyor/', [MbServiceController::class, 'edit'])->name('surveyor.edit');
Route::put('update-about/{mbService}', [MbServiceController::class, 'update'])->name('surveyor.update');
Route::delete('delete-about/{mbService}', [MbServiceController::class, 'destroy'])->name('surveyor.destroy');

Route::get('add-contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('show-contact-request/{contact}', [ContactController::class, 'show'])->name('contact.show');
Route::get('create-contact', [ContactController::class, 'create'])->name('contact.create');
Route::get('show-contact/{contact}', [MbServiceController::class, 'show'])->name('contact.show');
Route::post('store-contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('edit-contact/', [ContactController::class, 'edit'])->name('contact.edit');
Route::put('update-about/{contact}', [ContactController::class, 'update'])->name('contact.update');
Route::delete('delete-about/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');




//frontend Routes
Route::get('single-agent-details/{agent}', [AgentController::class, 'singleAgent'])->name('agent.view.single-detail');
Route::get('logout', [AgentController::class, 'logout'])->name('logout');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('surveyor', [MbServiceController::class, 'surveyor'])->name('surveyor');
Route::post('surveyor-form', [MbServiceController::class, 'form'])->name('surveyor.form.store');
Route::get('contact', [ContactController::class, 'contact'])->name('contact');
// Route::get('mb-customers-testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');

Route::get('show-service/{service}', [ServiceController::class, 'serviceDetail'])->name('service.show');
Route::get('service-listing', [ServiceController::class, 'services'])->name('services');

// Route::get('create-property', [PropertyController::class, 'create'])->name('property.create');
// Route::post('store-property', [PropertyController::class, 'store'])->name('property.store');
