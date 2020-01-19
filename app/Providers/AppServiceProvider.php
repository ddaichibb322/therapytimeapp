<?php

namespace App\Providers;

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
        
        // @notpaiduserディレクティブ
        // 有料会員でなければディレクティブ以下のDOMを表示する
        \Blade::directive('notpaiduser', function () {            
            // Bladeのカスタムディレクトリはキャッシュを使うので、
            // 画面表示単位でこの処理を実行するためにphpコードを埋め込む            
            return '<?php $common = new \Common; if(!$common->isPaidMember()) { ?>';   
        });

        // @endnotpaiduserディレクティブ
        \Blade::directive('endnotpaiduser', function () {
            $common = new \Common;
            return '<?php } ?>';
        });

        // @paiduserディレクティブ
        // 有料会員ならディレクティブ以下のDOMを表示する
        \Blade::directive('paiduser', function () {
            // $isUnpaidに、有料会員かどうかを文字列で持つ（falseなら有料会員）            
            return '<?php $common = new \Common; if($common->isPaidMember()) { ?>';   
        });

        // @endnotpaiduserディレクティブ
        \Blade::directive('endpaiduser', function () {
            $common = new \Common;
            return '<?php } ?>';
        });
        
        
    }
    
}
