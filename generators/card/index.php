<?php
if(!isset($_GET['user_id'])){
    echo "<h1>Error 404</h1>";
} else if(!isset($_GET['server_id'])) {
    echo "<h1>Error 404</h1>";
}else if(!isset($_GET['avatar_id'])) {
    echo "<h1>Error 404</h1>";
}else if(!isset($_GET['user_level'])) {
    echo "<h1>Error 404</h1>";
}else if(!isset($_GET['user_xp'])) {
    echo "<h1>Error 404</h1>";
}else {
    $avatar = $_GET['avatar_id'];
    $id = $_GET['user_id'];
    $xp = $_GET['user_xp'];
    $Level = $_GET['user_level'];
    $maxxp = $_GET['user_level'] * 1.5 * 50;
    $PERCENTO = 100 / $maxxp * $xp;
    echo "<html>
           <head>
           <script type=\"text/javascript\" src=\"html2canvas.min.js\"></script>
           <script>  function capture() {
    html2canvas(document.querySelector(\"#capture\"), {backgroundColor: null}).then(canvas => {
      canvas.onclick = function() {
        canvas.parentElement.remove();
        canvas.remove();

        if(document.getElementById(\"captured\").children.length <= 1)
           document.getElementById(\"captured\").classList.remove(\"shown\");

      };
      var canvas = document.getElementById(\"canvas\");
      var canvas_wrapper = document.createElement(\"div\");
      canvas_wrapper.className = \"canvas_wrapper\";
      canvas_wrapper.appendChild(canvas);
      
      document.getElementById(\"captured\").appendChild(canvas_wrapper);
      document.getElementById(\"captured\").classList.add(\"shown\");
    });
  }
  </script>
  <a class=\"generate\" onclick=\"capture();\">Generate</a>
           <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
           <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
            <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap\" rel=\"stylesheet\">
            
            <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            </head>
            <body onload='capture()'>
            <div id=\"capture\" style=\"padding: 10px; width: 350px; height: 100px; background: #3a3b40\">
                <img src='https://cdn.discordapp.com/avatars/$id/$avatar.png' height='40' width='40' style='position: relative; margin: 2px 2px 2px 2px;   -webkit-border-radius: 50%;-moz-border-radius: 50%;-ms-border-radius: 50%;-o-border-radius: 50%;border-radius: 50%;  '>
                <br />
                <a style='color: orange; font-size: 12px; margin: 20px 8px 5px 8px; text-transform: uppercase; font-family: Poppins;'>$xp   ‍      ‍   /‍   ‍   ‍   ‍   $maxxp ‍        ‍        ‍        ‍        ‍   ‍   ‍   ‍   ‍  ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍   ‍    ‍   $Level Level</a>
                <div class=\"progress\" style='margin: 8px 9px 15px 9px;'>
                  <div class=\"progress-bar progress-bar-striped bg-warning\" role=\"progressbar\" style=\"width: $PERCENTO%; position: relative; margin: 2px 2px 2px 2px; \" aria-valuenow=\"$xp\" aria-valuemin=\"0\" aria-valuemax=\"$maxxp\"></div>
                </div>
             </div>
             <div id=\"captured\">
                <p>Generated: </p>
             </div>
             </body>
            </html>";
}