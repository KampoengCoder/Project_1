@include('partials.head')

<body>


<div class="container">

@yield('container')


</div>



  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/auth.js') }}"></script>
</body>