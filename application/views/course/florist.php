<?php
// florist.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Florist Professional Certification</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
/* LAYOUT */
.wrapper{
    display:flex;
    position:relative;
}

/* VIDEO SECTION */
.video-section{
    flex:1;
    padding:20px;
}

.video-container{
    width:100%;
    height:570px;
    background:black;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,0.2);
}

.video-container iframe{
    width:100%;
    height:100%;
}



/* SIDEBAR */
.sidebar{
    width:360px;
    background:white;
    border-left:1px solid #ddd;
    max-height:500px;
    overflow-y:auto;
    transition:0.3s;
}

.sidebar.hidden{
    width:0;
    overflow:hidden;
}

/* SHOW HIDE BUTTON */
.toggle-btn{
    position:absolute;
    /* top:15px;
    right:20px; */
    background:#2e80e4;
    border:none;
    color:white;
    padding:8px 15px;
    border-radius:20px;
    cursor:pointer;
    font-size:13px;
    font-weight:600;
    box-shadow:0 3px 10px rgba(0,0,0,0.2);
}

/* SIDEBAR TITLE */
.sidebar h3{
    padding:20px;
    margin:0;
    background:#f8f9fc;
    color:#1e3c72;
    font-size:16px;
    border-bottom:1px solid #eee;
}

/* ACCORDION */
.accordion{
    border-bottom:1px solid #eee;
}

.accordion-header{
    padding:15px 20px;
    font-weight:600;
    cursor:pointer;
    background:#ffffff;
    display:flex;
    justify-content:space-between;
    align-items:center;
    transition:0.3s;
}

.accordion-header:hover{
    background:#f0f4ff;
}

.accordion-header span{
    background:#2a5298;
    color:white;
    width:22px;
    height:22px;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:14px;
}

.accordion-content{
    display:none;
    background:#f9f9f9;
}

.accordion-content ul{
    list-style:none;
    padding:0 25px 15px;
    margin:0;
}

.accordion-content li{
    padding:8px 0;
    font-size:14px;
    border-bottom:1px solid #eee;
    cursor:pointer;
}

.accordion-content li:hover{
    color:#2a5298;
    font-weight:500;
}

/* IMAGE SECTION */
.bottom-image{
    margin-top:30px;
    text-align:center;
}

.bottom-image img{
    width:100%;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.2);
}

/* RESPONSIVE */
@media(max-width:900px){
    .wrapper{
        flex-direction:column;
    }
    .sidebar{
        width:100%;
        height:auto;
    }

    .toggle-btn{
    display:none;
    
}
}

body{
    /* /margin-left:80px; */

}
/* LAYOUT */
.wrapper{
    display:flex;
    transition:0.4s ease;
}

.video-section{
    flex:1;
    padding:20px;
    transition:0.4s ease;
}

.video-container{
    height:570px;
    background:black;
    border-radius:10px;
    overflow:hidden;
}

.video-container iframe{
    width:100%;
    height:100%;
}



/* SIDEBAR */
.sidebar{
    width:360px;
    background:white;
    border-left:1px solid #ddd;
    max-height:500px;
    overflow-y:auto;
    transition:0.4s ease;
}

/* HIDE STATE */
.wrapper.hide-sidebar .sidebar{
    /* margin-right:-360px; */
    display: none;
}

.wrapper.hide-sidebar .video-section{
    flex:1 0 100%;
}

/* TOGGLE BUTTON */
.toggle-btn{
   
    /* top:50px; */
    right:286px;
    background:#2e80e4;
    color:white;
    border:none;
    padding:10px 16px;
    border-radius:25px;
    cursor:pointer;
    font-weight:600;
    z-index:1000;
}

/* SIDEBAR STYLE */
.sidebar h3{
    padding:20px;
    margin:0;
    background:#f8f9fc;
    border-bottom:1px solid #eee;
}

.accordion{
    border-bottom:1px solid #eee;
}

.accordion-header{
    padding:15px 20px;
    cursor:pointer;
    font-weight:600;
    display:flex;
    justify-content:space-between;
    background:#fff;
}

.accordion-header:hover{
    background:#f0f4ff;
}

.accordion-content{
    display:none;
    background:#fafafa;
}

.accordion-content ul{
    list-style:none;
    padding:0 25px 15px;
    margin:0;
}

.accordion-content li{
    padding:8px 0;
    font-size:14px;
    cursor:pointer;
    border-bottom:1px solid #eee;
}

.accordion-content li:hover{
    color:#2a5298;
    font-weight:500;
}

.course-info {
    /* position: relative; */
    background: linear-gradient(rgba(30,60,114,0.85), rgba(42,82,152,0.85));
    background-size: cover;
    background-position: center;
    color: white;
    padding: 40px;
   margin-top:20px;
   border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    overflow: hidden;
}

.course-info h2 {
    font-size: 30px;
    color: white;
    margin-bottom: 15px;
    font-weight: 700;
}

.course-info p {
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 15px;
}

.highlight-box {
    background: rgba(255,255,255,0.15);
    padding: 15px 20px;
    border-radius: 12px;
    /* margin-top: 10px; */
    margin-bottom: 20px;
}

.highlight-box ul {
    margin: 0;
    padding-left: 20px;
}

.highlight-box li {
    margin-bottom: 8px;
}
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
</style>
</head>
<body>

