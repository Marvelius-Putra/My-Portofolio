<link rel="stylesheet" type="text/css" href="{{ ('css/navbar.css') }} ">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap');
  </style>
<link rel="stylesheet" type="text/css" href="{{ ('css/variable-color.css') }} ">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">

{{-- -----------------------------Navbar-------------------------- --}}
<nav>
  <div class="navbar">
    <div class="logo">
      <img src="{{ asset('public/images/logo.png') }}" alt="" class="logo-img">
      <h1>MPK</h1>
    </div>       
    

    <div class="navlinks">      
      <ul>
        <li>
          <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
          </div>
        </li>
        <li><a href="/home">Home</a></li>
        <li><a href="/about">About Me</a></li>
        <li><a href="/portofolio">Portofolio</a></li>
        <li><a href="/contact">Contact</a></li>          
      </ul>
    </div>
  </div>
</nav>
<script src="{{ asset('js/theme.js') }}"></script>
{{-- ----------------------------- End of Navbar -------------------------- --}}