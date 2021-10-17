<!DOCTYPE html>
<html>

<head>
    <?php include('header.php') ?>
    <?php
    session_start();
    if (isset($_SESSION['login_id'])) {
        header('Location:home.php');
    }
    ?>
    <title>Login | Quiz pour candidats</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body id='login-body' class="bg-light">


    <div class="card col-md-4 offset-md-4 mt-4">
        <div class="container">
            <div style="text-align:center; font-size:18px;margin-top:10px">Connexion <br> <i
                    class="fa fa-user fa-2x"></i></div>
        </div>
        <div class="card-body">
            <form id="login-frm">
                <div class="form-group">
                    <label>Username</label>
                    <input type="username" name="username" class="form-control" placeholder="Entrer votre username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Entrer votre password">
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-primary btn-block" name="submit">Login</button>
                </div>
                Pas encore inscrit ? Cliquer <a href="back/registreCandidat.php">Ici</a>

            </form>
        </div>
    </div>

</body>

<script>
$(document).ready(function() {
    $('#login-frm').submit(function(e) {
        e.preventDefault()
        $('#login-frm button').attr('disable', true)
        $('#login-frm button').html('Patienter...')

        $.ajax({
            url: './login_auth.php',
            method: 'POST',
            data: $(this).serialize(),
            error: err => {
                console.log(err)
                alert('An error occured');
                $('#login-frm button').removeAttr('disable')
                $('#login-frm button').html('Login')
            },
            success: function(resp) {
                if (resp == 1) {
                    location.replace('home.php')
                } else {
                    alert("Incorrect username or password.")
                    $('#login-frm button').removeAttr('disable')
                    $('#login-frm button').html('Login')
                }
            }
        })

    })
})
</script>

</html>