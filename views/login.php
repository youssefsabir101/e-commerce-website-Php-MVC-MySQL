<?php
    if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
        Redirect::to("home");
    }
    $loginUser = new UsersController();
    $loginUser->auth();
?>

<style>
        html {
        background-color:#ffbb00;
        }

        .wrapper {
        height: 100vh;
        background-color:#ffbb00;
        }


        body::-webkit-scrollbar {
        width: 10px;
        }
        body::-webkit-scrollbar-track {
            background-color:   #ffcc00;
        }
        body::-webkit-scrollbar-thumb {
            background: #7d5b00;
        }

        a {
        color: #ffcc00;
        display:inline-block;
        text-decoration: none;
        font-weight: 400;
        }
        a:hover {
        color: #7d5b00;
        display:inline-block;
        text-decoration: none;
        font-weight: 400;
        }

        h1 {
        text-align: center;
        font-size: 26px;
        font-weight: 600;
        text-transform: uppercase;
        display:inline-block;
        margin: 35px 8px 10px 8px; 
        color: #ffc116;
        }



        /* STRUCTURE */

        .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column; 
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 0px;
        }

        #formContent {
        -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
        background: #fff;
        padding: 30px;
        width: 90%;
        max-width: 450px;
        position: relative;
        padding: 0px;
        -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
        box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
        text-align: center;
        }

        #formFooter {
        background-color: #f6f6f6;
        border-top: 1px solid #dce8f1;
        padding: 25px;
        text-align: center;
        -webkit-border-radius: 0 0 10px 10px;
        border-radius: 0 0 10px 10px;
        }






        /* FORM */
        .span{
        color: red;
        }
        input[type=submit] {
        background-color: #ffbb00;
        border: none;
        color: white;
        padding: 15px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
        box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        }

        input[type=submit]:hover{
        background-color: #ffc116;
        }

        input[type=submit]:active {
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
        }

        input[type=text],input[type=password],input[type=email] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 80%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        }


        input[type=text]:focus,input[type=password]:focus,input[type=email]:focus {
        background-color: #fff;
        border-bottom: 2px solid #ffc116;
        }


        input[type=text]:placeholder, input[type=password]:placeholder,input[type=email]:placeholder{
        color: #cccccc;
        }



        /* ANIMATIONS */

        .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
        }

        @keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
        }






        @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

        .fadeIn {
        opacity:0;
        -webkit-animation:fadeIn ease-in 1;
        -moz-animation:fadeIn ease-in 1;
        animation:fadeIn ease-in 1;

        -webkit-animation-fill-mode:forwards;
        -moz-animation-fill-mode:forwards;
        animation-fill-mode:forwards;

        -webkit-animation-duration:1s;
        -moz-animation-duration:1s;
        animation-duration:1s;
        }

        .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
        }

        .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
        }

        .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
        }

        .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
        }


        .underlineHover:after {
        display: block;
        left: 0;
        bottom: -10px;
        width: 0;
        height: 2px;
        background-color: #105fb4;
        content: "";
        transition: width 0.2s;
        }

        .underlineHover:hover {
        color: #105fb4;
        }

        .underlineHover:hover:after{
        width: 100%;
        }





        *:focus {
            outline: none;
        } 
</style>  

<div class="wrapper fadeInDown">
    <div id="formContent">
    

    
    <div class="fadeIn first">
        <h1>Login</h1>
    </div>

    
    <form method="POST">


        <input type="text" id="login" class="fadeIn second" name="username"  placeholder="username">
        <input type="password" id="password" class="fadeIn third" name="password"  placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Connexion" name="submit"/>

    </form>

    
    <div id="formFooter">
    <a href="<?php echo BASE_URL;?>register" class="">
                        Inscription
                    </a>
    </div>

    </div>
</div> 
