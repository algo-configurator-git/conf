// Toggle choice button

document.addEventListener("DOMContentLoaded", function() {
  const toggleOptions = document.querySelectorAll(".toggle-option");
  const toggleBtn = document.querySelector(".toggle-btn");

  // Создаем и добавляем подсветку
  const toggleHighlight = document.createElement("div");
  toggleHighlight.classList.add("toggle-highlight");
  toggleBtn.appendChild(toggleHighlight);

  // Функция обновления позиции подсветки
  function updateHighlight(activeBtn) {
    const btnRect = activeBtn.getBoundingClientRect();
    const parentRect = toggleBtn.getBoundingClientRect();
    toggleHighlight.style.width = `${btnRect.width}px`;
    toggleHighlight.style.transform = `translateX(${btnRect.left - parentRect.left}px)`;
  }

  // Функция для обновления отображаемого контента
  function updateContent(activeBtn) {
    const componentListContent = document.getElementById("component-list-content");
    const selectedContent = document.getElementById("selected-content");

    if (activeBtn.dataset.value === "list") {
      componentListContent.classList.add("active");
      selectedContent.classList.remove("active");
    } else if (activeBtn.dataset.value === "selected") {
      selectedContent.classList.add("active");
      componentListContent.classList.remove("active");
    }
  }

  toggleOptions.forEach((btn) => {
    if (btn.classList.contains("active")) {
      updateHighlight(btn);
      updateContent(btn);
    }

    btn.addEventListener("click", () => {
      toggleOptions.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
      updateHighlight(btn);
      updateContent(btn);
    });
  });
});

// Modals for pc parts
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("modal-catalog");
  const modalTitle = document.getElementById("modal-title");
  const filtersContainer = document.getElementById("filter-container");
  const searchInput = document.querySelector('.modal-header .filter-search input[type="text"]');
  const toggleSale = document.getElementById("saleOnly");
  const sortDropdown = document.querySelector(".categories-dropdown");
  const productContainerList = document.getElementById("list-view");
  const productContainerGrid = document.getElementById("grid-view");
  const closeBtn = document.querySelector(".close-modal-btn");
  const addPartButtons = document.querySelectorAll("[data-modal]");
  const categoryButtons = document.querySelectorAll(".categories button");
  const dropdownToggle = document.getElementById("dropdownToggle");
  const dropdownList = document.getElementById("dropdownList");
  const showMoreButton = document.getElementById("show-more-btn");

  addPartButtons.forEach((button) => {
    button.addEventListener("click", async () => {
      modalTitle.textContent = button.dataset.name;
      modalTitle.dataset.categoryId = button.dataset.modal;
      modal.style.display = "flex";
      document.body.style.overflow = "hidden";

      Promise.all([
        loadFilters(),
        loadProductData({}, getCategoryId())
      ]).then(() => {
          renderShowButton(newProductData.count)
          renderProductView(newProductData.products, newProductData.currentPage, newProductData.totalPages);
        })
      });
  });

  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
    document.body.style.overflow = "";
    clearAllFilters();
  });

  dropdownToggle.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdownList.classList.toggle("hidden");
  });

  modal.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.style.display = "none";
      document.body.style.overflow = "";
      clearAllFilters();
    }
  });

  categoryButtons.forEach((button) => {
    button.addEventListener("click", () => {
      categoryButtons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");
      // currentCategory = button.textContent;
    });
  });

  document.addEventListener("click", (event) => {
    if (event.target.closest(".show-btn")) {
      renderProductView(newProductData.products, newProductData.currentPage, newProductData.totalPages)
    }
    if (event.target.closest(".clear-btn")) {
      clearAllFilters();
      loadProductData(getPayload(), getCategoryId()).then(() => {
        renderShowButton(newProductData.count)
      })
    }
  });

  if (searchInput) {
    searchInput.addEventListener("input", () => {
      loadProductData(getPayload(), getCategoryId()).then(() => {
        renderProductView(newProductData.products, newProductData.currentPage, newProductData.totalPages);
      });
    });
  }

  if (showMoreButton) {
    showMoreButton.addEventListener('click', () => {
      let payload = getPayload();
      payload.page = displayedProductData.currentPage + 1;

      loadProductData(payload, getCategoryId()).then(() => {
        renderProductView(
            newProductData.products,
            newProductData.currentPage,
            newProductData.totalPages,
            null,
            false
        );
      })
    })
  }

  if (filtersContainer) {
    filtersContainer.addEventListener("change", (e) => {
      if (
          e.target.matches('input[type="checkbox"]') ||
          e.target.matches('input[type="range"]') ||
          e.target.matches('input[type="number"]')
      ) {
        loadProductData(getPayload(), getCategoryId()).then(() => {
          renderShowButton(newProductData.count)
        })
      }
    });
  }

  if (toggleSale) {
    toggleSale.addEventListener("change", () => {
      loadProductData(getPayload(), getCategoryId()).then(() => {
        renderProductView(newProductData.products, newProductData.currentPage, newProductData.totalPages)
      });
    });
  }

  if (sortDropdown) {
    sortDropdown.addEventListener("change", () => {
      loadProductData(getPayload(), getCategoryId()).then(() => {
        renderProductView(newProductData.products, newProductData.currentPage, newProductData.totalPages)
      });
    });
  }


  [productContainerList, productContainerGrid].forEach((container) => {
    container.addEventListener("click", (event) => {
      if (event.target.closest(".buy-btn")) {
        const productCard = event.target.closest(".product-card");
        const productCode = productCard.querySelector(".product-code").textContent.split(": ")[1];
        addProductToComparison(productCode);
      }
    });
  });
});


