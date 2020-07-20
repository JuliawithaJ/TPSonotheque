<?php

$allTitles = [];


$allTitles = [
  [
    "nom" => "Kaer Morhen",
    "artiste" => "Marcin Przybylowicz",
    "album" => "The witcher 3 : Wild hunt",
    "année" => "2015",
    "durée" => "2:35"
  ],
  [
    "nom" => "paranoïak",
    "artiste" => "Moha MMZ",
    "album" => "paranoïak",
    "année" => "2020",
    "durée" => "4:07"
  ],
  [
    "nom" => "tututu",
    "artiste" => "ICO ",
    "album" => "petit c*n",
    "année" => "2020",
    "durée" => "3:29"
  ],
  [
    "nom" => " Koh Lanta - le track #2",
    "artiste" => "ICO",
    "album" => "petit c*n",
    "année" => "2020",
    "durée" => "3:04"
  ],
  [
    "nom" => "Siri 3",
    "artiste" => "ICO",
    "album" => "petit c*n",
    "année" => "2020",
    "durée" => "3:04"
  ],
  [
    "nom" => "Stan by me",
    "artiste" => "G-eazy",
    "album" => " Everything's strange here",
    "année" => "2020",
    "durée" => "3:38"
  ],
  [
    "nom" => "Hera",
    "artiste" => "Georgio",
    "album" => "Héra",
    "année" => "2016",
    "durée" => "3:57"
  ],
  [
    "nom" => "Amsterdam",
    "artiste" => "Moha la squale",
    "album" => "Amsterdam",
    "année" => "2020",
    "durée" => "2:49"
  ],
  [
    "nom" => "Filer au Soleil",
    "artiste" => "An'Om",
    "album" => "Le remède",
    "année" => "2018",
    "durée" => "3:59"
  ],
  [
    "nom" => "Angela",
    "artiste" => "Hatik",
    "album" => "Chaise pliante",
    "année" => "2019",
    "durée" => "3:10"
  ]
  
];

function pre($allTitles){
  echo '<pre>';
  print_r($allTitles);
  echo '</pre>';
};

function displayTitle($id){
  global $allTitles;
  // var_dump($allTitles[$id]);
  echo 'debut ';
  echo $allTitles[$id]['nom'];
  echo $allTitles[$id]['durée'];
  echo ' fin <br>';
  // $str = "testing id number".$id."suspense..";
  // foreach ($allTitles as $id => $chanson){
  //   $str .= "<br>";
  //   $str .= "<div>".$id."</div>";
  // };
  // return $str;
}

function displayAllTitles(){
  global $allTitles;
  foreach ($allTitles as $id => $title){
    displayTitle($id);
  }
}



?>

<!DOCTYPE html>
<!-- déclaration de la langue du document à l'usage des lecteurs pour a11i -->
<html lang="fr">

<head>
  <!-- déclaration de l'usage de l'encodage utf-8 -->
  <meta charset="utf-8" />

  <!-- déclaration de l'intention pour le RWD de s'adapter au dispositif, à partir du niveau de zoom 1:1, sans réduction du contenu à la largeur du dispositif -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- titre du document, utilisé pour les résultats de recherche et pour l'onglet du naviguateur -->
  <title>Ma sonothèque</title>

  <!-- description courte (< 160 chars) du contenus du document pour les moteurs de recherches et le réf. -->
  <meta name="description" content="">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <!-- OU -->
  <!-- reboot CSS by Bootstrap  -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap-reboot.min.css" /> -->

  <!-- feuille de CSS personnalisée -->
  <link rel="stylesheet" href="styles.css" />
</head>

