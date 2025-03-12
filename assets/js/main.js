let animateBlocks = (animationClass, animation) => {
    const elements = document.querySelectorAll(animationClass);

    function checkVisibility() {
        elements.forEach((element) => {
            const rect = element.getBoundingClientRect();
            const windowHeight =
                window.innerHeight || document.documentElement.clientHeight;

            if (rect.top < windowHeight * 0.8) {
                element.classList.remove(animationClass);
                element.style.animation = animation;
            }
        });
    }

    window.addEventListener("scroll", checkVisibility);
    window.addEventListener("resize", checkVisibility);
    checkVisibility();
};

let customNavbar = () => {
    let navButton = document.querySelector("nav button.mobile-nav"),
        navLinks = document.querySelectorAll("nav .nav-container .link"),
        navigation = document.querySelector("nav");

    let closeNav = () => {
        navigation.classList.remove("opened");
    };

    navButton.addEventListener("click", () => {
        navigation.classList.toggle("opened");
    });

    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            closeNav();
        });
    });

    document.addEventListener("click", (e) => {
        if (e.target == navigation) {
            closeNav();
        }
    });
};

let customScroll = () => {
    let dealsCarousel = document.querySelector("#deals .deals-container"),
        customScroll = document.querySelector("#deals .scrollable-container"),
        newBlock = document.createElement("div");

    customScroll.append(newBlock);
    newBlock.style.width = dealsCarousel.scrollWidth + "px";
    newBlock.style.height = 0 + "px";

    customScroll.addEventListener("scroll", () => {
        dealsCarousel.scroll({
            left: customScroll.scrollLeft,
        });
    });

    let offset = document.querySelector("#deals h2").offsetLeft;

    dealsCarousel.style.paddingLeft = offset + "px";
    dealsCarousel.style.paddingRight = offset + "px";
};

let forms = () => {
    document.querySelectorAll("#email-form").forEach((form) => {
        form.addEventListener("submit", function (e) {
            e.preventDefault();
        });
    });
};

let plan = () => {
    document.querySelectorAll("#prices .plan-type button").forEach((btn) => {
        btn.addEventListener("click", function () {
            document
                .querySelector("#prices .plan-type")
                .classList.toggle("right");
            document
                .querySelector("#prices .plan-type button.active")
                .classList.remove("active");
            this.classList.add("active");
        });
    });

    document
        .querySelectorAll("#prices .plan-price select")
        .forEach((select) => {
            select.addEventListener("change", function (e) {
                let parent = e.target.closest(".plan-content"),
                    data = parent.querySelector(".plan-data"),
                    value = e.target.value,
                    price = 0,
                    discount = 0;

                switch (value) {
                    case "year":
                        price = data.dataset.year;
                        discount = data.dataset.dyear;
                        break;
                    case "month":
                        price = data.dataset.month;
                        discount = data.dataset.dmonth;
                        break;
                    case "week":
                        price = data.dataset.week;
                        discount = data.dataset.dweek;
                        break;
                }

                parent.querySelector("span.price").textContent = `$${price}`;
                parent.querySelector("span.discount").textContent =
                    discount == "0" ? "" : `-${discount}%`;
            });
        });
};

let questions = () => {
    document.querySelectorAll("#faq .faq-item").forEach((item) => {
        item.addEventListener("click", function () {
            this.classList.toggle("active");
        });
    });
};

document.addEventListener("DOMContentLoaded", () => {
    animateBlocks(
        ".slide-top",
        "slide-top 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both"
    );
    customNavbar();
    customScroll();
    forms();
    plan();
    questions();
});
