@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  
  <div class="link-to-recipes">
    <a href="/recipe">View all recipes</a>
  </div>

  @php
    $args = array('post_type' => 'recipe','posts_per_page'=>'3');
    $recipes = new WP_Query($args);
    
    $args = array('post_type' => 'recipe','posts_per_page'=>'3', 'orderby'=>'comment_count');
    $recipesWithComments = new WP_Query($args);
  @endphp

  @if (! $recipes->have_posts())
    <div class="alert alert-warning">
      {{ __('I`m afraid there are currently no recipies.', 'sage') }}
    </div>
  @endif
  
  <div class="recipe-block">
    <h2>Latest Recipes</h2>
    <p>There are {{ $recipes->post_count }} recipes on the site</p>
    <div class="recipe-container">
      @while($recipes->have_posts()) @php($recipes->the_post())
      <div class="recipe-horiz">
        <a href="@php(the_permalink())">@php(the_title())</a>
      </div>
      @endwhile
    </div>
  </div>


  <div class="recipe-block">
    <h2>Recipes with the most comments</h2>
    <p>There are {{ $recipesWithComments->post_count }} recipes on the site with comments on</p>
    <div class="recipe-container">
      @while($recipesWithComments->have_posts()) @php($recipesWithComments->the_post())
      <div class="recipe-horiz">
        <a href="@php(the_permalink())">@php(the_title())</a>
      </div>
      @endwhile
    </div>
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
