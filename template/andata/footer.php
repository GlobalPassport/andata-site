</div>


<footer>
<div class="navbar navbar-fixed-bottom " title="Нейросеть цифрового паспорта андата">
    <nav class=" navbar navbar-light navbar-expand-md">
        <div class="container">
            <a class="navbar-brand text-uppercase button_medium logo" href="/">
                <img src="<?=get_template_directory_uri()?>/assets/img/logo.svg" alt="">
            </a>
            <a class="nav-link button_medium " href="/contacts">Контакты</a>
        </div>
    </nav>
</div>
</footer>

<script>
    window.onload = function () {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
        }, 500);
    }
</script>
</body>
</html>