<article class="w-full max-w-screen-xl mx-auto p-4 md:py-8 format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
  <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
    {{ the_title() }}
  </h1>
  <div class="flex items-center mb-6 space-x-2 text-sm text-gray-500 dark:text-gray-400">
    <time datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
    <span aria-hidden="true">&middot;</span>
    <span>{{ $post->reading_time }}</span>
  </div>

  <div class="flex items-center mb-6 space-x-2 text-sm text-gray-500 dark:text-gray-400">
    <span>By</span>
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="hover:underline">{{ get_the_author() }}</a>
  </div>
  <div class="flex flex-wrap mb-6 space-x-2 text-sm text-gray-500 dark:text-gray-400">
    @php(the_tags('', ''))
  </div>
  <div>
    @php(the_content())
  </div>

</article>

