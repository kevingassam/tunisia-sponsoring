<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - HermanDesign</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://hermandesign.fr/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            padding: 20px;
            width: 100%;
            text-align: center;
        }
        .glass-effect img {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }
        .glass-effect input[type="text"],
        .glass-effect input[type="password"],
        .glass-effect input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        .glass-effect button {
            width: 100%;
            padding: 10px;
            background-color: #fed000;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .glass-effect button:hover {
            background-color: #e5b800;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="glass-effect">
                    <img src="https://hermandesign.fr/images/logo.png" alt="HermanDesign Logo">
                    <form action="login_process.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
