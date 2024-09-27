//funktion för att styra slidern på about-sidan:

function sliderMotion() {
  //läser in slider-spåret i en variabel:
  const track = document.getElementById("image-track");

  if (track === null) {
    return;
  } else {
    //lyssnar efter mus-klick:
    window.onmousedown = (e) => {
      //hittar vart det har klickats någonstans:
      track.dataset.mouseDownAt = e.clientX;
    };

    //noterar när klicket tar slut:
    window.onmouseup = () => {
      //återställer startpositionen för mus-klick:
      track.dataset.mouseDownAt = "0";
      //sparar den aktuella procentuella positionen för framtida referens:
      track.dataset.prevPercentage = track.dataset.percentage;
    };

    //noterar när musen (i klickat tillstånd) rör sig:
    window.onmousemove = (e) => {
      //kontrollerar om mus-knappen är nedtryckt:
      if (track.dataset.mouseDownAt === "0") return;

      //beräknar hur långt musen har rört sig från där klicket startade:
      const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
        maxDelta = window.innerWidth / 2;

      //omvandlar musens rörelse till en procentandel för att flytta spåret:
      const percentage = (mouseDelta / maxDelta) * -100,
        nextPercentageUnclamped =
          parseFloat(track.dataset.prevPercentage) + percentage;

      //klamrar procentsatsen så att spåret inte rör sig utanför sina gränser:
      const nextPercentage = Math.max(
        Math.min(nextPercentageUnclamped, 0),
        -100
      );

      //uppdaterar den procentuella positionen i datasetet:
      track.dataset.percentage = nextPercentage;

      //animerar spårets rörelse till den nya procentuella positionen:
      track.animate(
        {
          transform: `translate(${nextPercentage}%, -50%)`,
        },
        { duration: 1800, fill: "forwards" }
      );

      //animerar varje bilds position baserat på spårets rörelse:
      for (const image of track.getElementsByClassName("image")) {
        image.animate(
          {
            objectPosition: `${nextPercentage + 100}% 50%`,
          },
          { duration: 1800, fill: "forwards" }
        );
      }
    };
  }
}

document.addEventListener("DOMContentLoaded", sliderMotion);
