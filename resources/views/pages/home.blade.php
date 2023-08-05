<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ ('css/home.css') }} ">
  <title>Home</title>
</head>
<body>
  <x-navbar>  
  </x-navbar>
  <div class="box">  
    <div class="content">
      <div class="header">
        <h1 class="description">MARVELIUS PUTRA <br>KENARDI </h1>
        <p class="description">Undergraduate School of Computer Science Student <br>
          at Bina Nusantara.</p>
        <div class="button-list">
          <a href="https://drive.google.com/file/d/1m-lO02a9VmQJiOqodFvOnLFqAXlOH1s7/view?usp=sharing"><button class="btn-MyCV">My CV</button></a>
          <a href="/portofolio"><button class="btn-portofolio">Portofolio</button></a>
        </div>
      </div>
      <div class="profile-picture">
        <img src="{{ ('public/images/MyPhoto.png') }}" alt="" class="myPhoto">
      </div>
    </div>    
  </div>  
</body>
</html>