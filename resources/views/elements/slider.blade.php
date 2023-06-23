<div class="top_a_block">
    <div class="uk-container uk-container-center">
        <section id="tm-top-a" class="tm-top-a uk-grid" data-uk-grid-match="{target:&#39;&gt; div &gt; .uk-panel&#39;}"
            data-uk-grid-margin="">
            <div class="uk-width-1-1 uk-row-first">
                <div class="uk-panel">
                    <div class="uk-grid">
                        <div class="uk-width-1-1 uk-width-medium-1-4">
                            <div class="uk-grid">
                                <div class="uk-width-1-1 uk-width-medium-1-2">
                                    <div class="service_block"><a href="https://comtel.md/laptop-repair"><img
                                                src="{{ asset('images/laptop.png') }}" alt=""><span>Ремонт
                                                ноутбуков</span></a></div>
                                </div>
                                <div class="uk-width-1-1 uk-width-medium-1-2">
                                    <div class="service_block"><a href="https://comtel.md/computer-repair"><img
                                                src="{{ asset('images/computer.png') }}" alt=""><span>Ремонт
                                                компьютеров</span></a></div>
                                </div>
                                <div class="uk-width-1-1 uk-width-medium-1-2">
                                    <div class="service_block"><a href="https://comtel.md/phone-repair"><img
                                                src="{{ asset('images/smartphone.png') }}" alt=""><span>Ремонт
                                                телефонов</span></a></div>
                                </div>
                                <div class="uk-width-1-1 uk-width-medium-1-2">
                                    <div class="service_block"><a href="https://comtel.md/ps-xbox-repair"><img
                                                src="{{ asset('images/gamepad.png') }}" alt=""><span>Ремонт
                                                PS/Xbox</span></a></div>
                                </div>
                                <div class="uk-width-1-1 uk-width-medium-1-2">
                                    <div class="service_block"><a href="https://comtel.md/tv-repair"><img
                                                src="{{ asset('images/television.png') }}" alt=""><span>Ремонт
                                                телевизоров</span></a></div>
                                </div>
                                <div class="uk-width-1-1 uk-width-medium-1-2">
                                    <div class="service_block"><a
                                            href="https://comtel.md/repair-of-office-equipment"><img
                                                src="{{ asset('images/printer.png') }}" alt=""><span>Ремонт
                                                оргтехники</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-medium-3-4">
                            <div data-uk-slideshow="{duration: 400,autoplay: true ,autoplayInterval: 2000}">

                                <div class="uk-slidenav-position">

                                    <ul class="uk-slideshow" style="height: 329px;">
                                        @foreach ($sliders as $slider)
                                            <li style="min-height: 300px; animation-duration: 400ms; opacity: 1; height: 329px;"
                                                data-slideshow-slide="img" aria-hidden="true" class="">
                                                <div class="uk-cover-background uk-position-cover"
                                                    style="background-image: url({{ $slider->getFirstMediaUrl('images') }});">
                                                </div>
                                                <img src="{{ $slider->getFirstMediaUrl('images') }}"
                                                    alt="{{ $slider->getTranslation('title', 'ro') }}" height="600px"
                                                    style="width: 100%; height: auto; opacity: 0;">
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="https://comtel.md/#"
                                        class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous uk-hidden-touch"
                                        data-uk-slideshow-item="previous"></a>
                                    <a href="https://comtel.md/#"
                                        class="uk-slidenav uk-slidenav-contrast uk-slidenav-next uk-hidden-touch"
                                        data-uk-slideshow-item="next"></a>
                                    <div class="uk-overlay-panel uk-overlay-bottom">
                                        <ul class="uk-dotnav uk-dotnav-contrast uk-flex-center">
                                            @foreach ($sliders as $index => $slider)
                                                <li data-uk-slideshow-item="{{ $index }}" class=""><a
                                                        href="#">{{ $slider->getTranslation('title', 'ru') }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
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
