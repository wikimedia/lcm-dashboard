<?php 
	include 'rss_php.php'; 
    $test_array = array( 
                        'associative' => array('a' => 'value a','b' => 'value b'), 
                        'numerical' => array('value 1','value 2','value 3') 
                        ); 

    $RSS_PHP = new rss_php; 
     
    $RSS_PHP->loadArray($test_array, 'arraytest'); #the second param is an optional root node name. 
     
    echo $RSS_PHP->getXML(); 
?>