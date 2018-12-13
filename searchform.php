<form name="searchform" method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div><input alt="search this site" class="search-box" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input type="hidden" id="searchsubmit" value="Search" />
<a href="javascript:  document.searchform.submit();">Search</a>
</div>
</form>