<div class="container">
    <div class="course-info">

        <h2>🌸 Florist Professional Certification Program</h2>

        <p>
            Welcome to an exciting journey into the creative world of 
            <strong>professional floristry and floral design</strong>. 
            This comprehensive certification program is specially designed for 
            college students who want to build a successful career in 
            floral arrangement, wedding decoration, and event styling.
        </p>

        <!-- <p>
            Throughout this course, you will gain hands-on experience in 
            bouquet making, centerpiece design, stage decoration, flower preservation, 
            and customer service skills. Our step-by-step practical lessons ensure 
            that you develop both creative and business expertise.
        </p> -->

        
        <p style="margin-top:20px; font-size:18px;">
            🌼 <strong>Start Learning Now:</strong> Select any topic from the curriculum panel 
            and begin mastering the art of floral creativity.
        </p>
        <button class="toggle-btn" onclick="toggleSidebar()">Hide Curriculum</button>
    </div>


    <div class="wrapper" id="wrapper">
        
        <!-- LEFT SIDE -->
        <div class="video-section">
            
            <!-- <div class="video-container">
                <iframe id="courseVideo"
                    src="https://www.youtube.com/embed/rIzNpNp4iN4"
                    allowfullscreen>
                </iframe>
            </div> -->

            <div class="video-container">
                <video 
                    id="courseVideo" 
                    controls 
                    preload="metadata"
                    poster="../assets/videos/marketing_management/thumbnail.jpg"
                    style="width:100%; height:100%; object-fit:cover;">
                    
                    <source src="../assets/videos/marketing_management/a.mp4" type="video/mp4">
                    
                    Your browser does not support the video tag.
                </video>
            </div>
            
            
            
        </div>

        <!-- RIGHT SIDEBAR -->
        <div class="sidebar">
            <h3>Course Curriculum</h3>

            <!-- SECTION 1 -->
            <div class="accordion">
                <div class="accordion-header">
                    Introduction to Floristry <span>+</span>
                </div>
                <div class="accordion-content">
                    <ul>
                        <li onclick="changeVideo('introduction.mp4','Introduction of Marketing Management')"> Welcome to Introduction of Marketing Management</li>
                        <li onclick="changeVideo('KOFIOBrh3zQ','Florist Tools & Materials')">Florist Tools & Materials Overview</li>
                        <li onclick="changeVideo('jiwSvZ8Nvlo','Types of Flowers')">Flower Types</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2 -->
            <div class="accordion">
                <div class="accordion-header">
                    Floral Arrangement Basics <span>+</span>
                </div>
                <div class="accordion-content">
                    <ul>
                        <li onclick="changeVideo('lnm_9hbLy4k','Color Theory in Floristry')">Color Theory in Floristry</li>
                        <li onclick="changeVideo('Hia6t2d3Cxc','Basic Bouquet Design')">Basic Bouquet Design</li>
                        <li onclick="changeVideo('ZHv-iNX5HJU','Centerpiece Creation')">Centerpiece Creation</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3 -->
            <div class="accordion">
                <div class="accordion-header">
                    Advanced Techniques <span>+</span>
                </div>
                <div class="accordion-content">
                    <ul>
                        <li onclick="changeVideo('https://www.youtube.com/watch?v=1-gYd_CpTCo&list=PLX1Lsv8014wFnID9q_-cYZ92ALJAEGdG9&index=5','Wedding Decoration')">Wedding Decoration</li>
                        <li onclick="changeVideo('ja5GOIWxAmI','Event Styling')">Event Styling</li>
                        <li onclick="changeVideo('vqFDVanbMXg','Flower Preservation')">Flower Preservation</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    <div class="course-info">
                <div class="highlight-box">
                    <strong>🎓 What Makes This Course Special?</strong>
                    <ul>
                        <li>✔ Practical demonstrations with real floral projects</li>
                        <li>✔ Wedding & corporate event decoration training</li>
                        <li>✔ Flower shop startup and pricing strategies</li>
                        <li>✔ Certification to boost your professional profile</li>
                    </ul>
                </div>

                
                <h3>Course Overview</h3>
                <p>
                    This professional Florist Certification program is designed for college students 
                    who want to build a creative career in floral design and event decoration.
                </p>
                
                <h3>What You Will Learn</h3>
                <ul>
                    <li>Professional bouquet and flower arrangement techniques</li>
                    <li>Wedding and event floral decoration</li>
                    <li>Color theory and floral aesthetics</li>
                    <li>Indoor and outdoor floral styling</li>
                    <li>Flower shop business setup & management</li>
                    <li>Customer handling and pricing strategies</li>
                </ul>

                <h3>Career Opportunities</h3>
                <ul>
                    <li>Certified Florist</li>
                    <li>Event Decor Specialist</li>
                    <li>Wedding Floral Designer</li>
                    <li>Own Flower Boutique Startup</li>
                </ul>

        
            </div>
    </div>
<script>
/* ACCORDION FUNCTION */
document.querySelectorAll(".accordion-header").forEach(header=>{
    header.addEventListener("click",()=>{
        const content = header.nextElementSibling;
        const icon = header.querySelector("span");

        if(content.style.display==="block"){
            content.style.display="none";
            icon.textContent="+";
        }else{
            content.style.display="block";
            icon.textContent="-";
        }
    });
});

/* CHANGE VIDEO FUNCTION */
function changeVideo(videoId, title){
    document.getElementById("courseVideo").src =
        "http://localhost/vcampusventures.com/assets/videos/marketing_management/" + videoId;
    document.getElementById("videoTitle").innerText = title;
}

/* HIDE SHOW SIDEBAR */
function toggleSidebar(){
    const wrapper = document.getElementById("wrapper");
    const btn = document.querySelector(".toggle-btn");

    wrapper.classList.toggle("hide-sidebar");

    if(wrapper.classList.contains("hide-sidebar")){
        btn.textContent="Show Curriculum";
    }else{
        btn.textContent="Hide Curriculum";
    }
}

</script>

</body>
</html>