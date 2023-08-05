<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=x, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/description.css') }} ">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/variable-color.css') }} ">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }} ">
  <title>Document</title>
</head>
<body>
  <x-navbar></x-navbar>

  <div id="description-box">
    <div id="description-content">
      <div class="prog-img">
        @foreach($college_exp_photo as $p)
        <img class="mySlides" src="{{ url('public/images/Experience/'.$p->image)}}" alt="">        
        @endforeach
        {{-- <img class="mySlides" src="{{ asset('public/images/work.png')}}" alt="">         --}}
        <button class="btn-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="btn-right" onclick="plusDivs(1)">&#10095;</button>
      </div>

      @foreach($college_exp_detail as $d)
      <div class="prog-description">
        <h1>{{$d->name}}</h1>
        <div class="duration-position">
          <div class="duration">
            <h3>{{$d->start_at}}</h3>
            <span></span>
            <h3>{{$d->end_at}}</h3>
          </div>
          <div class="position">
            <h3>{{$d->position}}</h3>
          </div>
        </div>
        <p>{{$d->description}} </p>
      </div>
      @endforeach
    </div>
  </div>
  <script src="{{ asset('js/description.js') }}"></script>
</body>
</html>