<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<form class="leasing-calc" actions="">
    <div class="site-container">
        <div class="leasing-calc__body">
            <div class="leasing-calc__col leasing-calc__col--big">
                <div class="leasing-calc__heading">
                    <h3 class="leasing-calc__title form__title h3-text">Расчитать&nbsp;лизинг</h3>
                    <div class="leasing-calc__text form__text">Если отправите заявку в течении 5 мин, при покупке получите подарок.</div>
                </div>
                <div class="leasing-calc__inputs">
                    <div class="leasing-calc__input leasing-calc__input--cost">
                        <div class="range">
                            <div class="range__wrapper">
                                <div class="range__label">Стоимость</div>
                                <div class="range__input-wrapper">
                                    <input class="range__input styled-slider slider-progress" type="range" step="10000" required="required" name="cost" id="costInput" min="100000" max="3500000" value="3500000">
                                </div>
                                <div class="range__values">
                                    <div class="range__input-value">
                                        <output for="cost" id="costOutput">3 500 000</output><span>&nbsp;</span><span class="range__span-currency">₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leasing-calc__input leasing-calc__input--prepayment">
                        <div class="range">
                            <div class="range__wrapper">
                                <div class="range__label">Аванс</div>
                                <div class="range__input-wrapper">
                                    <input class="range__input styled-slider slider-progress" type="range" step="10000" required="required" name="prepayment" id="prepaymentInput" min="10000" max="350000" value="3500000">
                                </div>
                                <div class="range__values">
                                    <div class="range__input-value">
                                        <output for="prepayment" id="prepaymentOutput">350 00</output><span>&nbsp;</span><span class="range__span-currency">₽</span>
                                    </div>
                                    <div class="range__input-percentege"><span class="range__percentege-value">10</span><span>&nbsp;</span><span class="range__percentege-currency">&#x25;</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leasing-calc__input leasing-calc__input--term">
                        <div class="range">
                            <div class="range__wrapper">
                                <div class="range__label">Срок</div>
                                <div class="range__input-wrapper">
                                    <input class="range__input styled-slider slider-progress" type="range" required="required" name="term" id="termInput" min="12" max="36" value="24">
                                </div>
                                <div class="range__values">
                                    <div class="range__input-value">
                                        <output for="term" id="termOutput">24</output><span>&nbsp;</span><span class="range__span-currency">мес</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leasing-calc__col">
                <div class="leasing-calc__submit submit-calc">
                    <div class="submit-calc__head">
                        <div class="submit-calc__text">Ежемесячный платёж</div>
                        <div class="submit-calc__monthly-payment h4-text"><span class="submit-calc__payment-value">0</span><span class="submit-calc__price-currency">₽</span>
                        </div>
                    </div>
                    <div class="submit-calc__bottom">
                        <button class="submit-calc__button button-primary button-primary--black button-primary--large" data-path="leasing-request-modal" type="submit">Получить расчет</button>
                        <div class="submit-calc__footnote">* Данный расчет примерный, точную информацию о лизинге узнавайте у консультантов</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>