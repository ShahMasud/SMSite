<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
<?php include 'menu.php' ?>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input type="text" name="user" autocomplete="0ff" class="form-control">
            </div>
            <div class="form-group">
                <label>Email id</label>
                <input type="text" name="email" autocomplete="0ff" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="0ff" class="form-control">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comments"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>

        </form>
    </div>
</section>

<footer>
    <h3 class="p-3 bg-dark text-white text-center">@shahmasoodmernstackdeveloperProductions</h3>
</footer>
    
</body>
</html>