<!-- <form role="search" method="get" class="header-top__search" id="searchform" action="<?php echo home_url( '/' ) ?>" >

  <input type="text" class="search-input" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск">
      
  <div>
    <input type="submit"  id="searchsubmit" value="" />
  </div>

</form> -->

  <form action="#" class="hm-searchbox" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
      <input type="text" placeholder="Поиск по номеру ..." value="<?php echo get_search_query() ?>" name="s" id="s">
      <button class="header-search_btn" type="submit"><i
          class="ion-ios-search-strong"><span></span></i></button>
  </form>
