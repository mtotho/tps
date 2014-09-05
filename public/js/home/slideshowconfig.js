var mygallery=new fadeSlideShow({
	wrapperid: "quoteSlideshow", //ID of blank DIV on page to house Slideshow
	dimensions: [420, 30], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["/public/images/home/quotes/quoteOne.png"],
		["/public/images/home/quotes/quoteTwo.png"],
		["/public/images/home/quotes/quoteThree.png"],
		["/public/images/home/quotes/quoteFour.png"],
		["/public/images/home/quotes/quoteFive.png"] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:3000, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})
