
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <?php foreach($categories_list as $item) :?>
                <li class="promo__item promo__item--boards">
                    <a class="promo__link" href="pages/all-lots.html"><?=$item['categ_name'];?></a>
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
                        <img src="<?=$val['lot_image']?>" width="350" height="260" alt="">
                    </div>.
                    <div class="lot__info">

                        <span clsss ="lot__category"> <?php echo($val['lot_categ_id']);?></span>
                        <h3 class="lot__title"><a class="text-link" href="lot.html"><?=$val['lot_name'];?></a></h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?=sum_format($val['lot_start_price'])?><b class="rub">р</b></span>
                            </div>
                            <div class="lot__timer timer">
                                <?=timer();?>
                            </div>
                        </div>
                </li>
            <?endforeach;?>
        </ul>
    </section>

