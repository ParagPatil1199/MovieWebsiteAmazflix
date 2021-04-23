<footer class="page-footer"style="
    background-color: #d1c2fc;>
<div class="container">
Theme Developed By, MARK85
<span class="right">
Follow Us On
<a href="" class="btn btn-floating black" style="color:white;"><i class="fa fa-facebook" aria-hidden="true"></i></a>

<a href="" class="btn btn-floating black" style="color:white;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
<a href="" class="btn btn-floating black" style="color:white;"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="" class="btn btn-floating black" style="color:white;"><i class="fa fa-youtube" aria-hidden="true"></i></a>
</span> 
</div>
<div class="clearfix"></div>

<div class="footer-copyright">
<div class="container">
&copy; All Right Reserved,Tonystark
</div>
</div>
</footer>
<!--Import jQuery before materialize.js-->

  
<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  
    <!-- initialize popover library -->
    <script>
        $(function(){
            $('[data-toggle="popover"]').popover();
        });
    </script>
  <script>
    $(document).ready(function () {
      // Custom JS & jQuery here
      $('.button-collapse').sideNav();
    });
  </script>
  <script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
  </script>
</body>

</html>