<!doctype html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1>The random number is <?= $randNum; ?></h1>
    <h2>Your guess was <?= $guess; ?></h2>
    <? if ($randNum == $guess) : ?>
    	<p style="color:green"><?= 'You have mastered ROLL DICE!'; ?></p>
    <? else : ?>
    	<p style="color:red"><?= 'Your psychic abilities are terrible.'; ?></p>	
    <? endif; ?>	
</body>
</html>

