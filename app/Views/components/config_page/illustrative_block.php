<div class="illustative-block">
    <div class="base-img">
        <div class="case-block" data-category-id="53">
            <img class="highlight-part part-case" src="./assets/images/icons/config_page/case-constructor.svg" />
            <img class="added-part part-case hidden" src="./assets/images/icons/config_page/case_added.svg" />
            <button class="add-part-btn case-btn" onclick="chooseProductForAssembly(53, 'Корпус')">
                Корпус <img src="./assets/images/icons/config_page/plus.svg" />
            </button>
        </div>

        <div class="motherboard-block" data-category-id="9">
            <img class="highlight-part part-motherboard" src="./assets/images/icons/config_page/motherboard_noadd.svg" />
            <img class="added-part part-motherboard hidden" src="./assets/images/icons/config_page/motherboard_added.svg" />
            <button class="add-part-btn motherboard-btn" onclick="chooseProductForAssembly(9, 'Материнская плата')">
                Материнская плата <img src="./assets/images/icons/config_page/plus.svg" />
            </button>
        </div>

        <div class="videocard-block" data-category-id="15">
            <img class="highlight-part part-videocard" src="./assets/images/icons/config_page/videocard__noadd.svg" />
            <img class="added-part part-videocard hidden" src="./assets/images/icons/config_page/videocard__added.svg" />
            <button class="add-part-btn videocard-btn" onclick="chooseProductForAssembly(15, 'Видеокарта')">
                Видеокарта <img src="./assets/images/icons/config_page/plus.svg" />
            </button>
        </div>

        <div class="cooler-block" data-category-id="18">
            <img class="highlight-part part-cooler" src="./assets/images/icons/config_page/cooler_noadd.svg" />
            <img class="added-part part-cooler hidden" src="./assets/images/icons/config_page/cooler_added.svg" />
            <button class="add-part-btn cooler-btn" onclick="chooseProductForAssembly(18, 'Кулер')">
                Кулер <img src="./assets/images/icons/config_page/plus.svg" />
            </button>
        </div>

        <div class="cpu-block" data-category-id="8">
            <img class="highlight-part part-cpu" src="./assets/images/icons/config_page/cpu_noadd.svg" />
            <img class="added-part part-cpu hidden" src="./assets/images/icons/config_page/cpu_added.svg" />
            <button class="add-part-btn cpu-btn" onclick="chooseProductForAssembly(8, 'Процессор')">
                Процессор <img src="./assets/images/icons/config_page/plus.svg" />
            </button>
        </div>

        <div class="powerunit-block" data-category-id="54">
            <img class="highlight-part part-powerunit" src="./assets/images/icons/config_page/powerunit_noadd.svg" />
            <img class="added-part part-powerunit hidden" src="./assets/images/icons/config_page/powerunit_added.svg" />
            <button class="add-part-btn powerunit-btn" onclick="chooseProductForAssembly(54, 'Блок питания')">
                Блок питания <img src="./assets/images/icons/config_page/plus.svg" />
            </button>
        </div>

        <div class="ram-unit" data-category-id="17">
            <img class="highlight-part part-ram" src="./assets/images/icons/config_page/ram_noadd.svg" />
            <img class="added-part part-ram hidden" src="./assets/images/icons/config_page/ram_added.svg" />
            <button class="add-part-btn ram-btn" onclick="chooseProductForAssembly(17, 'Оперативная память')">
                Оперативная память <img src="./assets/images/icons/config_page/plus.svg" />
            </button>
        </div>

        <div class="ssd-block" data-category-id="253">
            <img class="highlight-part part-ssd" src="./assets/images/icons/config_page/ssd__noadd.svg" />
            <img class="added-part part-ssd hidden" src="./assets/images/icons/config_page/ssd_added.svg" />
            <button class="add-part-btn ssd-btn" onclick="chooseProductForAssembly(253, 'SSD')">
                SSD <img src="./assets/images/icons/config_page/plus.svg" />
            </button>
        </div>

        <div class="hhd-block" data-category-id="90">
            <img class="highlight-part part-hdd" src="./assets/images/icons/config_page/hdd_noadd.svg" />
            <img class="added-part part-hdd hidden" src="./assets/images/icons/config_page/hdd_added.svg" />
            <button class="add-part-btn hdd-btn" onclick="chooseProductForAssembly(90, 'Жёский диск')">
                Жёский диск <img src="./assets/images/icons/config_page/plus.svg" />
            </button>
        </div>
    </div>

    <div class="illustative-block_btns">
        <button class="clear-btn" onclick="handleClearComponentList()">Очистить</button>
        <button class="in-cart-btn">
            <span class="price">0</span>
            <span class="cart-text">В корзину</span>
        </button>
    </div>
</div>
