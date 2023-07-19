"use strict"

/*--
    Header Top High
-----------------------------------*/
const headerTopHigh = (selector) => {
    const headerTop = document.querySelector(selector)

    if (headerTop) {
        const headerTopHeight = headerTop.clientHeight
        const headerHeight = document.querySelector("main")
        headerHeight.style.marginTop = headerTopHeight + "px"
    }
}

headerTopHigh(".header-height")

/*--
    Header Sticky
-----------------------------------*/
const headerSticky = (selector) => {
    const header = document.querySelector(selector)

    if (header) {
        const headerLogo = header.querySelector(".change-logo img")
        const headerMenu = header.querySelector(".menu-items-list")

        console.log(headerMenu)

        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset

            if (currentScroll > 150) {
                header.classList.add("is-sticky")
                headerLogo.src = "./assets/images/logo.svg"
            } else {
                header.classList.remove("is-sticky")
                headerLogo.src = "./assets/images/logo-white.svg"
            }
        })
    }
}

headerSticky(".header__main")

// menu-items-list menu-items-list--dark

/*--
    Mobile Menu 

    Global Functions
    - Get Sibling
    - Slide Up
    - Slide Down
    - Slide Toggle
-----------------------------------*/

/* Get Sibling */
const getSiblings = (elem) => {
    const siblings = []
    let sibling = elem.parentNode.firstChild

    while (sibling) {
        if (sibling.nodeType === 1 && sibling !== elem) {
            siblings.push(sibling)
        }
        sibling = sibling.nextSibling
    }
    return siblings
}

/* Slide Up */
const slideUp = (target, time) => {
    const duration = time ? time : 500
    target.style.transitionProperty = "height, margin, padding"
    target.style.transitionDuration = duration + "ms"
    target.style.boxSizing = "border-box"
    target.style.height = target.offsetHeight + "px"
    target.offsetHeight
    target.style.overflow = "hidden"
    target.style.height = 0
    window.setTimeout(() => {
        target.style.display = "none"
        target.style.removeProperty("height")
        target.style.removeProperty("overflow")
        target.style.removeProperty("transition-duration")
        target.style.removeProperty("transition-property")
    }, duration)
}

/* Slide Down */
const slideDown = (target, time) => {
    const duration = time ? time : 500
    target.style.removeProperty("display")
    let display = window.getComputedStyle(target).display
    if (display === "none") display = "block"
    target.style.display = display
    const height = target.offsetHeight
    target.style.overflow = "hidden"
    target.style.height = 0
    target.offsetHeight
    target.style.boxSizing = "border-box"
    target.style.transitionProperty = "height, margin, padding"
    target.style.transitionDuration = duration + "ms"
    target.style.height = height + "px"
    window.setTimeout(() => {
        target.style.removeProperty("height")
        target.style.removeProperty("overflow")
        target.style.removeProperty("transition-duration")
        target.style.removeProperty("transition-property")
    }, duration)
}

/* Slide Toggle */
const slideToggle = (target, time) => {
    const duration = time ? time : 500
    if (window.getComputedStyle(target).display === "none") {
        return slideDown(target, duration)
    } else {
        return slideUp(target, duration)
    }
}

/* Offcanvas/Collapseable Menu */
const offCanvasMenu = (selector) => {
    const offCanvasNav = document.querySelector(selector)

    offCanvasNav.querySelectorAll(".menu-expand").forEach((item) => {
        item.addEventListener("click", (e) => {
            e.preventDefault()
            const parent = item.parentElement.parentElement

            if (parent.classList.contains("active")) {
                parent.classList.remove("active")

                parent
                    .querySelectorAll(".sub-menu, .mega-menu, .children")
                    .forEach((subMenu) => {
                        subMenu.parentElement.classList.remove("active")
                        slideUp(subMenu)
                    })
            } else {
                parent.classList.add("active")
                slideDown(item.parentElement.nextElementSibling)

                getSiblings(parent).forEach((item) => {
                    item.classList.remove("active")

                    item.querySelectorAll(
                        ".sub-menu, .mega-menu, .children"
                    ).forEach((subMenu) => {
                        subMenu.parentElement.classList.remove("active")
                        slideUp(subMenu)
                    })
                })
            }
        })
    })
}

