<?php include 'inc/_head.php'; ?>
<header class="site-header">
    <div class="container">
        <h2 class="site-header__headline">Twitter Feeds</h2>        
    </div>
</header>
<div class="header-background"></div>
<main>
    <form class="container login">
        <fieldset>
            <legend>Login</legend>
            <label for="login__username">Benutzername</label>
            <input type="text" name="login__username" id="login__username">
            
            <label for="login__password">Passwort</label>
            <input type="password" name="login__password" id="login__password">
            
            <input type="submit" name="login__submit" id="login__submit">
            
            <ul>
                <li><a href="#route-fehlt">Noch kein Konto? Jetzt registrieren!</a></li>
                <li><a href="#route-fehlt">Benutzernamen oder Password vergessen</a></li>
            </ul>
        </fieldset>
        
        <fieldset>
            <legend>Konto anlegen</legend>
            <label for="login--account__email">Email</label>
            <input type="email" name="login--account__email" id="login--account__email">
            
            <label for="login--account__username">Benutzername</label>
            <input type="text" name="login--account__username" id="login--account__username">
            
            <label for="login--account__password">Passwort</label>
            <input type="password" name="login--account__password" id="login--account__password">
            
            <label for="login--account__password--repeat">Passwort wiederholen</label>
            <input type="password" name="login--account__password--repeat" id="login--account__password--repeat">
            
            <input type="submit" name="login--account__submit" id="login--account__submit">
        </fieldset>
        
        <fieldset>
            <legend>Benutzerdaten vergessen</legend>
            <label for="login--forget__email">Email</label>
            <input type="email" name="login--forget__email" id="login--forget__email">
            
            <input type="submit" name="login--forget__submit" id="login--forget__submit">
        </fieldset>
    </form>
</main>
<footer>

</footer>
<?php include 'inc/_footer.php'; ?>
