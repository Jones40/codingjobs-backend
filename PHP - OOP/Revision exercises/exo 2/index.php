<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="text" name="name" >Name</label>
        <input type="text" name="name" placeholder="name" >
        <label for="" name="price" >Price</label>
        <input type="number" name="price" step="0.50" min="0" >
        <input type="submit" name="sub1" value="submit">
        <p id="success" ></p>
    </form>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
   </script>

   <script>
      $(function(){
            $('form').submit(function(e) {
                e.preventDefault();

                // Ajax Call
                $.ajax({
                    url: 'addFlowersDB.php',
                    method: 'post',
                    data: $("form").serialize(),
                    dataType:'json',
                })
                .done(function(result){
                    // If Ajax call worked
                    console.log(result);
                    
                    $('#nameError').html('');
                    $('#priceError').html('');
                    if(result.success) {
                        $('#success').html(result.success);
                    } else {
                        $('#nameError').html(result.name);
                        $('#priceError').html(result.price);
                    }
                })
                .fail(function(result) {
                    // Fail means : file not found, 500 errors.
                    // Fail doesn't mean : problem with query, syntax in php
                    console.log('AJAX FAILED FU');
                })
            });
        });
   </script>
</body>
</html>







