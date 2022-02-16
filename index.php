<?php

    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Tenetur consequuntur nobis nesciunt obcaecati quos exercitationem deserunt, eaque, vero, 
    magni repellendus eos fugiat similique voluptates amet magnam beatae molestiae minima omnis officiis saepe in dolor.
    Amet molestiae reprehenderit, quod rem error nihil autem? Asperiores eligendi in impedit reprehenderit nostrum?
    Voluptatum excepturi nemo voluptatibus exercitationem ipsam molestias nulla cumque inventore magnam laudantium?
    Ad facere, doloribus neque assumenda molestiae veniam quo id iusto enim nihil atque aspernatur tenetur rem quisquam earum consequuntur quam eveniet quidem libero quis? 
    Placeat nostrum, quo magnam praesentium alias quam vitae reprehenderit nulla, dicta eligendi ullam doloremque odio enim?";

    $censuredText = $text;

    if (isset($_GET['censura'])){
        $censuredText = str_ireplace($_GET['censura'], "***", $text);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p><?php echo $censuredText ?></p>

    <input type="text" id='badwords' placeholder="Parola/e da censurare:" value="">
    <a id='filter_link' href="?censura" class="btn">Censura</a>
</body>

    <script type='text/javascript'>

        var input = document.getElementById("badwords");
        var a = document.getElementById('filter_link');

        a.addEventListener('click', function(){

            console.log("href", a.getAttribute('href'));
            console.log("input", input.value);
            a.setAttribute('href', a.getAttribute('href')+"="+input.value);
        });

    </script>
</html>