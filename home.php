<?php include 'header.php';?>
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
        
 <?php   
 include 'footer.php';
?>



 
