<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/artists' => [[['_route' => 'artists', '_controller' => 'App\\Controller\\ArtistController::index'], null, null, null, true, false, null]],
        '/admin/artists/create' => [[['_route' => 'artist_create', '_controller' => 'App\\Controller\\ArtistController::edit'], null, null, null, false, false, null]],
        '/admin/artists/add' => [[['_route' => 'app_artist_edit', '_controller' => 'App\\Controller\\ArtistController::edit'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'auth_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/generate_admin' => [[['_route' => 'auth_generate_admin', '_controller' => 'App\\Controller\\AuthController::generateAdmin'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'auth_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 't', '_controller' => 'App\\Controller\\HomeController::t'], null, null, null, false, false, null],
        ],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\HomeController::admin'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/admin/tapes' => [[['_route' => 'tapes', '_controller' => 'App\\Controller\\TapeController::index'], null, null, null, true, false, null]],
        '/admin/tapes/create' => [[['_route' => 'tape_create', '_controller' => 'App\\Controller\\TapeController::edit'], null, null, null, false, false, null]],
        '/admin/tapes/add' => [[['_route' => 'app_tape_edit', '_controller' => 'App\\Controller\\TapeController::edit'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, false, false, null]],
        '/users/create' => [[['_route' => 'users_create', '_controller' => 'App\\Controller\\UsersController::edit'], null, null, null, false, false, null]],
        '/users/add' => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|artists/(?'
                        .'|edit/([^/]++)(*:202)'
                        .'|suspend/([^/]++)(*:226)'
                        .'|unsuspend/([^/]++)(*:252)'
                        .'|archive/([^/]++)(*:276)'
                        .'|restore/([^/]++)(*:300)'
                    .')'
                    .'|tapes/(?'
                        .'|edit/([^/]++)(*:331)'
                        .'|suspend/([^/]++)(*:355)'
                        .'|unsuspend/([^/]++)(*:381)'
                        .'|archive/([^/]++)(*:405)'
                        .'|restore/([^/]++)(*:429)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:475)'
                .'|/users/(?'
                    .'|edit/([^/]++)(*:506)'
                    .'|suspend/([^/]++)(*:530)'
                    .'|unsuspend/([^/]++)(*:556)'
                    .'|archive/([^/]++)(*:580)'
                    .'|restore/([^/]++)(*:604)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        202 => [[['_route' => 'artist_edit', '_controller' => 'App\\Controller\\ArtistController::edit'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'artist_suspend', '_controller' => 'App\\Controller\\ArtistController::suspend'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'artist_unsuspend', '_controller' => 'App\\Controller\\ArtistController::unsuspend'], ['id'], null, null, false, true, null]],
        276 => [[['_route' => 'artist_archive', '_controller' => 'App\\Controller\\ArtistController::archive'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'artist_restore', '_controller' => 'App\\Controller\\ArtistController::restore'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'tape_edit', '_controller' => 'App\\Controller\\TapeController::edit'], ['id'], null, null, false, true, null]],
        355 => [[['_route' => 'tape_suspend', '_controller' => 'App\\Controller\\TapeController::suspend'], ['id'], null, null, false, true, null]],
        381 => [[['_route' => 'tape_unsuspend', '_controller' => 'App\\Controller\\TapeController::unsuspend'], ['id'], null, null, false, true, null]],
        405 => [[['_route' => 'tape_archive', '_controller' => 'App\\Controller\\TapeController::archive'], ['id'], null, null, false, true, null]],
        429 => [[['_route' => 'tape_restore', '_controller' => 'App\\Controller\\TapeController::restore'], ['id'], null, null, false, true, null]],
        475 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        506 => [[['_route' => 'users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], null, null, false, true, null]],
        530 => [[['_route' => 'users_suspend', '_controller' => 'App\\Controller\\UsersController::suspend'], ['id'], null, null, false, true, null]],
        556 => [[['_route' => 'users_unsuspend', '_controller' => 'App\\Controller\\UsersController::unsuspend'], ['id'], null, null, false, true, null]],
        580 => [[['_route' => 'users_archive', '_controller' => 'App\\Controller\\UsersController::archive'], ['id'], null, null, false, true, null]],
        604 => [
            [['_route' => 'users_restore', '_controller' => 'App\\Controller\\UsersController::restore'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
