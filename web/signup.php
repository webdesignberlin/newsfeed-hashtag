<?php include 'inc/_head.php'; ?>
<header class="site-header">
    <div class="container">
        <h2 class="site-header__headline">Übersicht Twitter Feeds</h2>
        <p class="site-header__description">Letztes Update am <time datetime="2014-08-15T14:54:39Z+02:00">15. August 2014 um 16:54 Uhr</time> zum Hashtag <mark>#blubba</mark></p>

    </div>
</header>
<div class="header-background"></div>
<main>

    <div class="sign-up">
        <div id="sign-up__response"></div>
        <a href="" class="sign-up__button">Registrieren</a>

        <div class="sign-up__input-group">
            <form accept-charset="UTF-8" action="/mcsubscribe/subscribe" data-remote="true" id="mcsubscribe" method="post">
                <div style="margin:0;padding:0;display:inline">
                    <input name="utf8" type="hidden" value="&#x2713;" />
                </div>
                <label for="email">Email eintragen</label>
                <input class="sign-up__input-email" id="email" name="email" type="email" />
                <input class="sign-up__input-submit" name="commit" type="submit" value="Registrieren" />
            </form>
        </div>
    </div>
    <p class="sign-in">Oder <a href="/sign-in">anmelden</a></p>

</main>
<footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(".sign-up__button").on("click",function(t){
        return t.preventDefault(),
            $(this).parent().addClass("open"),
            $(this).fadeOut(),
            $(this).siblings(".sign-up__input-group").fadeIn(),
            $(this).siblings(".sign-up__input-group").find("#email").focus()
    }),
        e=$(".sign-up__input-group label"),
        t=$(".sign-up__input-group #email"),
        t.on("focus",function(){
            return e.css("opacity",.35),
                e.css("color","#222")
        }),
        t.on("keyup",function(){
            return e.css("opacity",0),
                0===$(this).val().length?e.css("opacity",.35):void 0
        }),
        t.on("blur",function(){
            return 0===$(this).val().length&&e.css("opacity",1),
                e.css("color","#2E81B7")
        })
</script>

</footer>
<?php include 'inc/_footer.php'; ?>
