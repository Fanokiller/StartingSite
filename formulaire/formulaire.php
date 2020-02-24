<?php include __DIR__ . '/../head.php' ?>
<div class="w-full bg-gray-400 text-center sm:text-sm text-base">
            <div class="max-w-2xl mx-auto">
                <form class="w-full max-w-lg p-10" action="/../siteJeux/formulaire/traitement_ajout.php" method="post" enctype="multipart/form-data">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="J_titre">
                      Nom du jeu
                    </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nomJeux" type="text" placeholder="League of legend">
                            <p class="text-red-500 text-xs italic">Saisissez le nom du jeu souhaiter.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="J_editeur">
                      L'editeur
                    </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="editeur" type="text" placeholder="Riot Games">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="J_type">
                      Type de jeu
                    </label>
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option>Selectionnez le type de plateforme</option>
                        <option>Action</option>
                        <option>RPG</option>
                        <option>Course</option>
                        <option>Plateforme</option>
                        <option>Aventure</option>
                        <option>FPS</option>
                        <option>Arcade</option>
                      </select>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="jour">
                      Jour
                    </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="jour" type="number" placeholder="1">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="mois">
                      Mois
                    </label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="mois">
                        <option>Janvier</option>
                        <option>Fevrier</option>
                        <option>Mars</option>
                        <option>Avril</option>
                        <option>Mai</option>
                        <option>Juin</option>
                        <option>Juillet</option>
                        <option>Août</option>
                        <option>Septembre</option>
                        <option>Octobre</option>
                        <option>Novembre</option>
                        <option>Décembre</option>
                      </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="annees">
                      Années
                    </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="annees" type="number" placeholder="1999">
                        </div>
                        <div class="flex items-start justify-between my-10 mx-16">
                            <button class="bg-gray-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="button">
                            <a href="accueil.html">Annuler</a>
                          </button>
                        </div>
                        <div class="flex items-end justify-between my-10 mx-16">
                            <button class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                            Envoyer
                          </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php include __DIR__ . '/../foot.php' ?>