//hämtar in menyknappen:
const menuBtn = document.querySelector(".menu_btn");

//lägger till funktionalitet för att öppna meny genom klick på denna:
menuBtn.addEventListener("click", () => {
  let mobileNav = document.querySelector(".mobile-nav-container");

  gsap.to(mobileNav, {
    y: "0%",
    ease: "power1.out",
  });
});

//hämtar in knappen för att stänga menyn:
const closeBtn = document.querySelector(".close_btn");

//lägger till funktionalitet för att stänga menyn genom klick:
closeBtn.addEventListener("click", () => {
  let mobileNav = document.querySelector(".mobile-nav-container");

  gsap.to(mobileNav, {
    y: "-500%",
    ease: "power1.out",
  });
});
