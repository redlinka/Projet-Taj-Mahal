        <footer>
            <form method="POST" action="">        <h2>Connexion</h2>
            <label for="login">Nom d'utilisateur ou adresse mail</label><br>
            <input type="text" name="login" placeholder="Entrez votre login..."  id="login" required><br><br>
            <label for="login">Mot de passe</label><br>
            <input type="password" name="password" placeholder="Entrez votre mot de passe..." id="pass" required><br><br>
            <input type="submit" value="Se connecter" id="submitBtn">
        </form>
        <?php
            session_start();

            // si l'utilisateur vient de remplir tout le form 
            if (!empty($_POST['login']) && !empty($_POST['password'])){

                // recup des info user
                $login = $_POST['login'];
                $password = $_POST['password'];

                $stmt = $cnx->prepare("SELECT * FROM admin WHERE login = :login");
                $stmt->execute(['login' => $login]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user && password_verify($password, $user['password'])) {
                    // si les credantials correspondent
                    // on connecte l'utilisateur en mettant ces 
                    // credantials dans la session 
                    $_SESSION['nom'] = $user['nom'];
                    echo "<p class='success'>Bienvenue, " . htmlspecialchars($user['nom']) . " !</p>";

                    header('refresh:0');
                }
                // si les credantials ne correspondent pas
                else {
                    echo "<p class='error'>Login ou mot de passe incorrect</p>";
                }
            } 
        ?>
        </footer>
    </body>
</html>