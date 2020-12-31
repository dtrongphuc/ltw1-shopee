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

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\resources\\js\\app.js: Unexpected token (3:0)\n\n\u001b[0m \u001b[90m 1 | \u001b[39mrequire(\u001b[32m\"./bootstrap\"\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 2 | \u001b[39mrequire(\u001b[32m\"./auth\"\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 3 | \u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<\u001b[39m \u001b[33mHEAD\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m   | \u001b[39m\u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 4 | \u001b[39mrequire(\u001b[32m\"./cart\"\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 5 | \u001b[39m\u001b[33m===\u001b[39m\u001b[33m===\u001b[39m\u001b[33m=\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 6 | \u001b[39mrequire(\u001b[32m\"./product\"\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n    at Parser._raise (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:748:17)\n    at Parser.raiseWithData (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:741:17)\n    at Parser.raise (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:735:17)\n    at Parser.unexpected (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:9097:16)\n    at Parser.parseExprAtom (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:10548:20)\n    at Parser.parseExprSubscripts (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:10122:23)\n    at Parser.parseUpdate (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:10102:21)\n    at Parser.parseMaybeUnary (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:10091:17)\n    at Parser.parseExprOps (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:9961:23)\n    at Parser.parseMaybeConditional (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:9935:23)\n    at Parser.parseMaybeAssign (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:9898:21)\n    at Parser.parseExpressionBase (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:9843:23)\n    at F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:9837:39\n    at Parser.allowInAnd (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:11515:16)\n    at Parser.parseExpression (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:9837:17)\n    at Parser.parseStatementContent (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:11781:23)\n    at Parser.parseStatement (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:11650:17)\n    at Parser.parseBlockOrModuleBlockBody (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:12232:25)\n    at Parser.parseBlockBody (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:12218:10)\n    at Parser.parseTopLevel (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:11581:10)\n    at Parser.parse (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:13392:10)\n    at parse (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\parser\\lib\\index.js:13445:38)\n    at parser (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\core\\lib\\parser\\index.js:54:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:99:38)\n    at normalizeFile.next (<anonymous>)\n    at run (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\core\\lib\\transformation\\index.js:31:50)\n    at run.next (<anonymous>)\n    at Function.transform (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\@babel\\core\\lib\\transform.js:27:41)\n    at transform.next (<anonymous>)\n    at step (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\gensync\\index.js:261:32)\n    at F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\gensync\\index.js:273:13\n    at async.call.result.err.err (F:\\2020-2021-HK1\\LTWeb 1\\Project\\ltw1-shopee\\node_modules\\gensync\\index.js:223:11)");

/***/ }),

/***/ 0:
/*!***********************************!*\
  !*** multi ./resources/js/app.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\2020-2021-HK1\LTWeb 1\Project\ltw1-shopee\resources\js\app.js */"./resources/js/app.js");


/***/ })

/******/ });