<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

Route::middleware(['auth', 'verified'])->group(function () {
	Route::get('dashboard', DashboardController::class)->name('dashboard');

	Route::resources([
        'our-services' => \App\Http\Controllers\Backend\OurServicesController::class,
    ]);

});	

?>