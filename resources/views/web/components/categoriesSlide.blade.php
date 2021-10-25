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
        <a href="{{ route('web.page.parkinson') }}">Parkinson</a>
        <a href="{{ route('web.page.dorCronica') }}">Dor Crônica</a>
        <a href="{{ route('web.page.avc') }}">AVC</a>
    </div>
</div>

<div id="heart" class="overlay overlay-heart">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="{{ route('web.page.arritmiaArtrial') }}">Arritmia Artrial</a>
        <a href="{{ route('web.page.arritmiaVentricular') }}">Arritmia Ventricular</a>
        <a href="{{ route('web.page.fibrilacaoArterial') }}">Fibrilação Arterial</a>
        <a href="javascript:void(0);">AVC</a>
        <a href="{{ route('web.page.morteSubita') }}">Morte Súbita</a>
    </div>
</div>


<div id="urine" class="overlay overlay-urine">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="{{ route('web.page.incontinenciaUrinaria') }}">Incontinencia Urinária Masculina</a>
    </div>
</div>

<div id="cancer" class="overlay overlay-cancer">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="{{ route('web.page.hiperplasia') }}">Hiperplasia Prostática Benigna</a>
    </div>
</div>

<div id="sexual" class="overlay overlay-sexual">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="{{ route('web.page.disfuncaoEretil') }}">Disfunção Erétil</a>
    </div>
</div>
