<?php

use wfm\Router;

Router::add('^admin?$', ['controller' => 'Main', 'actions' => 'index', 'admin_prefix' => 'admin']);
Router::add('^admin/(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)/?$', ['admin_prefix' => 'admin']);



Router::add('^$', ['controller' => 'Main', 'actions' => 'index']);


Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)$');

