// Open parts variants

document.addEventListener("DOMContentLoaded", () => {
  const selectButtons = document.querySelectorAll(".select-button");

  return;
  selectButtons.forEach(button => {
    button.addEventListener("click", () => {
      const component = button.closest(".component");

      if (!component) return;

      const originalWidth = component.clientWidth;

      const originalHTML = component.innerHTML;
      component.innerHTML = "";
      component.classList.add("component-expanded");

      const cardContainer = document.createElement("div");
      cardContainer.classList.add("component-cards-container");

      function createCard() {
        const card = document.createElement("div");
        card.classList.add("component-list-card");
        card.innerHTML = `
          <div class="component-list-img">
            <img src="./assets/images/card-3.png">
          </div>
          <div class="component-list-info">
            <div>
              <span>Материнская плата</span>
              <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory" />
            </div>
            <div>ASUS Prime B760M-K D4</div>
            <div class="component-list-price">1256. <span>7 руб</span></div>
          </div>
          <div class="component-list-btns">
            <button class="component-list-btn-change">
              <img src="./assets/images/icons/change.svg">
              <span>заменить</span>
            </button>
            <button class="component-list-btn-delete">
              <img src="./assets/images/icons/delete.svg">
              <span>удалить</span>
            </button>
          </div>
        `;
        return card;
      }

      for (let i = 0; i < 3; i++) {
        cardContainer.appendChild(createCard());
      }

      const scrollBtnContainer = document.createElement("div");
      scrollBtnContainer.classList.add("scroll-btn-container");

      const scrollLeftBtn = document.createElement("button");
      scrollLeftBtn.classList.add("scroll-btn", "disabled");
      scrollLeftBtn.innerHTML = `<img src="./assets/images/icons/arrow-left.svg" alt="left">`;

      const scrollRightBtn = document.createElement("button");
      scrollRightBtn.classList.add("scroll-btn");
      scrollRightBtn.innerHTML = `<img src="./assets/images/icons/arrow-right.svg" alt="right">`;

      scrollBtnContainer.appendChild(scrollRightBtn);
      scrollBtnContainer.appendChild(scrollLeftBtn);

      let scrollAmount = 0;
      const scrollStep = 280;

      function updateScrollButtons() {
        const maxScroll = cardContainer.scrollWidth - cardContainer.clientWidth;
        scrollLeftBtn.classList.toggle("disabled", scrollAmount <= 0);
        scrollRightBtn.classList.toggle("disabled", scrollAmount >= maxScroll);
      }

      scrollRightBtn.addEventListener("click", () => {
        const maxScroll = cardContainer.scrollWidth - cardContainer.clientWidth;
        scrollAmount = Math.min(scrollAmount + scrollStep, maxScroll);
        cardContainer.scrollTo({ left: scrollAmount, behavior: "smooth" });
        updateScrollButtons();
      });

      scrollLeftBtn.addEventListener("click", () => {
        scrollAmount = Math.max(scrollAmount - scrollStep, 0);
        cardContainer.scrollTo({ left: scrollAmount, behavior: "smooth" });
        updateScrollButtons();
      });

      cardContainer.addEventListener('scroll', () => {
        scrollAmount = cardContainer.scrollLeft;
        updateScrollButtons();
      });

      component.appendChild(cardContainer);
      component.appendChild(scrollBtnContainer);

      const actionBtnContainer = document.createElement("div");
      actionBtnContainer.classList.add("action-btn-container");

      const addButton = document.createElement("button");
      addButton.classList.add("action-btn", "add-btn");
      addButton.innerHTML = `
                              <img src="./assets/images/icons/add.svg" alt="add">
                              <span class="btn-label">добавить</span>
                            `;;

      const removeButton = document.createElement("button");
      removeButton.classList.add("action-btn", "remove-btn");
      removeButton.innerHTML = `<img src="./assets/images/icons/delete.svg" alt="remove">
                                <span class="btn-label">удалить</span>
                              `;

      actionBtnContainer.appendChild(addButton);
      actionBtnContainer.appendChild(removeButton);

      component.appendChild(actionBtnContainer);

      setTimeout(updateScrollButtons, 0);

      component.style.width = `${originalWidth}px`;

      // del cards
      cardContainer.querySelectorAll(".component-list-btn-delete").forEach(deleteBtn => {
        deleteBtn.addEventListener("click", () => {
          component.innerHTML = originalHTML;attachEventListeners
          component.classList.remove("component-expanded");
          attachEventListeners(component);
        });
      });
    });
  });

  function attachEventListeners(component) {
    const button = component.querySelector(".select-button");
    if (button) {
      button.addEventListener("click", () => {
        button.click();
      });
    }
  }
});

