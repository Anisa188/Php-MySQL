

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: #f8f5ed;
    color: #263d32;
}

/* HEADER */
header {
    background: #164b3b;
    color: white;
    text-align: center;
    padding: 35px 15px;
}

header h1 {
    font-size: 38px;
    letter-spacing: 4px;
}

header p {
    color: #c9e8d7;
    margin-top: 8px;
}

/* NAVIGATION */
nav {
    background: #245f4b;
    padding: 18px;
    text-align: center;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 18px;
    font-weight: 600;
}

nav a:hover {
    color: #b8e6c9;
}

/* HERO SECTION */
.hero {
    min-height: 430px;
    background:
    linear-gradient(rgba(0,0,0,.35), rgba(0,0,0,.35)),
    url('https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=1600')
    center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 30px;
}

.hero h2 {
    font-size: 48px;
    margin-bottom: 15px;
}

.hero p {
    font-size: 18px;
}

/* CONTAINER */
.container {
    width: 90%;
    max-width: 1150px;
    margin: 45px auto;
}

h2 {
    color: #174c3c;
    margin-bottom: 25px;
}

/* PRODUCTS */
.products {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 25px;
}

.product {
    background: white;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0,0,0,.08);
    transition: .3s;
    text-align: center;
    padding-bottom: 20px;
}

.product:hover {
    transform: translateY(-8px);
}

.product img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.product h3 {
    color: #174c3c;
    margin: 15px;
}

.product p {
    padding: 0 15px;
}

.price {
    color: #26835c;
    font-size: 22px;
    font-weight: bold;
    margin: 12px;
}

/* BUTTONS */
button, .btn, input[type="submit"] {
    display: inline-block;
    background: #286b55;
    color: white;
    border: none;
    padding: 13px 24px;
    border-radius: 30px;
    text-decoration: none;
    cursor: pointer;
    font-size: 15px;
    transition: .3s;
}

button:hover, .btn:hover,
input[type="submit"]:hover {
    background: #174c3c;
}

/* FORMS */
form {
    background: white;
    padding: 30px;
    border-radius: 18px;
    max-width: 600px;
    margin: 30px auto;
    box-shadow: 0 5px 20px rgba(0,0,0,.08);
}

input, textarea, select {
    width: 100%;
    padding: 14px;
    margin: 10px 0 20px;
    border: 1px solid #c9ddcf;
    border-radius: 9px;
    font-family: inherit;
}

input:focus, textarea:focus {
    outline: 2px solid #91c6a5;
}

/* TABLE */
table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 12px;
    overflow: hidden;
}

th {
    background: #245f4b;
    color: white;
}

th, td {
    padding: 14px;
    text-align: center;
    border-bottom: 1px solid #eee;
}

/* FOOTER */
footer {
    background: #164b3b;
    color: white;
    text-align: center;
    padding: 25px;
    margin-top: 60px;
}

/* MOBILE */
@media(max-width: 650px) {
    header h1 {
        font-size: 27px;
    }

    .hero h2 {
        font-size: 32px;
    }

    nav a {
        display: inline-block;
        margin: 7px;
    }

    .container {
        width: 95%;
    }
}
