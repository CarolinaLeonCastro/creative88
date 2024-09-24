/*********************/
/*   Sticky Navbar   */
/*********************/
function windowScroll() {
  const navbar = document.getElementById("navbar");

  if (navbar) {
    if (
      document.body.scrollTop >= 50 ||
      document.documentElement.scrollTop >= 50
    ) {
      navbar.classList.add("is-sticky");
    } else {
      navbar.classList.remove("is-sticky");
    }
  }
}
window.addEventListener("scroll", (ev) => {
  ev.preventDefault();
  windowScroll();
});

/*********************/
/*   Navbar Active   */
/*********************/

try {
  var spy = new Gumshoe("#navbar-navlist a", {
    // Active classes
    // navClass: 'active', // applied to the nav list item
    // contentClass: 'active', // applied to the content
    offset: 80,
  });
} catch (error) {}

// Smooth scroll
try {
  var scroll = new SmoothScroll("#navbar-navlist a", {
    speed: 800,
    offset: 80,
  });
} catch (error) {}

/*********************/
/*   Cookie Banner   */
/*********************/
document.addEventListener("DOMContentLoaded", function () {
  const cookieBanner = document.getElementById("cookieBanner");
  const acceptCookiesBtn = document.getElementById("acceptCookies");

  // Vérifier si l'utilisateur a déjà accepté les cookies
  if (!localStorage.getItem("cookiesAccepted")) {
    // Afficher la bannière si l'utilisateur n'a pas encore accepté
    cookieBanner.style.display = "block";
  }

  // Lorsque l'utilisateur accepte les cookies
  acceptCookiesBtn.addEventListener("click", function () {
    // Masquer la bannière
    cookieBanner.style.display = "none";
    // Enregistrer dans le localStorage que les cookies ont été acceptés
    localStorage.setItem("cookiesAccepted", "true");
  });
});

/*********************/
/*   Menu Collapse   */
/*********************/
const toggleCollapse = (elementId, show = true) => {
  const collapseEl = document.getElementById(elementId);
  if (show) {
    collapseEl.classList.remove("hidden");
  } else {
    collapseEl.classList.add("hidden");
  }
};

document.addEventListener("DOMContentLoaded", () => {
  // Toggle target elements using [data-collapse]
  document
    .querySelectorAll("[data-collapse]")
    .forEach(function (collapseToggleEl) {
      var collapseId = collapseToggleEl.getAttribute("data-collapse");

      collapseToggleEl.addEventListener("click", function () {
        toggleCollapse(
          collapseId,
          document.getElementById(collapseId).classList.contains("hidden")
        );
      });
    });
});

window.toggleCollapse = toggleCollapse;

/*********************/
/*   Back To Top     */
/*********************/
document.addEventListener("DOMContentLoaded", function () {
  const backToTopButton = document.getElementById("backToTop");

  // Show or hide the button based on scroll position
  window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
      // Show the button after scrolling down 300px
      backToTopButton.style.display = "flex";
    } else {
      backToTopButton.style.display = "none";
    }
  });

  // Scroll smoothly to the top when the button is clicked
  backToTopButton.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