// popup product info

document.addEventListener('DOMContentLoaded', function() {
  const modalOverlay = document.getElementById('modal-about-item');
  const detailsBtn = document.getElementById('details-btn');
  const closeModalBtn = modalOverlay.querySelector('.close-modal-btn');
  const body = document.getElementsByTagName('body');

  function openModal(e) {
    if (e) e.preventDefault();
    modalOverlay.style.display = 'flex';
    setTimeout(() => {
      modalOverlay.classList.add('active');
    }, 10);
    body.style.overflow = 'hidden';
  }

  function closeModal() {
    modalOverlay.classList.remove('active');
    setTimeout(() => {
      modalOverlay.style.display = 'none';
      body.style.overflow = '';
    }, 300);
  }

  detailsBtn.addEventListener('click', openModal);
  closeModalBtn.addEventListener('click', closeModal);

  modalOverlay.addEventListener('click', function(e) {
    if (e.target === modalOverlay) {
      closeModal();
    }
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modalOverlay.style.display === 'flex') {
      closeModal();
    }
  });
});

//

document.addEventListener('DOMContentLoaded', function(element) {
  document.getElementById('mainImg').src = element.src;
  document.querySelectorAll('.modal-preview-img-wrapper').forEach(img => img.classList.remove('active'));
  element.classList.add('active');
})

//
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('back-to-catalog-block').addEventListener('click', function() {
    document.getElementById('modal-cooler-catalog').style.display = 'block';
    document.getElementById('modal-about-item').style.display = "none";
  });
})


// modal item btns