offCanvasMenu(".navbar-mobile-menu, .slidedown-menu__menu")

/*--
    Slide Down Menu
-----------------------------------*/

const slideDownMenu = (selector) => {
    const slideDownMenuSelector = document.querySelector(selector)
    const slideDownMenuOpen = document.querySelector(".slide-down-open")
    const slideDownMenuClose = document.querySelector(".slide-down-close")

    if (slideDownMenuSelector) {
        slideDownMenuOpen.addEventListener("click", () => {
            slideDownMenuSelector.classList.add("open")
        })
        slideDownMenuClose.addEventListener("click", () => {
            slideDownMenuSelector.classList.remove("open")
        })
    }
}

slideDownMenu(".slidedown-menu")

/*--
    Main Slider
-----------------------------------*/
var swiper = new Swiper(".slider-active .swiper", {
    parallax: true,
    effect: "creative",
    creativeEffect: {
        prev: {
            shadow: true,
            translate: ["-20%", 0, -1],
        },
        next: {
            translate: ["100%", 0, 0],
        },
    },
    loop: true,
    speed: 1200,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".slider-active .swiper-button-next",
        prevEl: ".slider-active .swiper-button-prev",
    },
})

/*--
    Home 6 Slider Active
-----------------------------------*/
var swiper = new Swiper(".home-6-slider-active .swiper", {
    loop: true,
    speed: 1200,

    // Navigation arrows
    navigation: {
        nextEl: ".home-6-slider-active .swiper-button-next",
        prevEl: ".home-6-slider-active .swiper-button-prev",
    },
})

/*--
    Home 7 Slider Active
-----------------------------------*/
var swiper = new Swiper(".home-7-slider-active .swiper", {
    loop: true,
    speed: 1200,

    // Navigation arrows
    navigation: {
        nextEl: ".home-7-slider-active .swiper-button-next",
        prevEl: ".home-7-slider-active .swiper-button-prev",
    },
})

/*--
    Categories Slider
-----------------------------------*/
var catSwiper = new Swiper(".categories-active .swiper", {
    loop: true,
    slideToClickedSlide: true,
    slidesPerView: 2,
    spaceBetween: 0,
    slideVisibleClass: "swiper-slide-visible",

    // Navigation arrows
    navigation: {
        nextEl: ".categories-active .swiper-button-next",
        prevEl: ".categories-active .swiper-button-prev",
    },

    // Breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1600: {
            slidesPerView: 2,
            spaceBetween: 60,
        },
    },
})

/*--
    Product Filter Dropdown text
-----------------------------------*/
const dropText = document.querySelectorAll(
    ".product-filter__dropdown .dropdown-menu li button"
)
const label = document.querySelector(".product-filter__dropdown--label span")

dropText.forEach((dropValue) => {
    let value = ""
    dropValue.addEventListener("click", (e) => {
        value = dropValue.getAttribute("data-value")
        label.textContent = value
    })
})

/*--
    Bootstrap Tooltip
-----------------------------------*/
const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-tooltip="tooltip"]'
)
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
)

/*--
    Product Masonry
-----------------------------------*/
const productMasonry = (selector) => {
    const grid = document.querySelector(selector)

    if (grid) {
        window.addEventListener("load", () => {
            const msnry = new Masonry(grid, {
                // options...
                itemSelector: ".grid-item",
                columnWidth: 1,
            })
        })
    }
}

productMasonry(".grid")

/*--
    Trending Masonry
-----------------------------------*/
const trendingMasonry = (selector) => {
    const grid2 = document.querySelector(selector)

    if (grid2) {
        window.addEventListener("load", () => {
            const msnry = new Masonry(grid2, {
                // options...
                itemSelector: ".grid-item",
                columnWidth: 1,
            })
        })
    }
}

trendingMasonry(".grid-2")

/*--
    Category Masonry
-----------------------------------*/
const CategoryMasonry = (selector) => {
    const grid = document.querySelector(selector)

    if (grid) {
        window.addEventListener("load", () => {
            const msnry = new Masonry(grid, {
                // options...
                itemSelector: ".grid-item",
                columnWidth: 1,
            })
        })
    }
}

