<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>VCampus College | Skill Development Programs</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background: #f4f6fb;
        }

        /* HERO */
        .hero {
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .hero h1 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .hero p {
            max-width: 700px;
            margin: auto;
        }

        /* LAYOUT */
        .container {
            display: flex;
            gap: 20px;
            padding: 20px;
        }

        /* SIDEBAR */
        .sidebar {
            flex: 0 0 250px;
            background: #e9edf7;
            padding: 20px;
            border-radius: 10px;
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .sidebar h3 {
            color: #1e3c72;
            margin-bottom: 20px;
        }

        .filter-section {
            margin-bottom: 25px;
        }

        label {
            font-weight: 600;
            color: #1e3c72;
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }

        select,
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
            margin-bottom: 15px;
        }

        ul.course-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul.course-list li {
            padding: 10px;
            margin-bottom: 8px;
            background: white;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px;
        }

        ul.course-list li:hover {
            background: #2a5298;
            color: white;
        }

        /* MAIN CONTENT */
        .main {
            flex: 1;
        }

        .main h2 {
            color: #1e3c72;
            margin-bottom: 10px;
        }

        .main p {
            margin-bottom: 20px;
            color: #555;
        }

        /* CARDS */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-content {
            padding: 18px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content h3 {
            font-size: 16px;
            margin-bottom: 8px;
            color: #2a5298;
        }

        .card-content p {
            font-size: 13px;
            color: #555;
            flex: 1;
        }
        .meta {
    display: flex;
    justify-content: space-between; /* pushes left & right */
    align-items: center;
    margin: 10px 0;
}

.price {
    font-size: 13px;
    font-weight: 500;
    color: #555;
}

.rating {
    font-size: 13px;
    font-weight: 500;
    color: #555;
}

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 15px;
            background: #2a5298;
            color: white;
            text-decoration: none;
            border-radius: 20px;
            font-size: 13px;
            text-align: center;
        }

        .pagination {
    margin-top: 30px;
    text-align: center;
}

.pagination button {
    padding: 6px 12px;
    margin: 0 5px;
    border: none;
    background: #e0e0e0;
    border-radius: 5px;
    cursor: pointer;
    font-size: 13px;
}

.pagination button.active {
    background: #2a5298;
    color: white;
}

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                top: 0;
            }
        }
    </style>
</head>

<body>
    <!-- HERO -->
    <div class="hero">
        <h1>Professional Skill Development Programs</h1>
        <p>
            Choose from industry-relevant vocational and technical training programs
            designed to build practical skills and career opportunities.
        </p>
    </div>

    <div class="container">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <h3>Filter Courses</h3>

            <div class="filter-section">
                <label for="searchCourse">Search Courses</label>
                <input type="text" id="searchCourse" placeholder="Type course name..." />
            </div>

            <div class="filter-section">
                <label for="sortOrder">Sort Courses</label>
                <select id="sortOrder">
                    <option value="asc" selected>Ascending (A-Z)</option>
                    <option value="desc">Descending (Z-A)</option>
                </select>
            </div>

            <ul class="course-list" id="courseList">
                <li>Florist</li>
                <li>Interior Landscaper</li>
                <li>Senior Beauty Therapist</li>
                <li>Assistant Hair Dresser & Stylist</li>
                <li>Fitter - Fabrication</li>
                <li>Fitter – Mechanical Assembly</li>
                <li>HVAC Technician</li>
                <li>Multi Skill Technician (Electrical)</li>
                <li>Hydroponics Technician</li>
                <li>Precision Farming Technician</li>
                <li>Squash & Juice Processing Technician</li>
                <li>Pickle Making Technician</li>
            </ul>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main">
            <h2>Explore Our Courses</h2>
            <p>
                VCampus College offers a wide range of skill-based certification programs
                across agriculture, beauty & wellness, food processing, mechanical,
                electrical and technical domains. These programs are designed with
                hands-on training and industry standards.
            </p>

            <div class="cards" id="courseCards">
                <!-- Cards will dynamically render here -->
            </div>
            <div id="pagination" class="pagination"></div>
        </div>
        
    </div>

    <script>

const courses = [
    {
        name: "Florist",
        desc: "Professional floral design, bouquet preparation and flower business skills.",
        img: "https://images.unsplash.com/photo-1492724441997-5dc865305da7",
        url: "http://localhost/vcampusventures.com/courselist/florist"
    },
    {
        name: "Interior Landscaper",
        desc: "Design and maintain aesthetic indoor gardens and green spaces.",
        img: "https://images.unsplash.com/photo-1501004318641-b39e6451bec6",
        url: "http://localhost/vcampusventures.com/courselist/florist"
    },
    {
        name: "Senior Beauty Therapist",
        desc: "Advanced skincare, beauty treatments and salon management training.",
        img: "https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9"
    },
    {
        name: "Assistant Hair Dresser & Stylist",
        desc: "Hair cutting, styling, coloring and professional salon assistance skills.",
        img: "https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9"
    },
    {
        name: "Fitter – Mechanical Assembly",
        desc: "Mechanical equipment assembly and maintenance training.",
        img: "https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0"
    },
    {
        name: "HVAC Technician",
        desc: "Heating, ventilation & air-conditioning servicing skills.",
        img: "https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc"
    },
    {
        name: "Hydroponics Technician",
        desc: "Learn soil-less farming techniques and greenhouse systems.",
        img: "https://images.unsplash.com/photo-1589927986089-35812388d1b4"
    },
    {
        name: "Precision Farming Technician",
        desc: "Smart agriculture using GPS, drones and data systems.",
        img: "https://images.unsplash.com/photo-1500382017468-9049fed747ef"
    }
];

const searchInput = document.getElementById("searchCourse");
const sortOrderSelect = document.getElementById("sortOrder");
const courseCards = document.getElementById("courseCards");
const pagination = document.getElementById("pagination");

let currentPage = 1;
const itemsPerPage = 6;
let filteredCourses = [...courses];

function renderCards() {

    courseCards.innerHTML = "";

    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const paginatedCourses = filteredCourses.slice(start, end);

    paginatedCourses.forEach(course => {
        const card = document.createElement("div");
        card.classList.add("card");
        card.innerHTML = `
            <img src="${course.img}" alt="${course.name}">
            <div class="card-content">
                <h3>${course.name}</h3>
                <p>${course.desc}</p>
                <div class="meta">
                    <div class="price">Free</div>
                    <div class="rating">⭐ 4.5</div>
                </div>
                <a href="${course.url}" class="btn">View Details</a>
            </div>
        `;
        courseCards.appendChild(card);
    });

    renderPagination();
}

function renderPagination() {

    pagination.innerHTML = "";

    const totalPages = Math.ceil(filteredCourses.length / itemsPerPage);

    for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement("button");
        btn.textContent = i;

        if (i === currentPage) {
            btn.classList.add("active");
        }

        btn.addEventListener("click", () => {
            currentPage = i;
            renderCards();
        });

        pagination.appendChild(btn);
    }
}

function filterCourses() {
    const query = searchInput.value.toLowerCase();

    filteredCourses = courses.filter(course =>
        course.name.toLowerCase().includes(query)
    );

    currentPage = 1;
    renderCards();
}

function sortCourses(order) {
    filteredCourses.sort((a, b) => {
        return order === "asc"
            ? a.name.localeCompare(b.name)
            : b.name.localeCompare(a.name);
    });

    currentPage = 1;
    renderCards();
}

/* Initial Load */
renderCards();

/* Events */
searchInput.addEventListener("input", filterCourses);
sortOrderSelect.addEventListener("change", (e) => sortCourses(e.target.value));

</script>
</body>
</html>