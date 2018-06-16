<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo TITLE; ?></title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="calculator">
    <h3>Calculator</h3>
    <div class="display">
      <div class=display-css>
    	   <?php echo "Summa: " . $paramOne . ' + ' . $paramTwo . ' = ' . $summa; ?>
      </div>
      <div class=display-css>
    	   <?php echo "Subtraction: " . $paramOne . ' - ' . $paramTwo . ' = ' . $subtraction; ?>
      </div>
      <div class=display-css>
    	   <?php echo "Multiplication: " . $paramOne . ' * ' . $paramTwo . ' = ' . $multiplication; ?>
      </div>
      <div class=display-css>
    	   <?php echo "Devision: " . $paramOne . ' / ' . $paramTwo . ' = ' . $division; ?>
      </div>
      <div class=display-css>
    	   <?php echo "Square root: " . '&#8730;' . $paramOne . ' = ' . $square; ?>
      </div>
      <div class=display-css>
         <?php echo "Percents: " . $paramOne . ' % ' . $paramTwo . ' = ' . $percents; ?>
      </div>
      <div class=display-css>
         <?php echo 'Memory: ( ' . $paramOne . ' + ' . $paramTwo.' )' . ' * ' . $paramFive.' = ' . $result; ?>
      </div>
    </div>
    <ul>
      <li>M</li>
      <li>%</li>
      <li>&#8730;</li>
      <li>/</li>
    </ul>
    <ul>
      <li>7</li>
      <li>8</li>
      <li>9</li>
      <li>*</li>
    </ul>
    <ul>
      <li>4</li>
      <li>5</li>
      <li>6</li>
      <li>-</li>
    </ul>
    <ul>
      <li>1</li>
      <li>2</li>
      <li>3</li>
      <li>+</li>
    </ul>
    <ul>
      <li>0</li>
      <li>,</li>
      <li>.</li>
      <li>=</li>
    </ul>
  </div>
</body>
</html>
