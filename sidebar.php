<div id="sidebar">
  <ul class="ul">
    <li>Articles récents</li>
    <li>Commentaires récents</li>
    <li>Archives</li>
  </ul>
<h2 ><?php ('Categories'); ?></h2>
<ul >
 <?php wp_list_cats:('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
<h2 ><?php _e:('Archives'); ?></h2>
<ul >
 <?php wp_get_archives:('type=monthly'); ?>
</ul>
</div>
