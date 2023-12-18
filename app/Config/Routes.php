<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');


$routes->group("user",function($routes){
    $routes->get('home','UserController::index',['as'=>'user.home']);

    //cat crud start
    $routes->get('category','UserController::category',['as'=>'user.category']);
    $routes->get('add_category','UserController::add_category',['as'=>'user.add_category']);
    $routes->get('edit_category/(:num)','UserController::edit_category/$1',['as'=>'user.edit_category']);
    $routes->post('update_category/(:num)','UserController::update_category/$1');
    $routes->get('delete_category/(:num)','UserController::delete_category/$1');
    $routes->post('cat_store','UserController::cat_store');
    //cat crud end

    //book crud start
    $routes->post('store_books','UserController::store_books');
    $routes->get('books','UserController::books',['as'=>'user.books']);
    $routes->get('add_books','UserController::add_books',['as'=>'user.add_books']);
    $routes->get('delete_books/(:num)','UserController::delete_books/$1');
     //book crud start

    //author crud start
    $routes->get('authors','UserController::authors',['as'=>'user.authors']);
    $routes->get('add_author','UserController::add_author',['as'=>'user.add_author']);
    $routes->post('store_author','UserController::store_author');
    $routes->get('delete_author/(:num)','UserController::delete_author/$1');
    //author crud end

    //student crud start
    $routes->get('students','UserController::students',['as'=>'user.students']);
    $routes->get('add_student','UserController::add_student',['as'=>'user.add_student']);
    $routes->post('store_student','UserController::store_student');
    $routes->get('student_details/(:num)','UserController::student_details/$1',['as'=>'user.student_details']);
    
    
    // $routes->get('deactivate/(:num)','UserController::deactivate/$1');
    // $routes->post('deactivate_post','UserController::deactivate_post');

    $routes->match(['get','post'],'activate/(:num)', 'UserController::activate/$1');
    $routes->match(['get','post'],'deactivate/(:num)', 'UserController::deactivate/$1');
    //student crud end

    //issue started

    $routes->get('issueDetails','UserController::issueDetails',['as'=>'user.issueDetails']);
    $routes->get('store_issue','UserController::store_issue',['as'=>'user.store_issue']);
    $routes->match(['get','post'],'issue_new_book','UserController::issue_new_book',['as'=>'user.issue_new_book']);
    $routes->match(['get','post'],'s_search', 'UserController::s_search');
    $routes->post('issue_insert','UserController::issue_insert');

    $routes->get('edit_issue/(:num)','UserController::edit_issue/$1',['as'=>'user.edit_issue']);
    $routes->post('update_issue/(:num)','UserController::update_issue/$1');
});