document.addEventListener('DOMContentLoaded', function() {

  const buyButton = document.getElementById('buy-item');
  const changeChoiceContainer = document.getElementById('change-choice');
  const deleteButton = document.querySelector('.btn-delete-modal-item');


  if (buyButton) {
    buyButton.addEventListener('click', function() {
      this.style.display = 'none';

      if (changeChoiceContainer) {
        changeChoiceContainer.style.display = 'flex';
      }
    });
  }

  if (deleteButton) {
    deleteButton.addEventListener('click', function() {
      if (buyButton) {
        buyButton.style.display = 'block';
      }

      if (changeChoiceContainer) {
        changeChoiceContainer.style.display = 'none';
      }
    });
  }

  const minusBtn = document.querySelector('.minus');
  const plusBtn = document.querySelector('.plus');
  const qtyInput = document.querySelector('.qty-input');

  if (minusBtn && qtyInput) {
    minusBtn.addEventListener('click', function() {
      let value = parseInt(qtyInput.value);
      if (value > 1) {
        qtyInput.value = value - 1;
      }
    });
  }

  if (plusBtn && qtyInput) {
    plusBtn.addEventListener('click', function() {
      let value = parseInt(qtyInput.value);
      qtyInput.value = value + 1;
    });
  }
});

// Modal scroll sticky header

document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("modal-about-item");
  const modalFrame = modal.querySelector(".modal-frame");
  const modalTitle = modal.querySelector(".modal-item-title");
  const modalPrice = modal.querySelector(".modal-content-price");
  const buyButton = modal.querySelector("#buy-item");

  const stickyHeaderWrapper = document.createElement("div");
  const stickyHeader = document.createElement("div");
  stickyHeader.className = "sticky-header";

  const clonedTitle = modalTitle.cloneNode(true);
  const clonedPrice = modalPrice.cloneNode(true);
  const clonedButton = buyButton.cloneNode(true);

  stickyHeader.appendChild(clonedTitle);
  stickyHeader.appendChild(clonedPrice);
  stickyHeader.appendChild(clonedButton);

  stickyHeaderWrapper.style.position = "absolute";
  stickyHeaderWrapper.style.left = 0;
  stickyHeaderWrapper.style.top = 0;
  stickyHeaderWrapper.appendChild(stickyHeader);

  modalFrame.appendChild(stickyHeaderWrapper);

  function updateStickyHeader() {
    const buttonRect = buyButton.getBoundingClientRect();
    const modalRect = modalFrame.getBoundingClientRect();

    const buttonTop = buttonRect.top - modalRect.top;
    const buttonBottom = buttonRect.bottom - modalRect.top;

    const isButtonVisible = buttonTop >= 0 && buttonBottom <= modalFrame.clientHeight;

    if (!isButtonVisible) {
      stickyHeader.classList.add("visible");
    } else {
      stickyHeader.classList.remove("visible");
    }
  }

  modalFrame.addEventListener("scroll", updateStickyHeader);
  updateStickyHeader();

  clonedButton.addEventListener("click", function () {
    buyButton.click();
  });
});


//
document.addEventListener("DOMContentLoaded", function() {
  const chooseBtn = document.getElementById('choose-more');
  const modalShop = document.getElementById('modal-cooler-catalog');
  const closeModalBtn = modalShop.querySelector('.close-modal-btn');
  const changeBtn = document.getElementById('change-btn')
  const body = document.getElementsByTagName('body')


  function openModal(e) {
    if (e) e.preventDefault();
    modalShop.style.display = 'flex';
    setTimeout(() => {
      modalShop.classList.add('active');
    }, 10);
    body.style.overflow = 'hidden';
  }

  function closeModal() {
    modalShop.classList.remove('active');
    setTimeout(() => {
      modalShop.style.display = 'none';
      body.style.overflow = '';

    }, 300);
  }

  chooseBtn.addEventListener('click', openModal);
  changeBtn.addEventListener('click', openModal);
  closeModalBtn.addEventListener('click', closeModal);

  modalShop.addEventListener('click', function(e) {
    if (e.target === modalShop) {
      closeModal();
    }
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modalShop.style.display === 'flex') {
      closeModal();
    }
  });
});

