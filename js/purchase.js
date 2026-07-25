let clicked2 = false;

var noCaptcha = false;
var noEmail = false;

function uncheck() {
    hidePopup()
    if (noCaptcha) {
        noCaptcha = false;
    }
    if (noEmail) {
        $('pemail').style.opacity = 1;
		$('pemail').style.visibility = 'visible';
        noEmail = false;
    }
    clicked2 = false;
    const allRadioCards = document.querySelectorAll(".radio-card");
    allRadioCards.forEach(e => {
        e.classList.remove(["radio-disabled"]);
        e.classList.remove(["radio-selected"]);
        e.checked = false;
    });
}

function onClick(card) {
    if (clicked2) return;

    // чисто пример
    /*if (card == '1') {
        noEmail = true
        noCaptcha = true
    }*/
    
    if (card == '4' || card == '1') {
        noEmail = true;
        noCaptcha = true;
    }
	else if (card == '3') {
		noEmail = false;
		noCaptcha = true;
	}
	else {
        noEmail = false
        noCaptcha = false
	}

    if (noEmail) {
        $('pemail').style.visibility = 'hidden';
		$('pemail').style.opacity = 0;
    }
	
	$('pemail').disabled = noEmail;
	$('pemail').required = !noEmail;

    showPopup()
    document.querySelectorAll(".card-input-element").forEach(e => {
        e.checked = false;
    })

    clicked2 = true;

    const allRadioCards = document.querySelectorAll(".radio-card");

    allRadioCards.forEach((element, index) => {
        element.classList.remove(["radio-selected"]);
        element.classList.add(["radio-disabled"]);
    });

    const selectedCard = document.querySelectorAll(".card-" + card);
    selectedCard.forEach(e => {
        e.classList.remove(["radio-disabled"]);
        e.classList.add(["radio-selected"]);
        e.checked = true;
    });
}

function purchase()
{
	if( !noEmail )
	{
		if( !$( 'pemail' ).checkValidity() )
		{
			$( 'pemail' ).reportValidity();
			return;
		}
	}
	
    confirm()
    setTimeout(() => {
        if (noCaptcha) {
			confirmCaptcha();
		}
		else {
			showCaptcha()
		}
    }, 250)
}

function OnlyCaptcha()
{
	confirm()
	setTimeout( () => {
		showCaptcha()
	}, 250 );
}

function confirmCaptcha(token) {
    // я хуй знает куда это но придумаете
    setTimeout(() => {
		$("captchatoken").value = token;
		$("postemail").value = $('pemail').value;
        document.getElementsByClassName("login-box")[0].requestSubmit();
    }, 500)
}

function showCaptcha() {
    $("backdrop").style.display = 'block';
    $("captcha-dialog").inert = true
    $("captcha-dialog").show()
    $("captcha-dialog").inert = false
    $("captcha-dialog").style.opacity = 1
    document.documentElement.style.setProperty("--alpha", 1);
}

document.addEventListener("DOMContentLoaded", (e) => {
    $("backdrop").style.display = 'none';
})
