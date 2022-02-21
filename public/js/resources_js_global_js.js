(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_global_js"],{

/***/ "./resources/js/global.js":
/*!********************************!*\
  !*** ./resources/js/global.js ***!
  \********************************/
/***/ (() => {

var tooltipTriggerList = [].slice.call($('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap5.Tooltip(tooltipTriggerEl);
});
var popoverTriggerList = [].slice.call($('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap5.Popover(popoverTriggerEl);
});

/***/ })

}]);