function getPayload() {
  const dropdownValue = document.getElementById("dropdownValue");
  const searchInput = document.querySelector('.modal-header .filter-search input[type="text"]');
  const toggleSale = document.getElementById("saleOnly");
  const sortDropdown = document.querySelector(".categories-dropdown");

  const filters = getSelectedFilters();
  const search = searchInput?.value.trim() || "";
  const saleOnly = toggleSale?.checked || false;
  const sort = sortDropdown?.value || 0;
  const perPage = Number(dropdownValue.textContent);

  return { search, filters, saleOnly, sort, perPage};
}

let newProductData = {};
let displayedProductData = {};

async function loadProductData(payload, categoryId) {
  if (!categoryId) {
    console.error("categoryId of product is not defined");
    return;
  }
  const queryParams = new URLSearchParams({
    saleOnly: payload?.saleOnly || false,
    sort: payload?.sort || 0,
    page: payload?.page || 1,
    perPage: payload?.perPage || 20,
    search: payload?.search || '',
    filters: payload?.filters ? JSON.stringify(payload.filters) : JSON.stringify({values: []}) ,
  });

  const url = `/config/products/${categoryId}?${queryParams.toString()}`;

  await fetch(url, {
    method: "GET",
    headers: { "Content-Type": "application/json" },
  })
      .then((response) => {
        if (!response.ok) {
          throw new Error(`Ошибка при загрузке продуктов для ${categoryId}: ${response.status}`);
        }
        return response.json();
      })
      .then((data) => {
        console.log("Данные от API:", data);
        if (!data || !Array.isArray(data.products)) {
          console.error("Invalid products dta:", data);
          newProductData = {};
          return;
        }
        data.products = data.products.map(product => ({
          code: product.sku,
          title: product.name,
          price: product.price,
          image: product.image || './assets/images/placeholder.png',
          installment: product.installment || 'N/A',
          tags: product.tags || [],
          oldPrice: product.oldPrice || null
        }));
        newProductData = data;
      })
      .catch((error) => {
        console.error("Ошибка при запросе к API:", error);
        newProductData = {};
      });
}

function renderProductView(products, currentPage, totalPages, view = null, clearPrevProducts = true) {
  renderProducts(products, view, clearPrevProducts);
  renderPagination(currentPage, totalPages);
}

function renderPagination(currentPage, totalPages) {
  const paginationContainer = document.getElementById("pagination");
  const paginationBlock = document.getElementById("pagination-container");
  paginationContainer.innerHTML = "";
  displayedProductData.currentPage = currentPage;
  displayedProductData.totalPages = totalPages;

  if (totalPages === 0) {
    paginationBlock.classList.add("hidden");

    return;
  } else {
    paginationBlock.classList.remove("hidden");
  }

  const createPageLink = (page, label = null, isActive = false, isDisabled = false) => {
    const a = document.createElement("a");
    a.href = "#";
    a.className = "page-link";
    if (isActive) a.classList.add("active");
    if (isDisabled) {
      a.classList.add("disabled");
      a.onclick = (e) => e.preventDefault();
    } else {
      a.setAttribute("onclick", `handlePaginationClick(${page})`);
    }
    a.dataset.page = page;
    a.textContent = label || page;
    return a;
  };

  // 👇 Логика страниц с многоточием
  const delta = 2;
  const range = [];
  const rangeWithDots = [];
  let l;

  for (let i = 1; i <= totalPages; i++) {
    if (i === 1 || i === totalPages || (i >= currentPage - delta && i <= currentPage + delta)) {
      range.push(i);
    }
  }

  for (let i of range) {
    if (l) {
      if (i - l === 2) {
        rangeWithDots.push(l + 1);
      } else if (i - l !== 1) {
        rangeWithDots.push("...");
      }
    }
    rangeWithDots.push(i);
    l = i;
  }

  for (let i of rangeWithDots) {
    if (i === "...") {
      const span = document.createElement("span");
      span.className = "page-link dots";
      span.textContent = "...";
      paginationContainer.appendChild(span);
    } else {
      const link = createPageLink(i, i, i === currentPage);
      paginationContainer.appendChild(link);
    }
  }

  // Стрелка вперёд
  const next = document.createElement("a");
  next.href = "#";
  next.className = "page-link arrow-next";
  if (currentPage === totalPages) {
    next.classList.add("disabled");
    next.onclick = (e) => e.preventDefault();
  } else {
    next.setAttribute("onclick", `handlePaginationClick(${currentPage + 1})`);
  }
  next.innerHTML = `<img src="./assets/images/icons/pagination-arrow.svg" alt="Вперёд" />`;
  paginationContainer.appendChild(next);
}