CategoryMasonry(".grid-3")

/*--
    Product on sale
-----------------------------------*/
var swiper = new Swiper(
    ".product-on-sale-active .swiper, .product-kids-active .swiper",
    {
        // Navigation arrows
        navigation: {
            nextEl: ".product-on-sale-active .swiper-button-next, .product-kids-active .swiper-button-next",
            prevEl: ".product-on-sale-active .swiper-button-prev, .product-kids-active .swiper-button-prev",
        },

        // Breakpoints
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 16,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 16,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 16,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 16,
            },
        },
    }
)

/*--
    Product Marker Pointer
-----------------------------------*/
const productMarker = (selector) => {
    const tooltips = document.querySelectorAll(".product-marker-pointer")
    const fullDiv = document.querySelector(selector)
    const container = document.querySelector(".product-marker-container")

    if (fullDiv) {
        const contentPosition = () => {
            tooltips.forEach((tooltip) => {
                const pointerPin = tooltip.querySelector(
                    ".product-marker-pointer__pointer"
                )
                const pointerContent = tooltip.querySelector(
                    ".product-marker-pointer__content"
                )

                if (
                    pointerPin.offsetLeft + pointerContent.offsetWidth / 2 >
                    fullDiv.offsetWidth
                ) {
                    const extraLeft =
                        fullDiv.offsetWidth -
                        (pointerPin.offsetLeft + pointerContent.offsetWidth / 2)

                    pointerContent.style.left =
                        pointerPin.offsetLeft -
                        pointerContent.offsetWidth / 2 +
                        extraLeft -
                        10 +
                        "px"
                } else if (
                    pointerPin.offsetLeft + container.offsetLeft <
                    pointerContent.offsetWidth / 2
                ) {
                    pointerContent.style.left =
                        -container.offsetLeft + 10 + "px"
                } else {
                    pointerContent.style.left =
                        pointerPin.offsetLeft -
                        pointerContent.offsetWidth / 2 +
                        "px"
                }

                pointerContent.style.top =
                    pointerPin.offsetTop -
                    pointerContent.offsetHeight -
                    15 +
                    "px"
            })
        }

        tooltips.forEach((tooltip) => {
            const pointerPin = tooltip.querySelector(
                ".product-marker-pointer__pointer"
            )
            pointerPin.addEventListener("click", () => {
                if (tooltip.classList.contains("active")) {
                    tooltip.classList.remove("active")
                } else {
                    tooltip.classList.add("active")
                    getSiblings(tooltip).forEach((item) => {
                        item.classList.remove("active")
                    })
                }
            })
        })
        ;["resize", "DOMContentLoaded"].forEach((el) => {
            window.addEventListener(el, contentPosition)
        })
    }
}

productMarker(".product-marker-section")

/*--
    Instagram Active
-----------------------------------*/
var swiper = new Swiper(".instagram-active .swiper", {
    // Breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 0,
        },
    },
})

/*--
    Countdown
-----------------------------------*/
const countdown = (selector) => {
    const countdownSelector = document.querySelector(selector)

    if (countdownSelector) {
        const setValue = countdownSelector.getAttribute("data-countdown")

        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24

        const countDown = new Date(setValue).getTime()
        const x = setInterval(() => {
            const now = new Date().getTime()
            const distance = countDown - now
            const result = distance < 0

            const days = document.querySelector(".days")
            const hours = document.querySelector(".hours")
            const minutes = document.querySelector(".minutes")
            const seconds = document.querySelector(".seconds")

            days.innerText = result
                ? "00"
                : Math.floor(distance / day) > 9
                ? Math.floor(distance / day)
                : "0" + Math.floor(distance / day)

            hours.innerText = result
                ? "00"
                : Math.floor((distance % day) / hour) > 9
                ? Math.floor((distance % day) / hour)
                : "0" + Math.floor((distance % day) / hour)

            minutes.innerText = result
                ? "00"
                : Math.floor((distance % hour) / minute) > 9
                ? Math.floor((distance % hour) / minute)
                : "0" + Math.floor((distance % hour) / minute)

            seconds.innerText = result
                ? "00"
                : Math.floor((distance % minute) / second) > 9
                ? Math.floor((distance % minute) / second)
                : "0" + Math.floor((distance % minute) / second)

            if (result) {
                clearInterval(x)
            }

            //seconds
        }, 0)
    }
}

