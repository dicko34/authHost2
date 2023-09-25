<?php

namespace App\Providers;

use Illuminate\Database\Query\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;
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

        Builder::macro('whereLike', function($columns, $search) {
            $this->where(function($query) use ($columns, $search) {
              foreach(Arr::wrap($columns) as $column) {
                $query->orWhere($column, $search);
              }
            });
           
            return $this;
          });
        Paginator::defaultView('vendor.paginate');
        Schema::defaultStringLength(191);
    }
}
