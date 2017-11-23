<?php
$day=date('w');
$arr_quote=array("suffering without identifying with it. Eventually we even transcend it.","Contentment lives only in the hearts of those who are grateful.","On a deeper level, truthfulness includes accepting that we are not proprietors but caretakers of whatever we have.","Even our greatest achievements are hollow unless we’ve achieved a measure of inner satisfaction.","Humanity evolves when we realise that animals have the same rights to the Earth as we do.","The future depends on what we do in the present.","I destroy my enemy when I make him my friend.");
$arr_word=array("word_sun","word_mon","word_tue","word_wed","Aglet - The tip of a shoelace.","word_fri","word_sat");
echo "Quote of the day: <br>".$arr_quote[$day]."<br><br>";
echo "Word of the day: <br>".$arr_word[$day];
?>