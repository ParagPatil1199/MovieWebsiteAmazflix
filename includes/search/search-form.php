

<style type="text/css">
                @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');

nav{
  background: #d3c4ff;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  height: 87px;
  padding: 0 100px;
}
nav .logo{
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  letter-spacing: -1px;
}
nav .nav-items{
  display: flex;
  flex: 1;
  padding: 0 0 0 40px;
}
nav .nav-items li{
  list-style: none;
  padding: 0 15px;
}
nav .nav-items li a{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-decoration: none;
}
nav .nav-items li a:hover{
  color: #ff3d00;
}
nav form{
  display: flex;
  height: 42px;
  padding: 2px;
  background: #1e232b;
  min-width: 18%!important;
  border-radius: 2px;
  border: 1px solid rgba(155,155,155,0.2);
}
nav form .search-data{
  width: 100%;
  height: 100%;
  color: #fff;
  font-size: 17px;
  border: none;
  font-weight: 500;
  background: none;
}
nav form button{
  padding: 8px 16px;
  color: #fff;
  font-size: 17px;
  background: #ff3d00;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}
nav form button:hover{
  background: #e63600;
}
nav .menu-icon,
nav .cancel-icon,
nav .search-icon{
  width: 40px;
  text-align: center;
  margin: 0 50px;
  font-size: 18px;
  color: #fff;
  cursor: pointer;
  display: none;
}
nav .menu-icon span,
nav .cancel-icon,
nav .search-icon{
  display: none;
}
@media (max-width: 1245px) {
  nav{
    padding: 0 50px;
  }
}
@media (max-width: 1140px){
  nav{
    padding: 0px;
  }
  nav .logo{
    flex: 2;
    text-align: center;
  }
  nav .nav-items{
    position: fixed;
    z-index: 1;
    top: 70px;
    width: 100%;
    left: -100%;
    height: 100%;
    padding: 10px 50px 0 50px;
    text-align: center;
    background: #14181f;
    display: inline-block;
    transition: left 0.3s ease;
  }
  nav .nav-items.active{
    left: 0px;
  }
  nav .nav-items li{
    line-height: 40px;
    margin: 30px 0;
  }
  nav .nav-items li a{
    font-size: 20px;
  }
  nav form{
    position: absolute;
    top: 80px;
    right: 50px;
    opacity: 0;
    pointer-events: none;
    transition: top 0.3s ease, opacity 0.1s ease;
    z-index: 1;
  }
  nav form.active{
    top: 95px;
    opacity: 1;
    pointer-events: auto;
  }
  nav form:before{
    position: absolute;
    content: "";
    top: -13px;
    right: 0px;
    width: 0;
    height: 0;
    z-index: -1;
    border: 10px solid transparent;
    border-bottom-color: #1e232b;
    margin: -20px 0 0;
  }
  nav form:after{
    position: absolute;
    content: '';
    height: 60px;
    padding: 2px;
    background: #1e232b;
    border-radius: 2px;
    min-width: calc(100% + 20px);
    z-index: -2;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  nav .menu-icon{
    display: block;
  }
  nav .search-icon,
  nav .menu-icon span{
    display: block;
  }
  nav .menu-icon span.hide,
  nav .search-icon.hide{
    display: none;
  }
  nav .cancel-icon.show{
    display: block;
  }
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  text-align: center;
  transform: translate(-50%, -50%);
}
.content header{
  font-size: 30px;
  font-weight: 700;
}
.content .text{
  font-size: 30px;
  font-weight: 700;
}
.space{
  margin: 10px 0;
}
nav .logo.space{
  color: red;
  padding: 0 5px 0 0;
}
@media (max-width: 980px){
  nav .menu-icon,
  nav .cancel-icon,
  nav .search-icon{
    margin: 0 20px;
  }
  nav form{
    right: 30px;
  }
}
@media (max-width: 350px){
  nav .menu-icon,
  nav .cancel-icon,
  nav .search-icon{
    margin: 0 10px;
    font-size: 16px;
  }
}
@media only screen and (min-width: 480px){
.result {
position: absolute;
    z-index: 999;
    top: 109%;
    left: 0;
    margin-top : 10px;
}
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.content header{
  font-size: 30px;
  font-weight: 700;
}
.content .text{
  font-size: 30px;
  font-weight: 700;
}
.content .space{
  margin: 10px 0;
}
    body{
        font-family: Arail, sans-serif;
    }
    .search-data{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-data input[type="search"]{
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 109%;
        left: 0;
        margin-top : 10px;
    }
    .search-data input[type="search"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
        background: red
    }
    .result p:hover{
        background: #f2f2f2;
        color: red;
    }

    .td1{
        background: #f2f2f2;
        color: red;
    }
    tr.border_bottom td {
  border-bottom: 1px solid black;
}


</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-data input[type="search"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-data").find('input[type="search"]').val($(this).search());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<meta charset="utf-8">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<body>
<nav>
<div class="menu-icon">
<span class="fas fa-bars"></span></div>
<div class="logo"href="index.php"style="
    padding-top: 13px;
"><img src="log.png" class="mr-2" href="index.php" width="100px" height="49px"></div>
<div class="nav-items">
<li><a href="index.php">Home</a></li>
<!--<li><a href="#">About</a></li>-->
<li><a href="contact/contact_us.php">Contact</a></li>
<li><a href="contactform/index.php">Request Us</a></li>
<li><a href="how-to-download.php">How To download</a></li>
</div>
<div class="search-icon">
<span class="fas fa-search"></span></div>
<div class="cancel-icon">
<span class="fas fa-times"></span></div>
<form action="search.php" method="GET">
    <div class="search-data">
        <input type="search" autocomplete="off" id = "search" name="search" placeholder="Search here" required style="
    margin-right: 0px;
    margin-left: 0px;
    margin-bottom: 0px;
    border-bottom-width: 0px;
    padding-right: 0px;
    width: 260px;
    box-shadow: none;
    border-bottom: none;
    height: 41px;
"/>
        <button type="submit" class="fas fa-search" value="S" name="submit" aria-hidden="true" style="padding-bottom: 10px; padding-top: 10px;"></button>
        
        <div class="result"></div>
    </div>
    </form>
    </nav>
