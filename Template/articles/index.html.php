    <!-- QUESTION 1 - question aimez-vous les animaux -->
    <form id="formulaire" action="merci-sondage-animaux" method="POST">
      <section v-show="likeAnimal" id="questionLikePet" class="container">
        <h3>Aimez-vous les animaux ? </h3>
        <div class="form">
          <input @click="yeslikeanimal()" type="radio" id="aimerOui" name="likeAnimal" value="yes" required>
          <label class="labelforcheck" for="aimerOui">Oui</label>
          <input @click="nolikeanimal()" type="radio" id="aimerNon" name="likeAnimal" value="no" required>
          <label class="labelforcheck" for="aimerNon">Non</label>
          <input @click="dependlikeanimal()" type="radio" id="aimerCaDepend" name="likeAnimal" value="depends" required>
          <label class="labelforcheck" for="aimerCaDepend">&#xC7;a dépend lesquels</label>
        </div>
      </section>
      <!-- QUESTION 2A - question avez-vous un animaux -->
      <section v-show="haveAnimal" id="questionHavePet" class="container">
        <h3>Avez-vous un animal ? </h3>
        <div class="form">
          <input type="radio" id="animalOui" name="haveAnimal" value="yes">
          <label @click="yeshaveanimal()" class="labelforcheck" for="animalOui">Oui</label>
          <input type="radio" id="animalNon" name="haveAnimal" value="no">
          <label @click="toggleButton()" class="labelforcheck" for="animalNon">Non</label>
          <button v-show="buttonNoHaveAnimal" name="form" value="noHavePet" class="btnValider">Valider</button>
          <p @click="returnlikeanimal()">Revenir à la question précédente</p>
        </div>
      </section>

      <!-- QUESTION 3 - dites-nous lequel -->
      <section v-show="petSpecies" id="questionPetSpecies" class="container">
        <div class="form">
          <h3><label for="petSpecies">Dites-nous le(s)quel(s)</label></h3>
          <div>
            <input type="text" class="petSpecies" name="species[0]">
            <input type="text" class="petSpecies" name="species[1]">
          </div>
          <div id="divAddSpecies"></div>
          <div id="btnAddSpecies">
            <img src="img/ajouter_un_animal.png" alt="ajouter un animal" title="ajouter un animal">
            <p>ajouter un animal</p>
          </div>
          <button name="form" value="havePet" class="btnValider">Valider</button>
          <p @click="returnhaveanimal()">Revenir à la question précédente</p>
        </div>
      </section>

      <!-- QUESTION 2B - si non, pourquoi?-->
      <section v-show="noLikeAnimal" id="questionNotLike" class="container">
        <h3>Pourquoi? </h3>
        <p>Choisissez la (ou les) raison(s) correspondant à votre réponse </p>
        <div class="form">
          <input type="checkbox" id="noice" name="noice" value="1">
          <label class="labelforcheck" for="noice">Le bruit</label>
          <input type="checkbox" id="clean" name="clean" value="1">
          <label class="labelforcheck" for="clean">L'hygiène</label>
          <input type="checkbox" id="cost" name="cost" value="1">
          <label class="labelforcheck" for="cost">Le coût</label>
          <input type="checkbox" id="religion" name="religion" value="1">
          <label class="labelforcheck" for="religion">Par conviction religieuse</label>
          <input type="checkbox" id="other">
          <label class="labelforcheck" for="other" @click="toggleInputOther()">Autres</label>
          <input v-model="textOther" v-show="other" type="text" id="specifyOther" @input="nbchar()" placeholder="Précisez" name="other">
          <label for="specifyOther"></label>
          <p> {{ messageOther }}</p>
          <button name="form" value="notLikeAnimal" class="btnValider">Valider</button>
          <p @click="returnlikeanimalbis()">Revenir à la question précédente</p>
        </div>
      </section>
      <!-- QUESTION 2C - ça dépend-->
      <section v-show="dependLikeAnimal" id="questionItDependsOn" class="container">
        <h3>De quoi cela dépend-il? </h3>
        <p>Choisissez la (ou les) raison(s) correspondant à votre réponse </p>
        <div class="form">
          <input type="checkbox" id="accordingToSize" name="accordingToSize" value="1">
          <label class="labelforcheck" for="accordingToSize">De sa taille</label>
          <input type="checkbox" id="accordingToEducation" name="accordingToEducation" value="1">
          <label class="labelforcheck" for="accordingToEducation">De son éducation</label>
          <input type="checkbox" id="accordingToCost" name="accordingToCost" value="1">
          <label class="labelforcheck" for="accordingToCost">Du coût associé</label>
          <input type="checkbox" id="accordingToOther" @click="toggleInput()">
          <label class="labelforcheck" for="accordingToOther">Autres</label>
          <input v-model="textAccordingToOther" v-show="accordingToOther" @input="nbcharAccordingToOther()" type="text" maxlength="150" id="specify" placeholder="Précisez" name="accordingToOther">
          <p> {{ messageAccordingToOther }}</p>
          <label for="specify"></label>
          <button name="form" value="itdependsOn" class="btnValider">Valider</button>
          <p @click="returnlikeanimalter()">Revenir à la question précédente</p>
        </div>
      </section>
    </form>