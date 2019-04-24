
@section('title', 'Deleteing...')

@extends('layouts.base')

<section id="change" class="hero is-fullheight is-link">


  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title" id="titlechange">
       Please wait whilst we process your request.
      </h1>
      <br />
 
  <form action="deleteonce" method="POST" enctype="multipart/form-data" >


<input type="text" name="imagename" placeholder="Image Name"/><br />
<input type="submit" />
</form>
      <progress class="progress is-large is-success" max="100">60%</progress>


    </div>
  </div>



</section>
