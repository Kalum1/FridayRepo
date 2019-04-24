
@section('title', 'Dashboard')
@section('content')
@extends('layouts.base')
@extends('layouts.app')


<section class="hero is-fullheight is-link">
<!--     <div class="hero-body">
        <div class="container">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <p class="title">
                        Welcome, {{ Auth::user()->name }}, to the Dashboard
                    </p>
                  </div>
                </div>
              </div>
            </div> -->          



      <div class="tile is-parent is-vertical">
        <article class="tile is-child notification is-info">
          <p class="title">Welcome, {{ Auth::user()->name }}, to your dashboard</p>




<?php

  $all_files = glob("images/".Auth::user()->name."/*.*");
  for ($i=0; $i<count($all_files); $i++)
    {
      $image_name = $all_files[$i];
            echo '
            <a download="'.$image_name.'" href="'.$image_name.'" title="'.$image_name.'">
             <img class="is-hidden-mobile"src="'.$image_name .'" style="width: 500px; height: 300px;" alt="'.$image_name.'""  />
             <br />
             <img class="is-hidden-desktop is-hidden-tablet"src="'.$image_name .'" style="width: 250px; height: 125px;" alt="'.$image_name.'""  />
             </a>

           ';
    }
?>


        </article>
      </div>



</section>

   
@endsection
@section('js')
<script type="text/javascript" src="lib/main.js"></script>
