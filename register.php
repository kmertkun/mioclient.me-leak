<!DOCTYPE html>
<html>
	    <head>
        <title>
            Register - Mio
        </title>
        <script async src="https://www.recaptcha.net/recaptcha/api.js"></script>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <script>
                document.addEventListener("DOMContentLoaded", function(event) { 
                        const params = new URLSearchParams(document.location.search);
                        if (params.has("code")) {
                                document.getElementById("regcode").value = params.get("code")
                        }
                });
        </script>
            </head>
    <body>
        
        <nav class="nav scrollable">
        <a style="color: var(--text-active);" class="nav-item nav-container" href="\">
            mioclient<span style="color: var(--text-second);">.me</span>
        </a>
        <div class="nav-container nav-hidable">
            <a class="nav-item nav-sub" href="/changelogs">
                changelogs
            </a>

            <a class="nav-item nav-sub" href="/discord">
                discord
            </a>

            <a class="nav-item nav-sub nav-btn" href="/dashboard">
                dashboard
            </a>
        </div>
    </nav>
            <form class="login-box" method="post" action="">
            <h1 style="color: var(--text-second);">

                            Sign Up
            
            </h1>
                        <div class="login-container">
                <input name="login" type="text" class="login-item" required placeholder="Username">
                <input name="password" type="password" class="login-item" required placeholder="Password">
                <input name="email" type="email" class="login-item" required placeholder="Email (confirmation required)">
                <input id="regcode" name="invite" type="text" class="login-item" required placeholder="Registration code">
                <div style="margin-bottom: 0.5rem;">
                    <input type="checkbox" value="1" required id="tos"> 
                    <label for="tos" id="tos-text">

                                    I agree to the
                        <a style="color: var(--text-second);" href="/tos"> Terms of Service</a>
                
                    </label>
                </div>

                <div class="g-recaptcha" data-sitekey="6Le-JDMpAAAAAPCHnr9ar6U6BC3ydU9WfnCdggTD" data-theme="dark"></div>                <input type="submit" class="login-item main-btn" value="Sign Up">
            </div>
            <h4 style="margin-bottom: 1px;">

                                    Already have an account? <a style="color: var(--text-second);" href="/login"> Log in </a>
                
            </h4>
            <h4 style="margin: 1px; padding-top: 1px">

                                    Don't have a registration code? <a style="color: var(--text-second);" href="/purchase"> Click here </a>
                
            </h4>
        </form>
        
        <footer>
            <p> Copyright © 2026 Mio </p>
            <div class="footer-info">
                <a class="footer-element" href="/support"> Contact </a>
                <a class="footer-element" href="/privacy"> Privacy Policy </a>
                <a class="footer-element" href="/tos"> Terms of Service </a>
                <a class="footer-element" href="/assets/oferta.pdf"> Legal Info </a>
            </div>
        </footer>
        <script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v4513226cdae34746b4dedf0b4dfa099e1781791509496" integrity="sha512-ZE9pZaUXND66v380QUtch/5sE9tPFh2zg45pR2PB0CVkCtOREv2AJKkSidISWkysEuQ0EH8faUU5du78bx87UQ==" data-cf-beacon='{"version":"2024.11.0","token":"f7ecb6a45de2420ebdf205f468d30b24","r":1}' crossorigin="anonymous"></script>
</body>
</html> 
