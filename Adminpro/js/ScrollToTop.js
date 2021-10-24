const ScrollToTop = document.querySelector("#btnScrollToTop");

ScrollToTop.addEventListener("click", function () {
	window.scrollTo({
		top: 0,
		left: 0,
		behavior: "smooth"


	});
})