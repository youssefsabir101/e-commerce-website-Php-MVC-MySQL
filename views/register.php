<?php
    if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
        Redirect::to("home");
    }
    if(isset($_POST["submit"])){
        $createUser = new UsersController();
        $createUser->register();
    }
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Inscription
                    </h3>
                </div>
                <div class="card-body">
                    <form method="post" class="mr-1">
                        <div class="form-group">
                            <input type="text"
                            class="form-control"
                            name="fullname" required autocomplete="off" placeholder="Nom & Prénom" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" autocomplete="off" class="form-control" name="username" 
                            placeholder="Pseudo" id="">
                        </div>
                        <div class="form-group">
                            <input type="email" autocomplete="off" class="form-control" name="email" 
                            placeholder="Email" id="">
                        </div>
                        <div class="form-group">
                            <input type="password" autocomplete="off" class="form-control" name="password" 
                            placeholder="Mot de passe" id="">
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary">
                                Inscription
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?php echo BASE_URL;?>login" class="btn btn-link">
                        Connexion
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
                                                        
                                                    