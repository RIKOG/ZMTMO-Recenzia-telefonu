<div id="hlavicka">
    <div class="container">
      <a id="hlavicka-nadpis"
      href="_index.php?lang=<?= $_SESSION['lang'] == 'sk' ? 'sk' : 'en' ?>"><img src="/images/logo.png" class="container3"></a>
       href="_index.php?lang=<?= $_SESSION['lang'] == 'sk' ? 'sk' : 'en' ?>">Domov</a>
    <ul id="hlavicka-nav">
      <li>
        <a href="0informacie.php?lang=<?= $_SESSION['lang'] == 'sk' ? 'sk' : 'en' ?>"><?= $_SESSION['lang'] == 'sk' ? 'Informacie' : 'Information' ?></a>
      </li>
      <li>
        <a href="1HW.php?lang=<?= $_SESSION['lang'] == 'sk' ? 'sk' : 'en' ?>">HW</a>
      </li>
      <li>
        <a href="2sw.php?lang=<?= $_SESSION['lang'] == 'sk' ? 'sk' : 'en' ?>">SW</a>
      </li>
      <li>
        <a href="3Rozhranie.php?lang=<?= $_SESSION['lang'] == 'sk' ? 'sk' : 'en' ?>"><?= $_SESSION['lang'] == 'sk' ? 'Rozhranie' : 'Interface' ?></a>
      </li>
      <li>
        <a href="4test.php?lang=<?= $_SESSION['lang'] == 'sk' ? 'sk' : 'en' ?>">Testing</a>
      </li>
      <li>
        <a href="5videa.php?lang=<?= $_SESSION['lang'] == 'sk' ? 'sk' : 'en' ?>">Video</a>
      </li>
      <li>
        <a href="6kontakt.php?lang=<?= $_SESSION['lang'] == 'sk' ? 'sk' : 'en' ?>"><?= $_SESSION['lang'] == 'sk' ? 'Kontakt' : 'Contact' ?></a>
      </li>
      <li>
        <a href="?lang=sk">SK</a>
      </li>
      <li>
        <a href="?lang=en">EN</a>
      </li>
    </ul>
   </div>
  </div>               