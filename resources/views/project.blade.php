@extends('layouts/main')
<link rel="stylesheet" href="CSS/project.css">

@section('container')
<div class="contain">
    <h1>Past Project Experience</h1>
    <span>Explore the oproject i've worked on so far</span>

    <div class="listProject">
        <div class="card">
            <img src="Foto/Portofolio.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Portofolio</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="https://github.com/alviandap/Portofolio" class="btn btn-primary">Get Code</a>
            </div>
        </div>

        <div class="card">
            <img src="Foto/LaptopPintar.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">SiLepi</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="https://github.com/alviandap/SiLepi" target="_blank" class="btn btn-primary">Get Code</a>
            </div>
        </div>

        <div class="card">
            <img src="Foto/LingkarBudaya.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Lingkar Budaya</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="https://github.com/alviandap/LingkaBudaya" target="_blank" class="btn btn-primary">Get Code</a>
            </div>
        </div>
    </div>
</div>

@endsection