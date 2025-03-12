<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>TradeBlade</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="assets/css/styles.css" />
    </head>
    <body>

        <!-- Header -->
        <?php include "components/header.php"; ?>

        <!-- Hero Section -->
        <section id="hero" class="container animated-block">
            <div class="row slide-top">
                <div class="col-12 col-md-7">
                    <h1>Моментально </br> копируй сделки </br> профи трейдеров</h1>
                    <p>
                        Начни копировать сделки с успешной командой профессиональных </br>
                        трейдеров в автоматическом режиме.
                    </p>
                    <?php 
                        $buttonLabel = 'Начать';
                        include "components/email_form.php"; 
                    ?>
                    <p class="sign">5 дней бесплатного пользования</p>
                </div>
                <div class="col-12 col-md-5">
                    <img src="assets/images/trade.png" alt="Trades" />
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section id="statistics" class="container-fluid background-figure animated-block">
            <div class="container">
                <div class="row slide-top">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <h2>Цифры</h2>
                        <p class="sign">Cентябрь 2022</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <p>Торговой</br> прибыли</p>
                        <p class="statictic-result">2756%</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <p>Фьючерсных</br> и спотовых сделок</p>
                        <p class="statictic-result">67</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <p>Прибыль</br> подписчиков</p>
                        <p class="statictic-result">375000</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Deals Section -->
        <section id="deals" class="container-fluid animated-block">
            <div class="slide-top">
                <div class="container">
                    <h2>Прошедшие сделки</h2>
                    <p class="sign">Онлайн</p>
                </div>
                <div class="deals-container">
                    <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    58.6206%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">BTC/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    6.02%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 3</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    58.6206%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">ETH/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    16.3%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    0.963%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    58.6206%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">BTC/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    6.02%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 3</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    58.6206%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">ETH/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    16.3%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    0.963%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    58.6206%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">BTC/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    6.02%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 3</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    58.6206%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">ETH/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    16.3%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    0.963%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    58.6206%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">BTC/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    6.02%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 3</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    58.6206%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">ETH/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    16.3%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="deal">
                            <div>
                                <p class="deal-name">NEAR/USDT</p>
                                <p class="deal-source">SPOT · 1 мин. назад</p>
                            </div>
                            <div>
                                <p class="deal-income-header">Прибыль</p>
                                <p class="deal-income">
                                    0.963%
                                    <img src="assets/images/arrow-top.svg" alt="Rise arrow" width="9" height="16">
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>Цель 4</p>
                                    <p class="deal-date">Дата входа 06.10.2022</p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="container scrollable-container">
                    . <!--It's only for custom carousel-->
                </div>
            </div>
        </section>

        <!-- Company Section -->
        <section id="company" class="container-fluid background-figure animated-block">
            <div class="container">
                <div class="row slide-top">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <h2>О компании</h2>
                        <p>
                            Мы опытная команда, для которой трейдинг – профессия. TradeBlade является 
                            авторизованным официальным брокером биржи Binance.
                            </br>
                            </br>
                            Он представляет пользователям множество преимуществ, таких как более високая 
                            скорость синхронизации API и возможность создать учетную запись Binance 
                            через платформу TradeBlade всего в 1 клик.
                        </p>
                    </div>
                    <div class="form-container col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-2">
                        <div class="form-content">
                            <p>
                                Попробуйте сейчас и получите </br>
                                5 дней бесплатного пользования
                            </p>
                            <?php 
                                $buttonLabel = 'Попробовать';
                                include "components/email_form.php"; 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="container animated-block">
            <div class="row slide-top">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <h2>TradeBlade это</h2>
                </div>
                <div class="features col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-1">
                    <div class="feature">
                        <img src="assets/images/feature/feature-1.svg" alt="Feature 1" width="56" height="56"/>
                        <div>
                            <h3>Копи–трейдинг 24/7</h3>
                            <p>Copy–Trading позволяет следить за сделками команды и получать прибыль 24/7 без каких–либо усилий или проблем для вас.</p>
                        </div>
                    </div>
                    <div class="feature">
                        <img src="assets/images/feature/feature-2.svg" alt="Feature 2" width="56" height="56"/>
                        <div>
                            <h3>Торговля спотовыми и фьючерсными сделками</h3>
                            <p>Платформа для копи–трейдинга поддерживает торговлю как спотовыми, так и фьючерсными сделками на Binance.</p>
                        </div>
                    </div>
                    <div class="feature">
                        <img src="assets/images/feature/feature-3.svg" alt="Feature 3" width="56" height="56"/>
                        <div>
                            <h3>Высокая прибыль каждий день</h3>
                            <p>Каждая сделка показывает хорошие результаты на рынках за счет хорошего денежного и риск менеджмента.</p>
                        </div>
                    </div>
                    <div class="feature">
                        <img src="assets/images/feature/feature-4.svg" alt="Feature 4" width="56" height="56"/>
                        <div>
                            <h3>Собственный курс по трейдингу</h3>
                            <p>Мы хотим менять комьюнити, улучшать его. В личном кабинете на сайте вы найдете наш собственный курс по криптовалютам, который поможет увереннее понимать наши сигналы и разрабатывать свои.</p>
                        </div>
                    </div>
                    <div class="feature">
                        <img src="assets/images/feature/feature-5.svg" alt="Feature 5" width="56" height="56"/>
                        <div>
                            <h3>Сильное окружение</h3>
                            <p>Ты попадаешь в сильное крипто окружение, ведь развиваться легче когда нас много. В чате присутствуют люди из нашей команды, которые общаються со всеми, помагают и подсказывают.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HowToStart Section -->
        <section id="start" class="container-fluid background-figure animated-block">
            <div class="container slide-top">
                <h2>Как начать пользоваться сервисом</h2>
                <div class="steps-container">
                    <div class="step">
                        <h3>Создайте аккаунт</h3>
                        <p>Начните бесплатную 3-дневную пробную версию. Кредитная карта не требуется.</p>
                    </div>
                    <div class="step">
                        <h3>Подключить обмен API ключами</h3>
                        <p>Просто вставьте свои ключи API из личного кабинета.</p>
                    </div>
                    <div class="step">
                        <h3>Настройте аккаунт</h3>
                        <p>Поставьте нужные настройки депозита на каждый сигнал и нажмите сохранить.</p>
                    </div>
                    <div class="step">
                        <h3>Ваш копитрейдер запущен</h3>
                        <p>Просто расслабьтесь и начните получать пассивный доход от криптовалюты с помощью TradeBlade</p>
                    </div>
                </div>
                <button type="button">Попробовать бесплатно</button>
            </div>
        </section>

        <!-- Price Section -->
        <section id="prices" class="container animated-block">
            <div class="row slide-top">
                <div class="col-12 col-sm-12 col-md-8 offset-md-2">
                    <h2>Тарифы</h2>
                    <div class="plan-type">
                        <button class="active" type="button">СПОТ</button>
                        <button type="button">фьючерс</button>
                    </div>
                    <div class="plan-container">
                        <div id="plan-1" class="plan-content">
                            <div>
                                <div class="plan-data hidden" data-year="234" data-month="24" data-week="8" data-dyear="35" data-dmonth="12" data-dweek="0"></div>
                                <p class="plan-name">STANDART</p>
                                <ul>
                                    <li>Ручной трейдинг</li>
                                    <li>Автоматическое или полуавтоматическое копирование сделок</li>
                                    <li>Личный кабинет со статистикой</li>
                                    <li>Среднесрочные сделки с уровнями набора портфеля</li>
                                </ul>
                            </div>
                            <div>
                                <div class="plan-price">
                                    <p><span class="price">$234</span><span class="discount">-35%</span></p>
                                    <div>
                                        <div class="select-arrow"></div>
                                        <select name="plan-subscr">
                                            <option value="year">12 месяцев</option>
                                            <option value="month">1 месяц</option>
                                            <option value="week">7 дней</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button">
                                    Попробовать 
                                    <span>5 дней бесплатно</span>
                                </button>
                            </div>
                            
                        </div>
                        <div id="plan-2" class="plan-content vip">
                            <div>
                                <div class="plan-data hidden" data-year="585" data-month="55" data-week="18" data-dyear="35" data-dmonth="12" data-dweek="0"></div>
                                <p class="plan-name">VIP</p>
                                <ul>
                                    <li>Ручной трейдинг</li>
                                    <li>Автоматическое или полуавтоматическое копирование сделок</li>
                                    <li>Личный кабинет со статистикой</li>
                                    <li>Краткосрочные, среднесрочные и инвест сделки</li>
                                    <li>Доступ в Vip чат с командой</li>
                                    <li>Наш авторский курс по трейдингу</li>
                                </ul>
                            </div>
                            <div>
                                <div class="plan-price">
                                    <p><span class="price">$585</span><span class="discount">-35%</span></p>
                                    <div>
                                        <div class="select-arrow"></div>
                                        <select name="plan-subscr">
                                            <option value="year">12 месяцев</option>
                                            <option value="month">1 месяц</option>
                                            <option value="week">7 дней</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button">
                                    Попробовать 
                                    <span>5 дней бесплатно</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews Section -->
        <section id="reviews" class="container animated-block">
            <div class="row slide-top">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                    <h2>Отзывы учасников комьюнити</h2>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="review-content">
                                <div class="img-container">
                                    <img src="assets/images/reviews/review1.png" alt="First reviewer" width="81" height="81" />
                                </div>
                                <div>
                                    <p class="review-name">@ArtemGuriev</p>
                                    <p class="review-income">Общая прибыль 3043.27 USD</p>
                                    <p class="review-text">
                                        Я запустил спот-бота 5 января. За 25 дней я заработал более 3 
                                        тысяч на споте без единого убытка и без страха ликвидации. 
                                        Большое спасибо TradeBlade за создание такого замечательного 
                                        бота.
                                    </p>
                                </div>
                            </div>
                            <div class="review-content">
                                <div class="img-container">
                                    <img src="assets/images/reviews/review2.png" alt="Second reviewer" width="81" height="81"/>
                                </div>
                                <div>
                                    <p class="review-name">@XPonse</p>
                                    <p class="review-income">Общую прибыль не афиширует</p>
                                    <p class="review-text">
                                        Мой капитал 2к. Если я получаю 10 долларов в день, то за месяц я 
                                        зарабатываю 300 долларов. То есть 15% в месяц, что мне более чем 
                                        достаточно.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="review-content">
                                <div class="img-container">
                                    <img src="assets/images/reviews/review3.png" alt="Third reviewer" width="81" height="81"/>
                                </div>
                                <div>
                                    <p class="review-name">@gWagon</p>
                                    <p class="review-income">Общую прибыль не афиширует</p>
                                    <p class="review-text">
                                        Попробовал. Понравилось. Рекомендую ли я? Да. Но адектватно 
                                        понимаю, что чем больше людей тем может быть меньше прибыли...
                                    </p>
                                </div>
                            </div>
                            <div class="review-content">
                                <div class="img-container">
                                    <img src="assets/images/reviews/review4.png" alt="Forth reviewer" width="81" height="81"/>
                                </div>
                                <div>
                                    <p class="review-name">@sanyaMnS</p>
                                    <p class="review-income">Общая прибыль 4 405.96 USD</p>
                                    <p class="review-text">
                                        Сначала немного расстроился ибо заработал 4$ с одной крупной 
                                        сделки. Но зато понял что все равно в плюсе. На следующей 
                                        сделке все полетело вверх.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button">Загрузить больше отзывов</button>
                </div>
            </div>            
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="container-fluid animated-block animated-block">
            <div class="container">
                <div class="row slide-top">
                    <div class="col-12  col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <h2>Часто задаваемые вопросы</h2>
                        <div class="faq-item active">
                            <div class="question">
                                <h3>Что такое TradeBlade</h3>
                                <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9.5L12 15.5L18 9.5" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="answer">
                                <p>
                                    Мы опытная команда, для которой трейдинг – профессия. TradeBlade 
                                    является авторизованным официальным брокером биржи Binance.
                                    <br><br>
                                    Он представляет пользователям множество преимуществ, таких как более 
                                    высокая скорость синхронизации API и возможность создать учетную запись 
                                    Binance через платформу TradeBlade всего в 1 клик.
                                </p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="question">
                                <h3>Что TradeBlade предлагает инвесторам</h3>
                                <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9.5L12 15.5L18 9.5" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="answer">
                                <p>
                                    Мы опытная команда, для которой трейдинг – профессия. TradeBlade 
                                    является авторизованным официальным брокером биржи Binance.
                                    <br><br>
                                    Он представляет пользователям множество преимуществ, таких как более 
                                    высокая скорость синхронизации API и возможность создать учетную запись 
                                    Binance через платформу TradeBlade всего в 1 клик.
                                </p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="question">
                                <h3>Должен ли я перевести свои средства на TradeBlade</h3>
                                <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9.5L12 15.5L18 9.5" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="answer">
                                <p>
                                    Мы опытная команда, для которой трейдинг – профессия. TradeBlade 
                                    является авторизованным официальным брокером биржи Binance.
                                    <br><br>
                                    Он представляет пользователям множество преимуществ, таких как более 
                                    высокая скорость синхронизации API и возможность создать учетную запись 
                                    Binance через платформу TradeBlade всего в 1 клик.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Banner Section -->
        <section id="banner" class="container-fluid">
            <div class="container">
                <p>
                    Начните прямо сейчас с бесплатным </br>
                    5–и дневным пробным периодом!
                </h2>
                <?php 
                    $buttonLabel = 'Зарегистрироваться';
                    include "components/email_form.php"; 
                ?>
            </div>
        </section>

        <!-- Footer -->
        <?php include "components/footer.php"; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