<body>

  <!-- HEADER  -->
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/ON_formation_cours/07·PHP/DW_sonotheque/correction">🎶Ma sonothèque</a>
    <div class="messages">
      <div class="alert alert-success" role="alert">Votre sonothèque 2 à bien été ajouté ! 👌</div>
    </div>
  </nav>
  <!-- / HEADER  -->

  <div class="container-fluid">
    <div class="row">
      <!-- ASIDE -->
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/ON_formation_cours/07·PHP/DW_sonotheque/correction?addPlaylist=1">
                ✨ Nouvelle sonothèque
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>🗄 Vos sonothèques</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <div class="btn-group d-flex justify-content-between" role="group" aria-label="liste sonothèque"> <a class="nav-link " href="/ON_formation_cours/07·PHP/DW_sonotheque/correction/index.php?displayPlaylist=0">🎶 Sonothèque n°0 (0)</a> <a class="nav-link" href="/ON_formation_cours/07·PHP/DW_sonotheque/correction/index.php?removePlaylist=0" title="supprimer la sonothèque n° 0">🗑</a> </div>
            </li>
            <li class="nav-item">
              <div class="btn-group d-flex justify-content-between" role="group" aria-label="liste sonothèque"> <a class="nav-link " href="/ON_formation_cours/07·PHP/DW_sonotheque/correction/index.php?displayPlaylist=1">🎶 Sonothèque n°1 (0)</a> <a class="nav-link" href="/ON_formation_cours/07·PHP/DW_sonotheque/correction/index.php?removePlaylist=1" title="supprimer la sonothèque n° 1">🗑</a> </div>
            </li>
            <li class="nav-item">
              <div class="btn-group d-flex justify-content-between" role="group" aria-label="liste sonothèque"> <a class="nav-link " href="/ON_formation_cours/07·PHP/DW_sonotheque/correction/index.php?displayPlaylist=2">🎶 Sonothèque n°2 (0)</a> <a class="nav-link" href="/ON_formation_cours/07·PHP/DW_sonotheque/correction/index.php?removePlaylist=2" title="supprimer la sonothèque n° 2">🗑</a> </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- / ASIDE -->

      <!-- MAIN  -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">🎶 Tous vos titres</h1>
          <div>9 titre(s)</div>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2"> <a href="/ON_formation_cours/07·PHP/DW_sonotheque/correction?addPlaylist=1" class="btn btn-sm btn-outline-light" title="Nouvelle sonothèque">✨</a> </div>
          </div>
        </div>
        <table class="table table-striped table-borderless table-hover table-sm">
          <thead class="thead-light">
            <tr>
              <th scope="col">Index</th>
              <th scope="col">Titre</th>
              <th scope="col">Artiste</th>
              <th scope="col">Album</th>
              <th scope="col">Année</th>
              <th scope="col">Durée</th>
              <th scope="col">Playlist</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>🎵 #0</td>
              <td>Kaer Morhen</td>
              <td>Marcin Przybylowicz</td>
              <td>The witcher 3 : Wild hunt</td>
              <td>2015</td>
              <td>2:35</td>
              <td>
                <form action="/ON_formation_cours/07·PHP/DW_sonotheque/correction/addToPlaylist.php" method="POST">
                  <div class="input-group"> <select name="PLAYLIST_ID" class="form-control">
                      <option value="-1" selected>Choisissez ...</option>
                      <option value="0">🎶 n°0</option>
                      <option value="1">🎶 n°1</option>
                      <option value="2">🎶 n°2</option>
                    </select>
                    <div class="input-group-append"> <button type="submit" class="btn btn-outline-success">✔️</button> </div>
                  </div> <input type="hidden" name="TITLE_ID" value="0">
                </form>
              </td>
            </tr>
            <tr>
              <td>🎵 #1</td>
              <td>Geralt Of Rivia</td>
              <td>Marcin Przybylowicz</td>
              <td>The witcher 3 : Wild hunt</td>
              <td>2015</td>
              <td>2:22</td>
              <td>
                <form action="/ON_formation_cours/07·PHP/DW_sonotheque/correction/addToPlaylist.php" method="POST">
                  <div class="input-group"> <select name="PLAYLIST_ID" class="form-control">
                      <option value="-1" selected>Choisissez ...</option>
                      <option value="0">🎶 n°0</option>
                      <option value="1">🎶 n°1</option>
                      <option value="2">🎶 n°2</option>
                    </select>
                    <div class="input-group-append"> <button type="submit" class="btn btn-outline-success">✔️</button> </div>
                  </div> <input type="hidden" name="TITLE_ID" value="1">
                </form>
              </td>
            </tr>
            <tr>
              <td>🎵 #2</td>
              <td>The Hunt Is Coming</td>
              <td>Marcin Przybylowicz</td>
              <td>The witcher 3 : Wild hunt</td>
              <td>2015</td>
              <td>2:06</td>
              <td>
                <form action="/ON_formation_cours/07·PHP/DW_sonotheque/correction/addToPlaylist.php" method="POST">
                  <div class="input-group"> <select name="PLAYLIST_ID" class="form-control">
                      <option value="-1" selected>Choisissez ...</option>
                      <option value="0">🎶 n°0</option>
                      <option value="1">🎶 n°1</option>
                      <option value="2">🎶 n°2</option>
                    </select>
                    <div class="input-group-append"> <button type="submit" class="btn btn-outline-success">✔️</button> </div>
                  </div> <input type="hidden" name="TITLE_ID" value="2">
                </form>
              </td>
            </tr>
            <tr>
              <td>🎵 #3</td>
              <td>World Browser (From "Super Mario 3D World")</td>
              <td>Qumu</td>
              <td>Qumu Nintendo Remixes</td>
              <td>2018</td>
              <td>2:27</td>
              <td>
                <form action="/ON_formation_cours/07·PHP/DW_sonotheque/correction/addToPlaylist.php" method="POST">
                  <div class="input-group"> <select name="PLAYLIST_ID" class="form-control">
                      <option value="-1" selected>Choisissez ...</option>
                      <option value="0">🎶 n°0</option>
                      <option value="1">🎶 n°1</option>
                      <option value="2">🎶 n°2</option>
                    </select>
                    <div class="input-group-append"> <button type="submit" class="btn btn-outline-success">✔️</button> </div>
                  </div> <input type="hidden" name="TITLE_ID" value="3">
                </form>
              </td>
            </tr>
            <tr>
              <td>🎵 #4</td>
              <td>Undertales (Megalovania Theme) - 8-bit Computer Game Version</td>
              <td>8-bit Arcade</td>
              <td>The Hidden Themes, Vol.1</td>
              <td>2018</td>
              <td>2:31</td>
              <td>
                <form action="/ON_formation_cours/07·PHP/DW_sonotheque/correction/addToPlaylist.php" method="POST">
                  <div class="input-group"> <select name="PLAYLIST_ID" class="form-control">
                      <option value="-1" selected>Choisissez ...</option>
                      <option value="0">🎶 n°0</option>
                      <option value="1">🎶 n°1</option>
                      <option value="2">🎶 n°2</option>
                    </select>
                    <div class="input-group-append"> <button type="submit" class="btn btn-outline-success">✔️</button> </div>
                  </div> <input type="hidden" name="TITLE_ID" value="4">
                </form>
              </td>
            </tr>
            <tr>
              <td>🎵 #5</td>
              <td>My Innermost Apocalypse</td>
              <td>Danny Baranowsky</td>
              <td>The Binding of Isaac</td>
              <td>2011</td>
              <td>5:00</td>
              <td>
                <form action="/ON_formation_cours/07·PHP/DW_sonotheque/correction/addToPlaylist.php" method="POST">
                  <div class="input-group"> <select name="PLAYLIST_ID" class="form-control">
                      <option value="-1" selected>Choisissez ...</option>
                      <option value="0">🎶 n°0</option>
                      <option value="1">🎶 n°1</option>
                      <option value="2">🎶 n°2</option>
                    </select>
                    <div class="input-group-append"> <button type="submit" class="btn btn-outline-success">✔️</button> </div>
                  </div> <input type="hidden" name="TITLE_ID" value="5">
                </form>
              </td>
            </tr>
            <tr>
              <td>🎵 #6</td>
              <td>The Battle of Lil'Slugger (Ch 1 Boos)</td>
              <td>Danny Baranowsky</td>
              <td>Super Meat Boy!</td>
              <td>2011</td>
              <td>2:14</td>
              <td>
                <form action="/ON_formation_cours/07·PHP/DW_sonotheque/correction/addToPlaylist.php" method="POST">
                  <div class="input-group"> <select name="PLAYLIST_ID" class="form-control">
                      <option value="-1" selected>Choisissez ...</option>
                      <option value="0">🎶 n°0</option>
                      <option value="1">🎶 n°1</option>
                      <option value="2">🎶 n°2</option>
                    </select>
                    <div class="input-group-append"> <button type="submit" class="btn btn-outline-success">✔️</button> </div>
                  </div> <input type="hidden" name="TITLE_ID" value="6">
                </form>
              </td>
            </tr>
            <tr>
              <td>🎵 #7</td>
              <td>Ballad of the Burning Squirrel (Ch 1 Dark World)</td>
              <td>Danny Baranowsky</td>
              <td>Super Meat Boy!</td>
              <td>2011</td>
              <td>2:51</td>
              <td>
                <form action="/ON_formation_cours/07·PHP/DW_sonotheque/correction/addToPlaylist.php" method="POST">
                  <div class="input-group"> <select name="PLAYLIST_ID" class="form-control">
                      <option value="-1" selected>Choisissez ...</option>
                      <option value="0">🎶 n°0</option>
                      <option value="1">🎶 n°1</option>
                      <option value="2">🎶 n°2</option>
                    </select>
                    <div class="input-group-append"> <button type="submit" class="btn btn-outline-success">✔️</button> </div>
                  </div> <input type="hidden" name="TITLE_ID" value="7">
                </form>
              </td>
            </tr>
            <tr>
              <td>🎵 #8</td>
              <td>Wake the White Wolf</td>
              <td>Miracle of Sound</td>
              <td>Level 5</td>
              <td>2014</td>
              <td>3:47</td>
              <td>
                <form action="/ON_formation_cours/07·PHP/DW_sonotheque/correction/addToPlaylist.php" method="POST">
                  <div class="input-group"> <select name="PLAYLIST_ID" class="form-control">
                      <option value="-1" selected>Choisissez ...</option>
                      <option value="0">🎶 n°0</option>
                      <option value="1">🎶 n°1</option>
                      <option value="2">🎶 n°2</option>
                    </select>
                    <div class="input-group-append"> <button type="submit" class="btn btn-outline-success">✔️</button> </div>
                  </div> <input type="hidden" name="TITLE_ID" value="8">
                </form>
              </td>
            </tr>
          </tbody>
        </table>
        <table>
          <thead class="thead-light">
            <tr>
              <th scope="col">Index</th>
              <th scope="col">Titre</th>
              <th scope="col">Artiste</th>
              <th scope="col">Album</th>
              <th scope="col">Année</th>
              <th scope="col">Durée</th>
              <th scope="col">Playlist</th>
            </tr>
          </thead>
          <tbody>
          <?php
            displayAllTitles();
          ?>

          </tbody>
        </table>
      </main>
      
      <!-- MAIN  -->
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('.dropdown-toggle').dropdown();
    });
  </script>
</body>

</html>