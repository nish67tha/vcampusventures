<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Browse Courses</title>

<style>

/* ===== GENERAL ===== */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  background: #f7f9fb;
}

.container {
  width: 1200px;
  margin: auto;
  padding: 40px 0;
}

h1 {
  margin-bottom: 20px;
}

/* ===== TOP BAR ===== */
.top-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 25px;
}

.search-box input {
  padding: 8px 12px;
  width: 250px;
  border: 1px solid #ddd;
  border-radius: 6px;
}

.sort-box select {
  padding: 8px 10px;
  border-radius: 6px;
  border: 1px solid #ddd;
}

/* ===== LAYOUT ===== */
.layout {
  display: flex;
  gap: 30px;
}

/* ===== SIDEBAR ===== */
.sidebar {
  width: 250px;
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  height: fit-content;
}

.sidebar h4 {
  margin-top: 0;
}

.sidebar label {
  display: block;
  margin-bottom: 8px;
  cursor: pointer;
}

/* ===== COURSE LIST ===== */
.course-area {
  flex: 1;
}

.course-card {
  display: flex;
  gap: 20px;
  background: #fff;
  padding: 15px;
  border-radius: 8px;
  margin-bottom: 20px;
  transition: 0.2s;
}

.course-card:hover {
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.course-img {
  width: 200px;
  height: 120px;
  background-size: cover;
  border-radius: 6px;
}

.course-info h3 {
  margin: 0;
}

.course-info p {
  margin: 5px 0;
  font-size: 14px;
  color: #555;
}

.rating {
  color: #f39c12;
  font-size: 14px;
}

/* ===== PAGINATION ===== */
.pagination {
  text-align: center;
  margin-top: 30px;
}

.pagination button {
  padding: 8px 12px;
  margin: 0 5px;
  border: none;
  background: #e0e0e0;
  border-radius: 5px;
  cursor: pointer;
}

.pagination button.active {
  background: #5624d0;
  color: #fff;
}

.results-count {
  margin-bottom: 15px;
  font-size: 14px;
  color: #555;
}

</style>
</head>
<body>

<div class="container">

<h1>Browse Courses</h1>

<div class="top-bar">
  <div class="search-box">
    <input type="text" id="searchInput" placeholder="Search courses...">
  </div>

  <div class="sort-box">
    <select id="sortSelect">
      <option value="popular">Most Popular</option>
      <option value="rating">Highest Rated</option>
      <option value="az">A-Z</option>
    </select>
  </div>
</div>

<div class="layout">

  <!-- SIDEBAR -->
  <div class="sidebar">
    <h4>Category</h4>
    <label><input type="checkbox" value="Development" class="filterCategory"> Development</label>
    <label><input type="checkbox" value="Business" class="filterCategory"> Business</label>
    <label><input type="checkbox" value="Design" class="filterCategory"> Design</label>
    <label><input type="checkbox" value="Marketing" class="filterCategory"> Marketing</label>
  </div>

  <!-- COURSE AREA -->
  <div class="course-area">

    <div class="results-count" id="resultsCount"></div>

    <div id="courseContainer"></div>

    <div class="pagination" id="pagination"></div>

  </div>

</div>
</div>

<script>

/* ===== SAMPLE DATA ===== */

const courses = [
  {title:"JavaScript Mastery",category:"Development",rating:4.7,popularity:95,img:"https://picsum.photos/300/200?1"},
  {title:"Business Strategy 101",category:"Business",rating:4.5,popularity:90,img:"https://picsum.photos/300/200?2"},
  {title:"UI UX Design Bootcamp",category:"Design",rating:4.8,popularity:88,img:"https://picsum.photos/300/200?3"},
  {title:"Digital Marketing Guide",category:"Marketing",rating:4.4,popularity:85,img:"https://picsum.photos/300/200?4"},
  {title:"React Complete Course",category:"Development",rating:4.9,popularity:99,img:"https://picsum.photos/300/200?5"},
  {title:"Startup Fundamentals",category:"Business",rating:4.3,popularity:70,img:"https://picsum.photos/300/200?6"},
  {title:"Photoshop Advanced",category:"Design",rating:4.6,popularity:80,img:"https://picsum.photos/300/200?7"},
  {title:"SEO Masterclass",category:"Marketing",rating:4.5,popularity:87,img:"https://picsum.photos/300/200?8"}
];

/* ===== VARIABLES ===== */

let currentPage = 1;
const itemsPerPage = 4;

/* ===== FILTER + SEARCH + SORT ===== */

function getFilteredCourses() {
  const searchValue = document.getElementById("searchInput").value.toLowerCase();
  const selectedCategories = [...document.querySelectorAll(".filterCategory:checked")].map(cb => cb.value);
  const sortValue = document.getElementById("sortSelect").value;

  let filtered = courses.filter(course =>
    course.title.toLowerCase().includes(searchValue) &&
    (selectedCategories.length === 0 || selectedCategories.includes(course.category))
  );

  if(sortValue === "rating")
    filtered.sort((a,b)=>b.rating-a.rating);
  else if(sortValue === "az")
    filtered.sort((a,b)=>a.title.localeCompare(b.title));
  else
    filtered.sort((a,b)=>b.popularity-a.popularity);

  return filtered;
}

/* ===== RENDER COURSES ===== */

function renderCourses() {

  const container = document.getElementById("courseContainer");
  const pagination = document.getElementById("pagination");
  const resultsCount = document.getElementById("resultsCount");

  const filtered = getFilteredCourses();

  resultsCount.innerText = filtered.length + " results found";

  const totalPages = Math.ceil(filtered.length / itemsPerPage);
  if(currentPage > totalPages) currentPage = 1;

  const start = (currentPage - 1) * itemsPerPage;
  const end = start + itemsPerPage;

  const paginated = filtered.slice(start, end);

  container.innerHTML = "";

  paginated.forEach(course => {
    container.innerHTML += `
      <div class="course-card">
        <div class="course-img" style="background-image:url('${course.img}')"></div>
        <div class="course-info">
          <h3>${course.title}</h3>
          <p>Category: ${course.category}</p>
          <div class="rating">⭐ ${course.rating}</div>
        </div>
      </div>
    `;
  });

  /* Pagination */
  pagination.innerHTML = "";
  for(let i=1;i<=totalPages;i++){
    pagination.innerHTML += `
      <button class="${i===currentPage?'active':''}" onclick="changePage(${i})">${i}</button>
    `;
  }

}

function changePage(page){
  currentPage = page;
  renderCourses();
}

/* ===== EVENT LISTENERS ===== */

document.getElementById("searchInput").addEventListener("input", ()=>{
  currentPage = 1;
  renderCourses();
});

document.getElementById("sortSelect").addEventListener("change", ()=>{
  renderCourses();
});

document.querySelectorAll(".filterCategory").forEach(cb=>{
  cb.addEventListener("change", ()=>{
    currentPage = 1;
    renderCourses();
  });
});

renderCourses();

</script>

</body>
</html>