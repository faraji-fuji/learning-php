<?php 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='style.css' rel='stylesheet' type='text/css'>
    <title>Serving Different Content</title>
</head>
<body>
    <div id="wrapper">
        <header class="both">
            <h1>NoneSuch Club</h1>
            <p>Welcome one and all to an exclusive club for PHP developers. 
                So exclusive it doesn't exist!
            </p>
        </header>

        <section class="non-members">
            <h2>Become a member</h2>
            <p>Useful information for non-members. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem recusandae maiores repellat officiis illum, animi excepturi fugit sint minima laudantium?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quia porro sapiente impedit placeat maxime, pariatur modi dignissimos exercitationem dolores.</p>
        </section>

        <section class="members">
            <h2>Member's News</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, commodi, molestias quo in dolores libero modi corporis veritatis eligendi explicabo facilis!</p>
            <ul>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur.</li>
            </ul>
        </section>

        <section>
            <div class='both'>
                <h3>About this club</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum voluptate veritatis sunt.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum similique, eum quasi fugit laborum in.</p>
            </div>

            <div class='members'>
                <h3>Information for members only</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deserunt molestias rerum aliquam fugit temporibus voluptates doloribus officiis.</p>
            </div>
        </section>

        <footer>
            <p>&copy; 2015 NoneSuch Club</p>
        </footer>
    </div>
</body>
</html>

?>