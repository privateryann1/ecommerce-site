<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" context="width=device-width, initial-scale=1.0">
        <title>Name TBD | Online Store</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/71b9ba01e9.js" crossorigin="anonymous"></script>

    </head>

    <body>

        <?php include 'src/header.php';?>
        <?php include 'src/categories.php';?>

        <div class="small-container">
            <?php include 'src/featured.php';?>
            <?php include 'src/latest.php';?>
        </div>

        <?php include 'src/exclusive.php';?>

        <?php include 'src/testimonial.php';?>

        <?php include 'src/footer.php';?>

        <script>
            var MenuItems = document.getElementById("menuitems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if( MenuItems.style.maxHeight == "0px" ){
                    MenuItems.style.maxHeight = "200px"
                } else{
                    MenuItems.style.maxHeight = "0px"
                }
            }
        </script>

    </body>
</html>