countdown(".countdown")

/*--
    Testimonial Active
-----------------------------------*/
var testimonial = new Swiper(".testimonial-active .swiper", {
    slidesPerView: 1,

    // Navigation arrows
    navigation: {
        nextEl: ".testimonial-active  .swiper-button-next",
        prevEl: ".testimonial-active  .swiper-button-prev",
    },
})

/*--
    Testimonial Active 2
-----------------------------------*/
var testimonial = new Swiper(".testimonial-active-2 .swiper", {
    slidesPerView: 1,

    // Pagination
    pagination: {
        el: ".testimonial-active-2 .swiper-pagination",
        clickable: true,
    },
})

/*--
    Trending Wrapper Mobile
-----------------------------------*/
var testimonial = new Swiper(".trending-wrapper-mobile .swiper", {
    slidesPerView: 1,

    // Navigation arrows
    navigation: {
        nextEl: ".trending-wrapper-mobile .swiper-button-next",
        prevEl: ".trending-wrapper-mobile .swiper-button-prev",
    },
})

/*--
    Mousemove Parallax effect
-----------------------------------*/
const mousemoveParallax = (selector) => {
    const parallaxSelector = document.querySelector(selector)

    if (parallaxSelector) {
        // Magic happens here
        const parallax = (e) => {
            const _w = window.innerWidth / 2
            const _mouseX = e.clientX

            parallaxSelector.querySelectorAll(".parallax").forEach((item) => {
                const parallaxValue = item.getAttribute("value")

                const child = item.children[0]

                child.style.transform = `translate3d(${
                    (_mouseX - _w) * (parallaxValue / 300)
                }px, -3.3px, 0px)`
            })
        }
        // Add event listener
        document.addEventListener("mousemove", parallax)
    }
}

mousemoveParallax(".slider-section-2, .slider-section")

/*--
    Instagram Active
-----------------------------------*/
var swiper = new Swiper(".instagram-3-active .swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1,

    loop: true,
    // Navigation arrows
    navigation: {
        nextEl: ".instagram-3-active .swiper-button-next",
        prevEl: ".instagram-3-active .swiper-button-prev",
    },

    // Cover flow Effect
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
})

/*--
    Product Color Switcher
-----------------------------------*/
const productColorSwitcher = (selector) => {
    const productColorSwitcher = document.querySelector(selector)

    if (productColorSwitcher) {
        const colorItem = productColorSwitcher.querySelectorAll(".color-item")

        colorItem.forEach((item) => {
            item.addEventListener("click", (e) => {
                e.preventDefault()

                item.classList.add("active")

                getSiblings(item).forEach((item) => {
                    item.classList.remove("active")
                })
            })
        })
    }
}

productColorSwitcher(".single-product__info--color-swatch")

/*--
    Partner 
-----------------------------------*/
var swiper = new Swiper(".partner-active .swiper", {
    loop: true,
    // Breakpoints
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 0,
        },
        576: {
            slidesPerView: 3,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 0,
        },
        992: {
            slidesPerView: 5,
            spaceBetween: 0,
        },
    },
})

/*--
    Must Have 
-----------------------------------*/
var swiper = new Swiper(".must-have-active .swiper", {
    loop: true,
    // Navigation arrows
    navigation: {
        nextEl: ".must-have-active .swiper-button-next",
        prevEl: ".must-have-active .swiper-button-prev",
    },
    // Breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 0,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 0,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 0,
        },
    },
})

/*--
    Trending
-----------------------------------*/
var swiper = new Swiper(".trending-active .swiper", {
    loop: true,
    slideVisibleClass: "swiper-slide-visible",

    // Breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1600: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
    },
    // Pagination
    pagination: {
        el: ".trending-active .swiper-pagination",
        clickable: true,
    },
    // Navigation arrows
    navigation: {
        nextEl: ".trending-active .swiper-button-next",
        prevEl: ".trending-active .swiper-button-prev",
    },
})

