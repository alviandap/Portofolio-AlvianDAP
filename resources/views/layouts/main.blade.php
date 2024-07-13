<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AlvianDAP | {{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/layout.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="Foto/ALV.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Home') ? 'active' : ''  }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'About') ? 'active' : ''  }}" href="/About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Project') ? 'active' : ''  }}" href="/Project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Experience') ? 'active' : ''  }}" href="/Experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Contact') ? 'active' : ''  }}" href="/Contact">Contact</a>
                    </li>
                </ul>
            </div>
            <a class="iconGithub" href="https://github.com/alviandap?tab=repositories" target="_blank"><img src="/Foto/Github.png" alt="GitHub"></a>

        </div>
        
    </nav>

    <div class="container">
        @yield('container')
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>