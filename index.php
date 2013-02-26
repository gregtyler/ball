<?php require_once( 'config.php' );?><!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--
        == WELCOME TO THE SOURCE! ==
        By Greg Tyler (@gregtyler)
        Textures by Paul Horrocks (@itspaulhorrocks)
        
        Worth noting: Facebook stuff below, and some great responsive bits. Doesn't look great on older browsers,
            but since the demographic is students, we decided not to bother.
        Resources: smoothscroll, LESS
    -->
    
    <meta property="og:site_name" content="MathSoc" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://mathsoc.eusa.ed.ac.uk/ball/" />
    <meta property="og:title" content="MathSoc Ball 2013" />
    <meta property="og:description" content="On 6th March, join us at The Jam House for the 2013 Maths Ball! With a full three course dinner, wine provided and a ceilidh with the Maths Ceilidh band, this is going to be an incredible event that you won't want to miss out on!" />
    <meta property="og:image" content="http://mathsoc.eusa.ed.ac.uk/ball/img/facebook.png" />
    
    <?php if( live() ):?>
    <link rel=stylesheet href="css/style.css">
    <?php else: ?>
    <link rel=stylesheet/less href="css/style.less">
    <script src="js/less.js"></script>
    <?php endif; ?>
    <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Junge" data-noprefix>
    <link rel="shortcut icon" href="http://mathsoc.eusa.ed.ac.uk/wp-content/themes/MYgRID/favicon.ico" />
    <title>Maths Ball</title>
</head>
<body>
<section class=logo>
    <a href="http://mathsoc.eusa.ed.ac.uk/" class=logo-link>&lsaquo; Back to main site</a>
    <img src="img/header.png" alt="The Maths Ball" />
</section>

<section class=nav>
    <a href="#faqs">FAQs</a> |
    <a href="#menu">Menu</a> |
    <a href="tables/">Seating plan</a> |
    <a href="#contact">Contact</a>
</section>

<section class="faqs clearfix" style="padding:1em;text-align:center;">
    Seating plan now available. <a href="tables/">Click here!</a>
</section>
<section class=desc>
    <h2>On 6<sup>th</sup> March, join us at The Jam House for the 2013 Maths Ball!</h2>
    <p>With a full three course dinner, wine provided and a ceilidh with the Maths Ceilidh band, this is going to be an incredible event that you won't want to miss out on!</p>
    <ul class=list>
        <li>Prosecco reception
        <li>Full three course dinner
        <li>Wine on table
        <li>"Charlotte Klein" Photography
        <li>A ceilidh with the Maths Ceilidh band
        <li>Discount entry to 'MANSION @ OPAL' afterparty
    </ul>
    <p style="text-align:center;max-width:960px;margin:1em auto;">There will also be a raffle to raise money for Children's Holiday Venture, an amazing Edinburgh-based charity. You can find out more about CHV and the great work they do <a href="http://www.chv.org.uk/" target="_blank">here</a>!</p>
    <p style="text-align:center;">To follow any updates, make sure to attend the event on <a href="http://facebook.com/EdinMathSoc/events" target="_blank">Facebook</a>.</p>
</section>

<section id=faqs name=faqs class="faqs clearfix">
    <article class=third>
        <i class=icon-compass></i>
        <h2 class=clearfix>Where?</h2>
        
        <a target="_blank" class="map" href="https://maps.google.com/maps?q=jam+house+edinburgh&ll=55.955423,-3.195841&spn=0.006979,0.021136&fb=1&hq=jam+house&hnear=0x4887b800a5982623:0x64f2147b7ce71727,Edinburgh,+City+of+Edinburgh,+UK&cid=0,0,10149982160230575038&t=h&z=16&iwloc=A">
            <img src="img/map.png" />
            <div class="map-inner">The Jam House, 5 Queen Street</div>
        </a>
    </article>
    <article class=third>
        <i class=icon-calendar></i>
        <h2 class=clearfix>When?</h2>
        <div>
            <p>6<sup>th</sup> March 2013</p>
            <hr>
            <p>7PM 'til 1AM</p>
        </div>
    </article>
    <article class=third>
        <i class=icon-cost></i>
        <h2 class=clearfix>How Much?</h2>
        <div>
            <p>Members &pound;27<br>
            Non-members &pound;30</p>
            <hr>
            <a class="button" href="#howtobuy">How to buy</a>
        </div>
    </article>
</section>

<section id=menu name=menu class=menu>
    <img src="img/menu.jpg" alt="Menu, including a Prosecco reception. For starters, Leek Soup or Organic Smoked Salmon. Your main course is a choice of Scottish beef, roast chicken or leek and parmesan risotto. For dessert, chocolate brownies and sticky toffee pudding are on offer." />
</section>

<section id=contact name=contact class="contact clearfix">
    <aside class=quart>
        <a target="_blank" href="http://facebook.com/EdinMathSoc">Find us on Facebook</a>
    </aside>
    <aside class=quart>
        <a target="_blank" href="http://twitter.com/EdinMathSoc">@EdinMathSoc</a>
    </aside>
    <aside class=quart>
        <a target="_blank" href="http://mathsoc.eusa.ed.ac.uk/">Our website</a>
    </aside>
    <aside class=quart>
        <a target="_blank" href="mailto:mathsoc@sms.ed.ac.uk">Email us</a>
    </aside>
</section>

</body>
<script src="js/all.js"></script>
</html>