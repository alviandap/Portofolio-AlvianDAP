@extends('layouts/main')
<link rel="stylesheet" href="CSS/about.css">

@section('container')
  <div class="about">
    <div class="card">
        <h3 class="about-title">
            About Me
            <span class="line"></span>
            
        </h3>
        <div class="contain">
            <div class="gambar">
                <img src="Foto/Me.jpg" alt="">
            </div>
            <div class = "text">
                <p>Saya merupakan lulusan bidang informatika dari Universitas Telkom. Saya sangat tertarik dengan IT dan pemrograman. Saya adalah seorang programmer yang terampil dalam PHP dan aplikasi web. Dengan rasa ingin tahu yang tinggi, saya senang mempelajari sesuatu yang baru dalam hidup saya, terutama tentang IT dan bahasa pemrograman.</p>
            </div>
        </div>
    </div>

    <div class="skill">
        <h3 class="about-skill">
            <span class="line"></span>   
            Skills
        </h3>

        <ul class="nav mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="skill-tab" data-bs-toggle="pill" data-bs-target="#skill" type="button" aria-controls="skill" aria-selected="true"><span>Tech Stack</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tools-tab" data-bs-toggle="pill" data-bs-target="#tools" type="button" role="tab" aria-controls="tools" aria-selected="false"><span>Tools</span></button>
            </li>
        </ul>
        

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="skill" role="tabpanel" aria-labelledby="skill-tab" tabindex="0">
                <div class="column">
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/js.png" alt="">JavaScript
                    </button>
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/Python.png" alt="">Python
                    </button>
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/Golang.png" alt="">Golang
                    </button>
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/laravel.png" alt="">Laravel
                    </button>
                </div>
                <div class="column">
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/PHP.png" alt="">PHP
                    </button>
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/Boostrap.png" alt="">Boostrap
                    </button>
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/ReactJS.png" alt="">ReactJS
                    </button>
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/CSS.png" alt="">CSS
                    </button>
                </div>
               
            </div>
        
            <div class="tab-pane fade" id="tools" role="tabpanel" aria-labelledby="tools-tab" tabindex="0">
                <div class="column">
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/MySql.png" alt="">MySql
                    </button>
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/Git.png" alt="">Git
                    </button>
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/GitHubH.png" alt="">GitHub
                    </button>
                    <button class="btn btn-primary" type="submit">
                        <img src="Foto/VCS.png" alt="">Visual Studio Code
                    </button>
                </div>
            </div>
        </div>


    </div>
    
  </div>
  
  
@endsection