function handlePaginationClick(page) {
  const payload = getPayload();
  payload.page = page;

  loadProductData(payload, getCategoryId()).then(() => {
    renderProductView(newProductData.products, newProductData.currentPage, newProductData.totalPages)
  });
}

function addProductToComparison(productId) {
  fetch(`/config/products/${productId}`, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
  })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Ошибка при добавлении продукта");
        }
        return response.json();
      })
      .then((data) => {
        console.log("Продукт добавлен в сборку:", data);
        modal.style.display = "none";
        document.body.style.overflow = "";
      })
      .catch((error) => {
        console.error("Ошибка при добавлении:", error);
      });
}

function renderProducts(products, view = null, clearPrevProducts = true) {
  const currentView = view ?? getCurrentView();
  displayedProductData.products = products;
  const productContainerList = document.getElementById("list-view");
  const productContainerGrid = document.getElementById("grid-view");

  const productContainer = currentView === "list" ? productContainerList : productContainerGrid;
  const otherContainer = currentView === "list" ? productContainerGrid : productContainerList;

  if (clearPrevProducts) {
    productContainer.innerHTML = "";
    otherContainer.innerHTML = "";
  }

  if (!Array.isArray(products)) {
    console.error("Invalid requred data tupe:", products);
    productContainer.innerHTML = `<div class="products-container-no-match">Ошибка: некорректные данные продуктов</div>`;
    return;
  }

  if (products.length === 0) {
    productContainer.innerHTML = `<div class="products-container-no-match">Ничего не найдено</div>`;
    return;
  }

  products.forEach((product) => {
    const card = document.createElement("div");
    card.className = `product-card ${currentView}-style ${currentView === "list" ? "desktop-only" : ""}`;
    card.innerHTML = `
      <div class="product-card-img ${currentView}-style">
        <div class="card-img-main-product ${currentView}-style">
          <img src="${product.image || './assets/images/placeholder.png'}" alt="${product.title || 'Без названия'}">
        </div>
      </div>
      <div class="info">
        ${
        currentView === "grid"
            ? `<div class="product-title-rate">
                <h3 class="product-title ${currentView}-style">${product.title || 'Без названия'}</h3>
              </div>`
            : `<h3 class="product-title ${currentView}-style">${product.title || 'Без названия'}</h3>`
    }
        <div class="${currentView === "grid" ? "info-details" : "more-data"}">
          <div class="product-code ${currentView}-style">Код товара: ${product.code || 'N/A'}</div>
          <div class="details" id="details-btn">
            <a href="#">
              <span class="full-text">Смотреть подробнее</span>
              <span class="short-text">Подробнее</span>
              <img src="./assets/images/icons/view-detaitls.svg">
            </a>
          </div>
        </div>
        <div class="product-characterictic-tags">
          ${product.tags?.map((tag) => `<span>${tag}</span>`).join("") || ""}
        </div>
        ${
        currentView === "grid"
            ? `
              <div class="product-price">
                <div class="cont-price ${currentView}-style">
                  <p class="new-price ${currentView}-style">${product.price || 'N/A'}</p>
                  ${product.oldPrice ? `<p class="old-price ${currentView}-style">${product.oldPrice}</p>` : ""}
                </div>
                <div class="payment-option green ${currentView}-style desktop-only">от <span>${product.installment || 'N/A'}</span> руб/мес</div>
              </div>
              <div class="button-cont">
                <button class="buy-btn">Добавить</button>
              </div>`
            : ""
    }
      </div>
      ${
        currentView === "list"
            ? `
            <div class="cashflow-options ${currentView}-style">
              <div class="buy-options">
                <div class="cont-price ${currentView}-style">
                  <p class="new-price">${product.price || 'N/A'}</p>
                  ${product.oldPrice ? `<p class="old-price ${currentView}-style">${product.oldPrice}</p>` : ""}
                </div>
                <div class="payment-options">
                  <div class="payment-option green">от <span>${product.installment || 'N/A'}</span> руб/мес</div>
                  <div class="payment-desc">картой рассрочки <br> или в кредит</div>
                </div>
              </div>
              <div class="buttons-for-deal">
                <button class="buy-btn">Добавить</button>
              </div>
            </div>`
            : ""
    }
    `;
    productContainer.appendChild(card);
  });
}


