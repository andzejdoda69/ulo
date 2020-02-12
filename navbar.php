<?php

$filename=basename(get_included_files()[0]);

$menuitems=array(
    'index.php' => 'główna',
    'plan.php' => 'plan lekcji',
    'rekrutacja.php' => 'rekrutacja',
    'dziennik.php' => 'dziennik'
);

echo '<div id="navbar" class="content">';

foreach($menuitems as $file => $title)
{
    echo '<a ';
    if($filename==$file) echo 'id="active" ';
    echo 'href="'.$file.'">'.$title.'</a>';
}
    
echo '</div>';

?>