document.addEventListener("DOMContentLoaded", () => {
    const el = document.getElementById("typewriter");

    if (!el) return;

    const texts = [
        "Junior Front-End Developer",
        "Aspiring Full-Stack Laravel Developer",
        "Responsive Web Designer",
        "Laravel & PHP Developer",
        "Creative Web Developer",
    ];

    let i = 0;
    let char = 0;
    let deleting = false;

    function loop() {
        const current = texts[i];

        if (deleting) {
            char--;
        } else {
            char++;
        }

        char = Math.max(0, char);
        el.textContent = current.substring(0, char);

        let speed = deleting ? 40 : 90;

        // finished typing
        if (!deleting && char === current.length) {
            speed = 1200;
            deleting = true;
        }

        // finished deleting
        if (deleting && char === 0) {
            deleting = false;
            i = (i + 1) % texts.length;
            speed = 300;
        }

        setTimeout(loop, speed);
    }

    loop();
});
