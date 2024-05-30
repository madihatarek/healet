<!DOCTYPE html>
<html>

<head>
    @include('includes.head')
</head>

<body>

  {{-- content to pades.. --}}
   @yield('content')

  <!-- info section -->
    @include('includes.info') 
  <!-- end info_section -->

  <!-- footer section -->
  @include('includes.footer')
  <!-- footer section -->

    @include('includes.footerJS')

</body>

</html>