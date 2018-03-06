# Exercice TP

## Créer les pages societe:list et societe:show

Relire le code de contact et contact show

## Formulaire contact update

Ajouter un lien modifier dans contact list (sur chaque ligne)

Reprendre le code de contact add

Ajouter au début le code de contact show pour récupérer le contact qu'il faudra passer en 2e param de 
`$contactForm = $this->createForm(\AppBundle\Form\ContactType::class, $contact);`

## Page delete

Ajouter un lien supprimer dans contact list

Option 1 (plus simple) : au clic du lien, supprimer puis rediriger vers la liste

Option 2 : faire une page de confirmer avec bouton oui et non (supprimer que sur le oui)

Pour supprimer on utilisera l'entitymanager et sa méthode `remove`


## Doctrine

Sur la page societe show afficher la liste des contacts de cette société

Regarde dans la doc de doctrine OneToMany Bidirectionnelle