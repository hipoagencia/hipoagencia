<div class="d-flex justify-content-center mt-5 js-cookie-consent cookie-consent" >
    <div class="card-cookie p-3 cookie"><span> {!! trans('cookieConsent::texts.message') !!} <br></span>
        <div style="margin-top:20px;text-align: left;"><button class="btn btn-light btn-sm js-cookie-consent-agree cookie-consent__agree" style="padding:5px 8px;" type="button">{{ trans('cookieConsent::texts.agree') }}</button>
{{--            <a href="#" style="float:right;">Ver políticas <i class="fa fa-angle-right ml-2"></i></a>--}}
        </div>
    </div>
</div>

<style>
    .card-cookie {
        width: 300px;
        flex-direction: column;
        min-width: 0;
        color: #fff;
        word-wrap: break-word;
        background-color: #1c1c1c;
        background-clip: border-box;
        border: 1px solid #000;
        border-radius: 6px;
        -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
        -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
        box-shadow: 0px 0px 5px 0px rgb(161, 163, 164);
        position: fixed;
        bottom:25px;
        right:25px;
        font-family: Verdana;
        padding:25px;
        font-size:12px;
    }

    .cookie a {
        text-decoration: none;
        color: #000;
        margin-top: 8px;
        font-size: 12px
    }

    .cookie a {
        text-decoration: none;
        color: #fff;
        margin-top: 8px
    }

    .decline {
        cursor: pointer
    }
</style>

