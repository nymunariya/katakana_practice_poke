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
      <title>Nyms World &laquo; ポケットモンスター カタカナの練習</title>
      
          	
      		<link rel="stylesheet" href="/templates/nym_html5.css" type="text/css" media="screen" />
      		<link rel="stylesheet" href="poke.css" />
      </head>
      <body>
      	<main>
      		<header>
      			<nav>
      				<a href="/about/" title="About Nym">About</a>
      				<a href="/projekte/" class="current" title="Nyms Projects">Projects</a>
      				<a href="/screenshots/" title="Nyms Photos">Screenshots</a>
      			</nav>
      			<section></section>
      		</header>
      		<section id="body" class="full">
	  			<article id="nav">
					<h2>ポケットモンスター カタカナの練習</h2>
						<p>
							<a href="index.php">練習</a>
							<a href="cards.php">ポケモン</a>
							<a href="https://github.com/nymunariya/katakana_practice_poke/">Github<br />Repository</a>
						</p>
				</article>
				<!--<article id="cardslist" class="Sakura">
					<h2>Pokémon <select name="cards" onchange="document.getElementById('cardslist').setAttribute('class', this.options[this.selectedIndex].value);">
						<option value="Sugimori">Sugimore</option>
						<option value="Sprites">Sprites</option>
						</select></h2>
						
				</article>-->
				<article>
					<?php foreach( $pokeDeck->cards as $card ) { 
						$card_x = ( ( $card['id'] - 1 ) % 5) * 187;
						$card_y = ( ( $card['id'] - ( $card['id'] % 5 ) ) / 5 ) * 152;
						if( $card['id'] % 5 == 0 && $card['id'] != 0 ) $card_y = $card_y - 152;
					?>
						<div class="cards <?php echo $card['type1']; ?>">
							<div class="card_img" style="">
								<div class="id"><?php echo $card['kana']; ?><!--<br />-->
								<span><?php echo $card['id']; ?></span></div>
								
								<div class="class_holder  <?php echo $card['type2']; ?>2">
									<span class="class"><?php echo $card['type1']; ?></span><?php if( $card['type1'] != "" ) {?><span class="class2"><?php echo $card['type2']; ?></span><?php } ?>
								</div>
								<div class="image" style="background-position: -<?php echo ( $card_x ); ?>px -<?php echo ( $card_y ); ?>px;"></div>
								
								<div class="name"><?php echo $card['name_katakana']; ?></div>
							</div>
						</div>
					<?php } ?>
				</article>
			</section>
			<footer>
				<p>Copyleft <a href="/about/" title="Nyms World">Nyms World</a> | Artwork Copyright Nintendo</p>
			</footer>
		</main>
	</body>
</html>
	  		
