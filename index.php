<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>jQuery - Load data on scroll page</title>
    
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script type="text/javascript">
      $(function(){
        
        // Including li elements
        $("ul").load("ajax.php");
        
        $("#container").scroll(function(){
          if($(this).scrollTop() === $(".list").height() - $(this).height()) {
            var id = $(".list ul li:last").attr("id"); // Get last li's id
            $("#loader").show(); // Show loader div
            $.ajax({
              type: "get",
              url: "ajax.php",
              data: {"id": id},
              success: function(data) {
                $(".list ul").append(data); // Add new elements end of the ul
                $("#loader").hide(); // Hide loader div
              }
            });
          }
        });
      });
    </script>
  </head>
  <body>

    <div id="container">

      <div class="list">
        <ul>
          // Li elements will have been added here.
        </ul>
      </div>

      <!-- Loader div is hidden by default -->
      <div id="loader">LOADING...</div>

    </div>

     <!-- Peace be upon you / ziegfiroyt -->

  </body>
</html>
