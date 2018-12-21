    <?php
    
    function factorial($n)
    {
    	if ($n == 0) return 1;
    	$answer = 1;
    	for ($j = 2; $j <= $n; ++$j)
    	{
    		$answer*=$j;
    	}
    	return $answer;
    }
    
    function stirling_approximation($n)
    {
    	$square_root_part = sqrt(2.0*M_PI*$n);
    	$power_part = pow($n / M_E, $n);
    	return $square_root_part * $power_part;
    }
    
    for ($n = 0; $n <= 10; ++$n)
    { 
    	print "$n!\n";
    	print factorial($n) . "\n";
    	print stirling_approximation($n) . " (Stirling's approximation)\n";
    	print "delta: " . abs(stirling_approximation($n)-factorial($n)) . "\n";
    	print "\n";
    }
    ?>
		
