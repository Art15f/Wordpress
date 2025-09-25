<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/'));?>">
    <div>
        <label class="screean-read-text" for="s">Search Form:</label>
        <input type="text" value="<?php echo get_search_query();?>" name="s" id="s">
        <inpute type="submit" id="searchsubmit" value="search">
</div>

</form>