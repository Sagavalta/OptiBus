<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>


  <title>OptiBus | Les bus intelligents</title>
</head>

<body>
  <div class="wrapper">
    <div class="sidebar">
      <img src="img/logoWhite.png" id="logo" alt="OptiBus logo" />
      <ul>
        <li>
          <a href="map.html"><i class="fas fa-map-marked-alt"></i>Carte</a>
        </li>
        <li>
          <a href="profil.html"><i class="fas fa-user"></i>Profil</a>
        </li>
        <li>
          <a href="qr.html"><i class="fas fa-qrcode"></i>QR Code</a>
        </li>
        <li>
          <a href="boutique.html">
            <i class="fas fa-shopping-basket"></i>Boutique</a>
        </li>
      </ul>
      <div class="social_media">
        <a href="https://www.linkedin.com/in/lucas-masson-/"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.facebook.com/OptiBus-104185124802477"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/_optibus_transport/?hl=fr"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="container-fluid main_content">
      <div class="info">
        <div id="selector">
          <h2>Itinéraire</h2>
          <h3>Départ ➜ Arrivée</h3>
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
              <div class="btn-group btn-group-vertical" data-toggle="buttons">
                <label class="btn btn-lg btn-block well">
                  <input type="radio" name="options" id="option1" /> 08H00 ➜
                  09H00
                </label>
                <label class="btn btn-lg btn-block well">
                  <input type="radio" name="options" id="option2" /> 09H00 ➜
                  10H00
                </label>
                <label class="btn btn-lg btn-block well">
                  <input type="radio" name="options" id="option3" /> 10H00 ➜
                  11H00
                </label>
              </div>
            </div>
          </div>
        </div>
        <div id="newsletter">
          <h2>Newsletter</h2>
          <h3>Restez informés sur la sortie du service!</h3>
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center">

              <form id="contact-pro-form" name="contact-pro-form" action="indexFormProContact.php" method="POST">

                <div class="col-md-9">
                  <div class="md-form mb-0">
                    <label for="emailPro" class="mt-4">Email</label>
                    <input type="email" id="emailPro" name="emailPro" class="form-control"
                      pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})"
                      placeholder="exemple@email.fr" required>
                  </div>
                </div>

            <div class="text-center">
              <button type="submit" class="btn btn-success" style="width:250px;">Envoyer</button>
            </div>

            </form>

          </div>
        </div>
      </div>
      <iframe scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas"
        src="https://maps.google.com/maps?hl=en&amp;q=%20Courbevoie+(La%20D%C3%A9fense)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
        frameborder="0"></iframe>
    </div>
  </div>
  </div>

  <div class="loader-wrapper">
    <span class="loader"><img src="img/loader.gif" class="" alt="..." style="object-fit:cover"></span>
  </div>
  <script>
    $(window).on("load", function () {
      $(".loader-wrapper").fadeOut("slow");
    });
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS, then FontAwesome -->
  <!-- <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>

</html>