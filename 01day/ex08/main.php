#!/usr/bin/php
<?PHP
include("ft_is_sort.php");
$tab = array("0", "1", "-2");
// $tab[] = "What are we doing now ?";
if (ft_is_sort($tab))
	echo "The array is sorted\n";
else
	echo "The array is not sorted\n";
?>
