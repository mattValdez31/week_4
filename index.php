<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br>";

// Question 2

$date = str_replace("-","/",$date);
echo $date . "<br>";

// Question 3

if (strcmp($date, $tar) > 0)
{
	echo "The future";
}
elseif (strcmp($date, $tar) < 0)
{
	echo "The past";
}
else
{
	echo "Oops";
}

echo "<br>";

// Question 4

for ($i=0; $i<strlen($date); $i++)
{
	if ($date[$i] == '/')
	{
		echo $i . " ";
	}
}

echo "<br>";

// Question 5

$numWords = str_word_count($date, 0);
echo "Number of words in \$date: " . $numWords . "<br>";

// Question 6
$randStr = "Matthew";

echo strlen($randStr) . "<br>";

// Question 7

echo ord($randStr[0]) . "<br>";

// Question 8

for ($i = strlen($date)-2;$i < strlen($date);$i++)
{
	echo $date[$i] . " ";
}

echo "<br>";

// Question 9

$dateArr = explode("/", $date);
foreach($dateArr as $item)
{
	echo $item . " ";
}

echo "<br>";

// Question #10

foreach($year as $y)
{
	$rem = $y%400;
	switch($rem)
	{
		case 0:
			echo $y . ":True ";
			break;
		default:
			$rem = $y%100;
			switch($rem)
				{case 0:
					echo $y . ":False ";
					break;
				default:
					$rem = $y%4;
					switch($rem)
						{case 0:
							echo $y . ":True ";
							break;
						default:
							echo $y . ":False ";}}
	}
}

echo "<br>";

for ($i = 0; $i < count($year); $i++)
{
	$rem = $year[$i]%400;
	switch($rem)
	{
		case 0:
			echo $year[$i] . ":True ";
			break;
		default:
			$rem = $year[$i]%100;
			switch($rem)
			{
				case 0:
					echo $year[$i] . ":False ";
					break;
				default:
					$rem = $year[$i]%4;
					switch($rem)
					{
						case 0:
							echo $year[$i] . ":True ";
							break;
						default:
							echo $year[$i] . ":False ";
					}
			}
	}
}

?>
