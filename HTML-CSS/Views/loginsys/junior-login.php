<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
        <title>connexion</title>
        <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
        <script src="https://kit.fontawesome.com/1e4943776f.js " crossorigin="anonymous"></script>
        <link rel="stylesheet" href="connexion.css">
        <link rel="stylesheet" media="screen and (max-width: 968px)" href="petite_resolution.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
    margin: 0;
    box-sizing:border-box;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}

nav{
    background-color:#43B1F8;
}

nav:after{
    content:'';
    clear: both;
    display:table;
}

nav ul{
    float:right;
    list-style-type: none;
    margin-right:40px;
    position:relative;
}

nav ul li{
    float:left;
    margin:0 10px;
    background-color:#43B1F8;
}

nav ul li a{
    color:white;
    text-decoration: none;
    line-height: 70px;
    font-size:18px;
    padding: 8px 17px;
}

nav ul li a:hover{
    text-decoration: underline;
    font-weight: bold;
}

nav ul ul {
    position: absolute;
    top:90px;
    border-top: 3px solid white;
    opacity: 0;
    visibility: hidden;
    transition: top .3s;
}

nav ul li:hover > ul{
    top: 70px;
    opacity: 1;
    visibility: visible;

}
nav ul ul li{
    position: relative;
    margin:0;
    width: 150px;
    float:none;
    display: list-item ;
    border-bottom: 1px solid white;
}

nav ul ul li a {
    font-size: 10px;

}
 
nav .logo {
    float:left;
    height:auto;
    margin-left:45px;
    width:75px;
  }

nav .bouton{
    display: inline-block;
    padding: 5px 15px;
    margin-left: 20px;
    margin-top: 18px;;
    font-size: 17px;
    color: #43B1F8;
  }

.show,#btn,#btn-1,#btn-2,.icon {
    display:none;
}

@media all and (max-width: 968px) {
    nav ul{
        margin-right:0px;
        float:left;
    }
    nav .logo{
        margin-right: 150px;
        width:90px;
    }
    nav ul li, nav ul ul li {
        display:block;
        width:100%;
    }
    nav ul ul{
        top:70px;
        position:static;
        border-top:none;
        float:none;
        display:none;
        opacity:1;
        visibility: visible;
    }
    nav ul ul a{
        padding-left:40px;
    }
    nav ul ul li{
        border-bottom:none;
    }
    nav ul ul li a{
        font-size:18px;
    }
    .show {
        display:block;
        color:white;
        font-size:18px;
        padding: 0 20px;
        line-height: 70px;
        cursor:pointer;
    }
    .show:hover{
        text-decoration: underline;
        font-weight: bold;
    }
    .icon{
        display:block;
        color:white;
        position: absolute;
        right:40px;
        line-height: 90px;
        font-size:35px;
        cursor:pointer;
    }
    .show + a, ul{
        display: none;
    }
    [id^=btn]:checked + ul{
        display: block;
    }
}



#content
{
    border:2px #000000 solid;
    border-radius:20px/20px;
    width: 500px;
    height: 450px;
   margin-left:32.5em;
   margin-top: 8.5em;
    background-color:white;
}



#identifiant1,#identifiant,#mot_de_passe1,#mot-de-passe
{
    display: flex;
    justify-content: space-between; 
    font-family: "Arima Madurai Black";   
}
#identifiant1
{
    position: relative;
    left:2em;
    top:11.3em;
     font-family: "Arima Madurai Black";
}
#identifiant
{
    position: relative;
    top:12.9em;
    left:6.5em;
    width: 275px;
}
#form1
{
    display: flex;
    padding: 10px;
    position: relative;
    top:-50px;
}
#mot_de_passe1
{
    position: relative;
    top:11.4em;
    left:2em;
     font-family: "Arima Madurai Black";
}
#mot-de-passe
{   
    width: 275px;
    position: relative;
    left: 5.2em;
    top:11.7em;
    padding: 1px;
}
#form2
{
     display: flex;
    padding: -2px;

}

.eyes input
{
    width:293px;
    margin:auto;
}
.eyes i
{
    position:relative;
    left:26.8em;
    top:8.2em;
    cursor: pointer;
}
.eyes i.active::before
{
    content:'\f070';
    color:red;
}
#post1
{
    position:relative;
    top:10.4em;
    left:1em;
}
#toi
{
    position: relative;
    top:12.8em;
    left:5em;    
}
p a 
{
    list-style-type: none;
    text-decoration: none;
     color:black;
     font-family: "Arima Madurai Black";
}

#abstract
{
    position:relative;
    top:15.8em;
    left:27em;
    font-family: "Arima Madurai Black";
    
}
h1
{
    position:relative;
    top:65px;
    left: 125px;
    padding:1px;
font-family: "Arima Madurai Black";
text-shadow: 5px 5px 5px #43b1f8;
    }

input, textarea
{
    color: black;
}
input
{
background-color:#8FAFC1;
}

/* responsive: changing the top navbar flexbox in column */
@media all and (max-width: 968px)
 {
    
    #content
    {
     margin-left:6.5em ;
     margin-top:4em;
    }
    }
        </style>
    </head>
    <body>
            <header>
<nav>
            <img class="logo" src="logo.png">
            <label for="btn" class="icon">
                <span class="fa fa-bars"></span>
            </label>
            <input type="checkbox" id="btn">
                <ul>
                    <li>
                    <label for="btn-1" class="show">Accueil +</label>
                    <a href="acceuil.html">Accueil <i class="fas fa-caret-down"></i></a>
                    <input type="checkbox" id="btn-1">
                    </li>
                    <li>
                    <label for="btn-2" class="show">MédicoBot +</label>
                    <a href="#produits">MédicoBot <i class="fas fa-caret-down"></i></a>
                    <input type="checkbox" id="btn-2">    
                    </li>      
                    <li><a href="#questions">Ecologie</a></li>
                    <li><a href="#apropos">A propos</a></li>
                    <li><button class="bouton">Connexion</button></li>
                </ul>
            </nav>
            </header>
           <section>
                <div id="content">
                    <h1>CONNECTEZ-VOUS</h1>
                    <form method="post" action="#">
                            <p id="form1">
                                <label  for="identifiant" id="identifiant1">USERNAME</label>
                                <input type ="text" name="identifiant" maxlength="20" id="identifiant"/>
                            </p>
                                <p id="form2">
                                    <label  for="mot-de-passe" id="mot_de_passe1">MOT DE PASSE</label>
                                    <div class="eyes">
                                    <input type ="password" name="mot de passe" maxlength="20" id="mot-de-passe"/>
                                                <i class="fa-solid fa-eye"></i>
                                    </div>
                                </p>
                                   
                                <input  type="submit" value="connexion" id="abstract"/>
                                
            </form>
                    <p id="post1"><a href="mot de passe1.html">mot de passe oublier?</a></p>
                            <p id="toi"><a href="inscription1.html">incription</a></p> 
                        <script>
                            let input = document.querySelector('.eyes input');
                            let showBtn = document.querySelector('.eyes i');
                            showBtn.onclick =function(){
                                if(input.type === "password"){
                                    input.type = "text";
                                    showBtn.classList.add('active');
                                }else {
                                    input.type = "password";
                                    showBtn.classList.remove('active');
                                }

                            }


                        </script>
                         <!- script est utiliser pour d'ecrire ce que la machine feras lors de l'entrer et la visualisation d'un mot de passe  >
                </div>
            </section>
    
  </body>
</html>