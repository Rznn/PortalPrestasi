/*! For license information please see hs-scrollspy.js.LICENSE.txt */
!function(e,t){if("object"==typeof exports&&"object"==typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var r=t();for(var o in r)("object"==typeof exports?exports:e)[o]=r[o]}}(self,(function(){return(()=>{"use strict";var e={765:(e,t,r)=>{function o(e,t){for(var r=0;r<t.length;r++){var o=t[r];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}r.d(t,{Z:()=>n});var n=function(){function e(t,r){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.$collection=[],this.selector=t,this.config=r,this.events={}}var t,r;return t=e,r=[{key:"_fireEvent",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;this.events.hasOwnProperty(e)&&this.events[e](t)}},{key:"_dispatch",value:function(e,t){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,o=new CustomEvent(e,{detail:{payload:r},bubbles:!0,cancelable:!0,composed:!1});t.dispatchEvent(o)}},{key:"on",value:function(e,t){this.events[e]=t}},{key:"afterTransition",value:function(e,t){"all 0s ease 0s"!==window.getComputedStyle(e,null).getPropertyValue("transition")?e.addEventListener("transitionend",(function r(){t(),e.removeEventListener("transitionend",r,!0)}),!0):t()}},{key:"getClassProperty",value:function(e,t){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"",o=(window.getComputedStyle(e).getPropertyValue(t)||r).replace(" ","");return o}}],r&&o(t.prototype,r),Object.defineProperty(t,"prototype",{writable:!1}),e}()}},t={};function r(o){var n=t[o];if(void 0!==n)return n.exports;var i=t[o]={exports:{}};return e[o](i,i.exports,r),i.exports}r.d=(e,t)=>{for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var o={};return(()=>{function e(t){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(t)}function t(e,t){for(var r=0;r<t.length;r++){var o=t[r];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function n(e,t){return n=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},n(e,t)}function i(t,r){if(r&&("object"===e(r)||"function"==typeof r))return r;if(void 0!==r)throw new TypeError("Derived constructors may only return object or undefined");return function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(t)}function l(e){return l=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},l(e)}r.r(o);var c=function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&n(e,t)}(u,e);var r,o,c,s,a=(c=u,s=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=l(c);if(s){var r=l(this).constructor;e=Reflect.construct(t,arguments,r)}else e=t.apply(this,arguments);return i(this,e)});function u(){var e;return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,u),(e=a.call(this,"[data-hs-scrollspy] ")).activeSection=null,e}return r=u,(o=[{key:"init",value:function(){var e=this;document.querySelectorAll(this.selector).forEach((function(t){var r=document.querySelector(t.getAttribute("data-hs-scrollspy")),o=t.querySelectorAll("[href]"),n=r.children,i=t.getAttribute("data-hs-scrollspy-scrollable-parent")?document.querySelector(t.getAttribute("data-hs-scrollspy-scrollable-parent")):document;Array.from(n).forEach((function(l){l.getAttribute("id")&&i.addEventListener("scroll",(function(i){return e._update({$scrollspyEl:t,$scrollspyContentEl:r,links:o,$sectionEl:l,sections:n,ev:i})}))})),o.forEach((function(r){r.addEventListener("click",(function(o){o.preventDefault(),"javascript:;"!==r.getAttribute("href")&&e._scrollTo({$scrollspyEl:t,$scrollableEl:i,$link:r})}))}))}))}},{key:"_update",value:function(e){var t=e.ev,r=e.$scrollspyEl,o=(e.sections,e.links),n=e.$sectionEl,i=parseInt(this.getClassProperty(r,"--scrollspy-offset","0")),l=this.getClassProperty(n,"--scrollspy-offset")||i,c=t.target===document?0:parseInt(t.target.getBoundingClientRect().top),s=parseInt(n.getBoundingClientRect().top)-l-c,a=n.offsetHeight;if(s<=0&&s+a>0){if(this.activeSection===n)return;o.forEach((function(e){e.classList.remove("active")}));var u=r.querySelector('[href="#'.concat(n.getAttribute("id"),'"]'));if(u){u.classList.add("active");var f=u.closest("[data-hs-scrollspy-group]");if(f){var p=f.querySelector("[href]");p&&p.classList.add("active")}}this.activeSection=n}}},{key:"_scrollTo",value:function(e){var t=e.$scrollspyEl,r=e.$scrollableEl,o=e.$link,n=document.querySelector(o.getAttribute("href")),i=parseInt(this.getClassProperty(t,"--scrollspy-offset","0")),l=this.getClassProperty(n,"--scrollspy-offset")||i,c=r===document?0:r.offsetTop,s=n.offsetTop-l-c,a=r===document?window:r;this._fireEvent("scroll",t),this._dispatch("scroll.hs.scrollspy",t,t),window.history.replaceState(null,null,o.getAttribute("href")),a.scrollTo({top:s,left:0,behavior:"smooth"})}}])&&t(r.prototype,o),Object.defineProperty(r,"prototype",{writable:!1}),u}(r(765).Z);window.HSScrollspy=new c,document.addEventListener("load",window.HSScrollspy.init())})(),o})()}));