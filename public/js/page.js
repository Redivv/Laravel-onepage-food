/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/page.js":
/*!******************************!*\
  !*** ./resources/js/page.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  main();
  smoothScroll();
  ajax;
});

function main() {
  var topofDiv = $("#header").offset().top; //gets offset of header

  var height = $("#header").outerHeight();
  var navPresence = false;
  var contactActive = false;

  if ($(window).scrollTop() > topofDiv + height && !navPresence) {
    $('#navigation').animate({
      top: "+=50vh"
    }, 500);
    navPresence = true;
  }

  $(window).scroll(function () {
    if ($(window).scrollTop() > topofDiv + height && !navPresence) {
      $('#navigation').animate({
        top: "+=50vh"
      }, 500);
      navPresence = true;
    } else if ($(window).scrollTop() <= topofDiv + height && navPresence) {
      $('#navigation').animate({
        top: "-=50vh"
      }, 500);
      navPresence = true;
      navPresence = false;
    }

    if ($(window).scrollTop() + $(window).height() > $(document).height() - 100 && !contactActive) {
      $('.nav-item').removeClass('active');
      $('.nav-item[href="#contact"]').addClass('active');
      contactActive = true;
    }

    if ($(window).scrollTop() + $(window).height() <= $(document).height() - 100 && contactActive) {
      $('.nav-item').removeClass('active');
      $('.nav-item[href="#about"]').addClass('active');
      contactActive = false;
    }
  });
  $('#productModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal

    var title = button.data('product');
    var htmlSpinner = '<div class="spinnerBox text-center">' + '<div class="spinner-border" role="status">' + '<span class="sr-only">Loading...</span>' + '</div>' + '</div>';
    var modal = $(this);
    modal.find('.modal-title').html(title);
    modal.find('.modal-body').html(htmlSpinner);
    var url = baseUrl + "/getProductDesc";
    var request = $.ajax({
      method: 'get',
      url: url,
      data: {
        data: title
      }
    });
    request.done(function (response) {
      if (response.status === 'success') {
        alert('benizd');
        modal.find('.modal-body').html('<p>Beniz</p>');
      }
    });
    request.fail(function (xhr) {
      alert(xhr.responseJSON.message);
    });
  });
  $('.productsIco>.productPlusIcon').on('click', function () {
    var selectedIcon;
    var selectedItem;

    if ($(this).parent().hasClass('productsMainItemImage')) {
      selectedIcon = 'fas fa-book';
      selectedItem = $(this).parent().text().trim();
    } else {
      selectedIcon = $(this).next().attr('class');
      selectedItem = $(this).parent().next().html().trim();
    }

    var selectedItem_class = selectedItem.replace(/\s+/g, '-').toLowerCase();

    if ($(this).parent().hasClass('active')) {
      $(this).attr('class', 'productPlusIcon fas fa-plus');
      $(this).parent().removeClass('active');
      $('.' + selectedItem_class).remove();
    } else {
      $(this).parent().addClass('active');
      $(this).attr('class', 'productPlusIcon fas fa-minus');
      var html = '<div class="' + selectedItem_class + ' col-md-3 contactSelectedItem selectedItem">' + '<div>' + '<i class="' + selectedIcon + '"></i>' + '<div class="contactSelectedItemDesc">' + selectedItem + '</div>' + '</div>' + '</div>';
      $('.contactSelectedItems').append(html);
      html = '<input class="selectedItem ' + selectedItem_class + '" type="hidden" value="' + selectedItem + '" name="selectedItems[]">';
      $('#contactForm').append(html);
    }
  });
  $('.productsAllBtn').on('click', function () {
    $('.productsIco').removeClass('active');
    $('.selectedItem').remove();
    $('.productPlusIcon').attr('class', 'productPlusIcon fas fa-minus');
    $('.productsIco').addClass('active');
    var html = '';
    var html2 = '';
    $('i.productIcon').each(function () {
      if ($(this).parent().hasClass('productsMainItemImage')) {
        selectedIcon = 'fas fa-book';
        selectedItem = $(this).parent().text().trim();
      } else {
        selectedIcon = $(this).attr('class');
        selectedItem = $(this).parent().next().html().trim();
      }

      var selectedItem_class = selectedItem.replace(/\s+/g, '-').toLowerCase();
      html += '<div class="' + selectedItem_class + ' col-md-3 contactSelectedItem selectedItem">' + '<div>' + '<i class="' + selectedIcon + '"></i>' + '<div class="contactSelectedItemDesc">' + selectedItem + '</div>' + '</div>' + '</div>';
      html2 += '<input class="selectedItem ' + selectedItem_class + '" type="hidden" value="' + selectedItem + '" name="selectedItems[]">';
    });
    $('.contactSelectedItems').append(html);
    $('#contactForm').append(html2);
  });
  $('.productsResetBtn').on('click', function () {
    $('.productPlusIcon').attr('class', 'productPlusIcon fas fa-plus');
    $('.productsIco').removeClass('active');
    $('.selectedItem').remove();
  });
}

function smoothScroll() {
  $('a[href*="#"]') // Remove links that don't actually link to anything
  .not('[href="#"]').not('[href="#0"]').click(function (event) {
    // On-page links
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); // Does a scroll target exist?

      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 800, function () {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();

          if ($target.is(":focus")) {
            // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable

            $target.focus(); // Set focus again
          }

          ;
        });
      }
    }
  });
}

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/page.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\Projects\HaHaHACCP\resources\js\page.js */"./resources/js/page.js");


/***/ })

/******/ });