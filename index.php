<?php
error_reporting(E_ALL);
ob_start();
// include 'config/index.php';
include 'lib/functions.php';
include 'inc/header.php';
session_start();

$url = $_SERVER['REQUEST_URI'];
$categories = ['/cat', '/dog', '/fish', '/bird', '/rodents'];

if( $url == '/'){
  include route('home');
}
else if(in_array($url, $categories)){
  include route('categories');
}
else if($url == '/cat-single'){
  include route('cat-single');
}
else if($url == '/cat-single2'){
  include route('cat-single2');
}
else if($url == '/cat-single3'){
  include route('cat-single3');
}else if($url == '/cat-single4'){
  include route('cat-single4');
}else if($url == '/cat-single5'){
  include route('cat-single5');
}else if($url == '/cat-single6'){
  include route('cat-single6');
}else if($url == '/cat-single7'){
  include route('cat-single7');
}else if($url == '/cat-single8'){
  include route('cat-single8');
}else if($url == '/cat-single9'){
  include route('cat-single9');
}else if($url == '/cat-single10'){
  include route('cat-single10');
}else if($url == '/cat-single11'){
  include route('cat-single11');
}
else if($url == '/dog-single'){
  include route('dog-single');
}
else if($url == '/dog-single2'){
  include route('dog-single2');
}
else if($url == '/dog-single3'){
  include route('dog-single3');
}else if($url == '/dog-single4'){
  include route('dog-single4');
}else if($url == '/dog-single5'){
  include route('dog-single5');
}else if($url == '/dog-single6'){
  include route('dog-single6');
}else if($url == '/dog-single7'){
  include route('dog-single7');
}else if($url == '/dog-single8'){
  include route('dog-single8');
}else if($url == '/dog-single9'){
  include route('dog-single9');
}else if($url == '/dog-single10'){
  include route('dog-single10');
}else if($url == '/dog-single11'){
  include route('dog-single11');
}
else if($url == '/bird-single'){
  include route('bird-single');
}
else if($url == '/bird-single2'){
  include route('bird-single2');
}
else if($url == '/bird-single3'){
  include route('bird-single3');
}else if($url == '/bird-single4'){
  include route('bird-single4');
}else if($url == '/bird-single5'){
  include route('bird-single5');
}else if($url == '/bird-single6'){
  include route('bird-single6');
}else if($url == '/bird-single7'){
  include route('bird-single7');
}else if($url == '/bird-single8'){
  include route('bird-single8');
}
else if($url == '/fish-single'){
  include route('fish-single');
}
else if($url == '/fish-single2'){
  include route('fish-single2');
}
else if($url == '/fish-single3'){
  include route('fish-single3');
}else if($url == '/fish-single4'){
  include route('fish-single4');
}else if($url == '/fish-single5'){
  include route('fish-single5');
}else if($url == '/fish-single6'){
  include route('fish-single6');
}else if($url == '/fish-single7'){
  include route('fish-single7');
}else if($url == '/fish-single8'){
  include route('fish-single8');
}
else if($url == '/rodents-single'){
  include route('rodents-single');
}
else if($url == '/rodents-single2'){
  include route('rodents-single2');
}
else if($url == '/rodents-single3'){
  include route('rodents-single3');
}else if($url == '/rodents-single4'){
  include route('rodents-single4');
}else if($url == '/rodents-single5'){
  include route('rodents-single5');
}else if($url == '/rodents-single6'){
  include route('rodents-single6');
}
else if($url == '/news'){
  include route('news');
}
else if($url == '/sign_in'){
  include route('sign_in');
}
else if($url == '/blog'){
  include route('blog');
}
else if($url == '/blog-single-post'){
  include route('blog-single-post');
}
else if($url == '/contact'){
  include route('contact');
}
else {
  include route('404');
}
include 'inc/footer.php';

?>


