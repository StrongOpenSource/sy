

function ready(fn) {
	if (document.readyState != 'loading') {
		fn()
	} else {
		document.addEventListener('DOMContentLoaded', fn)
	}
}
ready(() => {
	document.querySelectorAll('.b-menu')
		.forEach(link => {
			link.addEventListener('click', event => {
				document.querySelector('.menu')
					.classList.toggle("active")
				document.querySelector('.search')
					.classList.remove('active')
			})
		});
	document.querySelectorAll('.b-search')
		.forEach(link => {
			link.addEventListener('click', event => {
				document.querySelector('.search')
					.classList.toggle("active")
				document.querySelector('.menu')
					.classList.remove('active')
			})
		})
})