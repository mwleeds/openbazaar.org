<!DOCTYPE html>

<html>

<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet'>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OpenBazaar</title>
 <meta name="description" content="OpenBazaar is an open source project to create a decentralized network for commerce online, using Bitcoin, that has no fees and cannot be censored.">
<meta name="author" content="Braden Glasgow">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="css/main.css" rel="stylesheet">
<link href="css/hubinfo.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.png">
</head>
    
<body>


<section class="main">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6"> 
        
        <div class="logo"><a href="index.html"><img src="img/logo.png" width="304" height="86.5" alt="logo"></a></div>
        
      </div>

      <div class="col-md-6 col-sm-6"> 
        
        
        <div class="learn text-center">
                       <a style="margin-top: 25%;" class="btn btn-success submit-btn" href="https://blog.openbazaar.org/what-is-openbazaar/" target="_blank">Learn more</a>
        </div>
       
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"> 
        
        
        <header class="text-center">
            <?php
            if(isset($_POST['submitted']))
            {
                mysql_connect('developer.openbazaar.org','braden','P@ssw0rd');
                mysql_select_db('ob_newsletter');
                $email=$_POST['email'];
                $query=mysql_query("select * from subscribers where email='".$email."' ") or die(mysql_error());
                $duplicate=mysql_num_rows($query);
                    if($duplicate==0)
                    {
                        $query1=mysql_query("INSERT INTO subscribers (email) VALUE ('$email')")  or die(mysql_error());
                         echo'<h1><span> Thanks for subscribing! </span></h1>';
                    }
                else
                {
      echo'<h1><span> The email '.$email.' is already subscribed </span></h1>';
    }
}
?>
          <div class="auto-resizable-iframe">
  <div>
      <iframe class="center" src="https://youtube.com/embed/nuRgHbTU9pk" frameborder="0" allowfullscreen></iframe></div></div>
        </header>
        
        
      </div>
    </div>
  </div>
     
    </section>




<section class="nutshell section-spacing">
  <div class="container">
            <h1 class="text-center">What is OpenBazaar?</h1>
      <p style="color: #000000;" class="text-center"><a href="https://openbazaar.org">OpenBazaar</a> is a new way to buy and sell goods and services online. By running a program on your computer, you can connect directly to other users in the OpenBazaar network and trade with them. The network isn't controlled by a company or organisation. OpenBazaar is a BitTorrent-style peer-to-peer network. This means there are no mandatory fees to pay and the network is censorship-resistant.
    <div style="margin-top: 3.5em;" class="row">
      <div class="col-md-6">
        <div class="obdn-nutshell row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-center"><i class="fa fa-binoculars fa-5x"></i>
</div>
          <div class="col-md-9 col-sm-9 col-xs-9"> 
           
            <h4>Privacy</h4>
            <p>Users have full control of their personal data. You can have freedom to reveal as much personal identifiable information as you want, when you want</p>
            
          </div>
        </div>
        <div class="obdn-nutshell row">
           <div class="col-md-3 col-sm-3 col-xs-3 text-center"><i class="fa fa-unlock fa-5x"></i></div>
          <div class="col-md-9 col-sm-9 col-xs-9"> 
            
            <h4>Open Source</h4>
              <p>This project is open source, which means the code is publicly available, can be reviewed, and anyone can join the project and suggest changes. We are always looking for more support, whether through developer contributions or financial donations</p>
     
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="obdn-nutshell row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-center"><i class="fa fa-btc fa-5x"></i></div>
          <div class="col-md-9 col-sm-9 col-xs-9"> 
            
            <h4>Zero Fees</h4>
            <p>Since there is no one in the middle of the transactions, there are no fees to pay. Transaction fees on the Bitcoin network are typically a fraction of a cent</p>
           
          </div>
        </div>
        <div class="obdn-nutshell row">
         <div class="col-md-3 col-sm-3 col-xs-3 text-center"><i class="fa fa-group fa-5x"></i></div>
          <div class="col-md-9 col-sm-9 col-xs-9"> 
           
            <h4>Freedom</h4>
              <p>Instead of buyers and sellers going through a centralized service, OpenBazaar connects them directly. Because there is no one in the middle of the transactions, you have the ability to trade freely</p>
            
          </div>
        </div>
      </div>
    </div>
      
  </div>
</section>


<section class="news-feed section-spacing text-center">
  <div class="overlay-t"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 center-block col-sm-11 col-xs-11">
        <h2>Latest News</h2>
        <div class="blog"><div class="blog-excerpt" id="feedContent"></div></div>
      </div>
    </div>
  </div>
</section>


