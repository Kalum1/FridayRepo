
@section('title', 'Deleteing...')

@extends('layouts.base')

<section id="change" class="hero is-fullheight is-link">


  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title" id="titlechange">
       Please wait whilst we process your request.
      </h1>
      <h2 class="subtitle">
        Delete image for <code>{{ Auth::user()->name }}</code>
      </h2>
      <br />
      <progress class="progress is-large is-success" max="100">60%</progress>

    </div>
  </div>
 

<?php 
$folder = "images/".Auth::user()->name."";
$files = glob($folder . '/*');
 foreach($files as $file){
    if(is_file($file)){
        unlink($file);
    }
}
header( 'Location: /home' );
?>

</section>
