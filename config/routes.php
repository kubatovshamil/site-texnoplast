<?php

use ishop\Router;

//Контакты
Router::add('^contact$', ['controller' => 'contact', 'action' => 'contact']);
//о нас
Router::add('^about$',['controller' => 'about', 'action' => 'about']);
//страница корзинка
Router::add('^cart$',['controller' => 'cart', 'action' => 'cart']);
//страница регистрации
Router::add('^sign$',['controller' => 'sign', 'action' => 'index']);
//роут категорий
Router::add('^subcategory/(?P<alias>[A-Za-z0-9\-\*]+)/?$', ['controller' => 'product', 'action' => 'catalog']);

Router::add('^category/(?P<alias>[A-Za-z0-9\-\*]+)/?$', ['controller' => 'product', 'action' => 'parent']);
//роут продукта
Router::add('^product/(?P<alias>[A-Za-z0-9\-\*]+)/?$', ['controller' => 'cart', 'action' => 'product']);
//роуты для поисковика
Router::add('search', ['controller' => 'search', 'action' => 'product']);
//роут каталога
Router::add('^catalog$', ['controller' => 'product', 'action' => 'index']);



// default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');