document.querySelector('.nav-toggle').addEventListener('click', function(){
  this.classList.toggle('active');
  document.querySelector('.navigation').classList.toggle('toggled');
});
document.querySelector('.search-toggle').addEventListener('click', function(){
  this.classList.toggle('active');
  document.querySelector('.search-form').classList.toggle('toggled');
});

if (document.querySelectorAll('.dropdown').length) {
  var dropdowns = document.querySelectorAll('.dropdown-toggle');
  var dropdownContainers = document.querySelectorAll('.dropdown-container');
  dropdowns.forEach(function(dropdown){
    dropdown.addEventListener('click', function(event){
      event.preventDefault();
      event.stopPropagation();
      this.parentNode.querySelector('.dropdown-container').classList.toggle('toggled');
    });
  });
  window.onclick = function(event) {
    if (!event.target.closest('.dropdown-container')) {
      dropdownContainers.forEach(function(openDropdown){
        if (openDropdown.classList.contains('toggled')) {
          openDropdown.classList.remove('toggled');
        }
      });
    }
  }
}

if (document.querySelector('.bookmark')) {
  document.querySelector('.bookmark').addEventListener('click', function(event){
    event.preventDefault();
    alert('按下 ' + (navigator.userAgent.toLowerCase().indexOf('mac') != - 1 ? 'Command/Cmd' : 'CTRL') + ' + D 将此页面添加为书签');
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

if (document.querySelectorAll('#filter').length) {
  document.querySelector('#filter').addEventListener('keyup', filterNames);
  function filterNames(e) {
    if (e.target.value.length > 0) {
      var text = e.target.value.toLowerCase();
      document.querySelectorAll('#filter-list li').forEach(function(name){
        name.style.display = 'none';
        var item = name.textContent;
        if (item.toLowerCase().indexOf(text) != -1 && text.length > 0) {
          name.style.display = 'block';
        } else {
          name.style.display = 'none';
        }
      });
    } else {
      document.querySelectorAll('#filter-list li').forEach(function(name){
        name.style.display = 'block';
      });
    }
  }
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
        url: "php/form-process.php",
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