<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Single Course</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{margin:0;font-family:Segoe UI;background:#f4f6f9}
.container{width:90%;max-width:1200px;margin:auto;padding:40px 0}
.layout{display:flex;gap:30px}
.video-area{flex:2}
.sidebar{flex:1;background:#fff;padding:20px;border-radius:12px}
iframe{width:100%;height:400px;border-radius:12px}
.unit{cursor:pointer;padding:10px;border-bottom:1px solid #eee}
.unit:hover{background:#f2f2f2}
h2{margin-top:0}
@media(max-width:900px){.layout{flex-direction:column}}
</style>
</head>
<body>

<div class="container">

<h2>HVAC Technician Course</h2>
<p>Professional certification program with practical training.</p>

<div class="layout">

  <div class="video-area">
    <iframe id="videoPlayer"
      src="https://www.youtube.com/embed/dQw4w9WgXcQ">
    </iframe>
  </div>

  <div class="sidebar">
    <h3>Course Content</h3>

    <div class="unit" onclick="changeVideo('dQw4w9WgXcQ')">
      Unit 1 - Introduction
    </div>

    <div class="unit" onclick="changeVideo('9bZkp7q19f0')">
      Unit 2 - Practical Setup
    </div>

    <div class="unit" onclick="changeVideo('3tmd-ClpJxA')">
      Unit 3 - Advanced Training
    </div>

  </div>

</div>

</div>

<script>
function changeVideo(id){
  document.getElementById("videoPlayer").src =
    "https://www.youtube.com/embed/"+id;
}
</script>

</body>
</html>