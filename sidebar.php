  <div id="sidebar">
    <ul>
     <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

<!--
      <li id="calendar">
      <?php get_calendar(2); ?>
      </li>
-->
<li>
<h2>Pages</h2>
<ul>
<li>
    <a href="http://www.irish-go.org/about">About the IGA</a>
</li>
<li>
    <a href="http://www.irish-go.org/clubs-tournaments/">Clubs & Tournaments</a>
</li>
  <li>
    <a href="http://www.irish-go.org/clubs-tournaments/irish-open/2010-irish-go-congress/"> - Irish Go Congress</a>
    </li>
    <li>
    <a href="http://www.irish-go.org/clubs-tournaments/Belfast"> - Belfast</a>
    </li>
       <li>
    <a href="http://www.irish-go.org/clubs-tournaments/Cork"> - Cork</a>
    </li>
    <li>
    <a href="http://www.irish-go.org/clubs-tournaments/Dublin"> - Dublin</a>
    </li>
    <li>
    <a href="http://www.irish-go.org/clubs-tournaments/Galway"> - Galway</a>
    </li>
  

<li>
    <a href="http://www.irish-go.org/national-international/">National & International</a>

 </li>
    <li>
    <a href="http://www.irish-go.org/national-international/ladder"> - Ladder</a>
    </li>
    <li>
    <a href="http://www.irish-go.org/national-international/top-8"> - Top 8</a>
    </li>
    <li>
    <a href="http://www.irish-go.org/national-international/Japan"> - Japan</a>
    </li>
    <li>
    <a href="http://www.irish-go.org/national-international/Korea"> - Korea</a>
    </li>


<li>
    <a href="http://www.irish-go.org/links/">Links</a>
</li>
<li>
    <a href="http://www.irish-go.org/contact/">Contact Us<a>
</li>
</ul>
</li>

      <li><h2><?php _e('Categories'); ?></h2>
        <ul>
        <?php list_cats(0, '', 'name', 'asc', '', 1, 0, 1, 1, 1, 1, 0,'','','','','') ?>
        </ul>
      </li>


                        <li>
                             <h2>IGA Sponsors</h2>
                                  <ul>

                                    <li><a href="http://breakfast.go4go.net/">Go lessons</a>
                                     </li>
                                      <li><a href="http://insei-league.com"><img src="http://www.irish-go.org/wp-content/themes/Wuhan/images/button_insei_league.gif" border="0"/></a>
                                      <div class="imglegend">Insei League on KGS</div>
                                     </li>

                                      <li><a href="http://breakfast.go4go.net/">Go lessons</a><br>
<a href="http://insei-league.com"><img src="http://www.irish-go.org/wp-content/themes/Wuhan/images/button_insei_league.gif" border="0"/></a>
                                      <div class="imglegend">Insei League on KGS</div><br>
                                           <a href="http://www.oksports.ie"><img src="http://www.irish-go.org/wp-content/themes/Wuhan/images/oksports.gif" border="0"/></a>
                                           <div class="imglegend">
                                                <a href="http://www.oksports.ie">Ok Sports</a> is the ultimate place in Ireland for sports equipment and games!<br/>
                                                A <b>10% discount</b> applies to all IGA members!
                                           </div>

                                      </li>
                                  </ul>

                         </li>

<?php get_links_list(); ?>





        <li><h2><?php _e('Meta'); ?></h2>
        <ul>
          <?php wp_register(); ?>
          <li><?php wp_loginout(); ?></li>
          <li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
          <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
          <li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>">WordPress</a></li>
          <?php wp_meta(); ?>
        </ul>
        </li>



        <?php endif; ?>

    </ul>
  </div>

