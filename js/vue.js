const FORMULAIRE = Vue.createApp({
	data() {
		return {
			likeAnimal: true,
			haveAnimal: false,
			petSpecies: false,
			noLikeAnimal: false,
			dependLikeAnimal: false,
			textOther: '',
			other: false,
			textAccordingToOther: '',
			accordingToOther: false,
			messageOther: '',
			messageAccordingToOther: '',
			buttonNoHaveAnimal: false,
		};
	},
	methods: {
		// NAVIGATION ENTRE LES SECTIONS

		// afficher la section "avez-vous un animal" au clic sur "oui" de la question "aimez-vous les animaux"
		yeslikeanimal() {
			(this.likeAnimal = false), (this.haveAnimal = true);
		},
		// afficher la section "pourquoi" au clic sur "non" de la question "aimez-vous les animaux"
		nolikeanimal() {
			(this.likeAnimal = false), (this.noLikeAnimal = true);
		},
		// afficher la section "de quoi cela dépend-il?" au clic sur "cela dépend" de la question "aimez-vous les animaux"
		dependlikeanimal() {
			(this.likeAnimal = false), (this.dependLikeAnimal = true);
		},
		// afficher la section "si oui lequel" au clic sur "oui" de la question "avez-vous un animal"
		yeshaveanimal() {
			(this.haveAnimal = false), (this.petSpecies = true);
			this.buttonNoHaveAnimal = false;
		},

		// retourner à la page "aimez-vous les animaux" depuis la  page "avez-vous un animal"
		returnlikeanimal() {
			(this.haveAnimal = false), (this.likeAnimal = true);
		},
		// retourner à la page "avez-vous un animal" depuis la  page "lequel"
		returnhaveanimal() {
			(this.petSpecies = false), (this.haveAnimal = true);
		},
		// retourner à la page "aimez-vous les animaux" depuis la  page "avez-vous un animal"
		returnlikeanimalbis() {
			(this.noLikeAnimal = false), (this.likeAnimal = true);
		},
		// retourner à la page "aimez-vous les animaux" depuis la  page "avez-vous un animal"
		returnlikeanimalter() {
			(this.dependLikeAnimal = false), (this.likeAnimal = true);
		},

		// AFFICHAGE DES CHAMPS AU CLIC

		// afficher autre dans la section "pourquoi" (n'aime pas les animaux)
		toggleInputOther() {
			this.other = !this.other;
		},
		// afficher autre dans la section "de quoi cela dépend-il?"
		toggleInput() {
			this.accordingToOther = !this.accordingToOther;
		},
		// afficher le bouton valider au clic sur "non" dans la section "avez-vous un animal"
		toggleButton() {
			this.buttonNoHaveAnimal = !this.buttonNoHaveAnimal;
		},

		// afficher le nombre de caracères qu'il reste dans le champ "autre" - section "pourquoi" (n'aime pas les animaux)
		nbchar() {
			if (this.textOther.length > 150) {
				this.messageOther = 'Votre texte est trop long';
			} else {
				this.messageOther =
					'Vous pouvez saisir encore ' +
					(150 - this.textOther.length) +
					' caractères';
			}
		},
		// afficher le nombre de caracères qu'il reste dans le champ "autre" - section "de quoi cela dépend-il?"
		nbcharAccordingToOther() {
			if (this.textAccordingToOther.length > 150) {
				this.messageAccordingToOther = 'Votre texte est trop long';
			} else {
				this.messageAccordingToOther =
					'Vous pouvez saisir encore ' +
					(150 - this.textAccordingToOther.length) +
					' caractères';
			}
		},
	},
}).mount('#formulaire');