<section class="mission section-spacing" id="mission">
  <div class="container">
    <h2 style="margin-bottom: 2.5em;" class="text-center"></h2>
    <div class="row">
      <div class="col-md-7"> 
          
          <img src="img/logo-contact.png">
            <h3 style="margin-top: 1em;">Join the world on a mission of freedom.</h3>
                <h3>Freedom to purchase, sell, and trade.</h3>
      </div>
      <div class="col-md-5"> 
        
                 <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/openbazaar" data-widget-id="531608374400385025">Tweets by @openbazaar</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
      </div>
    </div><br /><br />
      <div id="hubInfo"></div></div>
</section>

    
<footer class="site-footer section-spacing">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> 
        
<div class=""><a class="btn btn-large btn-danger" href="#slack">
    <i class="fa fa-slack fa-2x pull-left"></i><span style="font-size: 20px;">Invite me to Slack!</span></a>
    <p style="color: #000; margin-top: -4%;">Join our Slack room for community and development discussion!</p><br /></div>
        
        <ul class="social">
    <li><a href="https://github.com/OpenBazaar" target="_blank"><i class="fa fa-github"></i></a></li>
                     <li><a alt="Docs" href="https://docs.openbazaar.org" target="_blank"><i class="fa fa-file-text-o"></i></a></li>
                      <li><a href="#newsletter"><i class="fa fa-newspaper-o"></i></a></li>                              <li><a href="mailto:project@openbazaar.org" target="_blank"><i class="fa fa-envelope-o"></i></a></li>
               <li><a href="https://www.reddit.com/r/OpenBazaar" target="_blank"><i class="fa fa-reddit"></i></a></li>
               <li><a href="https://twitter.com/OpenBazaar" target="_blank"><i class="fa fa-twitter"></i></a></li>
             <li><a href="https://blockchain.info/address/3MXYUBLWNETa5HTewZp1xMTt7AW9kbFNqs" target="_blank"><i class="fa fa-btc"></i></a></li>
                <div class="sub-form text-center">
                   
    </div>
  <br />   
              <small>&copy; Copyright <img style="margin-left: 0.3em; margin-right: 0.15em; margin-bottom: 0.6em;" src="img/logo-icon.png" width="20" height="20">OpenBazaar. <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">Some Rights Reserved</a>.</small>
        </ul>
          
            </div>
        
       </div>
       
  </div>
</footer>



<div id="preloader">
  <div id="status"></div>
</div>

    
<div id="newsletter" class="modalDialog2">
    <div>
        <a href="#close" title="Close" class="close">X</a>
		 <div class="sub-form text-center">
                    <h3>OpenBazaar Newsletter</h3><br />
          <div class="row">
            <div class="col-md-5 center-block col-sm-8 col-xs-11">
              <form role="form" id="mc-form" action="subscribe.php" method="POST">
                <div class="input-group">
                  <input type='text' class="form-control" placeholder="Your email..." required value="Your email..." name="email">
                  <span class="input-group-btn">
                 <input type='submit' class="btn btn-default" value='Subscribe' />
                 <input type='hidden' value='1' name='submitted' />
                    </span>
                  </div>
              </form>
          </div>
             </div>
        </div>
    </div>
    </div>

    <div id="slack" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
		<iframe scrolling="no" seamless src="https://openbazaar-slackin-drwasho.herokuapp.com/" style="border: 0px; height: 450px; width: 500px;"></iframe>
    </div>
    </div>

<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/feed.js"></script> 
<script src="js/jquery.form.min.js"></script> 
<script src="js/jquery.validate.min.js"></script> 
<script src="js/jquery.simple-text-rotator.min.js"></script> 
<script src="js/main.js"></script> 
<script src="js/hubinfo.min.js"></script>
<script>
$("#hubInfo").hubInfo({ 
    user: "OpenBazaar",
    repo: "OpenBazaar"
});
</script>

    
          <!-- News feed required
    ================================================== -->
    <script type="text/javascript">
      $.blogFeed('https://blog.openbazaar.org/feed',
         function(feeds){
            if(!feeds){
               alert('there was an error');
            }
            for(var i=0;i<feeds.entries.length;i++){
               var entry = feeds.entries[i];
               var title = entry.title;
               var link = entry.link;
               var description = entry.content;
 
 
               var html = "<div class='entry'><h4 class='postTitle'><a class='fancy block' href='" + link + "' target='_blank'>" +   title + "</a></h4>";
                   html += "<p class='description'>" + description + "</p></div>";
 
 
            $("#feedContent").append($(html));
              }
          }, 1);
    </script>
</body>

</html>