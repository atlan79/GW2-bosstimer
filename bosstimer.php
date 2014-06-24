<?php

// Der Zeitplan ist fix programmiert und entspricht der Momentaufnahme vom 23.06.2014
$ar_schedule = array(
	[0, 0, "The Shatterer"],     [0, 15, "Svanir Shaman"],  [0, 30, "Modniir Ulgoth"],       [0, 45, "Fire Elemental"],   [0, 55, "Karka Queen"], 
	[1, 0, "Golem Mark II"],     [1, 15, "Jungle Wurm"],    [1, 30, "Claw of Jormag"],       [1, 45, "Shadow Behemoth"],  [1, 55, "Tequatl"],
	[2, 0, "Taidha Covington"],  [2, 15, "Svanir Shaman"],  [2, 30, "Megadestroyer"],        [2, 45, "Fire Elemental"],   [2, 55, "Evolved Jungle Wurm"], 
	[3, 0, "The Shatterer"],     [3, 15, "Jungle Wurm"],    [3, 30, "Modniir Ulgoth"],       [3, 45, "Shadow Behemoth"],  [3, 55, "Karka Queen"], 
	[4, 0, "Golem Mark II"],     [4, 15, "Svanir Shaman"],  [4, 30, "Claw of Jormag"],       [4, 45, "Fire Elemental"],   [4, 55, "Tequatl"], 
	[5, 0, "Taidha Covington"],  [5, 15, "Jungle Wurm"],    [5, 30, "Megadestroyer"],        [5, 45, "Shadow Behemoth"],  [5, 55, "Evolved Jungle Wurm"], 
	[6, 0, "The Shatterer"],     [6, 15, "Svanir Shaman"],  [6, 30, "Modniir Ulgoth"],       [6, 45, "Fire Elemental"], 
	[7, 0, "Golem Mark II"],     [7, 15, "Jungle Wurm"],    [7, 30, "Claw of Jormag"],       [7, 45, "Shadow Behemoth"],  [7, 55, "Karka Queen"], 
	[8, 0, "Taidha Covington"],  [8, 15, "Svanir Shaman"],  [8, 30, "Megadestroyer"],        [8, 45, "Fire Elemental"],   [8, 55, "Tequatl"], 
	[9, 0, "The Shatterer"],     [9, 15, "Jungle Wurm"],    [9, 30, "Modniir Ulgoth"],       [9, 45, "Shadow Behemoth"],  [9, 55, "Evolved Jungle Wurm"], 
	[10, 0, "Golem Mark II"],    [10, 15, "Svanir Shaman"], [10, 30, "Claw of Jormag"],      [10, 45, "Fire Elemental"], 
	[11, 0, "Taidha Covington"], [11, 15, "Jungle Wurm"],   [11, 30, "Megadestroyer"],       [11, 45, "Shadow Behemoth"], 
	[12, 0, "The Shatterer"],    [12, 15, "Svanir Shaman"], [12, 25, "Karka Queen"],         [12, 30, "Modniir Ulgoth"],  [12, 45, "Fire Elemental"], 
	[13, 0, "Golem Mark II"],    [13, 15, "Jungle Wurm"],   [13, 25, "Tequatl"],             [13, 30, "Claw of Jormag"],  [13, 45, "Shadow Behemoth"], 
	[14, 0, "Taidha Covington"], [14, 15, "Svanir Shaman"], [14, 25, "Evolved Jungle Wurm"], [14, 30, "Megadestroyer"],   [14, 45, "Fire Elemental"], 
	[15, 0, "The Shatterer"],    [15, 15, "Jungle Wurm"],   [15, 30, "Modniir Ulgoth"],      [15, 45, "Shadow Behemoth"], 
	[16, 0, "Golem Mark II"],    [16, 15, "Svanir Shaman"], [16, 30, "Claw of Jormag"],      [16, 45, "Fire Elemental"],  [16, 55, "Karka Queen"], 
	[17, 0, "Taidha Covington"], [17, 15, "Jungle Wurm"],   [17, 30, "Megadestroyer"],       [17, 45, "Shadow Behemoth"], [17, 55, "Tequatl"], 
	[18, 0, "The Shatterer"],    [18, 15, "Svanir Shaman"], [18, 30, "Modniir Ulgoth"],      [18, 45, "Fire Elemental"],  [18, 55, "Evolved Jungle Wurm"], 
	[19, 0, "Golem Mark II"],    [19, 15, "Jungle Wurm"],   [19, 30, "Claw of Jormag"],      [19, 45, "Shadow Behemoth"], [19, 55, "Karka Queen"], 
	[20, 0, "Taidha Covington"], [20, 15, "Svanir Shaman"], [20, 30, "Megadestroyer"],       [20, 45, "Fire Elemental"],  [20, 55, "Tequatl"], 
	[21, 0, "The Shatterer"],    [21, 15, "Jungle Wurm"],   [21, 30, "Modniir Ulgoth"],      [21, 45, "Shadow Behemoth"], [21, 55, "Evolved Jungle Wurm"], 
	[22, 0, "Golem Mark II"],    [22, 15, "Svanir Shaman"], [22, 30, "Claw of Jormag"],      [22, 45, "Fire Elemental"], 
	[23, 0, "Taidha Covington"], [23, 15, "Jungle Wurm"],   [23, 30, "Megadestroyer"],       [23, 45, "Shadow Behemoth"], 
	[24, 0, "The Shatterer"],    [24, 15, "Svanir Shaman"], [24, 30, "Modniir Ulgoth"],      [24, 45, "Fire Elemental"],  [24, 55, "Karka Queen"]
); 

