<?php
$a2="active";
$r2="&raquo;";
$site_color = "indigo lighten-1";
$site_color_text = "indigo-text text-lighten-1";
$site_color_html = "#5c6bc0";
include 'inc/header.inc.php';
?>
<div class="container white">
  <div class="flow-text">
    <h1 class="<?=$site_color_text?> center">über uns</h1>
    <p class="flow-text">
      Die Musikschule musikum wird vom Verein musikum e.V. betrieben. Der Verein wurde 1991 gegründet und als gemeinnützig anerkannt.
      Ziel des Vereins ist die musikalische Bildung von Kinder, Jugendlichen und Erwachsenen. Die gesamte Verwaltungs-, Organisations-
      und Konzeptarbeit wird von den Lehrkräften ehrenamtlich geleistet. <img alt="Akkordeon" src="images/akkordeon.jpg" align="right" class="materialboxed" height="250">
      Der regelmäßige Alltagsbetrieb und Aufwendungen für z.T. umfangreiche Konzerte oder Vergünstigungen für Kinder aus Familien mit
      geringem Einkommen werden aus Spenden bestritten.
      Das Herzstück des Vereins ist die Musikschule musikum. Hier unterrichten 11 engagierte Instrumentallehrer/innen etwa 500
      Schüler/innen vom Kleinkind bis zum Seniorenalter. <a href="team.php" class="<?=$site_color_text?>">Mehr zum Team.</a>Die zahlenmäßige
      Überschaubarkeit des Kollegiums, ein unaufwändiger Verwaltungsapparat und die partnerschaftliche Organisation der Zusammenarbeit
      ermöglichen ein spontanes Abstimmen der Angebote und halten die Kosten niedrig.
    </p>
    <p class="flow-text">
      Unterstützen Sie die Arbeit des Vereins, werden Sie Fördermitglied!<br>
      <a href="mitglied_werden.php" class="<?=$site_color_text?>">Mehr zur Fördermitgliedschaft</a> | <a href="pdf/Beitrittserklaerung_Verein.pdf" class="<?=$site_color_text?>">Beitrittsformular als PDF</a><br>
      <b>Unterstützen Sie die Arbeit des Vereins mit Ihrer Spende.</b><br>
      <a href="spenden.php" class="<?=$site_color_text?>">Mehr zu Spenden</a> | Kontoverbindung: IBAN DE 0843 0609 6720 4678 3900 | BIC GENODEM 1 GLS
    </p>
  </div>
</div>
<?php
include 'inc/footer.inc.php';
 ?>
