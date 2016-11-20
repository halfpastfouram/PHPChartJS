<?php

require_once '../vendor/autoload.php';

use Halfpastfour\PHPChartJS\Factory;

$factory   = new Factory();
$bar       = $factory->create( $factory::HORIZONTAL_BAR );

// Set labels
$bar->getLabels()->exchangeArray( array(
	"M", "T", "W", "T", "F", "S", "S"
) );

// Add Datasets
$apples = $bar->createDataSet();
$apples->setLabel( 'apples' )
	->setBackgroundColor( 'rgba( 0, 150, 0, .5 )' )
	->data()->exchangeArray( array(
		12, 19, 3, 17, 28, 24, 7
	) );
$bar->addDataSet( $apples );

$oranges = $bar->createDataSet();
$oranges->setLabel( 'oranges' )
	->setBackgroundColor( 'rgba( 255, 153, 0, .5 )' )
	->data()->exchangeArray( array(
		30, 29, 5, 5, 20, 3, 10
	) );
$bar->addDataSet( $oranges );

?>

<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
</head>
<body>
<?php
// Render the chart
echo $bar->render();
?>
</body>
</html>