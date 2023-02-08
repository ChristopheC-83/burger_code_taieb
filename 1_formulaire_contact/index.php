<?php
$firstname = $name = $phone = $mail = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = verfiInput($_POST["firstname"]);
  $name = verfiInput($_POST["name"]);
  $phone = verfiInput($_POST["phone"]);
  $mail = verfiInput($_POST["mail"]);
  $message = verfiInput($_POST["message"]);
}

function verfiInput($var)
{
  // on filtre les input pour limiter les hacks
  $var = trim($var);
  $var = stripslashes($var);
  $var = htmlspecialchars($var);
  return $var;
}


?>

<!DOCTYPE html>

<html>

<head>
  <title>Contactez-moi</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style/style.css" />
</head>

<body>
  <div class="containerForm">
    <div class="heading">
      <h2>Contactez-moi</h2>
    </div>
    <!-- htmlspecialchars protection site -->
    <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" role="form">
      <div class="userIdentity">
        <div class="userIdentityFirstName">
          <label for="firstname">Prénom <span class="blueStar">*</span></label>
          <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" value="<?php echo $firstname ?>" />
          <p class="comments">Merci de renseigner votre prénom.</p>
        </div>
        <div class="userIdentityName">
          <label for="name">Nom <span class="blueStar">*</span></label>
          <input type="text" name="name" id="name" placeholder="Votre nom" value="<?php echo $name ?>" />
          <p class="comments">Merci de renseigner votre prénom.</p>
        </div>
      </div>

      <div class="userContact">
        <div class="userContactMail">
          <label for="mail">Votre adresse mail <span class="blueStar">*</span></label>
          <input type="mail" name="mail" id="mail" placeholder="Votre numéro de adresse mail" value="<?php echo $mail ?>" />
          <p class="comments">Merci de renseigner votre adresse mail.</p>
        </div>
        <div class="userContactPhone">
          <label for="phone">Votre téléphone</label>
          <input type="phone" name="phone" id="phone" placeholder="Votre numéro de téléphone" value="<?php echo $phone ?>" />
          <!-- <p class="comments">
              Merci de renseigner votre numéro de téléphone.
            </p> -->
        </div>

      </div>
      <div class="userMessage">
        <label for="message">Votre Message <span class="blueStar">*</span></label>
        <textarea type="text" name="message" id="message" placeholder="Votre message" class="form-control" rows="4"> <?php echo $message ?></textarea>
        <p class="comments">Rien à me dire ? 😭</p>
      </div>

      <div class="infoRequired">
        <h3>
          <span class="blueStar">*</span> Ces informations sont requises !
        </h3>
      </div>
      <div class="button1">
        <input type="submit" class="btn1" value="Envoyer" />
      </div>
      <div class="thankYou">
        <p>😃 Message envoyé, j'y répondrai dès que possible !😃</p>
      </div>
    </form>
  </div>
</body>

</html>