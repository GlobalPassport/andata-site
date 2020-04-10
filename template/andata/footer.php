</div>


<footer>
<div class="navbar navbar-fixed-bottom " title="Нейросеть цифрового паспорта андата">
    <nav class=" navbar navbar-light navbar-expand-md">
        <div class="container">
            <a class="navbar-brand text-uppercase button_medium logo" href="/">
                <img src="<?=get_template_directory_uri()?>/assets/img/logo.svg" alt="">
            </a>
            <ul>
                <li> <a class="nav-link subtitle1 " href="/contacts">Контакты</a></li>
                <li><a class="nav-link subtitle1 " href="https://andata.ru/%d1%81%d0%be%d0%b3%d0%bb%d0%b0%d1%88%d0%b5%d0%bd%d0%b8%d0%b5-%d0%be-%d0%ba%d0%be%d0%bd%d1%84%d0%b8%d0%b4%d0%b5%d0%bd%d1%86%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d0%b8/">Политика конфиденциальности</a></li>
            </ul>


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