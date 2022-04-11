// var arr = {
//   name: "Şəkər Çuğunduru",
//   img: "assets/images/project/seker_cugunduru.jpg",
//   url: "projects_detail.html ",
// };
// for (var key in arr) {
//   var value = arr[key];
//   document.write(key + " = " + value + " ");
// }
// alert("agilli ol");

myFunc();
function myFunc() {
  var arr = [
    {
      name: "Şəkər Çuğunduru",
      img: "assets/images/project/seker_cugunduru.jpg",
      url: "projects_detail.html ",
    },
    {
      name: "Soya",
      img: "assets/images/project/soya.jpg",
      url: "projects_detail.html ",
    },
    {
      name: "Qarğıdalı",
      img: "assets/images/project/qargidali.jpg",
      url: "projects_detail.html ",
    },
    {
      name: "Buğda",
      img: "assets/images/project/bugda.jpg",
      url: "projects_detail.html ",
    },
  ];
  for (let i = 0; i < arr.length - 1; i++) {
    var div = document.getElementById("x");
    var a = arr[i];

    console.log(a);
    // console.log(div);
    // div.appendChild(arr);
  }
}
