<div class="pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title text-left">
                    <h3 class="color-gray2">ÚLTIMOS ARTIGOS</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <a href="{{ route('web.blog') }}" class="default-btn float-lg-end letter-3">VEJA MAIS ARTIGOS <i
                        class="bx bxs-chevron-right"></i><span></span></a>
            </div>
        </div>
        <div class="row justify-content-center">

            @foreach($posts as $post)
                <div class="col-lg-4">
                    @include('web.components.post')
                </div>
            @endforeach

        </div>
    </div>
</div>
