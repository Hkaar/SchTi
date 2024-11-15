import gsap from "gsap";

export function setupAnimations() {
    gsap.fromTo(
        '.slide-up',
        {
            y: 50, 
            opacity: 0, 
            zIndex: 30, 
        },
        {
            y: 0,
            opacity: 1, 
            zIndex: 0,
            duration: 2, 
            scrollTrigger: {
                trigger: '.slide-up', 
                start: "top bottom",
                end: "top top",
                once: true, 
            },
        }
    );

    gsap.fromTo(
        ".slide-left",
        {
            x: -50,
            opacity: 0,
            zIndex: 30,
        },
        {
            x: 0,
            opacity: 1, 
            zIndex: 0,
            duration: 2, 
            scrollTrigger: {
                trigger: '.slide-left', 
                start: "top bottom",
                end: "top top",
                once: true, 
            },
        },
    )

    gsap.fromTo(
        ".slide-right",
        {
            x: 50,
            opacity: 0,
            zIndex: 30,
        },
        {
            x: 0,
            opacity: 1, 
            zIndex: 0,
            duration: 2, 
            scrollTrigger: {
                trigger: '.slide-right', 
                start: "top bottom",
                end: "top top",
                once: true, 
            },
        },
    )
}
