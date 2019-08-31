@extends('layouts.app')

@section('content')

 <!-- productos -->
 <h2 class="title-cloth">Buzos /</h2>
 <div class="container-home">
   <section class="contenedor-productos">
     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/armiSweatshirt.jpg" alt="buzo3">
       <h4>CAMPERA ELEMENT HEAVY ZIP <br> $2.299,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
        </div>
     </article>
     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/basicSweatshirt.jpg" alt="buzo3">
       <h4>BUZO BILLABONG COMPANY <br> $1.699,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/black2Sweatshirt.jpg" alt="buzo3">
       <h4>REMERA BILLABONG SURF GOODS TEE <br> $999,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/blackSweatshirt.jpg" alt="buzo3">
       <h4>JEAN CAPTAIN FIN ZUMAT <br> $1.890,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/bluebaticSweatshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/camelSweatshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/yellowSweatshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/ceruleanSweatshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/wineSweatshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/galaxySweatshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/greySweatshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/sweatshirts/toffeeSweatshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>
   </section>
 </div>

 <!-- footer -->
  <div class="container-footer">
     <nav class="main-footer">
        <ul class="footer-flex">
         <li><a href="#">Home</a></li>
         <li><a href="#">Preguntas</a></li>
         <li><a href="#">Sucursales</a></li>
         <li><a href="#">Contacto</a></li>
        </ul>
     </nav>
  </div>
</div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script>
    $('.toggle-nav').click(() => {
      $('.main-nav').slideToggle('slow');
    })
  </script>

@endsection
