let blocks = [
  {
    src: "../assets/img/mobs/zombie.png",
    name: "Zombie",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
];

let content = document.querySelector(".collection-body");
blocks.forEach((block) => {
  let newBox = document.createElement("div");
  newBox.classList.add("collection-box");

  newBox.innerHTML = `
    <div class="collection-box-body">
    <img src="${block.src}" alt="" />
    <h1 class="collection-box-title">${block.name}</h1>
  </div>
  <div class="collection-box-footer">
    <span class="view-wrapper"
      ><i class="bi bi-eye-fill"></i>
      <span class="view-number">&ThinSpace;${block.viewNr}</span>
    </span>
  
    <span class="like-wrapper"
      ><i class="bi bi-suit-heart like"></i
      ><span class="like-number">&ThinSpace;${block.likeNr}</span>
    </span>
  </div>
  `;
  content.appendChild(newBox);
});
const hearts = Array.from(document.querySelectorAll(".like"));
hearts.forEach((heart) => {
  let isClicked = false;
  heart.addEventListener("click", (e) => {
    let likeNumber = parseInt(e.target.parentNode.childNodes[1].textContent);
    if (!isClicked) {
      likeNumber++;
      e.target.parentNode.childNodes[1].innerHTML = `&ThinSpace;${likeNumber}`;
      isClicked = true;
      e.target.classList.remove("bi-suit-heart");
      e.target.classList.add("bi-suit-heart-fill");
    } else {
      likeNumber--;
      e.target.parentNode.childNodes[1].innerHTML = `&ThinSpace;${likeNumber}`;
      e.target.classList.remove("bi-suit-heart-fill");
      e.target.classList.add("bi-suit-heart");
      isClicked++;
      isClicked = false;
    }
  });
});

// Search function
const searchInput = document.querySelector(".collection-search-input");
const searchBtn = document.querySelector(".collection-search-btn");
searchBtn.addEventListener("click", () => {
  let text = searchInput.value.toLowerCase();
  let boxes = document.querySelectorAll(".collection-box");

  Array.from(boxes).forEach((box) => {
    let boxName = box.childNodes[1].childNodes[3].textContent;
    if (boxName.toLocaleLowerCase().indexOf(text) != -1) {
      box.style.display = "block";
    } else {
      box.style.display = "none";
    }
  });
});
