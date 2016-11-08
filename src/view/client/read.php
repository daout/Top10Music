<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Information du compte client
	</h1>
	
	<p>
	Numéro du compte client : <?= $client->getId() ?><br /><br />
	Nom : <?= $client->getNom() ?><br />
	Prénom : <?= $client->getPrenom() ?>
	</p>
</article>