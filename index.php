<?php 		
require_once('poke_db.php'); 
$pokeDeck = new pokeDeck;


function choose_card( $num = "" ) {
	//global $cards_select;
	global $pokeDeck;
	
	$cards_list = "<select name=\"nr\">\n";//" . $num . "
	foreach( $pokeDeck->cards as $card ) {
		$cards_list .= "<option value=\"" . $card['id'] . "\"";
		if( $card['id'] == $num + 1 ) $cards_list .= " selected";
		$cards_list .= ">" . $card['id'] . " " . $card['name_katakana'] . "</option>\n";
	}
	
	$cards_list .= "</select>";
	
	return $cards_list;
} 

$card_kanto = true;
$card_johto = true;

if( $_GET['nr'] ) $card_id = $_GET['nr'] - 1;
else {
	if( $card_kanto == true ) $card_min = 0;
	else $card_min = 151;
	if( $card_johto == true ) $card_max = 250;
	else $card_max = 150;
	$card_id = rand($card_min,$card_max);
}

 


$card_x = ( ( $card_id - 1 ) % 5) * 187;
$card_y = ( ( $card_id - ( $card_id % 5 ) ) / 5 ) * 152;
if( $card_id % 5 == 0 && $card_id != 0 ) $card_y = $card_y - 152;

$card_name_katakana = $pokeDeck->cards[$card_id]['name_katakana'];

?>


<!DOCTYPE html>
	<html>
		<head>
	  	<meta charset="UTF-8" />
      <title>ポケットモンスター カタカナの練習</title>
      		<link rel="stylesheet" href="poke.css" />
      </head>
      <body>
      	<main>
      		<section id="body" class="full">
	  			<article id="nav">
					<h2>ポケットモンスター カタカナの練習</h2>
						<p>
							<a href="index.php">練習</a>
							<a href="cards.php">ポケモン</a>
							<a href="https://github.com/nymunariya/katakana_practice_poke/">Github<br />Repository</a>
						</p>
				</article>
				<article>
					<div id="index_flip">
						<div class="cardflip" ontouchstart="this.classList.toggle('hover');">
							<div class="cardsflip <?php echo $pokeDeck->cards[$card_id]['type1']; ?>">
								<div id="back" class="card_img" style="">
									<div class="id"><?php echo $pokeDeck->cards[$card_id]['kana']; ?>
									<span><?php echo $pokeDeck->cards[$card_id]['id']; ?></span></div>
									
									<div class="class_holder  <?php echo $pokeDeck->cards[$card_id]['type2']; ?>2">
										<span class="class"><?php echo $pokeDeck->cards[$card_id]['type1']; ?></span><?php if( $pokeDeck->cards[$card_id]['type1'] != "" ) {?><span class="class2"><?php echo $pokeDeck->cards[$card_id]['type2']; ?></span><?php } ?>
									</div>
									<div class="image" style="background-position: -<?php echo ( $card_x ); ?>px -<?php echo ( $card_y ); ?>px;"></div>
									
									<div class="name"><?php echo $pokeDeck->cards[$card_id]['name_katakana']; ?></div>
									<!--<div class="name hiragana"><?php echo $pokeDeck->cards[$card_id]['name_hiragana']; ?></div>-->
					
								<div class="info"><?php echo $card_id . "; " . $pokeDeck->cards[$card_id]['id'] % 5 . "; " . ( $card_id - ( $card_id % 5 ) ) / 5; ?></div>
								</div>
								
								<div id="front" class="card_img" style="">
									<div class="name hiragana"><h1><?php echo $pokeDeck->cards[$card_id]['name_hiragana']; ?></h1></div>
									<div class="name"><?php echo $pokeDeck->cards[$card_id]['name_katakana']; ?></div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article>
					<center><form action=""><?php echo choose_card($card_id); ?><input type="submit" value="Go" /></form>
					<form action=""><span><input type="checkbox" name="kanto" <?php if( $card_kanto ) echo( "checked"); ?>/>Kanto</span><span><input type="checkbox" name="johto" <?php if( $card_johto ) echo( "checked"); ?> />Johto</span><input type="submit" value="random" /></form></center>
				</article>
			</section>
			<footer>
				<p>Copyleft <a href="/about/" title="Nyms World">Nyms World</a> | Artwork Copyright Nintendo</p>
			</footer>
		</main>
	</body>
</html>
	  		
