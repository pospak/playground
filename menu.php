<header>
    <?php if(!isset($_SESSION["logged"])){
echo "<script>window.location.href= 'https://login.pospak.site/login/vspis'</script>";
}?>
<h1 class="full">Informační systém Vysoké školy polytechnické Jihlava</h1>
<h1 class="short">IS VŠPJ</h1>
<nav class="full">
    <ul>
        <li id="profileLink"><?php echo($_SESSION["logged"])?>
        <ul id="profileDropdown" class="dropdown">
                            
                            <li>
                                <a href="/user/osobni-informace-studenta/prehled">
                                    Osobní informace a RC
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Osobní složka
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Číslo účtu
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ISIC, ALIVE, školní karta
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Platby a symboly
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Nastavení pošty
                                </a>
                            </li>
<li>
                                <a href="">
                                    Nastavení Moodlu
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Nastavení zobrazení jména
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Ochrana soukromí
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Schránka důvěry
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Bezpečnostní testy
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Odhlásit se
                                </a>
                            </li>
                        </ul>
                    
                    </li>
        <li><a href="/">Úvod</a></li>
        <li><a href="#">Výuka</a></li>
        <li><a href="#">Studium</a></li>
        <li><a href="#">Stipendia</a></li>
        <li><a href="#">Učitelé</a></li>
        <li><a href="#">Rozvrh</a></li>
        <li><a href="/student/szz">SZZ</a></li>
        <li><a href="#">Závěrečné práce</a></li>
        <li><a href="/koleje/prehled-zadosti">Koleje</a></li>
        <li><a href="#">Ostatní</a></li>
        
    </ul>
</nav>
<div class="hamcon">
    <img src="/ham.svg" alt="" id="hamburger">

<nav id="short">
    <ul>
        <li id="profileLink"><a href="#"><?php echo($_SESSION["logged"])?></a>
        <ul id="profileDropdown" class="dropdown">
                            
                            <li>
                                <a href="user/<?= $user ?>">
                                    Upravit profil
                                </a>
                            </li>
                            <li>
                                <a href="customize/<?= $user ?>">
                                    Upravit vzhled stránky
                                </a>
                            </li>
                            <li>
                                <a href="/logout.php">
                                    Odhlásit se
                                </a>
                            </li>
                        </ul>
                    
                    </li>
        <li><a href="/">Úvod</a></li>
        <li><a href="#">Výuka</a></li>
        <li><a href="#">Studium</a></li>
        <li><a href="#">Stipendia</a></li>
        <li><a href="#">Učitelé</a></li>
        <li><a href="#">Rozvrh</a></li>
        <li><a href="/student/szz">SZZ</a></li>
        <li><a href="#">Závěrečné práce</a></li>
        <li><a href="/koleje/prehled-zadosti">Koleje</a></li>
        <li><a href="#">Ostatní</a></li>
        
    </ul>
</nav>
</div>
</header>

<script>
    var profile = document.getElementById("profileLink")
var profileDropdown = document.getElementById("profileDropdown")
if(profile && profileDropdown){
    profileDropdown.style.display = "none";
profile.addEventListener('mouseenter', function() {
    profileDropdown.style.display = 'block';
    
});
profile.addEventListener('mouseleave', function() {
    profileDropdown.style.display = 'none';
});

}


var hamburger = document.getElementById("hamburger");
var menu = document.getElementById("short");
 

    menu.style.display = "none"
    hamburger.addEventListener("click", function() {
    menu.style.display = "block"
    hamburger.addEventListener("click",function(){
        menu.style.display = "none"
        window.location.reload();
       })
})


window.addEventListener("resize",function(){
    window.location.reload();
})

</script>