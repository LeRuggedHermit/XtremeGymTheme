function pushAnimations() {
  //lägger puffar i en variabel:
  const pushBtn = document.querySelector(".push-container");
  //om vi inte hittar en puff slutar funktionen:
  if (pushBtn === null) {
    return;
  } else {
    //annars ska den animeras in från sidan:
    gsap.fromTo(
      pushBtn,
      {
        opacity: 0,
        x: "-500%",
      },
      {
        opacity: 1,
        x: "0%",
        ease: "power1.out",
        duration: 2.1,
      }
    );
  }
}

//funktionen ska köras när sidan laddats in:
document.addEventListener("DOMContentLoaded", pushAnimations());
