<!DOCTYPE html>
<html lang="fr">
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var btn = document.getElementById("btn-dropdown");
    var nav = document.getElementById("nav-dropdown");

    btn.addEventListener('click', () => {
      btn.classList.toggle("is-open");
      nav.classList.toggle("is-open");
    });
  });
</script>
<head>
  <title>Accueil | Taj Mahal</title>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Pixelify+Sans:wght@400..700&family=Ysabeau+SC:wght@1..1000&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://demo.plantpot.works/assets/css/normalize.css">
  <link rel="stylesheet" href="https://use.typekit.net/opg3wle.css">
  <link rel="stylesheet" href="../css/style/accueilstyle.css">
  <link rel="stylesheet" href="../css/style/headerstyle.css">
  <link rel="stylesheet" href="../css/style/footerstyle.css">
    
  <?php include_once '../includes/header.php'; ?>
  <?php $stmt = $cnx->query("SELECT nom_section FROM section WHERE code_section = 'TTLHOME'"); ?>

  <!-- Main content -->
  <section class="hero">
    <div>
      <h1>Le plus beau mausolée du monde...</h1>
      <?php echo "<h2>" . $stmt->fetchColumn() . "</h2>"; ?>
    </div>
  </section>
  <section class="quote">
    <blockquote>
    “Le Taj Mahal s'élève au-dessus des rives du fleuve comme une larme solitaire suspendue sur la joue du temps.”<br><br>
    <cite>- Rabindranath Tagore</cite>
    </blockquote>
  </section>
  
  <section class="image-section">

  </section>
  <?php $stmt = $cnx->query("SELECT texte FROM traduction WHERE langue = 'fr' AND num_contenu = 1"); ?>
  <section class="content" id="introduction">
    <?php echo "<h3>" . $stmt->fetchColumn() . "</h3>"; ?>
    <p>
    Le Taj Mahal, situé à Agra, en Inde, est l'un des monuments les plus emblématiques au monde. Il représente un chef-d’œuvre d’architecture moghole, mêlant avec raffinement les influences persanes, ottomanes et indiennes. Son impressionnant dôme de marbre blanc se dresse au cœur de jardins soigneusement aménagés, entouré de fontaines et de pavillons annexes.
    </p>
    <p>
    Inscrit au patrimoine mondial de l’UNESCO, le Taj Mahal attire chaque année des millions de visiteurs venus admirer sa beauté saisissante et sa charge émotionnelle.
    </p>
    <p>
    Le monument est autant un joyau architectural qu'un symbole d’amour éternel. La légende de Shah Jahan construisant ce tombeau pour honorer la mémoire de Mumtaz Mahal ne fait qu’amplifier la magie qui entoure ce lieu hors du temps.
    </p>
  </section>
  <section class="history-section" id="histoire">

    <h2>Son histoire.</h2>
    <p class="subtitle">Malgré les siècles, le monument semble figé dans le temps…</p>

    <div class="history-cards">
      <div class="history-card" id="card1">
        <h3>La genèse du Taj Mahal</h3>
        <p>Mumtaz Mahal, Femme de l’empereur Shah Jahan, meurt en 1631 en donnant naissance à leur quatorzième enfant. Cette perte bouleversa profondément l’empereur et devint le point de départ d’un projet monumental: un mausolé sans pareil pour honorer sa défunte épouse...
        </p>
        <div class="content">
          <p>L’histoire du Taj Mahal est intimement liée à celle de l’empire moghol, une des périodes les plus prospères et influentes de l’histoire indienne. Sous le règnede Shah Jahan, cinquième empereur de la dynastie moghole, le sous-continent atteignit un apogée culturel et architectural. Fils de Jahangir, Shah Jahan hérita d’un empire puissant et stable. Pourtant, sa vie fut marquée par des tragédies personnelles, notamment la perte de sa bien-aimée épouse, Mumtaz Mahal, qui mourut en 1631 en donnant naissance à leur quatorzième enfant. Cette perte bouleversa profondément l’empereur et devint le point de départ de son projet monumental.<br> Le contexte historique de cette période montre une convergence unique de richesse, de savoir-faire artistique et d’influences culturelles venues de Perse, d’Asie centrale et d’Inde, qui créèrent un environnement favorable à la construction de structures majestueuses comme le Taj Mahal.</p>
        </div>
        <button class="toggle-btn" onclick="toggleCard('card1')">▼</button>
      </div>

      <div class="history-card" id="card2">
        <h3>Enjeux politiques et culturels</h3>
        <p>Shah Jahan ne cherchait pas seulement à honorer la mémoire de Mumtaz Mahal, mais aussi à renforcer son propre prestige impérial.<br><br>
        Le projet mobilisa les meilleurs architectes, artistes et artisans de l’époque recrutés non seulement en Inde, mais aussi dans les régions avoisinantes comme la Perse et l’Asie centrale…</p>
        <div class="content">
        <p>À travers la construction du Taj Mahal, il ne cherchait pas seulement à honorer la mémoire de Mumtaz Mahal, mais aussi à renforcer son propre prestige impérial. Le projet mobilisa les meilleurs architectes, artistes et artisans de l’époque recrutés non seulement en Inde, mais aussi dans les régions avoisinantes comme la Perse et l’Asie centrale. Les Moghols, grands mécènes des arts, voyaient dans l’architecture une manière de fusionner diverses traditions tout en affirmant leur vision universelle de la grandeur impériale.<br>En ce sens, le Taj Mahal représente aussi l’apogée du style moghol, qui marie harmonieusement les influences islamiques, persanes et hindoues. Ce projet colossal fut aussi une manière pour Shah Jahan de s’inscrire dans la continuité de ses ancêtres tout en surpassant leurs réalisations.</p> 
        </div>
        <button class="toggle-btn" onclick="toggleCard('card2')">▼</button>
      </div>

      <div class="history-card" id="card3">
        <h3>déclin et redécouverte historique </h3>
        <p>Au XVIIIe siècle, l’Inde connut des invasions et des conflits qui entraînèrent l’abandon progressif de nombreux monuments et le mausolée fut pillé à plusieurs reprises.<br><br>
        À l’époque coloniale britannique, il suscita un regain d’intérêt en raison de son caractère exotique et romantique. Les travaux de restauration au XIXe siècle ont été menés pour préserver cet héritage culturel…</p>
        <div class="content">
        <p>L’histoire du Taj Mahal est aussi celle de son déclin et de sa redécouverte. Après la mort de Shah Jahan, l’empire moghol commença à s’affaiblir sous le règne de ses successeurs.<br>
          Au XVIIIe siècle, l’Inde connut des invasions et des conflits qui entraînèrent l’abandon progressif de nombreux monuments moghols, dont le Taj Mahal. Le mausolée fut pillé à plusieurs reprises, ses pierres précieuses et ses ornements en métaux précieux étant arrachés par des envahisseurs ou des dirigeants locaux. À l’époque coloniale britannique, le Taj Mahal suscita un regain d’intérêt en raison de son caractère exotique et romantique. Les Britanniques lancèrent des travaux de restauration au XIXe siècle pour préserver cet héritage culturel, mais ces interventions modifièrent parfois certains éléments de son apparence originale. <br>
          Aujourd’hui, le Taj Mahal est un témoin précieux de l’histoire tumultueuse de l’Inde, un monument qui incarne les gloires passées et les défis de la préservation du patrimoine dans un monde moderne.</p>  
        </div>
        <button class="toggle-btn" onclick="toggleCard('card3')">▼</button>
      </div>
    </div>
    
  </section>

  <script>
    function toggleCard(id) {
      const card = document.getElementById(id);
      card.classList.toggle("open");
    }
  </script>
  <!-- SECTION : Le couple impérial -->
