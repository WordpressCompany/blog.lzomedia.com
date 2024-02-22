@extends('layouts.app')

@section('content')

  <div class="grid md:grid-cols-2 gap-8 w-full max-w-screen-xl mx-auto p-4 md:py-8">
    @while(have_posts()) @php(the_post())

    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])

    @endwhile


    {!! get_the_posts_navigation() !!}
  </div>

@endsection

