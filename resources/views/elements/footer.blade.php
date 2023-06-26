@include('elements.map')
<div class="footer_block">
    <div class="uk-container uk-container-center">
        <footer id="tm-footer" class="tm-footer">
            <div class="uk-panel">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-width-medium-1-2 copyright_left">
                        <p>Copyright © 2020. Все права защищены!</p>
                    </div>
                    <div class="uk-width-1-1 uk-width-medium-1-2 copyright_right">
                        <p><a href="http://www.sitemaker.md/">Создание сайта</a>&nbsp;Sitemaker.md</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script>
    jQuery(function($) {
        $('.uk-navbar-nav a[href*="#"]').attr('data-uk-smooth-scroll', '{offset:70}');
    });
</script>
@stack('scripts')
</body>

</html>