function clearAllFilters() {
  const filtersContainer = document.getElementById("filter-container");
  const searchInput = document.querySelector('.modal-header .filter-search input[type="text"]');
  const toggleSale = document.getElementById("saleOnly");
  const sortDropdown = document.querySelector(".categories-dropdown");
  const categoryButtons = document.querySelectorAll(".categories button");
  const allCheckboxes = filtersContainer?.querySelectorAll('input[type="checkbox"]');
  const searchCheckboxes = document.querySelectorAll('#filter-container .filter-search .search');
  allCheckboxes?.forEach((cb) => (cb.checked = false));

  const sliders = filtersContainer?.querySelectorAll(".filter-section.price");
  sliders?.forEach((slider) => {
    const minInput = slider.querySelector(".input-min");
    const maxInput = slider.querySelector(".input-max");
    const rangeMin = slider.querySelector(".range-min");
    const rangeMax = slider.querySelector(".range-max");

    const min = parseFloat(rangeMin?.getAttribute("min")) || 0;
    const max = parseFloat(rangeMax?.getAttribute("max")) || 100;

    if (minInput) minInput.value = min;
    if (maxInput) maxInput.value = max;
    if (rangeMin) rangeMin.value = min;
    if (rangeMax) rangeMax.value = max;
  });

  searchCheckboxes?.forEach((input) => {
    input.value = ''
    filterOptionsInSearchCheckbox(input)
  })

  if (searchInput) searchInput.value = "";
  if (toggleSale) toggleSale.checked = false;
  if (sortDropdown && sortDropdown.options.length > 0) {
    sortDropdown.selectedIndex = 0;
  }
  categoryButtons.forEach((btn) => btn.classList.remove("active"));
}

function getSelectedFilters() {
  const filtersContainer = document.getElementById("filter-container");
  const filters = {values: [], minPrice: null, maxPrice: null};

  if (!filtersContainer) return filters;

  const allCheckboxes = filtersContainer.querySelectorAll('input[type="checkbox"]:checked');
  allCheckboxes.forEach((checkbox) => {
    const valueId = checkbox.dataset.valueId;
    filters.values.push(valueId);
  });

  const sliders = filtersContainer.querySelectorAll(".filter-section.price");
  sliders.forEach((slider) => {
    const filterKey = slider.querySelector("h3")?.dataset.key;
    const minInput = slider.querySelector(".input-min");
    const maxInput = slider.querySelector(".input-max");

    if (filterKey && minInput && maxInput) {
      const min = parseFloat(minInput.value);
      const max = parseFloat(maxInput.value);
      if (filterKey === 'price') {
        filters.maxPrice = max;
        filters.minPrice = min;
      }
    }
  });

  return filters;
}

function getCategoryId() {
  const modalTitle = document.getElementById("modal-title");

  return modalTitle.dataset.categoryId
}

function handlePerPageChange(value) {
  const dropdownValue = document.getElementById("dropdownValue");
  const dropdownList = document.getElementById("dropdownList");

  dropdownValue.textContent = value;
  dropdownList.classList.add("hidden");

  const payload = getPayload();
  payload.page = 1;
  loadProductData(payload, getCategoryId()).then(() => {
    renderProductView(newProductData.products, newProductData.currentPage, newProductData.totalPages)
  });

}

function handleViewSwitch(button) {
  renderProducts(displayedProductData.products, button.dataset.view);
}

