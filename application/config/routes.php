<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['default_controller'] = 'Karyawan';

$route['karyawan'] = 'Karyawan/data_karyawan';

$route['karyawan_form'] = 'Karyawan/form';
$route['karyawan_save'] = 'Karyawan/karyawan_save';
$route['karyawan_form_update/(:any)'] = 'Karyawan/karyawan_form_update/$1';
$route['karyawan_update/(:any)'] = 'Karyawan/karyawan_update/$1';

$route['karyawan_delete/(:any)'] = 'Karyawan/karyawan_delete/$1';
// penilaian 
$route['penilaian'] = 'Karyawan/penilaian';
$route['penilaian_form'] = 'Karyawan/penilaian_form';
$route['penilaian_save'] = 'Karyawan/penilaian_save';
$route['penilaian_form_update/(:any)'] = 'Karyawan/penilaian_form_update/$1';
$route['penilaian_update/(:any)'] = 'Karyawan/penilaian_update/$1';
$route['penilaian_delete/(:any)'] = 'Karyawan/penilaian_delete/$1';

$route['penilaian_all/(:any)'] = 'Karyawan/penilaian_all/$1';

$route['penilaian_karwayan_form/(:any)'] = 'Karyawan/penilaian_karwayan_form/$1';
$route['penilaian_karwayan_save/(:any)'] = 'Karyawan/penilaian_karwayan_save/$1';
$route['penilaian_karwayan_delete/(:any)/(:any)'] = 'Karyawan/penilaian_karwayan_delete/$1/$2';
$route['penilaian_karwayan_form_update/(:any)/(:any)'] = 'Karyawan/penilaian_karwayan_form_update/$1/$2';
$route['penilaian_karwayan_update/(:any)/(:any)'] = 'Karyawan/penilaian_karwayan_update/$1/$2';









$route['cek'] = 'Karyawan/cek';

$route['kriteria'] = 'Karyawan/kriteria';
$route['kriteria_form'] = 'Karyawan/kriteria_form';
$route['kriteria_save'] = 'Karyawan/kriteria_save';
$route['kriteria_form_update/(:any)'] = 'Karyawan/kriteria_form_update/$1';
$route['kriteria_update/(:any)'] = 'Karyawan/kriteria_update/$1';
$route['kriteria_delete/(:any)'] = 'Karyawan/kriteria_delete/$1';



// nilai 
$route['nilai'] = 'Karyawan/nilai';
$route['nilai_form'] = 'Karyawan/nilai_form';
$route['nilai_save'] = 'Karyawan/nilai_save';
$route['nilai_form_update/(:any)'] = 'Karyawan/nilai_form_update/$1';
$route['nilai_update/(:any)'] = 'Karyawan/nilai_update/$1';
$route['nilai_delete/(:any)'] = 'Karyawan/nilai_delete/$1';
$route['nilai_add_kriteria/(:any)'] = 'Karyawan/nilai_add_kriteria/$1';
$route['nilai_form_kriteria/(:any)'] = 'Karyawan/nilai_form_kriteria/$1';
$route['kriteria_nilai_save/(:any)'] = 'Karyawan/kriteria_nilai_save/$1';
$route['kriteria_nilai_update/(:any)/(:any)'] = 'Karyawan/kriteria_nilai_update/$1/$2';
$route['kriteria_nilai_form_update/(:any)/(:any)'] = 'Karyawan/kriteria_nilai_form_update/$1/$2';
$route['kriteria_nilai_nilai_delete/(:any)/(:any)'] = 'Karyawan/kriteria_nilai_nilai_delete/$1/$2';







$route['laporan'] = 'Karyawan/laporan';
$route['list_laporan/(:any)'] = 'Karyawan/list_laporan/$1';

$route['print/(:any)'] = 'Karyawan/print/$1';




