<?php
        //session_start();
        require '../Settings/bdd.inc.php';
        require '../Settings/mail.inc.php';
        require '../Settings/hash.inc.php';
        if(isset($_COOKIE['connected']))
            header("Location: ../");
        $hashObj = new Hash();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //On prepare notre requêtte SQL
            $sth = $db->prepare("SELECT * FROM users WHERE user= :user AND password = :password");
            //On bind les paramêtres dont on a besoin
            $sth->bindValue(':user', $_POST['form-username'], PDO::PARAM_STR);
            $sth->bindValue(':password', $_POST['form-password'], PDO::PARAM_STR);
            //On execute notre requêtte SQL
            $sth->execute();
            //On compte combien de lignes y'en a dans notre résultat
            $count = $sth->rowCount();
            //Si le nombre de ligne est superieur à 0
            if ($count > 0) {
                //On récupére les resultats
                while ($donnees = $sth->fetch()) {
                    //Si l'email et le mot de passe sont correcte
                    if (($_POST['form-username'] == $donnees['user']) && ($_POST['form-password'] == $donnees['password'])) {
                        $rand = random_int(1000, 9999);
                        
                        
                        $mail->Body = mailBody($rand);
                        //$mail->Body = $htmlbody;
                        $var=$donnees["role"]; //On déclare une variable pour qu'on puisse tester le statut du membre plutard
                        $uid=$donnees["id"]; // On aura besoin de l'id d'utilisateur plutard
                        $email=$donnees["email"]; //On mets dedant le nom et prenom de l'utilisateur
                        $role=$donnees["role"];
                        $mail->addAddress($email);
                        $mail->send();
                        $username=$donnees["user"]; //On recupére l'email d'utilisateur
                        $sth->closeCursor(); //On fermer notre connexion SQL
                        // echo 'ça marche<BR>';
                        //$sid = md5($_POST['email'] . time()); //On hash par le md5 l'email de l'utilisateur avec le temps actuel pour que ça soit difficile à déchifrer
                        // echo $sid;
                        //On prepare notre requêtte pour qu'on puisse metre à jour la table avec le nouveau hash
                        $service = $db->prepare("UPDATE users SET authverif=:rand WHERE email=:email");
                        //On bind les paramêtres dont on a besoin
                        $service->bindValue(':email', $email, PDO::PARAM_STR);
                        $service->bindValue(':rand', $rand, PDO::PARAM_STR);
                        //On execute notre requêtte
                        $service->execute();
                        //setcookie('sid', $sid, time() + 1530); //Ce cookie va nous permettre de savoir si un utilisateur est connecté
                        setcookie('user', $hashObj->hashFunc($username), time() + 1530,'/');//On va utiliser ce cookie dans la partie des commentaires oû on va recuperer le nom d'utilisateur connecté et de le placé dans la base de données des commentaires sans que l'utilisateur le saisie
                        setcookie('email', $hashObj->hashFunc($email), time() + 1530,'/');//On va utiliser ce cookie dans la partie des commentaires oû on va recuperer l'email d'utilisateur connecté et de le placé dans la base de données des commentaires sans que l'utilisateur le saisie
                        setcookie('uid', $hashObj->hashFunc($uid), time() + 1530,'/');//On va l'utiliser plutard dans les commentaires aussi
                        //setcookie('role', $role, time() + 1530);//Ce cookie va nous permettre de savoir qu'un admin est connecté et lui afficher des fonctionalités que l'admin qui a le droit de les voir
                        setcookie('role', $hashObj->hashFunc($role), time() + 1530,'/');
                        ////$_SESSION['connexion_test'] = TRUE; //Session facultatif pour informer l'utilisateur qu'il est bien connecté
                        //$service->closeCursor(); //On ferme notre connexion SQL
                        //header("Location: ../"); //On redérige l'utilisateur vers la page d'acceuil avec un message de succés
                        header("Location: verification.php?uid=".$hashObj->hashFunc($uid));
                        //  break;
                    }
                }
            } else {
                //
                //$_SESSION['connexion_test'] = FALSE; //Sinon la session est à false
               // echo 'lo';
                header("Location: index.php?error=true"); //On redérife vers la même page
               // $_SESSION['connexion_test'] ? 'true' : 'false';
               // var_dump($_SESSION['connexion_test']);
            }
        }
     ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EntrepriseX Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Entreprise X</strong> Login </h1>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                                                <?php
                                                    if(isset($_GET['error']))
                                                        echo "<h4 class=\"text-red\" align=\"center\">Your login informations are not correct</h4>";
                                                ?>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>