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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

var projects = false;
var contact = false;
var navElementProjects = document.getElementById("nav-projects");
var projectElement = document.getElementById("projects");
var navElementContact = document.getElementById("nav-contact");
var contactElement = document.getElementById("contact");
navElementProjects.addEventListener("click", function () {
  projects ? setElements("p", "100vh", false, "My projects") : setElements("p", "0vh", true, "Close");
});
navElementContact.addEventListener("click", function () {
  contact ? setElements("c", "100vh", false, "Contact") : setElements("c", "0vh", true, "Close");
});

var setElements = function setElements(e, margin, p, text) {
  if (e === "p") {
    projectElement.style.marginTop = "".concat(margin);
    projectElement.style.zIndex = "10";
    projects = p;
    navElementProjects.innerText = "".concat(text);

    if (contact) {
      contactElement.style.marginTop = "100vh";
      contactElement.style.zIndex = "1";
      contact = false;
      navElementContact.innerText = "Contact";
    }
  } else {
    contactElement.style.marginTop = "".concat(margin);
    contactElement.style.zIndex = "10";
    contact = p;
    navElementContact.innerText = "".concat(text);

    if (projects) {
      projectElement.style.marginTop = "100vh";
      projectElement.style.zIndex = "1";
      projects = false;
      navElementProjects.innerText = "My projects";
    }
  }
};

var projectsMargin = function projectsMargin() {
  var pageHeight = document.body.scrollHeight;
  var element = document.getElementById('projects-content');
  var elementHeight = element.clientHeight;
  console.log(pageHeight, elementHeight);
  var elementMargin = (pageHeight - elementHeight) / 2;
  element.style.paddingTop = "".concat(elementMargin, "px");
};

window.onload = function () {
  var landingText = document.getElementsByClassName("landing__line-text");

  for (var i = 0; i < landingText.length; i++) {
    landingText.item(i).classList.add("visible");
  }

  projectsMargin();
};

window.addEventListener('resize', projectsMargin);

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\bobme\Documents\Personal Website\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\bobme\Documents\Personal Website\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });