<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// form surat kontrol
  case 'data_pasien':
    include 'pages/pasien/data_pasien.php';
    break;
  }
  switch ($page) {
//  form surat kontrol
  case 'form_tambah':
    include 'pages/pasien/form_tambah.php';
    break;
  }
  switch ($page) {
// form surat kontrol
  case 'simpan':
    include 'pages/pasien/simpan.php';
    break;
	
  case 'formtambah':
    include 'pages/pasien/formtambah.php';
    break;
	
  case 'edit_form':
    include 'pages/pasien/edit_form.php';
    break;
	
  case 'update':
    include 'pages/pasien/update.php';
    break;

  }
}else{
    include "pages/home.php";
  }
?>