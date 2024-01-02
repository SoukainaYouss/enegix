<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="enegix.css">
</head>

<body>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $ville = $_POST["ville"];
    $state = $_POST["state"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;
        $mail->Username = 'soukainayouss03@gmail.com';  
        $mail->Password = 'qral qxvg wchq xrly'; 
        $mail->SMTPSecure = 'ssl';  
        $mail->Port = 465;  

       
        $mail->addAddress('soukainayouss03@gmail.com');
        $mail->setFrom($email, "$nom $prenom");

     

        $mail->Subject = "Nouveau message de $nom $prenom";
    $telephone = $_POST["telephone"];
        $mail->Body = "Email: $email\nNom: $nom\nPrenom: $prenom\nTelephone: $telephone\nVille: $ville\nType: $state\nSujet: $sujet\nMessage:\n$message";

        $mail->send();
        echo 'Email has been sent successfully!';
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>



    <div>
        <div class="navbars">
            <nav class="Nav-1">
                <div class="info-1">
                    <p><i class="fa-solid fa-location-pin"></i> 101, Avenue, New York, NY 10018 US</p>
                    <p><i class="fa-solid fa-clock"></i> 212 396 5575, 212 524 458</p>
                </div>
                <div class="info-2">
                    <p><i class="fa-solid fa-clock"></i> Mon-Sat, 8.00-18.00. Sunday CLOSED</p>
                </div>
            </nav>
            <nav class="Nav-2">
                <div class="conte-nav">
                    <img src="./images/logo.png" alt="Enegix">
                    <button class="navbar-toggle" id="navbarToggleBtn">&#9776;</button>
                    <ul class="cont" id="navbarContent">
                        <li><a id="nv" href="enegix.html">Acceuil</a></li>
                        <li class="nav-item dropdown">
                            <a id="nv" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <button class="drop"><a class="dropdown-item" href="service1.html">Service
                                        1</a></button>
                                <button class="drop"><a class="dropdown-item" href="#">Service 2</a></button>
                                <button class="drop"><a class="dropdown-item" href="#">Service 3</a></button>
                            </ul>
                        </li>
                        <li><a id="nv" href="#">News</a></li>
                        <li><a id="nv" href="blog.html">Blog</a></li>
                        <li> <a id="nv" href="contact.php">Contacts</a></li>
                        <li><a id="nv" href="#">Devis</a></li>
                    </ul>
                </div>
            </nav>

        </div>
        <div class="contServ">
            <div class="titleServ">
                <h1>Contacter nous</h1>
            </div>
            <div class="descServ">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima dolorum enim! Veniam assumenda
                    nesciunt veritatis error aliquid facilis incidunt magni doloremque? Repudiandae cupiditate
                    aspernatur sint rem inventore optio labore!</p>
            </div>

        </div>

        <div class="about">
            <div class="about-content">
                <div class="grid-container">
                    <div class="image-container">
                        <div class="contactForm">
                            <form class="row g-3" method="post" action="">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nom</label>
                                    <input type="text" class="form-control"  name="nom">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Prenom</label>
                                    <input type="text" class="form-control" name="prenom">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Telephone</label>
                                    <input type="text" class="form-control" name="telephone">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Ville</label>
                                    <input type="text" class="form-control" name="ville">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">type</label>
                                    <select id="inputState" class="form-select" name="state">
                                        <option selected>Choose...</option>
                                        <option>Parti</option>
                                        <option>Proff</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Sujet</label>
                                    <input type="text" class="form-control" id="inputAddress" name="sujet"
                                        placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>



                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Contacter nous</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="content-container">
                        <div class="card-body">
                            <h5 class="card-title">Nos coordonnées</h5>

                            <ul class="items">
                                <h6><strong>Casablanca:</strong></h6>
                                <li><i class="fa-solid fa-location-pin"></i> 60 Grant Ave. Carteret NJ 0708</li>
                                <li> <i class="fa-solid fa-square-phone"></i> (880) 1723801729</li>
                                <li> <i class="fa-regular fa-envelope"></i> example@gmail.com</p>
                                </li>
                                <h6><strong>Rabat:</strong></h6>
                                <li><i class="fa-solid fa-location-pin"></i> 60 Grant Ave. Carteret NJ 0708</li>
                                <li> <i class="fa-solid fa-square-phone"></i> (880) 1723801729</li>
                                <li> <i class="fa-regular fa-envelope"></i> example@gmail.com</p>
                                </li>
                            </ul>




                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="last-info">
            <div class="about-us">
                <h4>About us</h4>
                <div class="line"></div>
                <p>Lorem ipsum dolor sit amet, eu me seo laboramus, iudico dummy text
                    vituperatoribus at usu cum ex nostrud singulis, vis et nibh</p>
                <h6>Subscribe now</h6>
                <div class="input">
                    <input type="text" placeholder="Enter your email here">
                    <span class="input-btn">
                        <button type="submit">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </span>
                </div>
            </div>
            <div class="Latest-posts">
                <h4 id="h4">Latest posts</h4>
                <div class="line"></div>

                <ul>
                    <li><a href="#">If you need a crown or
                            lorem an implant you will pay it gap</a>
                        <h6>July 2, 2014</h6>
                    </li>
                    <li><a href="#">If you need a crown or
                            lorem an implant you will pay it gap</a>
                        <h6>July 2, 2014</h6>
                    </li>
                </ul>

            </div>
            <div class="address">
                <h4>Address</h4>
                <div class="line"></div>
                <p><i class="fa-solid fa-location-pin"></i> 60 Grant Ave. Carteret NJ 0708</p>
                <p><i class="fa-solid fa-square-phone"></i> (880) 1723801729</p>
                <p><i class="fa-regular fa-envelope"></i> example@gmail.com</p>
                <div class="social">
                    <button><i class="fa-brands fa-facebook"></i></button>
                    <button><i class="fa-brands fa-twitter"></i></button>
                    <button><i class="fa-brands fa-google-plus-g"></i></button>
                    <button><i class="fa-brands fa-pinterest"></i></button>
                    <button><i class="fa-brands fa-vimeo-v"></i></button>
                </div>

            </div>
        </div>
        <div class="last">
            <h5><strong>Theme Created By </strong>XXXXX. <strong> All Rights Reserved.</strong></h5>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="enegix.js"></script>
</body>

</html>