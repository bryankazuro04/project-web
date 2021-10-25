let progress = document.getElementById('progressbar');
let totalHeight = document.body.scrollHeight - window.innerHeight;

window.onscroll = function () {
  let progressHeight = (window.pageYOffset / totalHeight) * 100;
  progress.style.height = progressHeight + "%";
  scrollUp()
};

function scrollUp() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    document.getElementById("btn-to-top").style.display = "block";
  } else {
    document.getElementById("btn-to-top").style.display = "none";
  }
}

function topUp() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}