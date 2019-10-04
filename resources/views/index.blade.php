@extends('layouts.app')

@section('content')
 <!-- banner -->
 <section class="banner">
   <img src="images/portada1.jpg" alt="banner">
 </section>

 <!-- productos -->
 <div class="container-home">
   <section class="contenedor-productos">

     <article class="bigProduct">
       <div class="foto-producto">
         <img src="images/joggerIndex.png" alt="joggerIndex">
       <a class="comprar"href="/joggers">JOGGERS</i></a>
        </div>
     </article>

     <article class="bigProduct">
       <div class="foto-producto">
         <img src="images/pantalonIndex.png" alt="pantalonIndex">
       <a class="comprar"href="/jeans">PANTALONES</i></a>
       </div>
     </article>

     <article class="bigProduct">
       <div class="foto-producto">
         <img src="images/remeraIndex.png" alt="remeraIndex">
       <a class="comprar"href="/remeras">REMERAS</i></a>
       </div>
     </article>

     <article class="bigProduct">
       <div class="foto-producto">
         <img src="images/accesorioIndex.png" alt="accesorioIndex">
       <a class="comprar"href="/accesorios">ACCESORIOS</i></a>
       </div>
     </article>

   </section>
 </div>

 <!-- new arrivals -->
 <div class="new-arrivals">
    <h2>New Arrivals</h2>
    <div class="arrivals-list">
   <section class="contenedor-arrivals">
     <article class="arrivals">
       <div class="foto-producto">
         <img src="images/brooklynTshirt.jpg" alt="buzo3">
       <h4>Brooklyn Tshirt - White <br> $2.299,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
        </div>
     </article>
     <article class="arrivals">
       <div class="foto-producto">
         <img src="images/casioClassic.jpg" alt="buzo3">

       <h4>Casio  classic silver mesh <br> $1.699,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="arrivals">
       <div class="foto-producto">
         <img src="images/denimOverall.jpg" alt="buzo3">

       <h4>Denim Overall - Blue <br> $999,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="arrivals">
       <div class="foto-producto">
         <img src="images/hellCats.jpg" alt="buzo3">

       <h4>Hell Cats <br> $700,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="arrivals">
       <div class="foto-producto">
         <img src="images/pinkFloyd.jpg" alt="buzo3">

       <h4>Pink floyd - Regular fit <br> $1.990,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="arrivals">
       <div class="foto-producto">
         <img src="images/skinnyJeans.jpg" alt="buzo3">

       <h4>Skinny Jeans - Caramel Gabe <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>
   </section>
 </div>
    </div>
 </div>

 <!-- footer -->
  <div class="container-footer">
     <nav class="main-footer">
        <ul class="footer-flex">
         <li><a href="#">Home</a></li>
         <li><a href="/faq">Preguntas</a></li>
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
