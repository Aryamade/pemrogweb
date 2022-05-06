<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->get('/judul-buku','Buku::judul',['as' =>'judul']);

$routes->get('/test', function(){
            echo"ini adalah route test";
});

$routes->get('data-mahasiswa/(:alpha)/(:num)', 'Mahasiswa::profilMahasiswa/$1/$2');

$routes->get('get-buku/(:num)','Buku::idBuku/$1');
$routes->get('get-buku/(:alpha)','Buku::judulBuku/$1');


$routes->group('admin',function($routes){
    $routes->add('users', 'Admin\Users::index');
    $routes->add('blog','Admin\Blog::index');
});

$routes->get('data-dosen/(:alpha)/(:num)','Dosen::profilDosen/$1/$2');

$routes->get('/anggota','Anggota::index');
$routes->get('/anggota/create','Anggota::create');
$routes->get('/anggota/store','Anggota::store');
$routes->get('/anggota/edit(:num)','Anggota::edit/$1' );
$routes->post('/anggota/update/(:num)','Anggota::update/$1');
$routes->get('/anggota/delete/(:num)','Anggota::delete/$1');

// pegawai

$routes->get('/pegawai','Pegawai::index');
$routes->get('/pegawai/create','Pegawai::create');
$routes->get('/pegawai/store','Pegawai::store');
$routes->get('/Pegawai/edit(:num)','Pegawai::edit/$1' );
$routes->post('/pegawai/update/(:num)','Pegawai::update/$1');
$routes->get('/pegawai/delete/(:num)','Pegawai::delete/$1');
// $routes->group('Abc',function($routes){
//     $routes->add('Abc', 'Abc\Abc::index');
//     $routes->add('Bca', 'Abc\Bca::index');
// });



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
