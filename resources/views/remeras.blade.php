@extends('layouts.app')

@section('content')

 <!-- productos -->

 <h2 class="title-cloth">Remeras /</h2>
 <div class="container-home">
   <section class="contenedor-productos">
     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/compactdiscTshirt.jpg" alt="buzo3">
       <h4>CAMPERA ELEMENT HEAVY ZIP <br> $2.299,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
        </div>
     </article>
     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/foofightersTshirt.jpg" alt="buzo3">
       <h4>BUZO BILLABONG COMPANY <br> $1.699,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/ghostbusterTshirt.jpg" alt="buzo3">
       <h4>REMERA BILLABONG SURF GOODS TEE <br> $999,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/imaginedragonsTshirt.jpg" alt="buzo3">
       <h4>JEAN CAPTAIN FIN ZUMAT <br> $1.890,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/maxiTshirt.jpg" alt="buzo3">
       <h4>ZAPATILLAS CAPTAIN BLACK <br> $1.990,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/nirvanaTshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/panamTshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/planethollywoodTshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/rollingstonesTshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/theclashTshirt.jpg" alt="buzo3">
       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/tshirts/thrillerTshirt.jpg" alt="buzo3">
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
