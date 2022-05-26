<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form id="myForm">
        <input type="text" id="name"> <br>
        <input type="text" id="city"> <br>
        <input id="sub" type="submit">
    </form>
    

    <script src="./jquery.js"></script>

    <script>

        
        $(document).ready(function(){
            $('#myForm').submit(function(e){
                e.preventDefault()
                var name=$('#name').val();
                var city=$('#city').val();

                $.ajax({
                    url:"adduser.php",
                    method:"DELETE",
                    data:{name,city},
                    success:function(data){
                        console.log(data)
                        // var res=JSON.parse(data);
                        // $('#sub').val("Loading...")

                        // setTimeout(function(){
                        //     $('#sub').val(res.msg)
                        // },10000)
                        

                    }
                })

            })
        })



    </script>
</body>
</html>