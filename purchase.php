<!DOCTYPE html>
<html>

<head>
    <title>
        Purchase - Mio
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="/css/funpay.css" />
    <link rel="stylesheet" type="text/css" href="/css/payment.css" />
    <link rel="stylesheet" type="text/css" href="/css/popup.css" />
    <script src="/js/popup.js"></script>
    <script src="/js/purchase.js"></script>
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
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
		<input type="hidden" id="captchatoken" name="captchatoken" value="">
		<input type="hidden" id="postemail" name="postemail" value="">
        <div class="login-container bbx">
            <h1 style="color: var(--text-second); margin: 0.5rem;">
                Purchase ($20/897₴)            </h1>

            <p style="max-width: 500px; text-align: center;">
    Before purchasing Mio, please read our <a class="highlight" href="tos"> ToS</a>
</p>

<div style="display: none;">
    <input type="radio" name="funpay" class="card-input-element card-1" />
    <input type="radio" name="crypto" class="card-input-element card-3" />
    <input type="radio" name="resell" class="card-input-element card-4" />
</div>

<div class="radio-box noselect">
    <div class="radio-card card-3" onclick="onClick('3')">
        <h3>
            <i class="fa-brands fa-sm fad fa-btc"></i>
            Crypto
        </h3>
    </div>
</div>

<div class="radio-box noselect">
    <div class="radio-card card-4" onclick="onClick('4')">
        <h3>
            <i class="fa fa-sm fad fa-earth-americas"></i>
            Resellers (AliPay, WeChat &amp; IBAN)
        </h3>
    </div>
</div>
        </div>
    </form>

    <dialog id="modal" class="modal">
        <div class="container popup-base">
            <div class="popup-text">
                <h2 class="highlight popup-header popup-inner">

                                            Before purchasing
                    
                </h2>
                <p class="popup-inner">

                                            Mio only supports <span class="bolder highlight">Windows 10/11</span>
                    
                </p>

                <h3 class="highlight popup-header">

                                            Email address
                    
                </h3>
                <p class="popup-inner">

                                            Make sure your email address is valid. We will use it to send the activation code.
                    
                </p>

                <h3 class="highlight popup-header">

                                            Crypto
                    
                </h3>
                <p class="popup-inner">

                                            If paying via cryptocurrency then make sure that your exchange does not
                        subtract the fee from the required amount.
                        <br>
                        If you plan on buying cryptocurrency then it's recommended to use
                        low fee coins (like <span class="bolder highlight">Litecoin</span>) instead of
                        high fee ones like <span class="bolder highlight">Bitcoin</span>.
                    
                </p>

                <h3 class="highlight popup-header">

                                            Also important
                    
                </h3>
                <p class="popup-inner">

                                            Please make sure to read our
                        <a class="bolder" href="/tos">Terms of Service</a> and our
                        <a class="bolder" href="/privacy">Privacy Policy</a> before purchasing.
                    
                </p>
            </div>
            <div class="popup-buttons">
                <div class="popup-action">
                    <input id="pemail" name="email" type="email" class="login-item popup-email" required placeholder="Email">
                </div>
                <button class="main-btn popup-inner popup-btn" onclick="uncheck()">

                                            Cancel
                    
                </button>
                <button class="main-btn popup-inner popup-btn" onclick="purchase()">

                                            Purchase
                    
                </button>
            </div>
        </div>
    </dialog>

    <dialog class="modal captcha-modal" id="captcha-dialog">
        <div class="h-captcha" data-sitekey="af451af7-092a-4b53-b876-ee512b828b49" data-theme="dark" data-callback="confirmCaptcha"></div>    </dialog>
	<div id="backdrop" class="backdrop"></div>

    
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