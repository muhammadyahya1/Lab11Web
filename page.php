<?php
namespace App\Controllers;
class Page extends BaseController
{
 public function about()
 {
    return view('about', [
        'title' => 'Halaman Abot',
        'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi 
halaman ini.'
    ]);
}

 public function contact()
 {
 return view('about', [
        'title' => 'Halaman Abot',
        'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi 
halaman ini.'
    ]);
 }
 public function faqs()
 {
 return view('about', [
        'title' => 'Halaman Abot',
        'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi 
halaman ini.'
    ]);
 }
 public function tos()
{
 return view('about', [
        'title' => 'Halaman Abot',
        'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi 
halaman ini.'
    ]);
}
}

