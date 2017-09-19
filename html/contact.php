<?php
if($_POST)
{
    $errors = array();
    //start validation
    if(empty($_POST['first_name']))
    {
        $errors['first_name'] = "Votre prenom ne peut etre vide" ;
    }
    if (empty($_POST['last_name']))
    {
        $errors['last_name'] = "Votre nom ne peut etre vide" ;
    }
    if (empty($_POST['email']))
    {
        $errors['email'] = "Votre mail ne peut etre vide" ;
    }
    if (empty($_POST['phone']))
    {
        $errors['phone'] = "Votre numero ne peut etre vide" ;
    }
    if (empty($_POST['comment']))
    {
        $errors['comment'] = "Votre message ne peut etre vide" ;
    }
    //check errors
    if(count($errors) == 0)
    {
        session_start();
        $_SESSION = $_POST;
        header("Location: send.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<?php include "../_includes/head.php" ?>
<body>

<!-- Navigation bar -->
<?php include "../_includes/navigation.php" ?>

<!-- Contact -->


<div class="container">

    <!-- header -->
    <?php include "../_includes/header.php" ?>

    <form class="well form-horizontal" action="" method="POST"  id="contact_form" >

        <fieldset>

            <!-- Form Name -->
            <legend>Une question ? Une réclamation ?
                Bug Burger est à votre écoute</legend>

            <!-- Text input-->

            <div class="form-group contact">
                <label class="col-md-4 control-label">Prenom</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" placeholder="Prenom" class="form-control"  type="text" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>" />
                        <p><?php if (isset($errors['first_name'])) echo $errors['first_name']; ?></p>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Nom</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="last_name" placeholder="Nom" class="form-control"  type="text" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>" />
                        <p><?php if (isset($errors['last_name'])) echo $errors['last_name']; ?></p>
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Mail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="Mail" class="form-control"  type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" />
                        <p><?php if (isset($errors['email'])) echo $errors['email']; ?></p>
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Phone</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="phone" placeholder="(+33)6-51-15-21-12" class="form-control" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" type="text" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" />
                        <p><?php if (isset($errors['phone'])) echo $errors['phone']; ?></p>
                    </div>
                </div>
            </div>

            <!-- Select Basic -->

            <div class="form-group">
                <label class="col-md-4 control-label">Restaurant concerné</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="state" class="form-control selectpicker" required>
                            <option>Please select your restaurant</option>
                            <option>Bordeaux</option>
                            <option>Lyon</option>
                            <option>La Loupe</option>
                            <option>Paris</option>
                            <option>Toulouse</option>
                            <option>Lille</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Select Basic -->

            <div class="form-group">
                <label class="col-md-4 control-label">Sujet</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="sujet" class="form-control selectpicker" required>
                            <option>Please select your sujet</option>
                            <option>Une réclamation</option>
                            <option>Une question</option>
                            <option>Un partenariat</option>
                            <option>Une réservation de groupe</option>
                            <option>Autre</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Text area -->

            <div class="form-group">
                <label class="col-md-4 control-label">Votre Message</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="comment" placeholder="Votre message" value="<?php if(isset($_POST['comment'])) echo $_POST['comment']; ?>"></textarea>
                        <p><?php if (isset($errors['comment'])) echo $errors['comment']; ?></p>
                    </div>
                </div>
            </div>


            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning" >Send<span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>

        </fieldset>
    </form>
</div><!-- /.container -->


<!-- Scripts -->

<script src="https://use.fontawesome.com/2e8d9444e4.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<!-- Footer -->
<footer>
    <?php include "../_includes/footer.php" ?>
</footer>
</body>
</html>
