<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>



<body>
    <h1>GET</h1>

    <?php include 'menu.php' ?>

    <p> <a href="get2.php?nom=Kiki&age=44">GET2</a></p>

    <h1>POST</h1>

    <form action="post2.php" method="post">
        Nom : <input type="text" name="nom"><br>
        Age : <input type="number" name="age"><br>
        <button type="submit">Envoyer</button>
    </form>

    <!-- <?php  echo "Hello From post2, je suis ". $_POST['nom']." et j'ai ". $_POST['age']."ans."; ?> -->

</body>

</html>