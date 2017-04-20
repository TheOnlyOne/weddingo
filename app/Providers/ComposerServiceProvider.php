<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider {
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot() {
        // Using class based composers..
        /*View::composer('master-client/*', function($view) {
            $user_id = Auth::user()->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_prop = DB::table('weddings')->where('id', '=', $wedding_obj[0]->wedding_id)->get();
            $wedding_prop = json_decode($wedding_prop);
            $wedding_prop = array(
                "groom_name" => explode(" ", $wedding_prop[0]->groom_name)[0],
                "bride_name" => explode(" ", $wedding_prop[0]->bride_name)[0],
                "date" => $wedding_prop[0]->date
            );
            $view->with('groom_name' => explode(" ", $wedding_prop[0]->groom_name)[0]);
        }); */

        /* View::composer(
            ['budget', 'contacts-management', 'faq', 'gallery', 'index', 'invoice', 'manage-sms-gateway', 'pricing', 'recover-pwd', 'upload', 'user-template-pick'],
            'App\Http\ViewComposers\CustomClientSideComposer'
        ); */

        view()->composer(['master-client-view/*'],"App\Http\ViewComposers\CustomClientSideComposer");
    }

    public function register()
    {
        //
    }
}