/**
 * Elements
 */

const tabsSections = document.querySelectorAll(".tabs-with-content");
const tabsNavBtns = document.querySelectorAll(".tabs-with-content nav .btn");


/**
 * Init
 */

tabsSections.forEach((section) => {
	section.querySelector("nav .btn:first-child").classList.add("active");

	section.querySelectorAll(".tab-content:nth-child(n + 2)").forEach((tabContent) => {
		tabContent.style.display = "none";
	});
});


/**
 * Change
 */

tabsNavBtns.forEach((btn) => {
	btn.addEventListener("click", (e) => {
		if (btn.classList.contains("active")) {
			return;
		}

		[...btn.parentNode.children].forEach((sibling) => sibling.classList.remove("active"));
		btn.classList.add("active");

		const tab = document.querySelector(btn.dataset.tab);
		[...tab.parentNode.children].forEach((sibling) => sibling.style.display = "none");
		tab.style.display = "";
	});
});
