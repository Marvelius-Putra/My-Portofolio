<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ ('css/college.css') }} ">
  <link rel="stylesheet" type="text/css" href="{{ ('css/variable-color.css') }} ">
  <link rel="stylesheet" type="text/css" href="{{ ('css/search.css') }} ">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>College</title>
</head>
<body>
  <x-navbar></x-navbar>

  <div id="college-box">
    <div id="college">
      <div id="college-title">
        <header>
          <h1>College Experience</h1>
        </header>       
      </div>  

      <div id="search-filter">
        {{-- <x-search></x-search> --}}
      {{-- dropdown --}}      
        <div class="dropdown">
          {{-- <button onclick="myFunction()" class="dropbtn">Search Tags <i class="fa fa-caret-right rotate"></i></button> --}}
          <div id="search-box">
            <form action="/search" method="get">
              <input name="keyword" onclick="myFunction()" class="searching" type="search" placeholder="Search..." aria-label="Search"  id="myInput" onkeyup="filterFunction()"/>
              <button class="btn-search" ><i class="fa fa-search"></i></button>
            </form>
          </div> 
          <div id="myDropdown" class="dropdown-content">                 
            @foreach($getTag as $t)    
            <a href="/search?keyword={{$t}}">{{$t}}</a>
            @endforeach          
          </div>
        </div>
      </div>
      

      <div id="college-section">
        @foreach($college as $c)
        <div class="college-content">
          <img src="{{ url('public/images/Experience/'.$c->image)}}" alt="">
          <div class="title-tag">
            <h2>{{$c->name}}</h2>
            <div class="tags">
              <h5>{{$c->tags}}</h5>
            </div>            
          </div> 
          <p>{{$c->header}}</p>
          <div class="btn-content">
            <a href="/description/{{$c->id}}">View Details</a>
          </div>
        </div>
        @endforeach

        {{-- <div class="college-content">
          <img src="{{ asset('public/images/work.png')}}" alt=""> 
          <h2>Summer Class</h2>                  
          <p>A live Geolocation app for finding tweets and twitter users around you.</p>
          <div class="btn-content">
            <a href="#">View Details</a>
          </div>
        </div>

        <div class="college-content">
          <img src="{{ asset('public/images/Experience/HCI responsi UAS.jpg')}}" alt="">
          <h2>Summer Class</h2>
          <p>A live Geolocation app for finding tweets and twitter users around you.</p>
          <div class="btn-content">
            <a href="#">View Details</a>
          </div>
        </div>

        <div class="college-content">
          <img src="{{ asset('public/images/Experience/HCI responsi UAS.jpg')}}" alt="">
          <h2>Summer Class</h2>
          <p>A live Geolocation app for finding tweets and twitter users around you.</p>
          <div class="btn-content">
            <a href="#">View Details</a>
          </div>
        </div> --}}
      </div>     
    </div>
  </div>
  <script src="{{ asset('js/college.js') }}"></script>
</body>
</html>