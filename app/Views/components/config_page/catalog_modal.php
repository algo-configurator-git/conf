<div class="modal-overlay" id="modal-catalog">
    <div class="modal-frame">
        <div class="modal-header">
            <h2 class="modal-title" id="modal-title">Заголовок</h2>
            <div class="filter">
                <div class="filter-search">
                    <img src="./assets/images/icons/search.svg" class="search-icon" />
                    <input type="text" placeholder="Найти товар" />
                </div>
            </div>
            <button class="close-modal-btn">&times;</button>
        </div>
        <div class="modal-content">

            <aside>
                <div class="filter-container" id="filter-container">
                    <div class="filter-buttons">
                        <button class="clear-btn" onclick="handleClearFilters()">Очистить</button>
                        <button class="show-btn" onclick="handleShowProductsByFilters()">Показать <span>0</span></button>
                    </div>
                </div>
            </aside>
            <div class="main-content">
                <div class="search-row-opts">
                    <label class="toggle-container">
                        <span>Акции</span>
                        <input type="checkbox" id="saleOnly">
                        <div class="toggle"></div>
                    </label>
                    <select class="categories-dropdown">
                        <option value="0">По популярности</option>
                        <option value="1">По новизне</option>
                        <option value="2">По цене</option>
                    </select>

                    <div class="categories">
                        <button class="active">DeepCool</button>
                        <button>ExeGate</button>
                        <button>ID-CCOLING</button>
                        <button>Zalman</button>
                    </div>

                    <div class="view-switcher">
                        <span>Вид:</span>
                        <button class="view-btn active" data-view="list" onclick="handleViewSwitch(this)">
                            <span></span>
                        </button>
                        <button class="view-btn" data-view="grid" onclick="handleViewSwitch(this)">
                            <span>
                              <div></div>
                              <div></div>
                              <div></div>
                              <div></div>
                            </span>
                        </button>
                    </div>

                </div>

                <div class="products-container list-view" id="list-view">
                </div>
                <div class="products-container grid-view" id="grid-view">
                </div>

                <div class="pagination-container" id="pagination-container">
                    <div class="pagination-choice">
                        <div class="pagination" id="pagination">
                        </div>
                        <button class="show-more-btn" id="show-more-btn">Показать ещё</button>
                    </div>

                    <div class="page-choice">
                        <span class="items-per-page-label">Товаров на странице по</span>
                        <div class="dropdown-wrapper">
                            <div class="dropdown-btn" id="dropdownToggle">
                                <span id="dropdownValue">20</span>
                                <img src="./assets/images/icons/arrow-down.svg" class="toggle-arrow" />
                            </div>
                            <ul class="dropdown-list hidden" id="dropdownList">
                                <li onclick="handlePerPageChange(10)">10</li>
                                <li onclick="handlePerPageChange(20)">20</li>
                                <li onclick="handlePerPageChange(50)">50</li>
                                <li onclick="handlePerPageChange(100)">100</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>