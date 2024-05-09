<!DOCTYPE html>
<html lang="en">

<head>
    <title>First Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php  $img = public_path('storage/' . $frontimg->front_img);
        
    ?>
    <style>

        h1 {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: #ffffff;
            margin: 0;
        }
       
/* 
        .bg {
            width: 100% !important;
            margin: 0px auto;
            background-color: #18181886;
            background-image: url(<?php echo $img; ?>);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100% !important;
        } */

        .container {
            max-width: 1140px;
            width: 100%!important;
        }
        .text-danger{
            color: red;

        }
        .mr-10{
            margin-right: 10px !important;
        }
        .ml-10 {
           margin-left: 50px !important;
        }
        .mt-10{
            margin-top: 10px!important;
        }
    </style>
</head>

<body > 
    <div class="">
        <div class="">
                    <h1 class="text-danger mt-10">{{ $frontimg->book_name }}</h1>
                    <br>
                    <h5 class="text-danger ml-10">{{ $frontimg->author_name }}</h5>
            
        </div>
    </div>
  
</body>
</html>