function getCurrentView() {
  const activeView = document.querySelector('.view-btn.active')?.dataset.view;

  return activeView ?? 'list';
}

function getCheckboxContent(data) {
  let options = data.values.map(
      (item) => `<label><input type="checkbox" data-value-id="${item.id}"> ${item.name} <span>(${item.qnt})</span></label>`
  );
  return `
        <div class="filter-section dropdown">
          <div class="filter-title dropdown-header">
            <h3>${data.title}</h3>
            <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
          </div>
          <div class="dropdown-content">
            <div class="options">
              ${options.join("\n")}
            </div>
          </div>
        </div>`;
}

function getSliderContent(data) {
  return `
        <div class="filter-section price dropdown">
          <div class="filter-title dropdown-header">
            <h3 data-key="${data.key}">${data.title}</h3>
            <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
          </div>
          <div class="dropdown-content">
            <div class="filter-price-input">
              <input type="number" class="input-min" step="${data.values.step}" value="${data.values.currentMin || data.values.min}">
              <input type="number" class="input-max" step="${data.values.step}" value="${data.values.currentMax || data.values.max}">
            </div>
            <div class="price-slider">
              <div class="progress"></div>
            </div>
            <div class="range-input">
              <input type="range" class="range-min" min="${data.values.min}" max="${data.values.max}" value="${data.values.currentMin || data.values.min}" step="${data.values.step}">
              <input type="range" class="range-max" min="${data.values.min}" max="${data.values.max}" value="${data.values.currentMax || data.values.max}" step="${data.values.step}">
            </div>
          </div>
        </div>`;
}

function getSearchCheckboxContent(data) {
  let options = data.values.map(
      (item) => `<label><input type="checkbox" data-value-id="${item.id}"> ${item.name} <span>(${item.qnt})</span></label>`
  );
  return `
        <div class="filter-section dropdown">
          <div class="filter-title dropdown-header">
            <h3>${data.title}</h3>
            <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
          </div>
          <div class="dropdown-content">
            <div class="filter-search inner-search">
              <input type="text" class="search" placeholder="Поиск" oninput="filterOptionsInSearchCheckbox(this)"/>
              <img src="./assets/images/icons/search.svg" class="search-icon" />
            </div>
            <div class="options">
              ${options.join("\n")}
            </div>
          </div>
        </div>`;
}

function renderFilters(filters) {
  const filtersContainer = document.getElementById("filter-container");
  let html = [];
  if (filters) {
    filters.forEach((filter) => {
      switch (filter.type) {
        case "slider":
          html.push(getSliderContent(filter));
          break;
        case "checkbox":
          html.push(getCheckboxContent(filter));
          break;
        case "SearchCheckbox":
          html.push(getSearchCheckboxContent(filter));
          break;
      }
    });
  }
  filtersContainer.innerHTML = `
          ${html.join("\n")}
          <div class="filter-buttons">
            <button class="clear-btn">Очистить</button>
            <button class="show-btn">Показать <span>0</span></button>
          </div>
        `;
}

async function loadFilters() {
  const categoryId = getCategoryId();
  const url = `/config/category/${categoryId}/filters`;

  fetch(url, {
    method: "GET",
    headers: { "Content-Type": "application/json" },
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`Ошибка при загрузке продуктов для ${type}: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      console.log("Данные от API:", data);
      if (!data) {
        console.error("Invalid products dta:", data);
        renderFilters([]);
        return;
      }
      renderFilters(data)
    })
    .catch((error) => {
      console.error("Ошибка при запросе к API:", error);
      renderFilters([])
    });
}

function renderShowButton(count) {
  const showBtnSpan = document.querySelector('.show-btn span');

  if (showBtnSpan) {
    showBtnSpan.textContent = count;
  }
}

function filterOptionsInSearchCheckbox(inputElement) {
  const dropdown = inputElement.closest('.dropdown-content');
  const labels = dropdown.querySelectorAll('.options label');
  const query = inputElement.value.trim().toLowerCase();

  labels.forEach(label => {
    const text = label.textContent.toLowerCase();
    label.style.display = text.includes(query) ? '' : 'none';
  });
}