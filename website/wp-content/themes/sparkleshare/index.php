<?php get_header(); ?>
<a href="http://github.com/hbons/SparkleShare"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://a248.e.akamai.net/assets.github.com/img/e6bef7a091f5f3138b8cd40bc3e114258dd68ddf/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub"></a>i
    <div id="splash">
      <div class="navigation-back"></div>
      <div class="navigation-forward"></div>
      <div id="graphic"></div>
      <div id="text"></div>
    </div>
    <div class="wrapper">
      <div class="tile linux enabled" onclick="location.href='linux-downloads/'"><div class="os">linux</div></div>
      <div class="tile mac enabled" onclick="location.href='mac-downloads/'"><div class="os">mac</div></div>
      <div class="tile windows enabled" onclick="location.href='windows-downloads'"><div class="os">windows</div></div>
      <div class="tile twitter enabled" onclick="location.href='http://www.twitter.com/sparkleshare'">
        <div class="os">get updates</div></div>
      </div>
    </div>
    <div class="wrapper">
      <div class="tile-big bottom-left-corner">
        <h1>get started</h1>
        <p>Setting up your own host to work with SparkleShare is relatively easy. We've written a <a href="http://sparkleshare.org/set-up-a-host/">short page</a> about it. The <a href="/help/">documentation</a> and <a href="/FAQ/">FAQ</a> should handle most of your questions.</p><p>You can use SparkleShare on any site that provides Git repositories.</p>
        <p>Need more help? Join us in our IRC channel: #sparkleshare on irc.gnome.org.</p></div>
      <div class="tile-big bottom-right-corner" style="float: right; margin-right: 7px;"> 
        <h1>get involved</h1>
          <p>SparkleShare is <a href="http://en.wikipedia.org/wiki/Free_software">Free</a> and <a href="http://en.wikipedia.org/wiki/Open-source_software">Open Source</a> software and is 
          <a href="https://github.com/hbons/SparkleShare/blob/master/legal/AUTHORS.txt">built by people</a> who care about privacy and freedom. Not only can you use it however you like, you are also 
          free to modify and redistribute it when you give the recipients the <a href="https://github.com/hbons/SparkleShare/blob/master/legal/LICENSE.txt">same freedoms</a>.</p>

          <p>If you'd like to help out: check out the <a href="https://github.com/hbons/SparkleShare/wiki">wiki</a> on <a href="https://github.com/hbons/SparkleShare/wiki/Contributing">how to contribute</a>, and get the            <a href="https://github.com/hbons/SparkleShare">source code</a>.
          You can also <a href="https://github.com/hbons/SparkleShare/issues">report problems</a>, <a href="http://www.transifex.net/projects/p/sparkleshare/">write translations</a>, 
          or <a href="https://github.com/hbons/SparkleShare/downloads">test development versions</a>.</p>
      </div>
    </div>

    <form id="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="G4YETY4ANWHAC">
    </form>
<?php get_footer(); ?>
