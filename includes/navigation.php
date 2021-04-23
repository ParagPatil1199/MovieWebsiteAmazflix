<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <link href="style.css" rel="stylesheet" type="text/css" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>TonyStark</title>
</head>
<body>
<style>
.input-group-addon,.input-group-sm>.input-group-btn>input[type="date"].btn,.input-group-sm input[type="date"],input[type="time"].input-sm,.input-group-sm>input[type="time"].form-control,.input-group-sm>input[type="time"].input-group-addon,.input-group-sm>.input-group-btn>input[type="time"].input-group-addon,.input-group-sm>.input-group-btn>input[type="datetime-local"].btn,.input-group-sm input[type="datetime-local"],input[type="month"].input-sm,.input-group-sm>input[type="month"].form-control,.input-group-sm>input[type="month"].input-group-addon,.input-group-sm>.input-group-btn>input[type="month"].btn,.input-group-sm input[type="month"]{line-height:30px}input[type="date"].input-lg,.input-group-lg>input[type="date"].form-control,.input-group-lg>input[type="date"].input-group-addon,.input-group-lg>.input-group-btn>input[type="date"].btn,.input-group-lg input[type="date"],input[type="time"].input-lg,.input-group-lg>input[type="time"].form-control,.input-group-lg>input[type="time"].input-group-addon,.input-group-lg>.input-group-btn>input[type="time"].btn,.input-group-lg input[type="time"],input[type="datetime-local"].input-lg,.input-group-lg>input[type="datetime-local"].form-control,.input-group-lg>input[type="datetime-local"].input-group-addon,.input-group-lg>.input-group-btn>input[type="datetime-local"].btn,.input-group-lg input[type="datetime-local"],input[type="month"].input-lg,.input-group-lg>input[type="month"].form-control,.input-group-lg>input[type="month"].input-group-addon,.input-group-lg>.input-group-btn>input[type="month"].form-control-static.input-group-addon,.input-group-lg>.input-group-btn>.form-control-static.btn,.form-control-static.input-sm,.input-group-sm>.form-control-static.form-control,.input-group-sm>.form-control-static.input-group-addon,.input-group-sm>.input-group-btn>.form-control-static.btn{padding-left:0;padding-right:0}.input-sm,.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm,.input-group-sm>select.form-control,.input-group-sm>select.input-group-addon,.input-group-sm>.input-group-btn>select.btn{height:30px;line-height:30px}textarea.input-sm,.input-group-sm>textarea.form-control,.input-group-sm>textarea.input-group-addon,.input-group-sm>.input-group-btn>textarea.btn,select[multiple].input-sm,.input-group-sm>select[multiple].form-control,.input-group-sm>select[multiple].input-group-addon,.input-group-sm>.input-group-btn>select[multiple].btn{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm textarea.form-control,.form-group-sm select[multiple].form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg,.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.33333;border-radius:6px}select.input-lg,.input-group-lg>select.form-control,.input-group-lg>select.input-group-addon,.input-group-lg>.input-group-btn>select.btn{height:46px;line-height:46px}textarea.input-lg,.input-group-lg>textarea.form-control,.input-group-lg>textarea.input-group-addon,.input-group-lg>.input-group-btn>textarea.btn,select[multiple].input-lg,.input-group-lg>select[multiple].form-control,.input-group-lg>select[multiple].input-group-addon,.input-group-lg>.input-group-btn>select[multiple].btn{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.33333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg textarea.form-control,.form-group-lg select[multiple].form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.33333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.input-lg+.form-control-feedback,.input-group-lg>.form-control+.form-control-feedback,.input-group-lg>.input-group-addon+.form-control-feedback,.input-group-lg>.input-group-btn>.btn+.form-control-feedback,.input-group-lg+.form-control-feedback,.form-group-lg .form-control+.form-control-feedback{width:46px;height:46px;line-height:46px}.input-sm+.form-control-feedback,.input-group-sm>.form-control+.form-control-feedback,.input-group-sm>.input-group-addon+.form-control-feedback,.input-group-sm>.input-group-btn>.btn+.form-control-feedback,.input-group-sm+.form-control-feedback,.form-group-sm .form-control+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline,.has-success.radio label,.has-success.checkbox label,.has-success.radio-inline label,.has-success.checkbox-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;border-color:#3c763d;background-color:#dff0d8}.input-group-addon{color:#8a6d3b;border-color:#8a6d3b;background-color:#fcf8e3}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline,.has-error.radio label,.has-error.checkbox label,.has-error.radio-inline label,.has-error.checkbox-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;border-color:#a94442;background-color:#f2dede}.has-error .form-control-feedback{color:#a94442}.has-feedback label ~ .form-control-feedback{top:25px}.has-feedback label.sr-only ~ .form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width: 768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn,.form-inline .input-group .form-control{width:auto}.input-group .form-control:focus{z-index:3}.input-group-addon,.input-group-btn,.input-group .form-control{display:table-cell}.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child),.input-group .form-control:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:normal;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.input-group-addon.btn{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.input-group-addon.btn{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type="radio"],.input-group-addon input[type="checkbox"]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group-btn:last-child>.btn-group:not(:last-child)>.btn{border-bottom-right-radius:0;border-top-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:first-child>.btn-group:not(:first-child)>.btn{border-bottom-left-radius:0;border-top-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}-bottom{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;padding:15px 15px;font-size:18px;line-height:20px;height:50px}.navbar-brand:hover,.navbar-brand:focus{text-decoration:none}.navbar-brand>img{display:block}@media (min-width: 768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;margin-right:15px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width: 768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width: 767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;box-shadow:none}.navbar-nav .open .dropdown-menu>li>a,.navbar-nav .open .dropdown-menu .dropdown-header{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:hover,.navbar-nav .open .dropdown-menu>li>a:focus{background-image:none}}@media (min-width: 768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{margin-left:-15px;margin-right:-15px;padding:10px 15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.1);margin-top:8px;margin-bottom:8px}@media (min-width: 768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn,.navbar-form .input-group .form-control{width:auto}.navbar-form .input-group>.form-control{width:100%}
.navbar-search{padding:10px 0}.navbar-search{cursor:pointer;background:#f57f26;border-color:#f57f26;color:#fff;font-weight:500;-webkit-transition:.2s;transition:.2s}.navbar-search input[type=search]{border-radius:0}.primary-header .primary-header .input-group-addon,.primary-header .primary-header .navbar-search .input-group-addon.primary-header .navbar-search .input-group-addon:hover{background:#ef8f47;border-color:#ef8f47} .hide-on-small-and-down a {
  padding: 1px 24px 0px 0px;
    box-sizing: border-box;
}</style>


</head>
<div id="navigation">
<li><a href="index.php">🏠 Home</a></li>
<li><a href="">Visit Us</a></li>
<li><a href="">About Us</a></li>
<div class="dropdowna">
    <button class="dropbtna">🎬 Movies <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-contenta">
      <a href="#">Latest Released</a>
      <a href="#">Hollywood</a>
      <a href="#">Hacking Movies</a>
      <a href="#">Hacking Movies</a>
      <a href="#">Hacking Movies</a>
    </div>
  </div>
  <div class="dropdowna">
    <button class="dropbtna">📺 Tv Shows <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-contenta">
      <a href="#">Action Series</a>
      <a href="#">Animation Series</a>
      <a href="#">Sci-Fi Series</a>
      <a href="#">Sci-Fi Series</a>
      <a href="#">Horror Series</a>
    </div>
  </div>
</ul>
	</div>    



</body>
</html>
