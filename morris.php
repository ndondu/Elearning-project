<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container p-5">
   1. <input type="checkbox" id="id"> <p>click here</p>
        <script>
            $('#id').click(function(event) {
                var proceed = confirm("Your are about to depoit with bonus. For more info about bonus, click the link t&c bonus.");
                if (proceed) {

                } else {
                    var $checkbox = $(this);
                    setTimeout(function() {
                        $checkbox.removeAttr('checked');
                    }, 0);

                    event.preventDefault();
                    event.stopPropagation();
                }
            });
        </script>

   2. <input type="checkbox"  data-bs-toggle="tooltip" data-bs-placement="top" title="Your are about to depoit with bonus. For more info about bonus, click the link t&c bonus."> <p>Hover before click</p>
    </div>


</body>

</html>