// Liste aller Bosse mit deren Drops und Beschreibungen / Werte im jeweiligen Array könnten auch in anderen Sprachen (Deutsch) hinterlegt werden
$ar_bosses = array ( 
	"Unknown" => array ( "title" => "Unknown boss", "description"=> "", "waypoints"=> "", "dragonite"=> "0", "items"=> "0", "bags"=> "0", "level"=> "0" ), 
	"TBD"=> array ( "title"=> "(To be Determined)", "description"=> "To be Determined..", "waypoints"=> "", "dragonite"=> "0", "items"=> "0", "bags"=> "0", "level"=> "0" ), 
	"Svanir Shaman"=> array ( "title"=> "Svanir Shaman", "description"=> "Sons of Svanir are spreading dragon corruption across the Maw in Wayfarer Foothills.", "waypoints"=> "[&BH4BAAA=]", "dragonite"=> "3 - 5", "items"=> "1", "bags"=> "0", "level"=> "10" ), 
	"Shadow Behemoth"=> array ( "title"=> "Shadow Behemoth", "description"=> "Underworld forces have been spotted in Queensdale's Godslost Swamp.", "waypoints"=> "[&BPwAAAA=]", "dragonite"=> "3 - 5", "items"=> "1", "bags"=> "0", "level"=> "15" ), 
	"Fire Elemental"=> array ( "title"=> "Fire Elemental", "description"=> "The C.L.E.A.N. 5000 has begun its decontamination subroutine at Thaumanova Reactor in Metrica Province.", "waypoints"=> "[&BEYAAAA=]", "dragonite"=> "3 - 5", "items"=> "1", "bags"=> "2", "level"=> "15" ), 
	"Jungle Wurm"=> array ( "title"=> "Jungle Wurm", "description"=> "Dark creatures have emerged from the Wychmire Swamp in Caledon Forest.", "waypoints"=> "[&BEEFAAA=]", "dragonite"=> "3 - 5", "items"=> "1", "bags"=> "0", "level"=> "15" ), 
	"Modniir Ulgoth"=> array ( "title"=> "Modniir Ulgoth", "description"=> "Ulgoth the Mighty is challenging the Seraph for control over the northern Harathi Hinterlands.", "waypoints"=> "[&BLEAAAA=]", "dragonite"=> "3 - 5", "items"=> "1", "bags"=> "2", "level"=> "43" ), 
	"The Shatterer"=> array ( "title"=> "The Shatterer", "description"=> "Vigil and Sentinel forces are about to assault the Shatterer in the Lowland Burns of Blazeridge Steppes.", "waypoints"=> "[&BE4DAAA=]", "dragonite"=> "15 - 25", "items"=> "1", "bags"=> "0", "level"=> "50" ), 
	"Taidha Covington"=> array ( "title"=> "Taidha Covington", "description"=> "Lionguard are preparing to attack Laughing Gull Island in Bloodtide Coast.", "waypoints"=> "[&BKgBAAA=]", "dragonite"=> "3 - 5", "items"=> "1", "bags"=> "0", "level"=> "50" ), 
	"Evolved Jungle Wurm"=> array ( "title"=> "Evolved Jungle Wurm", "description"=> "Vigil crusaders are investigating mysterious probes near the Firth of Revanion outpost in Bloodtide Coast.", "waypoints"=> "[&BKoBAAA=]", "dragonite"=> "40", "items"=> "2", "bags"=> "2", "level"=> "37" ), 
	"Tequatl"=> array ( "title"=> "Tequatl the Sunless", "description"=> "Tequatl the Sunless is attacking the Splintered Coast of Sparkfly Fen.", "waypoints"=> "[&BNABAAA=]", "dragonite"=> "20", "items"=> "2", "bags"=> "2", "level"=> "65" ), 
	"Golem Mark II"=> array ( "title"=> "Golem Mark II", "description"=> "Inquest are dumping toxic waste at Whitland Flats near Mount Maelstrom.", "waypoints"=> "[&BNQCAAA=]", "dragonite"=> "15 - 25", "items"=> "1", "bags"=> "2", "level"=> "68" ), 
	"Megadestroyer"=> array ( "title"=> "Megadestroyer", "description"=> "Mount Maelstrom's central cavern is on the brink of erupting.", "waypoints"=> "[&BM0CAAA=]", "dragonite"=> "0", "items"=> "1", "bags"=> "0", "level"=> "66" ), 
	"Claw of Jormag"=> array ( "title"=> "Claw of Jormag", "description"=> "The Claw of Jormag is bombarding Frostgorge Sound with corruption.", "waypoints"=> "[&BHoCAAA=]", "dragonite"=> "15 - 25", "items"=> "1", "bags"=> "2", "level"=> "80" ), 
	"Karka Queen"=> array ( "title"=> "Karka Queen", "description"=> "The Karka Queen has been spotted near settlements in Southsun Cove.", "waypoints"=> "[&BNcGAAA=]", "dragonite"=> "30", "items"=> "2", "bags"=> "2", "level"=> "80" ) 
);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8' />
    <title>GW2 World Boss Timer for [Fort]</title>
    <!-- CSS nach Wahl kann hier eingebaut werden -->
    <link rel='stylesheet' type='text/css' href='css/test.css'>
    <!-- Script verwendet jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    
    <script src="js/bosstimer.js"></script>
    <script>
      $( document ).ready(function() {
        
        storeChildDivs('boss-wrapper');
        setInterval(function () {
            showBosses(5)
          }, 1000); 
		  // showBosses nimmt einen Parameter für die Anzahl der anzuzeigenden Events entgegen 
		  // Der Refresh Interval ist auf 1000 miliseconds gesetzt

      });
    </script>
  </head>

  <body>
	<div id='boss-wrapper' style="width: 720px; min-width: 720px;">
	  <?php
		$i=1;
		foreach ($ar_schedule as $schedule_element) {
			// für jeden Boss wird ein DIV Container mit Startzeit, Titel, Anzahl Dragonite, Anzahl Gegenstände, Anzahl Säcke und nächstem Wegpunkt erstellt
			// Die Containter DIV-ID kann verändert werden, muss aber für jedes Event eindeutig sein.
			// Zusätzlich stünde noch die Beschreibung zur Verfügung
			// weitere Angaben sind denkbar und können im Array Bosses erweitert werden.
	  ?>
      <div id="<?= $i ?>" class="container" data-start="<?= str_pad($schedule_element[0],2,"0",STR_PAD_LEFT).":".str_pad($schedule_element[1],2,"0",STR_PAD_LEFT).":00" ?>">
		<div class="start"><?= str_pad($schedule_element[0],2,"0",STR_PAD_LEFT).":".str_pad($schedule_element[1],2,"0",STR_PAD_LEFT) ?></div>
		<div class="title"><?= $ar_bosses[$schedule_element[2]]['title'] ?></div>
		<div class="dragonite">
			<img width="16px" height="16px" src="http://wiki.guildwars2.com/images/4/44/Dragonite_Ore.png"><?= $ar_bosses[$schedule_element[2]]['dragonite'] ?>
		</div>
		<div class="items">
			<img width="16px" height="16px" src="http://wiki.guildwars2.com/images/thumb/d/df/Tarnished_Chain_Armor.png/35px-Tarnished_Chain_Armor.png">
				<?= $ar_bosses[$schedule_element[2]]['items'] ?>
		</div>
		<div class="bags"><?= $ar_bosses[$schedule_element[2]]['bags'] ?></div>
		<div class="waypoint">
			<img width="16px" height="16px" src="http://wiki.guildwars2.com/images/d/d2/Waypoint_%28map_icon%29.png">
			<input type="text" readonly="" onclick="this.select();" value="<?= $ar_bosses[$schedule_element[2]]['waypoints'] ?>" spellcheck="false">
		</div>
	  </div>
	  <?php
		  $i++;
		} 
	  ?>
	</div>
  </body>

</html> 
