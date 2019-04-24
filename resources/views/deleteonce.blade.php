

@section('title', 'Deleteing...')

@extends('layouts.base')

<section id="change" class="hero is-fullheight is-link">


  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title" id="titlechange">
       Preparing to delete image for <code>{{ Auth::user()->name }}</code>
      </h1>
      <br />
      <progress class="progress is-large is-success" max="100">60%</progress>
 
    </div>
  </div>
 
<?php   
    
$file = 'images/'.\Auth::user()->name;

$files = glob($file . '/imagename');
 foreach($files as $file){
    if(is_file($file)){
        unlink($file);
    }
?>



</section>
