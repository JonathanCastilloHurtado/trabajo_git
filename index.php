<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Inicios de sesión recientes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
        <div class="recent-logins">
            <h2>Inicios de sesión recientes</h2>
            <p>Haz clic en tu foto o agrega una cuenta.</p>
            <div class="accounts">
                <div class="account">
                    <img src="imagenes/profe.png" alt="Jonathan">
                    <p>Jonathan</p>
                </div>
                <div class="account">
                    <img src="https://via.placeholder.com/100" alt="Agregar cuenta">
                    <p>Agregar cuenta</p>
                </div>
            </div>
        </div>
      
    </div>
    <center>
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
  </fieldset></center>
  <center><h6>¿Olvidaste tu contraseña?</h6></center>
</form></li>
<center>
 <a class="nav-link active" aria-current="page" href="crearcuenta.php">Crear cuenta nueva</a>
  <center><h6>Crear cuenta nueva
Crea una página para una celebridad, una marca o un negocio</h6></center>
  </center>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 980px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .recent-logins {
            width: 50%;
        }
        .recent-logins h2 {
            font-size: 1.5rem;
            color: #1c1e21;
        }
        .accounts {
            display: flex;
            gap: 15px;
        }
        .account {
            width: 100px;
            text-align: center;
        }
        .account img {
            width: 100%;
            height: 100px;
            border-radius: 8px;
            object-fit: cover;
            border: 1px solid #ccc;
        }
        .login-form {
            width: 40%;
        }
        .login-form form {
            display: flex;
            flex-direction: column;
        }
        .login-form input {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .login-form button {
            padding: 10px;
            font-size: 1rem;
            background-color: #1877f2;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: #165ec9;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #65676b;
        }
        .footer a {
            color: #1877f2;
            text-decoration: none;
        }
    </style>