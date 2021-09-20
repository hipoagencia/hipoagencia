<style>
    .bg-loader{background-color:rgba(0,0,0,.7);position:fixed;top:0;left:0;width:100%;height:100%;text-transform:uppercase;text-align:center;color:#fff;padding-top:300px}.spinner-text{font-weight:500;letter-spacing:3px;font-size:11px;font-family:Verdana}.spinner{width:60px;height:60px;background-color:#fff;margin:0 auto;-webkit-animation:sk-rotateplane 1.2s infinite ease-in-out;animation:sk-rotateplane 1.2s infinite ease-in-out;z-index:999}@-webkit-keyframes sk-rotateplane{0%{-webkit-transform:perspective(120px)}50%{-webkit-transform:perspective(120px) rotateY(180deg)}100%{-webkit-transform:perspective(120px) rotateY(180deg) rotateX(180deg)}}@keyframes  sk-rotateplane{0%{transform:perspective(120px) rotateX(0) rotateY(0);-webkit-transform:perspective(120px) rotateX(0) rotateY(0)}50%{transform:perspective(120px) rotateX(-180.1deg) rotateY(0);-webkit-transform:perspective(120px) rotateX(-180.1deg) rotateY(0)}100%{transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg);-webkit-transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg)}}
</style>

<div class="bg-loader">
    <div class="spinner"></div>
    <br><span class="spinner-text">Aguarde o processamento...</span>
</div>
<?php /**PATH C:\xampp\htdocs\HipoPainel\resources\views/user/components/loader.blade.php ENDPATH**/ ?>