<section class="imperial-section" id="couple">
  <h2 class="imperial-title">Le couple imperial.</h2>
  <p class="imperial-subtitle">Qui sont ces deux monarques à l’origine du mausolée…</p>

  <!-- SHAH JAHAN -->
  <div class="imperial-row">
    <img src="../css/img/image_8.png" alt="Shah Jahan" class="imperial-img">
    <div class="imperial-col">
      <h3 class="imperial-h3">Shah Jahan</h3>
      <p class="imperial-p">
        5ᵉ Empereur de la Dynastie Moghole<br>
        Règne : 1628 – 1658<br><br>
        Né Shahab-ud-din Muhammad Shah Jahan, également connu sous les noms de Shah Jahan ou Shahjehan, il voit le jour le 5 janvier 1592 à Lahore (actuel Pakistan). Fils de l’empereur Jahângîr et de la princesse Manmati, il accède au trône en 1628 et règne pendant trois décennies marquées par la splendeur architecturale et culturelle de l’Empire moghol.<br><br>
        Son règne est surtout célébré pour la construction du Taj Mahal, somptueux mausolée édifié à Agra en mémoire de sa bien-aimée épouse Mumtaz Mahal. C’est également là qu’il repose aujourd’hui, après son décès survenu le 22 janvier 1666 à l’âge de 74 ans.<br><br>
        Il fut succédé par son fils Aurangzeb.<br>
        Shah Jahan eut plusieurs épouses, dont Akbarabadi Mahal, Kandahari Mahal, Hasina Begum Sahiba, Muti Begum Sahiba, Qudsia Begum Sahiba, Fatehpuri Mahal, Sahiba, Sarhindi Begum Sahiba et Shrimati Manhbawathi Baji Lal Sahiba – mais Mumtaz Mahal demeure l’amour éternel auquel il dédia l’une des merveilles du monde.
      </p>
    </div>
  </div>

  <!-- MUMTAZ MAHAL -->
  <div class="imperial-row-reverse">
    <div class="imperial-col">
      <h3 class="imperial-h3">Mumtaz Mahal</h3>
      <p class="imperial-p">
        Aussi surnommée “Exotic Beauty” par la population de l’Inde.<br><br>
        Née Arjumand Banu Begum en avril 1593 à Agra, Mumtaz Mahal est célèbre non seulement pour sa beauté légendaire – surnommée Exotic Beauty par le peuple de l’Inde – mais aussi pour l’amour éternel que lui porta son époux, l’empereur Shah Jahan.<br><br>
        Fille du noble persan Abdul Hasan Asaf Khan, elle appartenait à la dynastie moghole par sa naissance et par son mariage. Leur union fut marquée par une profonde affection et une grande complicité.<br><br>
        Elle décède tragiquement le 17 juin 1631 à Burhanpur, alors qu’elle donnait naissance à leur quatorzième enfant. Son décès plongea l’empereur dans un profond deuil, inspirant la construction du Taj Mahal, chef-d’œuvre d’architecture dédié à sa mémoire.
      </p>
    </div>
    <img src="../css/img/image_9.png" alt="Mumtaz Mahal" class="imperial-img">
  </div>
