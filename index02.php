<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .banco {
        width: 400px;
        height: 400px;
        margin: auto;
        border: 1px solid #000;
    }

    .trang,
    .den {
        width: 50px;
        height: 50px;
        float: left
    }

    .trang {
        background-color: #fff
    }

    .den {
        background-color: #000
    }
</style>

<body>
    <div class="banco">
    <?php

        for($row=1; $row<=8; $row++){
            for($colum=1;$colum<=8;$colum++){
                // if($row%2!=0 && $colum%2!=0 || $row%2==0 && $colum%2==0){
                //     echo '<div class="trang"></div>';
                // }
                if(($row+$colum)%2==0){
                    echo '<div class="trang"></div>';
                }
                else{
                    echo '<div class="den"></div>';
                }
            }
        }

    ?>
        
        
    </div>
</body>

</html>