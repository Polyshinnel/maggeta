<footer class="footer">
    <div class="box-container">
        <div class="footer__wrapper">
            <ul>
                <li><a href="/">Main</a></li>
                <li><a href="/consulting">Management Consulting</a></li>
                <li><a href="/advertising">Digital Advertising</a></li>
            </ul>

            <a href="/" class="footer-logo">
                <img src="{{asset('assets/img/header-logo.svg')}}" alt="">
            </a>

            <div class="footer-contacts">
                <a href="mailto:info@maggeta.com">info@maggeta.com</a>
            </div>
        </div>

        <p class="maggeta-footer-info">MAGGETA L.L.C-FZ, License Number: 2204290.01, Business Center 1, M Floor, The Meydan Hotel, Nad Al Sheba, Dubai, U.A.E.</p>
    </div>
</footer>

<form class="recall-form" id="recall-form">
    <h2 class="recall-form__title">Recall Form</h2>
    <p class="recall-form__subtitle">Fill out the form and we'll call you back.</p>

    <div class="recall-form__controls">
        <div class="recall-form__control">
            <label for="question">Your question</label>
            <input type="text" id="question" name="question" placeholder="">
            <p class="hint">Question must be less 10 symbols</p>
        </div>
        <div class="recall-form__control">
            <label for="name">Name</label>
            <input type="text" placeholder="" id="name" name="name">
            <p class="hint">The Name field should not be empty</p>
        </div>
        <div class="recall-form__control">
            <label for="phone">Phone</label>
            <input type="text" id="phone" placeholder="">
            <p class="hint">Phone incorrect</p>
        </div>
    </div>

    <input type="submit" value="Send" class="send-form">

    <div class="success-block">
        <img src="{{asset('assets/img/success.svg')}}" alt="">
        <h2>The message has been sent successfully!</h2>
        <p>Thank you for contacting us, we will contact you soon.</p>
    </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{asset('assets/js/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
</script>
<script>
    $.mask.definitions['9'] = '';
    $.mask.definitions['d'] = '[0-9]';
    $("#phone").mask("+971 dd ddd dddd");
</script>
