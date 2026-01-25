(() => {
    const cursor = document.getElementById('bubbleCursor');
    if (!cursor) return;

    let visible = false;
    let x = 0, y = 0;            // target position
    let cx = 0, cy = 0;          // current rendered position
    const speed = 0.15;          // follow‑ease (0‑1)

    /* Track pointer only on devices with a mouse */
    const hasFinePointer = window.matchMedia('(pointer:fine)').matches;

    if (hasFinePointer) {
        document.addEventListener('mousemove', e => {
            x = e.clientX; y = e.clientY;
            if (!visible) {
                visible = true;
                cursor.style.opacity = 0.9;
            }
        });
    }

    /* Animation loop – lerp towards mouse */
    function render() {
        cx += (x - cx) * speed;
        cy += (y - cy) * speed;
        cursor.style.transform = `translate(${cx}px,${cy}px) translate(-50%,-50%)`;
        requestAnimationFrame(render);
    }
    render();
})();