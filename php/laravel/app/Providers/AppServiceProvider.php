<?php

namespace App\Providers;

use App\Observers\PostObserver;
use App\Observers\ProductObserver;
use Illuminate\Support\ServiceProvider;
use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // 配置 Faker 全局使用中文 'zh_CN' 语言包
        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('zh_CN');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 这里可以放置一些启动时需要执行的代码
        // 比如注册观察者、事件监听器等
        \App\Models\Products::observe(ProductObserver::class);
        \App\Models\Post::observe(PostObserver::class);
    }
}
