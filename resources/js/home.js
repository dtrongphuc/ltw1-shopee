// Products sort
const btnSortPopular = document.querySelector("#sort-popular");
const btnSortNew = document.querySelector("#sort-new");
const btnSortSelling = document.querySelector("#sort-selling");

// Reset active sort class
const removeActiveSorting = () => {
    let parent = document.querySelector(".main-filter__left--list");
    if (!!parent) {
        parent
            .querySelector(".filter-list__item--active")
            ?.classList.remove("filter-list__item--active");
    }
};

btnSortPopular?.addEventListener("click", () => {
    removeActiveSorting();
    btnSortPopular.classList.add("filter-list__item--active");
});

btnSortNew?.addEventListener("click", () => {
    removeActiveSorting();
    btnSortNew.classList.add("filter-list__item--active");
});

btnSortSelling?.addEventListener("click", () => {
    removeActiveSorting();
    btnSortSelling.classList.add("filter-list__item--active");
});

// Category
document.querySelectorAll(".category-item")?.forEach(category => {
    category.addEventListener("click", () => {
        document
            .querySelector(".category-item--active")
            ?.classList.remove("category-item--active");
        category.classList.add("category-item--active");
    });
});
