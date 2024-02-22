

<article class="container" @php(post_class())>

  <div class="entry-summary">
    @php(the_content())

  </div>
  @if ($pagination)
    <nav class="page-nav" aria-label="Page">
      {!! $pagination !!}
    </nav>
  @endif

</article>
