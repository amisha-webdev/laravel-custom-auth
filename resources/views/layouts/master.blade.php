   @include('partials.header')

   <title>@yield('title', 'Masterlayout')</title>

   @include('partials.styles')

   <body class="bg-light">
       <!-- Layout wrapper -->

       <div class="layout-wrapper layout-content-navbar">
           <div class="layout-container">

               <!-- Menu -->
               @include('partials.sidebar')
               <!-- / Menu -->

               <!-- Layout container -->
               <div class="layout-page">

                   <!-- Navbar -->
                   @include('partials.navbar')
                   <!-- / Navbar -->

                   <!-- Content wrapper -->
                   <div class="content-wrapper">

                       <!-- Content -->
                       @yield('content')

                       <!-- Footer -->
                       @include('partials.footer')
                       <!-- / Footer -->

                       <div class="content-backdrop fade"></div>
                   </div>
                   <!-- Content wrapper -->
               </div>
               <!-- / Layout page -->
           </div>

           <!-- Overlay -->
           <div class="layout-overlay layout-menu-toggle"></div>
       </div>
       <!-- / Layout wrapper -->

       @include('partials.script')


   </body>

   </html>
