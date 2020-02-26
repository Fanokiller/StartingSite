<?php include __DIR__ . '/../head.php' ?>

        <div class="main-content flex-1 bg-gray-400 mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <h1 class="border-bottom w-100">Inscription</h1>
                <form action="/../siteJeux/traitement/traitement_inscription.php" method="post" enctype="multipart/form-data" class="col-md-4">
                    <div class="form-group">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Nom_inscription">Nom</label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Nom_inscription" name="Nom_inscription" type="text">

                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">Mot de passe</label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password" name="password" type="password">
                    </div>
                    <div class="flex items-center justify-between my-10 mx-16">
                        <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" type="submit">Inscription</button>
                    </div>
                </form>
            </div>
        </div>
<?php include __DIR__ . '/../foot.php' ?>