<!DOCTYPE html>
<html lang="en">
<head>
    @include('sitio.includes.head')
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    @include('sitio.includes.menu')
</nav>
<br><br>
<br>
<br><br><br>
<!-- Masthead-->
<header class="py-5 text-center container">
    @yield('content')
</header>



<!-- Portfolio Section-->

<!-- About Section-->

<!-- Contact Section-->

<!-- Footer-->
<footer class="py-5 my-6 bg-secondary">

    @include('sitio.includes.footer')

</footer>
<!-- Copyright Section-->



@include('sitio.includes.scripts')
</body>
</html>
