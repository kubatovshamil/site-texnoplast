<?php

use ishop\Router;

//Контакты
Router::add('^contact$', ['controller' => 'main', 'action' => 'contact']);
//страница корзинка
Router::add('^cart$',['controller' => 'cart', 'action' => 'cart']);
//страница регистрации
Router::add('^sign$',['controller' => 'sign', 'action' => 'index']);
//роут категорий
Router::add('^subcategory/(?P<alias>[A-Za-z0-9\-\*]+)/?$', ['controller' => 'category', 'action' => 'subcategory']);

Router::add('^category/(?P<alias>[A-Za-z0-9\-\*]+)/?$', ['controller' => 'category', 'action' => 'parentcategory']);
//роут продукта
Router::add('^product/(?P<alias>[A-Za-z0-9\-\*]+)/?$', ['controller' => 'cart', 'action' => 'product']);
//роуты для поисковика
Router::add('search', ['controller' => 'main', 'action' => 'search']);
//роут каталога
Router::add('^catalog$', ['controller' => 'category', 'action' => 'catalog']);



// default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');