(function(_){var ba,ea,fa,ha,ia,ka,la,na,pa,va,wa,Ba,Da;ba=function(a){return function(){return _.aa[a].apply(this,arguments)}};ea=function(a,b){var c=_.k(b,ca,16);c&&_.m(c,12,!1)&&_.m(b,5,!1)&&da(a,{backgroundColor:"transparent",backgroundImage:"none"})};_.aa=[];fa="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)};ha="undefined"!=typeof window&&window===this?this:"undefined"!=typeof window.global&&null!=window.global?window.global:this;ia=function(){ia=function(){};ha.Symbol||(ha.Symbol=ka)};ka=function(){var a=0;return function(b){return"jscomp_symbol_"+(b||"")+a++}}();_.ma=function(){ia();var a=ha.Symbol.iterator;a||(a=ha.Symbol.iterator=ha.Symbol("iterator"));"function"!=typeof Array.prototype[a]&&fa(Array.prototype,a,{configurable:!0,writable:!0,value:function(){return la(this)}});_.ma=function(){}};la=function(a){var b=0;return na(function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}})};na=function(a){_.ma();a={next:a};a[ha.Symbol.iterator]=function(){return this};return a};_.oa=function(a){_.ma();var b=a[window.Symbol.iterator];return b?b.call(a):la(a)};pa=function(a){if(a){for(var b=ha,c=["Promise"],d=0;d<c.length-1;d++){var e=c[d];e in b||(b[e]={});b=b[e]}c=c[c.length-1];d=b[c];a=a(d);a!=d&&null!=a&&fa(b,c,{configurable:!0,writable:!0,value:a})}};pa(function(a){function b(){this.g=null}function c(a){return a instanceof e?a:new e(function(b){b(a)})}if(a)return a;b.prototype.l=function(a){null==this.g&&(this.g=[],this.v());this.g.push(a)};b.prototype.v=function(){var a=this;this.o(function(){a.B()})};var d=ha.setTimeout;b.prototype.o=function(a){d(a,0)};b.prototype.B=function(){for(;this.g&&this.g.length;){var a=this.g;this.g=[];for(var b=0;b<a.length;++b){var c=a[b];a[b]=null;try{c()}catch(p){this.A(p)}}}this.g=null};b.prototype.A=function(a){this.o(function(){throw a;})};var e=function(a){this.l=0;this.o=void 0;this.g=[];var b=this.v();try{a(b.resolve,b.reject)}catch(q){b.reject(q)}};e.prototype.v=function(){function a(a){return function(d){c||(c=!0,a.call(b,d))}}var b=this,c=!1;return{resolve:a(this.G),reject:a(this.A)}};e.prototype.G=function(a){if(a===this)this.A(new TypeError("A Promise cannot resolve to itself"));else if(a instanceof e)this.I(a);else{a:switch(typeof a){case "object":var b=null!=a;break a;case "function":b=!0;break a;default:b=!1}b?this.F(a):this.B(a)}};e.prototype.F=function(a){var b=void 0;try{b=a.then}catch(q){this.A(q);return}"function"==typeof b?this.K(b,a):this.B(a)};e.prototype.A=function(a){this.C(2,a)};e.prototype.B=function(a){this.C(1,a)};e.prototype.C=function(a,b){if(0!=this.l)throw Error("Cannot settle("+a+", "+b+"): Promise already settled in state"+this.l);this.l=a;this.o=b;this.D()};e.prototype.D=function(){if(null!=this.g){for(var a=0;a<this.g.length;++a)f.l(this.g[a]);this.g=null}};var f=new b;e.prototype.I=function(a){var b=this.v();a.na(b.resolve,b.reject)};e.prototype.K=function(a,b){var c=this.v();try{a.call(b,c.resolve,c.reject)}catch(p){c.reject(p)}};e.prototype.then=function(a,b){function c(a,b){return"function"==typeof a?function(b){try{d(a(b))}catch(Ca){f(Ca)}}:b}var d,f,g=new e(function(a,b){d=a;f=b});this.na(c(a,d),c(b,f));return g};e.prototype["catch"]=function(a){return this.then(void 0,a)};e.prototype.na=function(a,b){function c(){switch(d.l){case 1:a(d.o);break;case 2:b(d.o);break;default:throw Error("Unexpected state: "+d.l);}}var d=this;null==this.g?f.l(c):this.g.push(c)};e.resolve=c;e.reject=function(a){return new e(function(b,c){c(a)})};e.race=function(a){return new e(function(b,d){for(var e=_.oa(a),f=e.next();!f.done;f=e.next())c(f.value).na(b,d)})};e.all=function(a){var b=_.oa(a),d=b.next();return d.done?c([]):new e(function(a,e){function f(b){return function(c){g[b]=c;l--;0==l&&a(g)}}var g=[],l=0;do g.push(void 0),l++,c(d.value).na(f(g.length-1),e),d=b.next();while(!d.done)})};return e});var qa="function"==typeof Object.create?Object.create:function(a){var b=function(){};b.prototype=a;return new b},ra;if("function"==typeof Object.setPrototypeOf)ra=Object.setPrototypeOf;else{var sa;a:{var ta={a:!0},ua={};try{ua.__proto__=ta;sa=ua.a;break a}catch(a){}sa=!1}ra=sa?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}va=ra;wa=function(a,b){a.prototype=qa(b.prototype);a.prototype.constructor=a;if(va)va(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.X=b.prototype};_.n=this;_.r=function(a){return void 0!==a};_.u=function(a){return"string"==typeof a};_.x=function(a,b,c){a=a.split(".");c=c||_.n;a[0]in c||"undefined"==typeof c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)!a.length&&_.r(b)?c[d]=b:c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}};_.xa=function(){};_.ya=function(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==b&&"undefined"==typeof a.call)return"object";return b};_.za=function(a){return"array"==_.ya(a)};_.Aa=function(a){return"function"==_.ya(a)};Ba=function(a,b,c){return a.call.apply(a.bind,arguments)};Da=function(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}};_.y=function(a,b,c){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?_.y=Ba:_.y=Da;return _.y.apply(null,arguments)};_.z=function(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var b=c.slice();b.push.apply(b,arguments);return a.apply(this,b)}};_.A=Date.now||function(){return+new Date};_.B=function(a,b){function c(){}c.prototype=b.prototype;a.X=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.ac=function(a,c,f){for(var d=Array(arguments.length-2),e=2;e<arguments.length;e++)d[e-2]=arguments[e];return b.prototype[c].apply(a,d)}};var Ga;_.Ea=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if(_.u(a))return _.u(b)&&1==b.length?a.indexOf(b,0):-1;for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1};_.Fa=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=_.u(a)?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)};Ga=Array.prototype.filter?function(a,b){return Array.prototype.filter.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=[],e=0,f=_.u(a)?a.split(""):a,g=0;g<c;g++)if(g in f){var l=f[g];b.call(void 0,l,g,a)&&(d[e++]=l)}return d};_.Ha=Array.prototype.some?function(a,b){return Array.prototype.some.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=_.u(a)?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a))return!0;return!1};_.Ia=function(a,b){b=(0,_.Ea)(a,b);var c;(c=0<=b)&&Array.prototype.splice.call(a,b,1);return c};_.Ja=function(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]};_.Ka=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]};var La;a:{var Ma=_.n.navigator;if(Ma){var Na=Ma.userAgent;if(Na){La=Na;break a}}La=""}var C=function(a){return-1!=La.indexOf(a)};var Oa=function(){return C("iPhone")&&!C("iPod")&&!C("iPad")};var Pa=function(a){Pa[" "](a);return a};Pa[" "]=_.xa;_.Qa=function(a,b){try{return Pa(a[b]),!0}catch(c){}return!1};var Ta,Za,$a;_.Ra=C("Opera");_.Sa=C("Trident")||C("MSIE");Ta=C("Edge");_.Ua=C("Gecko")&&!(-1!=La.toLowerCase().indexOf("webkit")&&!C("Edge"))&&!(C("Trident")||C("MSIE"))&&!C("Edge");_.Va=-1!=La.toLowerCase().indexOf("webkit")&&!C("Edge");_.Wa=C("Android");_.Xa=Oa();_.Ya=C("iPad");Za=function(){var a=_.n.document;return a?a.documentMode:void 0};a:{var ab="",bb=function(){var a=La;if(_.Ua)return/rv:([^\);]+)(\)|;)/.exec(a);if(Ta)return/Edge\/([\d\.]+)/.exec(a);if(_.Sa)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(_.Va)return/WebKit\/(\S+)/.exec(a);if(_.Ra)return/(?:Version)[ \/]?(\S+)/.exec(a)}();bb&&(ab=bb?bb[1]:"");if(_.Sa){var cb=Za();if(null!=cb&&cb>(0,window.parseFloat)(ab)){$a=String(cb);break a}}$a=ab}_.db=$a;var fb=_.n.document;_.eb=fb&&_.Sa?Za()||("CSS1Compat"==fb.compatMode?(0,window.parseInt)(_.db,10):5):void 0;_.gb=Oa()||C("iPod");_.ib=C("iPad");_.jb=C("Android")&&!((C("Chrome")||C("CriOS"))&&!C("Edge")||C("Firefox")||C("Opera")||C("Silk"));var kb,lb,ob;_.D=function(){};kb="function"==typeof window.Uint8Array;_.E=function(a,b,c){a.g=null;b||(b=[]);a.C=void 0;a.v=-1;a.l=b;a:{if(a.l.length){b=a.l.length-1;var d=a.l[b];if(d&&"object"==typeof d&&!_.za(d)&&!(kb&&d instanceof window.Uint8Array)){a.A=b-a.v;a.o=d;break a}}a.A=Number.MAX_VALUE}a.B={};if(c)for(b=0;b<c.length;b++)if(d=c[b],d<a.A)d+=a.v,a.l[d]=a.l[d]||lb;else{var e=a.A+a.v;a.l[e]||(a.o=a.l[e]={});a.o[d]=a.o[d]||lb}};lb=[];_.nb=function(a,b){if(b<a.A){b+=a.v;var c=a.l[b];return c===lb?a.l[b]=[]:c}if(a.o)return c=a.o[b],c===lb?a.o[b]=[]:c};ob=function(a,b){if(b<a.A){b+=a.v;var c=a.l[b];return c===lb?a.l[b]=[]:c}c=a.o[b];return c===lb?a.o[b]=[]:c};_.m=function(a,b,c){a=_.nb(a,b);return null==a?c:a};_.k=function(a,b,c){a.g||(a.g={});if(!a.g[c]){var d=_.nb(a,c);d&&(a.g[c]=new b(d))}return a.g[c]};_.pb=function(a,b,c){a.g||(a.g={});if(!a.g[c]){for(var d=ob(a,c),e=[],f=0;f<d.length;f++)e[f]=new b(d[f]);a.g[c]=e}b=a.g[c];b==lb&&(b=a.g[c]=[]);return b};_.qb=function(a){if(a.g)for(var b in a.g){var c=a.g[b];if(_.za(c))for(var d=0;d<c.length;d++)c[d]&&_.qb(c[d]);else c&&_.qb(c)}return a.l};var sb=function(a){_.E(this,a,rb)},rb,ub;_.B(sb,_.D);rb=[1,23];ub=function(a){return _.pb(a,_.tb,1)};_.tb=function(a){_.E(this,a,vb)};_.B(_.tb,_.D);var vb=[20,33];_.tb.prototype.getType=function(){return _.m(this,1,0)};var ca=function(a){_.E(this,a,null)};_.B(ca,_.D);_.wb=function(a){_.E(this,a,null)};_.B(_.wb,_.D);var xb;xb={vb:0,Wb:1,Xb:45,Yb:46,Jb:48,URL:2,ob:3,eb:4,Vb:5,Pb:7,Bb:8,nb:9,Db:6,Gb:34,wb:13,fb:14,Cb:15,Eb:16,Fb:40,Tb:47,$b:29,sb:30,Ub:49,Kb:17,pb:18,ub:19,tb:20,ib:21,Mb:22,Rb:23,kb:24,Ob:25,Nb:26,lb:27,Lb:28,VIDEO:39,Zb:31,rb:32,jb:33,xb:35,Hb:36,gb:37,qb:38,Ib:42,Qb:43,Sb:44,yb:1E3,zb:1001,Ab:1002};_.yb=[16,47,49,18,27,28,39];var zb=function(a,b,c,d,e){c="&"+b+"="+c;var f=a.indexOf("&"+d+"=");c=0>f?a+c:a.substring(0,f)+c+a.substring(f);return 2E3<c.length?_.r(e)?zb(a,b,e,d,void 0):a:c};_.F=window.document;_.G=window;_.Bb=function(){this.g="";this.o=_.Ab};_.Bb.prototype.wa=!0;_.Bb.prototype.l=function(){return this.g};_.Bb.prototype.toString=function(){return"Const{"+this.g+"}"};_.Ab={};_.I=function(a){var b=new _.Bb;b.g=a;return b};_.I("");var Fb,Cb;_.Db=function(){this.g="";this.o=Cb};_.Db.prototype.wa=!0;_.Db.prototype.l=function(){return this.g};_.Eb=function(a){if(a instanceof _.Db&&a.constructor===_.Db&&a.o===Cb)return a.g;_.ya(a);return"type_error:SafeUrl"};Fb=/^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;_.Hb=function(a){if(a instanceof _.Db)return a;a=a.wa?a.l():String(a);Fb.test(a)||(a="about:invalid#zClosurez");return _.Gb(a)};Cb={};_.Gb=function(a){var b=new _.Db;b.g=a;return b};_.Gb("about:blank");var Ib=function(a,b){this.g=_.r(a)?a:0;this.l=_.r(b)?b:0};Ib.prototype.ceil=function(){this.g=Math.ceil(this.g);this.l=Math.ceil(this.l);return this};Ib.prototype.floor=function(){this.g=Math.floor(this.g);this.l=Math.floor(this.l);return this};Ib.prototype.round=function(){this.g=Math.round(this.g);this.l=Math.round(this.l);return this};var Jb=function(a){try{return!!a&&null!=a.location.href&&_.Qa(a,"foo")}catch(b){return!1}},Kb=function(a,b){if(a)for(var c in a)Object.prototype.hasOwnProperty.call(a,c)&&b.call(void 0,a[c],c,a)};_.J=function(a,b,c){a.addEventListener?a.addEventListener(b,c,void 0):a.attachEvent&&a.attachEvent("on"+b,c)};_.Lb=function(a,b,c){a.removeEventListener?a.removeEventListener(b,c,void 0):a.detachEvent&&a.detachEvent("on"+b,c)};_.Mb=function(a,b,c){a.google_image_requests||(a.google_image_requests=[]);var d=a.document.createElement("img");if(c){var e=function(a){c(a);_.Lb(d,"load",e);_.Lb(d,"error",e)};_.J(d,"load",e);_.J(d,"error",e)}d.src=b;a.google_image_requests.push(d)};var Nb,Ob,Pb,Qb,da;Nb=Object.prototype.hasOwnProperty;Ob=function(a,b){for(var c in a)Nb.call(a,c)&&b.call(void 0,a[c],c,a)};Pb=!!window.google_async_iframe_id;Qb=Pb&&window.parent||window;_.Rb=function(a){a.preventDefault?a.preventDefault():a.returnValue=!1};_.Sb=function(a,b,c){c=void 0===c?_.F:c;switch(a){case 2:return c.getElementsByClassName(b);case 3:return c.getElementsByTagName(b)}return[]};_.K=function(a,b,c){c=void 0===c?_.F:c;switch(a){case 1:if(c.getElementById)return c.getElementById(b);break;case 2:case 3:if(a=_.Sb(a,b,c),0<a.length)return a[0]}return null};da=function(a,b){a&&Ob(b,function(b,d){a.style[d]=b})};var Zb;_.Tb=function(a){var b=a.indexOf("#");0>b&&(b=a.length);var c=a.indexOf("?");if(0>c||c>b){c=b;var d=""}else d=a.substring(c+1,b);return[a.substr(0,c),d,a.substr(b)]};_.Ub=function(a,b){return b?a?a+"&"+b:b:a};_.Vb=function(a,b){if(!b)return a;a=_.Tb(a);a[1]=_.Ub(a[1],b);return a[0]+(a[1]?"?"+a[1]:"")+a[2]};_.Wb=function(a,b,c){c=null!=c?"="+(0,window.encodeURIComponent)(String(c)):"";return _.Vb(a,b+c)};_.Xb=function(a,b,c,d){for(var e=c.length;0<=(b=a.indexOf(c,b))&&b<d;){var f=a.charCodeAt(b-1);if(38==f||63==f)if(f=a.charCodeAt(b+e),!f||61==f||38==f||35==f)return b;b+=e+1}return-1};_.Yb=/#|$/;Zb=/[?&]($|#)/;_.L=function(a,b,c){for(var d=a.search(_.Yb),e=0,f,g=[];0<=(f=_.Xb(a,e,b,d));)g.push(a.substring(e,f)),e=Math.min(a.indexOf("&",f)+1||d,d);g.push(a.substr(e));a=g.join("").replace(Zb,"$1");return _.Wb(a,b,c)};var $b=function(a,b,c,d){b=c(d,b);if(!(b instanceof Array))return a;(0,_.Fa)(b,function(b){if(2!==b.length&&3!==b.length)return a;a=zb(a,b[0],b[1],"adurl",b[2])});return a};var ac=function(a,b,c){c=void 0===c?{}:c;this.error=a;this.context=b.context;this.line=b.line||-1;this.msg=b.message||"";this.file=b.file||"";this.id=b.id||"jserror";this.meta=c};var bc=/^https?:\/\/(\w|-)+\.cdn\.ampproject\.(net|org)(\?|\/|$)/,cc=function(a,b){this.g=a;this.l=b},dc=function(a,b){this.url=a;this.Da=!!b;this.depth=null};var ec=function(){this.o="&";this.v=_.r(void 0)?void 0:"trn";this.A=!1;this.l={};this.B=0;this.g=[]},fc=function(a,b){var c={};c[a]=b;return[c]},hc=function(a,b,c,d,e){var f=[];Kb(a,function(a,l){(a=gc(a,b,c,d,e))&&f.push(l+"="+a)});return f.join(b)},gc=function(a,b,c,d,e){if(null==a)return"";b=b||"&";c=c||",$";"string"==typeof c&&(c=c.split(""));if(a instanceof Array){if(d=d||0,d<c.length){for(var f=[],g=0;g<a.length;g++)f.push(gc(a[g],b,c,d+1,e));return f.join(c[d])}}else if("object"==typeof a)return e=e||0,2>e?(0,window.encodeURIComponent)(hc(a,b,c,d,e+1)):"...";return(0,window.encodeURIComponent)(String(a))},ic=function(a,b,c,d){a.g.push(b);a.l[b]=fc(c,d)},kc=function(a,b,c,d){b=b+"//"+c+d;var e=jc(a)-d.length;if(0>e)return"";a.g.sort(function(a,b){return a-b});d=null;c="";for(var f=0;f<a.g.length;f++)for(var g=a.g[f],l=a.l[g],q=0;q<l.length;q++){if(!e){d=null==d?g:d;break}var p=hc(l[q],a.o,",$");if(p){p=c+p;if(e>=p.length){e-=p.length;b+=p;c=a.o;break}else a.A&&(c=e,p[c-1]==a.o&&--c,b+=p.substr(0,c),c=a.o,e=0);d=null==d?g:d}}f="";a.v&&null!=d&&(f=c+a.v+"="+d);return b+f},jc=function(a){if(!a.v)return 4E3;var b=1,c;for(c in a.l)b=c.length>b?c.length:b;return 4E3-a.v.length-b-a.o.length-1};var lc=function(a,b,c,d,e,f){if((d?a.A:Math.random())<(e||a.g))try{if(c instanceof ec)var g=c;else g=new ec,Kb(c,function(a,b){var c=g,d=c.B++;a=fc(b,a);c.g.push(d);c.l[d]=a});var l=kc(g,a.v,a.l,a.o+b+"&");l&&("undefined"===typeof f?_.Mb(_.n,l,void 0):_.Mb(_.n,l,f))}catch(q){}};var mc=null;var nc=function(){var a=_.n.performance;return a&&a.now&&a.timing?Math.floor(a.now()+a.timing.navigationStart):(0,_.A)()},oc=function(){var a=void 0===a?_.n:a;return(a=a.performance)&&a.now?a.now():null};var pc=function(a,b,c){this.label=a;this.type=b;this.value=c;this.duration=0;this.uniqueId=this.label+"_"+this.type+"_"+Math.random();this.slotId=void 0};var M=_.n.performance,qc=!!(M&&M.mark&&M.measure&&M.clearMarks),rc=function(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}(function(){var a;if(a=qc){var b;if(null===mc){mc="";try{a="";try{a=_.n.top.location.hash}catch(c){a=_.n.location.hash}a&&(mc=(b=a.match(/\bdeid=([\d,]+)/))?b[1]:"")}catch(c){}}b=mc;a=!!b.indexOf&&0<=b.indexOf("1337")}return a}),tc=function(){var a=sc;this.events=[];this.l=a||_.n;var b=null;a&&(a.google_js_reporting_queue=a.google_js_reporting_queue||[],this.events=a.google_js_reporting_queue,b=a.google_measure_js_timing);this.g=rc()||(null!=b?b:1>Math.random())},uc=function(a){a&&M&&rc()&&(M.clearMarks("goog_"+a.uniqueId+"_start"),M.clearMarks("goog_"+a.uniqueId+"_end"))};tc.prototype.start=function(a,b){if(!this.g)return null;var c=oc()||nc();a=new pc(a,b,c);b="goog_"+a.uniqueId+"_start";M&&rc()&&M.mark(b);return a};var Ac;_.xc=function(){var a=vc;this.o=wc;this.v=this.g;this.l=void 0===a?null:a};_.xc.prototype.pinger=ba(0);Ac=function(a,b,c,d){try{if(a.l&&a.l.g){var e=a.l.start(b.toString(),3);var f=c();var g=a.l;c=e;if(g.g&&"number"==typeof c.value){var l=oc()||nc();c.duration=l-c.value;var q="goog_"+c.uniqueId+"_end";M&&rc()&&M.mark(q);g.g&&g.events.push(c)}}else f=c()}catch(p){g=!0;try{uc(e),g=(d||a.v).call(a,b,new yc(zc(p),p.fileName,p.lineNumber),void 0,void 0)}catch(v){a.g(217,v)}if(!g)throw p;}return f};_.Cc=function(a,b,c){var d=Bc;return function(e){for(var f=[],g=0;g<arguments.length;++g)f[g]=arguments[g];return Ac(d,a,function(){return b.apply(c,f)},void 0)}};_.xc.prototype.g=function(a,b,c,d,e){e=e||"jserror";try{var f=new ec;f.A=!0;ic(f,1,"context",a);b.error&&b.meta&&b.id||(b=new yc(zc(b),b.fileName,b.lineNumber));b.msg&&ic(f,2,"msg",b.msg.substring(0,512));b.file&&ic(f,3,"file",b.file);0<b.line&&ic(f,4,"line",b.line);var g=b.meta||{};if(d)try{d(g)}catch(cd){}b=[g];f.g.push(5);f.l[5]=b;g=_.n;b=[];var l=null;do{d=g;if(Jb(d)){var q=d.location.href;l=d.document&&d.document.referrer||null}else q=l,l=null;b.push(new dc(q||""));try{g=d.parent}catch(cd){g=null}}while(g&&d!=g);q=0;for(var p=b.length-1;q<=p;++q)b[q].depth=p-q;d=_.n;if(d.location&&d.location.ancestorOrigins&&d.location.ancestorOrigins.length==b.length-1)for(q=1;q<b.length;++q){var v=b[q];v.url||(v.url=d.location.ancestorOrigins[q-1]||"",v.Da=!0)}var t=new dc(_.n.location.href,!1);p=null;var w=b.length-1;for(v=w;0<=v;--v){var H=b[v];!p&&bc.test(H.url)&&(p=H);if(H.url&&!H.Da){t=H;break}}H=null;var ch=b.length&&b[w].url;0!=t.depth&&ch&&(H=b[w]);var Ca=new cc(t,H);Ca.l&&ic(f,6,"top",Ca.l.url||"");ic(f,7,"url",Ca.g.url||"");lc(this.o,e,f,!1,c)}catch(cd){try{lc(this.o,e,{context:"ecmserr",rctx:a,msg:zc(cd),url:Ca&&Ca.g.url},!1,c)}catch(Cj){}}return!0};var zc=function(a){var b=a.toString();a.name&&-1==b.indexOf(a.name)&&(b+=": "+a.name);a.message&&-1==b.indexOf(a.message)&&(b+=": "+a.message);if(a.stack){a=a.stack;var c=b;try{-1==a.indexOf(c)&&(a=c+"\n"+a);for(var d;a!=d;)d=a,a=a.replace(/((https?:\/..*\/)[^\/:]*:\d+(?:.|\n)*)\2/,"$1");b=a.replace(/\n */g,"\n")}catch(e){b=c}}return b},yc=function(a,b,c){ac.call(this,Error(a),{message:a,file:void 0===b?"":b,line:void 0===c?-1:c})};wa(yc,ac);var wc,Bc,Fc;if(Pb&&!Jb(Qb)){var Dc="."+_.F.domain;try{for(;2<Dc.split(".").length&&!Jb(Qb);)_.F.domain=Dc=Dc.substr(Dc.indexOf(".")+1),Qb=window.parent}catch(a){}Jb(Qb)||(Qb=window)}var sc=Qb,vc=new tc,Ec=function(){if(!sc.google_measure_js_timing){var a=vc;a.g=!1;a.events!=a.l.google_js_reporting_queue&&(rc()&&(0,_.Fa)(a.events,uc),a.events.length=0)}};wc=new function(){var a=void 0===a?_.G:a;this.v="http:"===a.location.protocol?"http:":"https:";this.l="pagead2.googlesyndication.com";this.o="/pagead/gen_204?id=";this.g=.01;this.A=Math.random()};Bc=new _.xc;"complete"==sc.document.readyState?Ec():vc.g&&_.J(sc,"load",function(){Ec()});Fc=Bc.g;_.Gc=function(a,b,c){lc(wc,a,b,"jserror"!=a,c,void 0)};var Hc=function(a,b){this.l=a;this.D=b;this.A=[];this.o=[];this.C={};this.g={};this.B=this.v=!1},Ic=function(a,b,c){var d=b=b.getAttribute("data-original-click-url");if(d)for(var e=0;e<a.A.length;e++)d=$b(d,b,a.A[e],c);return d},Jc=function(a,b){_.m(a.l,36,!1)&&Ac(Bc,407,function(){var a=_.L(b.href,"shc","1");a=_.L(a,"ri","13");a=window.navigator.sendBeacon&&window.navigator.sendBeacon(a,"")?_.L(b.href,"ri","14"):_.L(b.href,"ri","15");a=a instanceof _.Db?a:_.Hb(a);b.href=_.Eb(a)},Fc)},Kc=function(a,b,c,d){if(0!=a.o.length&&(d.preventDefault?!d.defaultPrevented:!1!==d.returnValue)){var e=1==d.which&&!d.ctrlKey&&"_blank"!=b.target&&"_new"!=b.target;e&&_.Rb(d);for(var f=[],g={},l=0;l<a.o.length;g={url:g.url},l++)if(g.url=a.o[l](c),g.url){var q=new window.Promise(function(a){return function(b){_.Mb(_.G,a.url,b)}}(g));f.push(q)}c=window.Promise.all(f);f=new window.Promise(function(a){window.setTimeout(a,2E3)});e&&window.Promise.race([c,f]).then((0,_.y)(Hc.prototype.G,a,b,d))}};Hc.prototype.G=function(a,b){this.v=!0;var c=!1;if(b.target)a:{c=b.target;var d=b.button,e=b.ctrlKey,f=b.shiftKey,g=b.metaKey,l=b.altKey,q=new Ib(b.x,b.y);if(window.document.createEvent){var p=window.document.createEvent("MouseEvents");p.initMouseEvent("click",!0,!0,null,0,q.g,q.l,q.g,q.l,e,l,f,g,d,null)}else if(window.document.createEventObject)p=window.document.createEventObject(),p.Oa="onclick",p.button=d,p.ctrlKey=e,p.altKey=l,p.shiftKey=f,p.metaKey=g,p.clientX=q.g,p.clientY=q.l,p.screenX=q.g,p.screenY=q.l;else{c=!1;break a}if(c.dispatchEvent)c.dispatchEvent(p);else if(c.fireEvent)c.fireEvent(p.Oa,p);else{c=!1;break a}c=!0}!a.href||c||Lc(this,a,b)||(Jc(this,a),_.G.top.location=a.href)};Hc.prototype.F=function(a,b,c,d){if(this.v)this.v=!1;else{d||(d=_.G.event);this.g[c][b].forEach(function(a){a(d)});if(a.href){var e=Ic(this,a,d.type);e&&(a.href=e)}"click"==c&&(Kc(this,a,b,d),(d.preventDefault?d.defaultPrevented:!1===d.returnValue)||Lc(this,a,d)||Jc(this,a))}};var Mc=function(a,b,c,d){a.g[d]||(a.g[d]={});a.g[d][c]||(a.g[d][c]=[]);_.J(b,d,(0,_.y)(a.F,a,b,c,d))},Lc=function(a,b,c){var d=b.href;if(a.D){if(a.D.g(b,c,a.l,a.B))return!0}else if(_.n.googdlu&&_.n.googdlu.tryOpenPlayStore&&_.n.googdlu.tryOpenPlayStore(c,d,_.m(a.l,15,"")))return!0;return _.m(a.l,31,!1)&&_.m(a.l,30,!1)&&_.m(a.l,28,"")&&_.n.googdlu&&_.n.googdlu.tryOpenAppUrl?(_.n.googdlu.tryOpenAppUrl(c,d,_.m(a.l,32,""),_.m(a.l,28,"")),!0):!1};var Nc;Nc=function(a){if(a.classList)return a.classList;a=a.className;return _.u(a)&&a.match(/\S+/g)||[]};_.Oc=function(a,b){a.classList?a.classList.add(b):(a.classList?a.classList.contains(b):0<=(0,_.Ea)(Nc(a),b))||(a.className+=0<a.className.length?" "+b:b)};_.Pc=function(a,b){if(a.classList)a.classList.remove(b);else if(a.classList?a.classList.contains(b):0<=(0,_.Ea)(Nc(a),b))a.className=Ga(Nc(a),function(a){return a!=b}).join(" ")};var Qc=function(a){_.n.setTimeout(function(){throw a;},0)},Rc,Sc=function(){var a=_.n.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!C("Presto")&&(a=function(){var a=window.document.createElement("IFRAME");a.style.display="none";a.src="";window.document.documentElement.appendChild(a);var b=a.contentWindow;a=b.document;a.open();a.write("");a.close();var c="callImmediate"+Math.random(),d="file:"==b.location.protocol?"*":b.location.protocol+"//"+b.location.host;a=(0,_.y)(function(a){if(("*"==d||a.origin==d)&&a.data==c)this.port1.onmessage()},this);b.addEventListener("message",a,!1);this.port1={};this.port2={postMessage:function(){b.postMessage(c,d)}}});if("undefined"!==typeof a&&!C("Trident")&&!C("MSIE")){var b=new a,c={},d=c;b.port1.onmessage=function(){if(_.r(c.next)){c=c.next;var a=c.Aa;c.Aa=null;a()}};return function(a){d.next={Aa:a};d=d.next;b.port2.postMessage(0)}}return"undefined"!==typeof window.document&&"onreadystatechange"in window.document.createElement("SCRIPT")?function(a){var b=window.document.createElement("SCRIPT");b.onreadystatechange=function(){b.onreadystatechange=null;b.parentNode.removeChild(b);b=null;a();a=null};window.document.documentElement.appendChild(b)}:function(a){_.n.setTimeout(a,0)}};var Tc=function(a,b){this.o=a;this.v=b;this.l=0;this.g=null};Tc.prototype.get=function(){if(0<this.l){this.l--;var a=this.g;this.g=a.next;a.next=null}else a=this.o();return a};var Uc=function(){this.l=this.g=null},Wc=new Tc(function(){return new Vc},function(a){a.reset()});Uc.prototype.add=function(a,b){var c=Wc.get();c.set(a,b);this.l?this.l.next=c:this.g=c;this.l=c};var Yc=function(){var a=Xc,b=null;a.g&&(b=a.g,a.g=a.g.next,a.g||(a.l=null),b.next=null);return b},Vc=function(){this.next=this.l=this.g=null};Vc.prototype.set=function(a,b){this.g=a;this.l=b;this.next=null};Vc.prototype.reset=function(){this.next=this.l=this.g=null};var bd=function(a){Zc||$c();ad||(Zc(),ad=!0);Xc.add(a,void 0)},Zc,$c=function(){if(_.n.Promise&&_.n.Promise.resolve){var a=_.n.Promise.resolve(void 0);Zc=function(){a.then(dd)}}else Zc=function(){var a=dd;!_.Aa(_.n.setImmediate)||_.n.Window&&_.n.Window.prototype&&!C("Edge")&&_.n.Window.prototype.setImmediate==_.n.setImmediate?(Rc||(Rc=Sc()),Rc(a)):_.n.setImmediate(a)}},ad=!1,Xc=new Uc,dd=function(){for(var a;a=Yc();){try{a.g.call(a.l)}catch(c){Qc(c)}var b=Wc;b.v(a);100>b.l&&(b.l++,a.next=b.g,b.g=a)}ad=!1};_.N=function(){this.A=this.A;this.o=this.o};_.N.prototype.A=!1;_.N.prototype.sa=ba(1);_.N.prototype.L=ba(3);_.ed=function(a){_.N.call(this);this.C=1;this.v=[];this.B=0;this.g=[];this.l={};this.F=!!a};_.B(_.ed,_.N);_.ed.prototype.subscribe=function(a,b,c){var d=this.l[a];d||(d=this.l[a]=[]);var e=this.C;this.g[e]=a;this.g[e+1]=b;this.g[e+2]=c;this.C=e+3;d.push(e);return e};_.ed.prototype.G=function(a){var b=this.g[a];b&&(b=this.l[b],0!=this.B?(this.v.push(a),this.g[a+1]=_.xa):(b&&_.Ia(b,a),delete this.g[a],delete this.g[a+1],delete this.g[a+2]))};_.ed.prototype.D=function(a,b){var c=this.l[a];if(c){for(var d=Array(arguments.length-1),e=1,f=arguments.length;e<f;e++)d[e-1]=arguments[e];if(this.F)for(e=0;e<c.length;e++){var g=c[e];fd(this.g[g+1],this.g[g+2],d)}else{this.B++;try{for(e=0,f=c.length;e<f;e++)g=c[e],this.g[g+1].apply(this.g[g+2],d)}finally{if(this.B--,0<this.v.length&&0==this.B)for(;c=this.v.pop();)this.G(c)}}}};var fd=function(a,b,c){bd(function(){a.apply(b,c)})};_.ed.prototype.L=ba(2);var O=function(a,b,c,d){this.A=new _.ed;this.l=a;this.l[0]=[b];this.v=[];this.o=new Hc(c,d);this.g=c;b=_.m(this.g,22,"");c=_.m(this.g,23,"");b&&c&&d&&(d.canOpenIntents([{url:b,id:b,J:c}],(0,_.y)(this.Ga,this))||d.canOpenURLs(b,(0,_.y)(this.Ga,this)));(d=_.K(1,"common_15click_anchor"))?(a[20]=[d],gd(this,20)):(d=_.Ja(_.Sb(2,"common_15click_anchor")),0<d.length&&(a[20]=d,gd(this,20)))},gd,id;_.h=O.prototype;_.h.Ga=function(a,b){b=(a=_.m(this.g,22,""))&&b?b[a]:!1;this.o.B=!!b;this.H(0,"app_installed",!b)};_.h.navigationAdPieces=function(){return this.v};_.h.pa=function(){return!0};_.h.has=function(a){return(a=this.l[a])&&0<a.length};_.h.listen=function(a,b,c){var d=this.l[a];if(d){var e=this.o;c=_.z(c,a,this);var f=("click"==b||"mousedown"==b)&&e.C[a];e.g[b]||(e.g[b]={});e.g[b][a]||(e.g[b][a]=[]);e.g[b][a].push(c);if(!f)for(a=0;a<d.length;a++)_.J(d[a],b,c)}};_.h.H=function(a,b,c){if(b){a=this.getElementsByAdPiece(a);for(var d=0;d<a.length;d++)c?_.Pc(a[d],b):_.Oc(a[d],b)}};_.h.getElementsByAdPiece=function(a){return this.l[a]?this.l[a]:[]};_.hd=function(a,b,c){a=a.getElementsByAdPiece(b);if(c)for(b=0;b<a.length;b++){var d=a[b].getAttribute(c);if(d)return d}return null};gd=function(a,b){if(a.l[b]&&a.pa(b)){a.v.push(b);var c=a.o;a=a.l[b];for(var d=0;d<a.length;d++){var e=a[d];e.href&&e.setAttribute("data-original-click-url",e.href);Mc(c,e,b,"mousedown");Mc(c,e,b,"click")}c.C[b]=!0}};id=function(a,b){a=a.getElementsByAdPiece(b);for(b=0;b<a.length;b++)if(!a[b].href)return!1;return!0};_.h=O.prototype;_.h.creativeConversionUrl=function(){return _.m(this.g,6,"")};_.h.redirectUrl=function(){return _.m(this.g,8,"")};_.h.getIndex=function(){return _.m(this.g,2,0)};_.h.listenOnObject=function(a,b){this.A.subscribe(a,b)};_.h.fireOnObject=function(a,b){this.A.D(a,b)};var P,jd;P=function(a){this.F=new _.ed;this.A=null;this.B="none";this.A&&(this.B=this.A.style.display);this.v=[];this.g=a;this.C=[];this.D=!1;this.o=[];this.l=null};jd=function(a){a=new P(new sb(a));_.x("adSlot",a,void 0);return a};_.kd=function(){var a=_.n.adSlot;return a?a:(Bc.g("hdrNDslt",Error("no adslot"),void 0,void 0),jd(null))};_.h=P.prototype;_.h.forEachAd=function(a){(0,_.Fa)(this.v,a)};_.h.qa=function(a){this.v.push(a)};_.h.Qa=function(a){if(a=_.K(1,a))this.A=a,this.B=this.A.style.display;if(0==this.v.length)_.n.css=null;else{for(a=0;a<this.C.length;++a)this.C[a]();this.D=!0}};_.h.listenOnObject=function(a,b){this.F.subscribe(a,b)};_.h.fireOnObject=function(a,b){this.F.D(a,b)};_.h.registerFinalizeCallback=function(a){this.D?a():this.C.push(a)};_.h.registerWidget=function(a,b){0<=(0,_.Ea)(this.o,a)||(this.o[b]=a,a.reset(this))};var ld=function(a){a.A.style.display="none";for(var b=0;b<a.o.length;b++)a.o[b]&&a.o[b].hide(a)};P.prototype.resetAll=function(){this.A.style.display=this.B;for(var a=0;a<this.o.length;a++)this.o[a]&&this.o[a].reset(this)};P.prototype.showOnly=function(a){var b=this;ld(this);md(this,a,function(a){a.show(b)})};var md=function(a,b,c){a.o[b]&&c(a.o[b])};_.h=P.prototype;_.h.getSerializedAdSlotData=function(){return _.qb(this.g)};_.h.getAdsLength=function(){return this.v.length};_.h.getAd=function(a){return 0<=a&&a<this.v.length&&this.v[a].getIndex()==a?this.v[a]:null};_.h.getContainer=function(){return this.A};_.h.openSystemBrowser=function(a){return this.l?(this.l.openSystemBrowser(a,{useFirstPackage:!0,useRunningProcess:!0}),!0):!1};var od=function(a,b,c){O.call(this,a,b,c,_.kd().l);for(a=0;a<nd.length;a++)gd(this,nd[a])};wa(od,O);var pd=function(a,b){var c=Q,d={};if(!b)return null;d[0]=[b];Ob(xb,function(a){c[a]&&(d[a]=_.Ja(_.Sb(2,c[a],b)))});return new od(d,b,a)};od.prototype.pa=function(a){return id(this,a)||4==a};var qd=function(a){_.m(a,19,!1)&&(0,_.Fa)(ob(a,20),function(a){_.Mb(_.G,a,void 0)})};od.prototype.B=function(a,b){return this.pa(b)?a:""};var nd=[1,2,3,4,8,6,40,24,33,25,36,37,38,9];var rd="UNKNOWN",sd="UNKNOWN",td=null,ud=function(a,b){b.gqid=rd;b.qqid=sd;b.com=a;_.Gc("glaurung",b)},R={},Q=(R[1]="ad-title",R[2]="ad-url",R[3]="ad-body",R[4]="ad-button",R[8]="ad-favicon",R[6]="ad-image",R[26]="ad-price",R[23]="ad-reviews",R[43]="ad-rating-stars",R[44]="ad-reviews-count",R[24]="ad-app-store-image",R[25]="ad-promo-headline",R[33]="ad-app-icon",R[16]="ad-image-gallery",R[40]="ad-image-gallery-image",R[36]="ad-logo",R[37]="ad-advertiser",R[38]="ad-call-to-action",R[39]="ad-video",R[42]="ad-logo-wrapper",R[9]="ad-background",R),vd=function(a,b,c){var d=a.g,e=_.k(d,ca,16);if(e&&_.m(e,1,!1)){e=Q;for(var f in e)delete e[f];Q[1]="title-link";Q[2]="url-link";Q[3]="body-link";Q[4]="button-link";Q[8]="favicon-link";Q[6]="image-link";Q[26]="price";Q[23]="reviews";Q[43]="rating-stars";Q[44]="reviews-count";Q[24]="app-store";Q[25]="promo-headline";Q[33]="app-icon";Q[16]="image-gallery";Q[40]="image-gallery-image-link";Q[36]="logo-link";Q[37]="advertiser-link";Q[38]="call-to-action-link";Q[39]="video";Q[42]="logo";Q[9]="ad-background";_.K(2,"app-store-link",b)&&(Q[24]="app-store-link");_.K(2,"app-icon-link",b)&&(Q[33]="app-icon-link");_.K(2,"promo-headline-link",b)&&(Q[25]="promo-headline-link")}f=_.K(1,"adunit",b);e=_.K(1,"ads",b);if(!f||!e)return 1;var g={};0==_.m(d,32,0)?(g.width=_.m(d,2,0)+"px",g.height=_.m(d,3,0)+"px",g.position="absolute",g.top="0",g.left="0"):(g.width="100%",g.height="100%");g.overflow="hidden";da(f,g);ea(f,d);ea(e,d);try{c(e,a)}catch(p){return _.m(d,13,!1)&&(td=p),2}c=0;d=ub(d);for(f=0;f<d.length;f++){g=d[f];var l="taw"+_.m(g,2,0);e=_.K(1,l,b);if(!e)return 3;e=pd(g,e);if(!e)return 1;_.G.registerAd?_.G.registerAd(e,l):c=4;_.m(g,11,!1)&&_.G.initAppPromo&&_.G.initAppPromo(e,a);qd(g);if(_.m(g,19,!1))if(l=ob(g,33),0<l.length)for(g=0;g<l.length;g++){var q=(0,_.y)(od.prototype.B,e,l[g]);e.o.o.push(q)}else g=(0,_.y)(od.prototype.B,e,_.m(g,21,"")),e.o.o.push(g);a.qa(e)}return c};var wd=function(a,b,c){var d=[];d[0]=[c];d[15]=[b];(b=_.K(1,"abgc"))&&(d[27]=[b]);(b=_.K(1,"cbc"))&&(d[28]=[b]);O.call(this,d,c,a,_.kd().l);gd(this,15)};wa(wd,O);var xd=function(a,b){var c={};c[0]=[b];O.call(this,c,b,a,_.kd().l)};wa(xd,O);var zd=function(a,b,c){O.call(this,a,b,c,_.kd().l);for(a=0;a<yd.length;a++)gd(this,yd[a]);this.listen(4,"mouseover",(0,_.y)(this.H,this,0,"onhoverbg",!1));this.listen(4,"mouseout",(0,_.y)(this.H,this,0,"onhoverbg",!0))};wa(zd,O);zd.prototype.pa=function(a){return id(this,a)||4==a};var S={},Ad=(S[1]="rhtitle",S[45]="rhtitleline1",S[46]="rhtitleline2",S[48]="rhlongtitle",S[3]="rhbody",S[2]="rhurl",S[4]="rhbutton",S[8]="rhfavicon",S[14]="rhaddress",S[6]="rhimage",S[34]="rhimagetemplate",S[49]="rh-scrollflow",S[16]="rhimagegallery",S[47]="rhreviewgallery",S[29]="rhviewimagegallery",S[30]="rhcloseimagegalleryview",S[31]="rhtrydemobutton",S[32]="rhclosetrydemoview",S[39]="rhvideo",S[9]="rhbackground",S[13]="rh-icore-empty",S[5]="rhsitelink",S[7]="rhradlink",S[17]="rh-multiframe",S[18]="rh-box-breadcrumbs",S[21]="rh-ms-mute-overlay",S[22]="rh-ms-mute-undo",S[23]="rhstarratings",S[24]="rhstoreicon",S[25]="rhpromotext",S[26]="rhprice",S[27]="abgc",S[28]="cbc",S[35]="rhdemocountdowntimer",S[36]="rhlogo",S[1001]="rhoverlap-imagegallery",S[1002]="rhoverlap-trydemo",S),yd=[1,45,46,48,2,4,5,7,8,3,9,6,14,15,34,26,24,36];P.prototype.forEachAd=P.prototype.forEachAd;P.prototype.addAd=P.prototype.qa;P.prototype.finalize=P.prototype.Qa;_.x("buildAdSlot",jd,void 0);_.x("buildGlaurungAds",function(a,b,c){var d=(new Date).getTime(),e=1,f=!1;td=null;try{f=_.m(a.g,13,!1),rd=_.m(a.g,8,""),sd=_.m(a.g,7,""),e=vd(a,b,c)}catch(g){f&&(td=g),e=1}a=(new Date).getTime();b={};b.r=e;b.d=a-d;ud("bridge",b);return e},void 0);_.x("glaurungError",function(){return td},void 0);_.x("glaurungBridge.log",ud,void 0);_.x("glaurungBridge.getAdPieceClassName",function(a){return Q[a]},void 0);_.x("buildImageAd",function(a,b){if(0>b||b>=ub(a.g).length)a=null;else{a=ub(a.g)[b];b=_.K(1,"google_image_div");var c=_.K(1,"aw0");a=b&&c?new wd(a,c,b):null}return a},void 0);_.x("buildRichmediaAd",function(a,b){return 0>b||b>=ub(a.g).length?null:new xd(ub(a.g)[b],_.F.body)},void 0);_.x("buildTextAd",function(a,b){var c=a.g;if(!(0>b||b>=ub(c).length)){if(0>b||b>=ub(a.g).length)var d=null;else{d=ub(a.g)[b];var e=_.K(1,"taw"+b);if(e){var f={0:[e]},g;for(g in xb){var l=xb[g],q=Ad[l];q&&(f[l]=_.Ja(_.Sb(2,q,e)))}d=new zd(f,e,d)}else d=null}d&&(_.G.registerAd&&_.G.registerAd(d,"taw"+b),a.qa(d),_.m(ub(c)[b],11,!1)&&_.G.initAppPromo&&_.G.initAppPromo(d,a))}},void 0);})(window.hydra=window.hydra||{});
