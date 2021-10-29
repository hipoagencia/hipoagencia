<div class="pt-70 pb-70 bg-gray">
    <div class="container">
        <div class="section-title">
            <h2>Assine nossa newsletter</h2>
        </div>
        <div class="row col-lg-4 offset-lg-4 justify-content-center text-center">

            @if($errors->all())
                @foreach($errors->all() as $error)
                    @component('admin.components.message',['type' => 'danger'])
                        {{ $error }}
                    @endcomponent
                @endforeach
            @endif

            @if(session()->exists('message'))
                @component('admin.components.message',['type' => session()->get('type')])
                    {{ session()->get('message') }}
                @endcomponent
            @endif

            <form action="{{route('web.sendNewsletter')}}" method="POST">
                @csrf

                <input type="email" name="email" placeholder="E-mail" class="form-control" style="height:54px;" required >

                {!! NoCaptcha::renderJs() !!} {!! NoCaptcha::display() !!}

                <div class="row pt-4">
                    <button type="submit" class="default-btn" style="pointer-events: all; cursor: pointer;width: 120px;margin:0px auto;border-radius: 0px;">Enviar <i class="bx bx-send"></i><span></span></button>

                </div>
            </form>

        </div>
    </div>
</div>