/*--
    Instagram Masonry
-----------------------------------*/
const instagramMasonry = (selector) => {
    const grid = document.querySelector(selector)

    if (grid) {
        window.addEventListener("load", () => {
            const msnry = new Masonry(grid, {
                // options...
                itemSelector: ".grid-item",

                // columnWidth: 2,
            })
        })
    }
}

instagramMasonry(".grid-4")

/*--
    G Light Box
-----------------------------------*/
const lightboxVideo = GLightbox({
    selector: ".glightbox",
})

/*--
    G Light Box
-----------------------------------*/
const productLightbox = GLightbox({
    selector: ".product-glightbox",
})

/*--
    Quick Shop 
-----------------------------------*/
var swiper = new Swiper(".quick-shop-active .swiper", {
    loop: true,
    // Navigation arrows
    navigation: {
        nextEl: ".quick-shop-active .swiper-button-next",
        prevEl: ".quick-shop-active .swiper-button-prev",
    },
    // Breakpoints
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        1600: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
    },
})

/*--
    Testimonials
-----------------------------------*/
var swiper = new Swiper(".testimonial-active-3 .swiper", {
    loop: true,
    spaceBetween: 0,

    // Breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 2,
        },
        1600: {
            slidesPerView: 3,
        },
    },
    // Pagination
    pagination: {
        el: ".testimonial-active-3 .swiper-pagination",
        clickable: true,
    },
})

/*--
    Blog Active
-----------------------------------*/
var swiper = new Swiper(".blog-active .swiper", {
    loop: true,
    spaceBetween: 0,

    // Breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 3,
        },
        1600: {
            slidesPerView: 4,
        },
    },
})

/*--
    Shop Filter
-----------------------------------*/
const shopFilter = (selector) => {
    const shopFilter = document.querySelector(selector)

    if (shopFilter) {
        const shopFilterWidget = document.querySelector(".shop-filter-widget")

        shopFilter.addEventListener("click", (e) => {
            e.preventDefault()

            if (shopFilterWidget.classList.contains("open")) {
                shopFilterWidget.classList.remove("open")
            } else {
                shopFilterWidget.classList.add("open")
            }
        })
    }
}

shopFilter(".shop-filter-toggle")

/*--
    Price Range Slider
-----------------------------------*/
const priceRange = (selector) => {
    const priceRange = document.querySelector(selector)

    if (priceRange) {
        const rangeInput = document.querySelectorAll(
            ".filter-range-input input"
        )
        const priceInput = document.querySelectorAll(
            ".filter-price-value input"
        )
        const range = document.querySelector(".filter-slider .filter-progress")
        let priceGap = 10

        window.addEventListener("load", () => {
            let minVal = parseInt(rangeInput[0].value)
            let maxVal = parseInt(rangeInput[1].value)

            range.style.left = (minVal / rangeInput[0].max) * 100 + "%"
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%"
        })

        priceInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minPrice = parseInt(priceInput[0].value)
                let maxPrice = parseInt(priceInput[1].value)

                if (
                    maxPrice - minPrice >= priceGap &&
                    maxPrice <= rangeInput[1].max
                ) {
                    if (e.target.className === "input-min") {
                        rangeInput[0].value = minPrice
                        range.style.left =
                            (minPrice / rangeInput[0].max) * 100 + "%"
                    } else {
                        rangeInput[1].value = maxPrice
                        range.style.right =
                            100 - (maxPrice / rangeInput[1].max) * 100 + "%"
                    }
                }
            })
        })

        rangeInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minVal = parseInt(rangeInput[0].value)
                let maxVal = parseInt(rangeInput[1].value)

                if (maxVal - minVal < priceGap) {
                    if (e.target.className === "range-min") {
                        rangeInput[0].value = maxVal - priceGap
                    } else {
                        rangeInput[1].value = minVal + priceGap
                    }
                } else {
                    priceInput[0].value = "$" + minVal
                    priceInput[1].value = "$" + maxVal
                    range.style.left = (minVal / rangeInput[0].max) * 100 + "%"
                    range.style.right =
                        100 - (maxVal / rangeInput[1].max) * 100 + "%"
                }
            })
        })
    }
}

