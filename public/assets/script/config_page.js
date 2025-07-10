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
    const componentChooseItem = document.querySelectorAll('.component-choose-item');
    const componentHideBtn = document.querySelectorAll('.component-hide-btn');
    const components = document.querySelectorAll('.component');

    if (activeBtn.dataset.value === "list") {
      componentChooseItem.forEach((e) => {
        e.classList.add("hidden")
      })
      componentHideBtn.forEach((e) => {
        e.classList.remove("hidden")
      })
      components.forEach((e) => {
        e.classList.remove('hidden')
      })
    } else if (activeBtn.dataset.value === "selected") {
      componentChooseItem.forEach((e) => {
        const category = e.closest('.category');

        const components = category.querySelectorAll('.component');
        const emptyComponents = Array.from(components).filter(el => !el.classList.contains("component-expanded"));
        if (emptyComponents.length !== 0) {
          e.classList.remove("hidden")
        }
      })
      componentHideBtn.forEach((e) => {
        e.classList.add("hidden")
      })
      components.forEach((e) => {
        if (!e.classList.contains('component-expanded')) {
          e.classList.add('hidden')
        }
      })
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

function getSelectedSection() {
  return document.querySelector('.toggle-btn .toggle-option.active')?.dataset.value ?? 'list';
}

// Modals for pc parts
document.addEventListener("DOMContentLoaded", () => {
  const modal = getCatalogModalElement();
  const filtersContainer = document.getElementById("filter-container");
  const searchInput = document.querySelector('.modal-header .filter-search input[type="text"]');
  const toggleSale = document.getElementById("saleOnly");
  const sortDropdown = document.querySelector(".categories-dropdown");
  const closeBtn = document.querySelector(".close-modal-btn");
  const categoryButtons = document.querySelectorAll(".categories button");
  const dropdownToggle = document.getElementById("dropdownToggle");
  const dropdownList = document.getElementById("dropdownList");
  const showMoreButton = document.getElementById("show-more-btn");

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
let chooseProductMode = 'add';
let editProductCard = null;
let currentAssembly = [];

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

  return await fetch(url, {
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
          oldPrice: product.discount_price || null
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

function addProductToComparison(productCode, productTitle, productPrice, productImage, productOldPrice) {
  const modal = getCatalogModalElement();
  const product = {
    title: productTitle,
    code: productCode,
    price: productPrice,
    image: productImage,
    categoryId: getCategoryId(),
    categoryName: getCategoryName(),
    oldPrice: productOldPrice,
  };
  modal.style.display = "none";
  document.body.style.overflow = "";
  renderAddedProductToComponentList(product)
}

function getCatalogModalElement() {
  return document.getElementById("modal-catalog");
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
                <button class="buy-btn" onclick="addProductToComparison('${product.code}', '${product.title}', ${product.price}, '${product.image}', ${product.oldPrice})">Добавить</button>
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
                  <button class="buy-btn" onclick="addProductToComparison('${product.code}', '${product.title}', ${product.price}, '${product.image}', ${product.oldPrice})">Добавить</button>
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
  const modal = getCatalogModalElement()
  const modalTitle = modal.querySelector('.modal-title')

  return modalTitle.dataset.categoryId
}

function getCategoryName() {
  const modal = getCatalogModalElement()
  const modalTitle = modal.querySelector('.modal-title')

  return modalTitle.textContent
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

  filtersContainer.querySelectorAll('.filter-section').forEach((filterSection) => filterSection.remove())
  filtersContainer.innerHTML = html.join("\n") + filtersContainer.innerHTML;
}

async function loadFilters() {
  const categoryId = getCategoryId();
  const url = `/config/category/${categoryId}/filters`;

  return await fetch(url, {
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

function hasAddedProducts(component) {
  return countAddedProducts(component) >= 1;
}

function countAddedProducts(component) {
  return component.querySelectorAll('.component-list-card, .component-choosen').length;
}

function renderAddedProductToComponentList(product) {
  const categoryId = product.categoryId;
  const component = document.querySelector(`.component[data-category-id="${categoryId}"]`);

  if (!component) return;


  if (chooseProductMode === 'edit') {
    const newProductCard = countAddedProducts(component) > 1
        ? createProductCard(product)
        : createProductChosenCard(product);
    replaceAddedProduct(product, newProductCard);

    return;
  }

  setProductToAssembly(product)

  if (countAddedProducts(component) === 0) {
    const newProductChosenCard = createProductChosenCard(product);
    const cardContainer = createProductCardsContainer(newProductChosenCard);
    hideComponentInfo(component)
    component.appendChild(cardContainer);
    component.classList.add("component-expanded");
    if (getSelectedSection() === 'selected') {
      component.classList.remove('hidden');
    }
    addComponentToIllustrativeBlock(categoryId);

    return;
  }

  const cardContainer = component.querySelector('.component-cards-container');

  if (countAddedProducts(component) === 1) {
    const chosenProductCard = getChosenProductCard(component);
    const chosenProduct = JSON.parse(chosenProductCard.dataset.product);
    chosenProductCard.remove();
    cardContainer.appendChild(createProductCard(chosenProduct));
    const scrollBtnContainer = createComponentScrollButtons(cardContainer);
    const actionBtnContainer = createComponentActionButtons(component, product);

    component.appendChild(cardContainer);
    component.appendChild(scrollBtnContainer);
    component.appendChild(actionBtnContainer);

    setTimeout(() => updateComponentScrollButtons(cardContainer, scrollBtnContainer), 0);
  }

  const newProductCard = createProductCard(product);
  cardContainer.appendChild(newProductCard);
  const scrollBtnContainer = cardContainer.nextSibling;
  updateComponentScrollButtons(cardContainer, scrollBtnContainer);
}

function hideComponentInfo(component) {
  component.querySelectorAll('div, button').forEach((el) => el.classList.add('hidden'))
}

function viewComponentInfo(component) {
  component.querySelectorAll('div, button').forEach((el) => el.classList.remove('hidden'))
}

function getChosenProductCard(component) {
  return component.querySelector('.component-choosen')
}

function createProductCardsContainer(newProductCard) {
  const container = document.createElement("div");
  container.classList.add("component-cards-container");

  container.appendChild(newProductCard);

  container.addEventListener('scroll', () => {
    const scrollBtnContainer = container.nextSibling;
    updateComponentScrollButtons(container, scrollBtnContainer);
  });

  return container;
}

function createProductCard(product) {
  const card = document.createElement("div");
  card.classList.add("component-list-card");
  card.setAttribute('data-product-code', product.code);
  const categoryId = product.categoryId;
  const categoryName = product.categoryName;
  const [intStr, decStr] = product.price.toFixed(2).split('.');
  card.dataset.product = JSON.stringify(product);

  card.innerHTML = `
    <div class="component-list-img">
        <img src="${product.image || './assets/images/placeholder.png'}" alt="${product.title || 'Без названия'}">
    </div>
    <div class="component-list-info">
      <div>
        <span>${categoryName}</span>
        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory" />
      </div>
      <div>${product.title}</div>
      <div class="component-list-price">${intStr}. <span>${decStr} руб</span></div>
    </div>
    <div class="component-list-btns">
      <button class="component-list-btn-change" onclick="handleAddedProductChange(this, ${categoryId}, '${categoryName}')">
        <img src="./assets/images/icons/change.svg">
        <span>заменить</span>
      </button>
      <button class="component-list-btn-delete" onclick="handleAddedProductDelete(this)">
        <img src="./assets/images/icons/delete.svg">
        <span>удалить</span>
      </button>
    </div>
  `;

  return card;
}

function createProductChosenCard(product) {
  const card = document.createElement('div');
  card.dataset.product = JSON.stringify(product);
  card.classList.add("component-choosen");
  card.setAttribute('data-product-code', product.code);
  const categoryName = product.categoryName;
  const [intPriceStr, decPriceStr] = product.price.toFixed(2).split('.');
  let oldPriceElem = '';
  if (product.oldPrice) {
    const [intOldPriceStr, decOldPriceStr] = product.oldPrice.toFixed(2).split('.');
    oldPriceElem = product.oldPrice ? `<div class="old-price">${intOldPriceStr}.<span>${decOldPriceStr} руб</span></div> ` : '';
  }
  const categoryId = product.categoryId;

  card.innerHTML = `
    <div class="component-choosen-part info-choosen">
        <div class="choosen-img">
            <img src="${product.image || './assets/images/placeholder.png'}" alt="${product.title || 'Без названия'}">
        </div>
        <div class="choosen-info">
            <div>
                <span>${categoryName}</span>
                <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory" />
            </div>
            <div>${product.title}</div>
            <div>Код товара: ${product.code}</div>
        </div>
    </div>
    <div class="component-choosen-part categories-tags">
<!--        <span> 4xDDR5</span>-->
<!--        <span>Intel B760</span>-->
    </div>
    <div class="component-choosen-part choosen-price">
        <div class="new-price">${intPriceStr}.<span>${decPriceStr} руб</span></div>
        ${oldPriceElem}
    </div>
    <div class="component-choosen-part choosen-btns">
        <button class="component-list-btn-change" id="change-btn" onclick="handleAddedProductChange(this, ${categoryId}, '${categoryName}')">
            <img src="./assets/images/icons/change.svg">
            <span>заменить</span>
        </button>
        <button class="component-list-btn-delete" onclick="handleAddedProductDelete(this)">
            <img src="./assets/images/icons/delete.svg">
            <span>удалить</span>
        </button>
    </div>
  `;


  return card;
}

function createComponentScrollButtons(cardContainer) {
  const container = document.createElement("div");
  container.classList.add("scroll-btn-container");

  const scrollLeftBtn = document.createElement("button");
  scrollLeftBtn.classList.add("scroll-btn", "disabled");
  scrollLeftBtn.innerHTML = `<img src="./assets/images/icons/arrow-left.svg" alt="left">`;
  scrollLeftBtn.onclick = () => scrollAddedComponentsContainer(cardContainer, -280, container);

  const scrollRightBtn = document.createElement("button");
  scrollRightBtn.classList.add("scroll-btn");
  scrollRightBtn.innerHTML = `<img src="./assets/images/icons/arrow-right.svg" alt="right">`;
  scrollRightBtn.onclick = () => scrollAddedComponentsContainer(cardContainer, 280, container);

  container.appendChild(scrollRightBtn);
  container.appendChild(scrollLeftBtn);

  return container;
}

function scrollAddedComponentsContainer(container, step, scrollBtnContainer) {
  const maxScroll = container.scrollWidth - container.clientWidth;
  let newScroll = container.scrollLeft + step;
  newScroll = Math.max(0, Math.min(newScroll, maxScroll));

  container.scrollTo({ left: newScroll, behavior: "smooth" });
  setTimeout(() => updateComponentScrollButtons(container, scrollBtnContainer), 300);
}

function updateComponentScrollButtons(container, btnContainer) {
  const scrollLeftBtn = btnContainer.querySelector(".scroll-btn:nth-child(2)");
  const scrollRightBtn = btnContainer.querySelector(".scroll-btn:nth-child(1)");

  const maxScroll = container.scrollWidth - container.clientWidth;
  const scrollLeft = container.scrollLeft;

  scrollLeftBtn.classList.toggle("disabled", scrollLeft <= 0);
  scrollRightBtn.classList.toggle("disabled", scrollLeft >= maxScroll);
}

function createComponentActionButtons(component, product) {
  const container = document.createElement("div");

  container.classList.add("action-btn-container");

  const addBtn = document.createElement("button");
  const categoryId = product.categoryId;
  const categoryName = product.categoryName;
  addBtn.classList.add("action-btn", "add-btn");
  addBtn.innerHTML = `<img src="./assets/images/icons/add.svg" alt="add"><span class="btn-label">добавить</span>`;
  addBtn.onclick = () => chooseProductForAssembly(categoryId, categoryName);

  const removeBtn = document.createElement("button");
  removeBtn.classList.add("action-btn", "remove-btn");
  removeBtn.innerHTML = `<img src="./assets/images/icons/delete.svg" alt="remove"><span class="btn-label">удалить</span>`;
  removeBtn.onclick = () => resetComponentSection(component);

  container.appendChild(addBtn);
  container.appendChild(removeBtn);

  return container;
}

function handleAddedProductDelete(element) {
  const component = element.closest(".component");
  const addedComponent = element.closest('.component-list-card, .component-choosen');
  const oldProductCode = addedComponent.dataset.productCode

  addedComponent.remove();
  console.log(countAddedProducts(component));
  if (countAddedProducts(component) === 1) {
    const productCard = component.querySelector('.component-list-card');
    const newProductCard = createProductChosenCard(JSON.parse(productCard.dataset.product));
    productCard.remove();
    component.querySelector('.scroll-btn-container')?.remove()
    component.querySelector('.action-btn-container')?.remove()
    component.querySelector('.component-cards-container').append(newProductCard);
  }

  if (!hasAddedProducts(component)) {
    resetComponentSection(component);
  } else {
    deleteProductFromAssembly(component.dataset.categoryId, oldProductCode);
  }
}

function resetComponentSection(component) {
  viewComponentInfo(component);
  component.querySelector('.component-cards-container')?.remove()
  component.querySelector('.scroll-btn-container')?.remove()
  component.querySelector('.action-btn-container')?.remove()
  component.classList.remove("component-expanded");
  removeComponentToIllustrativeBlock(component.dataset.categoryId);
  deleteProductFromAssembly(component.dataset.categoryId);

  if (getSelectedSection() === 'selected') {
    component.classList.add('hidden');
  }
}

function chooseProductForAssembly(categoryId, categoryName) {
  const modal = getCatalogModalElement()
  const modalTitle = modal.querySelector('.modal-title')

  modalTitle.textContent = categoryName;
  modalTitle.dataset.categoryId = categoryId;
  chooseProductMode = 'add'

  Promise.all([
    loadFilters(),
    loadProductData({}, getCategoryId())
  ]).then(() => {
    renderShowButton(newProductData.count)
    renderProductView(newProductData.products, newProductData.currentPage, newProductData.totalPages);
  }).then(() => {
    modal.style.display = "flex";
    document.body.style.overflow = "hidden";
  })
}

function handleAddedProductChange(button, categoryId, categoryName) {
  chooseProductForAssembly(categoryId, categoryName);
  chooseProductMode = 'edit';
  editProductCard = button.closest('.component-list-card, .component-choosen');
}

function addComponentToIllustrativeBlock(categoryId) {
  const component = document.querySelector(`.illustative-block [data-category-id="${categoryId}"]`);

  if (!component) {
    return;
  }

  component.querySelector('.added-part').classList.remove('hidden')
}

function removeComponentToIllustrativeBlock(categoryId) {
  const component = document.querySelector(`.illustative-block [data-category-id="${categoryId}"]`);

  if (!component) {
    return;
  }

  component.querySelector('.added-part').classList.add('hidden')
}

function handleClearFilters() {
  clearAllFilters();
  loadProductData(getPayload(), getCategoryId()).then(() => {
    renderShowButton(newProductData.count)
  })
}

function handleShowProductsByFilters() {
  renderProductView(newProductData.products, newProductData.currentPage, newProductData.totalPages)
}

function handleClearComponentList() {
  document.querySelectorAll('#component-list-content .component').forEach((component) => {
      if (hasAddedProducts(component)) {
        resetComponentSection(component);
      }
  })
}

function replaceAddedProduct(newProduct, newProductCard) {
  const oldProductCode = editProductCard.dataset.productCode;
  deleteProductFromAssembly(newProduct.categoryId, oldProductCode);
  setProductToAssembly(newProduct);
  editProductCard.innerHTML = newProductCard.innerHTML;
  editProductCard.dataset.productCode = newProduct.code;
  editProductCard.dataset.product = JSON.stringify(newProduct);
}

function setProductToAssembly(product) {
  currentAssembly.push(product);
  saveAssembly(currentAssembly);
}

function deleteProductFromAssembly(categoryId, productCode = null) {

  if (productCode) {
    const index = currentAssembly.findIndex(product => product.code === productCode);
    if (index !== -1) {
      currentAssembly.splice(index, 1);
    }
  } else {
    currentAssembly = currentAssembly.filter((product) => product.categoryId != categoryId)
  }

  saveAssembly(currentAssembly)
}

function saveAssembly(assembly) {
  fetch(`/config/session`, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(assembly)
  })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Ошибка при добавлении продукта");
        }
        updateAssemblyPrice()
      })
      .catch((error) => {
        console.error("Ошибка при добавлении:", error);
      });
}

async function loadAssembly() {
  return fetch(`/config/session`, {
    method: "GET",
    headers: { "Content-Type": "application/json" }
  })

}

document.addEventListener("DOMContentLoaded", function() {
  loadAssembly()
    .then((response) => {
      if (!response.ok) {
        throw new Error("Ошибка при добавлении продукта");
      }
      return response.json();
    })
      .then((data) => {
      if (Array.isArray(data)) {
        data.forEach((product) => {
          renderAddedProductToComponentList(product)
        })
      }
    })
    .catch((error) => {
      console.error("Ошибка при добавлении:", error);
    });
})

function updateAssemblyPrice() {
  const totalPrice = currentAssembly.reduce((sum, product) => sum + product.price, 0);
  const buyBtn = document.querySelector('.illustative-block_btns .price');

  const [intStr, decStr] = totalPrice.toFixed(2).split('.');

  buyBtn.innerHTML = `${intStr}.<span class="price-cents">${decStr} руб</span>`;
}

function handleChooseMoreButton(btn) {
  const category = btn.closest('.category');
  const componentToChoose = category.querySelector('.component:not(.component-expanded)');

  if (!componentToChoose) return;
  chooseProductForAssembly(componentToChoose.dataset.categoryId, componentToChoose.dataset.categoryName);
}
