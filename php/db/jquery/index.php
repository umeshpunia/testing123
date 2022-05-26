<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>

   <div id="a"></div>

   <button>Click</button>

   <script src="./jquery.js"></script>
   <script>
      $(document).ready(function() {
         // setInterval(function(){
         //    $('#a').load("first.php");
         // },1000)

         $('button').click(function() {

            $.ajax({
               url: "first.php",
               method: "POST",
               data: {
                  name: "umesh"
               },
               success: function(result) {
                  console.log(JSON.parse(result))
               }
            })

         })

      })
   </script>
</body>

</html>