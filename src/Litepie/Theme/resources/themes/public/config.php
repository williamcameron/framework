<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
     */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
     */

    'events'  => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before'             => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle(trans('app.name'));

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{{ $crumb["label"] }}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme'  => function ($theme) {
            //You may use this event to set up your assets.

            //You may use this event to set up your assets.

            $theme->asset()->usepath()->add('normalize', 'css/normalize.css');
            $theme->asset()->usepath()->add('main', 'css/main.css');
            $theme->asset()->usepath()->add('public', 'css/vendor.css');
            $theme->asset()->usepath()->add('jquery', 'packages/jquery/js/jquery.min.js');
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme) {
                /*$theme->asset()->usepath()->add('default', 'css/default.css');*/
            },

            'public'  => function ($theme) {
                $theme->asset()->usepath()->add('public', 'css/public.css');
            },

            'install'  => function ($theme) {
                $theme->asset()->usepath()->add('install', 'css/install.css');
                $theme->asset()->usepath()->add('tbw', 'packages/twitter-bootstrap-wizard/jquery.bootstrap.wizard.js');
                
            },

            'home'    => function ($theme) {
                $theme->asset()->usepath()->add('home', 'css/home.css');
            },

        ],

    ],

];
