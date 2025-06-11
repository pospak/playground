<header>
<h1 class="full">Informační systém Vysoké školy polytechnické Jihlava</h1>
<h1 class="short">IS VŠPJ</h1>
<div class="hamcon">
    <img src="/ham.svg" alt="" id="hamburger">
</div>

<nav class="full">
    <ul>
        <li><a href="/">Úvod</a></li>
        <li><a href="#">Osobní</a></li>
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
<nav id="short">
    <ul>
        <li><a href="/">Úvod</a></li>
        <li><a href="#">Osobní</a></li>
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