<!--by Antonija Vasiljević 0501/2019 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include.php"); ?>
 
</head>
<body style=" background-color: #f1ebeb">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">
            <img src="/assets/images/logo/PSI-ES-Logo-Transparent.png" width="30" height="30" alt="">
        </a>
        <a class="navbar-brand" href="/Zanatlija">Explore Serbia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filteri
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <span class="dropdown-item">Istorijska ličnost</span>
                    <span class="dropdown-item">Spomenik</span>
                    <span class="dropdown-item">Crkva/manastir</span>
                    <span class="dropdown-item">Tvrdjava</span>
                    <span class="dropdown-item">Arheološko nalazište</span>
                    <span class="dropdown-item">Park prirode</span>
                </div>
            </li>
                <form method="GET" action="<?php echo site_url("Zanatlija/pretraga"); ?>" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" name="pretraga" placeholder="Pretraži" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pretraži</button>
                </form>
                </li>
            </ul>
            
            <form method="get" action="<?php echo site_url("/Zanatlija/kreiranjeReklame"); ?>">
                <button class="btnAdm" ><i class="fa fa-plus" aria-hidden="true"></i></button>
           </form>
            <?php $id=$_SESSION['korisnik']->korisnickoIme; ?>
          <form method="get" action="<?php echo site_url("/Zanatlija/profilZanatlije/".$id); ?>">
            <button  class="btnAdm"><i class="fa fa-user" aria-hidden="true"></i></button>
            </form>
            
          
            <form method="get" action="<?php echo site_url("/Zanatlija/logout"); ?>"> <a href="/Zanatlija/logout" style="margin-left: 10px;">Izloguj se</a></form>
        </div>
    </nav>