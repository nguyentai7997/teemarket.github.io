/*!
 * Remark Material (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */

!function(global,factory){if("function"==typeof define&&define.amd)define("/Plugin/bootstrap-tokenfield",["exports","Plugin"],factory);else if("undefined"!=typeof exports)factory(exports,require("Plugin"));else{var mod={exports:{}};factory(mod.exports,global.Plugin),global.PluginBootstrapTokenfield=mod.exports}}(this,function(exports,_Plugin2){"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var _Plugin3=babelHelpers.interopRequireDefault(_Plugin2),Tokenfield=function(_Plugin){function Tokenfield(){return babelHelpers.classCallCheck(this,Tokenfield),babelHelpers.possibleConstructorReturn(this,(Tokenfield.__proto__||Object.getPrototypeOf(Tokenfield)).apply(this,arguments))}return babelHelpers.inherits(Tokenfield,_Plugin),babelHelpers.createClass(Tokenfield,[{key:"getName",value:function(){return"tokenfield"}}],[{key:"getDefaults",value:function(){return{}}}]),Tokenfield}(_Plugin3.default);_Plugin3.default.register("tokenfield",Tokenfield),exports.default=Tokenfield});