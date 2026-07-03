<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Future Space UI</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    overflow: hidden;
    background: radial-gradient(circle at bottom, #020111, #000000 80%);
    font-family: 'Orbitron', sans-serif;
    color: #00f7ff;
}

/* 🌌 Milky Way Glow */
body::before {
    content: "";
    position: absolute;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1), transparent 60%);
    animation: galaxy 60s linear infinite;
}

@keyframes galaxy {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* ⭐ Stars */
.star {
    position: absolute;
    background: white;
    border-radius: 50%;
    animation: twinkle 2s infinite alternate;
}

@keyframes twinkle {
    from { opacity: 0.2; }
    to { opacity: 1; }
}

/* 🌙 Moon */
.moon {
    position: absolute;
    top: 80px;
    right: 100px;
    width: 100px;
    height: 100px;
    background: radial-gradient(circle, #fff, #ccc);
    border-radius: 50%;
    box-shadow: 0 0 40px #fff;
}

/* 🪐 Planet */
.planet {
    position: absolute;
    bottom: 80px;
    left: 100px;
    width: 120px;
    height: 120px;
    background: radial-gradient(circle, #00f7ff, #003344);
    border-radius: 50%;
    box-shadow: 0 0 30px #00f7ff;
}

/* Orbit ring */
.orbit {
    position: absolute;
    width: 200px;
    height: 200px;
    border: 1px solid rgba(0,255,255,0.2);
    border-radius: 50%;
    top: -40px;
    left: -40px;
    animation: rotate 10s linear infinite;
}

.orbit::before {
    content: "";
    position: absolute;
    width: 10px;
    height: 10px;
    background: #00f7ff;
    border-radius: 50%;
    top: 0;
    left: 50%;
}

/* Rotation */
@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Center Content */
.container {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

/* Futuristic Text */
h1 {
    font-size: 4rem;
    text-transform: uppercase;
    letter-spacing: 5px;
    text-shadow: 0 0 10px #00f7ff,
                 0 0 20px #00f7ff,
                 0 0 40px #00f7ff;
    animation: glow 2s infinite alternate;
}

@keyframes glow {
    from { text-shadow: 0 0 10px #00f7ff; }
    to { text-shadow: 0 0 30px #ff00c8; }
}

p {
    margin-top: 15px;
    color: #aaa;
}

/* Button */
.btn {
    margin-top: 25px;
    padding: 12px 30px;
    border: 2px solid #00f7ff;
    color: #00f7ff;
    text-decoration: none;
    transition: 0.3s;
}

.btn:hover {
    background: #00f7ff;
    color: #000;
    box-shadow: 0 0 20px #00f7ff;
}
</style>
</head>

<body>

<!-- 🌙 Moon -->
<div class="moon"></div>

<!-- 🪐 Planet -->
<div class="planet">
    <div class="orbit"></div>
</div>

<!-- 🚀 Content -->
<div class="container">
    <h1>Welcome to the Future</h1>
    <p>Exploring the universe of design</p>
    <a href="#" class="btn">Enter Space</a>
</div>

<script>
// ⭐ Generate Stars
for (let i = 0; i < 150; i++) {
    let star = document.createElement("div");
    star.classList.add("star");

    let size = Math.random() * 2;
    star.style.width = size + "px";
    star.style.height = size + "px";

    star.style.top = Math.random() * 100 + "vh";
    star.style.left = Math.random() * 100 + "vw";

    star.style.animationDuration = (Math.random() * 2 + 1) + "s";

    document.body.appendChild(star);
}
</script>

</body>
</html>
