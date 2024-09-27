// hämtar knappar:
const bookBtn = document.querySelector(".trial_btn");
const memberBtn = document.querySelector(".member_btn");

// lägger till händelselyssnare
bookBtn.addEventListener("click", () => {
  const url = bookBtn.getAttribute("data-url");
  window.location.href = url;
});

// lägger till händelselyssnare
memberBtn.addEventListener("click", () => {
  const url = memberBtn.getAttribute("data-url");
  window.location.href = url;
});
