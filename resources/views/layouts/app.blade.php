<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/terminal.css@0.7.4/dist/terminal.min.css" />
    <style>
      .p{
        margin-bottom: 3vh;
      }
    </style>
    @php(do_action('get_header'))
    @php(wp_head())
  </head>

  <body class="dark:bg-gray-900 antialiased" @php(body_class())>
    @php(wp_body_open())
    @include('sections.header')
    <div id="app" class="flex flex-col min-h-screen">

      <main id="w-full max-w-screen-xl mx-auto p-4 md:py-8" class="main">
        @yield('content')
      </main>

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  </body>
</html>
