<?php include "session_check.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Úvod - IS VŠPJ</title>
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css?v=2.09">
</head>

<body>
  <div class="shadow">
    <?php include "menu.php" ?>
    <main>
      <h1>Úvod</h1>
      <div class="container">
        <div class="timetable">
          <h2>Rozvrh</h2>
          <table>
            <tr>
              <th>0. hodina</th>
              <th>1. hodina</th>
              <th>2. hodina</th>
              <th>3. hodina</th>
              <th>4. hodina</th>
              <th>5. hodina</th>
              <th>6. hodina</th>
              <th>7. hodina</th>
              <th>8. hodina</th>
              <th>9. hodina</th>
              <th>10. hodina</th>
              <th>11. hodina</th>
              <th>12. hodina</th>
            </tr>
            <tr>
              <th>Pondělí</th>
              
            </tr>
            <tr>
              <th>Úterý</th>
            </tr>
            <tr>
              <th>Středa</th>
            </tr>
            <tr>
              <th>Čtvrtek</th>
            </tr>
            <tr>
              <th>Pátek</th>
            </tr>
          </table>
          <br>
          <h3>Absence učitelů</h3>

        </div>
        <div class="messages">
          <h1>
            Nejnovější vzkazy v IS</h1>
          <div class="message-wrap">
            <img src="images/def.png" class="profile-photo" alt="default-user">
            <p class="name">Bc. Martin Fraj</p>
            <p class="date">15.12.2025</p>
            <p class="text">Dobrý den,
              z časových důvodů bude dnes možné napsat v rámci cvičení pouze teoretický test. Praktickou část zkoušky v případě volné kapacity učebny bude možné udělat zítra od 15:45 hod, případně na řádném termínu, který bude vypsaný a bude v lednu.
              Děkuji za pochopení.</p>
          </div>
          <p>Zobrazit </p><a href="#">všechny Vzkazy</a>
        </div>
        <div class="credits">
          <h2>Přehled zapsaných předmětů</h2>
        </div>
        <div class="opportunities">
          <h2>Aktuální pracovní příležitosti</h2>
        </div>
      </div>
    </main>
  </div>


</body>

</html>