<?php get_header(); ?>
    <div id="splash">
      <div class="navigation-back"></div>
      <div class="navigation-forward"></div>
      <div id="graphic"></div>
      <div id="text"></div>
    </div>
    <div class="wrapper">
      <div class="tile"><div class="os linux">linux</div></div>
      <div class="tile mac"><div class="os">mac</div></div>
      <div class="tile windows"><div class="os">windows</div></div>
      <div class="tile android"><div class="os">android</div></div>
    </div>
    <div class="wrapper">
      <div class="tile-big">
        <h1>get started</h1>
        <p>Setting up your own host to work with SparkleShare isn't very hard.
        Some <a href="https://github.com/hbons/SparkleShare/wiki/How-to-set-up-your-own-server">tutorials</a> haven been written about it, and the 
        <a href="/help/">documentation</a> should handle most of your questions.</p><p>If you can't set up your own host, you can always register a free account at
        <a href="http://www.github.com/">Github</a> or <a href="http://www.gitorious.org/">Gitorious</a>.</p>
        <p>Need more help? Join us in our IRC channel: #sparkleshare on irc.freenode.net.</p></div>
      <div class="tile twitter enabled" onclick="location.href='http://www.twitter.com/sparkleshare'">
        <div class="os">get updates</div></div>
      <div class="tile ios">
        <div class="os">iOS</div>
      </div>
      <div class="tile-big bottom-right-corner" style="float: right; margin-right: 7px;"> 
        <h1>get involved</h1>
          <p>SparkleShare is <a href="http://en.wikipedia.org/wiki/Free_software">Free</a> and <a href="http://en.wikipedia.org/wiki/Open-source_software">Open Source</a> software and is 
          <a href="https://github.com/hbons/SparkleShare/blob/master/AUTHORS">build by people</a> who care about privacy and freedom. Not only can you use it however you like, you are also 
          free to modify and redistribute it when you give the recipients the <a href="https://github.com/hbons/SparkleShare/blob/master/LICENSE">same freedoms</a>.</p>

          <p>If you'd like to help out: <a href="https://github.com/hbons/SparkleShare/wiki">check out the wiki</a>, <a href="https://github.com/hbons/SparkleShare/wiki">roadmap</a>, and 
          <a href="https://github.com/hbons/SparkleShare">source code</a>.
          You can also <a href="https://github.com/hbons/SparkleShare/issues">report problems</a>, <a href="http://www.transifex.net/projects/p/sparkleshare/">write translations</a>, 
          or <a href="https://github.com/hbons/SparkleShare/downloads">test development versions</a>.</p>
      </div>
      <div class="tile flattr enabled bottom-left-corner" onclick="location.href='https://flattr.com/thing/21770/'">
        <div class="os">flattr us</div>
      </div>
      <div class="tile paypal enabled" onclick="document.forms['paypal'].submit()">
        <div class="os">support us</div>
      </div>
    </div>

    <form id="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="G4YETY4ANWHAC">
    </form>
<?php get_footer(); ?>
