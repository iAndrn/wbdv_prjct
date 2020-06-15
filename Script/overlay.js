function fadeOut(){
		TweenMax.to(".myBtn", 1,{
			y: -100,
			opacity: 0
		});

		TweenMax.to(".screen", 2, {
			y: -500,
			opacity: 0,
			ease: Power2.easeInOut,
			delay: 2
		});

		TweenMax.from(".overlay", 2, {
			ease: Power2.easeInOut
		});

		TweenMax.to(".overlay", 2, {
			delay: 2.6,
			top: "-140%",
			ease: Expo.easeInOut
		});


		TweenMax.to(".overlay-2", 2, {
			delay: 3,
			top: "-150%",
			ease: Expo.easeInOut
		});

		TweenMax.from(".cntnt", 2, {
			delay: 3.2,
			opacity: 0,
			ease: Power2.easeInOut,

		});

		TweenMax.to(".cntnt", 2, {
			opacity: 1,
			y: -300,
			delay: 3.2,
			ease: Power2.easeInOut
		});
	}



$(".screen").lettering();