@extends('layouts/main')
<link rel="stylesheet" href="CSS/home.css">

@section('container')
  <div class="welcome">
    <div class="text">
      <span>Hello World, I'm</span>
      <h1>Alvian Daniswara</h1>
      <span>I'm Full Stack Developer</span>
      <span>Welcome to My Personal</span>
      <a href="CV AlvianDAP.pdf" download class="btn">Download CV</a>
      <div class="sosmed">
        <a href="https://www.instagram.com/alviandnswr/" target="_blank" rel="noopener noreferrer"><img src="Foto/IG.png" alt=""></a>
        <a href="https://www.linkedin.com/in/alviandap/" target="_blank" rel="noopener noreferrer"><img src="Foto/LinkedIn.png"alt=""></a>
        <a href="https://github.com/alviandap?tab=repositories" target="_blank" rel="noopener noreferrer"><img src="Foto/Github.png"alt=""></a>
      </div>

    </div>
    <div class="gambar">
      <img src="foto/Me.jpg" alt="">
    </div>
  </div>
  
@endsection