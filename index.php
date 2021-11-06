<?php

$movies = [
	'id' => 0, ['title' => 'Les évadés ', 'year' => '1994', 'description'=> 'Deux hommes emprisonnés se sont liés pendant plusieurs années, trouvant un réconfort et une rédemption finale par des actes de décence communs.'],
	'id' => 1, ['title' => 'Le parrain ', 'year' => '1972', 'description'=> 'Le patriarche vieillissant d\'une dynastie du crime organisé transfère le contrôle de son empire clandestin à son fils réticent.'],
	'id' => 2, ['title' => 'Le parrain, 2ème partie ', 'year' => '1974', 'description'=> 'La vie et la carrière de Vito Corleone dans les années 1920 à New York sont décrites, tandis que son fils, Michael, étend et renforce son emprise sur le syndicat du crime familial.'],
	'id' => 3, ['title' => 'The Dark Knight: Le chevalier noir ', 'year' => '2008', 'description'=> 'Quand la menace connue sous le nom de Joker émerge de son passé mystérieux, il fait des ravages et du chaos sur les gens de Gotham. Le chevalier noir doit accepter l\'un des plus grands tests psychologiques et physiques de sa capacité à combattre l\'injustice.'],
	'id' => 4, ['title' => '12 hommes en colère ', 'year' => '1957', 'description'=> 'Un juré tente d\'empêcher une erreur judiciaire en forçant ses collègues à reconsidérer les preuves.'],
	'id' => 5, ['title' => 'La liste de Schindler ', 'year' => '1993', 'description'=> 'Dans la Pologne occupée par les Allemands pendant la Seconde Guerre mondiale, Oskar Schindler devient progressivement préoccupé par sa main-d\'œuvre juive après avoir été témoin de leur persécution par les Allemands nazis.'],
	'id' => 6, ['title' => 'Le seigneur des anneaux: Le retour du roi ', 'year' => '2003', 'description'=> 'Gandalf et Aragorn mènent le Monde des Hommes contre l\'armée de Sauron pour attirer son regard de Frodon et de Sam alors qu\'ils approchent du Mont du Destin avec l\'Anneau Unique.'],
	'id' => 7, ['title' => 'Pulp Fiction ', 'year' => '1994', 'description'=> 'La vie de deux hommes de main, un boxeur, une femme de gangster et deux bandits de diner se mêlent dans quatre histoires de violence et de rédemption'],
	'id' => 8, ['title' => 'Le bon, la brute et le truand ', 'year' => '1966', 'description'=> 'Un escroc chasseur aux primes rejoint deux hommes dans une alliance précaire contre un tiers dans une course pour trouver une fortune en or enterré dans un cimetière isolé.'],
	'id' => 9, ['title' => 'Fight Club ', 'year' => '1999', 'description'=> 'Un employé de bureau insomniaque, à la recherche d\'un moyen de changer sa vie, croise le chemin d\'un savonnier diabolique, formant un club de combat souterrain qui évolue en quelque chose de bien pire.'],
	'id' => 10, ['title' => 'Le seigneur des anneaux: La communauté de l\'anneau ', 'year' => '2001', 'description'=> 'Un gentil Hobbit de la Comté et huit compagnons partirent en voyage pour détruire le puissant Anneau Unique et sauver la Terre du Milieu du Seigneur des Ténèbres Sauron.'],
	'id' => 11, ['title' => 'Forrest Gump ', 'year' => '1994', 'description'=> 'Les présidences de Kennedy et Johnson, du Vietnam, du Watergate et d\'autres histoires se déroulent dans la perspective d\'un homme d\'Alabama avec un QI de 75.'],
	'id' => 12, ['title' => 'L\'empire contre-attaque ', 'year' => '1980', 'description'=> 'Après que les rebelles aient été brutalement maîtrisés par l\'Empire sur la planète de glace Hoth, Luke Skywalker entame un entraînement Jedi avec Yoda, tandis que ses amis sont poursuivis par Dark Vador.'],
	'id' => 13, ['title' => 'Inception ', 'year' => '2010', 'description'=> 'Un voleur, qui vole des secrets d’entreprise à l’aide de la technologie du partage des rêves, se voit confier la tâche inverse de placer une idée dans l’esprit d’un PDG.'],
	'id' => 14, ['title' => 'Le seigneur des anneaux: Les deux tours ', 'year' => '2002', 'description'=> 'Tandis que Frodon et Sam se rapprochent du Mordor avec l\'aide de l\'instable Gollum, la communion divisée prend position contre le nouvel allié de Sauron, Saruman, et ses hordes d\'Isengard.'],
	'id' => 15, ['title' => 'Vol au-dessus d\'un nid de coucou ', 'year' => '1975', 'description'=> 'Un criminel plaide la folie après avoir eu des ennuis à nouveau et une fois dans l\'institution mentale se rebelle contre l\'infirmière oppressive et rallie les patients effrayés.'],
	'id' => 16, ['title' => 'Les affranchis ', 'year' => '1990', 'description'=> 'L\'histoire de Henry Hill et sa vie dans la foule, couvrant sa relation avec sa femme Karen Hill et ses partenaires de la foule Jimmy Conway et Tommy DeVito dans le syndicat du crime italo-américain.'],
	'id' => 17, ['title' => 'Matrix ', 'year' => '1999', 'description'=> 'Un hacker informatique apprend de mystérieux rebelles sur la vraie nature de sa réalité et son rôle dans la guerre contre ses contrôleurs.'],
	'id' => 18, ['title' => 'Les sept samouraïs ', 'year' => '1954', 'description'=> 'Un village pauvre attaqué par des bandits recrute sept samouraïs au chômage pour les aider à se défendre.'],
];

// extraction d'un tableau dédoublonné des années de sortie des films
$years = [];
foreach($movies as $movie) {
	if(!is_null($movie['year'])
		&& !in_array($movie['year'], $years)) {
			$years[] = $movie['year'];
	}
}
sort($years); // tri croissant
?>

<section>
	<ul>
		<?php foreach ($years as $year): ?>
			<li><a href="index.php?year=<?= $year ?>"><?= $year ?></a></li>
		<?php endforeach; ?>
	</ul>
	<?php if(isset($_GET['year'])): ?>
		<h2>Liste des films trouvés :</h2>
		<?php foreach($movies as $movie):
			if($movie['year'] == $_GET['year']):?>
				<p><?= $movie['title'] ?> (<?= $movie['year'] ?>)</p>
				<p><?= $movie['description'] ?></p>
			<?php endif; ?>
		<?php endforeach; ?>
 	<?php endif; ?>
</section>
