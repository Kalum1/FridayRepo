@section('title', 'Home')

@section('content')
@extends('layouts.base')
@extends('layouts.app')
    <section class="hero is-fullheight is-link is-bold">
      <div class="hero-body">
        <div class="container">
          <div class="columns">
            <div class="column is-8-desktop is-offset-2-desktop">
              <h1 class="title is-2 is-spaced">
                <strong>Friday</strong>
              </h1>
              <h2 class="subtitle is-4">
                  Meet <strong>Friday</strong>, the image uploading website for you.
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection

    @section('js')
    <script type="text/javascript" src="lib/main.js"></script>