</section>

<!-- SECTION : Les visiteurs remarquables -->
<section class="visitors-section" id="visiteurs">
  <div class="visitors-inner">
    <h2 class="visitors-title">Les visiteurs remarquables.</h2>
    <div class="visitors-arrow">⬇</div>
    <div class="visitors-cards">
      <div class="visitors-card">
        <h3>Rabindranath Tagore</h3>
        <p>
          Le lauréat du prix Nobel Rabindranath Tagore a poétiquement décrit le Taj Mahal comme :<br><br>
          <em>“UNE LARME SUR LA JOUE DU TEMPS.”</em><br><br>
          Sa métaphore saisit à la fois la beauté éthérée du monument et la tristesse qui a inspiré sa construction.
        </p>
      </div>
      <div class="visitors-card">
        <h3>Princesse Diana</h3>
        <p>
          En 1992, elle a posé seule sur le banc de marbre (aujourd’hui appelé “banc de Diana”).<br><br>
          Bien qu’elle ne l’ait pas dit publiquement à l’époque, elle en a parlé plus tard comme :<br><br>
          <em>“UNE EXPÉRIENCE CURATIVE”.</em>
        </p>
      </div>
      <div class="visitors-card">
        <h3>Mark Twain</h3>
        <p>
          L’écrivain américain Mark Twain a visité le Taj Mahal à la fin du XIXᵉ siècle et a été frappé par sa majesté.<br><br>
          <em>“ON NE PEUT PAS DIRE QU’IL EST BEAU. IL DÉFIE LES MOTS. C’EST LE SPECTACLE D’UN RÊVE.”</em><br>
          — Twain, Following the Equator
        </p>
      </div>
    </div>
  </div>
</section>

</body>

</html>