/*********************/
/*   Accordions      */
/*********************/
try {
  const Default = {
    alwaysOpen: false,
    activeClasses: "bg-white text-black rounded-xl",
    inactiveClasses: "text-dark",
    onOpen: () => {},
    onClose: () => {},
    onToggle: () => {},
  };

  class Accordion {
    constructor(items = [], options = {}) {
      this._items = items;
      this._options = { ...Default, ...options };
      this._init();
    }

    _init() {
      if (this._items.length) {
        // show accordion item based on click
        this._items.map((item) => {
          if (item.active) {
            this.open(item.id);
          }

          item.triggerEl.addEventListener("click", () => {
            this.toggle(item.id);
          });
        });
      }
    }

    getItem(id) {
      return this._items.filter((item) => item.id === id)[0];
    }

    open(id) {
      const item = this.getItem(id);

      // don't hide other accordions if always open
      if (!this._options.alwaysOpen) {
        this._items.map((i) => {
          if (i !== item) {
            i.triggerEl.classList.remove(
              ...this._options.activeClasses.split(" ")
            );
            i.triggerEl.classList.add(
              ...this._options.inactiveClasses.split(" ")
            );
            i.targetEl.classList.add("hidden");
            i.triggerEl.setAttribute("aria-expanded", false);
            i.active = false;

            // rotate icon if set
            if (i.iconEl) {
              i.iconEl.classList.remove("rotate-180");
            }
          }
        });
      }

      // show active item
      item.triggerEl.classList.add(...this._options.activeClasses.split(" "));
      item.triggerEl.classList.remove(
        ...this._options.inactiveClasses.split(" ")
      );
      item.triggerEl.setAttribute("aria-expanded", true);
      item.targetEl.classList.remove("hidden");
      item.active = true;

      // rotate icon if set
      if (item.iconEl) {
        item.iconEl.classList.add("rotate-180");
      }

      // callback function
      this._options.onOpen(this, item);
    }

    toggle(id) {
      const item = this.getItem(id);

      if (item.active) {
        this.close(id);
      } else {
        this.open(id);
      }

      // callback function
      this._options.onToggle(this, item);
    }

    close(id) {
      const item = this.getItem(id);

      item.triggerEl.classList.remove(
        ...this._options.activeClasses.split(" ")
      );
      item.triggerEl.classList.add(...this._options.inactiveClasses.split(" "));
      item.targetEl.classList.add("hidden");
      item.triggerEl.setAttribute("aria-expanded", false);
      item.active = false;

      // rotate icon if set
      if (item.iconEl) {
        item.iconEl.classList.remove("rotate-180");
      }

      // callback function
      this._options.onClose(this, item);
    }
  }

  window.Accordion = Accordion;

  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("[data-accordion]").forEach((accordionEl) => {
      const alwaysOpen = accordionEl.getAttribute("data-accordion");
      const activeClasses = accordionEl.getAttribute("data-active-classes");
      const inactiveClasses = accordionEl.getAttribute("data-inactive-classes");

      const items = [];
      accordionEl.querySelectorAll("[data-accordion-target]").forEach((el) => {
        const item = {
          id: el.getAttribute("data-accordion-target"),
          triggerEl: el,
          targetEl: document.querySelector(
            el.getAttribute("data-accordion-target")
          ),
          iconEl: el.querySelector("[data-accordion-icon]"),
          active: el.getAttribute("aria-expanded") === "true" ? true : false,
        };
        items.push(item);
      });

      new Accordion(items, {
        alwaysOpen: alwaysOpen === "open" ? true : false,
        activeClasses: activeClasses ? activeClasses : Default.activeClasses,
        inactiveClasses: inactiveClasses
          ? inactiveClasses
          : Default.inactiveClasses,
      });
    });
  });
} catch (error) {}

/*********************/
/*   Lucide Icons   */
/*********************/
lucide.createIcons();

/*********************/
/*   Contact Form   */
/*********************/

document.addEventListener("DOMContentLoaded", function () {
  function showNotification(message, isError = false) {
    const notification = document.getElementById("notification");
    notification.textContent = message;
    notification.className = `notification ${isError ? "error" : ""} show`;

    setTimeout(() => {
      notification.className = "notification";
    }, 3000);
  }

  document
    .getElementById("contactForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      const fullName = document.getElementById("formFullName").value.trim();
      const email = document.getElementById("formEmail").value.trim();
      const phone = document.getElementById("formPhone").value.trim();
      const reason = document.getElementById("formReason").value.trim();
      const message = document.getElementById("formMessages").value.trim();

      fetch("https://discord-contact-form.vercel.app/api/send-message", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          fullName,
          email,
          phone,
          reason,
          message,
        }),
      })
        .then((response) => {
          if (!response.ok) {
            throw new Error("Failed to send message");
          }
          return response.json();
        })
        .then((data) => {
          showNotification(data.message);
          document.getElementById("contactForm").reset();
        })
        .catch((error) => {
          console.error("Erreur:", error);
          showNotification(
            "An error occurred during your submission. Please try again.",
            true
          );
        });
    });
});
