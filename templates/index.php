
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <?php foreach($categories_list as $a=>$val) :?>
                <li class="promo__item promo__item--<?php $a ?>">
                    <a class="promo__link" href="pages/all-lots.html"><?php echo($val);?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <!--заполните этот список из массива с товарами-->
            <?php foreach ($data_list as $val) : ?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?=$val['URL_Pictures']?>" width="350" height="260" alt="">
                    </div>.
                    <div class="lot__info">

                        <span clsss ="lot__category"> <?php echo($val['Cat']);?></span>
                        <h3 class="lot__title"><a class="text-link" href="lot.html"><?=$val['Name'];?></a></h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?=sum_format($val['Price'])?><b class="rub">р</b></span>
                            </div>
                            <div class="lot__timer timer">
                                <?=timer();?>
                            </div>
                        </div>
                </li>
            <?endforeach;?>
        </ul>
    </section>
