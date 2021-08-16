<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Our First Form</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem eum facere itaque iusto repellat! Deserunt possimus recusandae similique. Error, pariatur? </p>
            <p>
                <?php if(isset($_GET['fname']) && !empty($_GET['fname']) ): ?>
                First name: <?php echo $_GET['fname'];  ?> <br/>
                <?php endif; ?>

                <?php if(isset($_GET['lname']) && !empty($_GET['lname'])  ): ?>
                Last name: <?php echo $_GET['lname']; ?> <br/>
                <?php endif; ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form action="">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">

                <label for="lname" >Last Name</label>
                <input type="text" name="lname" id="lname">

                <div>
                    <input type="checkbox" name="cb1" id="cb1">
                    <label for="cb1" class="label-inline" >Some Checkbox</label>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>