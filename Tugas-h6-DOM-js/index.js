let items = [
  ["001", "Logitech Mouse Gamer", "Rp 350.000", "Mouse buat main game FPS terbaik", "Logitech-Mouse.png"],
  ["002", "Mechanical Keyboard", "Rp 600.000", "Keyboard unggul dengan bunyi khas dan bisa di custom", "Mechanical-Keyboard.jpg"],
  ["003", "LG Monitor 4K 144hz", "Rp 1.200.000", "Udah 4K. Anti sakit mata dan gambar burik", "Monitor.png"],
  ["004", "Mousepad HIHUHEN", "Rp 200.000", "Biar makin lancar dan nyaman", "Mousepad.jpg"],
];
let card = document.getElementById("wrap");
let list = document.getElementById("listBarang");
let i = 0;
let qty = (document.getElementById("qty").innerHTML = "(" + i + ")");

// memunculkan item
items.forEach(function (item) {
  let cardEl =
    '<div class="card mx-1" style="width: 18rem;" id="card"><img src=asset/' +
    item[4] +
    ' class="card-img-top" height="200px" width="200px" alt="..."><div class="card-body"><h5 class="card-title" id="itemName">' +
    item[1] +
    '</h5><p class="card-text" id="itemDesc">' +
    item[3] +
    '</p><p class="card-text">' +
    item[2] +
    '</p><a href="#" class="btn btn-primary" id="addCart" onclick="add()">add to card</a></div></div>';
  list.innerHTML += cardEl;
});

// function menambah card
function add() {
  i++;
  document.getElementById("qty").innerHTML = "(" + i + ")";
}

// FUNCTION MENCARI ITEM
document.getElementById("formItem").addEventListener("submit", function (e) {
  e.preventDefault();

  let keyword = document.getElementById("keyword").value.toLowerCase();
  let filter = items.filter(function (item) {
    return item[1].toLowerCase().includes(keyword);
  });
  list.innerHTML = " ";

  filter.forEach(function (item) {
    let cardEl =
      '<div class="card mx-1" style="width: 18rem;" id="card"><img src=asset/' +
      item[4] +
      ' class="card-img-top" height="200px" width="200px" alt="..."><div class="card-body"><h5 class="card-title" id="itemName">' +
      item[1] +
      '</h5><p class="card-text" id="itemDesc">' +
      item[3] +
      '</p><p class="card-text">' +
      item[2] +
      '</p><a href="#" class="btn btn-primary" id="addCart" onclick="add()">add to card</a></div></div>';
    list.innerHTML += cardEl;
  });
});
