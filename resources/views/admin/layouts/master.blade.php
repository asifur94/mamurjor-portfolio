<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.layouts.sections.styles')
</head>
  <body class="with-welcome-text">

  @yield('maincontent')

  @if (session()->has('flasher'))
    @include('flasher::message')
@endif

@yield('scripts')

    @include('admin.layouts.sections.scripts')
  </body>
</html>
