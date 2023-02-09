<?php
$firstname = $name = $phone = $mail = $message = $infoRequired = "";
$firstnameError = $nameError = $phoneError = $mailError = $messageError = "";
$isSuccess = false;
$emailTo = "kiketdule@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = verfiInput($_POST["firstname"]);
    $name = verfiInput($_POST["name"]);
    $phone = verfiInput($_POST["phone"]);
    $mail = verfiInput($_POST["mail"]);
    $message = verfiInput($_POST["message"]);
    $isSuccess = true;
    $emailText = "";


    if (empty($firstname)) {
        $firstnameError = "Ton prénom tu dois donner !";
        $isSuccess = false;
    } else {
        $emailText .= "Firstname : $firstname \n";
    }
    if (empty($name)) {
        $nameError = "Ton nom,  renseigner il faut !";
        $isSuccess = false;
    } else {
        $emailText .= "Name : $name \n";
    }
    if (!isPhone($phone)) {
        $phoneError = "Vu la tête du numéro, je ne laisserai pas de message !";
        $isSuccess = false;
    } else {
        $emailText .= "Tel : $phone \n";
    }

    if (empty($phone)) {
        $phoneError = "";
        $isSuccess = false;
    } 
    if (!isEmail($mail)) {
        $mailError = "Vers une mauvaise piste me mènerais-tu ?";
        $isSuccess = false;
    } else {
        $emailText .= "eMail : $mail \n";
    }
    if (empty($mail)) {
        $mailError = "Un droit de réponse j'ai ! et tu auras peut-être envie.";
        $isSuccess = false;
    }

    if (empty($message)) {
        $messageError = "Timide ne sois pas ! Allonge toi, parle et libère toi !";
        $isSuccess = false;
    } else {
        $emailText .= "Message : $message \n";
    }
    if ($firstnameError || $nameError || $mailError || $messageError) {
        $infoRequired = "* Ces informations (et correctes en plus) sont requises !";
    }
    if ($isSuccess) {
        $headers = "From = $firstname $name <$mail> $phone  \r\nReply-To : $mail";
        mail($emailTo, "Un message de votre site", $emailText, $headers);
        $firstname = $name = $phone = $mail = $message = $infoRequired = "";
    }
}

function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}
function isPhone($var)
{
    return preg_match("/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/", $var);
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
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div class="containerForm">
        <div class="heading">
            <h2>Contactez-moi</h2>
        </div>
        <!-- htmlspecialchars protection site -->
        <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">
            <div class="userIdentity">
                <div class="userIdentityFirstName">
                    <label for="firstname">Prénom <span class="blueStar">*</span></label>
                    <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" value="<?php echo $firstname; ?>" />
                    <p class="comments"><?php echo $firstnameError; ?></p>
                </div>
                <div class="userIdentityName">
                    <label for="name">Nom <span class="blueStar">*</span></label>
                    <input type="text" name="name" id="name" placeholder="Votre nom" value="<?php echo $name; ?>" />
                    <p class="comments"><?php echo $nameError; ?></p>
                </div>
            </div>

            <div class="userContact">
                <div class="userContactMail">
                    <label for="mail">Votre adresse mail <span class="blueStar">*</span></label>
                    <input type="text" name="mail" id="mail" placeholder="Votre numéro de adresse mail" value="<?php echo $mail; ?>" />
                    <p class="comments"><?php echo $mailError; ?></p>
                </div>
                <div class="userContactPhone">
                    <label for="phone">Votre téléphone</label>
                    <input type="text" name="phone" id="phone" placeholder="Votre numéro de téléphone" value="<?php echo $phone; ?>" />
                    <p class="comments">
                        <?php echo $phoneError; ?>
                    </p>
                </div>

            </div>
            <div class="userMessage">
                <label for="message">Votre Message <span class="blueStar">*</span></label>
                <textarea type="text" name="message" id="message" placeholder="Votre message" class="form-control" rows="4"> <?php echo $message; ?></textarea>
                <p class="comments">
                    <?php echo $messageError; ?></p>
            </div>

            <div class="infoRequired">
                <h3>
                    <?php echo $infoRequired ?>
                </h3>
            </div>
            <div class="button1">
                <input type="submit" class="btn1" value="Envoyer" />
            </div>
            <div class="thankYou">
                <p class="<?php if (!$isSuccess) echo 'cache'; ?>">😃 Message envoyé, j'y répondrai dès que possible !😃</p>
            </div>
        </form>
    </div>
</body>

</html>