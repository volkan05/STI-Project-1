<?php

    session_start();

    // Vérifie si le user est déjà co
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }

    require_once "connection.php";

    $login = $password = "";
    $login_err = $password_err = "";

    // Traite le formulaire
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Vérifie le champ user
        if(empty(trim($_POST["login"]))){
            $login_err = "Entrez le login";
        } else{
            $login = trim($_POST["login"]);
        }
        // Vérifie le champ mot de passe
        if(empty(trim($_POST["password"]))){
            $password_err = "Entrez votre mot de passe";
        } else{
            $password = trim($_POST["password"]);
        }

        // S'il n'y a pas d'erreur, on se connecte à la base de données
        if(empty($login_err) && empty($password_err)) {
            // Va récupérer le user de la bdd
            $sql = "SELECT id_login, login, password, valide, nom_role FROM Utilisateur 
                    INNER JOIN Role ON Utilisateur.id_role = Role.id_role";

            $stmt = $pdo->query($sql);
            $tabUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $userExist = 0;
            $userValid = 0;
            $role = 0;
            $id_login = 0;
            foreach ($tabUsers as $user) {
                if ($user['login'] == $login) {
                    $hashed_password = $user['password'];
                    $userExist = 1;
                    $userValid = $user['valide'];
                    $role = strtolower($user['nom_role']);
                    $id_login = $user['id_login'];
                    break;
                }
            }

            if ($userExist) {
                if(password_verify($password, $hashed_password)){
                    if($userValid){
                        // Password is correct, so start a new session
                        session_start();

                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["isNotAdmin"] = 1;
                        if(strpos($role, 'admin') === 0) {
                            $_SESSION["isNotAdmin"] = 0;
                        }
                        $_SESSION["id"] = $id_login;
                        $_SESSION["login"] = $login;

                        // Redirect user to welcome page
                        header("location: login.php");
                    }
                    else{
                        echo "Compte non-valide !";
                    }
                } else{
                    // Display an error message if password is not valid
                    $password_err = "Le mot de passe entré n'est pas valide";
                }

            } else {
                $login_err = "Pas de compte trouvé avec ce user ";
            }
            
            // Fermeture du statement
            unset($stmt);
        }
        // Fermeture de connection
        unset($pdo);
        }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Messagerie - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Veuillez vous connecter</h1>
                  </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">                        <div class="form-group <?php echo (!empty($login_err)) ? 'has-error' : ''; ?>">
                            <div class="form-group <?php echo (!empty($login_err)) ? 'has-error' : ''; ?>">
                                <label>login</label>
                                <input type="text" name="login" class="form-control" value="<?php echo $login; ?>">
                                <span class="help-block"><?php echo $login_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Login">
                            </div>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
