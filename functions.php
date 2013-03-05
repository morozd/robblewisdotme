<?php

function wcount(){
 ob_start();
 the_content();
 $content = ob_get_clean();
 return sizeof(explode(" ", $content));
}

register_sidebars( 1,
array(
'name' => 'Home-Left',
'before_widget' => '<div id="%1$s">',
'after_widget' => '</div>',
'before_title' => '<h3><span class="icon">*</span> ',
'after_title' => '</h3>'
)
);

register_sidebars( 1,
array(
'name' => 'Home-Center',
'before_widget' => '<div id="%1$s">',
'after_widget' => '</div>',
'before_title' => '<h3><span class="icon">]</span> ',
'after_title' => '</h3>'
)
);

register_sidebars( 1,
array(
'name' => 'Home-Right',
'before_widget' => '<div id="%1$s">',
'after_widget' => '</div>',
'before_title' => '<h3><span class="icon">Z</span> ',
'after_title' => '</h3>'
)
);

?>