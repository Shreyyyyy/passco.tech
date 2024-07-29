gsap.registerPlugin(ScrollTrigger);

if (window.matchMedia("(min-width: 768px)").matches) {
  const reviews = gsap.utils.toArray(".review");

  reviews.forEach((review, index) => {
    const tween = gsap.to(review, {
      scrollTrigger: {
        trigger: review,
        start: () => `top bottom-=100`,
        end: () => `0%`,
        scrub: true,
        invalidateOnRefresh: true
      },
      ease: "none",
      scale: () => 1 - (reviews.length - index) * 0.025
    });

    ScrollTrigger.create({
      trigger: review,
      start: "top top",
      pin: true,
      pinSpacing: false,
      id: 'pin',
      end: '100%',
      invalidateOnRefresh: true,
    });
  });

}
