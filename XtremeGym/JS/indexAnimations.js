//funktion som generar animerad övergång för start-sidan:

// väljer elementen i headern:
let headerContent = document.querySelectorAll("header *");

// Applicerar gsap till dessa element genom en foreach-loop:
headerContent.forEach((element) => {
  gsap.fromTo(
    element,
    {
      y: "-200%", // startpositionen är utanför viewporten
      opacity: 0, // vid start är elementen osynliga
    },
    {
      y: "0%", // slutposition där elementet ska hamna
      opacity: 1, // det blir fullt synligt igen
      duration: 0.8, // animationen vara 0.8 sekunder
      ease: "power1.out", //easing för mer flytande animation
      stagger: 0.3, // Stagger får animationerna att komma en i taget.
    }
  );
});

//funktion som generar animerad övergång för about-sidan:
function AboutStart() {
  console.log("rullar!");
  const aboutCheck = document.querySelector(".about-content-container");

  if (aboutCheck === null) {
    return;
  } else {
    {
      const textElement = document.querySelectorAll(".text-content");

      gsap.fromTo(
        textElement,
        {
          x: "-500%",
          opacity: 0,
        },
        {
          x: "0%",
          opacity: 1,
          ease: "power1.out",
          duration: 0.8,
          stagger: 0.4,
        }
      );
    }
  }
}

document.addEventListener("DOMContentLoaded", AboutStart);

//funktion som generar animerad övergång för sport-sidan:
function SportsStart() {
  const sportsElement = document.querySelectorAll(".sports-text");
  const sportsImg = document.querySelectorAll(".sports-img");

  if (sportsElement === null) {
    return;
  } else {
    gsap.fromTo(
      sportsElement,
      {
        x: "-500%",
        opacity: 0,
      },
      {
        x: "0%",
        opacity: 1,
        ease: "power1.out",
        stagger: 0.5,
        duration: 2,
      }
    );

    gsap.fromTo(
      sportsImg,
      {
        y: "1500%",
        opacity: 0,
      },
      {
        y: "0%",
        opacity: 1,
        ease: "power1.out",
        stagger: 0.8,
        duration: 2,
      }
    );
  }
}

document.addEventListener("DOMContentLoaded", SportsStart);
