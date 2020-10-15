<div id="tournament_tickets" style="display: none">
    <h2>Купить билеты для участия</h2>
    <div class="items_tickets">
        <div class="item_ticket" data-tickets="2">
            <img class="img_ticket" src="../../img/tickets.png" alt="tickets">
            <div class="info_tickets">
                <p>2 билета</p>
                <span>Купить за 99 руб.</span>
                <span class="price_ticket">1 БИЛЕТ = 49.50 руб</span>
            </div>
        </div>
        <div class="item_ticket" data-tickets="8">
            <img class="img_ticket" src="../../img/tickets.png" alt="tickets">
            <div class="info_tickets">
                <p>8 билетов</p>
                <span>Купить за 300 руб.</span>
                <span class="price_ticket">1 БИЛЕТ = 37.50 руб</span>
            </div>
        </div>
        <div class="item_ticket" data-tickets="15">
            <img class="img_ticket" src="../../img/tickets.png" alt="tickets">
            <div class="info_tickets">
                <p>15 билетов</p>
                <span>Купить за 500 руб.</span>
                <span class="price_ticket">1 БИЛЕТ = 33.33 руб</span>
            </div>
        </div>
    </div>
</div>

<div id="buy_tournament_tickets" class="add_balance_modal" style="display: none">
    <h2>Способ оплаты</h2>
    <p style="opacity: 0.7">К оплате: <span id="for_oplata">0</span> руб</p>
    <!-- <p>Вы получите <span id="do_get_tickets"></span> <img src="../../img/ticket.png" style="width: 25px;" alt=""></p> -->
    <input type="hidden" value="0" id="val_tickets">
    <input type="hidden" value="<?php echo $user->id ?>" id="uid">
    <div class="items_tickets">
        <div class="item_ticket">
            <img class="img_ticket" src="../../img/RoboKassa.png" alt="robokassa">
            <div class="info_tickets">
                <p>RoboKassa</p>
            </div>
        </div>
        <div class="item_ticket" id="buy_balance">
            <img class="img_ticket" src="../../img/ruble.png" alt="balance">
            <div class="info_tickets">
                <p>С баланса</p>
                <span>На балансе <?php echo $user->balance; ?> руб</span>
            </div>
        </div>
    </div>
</div>