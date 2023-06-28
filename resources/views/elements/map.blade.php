<div class="bottom_b_block">
    <div class="uk-container uk-container-center">
        <section id="tm-bottom-b" class="tm-bottom-b uk-grid"
            data-uk-grid-match="{target:&#39;&gt; div &gt; .uk-panel&#39;}" data-uk-grid-margin="">
            <div class="uk-width-1-1 uk-row-first">
                <div class="uk-panel">
                    <h3>Контактная информация</h3>
                    <div class="uk-grid uk-grid-large contacts_bottom">
                        <div class="uk-width-1-1 uk-width-medium-1-4">
                            <div class="schema" itemscope="" itemtype="http://schema.org/SportingGoodsStore">
                                <div class="logo_bottom"><img itemprop="image" src="{{ asset('/images/logo.png') }}"
                                        alt="Logo"></div>

                                <div class="name"><span itemprop="name">Comtel</span></div>
                                <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"
                                    class="adress">
                                    <span itemprop="addressLocality">{{ $settings->address }}</span>
                                </div>
                                <div class="phone"><span itemprop="telephone">{{ $settings->phone_number }}</span>
                                </div>
                                <div class="email"><span itemprop="email">{{ $settings->email }}</span></div>
                                <div class="shelude">{{ $settings->schedule }}<br> {{ $settings->weekend_schedule }}
                                </div>
                                <div class="social_list">
                                    <ul class="social_block">
                                        <li class="facebook"><a href="{{ $settings->facebook }}"><i
                                                    class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li class="instagram"><a href="{{ $settings->instagram }}"><i
                                                    class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                        <li class="messenger"><a href="{{ $settings->messenger }}"><i
                                                    class="fab fa-facebook-messenger" aria-hidden="true"></i></a></li>
                                        <li class="viber"><a href="{{ $settings->viber }}"><i class="fab fa-viber"
                                                    aria-hidden="true"></i></a></li>
                                        <li class="whatsapp"><a href="{{ $settings->whatsapp }}"><i
                                                    class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-medium-3-4">
                            <div data-uk-check-display="" data-wk-check-display=""
                                style="width: auto; height: 493px; position: relative; overflow: hidden;"
                                class=" uk-img-preserve" id="wk-map6490882adf98c">
                                <div
                                    style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                    <div class="gm-err-container">
                                        <div class="gm-err-content">
                                            <div class="gm-err-icon"><img
                                                    src="./Ремонт компьютеров и ноутбуков в Кишиневе_files/icon_error.png"
                                                    alt="" draggable="false" style="user-select: none;"></div>
                                            <div class="gm-err-title">Oops! Something went wrong.</div>
                                            <div class="gm-err-message">This page didn't load Google Maps correctly.
                                                See the JavaScript console for technical details.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
