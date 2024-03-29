<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Burgers</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Nunito+Sans:wght@800&family=Nunito:wght@700;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="styles.css">
</head>
<body> 
   <div class="modal" id="modal">
      <div class="modal_body">
         <div class="modal_close d-f">
            <img src="image/close.svg" id="close_btn" alt="close">
         </div>
         <div class="modal_content">
            <h2> 
               Оставить заявку.
            </h2>
               <p class="modal_description"> 
                  Введите номер, и наш оператор позвонит вам в течение 10 минут в рабочее время.
               </p>
               <p class="modal_worktime">
                  работаем с 11:00 до 22:00
               </p>
            <form action="/" method="get">  
               
               <div class="form_block d-f"> 
                  <input type="text" required placeholder="Ваше имя" id="name" name="name">
                  <input type="text" required placeholder="+7 ( _ _ _) _ _ - _ _ - _ _" id="phone" name="phone">                  
                  <button type="submit" class="submit"> 
                     Позвоните мне 
                     
                     <img src="image/arrow2.svg" alt="arrow2">                     
                  </button>                  
                  <div class="d-f form_politic">
                     <input type="checkbox" required>
                     <p class="form_politic_text">
                          Нажимая кнопку вы соглашаетесь с условиями 
                       <a href="">Политики конфиденциальности</a>  
                     </p>                     
                  </div>
               </div>
            </form>
         </div>      
         <div class="modal_content success_content hidden">
            <h2> 
               УСПЕШНО!!!
            </h2>
               <p class="modal_description" id="success_description"> 
                  
               </p>
               <p class="modal_worktime">
                  Спасибо Вам!
               </p>            
         </div>    
      </div>
   </div>  

   <div class="main">
      <div class="container">   
         <div class="text">
            <h1>  
               <span>работаем с 11:00 до 22:00 </span>  
               Лучшие бургеры  
            </h1>
            
            <p class="text-descr"> Закажи наши фирменные бургеры или собери что-то свое, а&nbsp;наши курьеры доставят за&nbsp;30&nbsp;минут</p>
               <div class="btn">заказать</div>
         </div>
          <div class="visual">
             <div class="bg"> <img src="image/burger.png" class="visual__img" alt="burger"></div>
              
         </div>
      </div>
   </div>
   <div class="banners">
      <div class="container banners__container">
         <div class="banner__left">
            <div class="banner__content">
               <div class="banner__discont">
                  скидка
               </div>
               <h1 class="banner__title">
                  -20%
               </h1>
               <p class="banner__text">
                  При заказе на 3х и более персон мы делаем скидки, 
                  а также предоставляем скидки именинникам
               </p>
            </div>               
         </div>
         <div class="banner__right">
            <div class="banner__content">
               <h2>
                  Бесплатно
               </h2>
               <p class="banner__text">
                  При заказе на сумму 500 рублей и более - доставляем бесплатно
               </p>
               <div class="btn">заказать</div>
            </div>
         </div>         
               
         </div>
      </div>   
   </div>     
    <footer class="site__footer">
      <ul class="footer__menu container">
         <li class="footer__logo-item">
            <img src="image/Icon.svg" class="footer__logo" alt=""> 
         </li>

         <li>
             <h2 class="footer__menu__title">основные ссылки</h2>
             <ul class="footer__submenu">
                 <li><a href="">Меню</a></li>
                 <li><a href="">Заказ и Доставка</a></li>
                 <li><a href="">Методы оплаты</a></li>
                 <li><a href="">Контакты</a></li>
             </ul>
         </li>
         <li>
             <h2 class="footer__menu__title">основная информация</h2>
             <ul class="footer__submenu footer__info">
                 <li>Время<br>
                  ПН - ВС<br>
                  11:00 - 22:00 без перерывов</li>
                 <li><a href=""></a>Адрес<br>
                  Москва, ул. Тверская, 5, вход со двора</li>
                 
             </ul>
         </li>
         <li class="footer__call footer__submenu" >
            <a href="">+ 7 900 787 13-13</a>
            <a href="">+ 7 900 700 14-14</a>
         </li>
    </footer>     
<script src="app.js"></script>
</body>
</html>