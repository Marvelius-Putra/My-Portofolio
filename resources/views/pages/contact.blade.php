<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ ('css/contact.css') }} ">
  
  <title>Contact</title>  
</head>
<body>
  <x-navbar></x-navbar>
  
  <div id="box-contact">
    <div id="contact-medsos">
      <h1>My Social Media</h1>
      <hr>
      <table>
        <tr>          
          <td class="medsos">
            <a href="https://www.instagram.com/marvelius_p/">
              <img src="{{ asset('public/images/instagram.png') }}" alt="">
              <h3>@marvelius_p</h3>  
            </a>        
          </td>

          <td class="medsos">
            <a href="https://www.linkedin.com/in/marvelius-putra-3b48ba213/">
              <img src="{{ asset('public/images/linkedin.png') }}" alt="">
              <h3>Marvelius Putra</h3>  
            </a>        
          </td>         
        </tr>

        <tr>
          <td class="medsos">
            <a href="https://mail.google.com/mail/">
              <img src="{{ asset('public/images/email.png') }}" alt="">
              <h3>marvelius.putra.k@gmail.com</h3>  
            </a>        
          </td> 

          <td class="medsos">
            <a href="https://github.com/Marvelius-Putra">
              <img src="{{ asset('public/images/gitHub.png') }}" alt="">
              <h3>Marvelius-Putra</h3>  
            </a>        
          </td>          
        </tr>
      </table>
    </div>  
    
    <div id="contact-touch">
      <h1>Get in Touch</h1>
      <hr>
      <table>
        <tr>
          <td class="touch" style="background-color: #0B35D9">
            <img src="{{ asset('public/images/phone.png') }}" alt="">
            <h3 style="margin-top: 7px">081910222990</h3>          
          </td>
          <td class="touch" style="background-color: #00A637">
            <img src="{{ asset('public/images/whatsapp.png') }}" alt="">
            <h3 style="margin-top: 9px">081910222990</h3>          
          </td>
          <td class="touch" style="background-color: #D83A00">
            <img src="{{ asset('public/images/small email.png') }}" alt="">
            <h3 style="margin-top: 6px" >@marvelius.putra.k</h3>          
          </td>
          <td class="touch" style="background-color: #36BD2A">
            <img src="{{ asset('public/images/line white.png') }}" alt="" style="width:43px">
            <h3 style="margin-top: 6px">@marvelius_p</h3>          
          </td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>