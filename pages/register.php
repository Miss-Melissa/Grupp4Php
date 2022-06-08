<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Css länkar -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Styling länkar -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=Playfair+Display&display=swap">
    <link rel="stylesheet" href="./assets/style.css">

    <title>Startsida</title>

    <style>
        form {
            margin: auto;
            margin-top: 3em;
            width: 400px;
            padding: 2em;
            border: solid 1px #ddd;
            border-radius: 1em;
        }

        .login-btn {
            width: 100%;
        }

        .lined-text {
            margin-top: 1.1em;
            margin-bottom: .8em;
            height: 1px;
            border-top: 1px solid #777;
            text-align: center;
            position: relative;
        }

        .lined-text>span {
            padding: 0 .5em;
            color: #777;
            position: relative;
            top: -.8em;
            background: white;
            display: inline-block;
        }

        .error-msg {
            color: red;
        }
        
    </style>
</head>

<body>
    <?php require_once('../scripts/check-login-user.php'); ?>

    <form action="/scripts/post-create-user.php" method="post">
        <h3>Register user</h3>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" required>
            <?php if (isset($_GET['error'])) : ?>
                <div class="error-msg">Username is already taken</div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary login-btn">Register</button>
        <div class="lined-text"><span>OR</span></div>
        <a href="<?= $google_client->createAuthUrl(); ?>" class="btn btn-primary login-btn mt-2"><i class="bi bi-google"></i> Login with google</a>
    </form>

</body>

</html>