<?php 
require_once "../connexion/connect.php";
include "../include/head.php" 
?>

  <body>
    <header>
      <?php include "../include/header.php"; ?>
    </header>

    <aside id="groupMenu" class="hidden">
      <?php include "../include/asideGroupeMenu.php"; ?>
    </aside>

    <aside id="subMenu" class="hidden">
      <?php include "../include/asideSubMenu.php"; ?>
    </aside>
    <main>
      <section id="actuallyTitle">
        <h2>Planning</h2>
      </section>
      
      
      <section id="containerCalendar">
        <article id="buttonCalendar">
            <img src="../assets/images/icones/planningBlanc.png" alt="icone prise de rendez-vous" title="Icone contact">
        </article>
        <article id="calendar" clas="calendar-container">

        </article>
      </section>
        
      
    </main>
    <footer>
      <?php include "../include/footer.php"; ?>
    </footer>
    <script src="../assets/scripts/fullcalendar/core/index.global.js"></script>
    <script src="../assets/scripts/fullcalendar/daygrid/index.global.js"></script>
    <script src="../assets/scripts/fullcalendar/timegrid/index.global.js"></script>
    <script src="../assets/scripts/fullcalendar/interaction/index.global.js"></script>
    <script src="../assets/scripts/js/planning.js"></script>
  </body>
  
  </html>
