<footer class="page-footer black">
         <div class="container">
           <div class="row">
             <div class="col l6 s12">
               <h5 class="white-text">Footer Content</h5>
               <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
             </div>
             <div class="col l4 offset-l2 s12">
               <h5 class="white-text">text</h5>
               <ul>
                 <li><a class="grey-text text-lighten-3" href="#!">link/a></li>
               </ul>
             </div>
           </div>
         </div>
         <div class="footer-copyright">
           <div class="container">
           © 2019 Copyright Text
           <a class="grey-text text-lighten-4 right" href="?controller=usuario&method=call_animal&id_user=<?= $variable->id_user ?>">Mis máscotas</a>
           </div>
         </div>
       </footer>

</div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
//      var elems = document.querySelectorAll('.sidenav');
//      var instances = M.Sidenav.init(elems);
   M.AutoInit();
    });


    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems);
    });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems);
  });

  document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.slider');
   var instances = M.Slider.init(elems  );
 });

  window.addEventListener('load',() => {

    setTimeout(carga, 2000);

    function carga(){
    document.getElementById('carga').className = 'hide'

    document.getElementById('contenido').className = 'animated fadeInDown'
    }
  })
    </script>
    </body>
  </html>
