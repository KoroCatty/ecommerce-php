// Single_product page ----------------------------
// To replace the image when you click the image 
const mainImg = document.getElementById("mainImg");
const smallImg = document.getElementsByClassName("small-img"); // returning  array [0 1 2 3]

// smallImg[0].onclick = () => {
//   mainImg.src = smallImg[0].src;
// }
for (let i = 0; i < 4; i++) {
  smallImg[i].onclick = () => {
    mainImg.src = smallImg[i].src;
  }
}

// -------------------


