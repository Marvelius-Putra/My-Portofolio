<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ ('css/portofolio.css') }} ">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  {{-- <link rel="stylesheet" href=
  "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> --}}
  <title>Portofolio</title>
</head>
<body>
  <x-navbar></x-navbar>
{{------------------------------------------------- SKILL SECTION ---------------------------------- --}}
  <div id="portofolio-box">
    <div id="skill">
      <div id="skill-title">
        <header>
          <h1>Skills</h1>
        </header>       
      </div>    
      <div id="skill-sub">
        <i class="fa fa-desktop"></i>   
        <p>Programming Language</p>       
      </div>  
      <div id="skill-list">     
        <div class="progress">
            <div class="progress-bar-name" style="background-color: #2F3E8F; ">C</div>
            <div class="progress-bar-success" style="background-color: rgba(110, 130, 240,0.8); width: 50%;"></div>                      
        </div>

        <div class="progress">
          <div class="progress-bar-name" style="background-color: #B91D1F; ">Java</div>
            <div class="progress-bar-success" style="background-color: #D62225; width: 30%;"></div>                      
        </div>

        <div class="progress">
          <div class="progress-bar-name" style="background-color: #1E415E; ">Python</div>
            <div class="progress-bar-success" style="background-color: #3B77A9; width: 15%;"></div>                      
        </div>        
      </div>

      <div id="skill-sub">
        <i class="fa fa-globe"></i>   
        <p>Web Development</p>       
      </div>  
      <div id="skill-list">     
        <div class="progress">
            <div class="progress-bar-name" style="background-color: #97371E; ">HTML</div>
            <div class="progress-bar-success" style="background-color: #E0542F; width: 50%;"></div>                      
        </div>

        <div class="progress">
          <div class="progress-bar-name" style="background-color: #006495; ">CSS</div>
            <div class="progress-bar-success" style="background-color: #008FD5; width: 30%;"></div>                      
        </div>

        <div class="progress">
          <div class="progress-bar-name" style="background-color: #B8662D; ">Javascript</div>
            <div class="progress-bar-success" style="background-color: #F99D34; width: 15%;"></div>                      
        </div>     
        
        <div class="progress">
          <div class="progress-bar-name" style="background-color: #A7090D; ">Laravel</div>
            <div class="progress-bar-success" style="background-color: #008FD5; width: 15%;"></div>                      
        </div>
      </div>
    </div>
    {{------------------------------------------------- END of SKILL SECTION ---------------------------------- --}}

    {{------------------------------------------------- Experience SECTION ---------------------------------- --}}
    <div id="exp">
      <div id="exp-title">
        <header>
          <h1>Experience</h1>
        </header>
      </div>
      <div id="exp-section">
        <div class="exp-content">
          <a href="/college">
            <img src="{{ asset('public/images/college.png') }}" alt="">
            <h2>College</h2>
          </a>          
        </div>
        <div class="exp-content">
          <a href="#"onclick="return false" style="opacity: 0.3; cursor: default;">
            <img src="{{ asset('public/images/work.png') }}" alt="">
            <h2>Work</h2>
          </a>          
        </div>
      </div>
    </div>
    {{------------------------------------------------- End of  Experience SECTION ---------------------------------- --}}

    {{------------------------------------------------- Project SECTION ---------------------------------- --}}
    <div id="project">
      <div id="project-title">
        <header>
          <h1>Projects</h1>
        </header> 
      </div>

      <div id="project-section">
        <h2>~ COMING SOON ~</h2>
      </div>
    </div>    
  </div>
</body>
</html>