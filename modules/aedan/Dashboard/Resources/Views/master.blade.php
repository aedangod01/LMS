<!DOCTYPE html>
<html lang="en">
@include('Dashboard::layouts\head')
<body class="bg-gray-100">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
  @include('Dashboard::layouts.sidebar')

    <!-- Main Content -->
    <div class="flex-1">
      <!-- Header -->
      @include('Dashboard::layouts.header')


      <!-- Content -->
      @yield('content')
    </div>
  </div>

  <!-- JavaScript to toggle sidebar -->
    @include('Dashboard::layouts.js')
</body>
</html>