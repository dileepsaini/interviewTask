<!DOCTYPE html>
<html>
<head>
    <?php  $img = public_path('storage/' . $book->front_img);
        $back = public_path('storage/' . $book->back_img);
    ?>
    <style>
        body {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
        }

        .first-page {
            background-image: url(<?php echo $img; ?>);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
        }

        .last-page {
            background-image: url(<?php echo $back; ?>);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
        }

        .middle-page {
            padding: 20px;
            box-sizing: border-box;
        }

        h3 {
            margin-top: 15px;
            margin-bottom: 15px;
            font-weight: 700;
            font-size: 14px;
            color: #000;
        }

        p {
            margin-bottom: 15px;
            text-align: justify;
        }
    </style>
</head>
<body>
    @if ($firstPage)
        <div class="first-page">
            {!! $firstPage !!}
        </div>
    @endif

    @if ($middlePages)
        <div class="middle-page">
            {!! $middlePages !!}
        </div>
    @endif

    @if ($lastPage)
        <div class="last-page">
            {!! $lastPage !!}
        </div>
    @endif
</body>
</html>