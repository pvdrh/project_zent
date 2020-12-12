<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();

        View::share('categories_menu', $categories);
        // $this->registerPolicies();

        // Gate::define('update-product', function ($user, $product){
        //    return $user->id == $product->user_id;
        // });
    }
}
