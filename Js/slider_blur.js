gsap.registerPlugin(ScrollTrigger);
gsap.to("#sliderSection", {
    scrollTrigger: { trigger: "#sliderSection", start: "top top", end: "bottom top", scrub: true },
    keyframes: [{ opacity: 1, y: 0, scale: 1 }, { opacity: .75, y: -50, scale: .97 }], ease: "none"
});
gsap.to(".blur-effect", {
    scrollTrigger: { trigger: "#sliderSection", start: "top top", end: "bottom top", scrub: true },
    keyframes: [{ filter: "blur(0)" }, { filter: "blur(5px)" }], ease: "none"
});