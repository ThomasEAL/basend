<?php
// TBJE : i would recoment putting the following DB connection in a seperate file an inlude it instead
//new comment
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mmd2semb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<!--
Template Name: Basend
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>Basend</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Basend</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
        <?php
        // gennerate the menu items from database (the table pages)

        $sql = "SELECT id, navn FROM pages";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {

                 echo '<li><a href="index.php?id='.$row["id"].'">'.$row["navn"].'</a></li>';

                }
        } else {
            echo "0 results";
        }
        ?>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <section id="pageintro" class="hoc clear">
    <div>
      <!-- ################################################################################################ -->
      <?php
        //Gets the content of the current page from DB
        //NOTICE that the solution is vulnerable to hacking. See chapter 12 in the book for a explanation and solution
        $theSelectedPageId = $_GET['id'] ;
        $sql = "SELECT * FROM pages WHERE id=". $theSelectedPageId ;
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                 $headline=$row["navn"];
                 $indhold=$row["indhold"];
                }
        } else {
            echo "0 results";
        }


      ?>



      <h2 class="heading"><?php echo $headline ?></h2>
      <p><?php echo $indhold ?></p>
      <footer><a class="btn" href="#">Vulputate</a></footer>
      <!-- ################################################################################################ -->
    </div>
  </section>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Velit id imperdiet</h6>
      <p>Augue sapien et sapien nunc urna duis eget libero non.</p>
    </div>
    <ul class="nospace group services">
      <li class="one_quarter first">
        <article><a href="#"><i class="fa fa-3x fa-500px"></i></a>
          <h6 class="heading font-x1"><a href="#">Lobortis</a></h6>
          <p>Blandit velit ut sem commodo justo quis erat donec nec est ut sodales</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fa fa-3x fa-lastfm"></i></a>
          <h6 class="heading font-x1"><a href="#">Suscipit</a></h6>
          <p>Sem scelerisque sem fusce sed ligula id sem suscipit mollis quisque</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fa fa-3x fa-puzzle-piece"></i></a>
          <h6 class="heading font-x1"><a href="#">Vivamus</a></h6>
          <p>Est enim lacinia lobortis viverra interdum quam sed pharetra</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fa fa-3x fa-ravelry"></i></a>
          <h6 class="heading font-x1"><a href="#">Facilisis</a></h6>
          <p>Faucibus dui praesent at velit morbi ullamcorper lacus at urna maecenas</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Eu neque lacinia</h6>
      <p>Orci ullamcorper posuere nulla facilisi maecenas convallis.</p>
    </div>
    <div class="group excerpts">
      <article class="one_third first">
        <div class="hgroup">
          <h6 class="heading">A. Doe</h6>
          <em>Chief Executive Officer</em></div>
        <figure><a href="#"><img src="images/demo/320x220.png" alt=""></a></figure>
        <div class="txtwrap">
          <p>Est sed tellus nunc hendrerit adipiscing nulla nunc id elit etiam tempus lectus vel posuere congue nunc quam varius lectus.</p>
        </div>
        <footer>
          <ul class="faico clear">
            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
          </ul>
        </footer>
      </article>
      <article class="one_third">
        <div class="hgroup">
          <h6 class="heading">B. Doe</h6>
          <em>General Manager</em></div>
        <figure><a href="#"><img src="images/demo/320x220.png" alt=""></a></figure>
        <div class="txtwrap">
          <p>At rutrum diam sem sed turpis mauris pede arcu molestie ut scelerisque id tincidunt tincidunt neque proin iaculis mauris eu.</p>
        </div>
        <footer>
          <ul class="faico clear">
            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
          </ul>
        </footer>
      </article>
      <article class="one_third">
        <div class="hgroup">
          <h6 class="heading">C. Doe</h6>
          <em>Marketing Manager</em></div>
        <figure><a href="#"><img src="images/demo/320x220.png" alt=""></a></figure>
        <div class="txtwrap">
          <p>Sodales cursus sapien erat pharetra justo vitae volutpat eros magna et magna praesent at lectus vestibulum ante ipsum primis.</p>
        </div>
        <footer>
          <ul class="faico clear">
            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
          </ul>
        </footer>
      </article>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper overlay coloured">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Varius tristique</h6>
      <p>Luctus et ultrices posuere cubilia curae maecenas.</p>
    </div>
    <ul id="stats" class="nospace group">
      <li class="one_quarter first"><a href="#"><i class="fa fa-3x fa-cogs"></i></a>
        <p>Faucibus</p>
        <p>12345</p>
      <li class="one_quarter"><a href="#"><i class="fa fa-3x fa-comments-o"></i></a>
        <p>Pellentesque</p>
        <p>12345</p>
      </li>
      <li class="one_quarter"><a href="#"><i class="fa fa-3x fa-connectdevelop"></i></a>
        <p>Hendrerit</p>
        <p>12345</p>
      </li>
      <li class="one_quarter"><a href="#"><i class="fa fa-3x fa-sliders"></i></a>
        <p>Venenatis</p>
        <p>12345</p>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Justo nunc dapibus</h6>
      <p>Nisl vitae pulvinar nulla augue non leo in sed.</p>
    </div>
    <div class="group excerpts">
      <article class="one_third first">
        <figure><img src="images/demo/320x220.png" alt="">
          <figcaption>
            <time datetime="2045-04-06T08:15+00:00"><strong>06</strong> <em>Apr</em></time>
          </figcaption>
        </figure>
        <div class="hgroup">
          <h4 class="heading">Justo proin volutpat</h4>
          <ul class="nospace meta">
            <li>by <a href="#">Admin</a></li>
            <li>in <a href="#">Category Name</a></li>
          </ul>
        </div>
        <div class="txtwrap">
          <p>Quisque sodales vestibulum fringilla risus in metus curabitur accumsan sem malesuada lorem accumsan viverra lorem ipsum dolor [&hellip;]</p>
        </div>
        <footer><a class="btn" href="#">Read More &raquo;</a></footer>
      </article>
      <article class="one_third">
        <figure><img src="images/demo/320x220.png" alt="">
          <figcaption>
            <time datetime="2045-04-05T08:15+00:00"><strong>05</strong> <em>Apr</em></time>
          </figcaption>
        </figure>
        <div class="hgroup">
          <h4 class="heading">Ligula quis sapien</h4>
          <ul class="nospace meta">
            <li>by <a href="#">Admin</a></li>
            <li>in <a href="#">Category Name</a></li>
          </ul>
        </div>
        <div class="txtwrap">
          <p>Sit amet consectetuer adipiscing elit vivamus pharetra libero non imperdiet mi augue feugiat nisl sit amet mollis enim velit [&hellip;]</p>
        </div>
        <footer><a class="btn" href="#">Read More &raquo;</a></footer>
      </article>
      <article class="one_third">
        <figure><img src="images/demo/320x220.png" alt="">
          <figcaption>
            <time datetime="2045-04-04T08:15+00:00"><strong>04</strong> <em>Apr</em></time>
          </figcaption>
        </figure>
        <div class="hgroup">
          <h4 class="heading">Vestibulum luctus nisi</h4>
          <ul class="nospace meta">
            <li>by <a href="#">Admin</a></li>
            <li>in <a href="#">Category Name</a></li>
          </ul>
        </div>
        <div class="txtwrap">
          <p>Posuere metus etiam eleifend nisl nec lectus sed porttitor accumsan arcu nullam ac velit fusce scelerisque ligula sit amet urna [&hellip;]</p>
        </div>
        <footer><a class="btn" href="#">Read More &raquo;</a></footer>
      </article>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">Basend</h6>
      <p>Nullam quis ligula elementum lectus varius aliquet vivamus odio donec metus libero semper quis suscipit ut aliquam a metus integer.</p>
      <p class="btmspace-50">Pretium curabitur magna odio laoreet eu accumsan vitae gravida quis odio.</p>
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Disclaimer</a></li>
          <li><a href="#">Online Shop</a></li>
          <li><a href="#">Sitemap</a></li>
        </ul>
      </nav>
    </div>
    <div class="one_third">
      <h6 class="heading">Aliquam non fermentum</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Sapien lobortis nec</h6>
      <article><a href="#"><img class="btmspace-15" src="images/demo/320x140.png" alt=""></a>
        <h6 class="nospace font-x1"><a href="#">Velit pellentesque</a></h6>
        <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
        <p class="nospace">Eget nisl mauris placerat mauris a semper posuere sem arcu cursus felis non cursus enim odio in maecenas ut justo [&hellip;]</p>
      </article>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
