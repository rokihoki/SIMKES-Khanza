<!DOCTYPE html>
<html lang="en">
<head>
     <title>EPasien <?=$_SESSION["nama_instansi"];?></title>
     <meta charset="UTF-8"/>
     <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
     <meta name="description" content=""/>
     <meta name="keywords" content=""/>
     <meta name="author" content="Tooplate"/>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
     <link rel="stylesheet" href="css/bootstrap.min.css"/>
     <link rel="stylesheet" href="css/font-awesome.min.css"/>
     <link rel="stylesheet" href="css/animate.css"/>
     <link rel="stylesheet" href="css/owl.carousel.css"/>
     <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
     <link rel="stylesheet" href="css/tooplate-style.css"/>
     <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" type="text/css">
     <script src="conf/validator.js" type="text/javascript"></script>
     <script src="js/jquery.min.js"></script>
     <script src="js/jquery.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script type="text/javascript">
        $(function() {
            $("#carikeyword").bind('submit',function() {
                 $.post('pages/listjadwaldokter.php',{value:$('#keyword').val()}, function(data){$("#hasilcari").html(data);});
                 return false;
            });
        });
        
        $(function(){
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        });
        
        function PopupCenter(pageURL, title,w,h) {
            var left = (screen.width/2)-(w/2);
            var top = (screen.height/2)-(h/2);
            var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
            
        }
    </script>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>
    
     <header>
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-5">
                         <p>Selamat datang di <?=$_SESSION["nama_instansi"];?></p>
                    </div>
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> <?=$_SESSION["kontak"];?></span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 06:00 - 22:00 (Senin-Sabtu)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#"><?=$_SESSION["email"];?></a></span>
                    </div>
               </div>
          </div>
     </header>
    
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>
               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <?php actionMenu()?>
                    </ul>
               </div>
          </div>
     </section>
    
     <?php actionPages();?>

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informasi Kontak</h4>
                              <p>Jangan ragu untuk menghubungi kami, Anda bisa menghubungi kami melalui kontak di bawah ini :</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> <?=$_SESSION["kontak"];?></p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#"><?=$_SESSION["email"];?></a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Pengumuman/Informasi</h4>
                              <div class="latest-stories">
                                   <div class="stories-info">
                                       <p><i class="fa fa-bell"></i> <?=$isipengumuman;?></p>
                                       <span><?=$tanggalpengumuman;?>, oleh <?=$namapegawai;?></span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Jam Buka</h4>
                                   <p>Senin - Sabtu <span>06:00 - 22:00 </span></p>
                                   <p>Minggu<span>Tutup</span></p>
                                   <p>IGD<span>24 Jam</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 <?=$_SESSION["nama_instansi"];?> | SIMKES Khanza</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                  <center>
                                     <a href="index.php?act=CekPoli">Poli/Unit Tersedia</a>
                                     <a href="index.php?act=CekAsuransi">Kerja Sama Asuransi</a>
                                  </center>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
               </div>
          </div>
     </footer>
     <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
</body>
</html>