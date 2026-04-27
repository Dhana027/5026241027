<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Tugas - Pradhana</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    
    <style>
        body { 
            background-color: #e9ecef; 
            font-family: 'Open Sans', sans-serif;
            padding-top: 60px;
            padding-bottom: 60px;
        }
        
        .menu-box {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            padding: 30px;
            border-top: 5px solid #003366; 
        }

        .header-title {
            font-family: 'Montserrat', sans-serif;
            color: #003366; 
            font-weight: 900;
            font-size: 1.6rem; 
            margin-bottom: 5px;
            letter-spacing: -0.5px;
        }

        .btn-menu {
            font-family: 'Lexend', sans-serif;
            display: block;
            width: 100%;
            background-color: #003366; 
            color: #ffffff;
            padding: 12px 15px;
            margin-bottom: 12px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.2s ease-in-out;
            border: none;
            text-align: left; 
        }

        .btn-menu:hover {
            background-color: #001a33; 
            color: #ffffff;
        }

        .btn-menu i {
            width: 25px;
            text-align: center;
            margin-right: 10px;
            color: #a8cbf2; 
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="menu-box">
                    
                    <div class="text-center mb-4">
                        <h4 class="header-title">Pradhana Tafindya Putra</h4>
                        <p class="text-muted mb-0">NRP 5026241027</p>
                    </div>
                    
                    <hr class="mb-4">

                    <a href="{{ url('/pert1') }}" class="btn-menu">
                        <i class="fas fa-file-alt"></i> Pertemuan 1 - Intro
                    </a>
                    
                    <a href="{{ url('/pert2') }}" class="btn-menu">
                        <i class="fas fa-newspaper"></i> Pertemuan 2 - News
                    </a>

                    <a href="{{ url('/pert2V2') }}" class="btn-menu">
                        <i class="fas fa-newspaper"></i> Pertemuan 2 - News V2
                    </a>
                    
                    <a href="{{ url('/pert3') }}" class="btn-menu">
                        <i class="fas fa-mobile-alt"></i> Pertemuan 3 - Responsive
                    </a>
                    
                    <a href="{{ url('/pert3t') }}" class="btn-menu">
                        <i class="fas fa-tasks"></i> Pertemuan 3 Tugas - Contoh
                    </a>
                    
                    <a href="{{ url('/pert4t') }}" class="btn-menu">
                        <i class="fas fa-keyboard"></i> Pertemuan 4 Tugas - Form
                    </a>
                    
                    <a href="{{ url('/pert5dell') }}" class="btn-menu">
                        <i class="fas fa-laptop"></i> Pertemuan 5 - Dell
                    </a>
                    
                    <a href="{{ url('/pert5link') }}" class="btn-menu">
                        <i class="fas fa-link"></i> Pertemuan 5 - Linktree
                    </a>

                </div>
            </div>
        </div>
    </div>

</body>
</html>