
<!DOCTYPE html>
<html lang="en">
        <?php 
                include 'header.php';
        ?>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="\css\style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>

                
                        <p>Введите имя:
                        <input type="text" name="name" class= "name" /></p><br>
                        <p>Контакты:
                        <input type="text" name="tel" class="tel"/></p><br>
                        <button>Отправить</button>
                
                <script>
                $(document).ready(function(){
                        $('button').on('click', function(){
                               var name= $('input.name').val();
                               var tel= $('input.tel').val();
                               
                               $.ajax({ 
                                method: "POST",
                                url: "contacts.php",
                                data: { name: name, tel: tel }
                                })
                                
                                $('input.name').val('');
                                $('input.tel').val('');
                                                                })
                });
                </script>

                <div class="container__box"><h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi impedit, quibusdam assumenda similique quo architecto,
                porro asperiores ratione quia accusantium officia sunt ad ipsam amet autem nesciunt explicabo cupiditate cum.</h1></div>
                <div class="container__box"><h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi impedit, quibusdam assumenda similique quo architecto,
                porro asperiores ratione quia accusantium officia sunt ad ipsam amet autem nesciunt explicabo cupiditate cum.</h1></div>
                <div class="container__box"><h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi impedit, quibusdam assumenda similique quo architecto,
                porro asperiores ratione quia accusantium officia sunt ad ipsam amet autem nesciunt explicabo cupiditate cum.</h1></div>
                <div class="container__box"><h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi impedit, quibusdam assumenda similique quo architecto,
                porro asperiores ratione quia accusantium officia sunt ad ipsam amet autem nesciunt explicabo cupiditate cum.</h1></div>
        

</body>

 <?php   
 include 'footer.php';
?>
</html>



 
