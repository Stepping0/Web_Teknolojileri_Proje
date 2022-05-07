DOCTYPE html>
<html  lang=”tr”>

<head>

 <meta charset="utf-8"> 
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
		
<title>Şule Betül BUDAK </title>
  
 
</head>

<body class="background-main">


<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

    <div class="container-fluid" id="nav">
      <a class="navbar-brand mb-0 h1" href="index.html" target="_blank">Ana Sayfa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
	  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="özgeçmiş.html" target="_blank" >Özgeçmiş</a></li>
          <li class="nav-item"><a class="nav-link active" href="ilgialanlarım.html"  target="_blank" >İlgi Alanlarım</a></li>
          <li class="nav-item"><a class="nav-link active" href="şehir.html"  target="_blank" >Şehir</a></li>
          <li class="nav-item"><a class="nav-link active" href="miras.html"  target="_blank">Miras</a></li>
          <li class="nav-item"><a class="nav-link active" href="iletişim.html"  target="_blank" >İletişim</a></li>
        </ul>
		
        <li class="nav-item" style="list-style: none;">
          <a class="nav-link active" href="giriş.html">Giriş</a>
        </li>
		
      </div>
    </div>
	
</nav>
<!----------------------------------------------------------------------------------------------------------------------------------------->
 <br><br><br><br><br><br><br> 
	
   <div class="container py-5" style="color:white; text-align:center; align-items:center;">
    <div class="row">
      <div class="col loginMesaj">
        <?php if($_POST["mail"]=="sbetulbudak@gmail.com" && $_POST["sifre"]=="b201210028")
			{
        echo"Hoşgeldiniz ".$_POST["mail"];
        echo"<br>Girişiniz onaylandı.";
            }
             else{
        echo "Girdiğiniz e-posta veya şifre hatalı.";
        header("refresh:3; giriş.html");
                 }    
        ?>
        </div>
      </div>
    </div> 
   
<br><br><br><br><br><br><br><br><br>
<!---------------------------------------------------------------------------------------------------------------------------------------->
<footer class="footer-basic">
		<div class="social">
			<a href="https://instagram.com/sulebetul_budak?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></a> 
			<a href="https://github.com/Stepping0" target="_blank"><i class="fab fa-github"></i></a>
			<a href="https://www.linkedin.com/in/%C5%9Fule-bet%C3%BCl-budak-322011151" target="_blank"><i class="fab fa-linkedin-in"></i></a>
		</div>
		<ul class="list-inline">
		    
			<li class="list-inline-item"><a href="index.html" target="_blank">Ana sayfa</a></li>
			<li class="list-inline-item"><a href="özgeçmiş.html" target="_blank">Özgeçmiş</a></li>
			<li class="list-inline-item"><a href="ilgialanlarım.html" target="_blank">İlgi Alanlarım</a></li>
			<li class="list-inline-item"><a href="şehir.html" target="_blank">Şehir</a></li>
			<li class="list-inline-item"><a href="miras.html" target="_blank">Miras</a></li>
			<li class="list-inline-item"><a href="iletişim.html" target="_blank">İletişim</a></li>
			<li class="list-inline-item"><a href="giriş.html" target="_blank">Giriş</a></li>
		</ul>
		<p class="copyright">Şule Betül BUDAK © 2022</p>
</footer>

</body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	
</html>
