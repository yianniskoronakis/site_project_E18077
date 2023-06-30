document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("cost-form");
  const resultContainer = document.getElementById("result-container");

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const kWhInput = document.getElementById("kWh-input");
    const daysInput = document.getElementById("days-input");
    const squareMetersInput = document.getElementById("square-meters-input");

    const kWh = parseFloat(kWhInput.value);
    const days = parseInt(daysInput.value);
    const squareMeters = parseFloat(squareMetersInput.value);

    let kWhCost = 0;
    let utilityServicesCost = 0;
    let municipalityCost = 0;

    if (kWh > 0 && kWh < 1600) {
      kWhCost = 0.00623 * kWh;
    } else if (kWh < 2000) {
      kWhCost = 0.00768 * kWh;
    } else {
      kWhCost = 0.00915 * kWh;
    }

    if (kWh > 0 && kWh < 1600) {
      utilityServicesCost = (0.01315 * kWh * days) / 365;
    } else if (kWh < 2000) {
      utilityServicesCost = (0.0148 * kWh * days) / 365;
    } else {
      utilityServicesCost = (0.01625 * kWh * days) / 365;
    }

    if (squareMeters > 0 && squareMeters < 50) {
      municipalityCost = (0.12 * squareMeters * days) / 365;
    } else if (squareMeters < 90) {
      municipalityCost = (0.2 * squareMeters * days) / 365;
    } else {
      municipalityCost = (0.31 * squareMeters * days) / 365;
    }

    const totalCost = kWhCost + utilityServicesCost + municipalityCost;

    resultContainer.innerText = `The cost is: ${totalCost.toFixed(2)} euro`;
  });
});

const ids = ["home", "services", "profile", "contact", "admin"];

const buttons = {
  home: document.getElementById("home-bt"),
  services: document.getElementById("services-bt"),
  profile: document.getElementById("profile-bt"),
  contact: document.getElementById("contact-bt"),
  admin: document.getElementById("admin-bt"),
};

const main = {
  home: document.getElementById("home"),
  services: document.getElementById("services"),
  profile: document.getElementById("profile"),
  contact: document.getElementById("contact"),
  admin: document.getElementById("admin"),
};

main.home.classList.add("active-container");
buttons.home.classList.add("active-button");
const navbar = document.getElementById("navbar");
const navA = document.querySelectorAll("nav > a");
let windowWidth = window.innerWidth;
let windowHeight = window.innerHeight;
window.addEventListener("resize", () => {
  windowWidth = window.innerWidth;
  windowHeight = window.innerHeight;
});

const Transition = (event) => {
  if (windowWidth <= 1099 && event !== "services") {
    burgerHandler();
  }
  ids.forEach((e) => {
    main[e].classList.remove("active-container");
    buttons[e].classList.remove("active-button");
  });
  //conditional ternary operator
  const prop = event.target ? event.target.textContent.toLowerCase() : event;

  main[prop].classList.add("active-container");
  buttons[prop].classList.add("active-button");
};

const calcProfileBt = document.getElementById("calc-profile");
calcProfileBt.addEventListener("click", () => {
  Transition("services");
});

ids.forEach((e) => {
  buttons[e].addEventListener("click", Transition);
});

const root = document.querySelector(":root");
const burger = document.getElementById("burger-container");
const burgerLine = document.getElementById("burger");

let isActive = false;

const burgerHandler = ()=>{
  if (!isActive) {
    root.style.setProperty("--burger-top-rotation", "rotateZ(45deg)");
    root.style.setProperty("--burger-bottom-rotation", "rotateZ(-45deg)");
    root.style.setProperty("--burger-top-translate", "translateY(0)");
    root.style.setProperty("--burger-bottom-translate", "translateY(0)");
    burgerLine.style.border = "0px solid white";
    navbar.classList.add("navbar-active");
    for (let a of navA) {
      a.classList.add("a-active");
    }
  } else {
    root.style.setProperty("--burger-top-rotation", "rotateZ(0deg)");
    root.style.setProperty("--burger-bottom-rotation", "rotateZ(0deg)");
    root.style.setProperty("--burger-top-translate", "translateY(-10px)");
    root.style.setProperty("--burger-bottom-translate", "translateY(10px)");
    burgerLine.style.border = "2px solid white";
    navbar.classList.remove("navbar-active");
    for (let a of navA) {
      a.classList.remove("a-active");
    }
  }
  isActive = !isActive;
}

burger.addEventListener("click", burgerHandler);