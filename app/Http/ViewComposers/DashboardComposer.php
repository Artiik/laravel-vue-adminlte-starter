<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class DashboardComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('Laravel', [
            'csrfToken' => csrf_token(),
            'user' => auth()->user(),
            'user_logged_in' => Auth::check(),
            'locale' => App::getLocale(),
            //TODO: find more appropriate method for defining menu links
            'link_urls' => [
                //'current_url' => url(Route::current()->uri()),
                'current_url' => url()->current(),
                'logo_url' => url('admin/dashboard'),
                'main_sidebar_urls' => [
                    'admin' => [
                        'dashboard' => url('admin/dashboard'),
                        'pages' => url('admin/page'),
                        'posts' => url('admin/post'),
                        'publish' => url('admin/publish'),
                    ],
                    'user' => [
                        'logout' => url('admin/logout')
                    ]
                ]
            ],
            'trans' => $this->getTranslations()
        ]);
    }

    public function getTranslations()
    {
        $lang_files = Storage::disk('lang')->files(App::getLocale());
        $trans = [];
        foreach ($lang_files as $f) {
            $filename = pathinfo($f)['filename'];
            $trans[$filename] = trans($filename);
        }
        return $trans;
    }
}