priceRange(".price-range-filter")

/*--
    Product Single
-----------------------------------*/
const ProductThumb = new Swiper(".product-single-thumb .swiper", {
    spaceBetween: 30,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,

    // Breakpoints
    breakpoints: {
        0: {
            spaceBetween: 10,
        },
        768: {
            spaceBetween: 30,
        },
    },
})
const ProductSingle = new Swiper(".product-single-slide .swiper", {
    spaceBetween: 0,
    navigation: {
        nextEl: ".product-single-slide .swiper-button-next",
        prevEl: ".product-single-slide .swiper-button-prev",
    },
    thumbs: {
        swiper: ProductThumb,
    },
})

/*--
    Related Product
-----------------------------------*/
var swiper = new Swiper(".related-product-active .swiper", {
    loop: true,
    // Pagination
    pagination: {
        el: ".related-product-active .swiper-pagination",
        clickable: true,
    },
    // Breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 16,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 16,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 16,
        },
    },
})

/*--
    Product variable Color
-----------------------------------*/
const productVariable = (selector) => {
    const productVariable = document.querySelector(selector)

    if (productVariable) {
        const productColor = productVariable.querySelectorAll(
            ".variable-color__color"
        )
        const productSize = productVariable.querySelectorAll(
            ".variable-size__size"
        )
        const reset = document.querySelector(".reset-variable")

        const variableItem = [...productSize, ...productColor]

        variableItem.forEach((item) => {
            item.addEventListener("click", (e) => {
                e.preventDefault()

                if (item.classList.contains("active")) {
                    item.classList.remove("active")
                    reset.classList.remove("visible")
                } else {
                    item.classList.add("active")
                    reset.classList.add("visible")

                    getSiblings(item).forEach((item) => {
                        item.classList.remove("active")
                    })
                }
            })
            reset.addEventListener("click", (e) => {
                e.preventDefault()

                reset.classList.remove("visible")
                item.classList.remove("active")
            })
        })
    }
}

productVariable(".product-variable")

/*--
    Product Quantity
-----------------------------------*/

const productQuantity = (selector) => {
    const quantity = document.querySelector(selector)

    if (quantity) {
        const quantityIncrease = quantity.querySelector(".increase")
        const quantityDecrease = quantity.querySelector(".decrease")
        const quantityInput = quantity.querySelector(".quantity-input")
        let count = 1

        quantityIncrease.addEventListener("click", () => {
            quantityInput.value = count++
        })
        quantityDecrease.addEventListener("click", () => {
            if (count > 0) {
                quantityInput.value = count--
            }
        })
    }
}

productQuantity(".product-quantity")

/*--
    Related Product
-----------------------------------*/
var swiper = new Swiper(".product-single-carousel .swiper", {
    loop: true,
    navigation: {
        nextEl: ".product-single-carousel .swiper-button-next",
        prevEl: ".product-single-carousel .swiper-button-prev",
    },
    // Breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
})

/*--
    select2
-----------------------------------*/
document.addEventListener("DOMContentLoaded", (e) => {
    // default
    const els = document.querySelectorAll(".select2")
    els.forEach((select) => {
        NiceSelect.bind(select, {
            searchable: true,
            placeholder: "select",
            searchtext: "Search Country",
            selectedtext: "geselecteerd",
        })
    })
})

/*--
    Checkout Account & Shipping
-----------------------------------*/
/**
 * getHeight - for elements with display:none
 */
const getHeight = (el) => {
    let el_style = window.getComputedStyle(el)
    let el_display = el_style.display
    let el_position = el_style.position
    let el_visibility = el_style.visibility
    let el_max_height = el_style.maxHeight.replace("px", "").replace("%", "")
    let wanted_height = 0

    // if its not hidden we just return normal height
    if (el_display !== "none" && el_max_height !== "0") {
        return el.offsetHeight
    }

    // the element is hidden so:
    // making the el block so we can meassure its height but still be hidden
    el.style.position = "absolute"
    el.style.visibility = "hidden"
    el.style.display = "block"

    wanted_height = el.offsetHeight

    // reverting to the original values
    el.style.display = el_display
    el.style.position = el_position
    el.style.visibility = el_visibility

    return wanted_height
}

