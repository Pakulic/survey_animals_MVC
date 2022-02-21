//________ INSERER DES CHAMPS DE SAISIE POUR LA SAISIE DES ESPECES D'ANIMAUX ______________

// déclaration des variables / sélections des contenus dans le fichier html

//selection du bouton "ajouter une ligne "
let btnAddSpecies = document.querySelector('#btnAddSpecies');
//selection de la div où l'on va ajouter les lignes
let divAddSpecies = document.querySelector('#divAddSpecies');
let species =[];

//on déclare l'incrémentation (ligne à partir de laquelle on rajoute d'autres lignes)
let i = 2;

//au clic sur le bouton "ajouter une ligne"
btnAddSpecies.addEventListener('click', (event) => {
	event.preventDefault();
	// ajouter un champ de saisie
	// divAddSpecies.innerHTML += `<input type="text" id="petSpecies" name="species[${i}]">`;
	var INPUT=document.createElement("input");
	INPUT.type = "text";
  INPUT.className="petSpecies";
	INPUT.name=`species[${i}]`;
	divAddSpecies.appendChild(INPUT);
	// on incrémente le compteur de 1
	i++;
});
