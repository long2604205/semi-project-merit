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
        '/admin/actor' => [[['_route' => 'app_actor', '_controller' => 'App\\Controller\\ActorController::index'], null, null, null, false, false, null]],
        '/admin/actor/create' => [[['_route' => 'create_actor', '_controller' => 'App\\Controller\\ActorController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/searchactor' => [[['_route' => 'search_actor', '_controller' => 'App\\Controller\\ClientController::testSearch'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\ClientController::about'], null, null, null, false, false, null]],
        '/admin/manacontact' => [[['_route' => 'client_contact_list', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'client_contact', '_controller' => 'App\\Controller\\ContactController::send'], null, null, null, false, false, null]],
        '/admin/movie' => [[['_route' => 'app_movie', '_controller' => 'App\\Controller\\MovieController::index'], null, null, null, false, false, null]],
        '/admin/movie/create' => [[['_route' => 'create_movie', '_controller' => 'App\\Controller\\MovieController::create'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SignInController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SignInController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_system', '_controller' => 'App\\Controller\\SystemController::index'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/admin/user/create' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\UserController::create'], null, null, null, false, false, null]],
        '/admin/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'dashboard', 'template' => 'admin/system/system.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], null, null, null, false, false, null]],
        '/coming-soon' => [[['_route' => 'soon', 'template' => 'client/system/soon.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|actor/(?'
                        .'|de(?'
                            .'|tail/([^/]++)(*:206)'
                            .'|lete/([^/]++)(*:227)'
                        .')'
                        .'|add(?'
                            .'|image/([^/]++)(*:256)'
                            .'|movie/([^/]++)(*:278)'
                        .')'
                        .'|edit/([^/]++)(*:300)'
                    .')'
                    .'|contact/de(?'
                        .'|tail\\-contact/([^/]++)(*:344)'
                        .'|lete/([^/]++)(*:365)'
                    .')'
                    .'|movie/delete/([^/]++)(*:395)'
                    .'|user/(?'
                        .'|delete/([^/]++)(*:426)'
                        .'|edit/([^/]++)(*:447)'
                    .')'
                .')'
                .'|/mvactors/find\\-by\\-name/([^/]++)(*:490)'
                .'|/detail\\-actor/([^/]++)(*:521)'
                .'|/(.+)(*:534)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'app_detail', '_controller' => 'App\\Controller\\ActorController::detail'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'app_actordelete', '_controller' => 'App\\Controller\\ActorController::delete'], ['id'], null, null, false, true, null]],
        256 => [[['_route' => 'app_addimage', '_controller' => 'App\\Controller\\ActorController::addimage'], ['id'], null, null, false, true, null]],
        278 => [[['_route' => 'add_movie', '_controller' => 'App\\Controller\\ActorController::addmovie'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'edit_actor', '_controller' => 'App\\Controller\\ActorController::edit'], ['id'], null, null, false, true, null]],
        344 => [[['_route' => 'client_contact_detail', '_controller' => 'App\\Controller\\ContactController::detail'], ['id'], null, null, false, true, null]],
        365 => [[['_route' => 'client_contact_remove', '_controller' => 'App\\Controller\\ContactController::remove'], ['id'], null, null, false, true, null]],
        395 => [[['_route' => 'delete_movie', '_controller' => 'App\\Controller\\MovieController::destroy'], ['id'], ['GET' => 0], null, false, true, null]],
        426 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::destroy'], ['id'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'edit_user', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, true, null]],
        490 => [[['_route' => 'actor_find_by_name', '_controller' => 'App\\Controller\\ClientController::findByClosestName'], ['name'], null, null, false, true, null]],
        521 => [[['_route' => 'client_detail', '_controller' => 'App\\Controller\\ClientController::detail'], ['id'], null, null, false, true, null]],
        534 => [
            [['_route' => 'not_found', '_controller' => 'App\\Controller\\ErrorController::notFound'], ['any'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
