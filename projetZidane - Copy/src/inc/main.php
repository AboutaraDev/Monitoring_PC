


            <div class="section full-height">  
               <div class="absolute-center">  
                  <div class="section">  
                     <div class="container">  
                        <div class="row"> 
                        
                           <div class="col-12">               
                                 
                              <h1>Bienvenue</h1>  
                              <h1><span>S</span><span>u</span><span>i</span><span>v</span><span>i</span> <span>d</span><span>e</span><span>s</span>
                                 <span>p</span><span>a</span><span>q</span><span>u</span><span>e</span><span>t</span><span>s</span> <span>I</span><span>/</span><span>O</span>
                              </h1>
                              <h1><span>d</span><span>a</span><span>n</span><span>s</span>
                                 <span>v</span><span>o</span><span>t</span><span>r</span><span>e</span> <span>P</span><span>C</span>
                              </h1> 
                           </div>  
                             
                        </div>  
                        <img src="mtp2.png" class="imgs" width="300" height="172"> 
                     </div>  
                  </div> 
                  <div class="containe">
                          <a href="login.php" class="btn btn-info" role="button">Se Connecter</a> 
                           <a href="register.php" class="btn btn-info" role="button">Creer compte</a>
                  </div> 
               </div> 
              
            </div>  

            
            <div class="my-5 py-5">  
            </div>  
            <script>  
               (function($) { "use strict";  
                 
               $(function() {  
                var header = $(".start-style");  
                $(window).scroll(function() {      
                    var scroll = $(window).scrollTop();  
                    if (scroll >= 10) {  
                        header.removeClass('start-style').addClass("scroll-on");  
                    } else {  
                        header.removeClass("scroll-on").addClass('start-style');  
                    }  
                });  
               });    
                 
               $(document).ready(function() {  
                $('body.hero-anime').removeClass('hero-anime');  
               });  
               $('body').on('mouseenter mouseleave','.nav-item',function(e){  
                    if ($(window).width() > 750) {  
                        var _d=$(e.target).closest('.nav-item');_d.addClass('show');  
                        setTimeout(function(){  
                        _d[_d.is(':hover')?'addClass':'removeClass']('show');  
                        },1);  
                    }  
               });    
                 
                })(jQuery);   
            </script>  
    