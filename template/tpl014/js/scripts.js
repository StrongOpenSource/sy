
if (document.querySelectorAll('.hamburger').length) {
	document.querySelector('.hamburger').addEventListener('click', function(){
		document.querySelector('.header_a').classList.toggle('show');
  });
}


if (document.querySelectorAll('.button_search').length) {
	document.querySelector('.button_search').addEventListener('click', function(){
		document.querySelector('.wrap').classList.toggle('view_search');
  });
}






if (document.querySelectorAll('.toggle-nav').length) {
  document.querySelector('.toggle-nav').addEventListener('click', function(){
    document.querySelector('.header').classList.remove('header-tall-lang');
    document.querySelector('.languages').classList.remove('toggled');
    document.querySelector('.header').classList.toggle('header-tall-nav');
    document.querySelector('.secondary-nav').classList.toggle('toggled');
    if (document.querySelectorAll('.navigation-internal').length) {
      document.querySelector('.navigation-internal').classList.toggle('toggled');
    }
  });
}


if (document.querySelectorAll('.toggle-lang').length) {
  document.querySelector('.toggle-lang').addEventListener('click', function(){
    document.querySelector('.header').classList.remove('header-tall-nav');
    document.querySelector('.secondary-nav').classList.remove('toggled');
    document.querySelector('.header').classList.toggle('header-tall-lang');
    document.querySelector('.languages').classList.toggle('toggled');
  });
}
if (document.querySelectorAll('.toggle-fav').length) {
  document.querySelector('.toggle-fav').addEventListener('click', function(event) {
    event.preventDefault();
    alert('按下 ' + (navigator.userAgent.toLowerCase().indexOf('mac') != - 1 ? 'Command/Cmd' : 'CTRL') + ' + D 将本站添加收藏夹.');
  });
}
if (document.querySelectorAll('.btn-up').length) {
  var scrollToTopBtn = document.querySelector('.btn-up');
  var rootElement = document.querySelector('html');
  function handleScroll() {
    var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
    if ((rootElement.scrollTop / scrollTotal ) > 0.15 ) {
      scrollToTopBtn.classList.add('toggled');
    } else {
      scrollToTopBtn.classList.remove('toggled');
    }
  }
  document.addEventListener('scroll', handleScroll);
}
if (document.querySelectorAll('.dropdownab').length) {
  var dropdowns = document.querySelectorAll('.abbtn1');
  var dropdownContainers = document.querySelectorAll('.abform-wrapper1');
  dropdowns.forEach(function(dropdown){
    dropdown.addEventListener('click', function(event){
      event.preventDefault();
      event.stopPropagation();
      this.parentNode.querySelector('.abform-wrapper1').classList.toggle('toggled');
    });
  });
  document.querySelector('.abclose1').addEventListener('click', function(event){
    event.preventDefault();
    document.querySelector('.abform-wrapper1').classList.remove('toggled');
  });
  window.onclick = function(event) {
    if (!event.target.closest('.abform-wrapper1')) {
      dropdownContainers.forEach(function(openDropdown){
        if (openDropdown.classList.contains('toggled')) {
          openDropdown.classList.remove('toggled');
        }
      });
    }
  }
}

	
	
$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "error!");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

function submitForm(){
    // Initiate Variables With Form Content
	var email = $("#email").val();
	var message = $("#message").val();
	var urlab = $("#urlab").val();

    $.ajax({
        type: "POST",
        url: "/php/form-process.php",
        data: "&email=" + email + "&message=" + message + "&urlab=" + urlab,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message send!")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake1').one('shake2', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "text-center text-success";
    } else {
        var msgClasses = "text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}