/**
 * toggleSlide mimics the jQuery version of slideDown and slideUp
 * all in one function comparing the max-heigth to 0
 */
const toggleSlide = (el) => {
    let el_max_height = 0

    if (el.getAttribute("data-max-height")) {
        // we've already used this before, so everything is setup
        if (el.style.maxHeight.replace("px", "").replace("%", "") === "0") {
            el.style.maxHeight = el.getAttribute("data-max-height")
        } else {
            el.style.maxHeight = "0"
        }
    } else {
        el_max_height = getHeight(el) + "px"
        el.style["transition"] = "max-height 0.5s ease-in-out"
        el.style.overflow = "hidden"
        el.style.maxHeight = "0"
        el.setAttribute("data-max-height", el_max_height)
        el.style.display = "block"

        // we use setTimeout to modify maxHeight later than display (to we have the transition effect)
        setTimeout(function () {
            el.style.maxHeight = el_max_height
        }, 10)
    }
}

const checkoutAccount = (selector) => {
    const checkoutVisible = document.querySelector(selector)
    const account = document.querySelectorAll(".account")

    if (checkoutVisible) {
        account.forEach((element) => {
            element.addEventListener("click", (e) => {
                toggleSlide(checkoutVisible)
            })
        })
    }
}

checkoutAccount(".checkout-account")

const checkoutShipping = (selector) => {
    const checkoutVisible = document.querySelector(selector)
    const shipping = document.querySelectorAll(".shipping")

    if (checkoutVisible) {
        shipping.forEach((element) => {
            element.addEventListener("click", (e) => {
                toggleSlide(checkoutVisible)
            })
        })
    }
}

checkoutShipping(".checkout-shipping")

/*--
    Quick View Slides 
-----------------------------------*/
const QuickViewProduct = new Swiper(".quick-view-product-slide .swiper", {
    spaceBetween: 0,
    navigation: {
        nextEl: ".quick-view-product-slide .swiper-button-next",
        prevEl: ".quick-view-product-slide .swiper-button-prev",
    },
})

/*--
    On Scroll Animations
-----------------------------------*/
const scrollElements = document.querySelectorAll(".js-scroll")

const elementInView = (el, dividend = 1) => {
    const elementTop = el.getBoundingClientRect().top

    return (
        elementTop <=
        (window.innerHeight || document.documentElement.clientHeight) / dividend
    )
}

const elementOutofView = (el) => {
    const elementTop = el.getBoundingClientRect().top

    return (
        elementTop >
        (window.innerHeight || document.documentElement.clientHeight)
    )
}

const displayScrollElement = (element) => {
    element.classList.add("scrolled")
}

const hideScrollElement = (element) => {
    element.classList.remove("scrolled")
}

const handleScrollAnimation = () => {
    scrollElements.forEach((el) => {
        if (elementInView(el, 1.25)) {
            displayScrollElement(el)
        } else if (elementOutofView(el)) {
            hideScrollElement(el)
        }
    })
}

;["scroll", "load"].forEach((el) => {
    window.addEventListener(el, () => {
        handleScrollAnimation()
    })
})

/*--
    Automatic Pop-Up
-----------------------------------*/
const AutoPopup = (selector) => {
    const popup = document.querySelector(selector)
    const popupOverlay = document.querySelector(".popup-modal-overlay")
    const popupClose = document.querySelector(".popup-close__btn")

    if (popup) {
        setTimeout(() => {
            popup.classList.add("open")
            popup.classList.remove("close")
            popupOverlay.classList.add("open")
            popupOverlay.classList.remove("close")
        }, 1000)
        ;[popupClose, popupOverlay].forEach((el) => {
            el.addEventListener("click", () => {
                popup.classList.remove("open")
                popup.classList.add("close")
                popupOverlay.classList.remove("open")
                popupOverlay.classList.add("close")
            })
        })
    }
}

AutoPopup(".popup-modal")
