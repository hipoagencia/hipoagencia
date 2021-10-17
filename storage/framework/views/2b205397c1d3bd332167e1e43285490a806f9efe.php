<script>
    function openBrain() {
        document.getElementById("brain").style.width = "100%";
    }

    function openHeart() {
        document.getElementById("heart").style.width = "100%";
    }

    function openUrine() {
        document.getElementById("urine").style.width = "100%";
    }

    function openCancer() {
        document.getElementById("cancer").style.width = "100%";
    }

    function openSexual() {
        document.getElementById("sexual").style.width = "100%";
    }

    function closeNav() {
        document.getElementsByClassName("overlay")[0].style.width = "0%";
        document.getElementsByClassName("overlay")[1].style.width = "0%";
        document.getElementsByClassName("overlay")[2].style.width = "0%";
        document.getElementsByClassName("overlay")[3].style.width = "0%";
        document.getElementsByClassName("overlay")[4].style.width = "0%";
    }
</script>


<div id="brain" class="overlay overlay-brain">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0);">Parkinson</a>
        <a href="javascript:void(0);">Dor Crônica</a>
        <a href="javascript:void(0);">AVC</a>
    </div>
</div>

<div id="heart" class="overlay overlay-heart">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0);">Arritmia</a>
        <a href="javascript:void(0);">Fibrilação Arterial</a>
        <a href="javascript:void(0);">AVC</a>
        <a href="javascript:void(0);">Morte Súbita</a>
    </div>
</div>

<div id="urine" class="overlay overlay-urine">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0);">Incontinencia Urinária Masculina</a>
    </div>
</div>

<div id="cancer" class="overlay overlay-cancer">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0);">Hiperplasia Prostática Benigna</a>
    </div>
</div>

<div id="sexual" class="overlay overlay-sexual">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0);">Disfunção Erétil</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\boston\resources\views/web/components/categoriesSlide.blade.php ENDPATH**/ ?>