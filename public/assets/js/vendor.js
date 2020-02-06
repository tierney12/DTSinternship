/*! jQuery v2.2.4 | (c) jQuery Foundation | jquery.org/license */
!function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=a.document,e=c.slice,f=c.concat,g=c.push,h=c.indexOf,i={},j=i.toString,k=i.hasOwnProperty,l={},m="2.2.4",n=function(a,b){return new n.fn.init(a,b)},o=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,p=/^-ms-/,q=/-([\da-z])/gi,r=function(a,b){return b.toUpperCase()};n.fn=n.prototype={jquery:m,constructor:n,selector:"",length:0,toArray:function(){return e.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:e.call(this)},pushStack:function(a){var b=n.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a){return n.each(this,a)},map:function(a){return this.pushStack(n.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(e.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor()},push:g,sort:c.sort,splice:c.splice},n.extend=n.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||n.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(a=arguments[h]))for(b in a)c=g[b],d=a[b],g!==d&&(j&&d&&(n.isPlainObject(d)||(e=n.isArray(d)))?(e?(e=!1,f=c&&n.isArray(c)?c:[]):f=c&&n.isPlainObject(c)?c:{},g[b]=n.extend(j,f,d)):void 0!==d&&(g[b]=d));return g},n.extend({expando:"jQuery"+(m+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===n.type(a)},isArray:Array.isArray,isWindow:function(a){return null!=a&&a===a.window},isNumeric:function(a){var b=a&&a.toString();return!n.isArray(a)&&b-parseFloat(b)+1>=0},isPlainObject:function(a){var b;if("object"!==n.type(a)||a.nodeType||n.isWindow(a))return!1;if(a.constructor&&!k.call(a,"constructor")&&!k.call(a.constructor.prototype||{},"isPrototypeOf"))return!1;for(b in a);return void 0===b||k.call(a,b)},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?i[j.call(a)]||"object":typeof a},globalEval:function(a){var b,c=eval;a=n.trim(a),a&&(1===a.indexOf("use strict")?(b=d.createElement("script"),b.text=a,d.head.appendChild(b).parentNode.removeChild(b)):c(a))},camelCase:function(a){return a.replace(p,"ms-").replace(q,r)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b){var c,d=0;if(s(a)){for(c=a.length;c>d;d++)if(b.call(a[d],d,a[d])===!1)break}else for(d in a)if(b.call(a[d],d,a[d])===!1)break;return a},trim:function(a){return null==a?"":(a+"").replace(o,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(s(Object(a))?n.merge(c,"string"==typeof a?[a]:a):g.call(c,a)),c},inArray:function(a,b,c){return null==b?-1:h.call(b,a,c)},merge:function(a,b){for(var c=+b.length,d=0,e=a.length;c>d;d++)a[e++]=b[d];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,e,g=0,h=[];if(s(a))for(d=a.length;d>g;g++)e=b(a[g],g,c),null!=e&&h.push(e);else for(g in a)e=b(a[g],g,c),null!=e&&h.push(e);return f.apply([],h)},guid:1,proxy:function(a,b){var c,d,f;return"string"==typeof b&&(c=a[b],b=a,a=c),n.isFunction(a)?(d=e.call(arguments,2),f=function(){return a.apply(b||this,d.concat(e.call(arguments)))},f.guid=a.guid=a.guid||n.guid++,f):void 0},now:Date.now,support:l}),"function"==typeof Symbol&&(n.fn[Symbol.iterator]=c[Symbol.iterator]),n.each("Boolean Number String Function Array Date RegExp Object JobError Symbol".split(" "),function(a,b){i["[object "+b+"]"]=b.toLowerCase()});function s(a){var b=!!a&&"length"in a&&a.length,c=n.type(a);return"function"===c||n.isWindow(a)?!1:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var t=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u="sizzle"+1*new Date,v=a.document,w=0,x=0,y=ga(),z=ga(),A=ga(),B=function(a,b){return a===b&&(l=!0),0},C=1<<31,D={}.hasOwnProperty,E=[],F=E.pop,G=E.push,H=E.push,I=E.slice,J=function(a,b){for(var c=0,d=a.length;d>c;c++)if(a[c]===b)return c;return-1},K="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",L="[\\x20\\t\\r\\n\\f]",M="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",N="\\["+L+"*("+M+")(?:"+L+"*([*^$|!~]?=)"+L+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+M+"))|)"+L+"*\\]",O=":("+M+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+N+")*)|.*)\\)|)",P=new RegExp(L+"+","g"),Q=new RegExp("^"+L+"+|((?:^|[^\\\\])(?:\\\\.)*)"+L+"+$","g"),R=new RegExp("^"+L+"*,"+L+"*"),S=new RegExp("^"+L+"*([>+~]|"+L+")"+L+"*"),T=new RegExp("="+L+"*([^\\]'\"]*?)"+L+"*\\]","g"),U=new RegExp(O),V=new RegExp("^"+M+"$"),W={ID:new RegExp("^#("+M+")"),CLASS:new RegExp("^\\.("+M+")"),TAG:new RegExp("^("+M+"|[*])"),ATTR:new RegExp("^"+N),PSEUDO:new RegExp("^"+O),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+L+"*(even|odd|(([+-]|)(\\d*)n|)"+L+"*(?:([+-]|)"+L+"*(\\d+)|))"+L+"*\\)|)","i"),bool:new RegExp("^(?:"+K+")$","i"),needsContext:new RegExp("^"+L+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+L+"*((?:-\\d)?\\d*)"+L+"*\\)|)(?=[^-]|$)","i")},X=/^(?:input|select|textarea|button)$/i,Y=/^h\d$/i,Z=/^[^{]+\{\s*\[native \w/,$=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,_=/[+~]/,aa=/'|\\/g,ba=new RegExp("\\\\([\\da-f]{1,6}"+L+"?|("+L+")|.)","ig"),ca=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)},da=function(){m()};try{H.apply(E=I.call(v.childNodes),v.childNodes),E[v.childNodes.length].nodeType}catch(ea){H={apply:E.length?function(a,b){G.apply(a,I.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function fa(a,b,d,e){var f,h,j,k,l,o,r,s,w=b&&b.ownerDocument,x=b?b.nodeType:9;if(d=d||[],"string"!=typeof a||!a||1!==x&&9!==x&&11!==x)return d;if(!e&&((b?b.ownerDocument||b:v)!==n&&m(b),b=b||n,p)){if(11!==x&&(o=$.exec(a)))if(f=o[1]){if(9===x){if(!(j=b.getElementById(f)))return d;if(j.id===f)return d.push(j),d}else if(w&&(j=w.getElementById(f))&&t(b,j)&&j.id===f)return d.push(j),d}else{if(o[2])return H.apply(d,b.getElementsByTagName(a)),d;if((f=o[3])&&c.getElementsByClassName&&b.getElementsByClassName)return H.apply(d,b.getElementsByClassName(f)),d}if(c.qsa&&!A[a+" "]&&(!q||!q.test(a))){if(1!==x)w=b,s=a;else if("object"!==b.nodeName.toLowerCase()){(k=b.getAttribute("id"))?k=k.replace(aa,"\\$&"):b.setAttribute("id",k=u),r=g(a),h=r.length,l=V.test(k)?"#"+k:"[id='"+k+"']";while(h--)r[h]=l+" "+qa(r[h]);s=r.join(","),w=_.test(a)&&oa(b.parentNode)||b}if(s)try{return H.apply(d,w.querySelectorAll(s)),d}catch(y){}finally{k===u&&b.removeAttribute("id")}}}return i(a.replace(Q,"$1"),b,d,e)}function ga(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function ha(a){return a[u]=!0,a}function ia(a){var b=n.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function ja(a,b){var c=a.split("|"),e=c.length;while(e--)d.attrHandle[c[e]]=b}function ka(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||C)-(~a.sourceIndex||C);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function la(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function ma(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function na(a){return ha(function(b){return b=+b,ha(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function oa(a){return a&&"undefined"!=typeof a.getElementsByTagName&&a}c=fa.support={},f=fa.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},m=fa.setDocument=function(a){var b,e,g=a?a.ownerDocument||a:v;return g!==n&&9===g.nodeType&&g.documentElement?(n=g,o=n.documentElement,p=!f(n),(e=n.defaultView)&&e.top!==e&&(e.addEventListener?e.addEventListener("unload",da,!1):e.attachEvent&&e.attachEvent("onunload",da)),c.attributes=ia(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=ia(function(a){return a.appendChild(n.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=Z.test(n.getElementsByClassName),c.getById=ia(function(a){return o.appendChild(a).id=u,!n.getElementsByName||!n.getElementsByName(u).length}),c.getById?(d.find.ID=function(a,b){if("undefined"!=typeof b.getElementById&&p){var c=b.getElementById(a);return c?[c]:[]}},d.filter.ID=function(a){var b=a.replace(ba,ca);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(ba,ca);return function(a){var c="undefined"!=typeof a.getAttributeNode&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return"undefined"!=typeof b.getElementsByTagName?b.getElementsByTagName(a):c.qsa?b.querySelectorAll(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return"undefined"!=typeof b.getElementsByClassName&&p?b.getElementsByClassName(a):void 0},r=[],q=[],(c.qsa=Z.test(n.querySelectorAll))&&(ia(function(a){o.appendChild(a).innerHTML="<a id='"+u+"'></a><select id='"+u+"-\r\\' msallowcapture=''><option selected=''></option></select>",a.querySelectorAll("[msallowcapture^='']").length&&q.push("[*^$]="+L+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||q.push("\\["+L+"*(?:value|"+K+")"),a.querySelectorAll("[id~="+u+"-]").length||q.push("~="),a.querySelectorAll(":checked").length||q.push(":checked"),a.querySelectorAll("a#"+u+"+*").length||q.push(".#.+[+~]")}),ia(function(a){var b=n.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&q.push("name"+L+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),q.push(",.*:")})),(c.matchesSelector=Z.test(s=o.matches||o.webkitMatchesSelector||o.mozMatchesSelector||o.oMatchesSelector||o.msMatchesSelector))&&ia(function(a){c.disconnectedMatch=s.call(a,"div"),s.call(a,"[s!='']:x"),r.push("!=",O)}),q=q.length&&new RegExp(q.join("|")),r=r.length&&new RegExp(r.join("|")),b=Z.test(o.compareDocumentPosition),t=b||Z.test(o.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},B=b?function(a,b){if(a===b)return l=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===n||a.ownerDocument===v&&t(v,a)?-1:b===n||b.ownerDocument===v&&t(v,b)?1:k?J(k,a)-J(k,b):0:4&d?-1:1)}:function(a,b){if(a===b)return l=!0,0;var c,d=0,e=a.parentNode,f=b.parentNode,g=[a],h=[b];if(!e||!f)return a===n?-1:b===n?1:e?-1:f?1:k?J(k,a)-J(k,b):0;if(e===f)return ka(a,b);c=a;while(c=c.parentNode)g.unshift(c);c=b;while(c=c.parentNode)h.unshift(c);while(g[d]===h[d])d++;return d?ka(g[d],h[d]):g[d]===v?-1:h[d]===v?1:0},n):n},fa.matches=function(a,b){return fa(a,null,null,b)},fa.matchesSelector=function(a,b){if((a.ownerDocument||a)!==n&&m(a),b=b.replace(T,"='$1']"),c.matchesSelector&&p&&!A[b+" "]&&(!r||!r.test(b))&&(!q||!q.test(b)))try{var d=s.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return fa(b,n,null,[a]).length>0},fa.contains=function(a,b){return(a.ownerDocument||a)!==n&&m(a),t(a,b)},fa.attr=function(a,b){(a.ownerDocument||a)!==n&&m(a);var e=d.attrHandle[b.toLowerCase()],f=e&&D.call(d.attrHandle,b.toLowerCase())?e(a,b,!p):void 0;return void 0!==f?f:c.attributes||!p?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},fa.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},fa.uniqueSort=function(a){var b,d=[],e=0,f=0;if(l=!c.detectDuplicates,k=!c.sortStable&&a.slice(0),a.sort(B),l){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return k=null,a},e=fa.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=fa.selectors={cacheLength:50,createPseudo:ha,match:W,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(ba,ca),a[3]=(a[3]||a[4]||a[5]||"").replace(ba,ca),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||fa.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&fa.error(a[0]),a},PSEUDO:function(a){var b,c=!a[6]&&a[2];return W.CHILD.test(a[0])?null:(a[3]?a[2]=a[4]||a[5]||"":c&&U.test(c)&&(b=g(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(ba,ca).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=y[a+" "];return b||(b=new RegExp("(^|"+L+")"+a+"("+L+"|$)"))&&y(a,function(a){return b.test("string"==typeof a.className&&a.className||"undefined"!=typeof a.getAttribute&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=fa.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e.replace(P," ")+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),s=!i&&!h,t=!1;if(q){if(f){while(p){m=b;while(m=m[p])if(h?m.nodeName.toLowerCase()===r:1===m.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&s){m=q,l=m[u]||(m[u]={}),k=l[m.uniqueID]||(l[m.uniqueID]={}),j=k[a]||[],n=j[0]===w&&j[1],t=n&&j[2],m=n&&q.childNodes[n];while(m=++n&&m&&m[p]||(t=n=0)||o.pop())if(1===m.nodeType&&++t&&m===b){k[a]=[w,n,t];break}}else if(s&&(m=b,l=m[u]||(m[u]={}),k=l[m.uniqueID]||(l[m.uniqueID]={}),j=k[a]||[],n=j[0]===w&&j[1],t=n),t===!1)while(m=++n&&m&&m[p]||(t=n=0)||o.pop())if((h?m.nodeName.toLowerCase()===r:1===m.nodeType)&&++t&&(s&&(l=m[u]||(m[u]={}),k=l[m.uniqueID]||(l[m.uniqueID]={}),k[a]=[w,t]),m===b))break;return t-=e,t===d||t%d===0&&t/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||fa.error("unsupported pseudo: "+a);return e[u]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?ha(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=J(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:ha(function(a){var b=[],c=[],d=h(a.replace(Q,"$1"));return d[u]?ha(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),b[0]=null,!c.pop()}}),has:ha(function(a){return function(b){return fa(a,b).length>0}}),contains:ha(function(a){return a=a.replace(ba,ca),function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:ha(function(a){return V.test(a||"")||fa.error("unsupported lang: "+a),a=a.replace(ba,ca).toLowerCase(),function(b){var c;do if(c=p?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===o},focus:function(a){return a===n.activeElement&&(!n.hasFocus||n.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return Y.test(a.nodeName)},input:function(a){return X.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:na(function(){return[0]}),last:na(function(a,b){return[b-1]}),eq:na(function(a,b,c){return[0>c?c+b:c]}),even:na(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:na(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:na(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:na(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=la(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=ma(b);function pa(){}pa.prototype=d.filters=d.pseudos,d.setFilters=new pa,g=fa.tokenize=function(a,b){var c,e,f,g,h,i,j,k=z[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){c&&!(e=R.exec(h))||(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=S.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(Q," ")}),h=h.slice(c.length));for(g in d.filter)!(e=W[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?fa.error(a):z(a,i).slice(0)};function qa(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function ra(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=x++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j,k=[w,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(j=b[u]||(b[u]={}),i=j[b.uniqueID]||(j[b.uniqueID]={}),(h=i[d])&&h[0]===w&&h[1]===f)return k[2]=h[2];if(i[d]=k,k[2]=a(b,c,g))return!0}}}function sa(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function ta(a,b,c){for(var d=0,e=b.length;e>d;d++)fa(a,b[d],c);return c}function ua(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(c&&!c(f,d,e)||(g.push(f),j&&b.push(h)));return g}function va(a,b,c,d,e,f){return d&&!d[u]&&(d=va(d)),e&&!e[u]&&(e=va(e,f)),ha(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||ta(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:ua(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=ua(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?J(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=ua(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):H.apply(g,r)})}function wa(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],h=g||d.relative[" "],i=g?1:0,k=ra(function(a){return a===b},h,!0),l=ra(function(a){return J(b,a)>-1},h,!0),m=[function(a,c,d){var e=!g&&(d||c!==j)||((b=c).nodeType?k(a,c,d):l(a,c,d));return b=null,e}];f>i;i++)if(c=d.relative[a[i].type])m=[ra(sa(m),c)];else{if(c=d.filter[a[i].type].apply(null,a[i].matches),c[u]){for(e=++i;f>e;e++)if(d.relative[a[e].type])break;return va(i>1&&sa(m),i>1&&qa(a.slice(0,i-1).concat({value:" "===a[i-2].type?"*":""})).replace(Q,"$1"),c,e>i&&wa(a.slice(i,e)),f>e&&wa(a=a.slice(e)),f>e&&qa(a))}m.push(c)}return sa(m)}function xa(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,h,i,k){var l,o,q,r=0,s="0",t=f&&[],u=[],v=j,x=f||e&&d.find.TAG("*",k),y=w+=null==v?1:Math.random()||.1,z=x.length;for(k&&(j=g===n||g||k);s!==z&&null!=(l=x[s]);s++){if(e&&l){o=0,g||l.ownerDocument===n||(m(l),h=!p);while(q=a[o++])if(q(l,g||n,h)){i.push(l);break}k&&(w=y)}c&&((l=!q&&l)&&r--,f&&t.push(l))}if(r+=s,c&&s!==r){o=0;while(q=b[o++])q(t,u,g,h);if(f){if(r>0)while(s--)t[s]||u[s]||(u[s]=F.call(i));u=ua(u)}H.apply(i,u),k&&!f&&u.length>0&&r+b.length>1&&fa.uniqueSort(i)}return k&&(w=y,j=v),t};return c?ha(f):f}return h=fa.compile=function(a,b){var c,d=[],e=[],f=A[a+" "];if(!f){b||(b=g(a)),c=b.length;while(c--)f=wa(b[c]),f[u]?d.push(f):e.push(f);f=A(a,xa(e,d)),f.selector=a}return f},i=fa.select=function(a,b,e,f){var i,j,k,l,m,n="function"==typeof a&&a,o=!f&&g(a=n.selector||a);if(e=e||[],1===o.length){if(j=o[0]=o[0].slice(0),j.length>2&&"ID"===(k=j[0]).type&&c.getById&&9===b.nodeType&&p&&d.relative[j[1].type]){if(b=(d.find.ID(k.matches[0].replace(ba,ca),b)||[])[0],!b)return e;n&&(b=b.parentNode),a=a.slice(j.shift().value.length)}i=W.needsContext.test(a)?0:j.length;while(i--){if(k=j[i],d.relative[l=k.type])break;if((m=d.find[l])&&(f=m(k.matches[0].replace(ba,ca),_.test(j[0].type)&&oa(b.parentNode)||b))){if(j.splice(i,1),a=f.length&&qa(j),!a)return H.apply(e,f),e;break}}}return(n||h(a,o))(f,b,!p,e,!b||_.test(a)&&oa(b.parentNode)||b),e},c.sortStable=u.split("").sort(B).join("")===u,c.detectDuplicates=!!l,m(),c.sortDetached=ia(function(a){return 1&a.compareDocumentPosition(n.createElement("div"))}),ia(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||ja("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&ia(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||ja("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),ia(function(a){return null==a.getAttribute("disabled")})||ja(K,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),fa}(a);n.find=t,n.expr=t.selectors,n.expr[":"]=n.expr.pseudos,n.uniqueSort=n.unique=t.uniqueSort,n.text=t.getText,n.isXMLDoc=t.isXML,n.contains=t.contains;var u=function(a,b,c){var d=[],e=void 0!==c;while((a=a[b])&&9!==a.nodeType)if(1===a.nodeType){if(e&&n(a).is(c))break;d.push(a)}return d},v=function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c},w=n.expr.match.needsContext,x=/^<([\w-]+)\s*\/?>(?:<\/\1>|)$/,y=/^.[^:#\[\.,]*$/;function z(a,b,c){if(n.isFunction(b))return n.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return n.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(y.test(b))return n.filter(b,a,c);b=n.filter(b,a)}return n.grep(a,function(a){return h.call(b,a)>-1!==c})}n.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?n.find.matchesSelector(d,a)?[d]:[]:n.find.matches(a,n.grep(b,function(a){return 1===a.nodeType}))},n.fn.extend({find:function(a){var b,c=this.length,d=[],e=this;if("string"!=typeof a)return this.pushStack(n(a).filter(function(){for(b=0;c>b;b++)if(n.contains(e[b],this))return!0}));for(b=0;c>b;b++)n.find(a,e[b],d);return d=this.pushStack(c>1?n.unique(d):d),d.selector=this.selector?this.selector+" "+a:a,d},filter:function(a){return this.pushStack(z(this,a||[],!1))},not:function(a){return this.pushStack(z(this,a||[],!0))},is:function(a){return!!z(this,"string"==typeof a&&w.test(a)?n(a):a||[],!1).length}});var A,B=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,C=n.fn.init=function(a,b,c){var e,f;if(!a)return this;if(c=c||A,"string"==typeof a){if(e="<"===a[0]&&">"===a[a.length-1]&&a.length>=3?[null,a,null]:B.exec(a),!e||!e[1]&&b)return!b||b.jquery?(b||c).find(a):this.constructor(b).find(a);if(e[1]){if(b=b instanceof n?b[0]:b,n.merge(this,n.parseHTML(e[1],b&&b.nodeType?b.ownerDocument||b:d,!0)),x.test(e[1])&&n.isPlainObject(b))for(e in b)n.isFunction(this[e])?this[e](b[e]):this.attr(e,b[e]);return this}return f=d.getElementById(e[2]),f&&f.parentNode&&(this.length=1,this[0]=f),this.context=d,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):n.isFunction(a)?void 0!==c.ready?c.ready(a):a(n):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),n.makeArray(a,this))};C.prototype=n.fn,A=n(d);var D=/^(?:parents|prev(?:Until|All))/,E={children:!0,contents:!0,next:!0,prev:!0};n.fn.extend({has:function(a){var b=n(a,this),c=b.length;return this.filter(function(){for(var a=0;c>a;a++)if(n.contains(this,b[a]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=w.test(a)||"string"!=typeof a?n(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&n.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?n.uniqueSort(f):f)},index:function(a){return a?"string"==typeof a?h.call(n(a),this[0]):h.call(this,a.jquery?a[0]:a):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(n.uniqueSort(n.merge(this.get(),n(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function F(a,b){while((a=a[b])&&1!==a.nodeType);return a}n.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return u(a,"parentNode")},parentsUntil:function(a,b,c){return u(a,"parentNode",c)},next:function(a){return F(a,"nextSibling")},prev:function(a){return F(a,"previousSibling")},nextAll:function(a){return u(a,"nextSibling")},prevAll:function(a){return u(a,"previousSibling")},nextUntil:function(a,b,c){return u(a,"nextSibling",c)},prevUntil:function(a,b,c){return u(a,"previousSibling",c)},siblings:function(a){return v((a.parentNode||{}).firstChild,a)},children:function(a){return v(a.firstChild)},contents:function(a){return a.contentDocument||n.merge([],a.childNodes)}},function(a,b){n.fn[a]=function(c,d){var e=n.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=n.filter(d,e)),this.length>1&&(E[a]||n.uniqueSort(e),D.test(a)&&e.reverse()),this.pushStack(e)}});var G=/\S+/g;function H(a){var b={};return n.each(a.match(G)||[],function(a,c){b[c]=!0}),b}n.Callbacks=function(a){a="string"==typeof a?H(a):n.extend({},a);var b,c,d,e,f=[],g=[],h=-1,i=function(){for(e=a.once,d=b=!0;g.length;h=-1){c=g.shift();while(++h<f.length)f[h].apply(c[0],c[1])===!1&&a.stopOnFalse&&(h=f.length,c=!1)}a.memory||(c=!1),b=!1,e&&(f=c?[]:"")},j={add:function(){return f&&(c&&!b&&(h=f.length-1,g.push(c)),function d(b){n.each(b,function(b,c){n.isFunction(c)?a.unique&&j.has(c)||f.push(c):c&&c.length&&"string"!==n.type(c)&&d(c)})}(arguments),c&&!b&&i()),this},remove:function(){return n.each(arguments,function(a,b){var c;while((c=n.inArray(b,f,c))>-1)f.splice(c,1),h>=c&&h--}),this},has:function(a){return a?n.inArray(a,f)>-1:f.length>0},empty:function(){return f&&(f=[]),this},disable:function(){return e=g=[],f=c="",this},disabled:function(){return!f},lock:function(){return e=g=[],c||(f=c=""),this},locked:function(){return!!e},fireWith:function(a,c){return e||(c=c||[],c=[a,c.slice?c.slice():c],g.push(c),b||i()),this},fire:function(){return j.fireWith(this,arguments),this},fired:function(){return!!d}};return j},n.extend({Deferred:function(a){var b=[["resolve","done",n.Callbacks("once memory"),"resolved"],["reject","fail",n.Callbacks("once memory"),"rejected"],["notify","progress",n.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return n.Deferred(function(c){n.each(b,function(b,f){var g=n.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&n.isFunction(a.promise)?a.promise().progress(c.notify).done(c.resolve).fail(c.reject):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?n.extend(a,d):d}},e={};return d.pipe=d.then,n.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=e.call(arguments),d=c.length,f=1!==d||a&&n.isFunction(a.promise)?d:0,g=1===f?a:n.Deferred(),h=function(a,b,c){return function(d){b[a]=this,c[a]=arguments.length>1?e.call(arguments):d,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(d>1)for(i=new Array(d),j=new Array(d),k=new Array(d);d>b;b++)c[b]&&n.isFunction(c[b].promise)?c[b].promise().progress(h(b,j,i)).done(h(b,k,c)).fail(g.reject):--f;return f||g.resolveWith(k,c),g.promise()}});var I;n.fn.ready=function(a){return n.ready.promise().done(a),this},n.extend({isReady:!1,readyWait:1,holdReady:function(a){a?n.readyWait++:n.ready(!0)},ready:function(a){(a===!0?--n.readyWait:n.isReady)||(n.isReady=!0,a!==!0&&--n.readyWait>0||(I.resolveWith(d,[n]),n.fn.triggerHandler&&(n(d).triggerHandler("ready"),n(d).off("ready"))))}});function J(){d.removeEventListener("DOMContentLoaded",J),a.removeEventListener("load",J),n.ready()}n.ready.promise=function(b){return I||(I=n.Deferred(),"complete"===d.readyState||"loading"!==d.readyState&&!d.documentElement.doScroll?a.setTimeout(n.ready):(d.addEventListener("DOMContentLoaded",J),a.addEventListener("load",J))),I.promise(b)},n.ready.promise();var K=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===n.type(c)){e=!0;for(h in c)K(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,n.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(n(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f},L=function(a){return 1===a.nodeType||9===a.nodeType||!+a.nodeType};function M(){this.expando=n.expando+M.uid++}M.uid=1,M.prototype={register:function(a,b){var c=b||{};return a.nodeType?a[this.expando]=c:Object.defineProperty(a,this.expando,{value:c,writable:!0,configurable:!0}),a[this.expando]},cache:function(a){if(!L(a))return{};var b=a[this.expando];return b||(b={},L(a)&&(a.nodeType?a[this.expando]=b:Object.defineProperty(a,this.expando,{value:b,configurable:!0}))),b},set:function(a,b,c){var d,e=this.cache(a);if("string"==typeof b)e[b]=c;else for(d in b)e[d]=b[d];return e},get:function(a,b){return void 0===b?this.cache(a):a[this.expando]&&a[this.expando][b]},access:function(a,b,c){var d;return void 0===b||b&&"string"==typeof b&&void 0===c?(d=this.get(a,b),void 0!==d?d:this.get(a,n.camelCase(b))):(this.set(a,b,c),void 0!==c?c:b)},remove:function(a,b){var c,d,e,f=a[this.expando];if(void 0!==f){if(void 0===b)this.register(a);else{n.isArray(b)?d=b.concat(b.map(n.camelCase)):(e=n.camelCase(b),b in f?d=[b,e]:(d=e,d=d in f?[d]:d.match(G)||[])),c=d.length;while(c--)delete f[d[c]]}(void 0===b||n.isEmptyObject(f))&&(a.nodeType?a[this.expando]=void 0:delete a[this.expando])}},hasData:function(a){var b=a[this.expando];return void 0!==b&&!n.isEmptyObject(b)}};var N=new M,O=new M,P=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,Q=/[A-Z]/g;function R(a,b,c){var d;if(void 0===c&&1===a.nodeType)if(d="data-"+b.replace(Q,"-$&").toLowerCase(),c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:P.test(c)?n.parseJSON(c):c;
}catch(e){}O.set(a,b,c)}else c=void 0;return c}n.extend({hasData:function(a){return O.hasData(a)||N.hasData(a)},data:function(a,b,c){return O.access(a,b,c)},removeData:function(a,b){O.remove(a,b)},_data:function(a,b,c){return N.access(a,b,c)},_removeData:function(a,b){N.remove(a,b)}}),n.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=O.get(f),1===f.nodeType&&!N.get(f,"hasDataAttrs"))){c=g.length;while(c--)g[c]&&(d=g[c].name,0===d.indexOf("data-")&&(d=n.camelCase(d.slice(5)),R(f,d,e[d])));N.set(f,"hasDataAttrs",!0)}return e}return"object"==typeof a?this.each(function(){O.set(this,a)}):K(this,function(b){var c,d;if(f&&void 0===b){if(c=O.get(f,a)||O.get(f,a.replace(Q,"-$&").toLowerCase()),void 0!==c)return c;if(d=n.camelCase(a),c=O.get(f,d),void 0!==c)return c;if(c=R(f,d,void 0),void 0!==c)return c}else d=n.camelCase(a),this.each(function(){var c=O.get(this,d);O.set(this,d,b),a.indexOf("-")>-1&&void 0!==c&&O.set(this,a,b)})},null,b,arguments.length>1,null,!0)},removeData:function(a){return this.each(function(){O.remove(this,a)})}}),n.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=N.get(a,b),c&&(!d||n.isArray(c)?d=N.access(a,b,n.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=n.queue(a,b),d=c.length,e=c.shift(),f=n._queueHooks(a,b),g=function(){n.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return N.get(a,c)||N.access(a,c,{empty:n.Callbacks("once memory").add(function(){N.remove(a,[b+"queue",c])})})}}),n.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?n.queue(this[0],a):void 0===b?this:this.each(function(){var c=n.queue(this,a,b);n._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&n.dequeue(this,a)})},dequeue:function(a){return this.each(function(){n.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=n.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=N.get(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}});var S=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,T=new RegExp("^(?:([+-])=|)("+S+")([a-z%]*)$","i"),U=["Top","Right","Bottom","Left"],V=function(a,b){return a=b||a,"none"===n.css(a,"display")||!n.contains(a.ownerDocument,a)};function W(a,b,c,d){var e,f=1,g=20,h=d?function(){return d.cur()}:function(){return n.css(a,b,"")},i=h(),j=c&&c[3]||(n.cssNumber[b]?"":"px"),k=(n.cssNumber[b]||"px"!==j&&+i)&&T.exec(n.css(a,b));if(k&&k[3]!==j){j=j||k[3],c=c||[],k=+i||1;do f=f||".5",k/=f,n.style(a,b,k+j);while(f!==(f=h()/i)&&1!==f&&--g)}return c&&(k=+k||+i||0,e=c[1]?k+(c[1]+1)*c[2]:+c[2],d&&(d.unit=j,d.start=k,d.end=e)),e}var X=/^(?:checkbox|radio)$/i,Y=/<([\w:-]+)/,Z=/^$|\/(?:java|ecma)script/i,$={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};$.optgroup=$.option,$.tbody=$.tfoot=$.colgroup=$.caption=$.thead,$.th=$.td;function _(a,b){var c="undefined"!=typeof a.getElementsByTagName?a.getElementsByTagName(b||"*"):"undefined"!=typeof a.querySelectorAll?a.querySelectorAll(b||"*"):[];return void 0===b||b&&n.nodeName(a,b)?n.merge([a],c):c}function aa(a,b){for(var c=0,d=a.length;d>c;c++)N.set(a[c],"globalEval",!b||N.get(b[c],"globalEval"))}var ba=/<|&#?\w+;/;function ca(a,b,c,d,e){for(var f,g,h,i,j,k,l=b.createDocumentFragment(),m=[],o=0,p=a.length;p>o;o++)if(f=a[o],f||0===f)if("object"===n.type(f))n.merge(m,f.nodeType?[f]:f);else if(ba.test(f)){g=g||l.appendChild(b.createElement("div")),h=(Y.exec(f)||["",""])[1].toLowerCase(),i=$[h]||$._default,g.innerHTML=i[1]+n.htmlPrefilter(f)+i[2],k=i[0];while(k--)g=g.lastChild;n.merge(m,g.childNodes),g=l.firstChild,g.textContent=""}else m.push(b.createTextNode(f));l.textContent="",o=0;while(f=m[o++])if(d&&n.inArray(f,d)>-1)e&&e.push(f);else if(j=n.contains(f.ownerDocument,f),g=_(l.appendChild(f),"script"),j&&aa(g),c){k=0;while(f=g[k++])Z.test(f.type||"")&&c.push(f)}return l}!function(){var a=d.createDocumentFragment(),b=a.appendChild(d.createElement("div")),c=d.createElement("input");c.setAttribute("type","radio"),c.setAttribute("checked","checked"),c.setAttribute("name","t"),b.appendChild(c),l.checkClone=b.cloneNode(!0).cloneNode(!0).lastChild.checked,b.innerHTML="<textarea>x</textarea>",l.noCloneChecked=!!b.cloneNode(!0).lastChild.defaultValue}();var da=/^key/,ea=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,fa=/^([^.]*)(?:\.(.+)|)/;function ga(){return!0}function ha(){return!1}function ia(){try{return d.activeElement}catch(a){}}function ja(a,b,c,d,e,f){var g,h;if("object"==typeof b){"string"!=typeof c&&(d=d||c,c=void 0);for(h in b)ja(a,h,c,d,b[h],f);return a}if(null==d&&null==e?(e=c,d=c=void 0):null==e&&("string"==typeof c?(e=d,d=void 0):(e=d,d=c,c=void 0)),e===!1)e=ha;else if(!e)return a;return 1===f&&(g=e,e=function(a){return n().off(a),g.apply(this,arguments)},e.guid=g.guid||(g.guid=n.guid++)),a.each(function(){n.event.add(this,b,e,d,c)})}n.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=N.get(a);if(r){c.handler&&(f=c,c=f.handler,e=f.selector),c.guid||(c.guid=n.guid++),(i=r.events)||(i=r.events={}),(g=r.handle)||(g=r.handle=function(b){return"undefined"!=typeof n&&n.event.triggered!==b.type?n.event.dispatch.apply(a,arguments):void 0}),b=(b||"").match(G)||[""],j=b.length;while(j--)h=fa.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o&&(l=n.event.special[o]||{},o=(e?l.delegateType:l.bindType)||o,l=n.event.special[o]||{},k=n.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&n.expr.match.needsContext.test(e),namespace:p.join(".")},f),(m=i[o])||(m=i[o]=[],m.delegateCount=0,l.setup&&l.setup.call(a,d,p,g)!==!1||a.addEventListener&&a.addEventListener(o,g)),l.add&&(l.add.call(a,k),k.handler.guid||(k.handler.guid=c.guid)),e?m.splice(m.delegateCount++,0,k):m.push(k),n.event.global[o]=!0)}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=N.hasData(a)&&N.get(a);if(r&&(i=r.events)){b=(b||"").match(G)||[""],j=b.length;while(j--)if(h=fa.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=n.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,m=i[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),g=f=m.length;while(f--)k=m[f],!e&&q!==k.origType||c&&c.guid!==k.guid||h&&!h.test(k.namespace)||d&&d!==k.selector&&("**"!==d||!k.selector)||(m.splice(f,1),k.selector&&m.delegateCount--,l.remove&&l.remove.call(a,k));g&&!m.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||n.removeEvent(a,o,r.handle),delete i[o])}else for(o in i)n.event.remove(a,o+b[j],c,d,!0);n.isEmptyObject(i)&&N.remove(a,"handle events")}},dispatch:function(a){a=n.event.fix(a);var b,c,d,f,g,h=[],i=e.call(arguments),j=(N.get(this,"events")||{})[a.type]||[],k=n.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=n.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,c=0;while((g=f.handlers[c++])&&!a.isImmediatePropagationStopped())a.rnamespace&&!a.rnamespace.test(g.namespace)||(a.handleObj=g,a.data=g.data,d=((n.event.special[g.origType]||{}).handle||g.handler).apply(f.elem,i),void 0!==d&&(a.result=d)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&("click"!==a.type||isNaN(a.button)||a.button<1))for(;i!==this;i=i.parentNode||this)if(1===i.nodeType&&(i.disabled!==!0||"click"!==a.type)){for(d=[],c=0;h>c;c++)f=b[c],e=f.selector+" ",void 0===d[e]&&(d[e]=f.needsContext?n(e,this).index(i)>-1:n.find(e,this,null,[i]).length),d[e]&&d.push(f);d.length&&g.push({elem:i,handlers:d})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},props:"altKey bubbles cancelable ctrlKey currentTarget detail eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,e,f,g=b.button;return null==a.pageX&&null!=b.clientX&&(c=a.target.ownerDocument||d,e=c.documentElement,f=c.body,a.pageX=b.clientX+(e&&e.scrollLeft||f&&f.scrollLeft||0)-(e&&e.clientLeft||f&&f.clientLeft||0),a.pageY=b.clientY+(e&&e.scrollTop||f&&f.scrollTop||0)-(e&&e.clientTop||f&&f.clientTop||0)),a.which||void 0===g||(a.which=1&g?1:2&g?3:4&g?2:0),a}},fix:function(a){if(a[n.expando])return a;var b,c,e,f=a.type,g=a,h=this.fixHooks[f];h||(this.fixHooks[f]=h=ea.test(f)?this.mouseHooks:da.test(f)?this.keyHooks:{}),e=h.props?this.props.concat(h.props):this.props,a=new n.Event(g),b=e.length;while(b--)c=e[b],a[c]=g[c];return a.target||(a.target=d),3===a.target.nodeType&&(a.target=a.target.parentNode),h.filter?h.filter(a,g):a},special:{load:{noBubble:!0},focus:{trigger:function(){return this!==ia()&&this.focus?(this.focus(),!1):void 0},delegateType:"focusin"},blur:{trigger:function(){return this===ia()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return"checkbox"===this.type&&this.click&&n.nodeName(this,"input")?(this.click(),!1):void 0},_default:function(a){return n.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&a.originalEvent&&(a.originalEvent.returnValue=a.result)}}}},n.removeEvent=function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c)},n.Event=function(a,b){return this instanceof n.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&a.returnValue===!1?ga:ha):this.type=a,b&&n.extend(this,b),this.timeStamp=a&&a.timeStamp||n.now(),void(this[n.expando]=!0)):new n.Event(a,b)},n.Event.prototype={constructor:n.Event,isDefaultPrevented:ha,isPropagationStopped:ha,isImmediatePropagationStopped:ha,isSimulated:!1,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=ga,a&&!this.isSimulated&&a.preventDefault()},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=ga,a&&!this.isSimulated&&a.stopPropagation()},stopImmediatePropagation:function(){var a=this.originalEvent;this.isImmediatePropagationStopped=ga,a&&!this.isSimulated&&a.stopImmediatePropagation(),this.stopPropagation()}},n.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(a,b){n.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return e&&(e===d||n.contains(d,e))||(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),n.fn.extend({on:function(a,b,c,d){return ja(this,a,b,c,d)},one:function(a,b,c,d){return ja(this,a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,n(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return b!==!1&&"function"!=typeof b||(c=b,b=void 0),c===!1&&(c=ha),this.each(function(){n.event.remove(this,a,c,b)})}});var ka=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi,la=/<script|<style|<link/i,ma=/checked\s*(?:[^=]|=\s*.checked.)/i,na=/^true\/(.*)/,oa=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function pa(a,b){return n.nodeName(a,"table")&&n.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function qa(a){return a.type=(null!==a.getAttribute("type"))+"/"+a.type,a}function ra(a){var b=na.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function sa(a,b){var c,d,e,f,g,h,i,j;if(1===b.nodeType){if(N.hasData(a)&&(f=N.access(a),g=N.set(b,f),j=f.events)){delete g.handle,g.events={};for(e in j)for(c=0,d=j[e].length;d>c;c++)n.event.add(b,e,j[e][c])}O.hasData(a)&&(h=O.access(a),i=n.extend({},h),O.set(b,i))}}function ta(a,b){var c=b.nodeName.toLowerCase();"input"===c&&X.test(a.type)?b.checked=a.checked:"input"!==c&&"textarea"!==c||(b.defaultValue=a.defaultValue)}function ua(a,b,c,d){b=f.apply([],b);var e,g,h,i,j,k,m=0,o=a.length,p=o-1,q=b[0],r=n.isFunction(q);if(r||o>1&&"string"==typeof q&&!l.checkClone&&ma.test(q))return a.each(function(e){var f=a.eq(e);r&&(b[0]=q.call(this,e,f.html())),ua(f,b,c,d)});if(o&&(e=ca(b,a[0].ownerDocument,!1,a,d),g=e.firstChild,1===e.childNodes.length&&(e=g),g||d)){for(h=n.map(_(e,"script"),qa),i=h.length;o>m;m++)j=e,m!==p&&(j=n.clone(j,!0,!0),i&&n.merge(h,_(j,"script"))),c.call(a[m],j,m);if(i)for(k=h[h.length-1].ownerDocument,n.map(h,ra),m=0;i>m;m++)j=h[m],Z.test(j.type||"")&&!N.access(j,"globalEval")&&n.contains(k,j)&&(j.src?n._evalUrl&&n._evalUrl(j.src):n.globalEval(j.textContent.replace(oa,"")))}return a}function va(a,b,c){for(var d,e=b?n.filter(b,a):a,f=0;null!=(d=e[f]);f++)c||1!==d.nodeType||n.cleanData(_(d)),d.parentNode&&(c&&n.contains(d.ownerDocument,d)&&aa(_(d,"script")),d.parentNode.removeChild(d));return a}n.extend({htmlPrefilter:function(a){return a.replace(ka,"<$1></$2>")},clone:function(a,b,c){var d,e,f,g,h=a.cloneNode(!0),i=n.contains(a.ownerDocument,a);if(!(l.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||n.isXMLDoc(a)))for(g=_(h),f=_(a),d=0,e=f.length;e>d;d++)ta(f[d],g[d]);if(b)if(c)for(f=f||_(a),g=g||_(h),d=0,e=f.length;e>d;d++)sa(f[d],g[d]);else sa(a,h);return g=_(h,"script"),g.length>0&&aa(g,!i&&_(a,"script")),h},cleanData:function(a){for(var b,c,d,e=n.event.special,f=0;void 0!==(c=a[f]);f++)if(L(c)){if(b=c[N.expando]){if(b.events)for(d in b.events)e[d]?n.event.remove(c,d):n.removeEvent(c,d,b.handle);c[N.expando]=void 0}c[O.expando]&&(c[O.expando]=void 0)}}}),n.fn.extend({domManip:ua,detach:function(a){return va(this,a,!0)},remove:function(a){return va(this,a)},text:function(a){return K(this,function(a){return void 0===a?n.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=a)})},null,a,arguments.length)},append:function(){return ua(this,arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=pa(this,a);b.appendChild(a)}})},prepend:function(){return ua(this,arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=pa(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return ua(this,arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return ua(this,arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},empty:function(){for(var a,b=0;null!=(a=this[b]);b++)1===a.nodeType&&(n.cleanData(_(a,!1)),a.textContent="");return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return n.clone(this,a,b)})},html:function(a){return K(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a&&1===b.nodeType)return b.innerHTML;if("string"==typeof a&&!la.test(a)&&!$[(Y.exec(a)||["",""])[1].toLowerCase()]){a=n.htmlPrefilter(a);try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(n.cleanData(_(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=[];return ua(this,arguments,function(b){var c=this.parentNode;n.inArray(this,a)<0&&(n.cleanData(_(this)),c&&c.replaceChild(b,this))},a)}}),n.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){n.fn[a]=function(a){for(var c,d=[],e=n(a),f=e.length-1,h=0;f>=h;h++)c=h===f?this:this.clone(!0),n(e[h])[b](c),g.apply(d,c.get());return this.pushStack(d)}});var wa,xa={HTML:"block",BODY:"block"};function ya(a,b){var c=n(b.createElement(a)).appendTo(b.body),d=n.css(c[0],"display");return c.detach(),d}function za(a){var b=d,c=xa[a];return c||(c=ya(a,b),"none"!==c&&c||(wa=(wa||n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=wa[0].contentDocument,b.write(),b.close(),c=ya(a,b),wa.detach()),xa[a]=c),c}var Aa=/^margin/,Ba=new RegExp("^("+S+")(?!px)[a-z%]+$","i"),Ca=function(b){var c=b.ownerDocument.defaultView;return c&&c.opener||(c=a),c.getComputedStyle(b)},Da=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e},Ea=d.documentElement;!function(){var b,c,e,f,g=d.createElement("div"),h=d.createElement("div");if(h.style){h.style.backgroundClip="content-box",h.cloneNode(!0).style.backgroundClip="",l.clearCloneStyle="content-box"===h.style.backgroundClip,g.style.cssText="border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute",g.appendChild(h);function i(){h.style.cssText="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%",h.innerHTML="",Ea.appendChild(g);var d=a.getComputedStyle(h);b="1%"!==d.top,f="2px"===d.marginLeft,c="4px"===d.width,h.style.marginRight="50%",e="4px"===d.marginRight,Ea.removeChild(g)}n.extend(l,{pixelPosition:function(){return i(),b},boxSizingReliable:function(){return null==c&&i(),c},pixelMarginRight:function(){return null==c&&i(),e},reliableMarginLeft:function(){return null==c&&i(),f},reliableMarginRight:function(){var b,c=h.appendChild(d.createElement("div"));return c.style.cssText=h.style.cssText="-webkit-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0",c.style.marginRight=c.style.width="0",h.style.width="1px",Ea.appendChild(g),b=!parseFloat(a.getComputedStyle(c).marginRight),Ea.removeChild(g),h.removeChild(c),b}})}}();function Fa(a,b,c){var d,e,f,g,h=a.style;return c=c||Ca(a),g=c?c.getPropertyValue(b)||c[b]:void 0,""!==g&&void 0!==g||n.contains(a.ownerDocument,a)||(g=n.style(a,b)),c&&!l.pixelMarginRight()&&Ba.test(g)&&Aa.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f),void 0!==g?g+"":g}function Ga(a,b){return{get:function(){return a()?void delete this.get:(this.get=b).apply(this,arguments)}}}var Ha=/^(none|table(?!-c[ea]).+)/,Ia={position:"absolute",visibility:"hidden",display:"block"},Ja={letterSpacing:"0",fontWeight:"400"},Ka=["Webkit","O","Moz","ms"],La=d.createElement("div").style;function Ma(a){if(a in La)return a;var b=a[0].toUpperCase()+a.slice(1),c=Ka.length;while(c--)if(a=Ka[c]+b,a in La)return a}function Na(a,b,c){var d=T.exec(b);return d?Math.max(0,d[2]-(c||0))+(d[3]||"px"):b}function Oa(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=n.css(a,c+U[f],!0,e)),d?("content"===c&&(g-=n.css(a,"padding"+U[f],!0,e)),"margin"!==c&&(g-=n.css(a,"border"+U[f]+"Width",!0,e))):(g+=n.css(a,"padding"+U[f],!0,e),"padding"!==c&&(g+=n.css(a,"border"+U[f]+"Width",!0,e)));return g}function Pa(a,b,c){var d=!0,e="width"===b?a.offsetWidth:a.offsetHeight,f=Ca(a),g="border-box"===n.css(a,"boxSizing",!1,f);if(0>=e||null==e){if(e=Fa(a,b,f),(0>e||null==e)&&(e=a.style[b]),Ba.test(e))return e;d=g&&(l.boxSizingReliable()||e===a.style[b]),e=parseFloat(e)||0}return e+Oa(a,b,c||(g?"border":"content"),d,f)+"px"}function Qa(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=N.get(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&V(d)&&(f[g]=N.access(d,"olddisplay",za(d.nodeName)))):(e=V(d),"none"===c&&e||N.set(d,"olddisplay",e?c:n.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}n.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=Fa(a,"opacity");return""===c?"1":c}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":"cssFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=n.camelCase(b),i=a.style;return b=n.cssProps[h]||(n.cssProps[h]=Ma(h)||h),g=n.cssHooks[b]||n.cssHooks[h],void 0===c?g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b]:(f=typeof c,"string"===f&&(e=T.exec(c))&&e[1]&&(c=W(a,b,e),f="number"),null!=c&&c===c&&("number"===f&&(c+=e&&e[3]||(n.cssNumber[h]?"":"px")),l.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),g&&"set"in g&&void 0===(c=g.set(a,c,d))||(i[b]=c)),void 0)}},css:function(a,b,c,d){var e,f,g,h=n.camelCase(b);return b=n.cssProps[h]||(n.cssProps[h]=Ma(h)||h),g=n.cssHooks[b]||n.cssHooks[h],g&&"get"in g&&(e=g.get(a,!0,c)),void 0===e&&(e=Fa(a,b,d)),"normal"===e&&b in Ja&&(e=Ja[b]),""===c||c?(f=parseFloat(e),c===!0||isFinite(f)?f||0:e):e}}),n.each(["height","width"],function(a,b){n.cssHooks[b]={get:function(a,c,d){return c?Ha.test(n.css(a,"display"))&&0===a.offsetWidth?Da(a,Ia,function(){return Pa(a,b,d)}):Pa(a,b,d):void 0},set:function(a,c,d){var e,f=d&&Ca(a),g=d&&Oa(a,b,d,"border-box"===n.css(a,"boxSizing",!1,f),f);return g&&(e=T.exec(c))&&"px"!==(e[3]||"px")&&(a.style[b]=c,c=n.css(a,b)),Na(a,c,g)}}}),n.cssHooks.marginLeft=Ga(l.reliableMarginLeft,function(a,b){return b?(parseFloat(Fa(a,"marginLeft"))||a.getBoundingClientRect().left-Da(a,{marginLeft:0},function(){return a.getBoundingClientRect().left}))+"px":void 0}),n.cssHooks.marginRight=Ga(l.reliableMarginRight,function(a,b){return b?Da(a,{display:"inline-block"},Fa,[a,"marginRight"]):void 0}),n.each({margin:"",padding:"",border:"Width"},function(a,b){n.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+U[d]+b]=f[d]||f[d-2]||f[0];return e}},Aa.test(a)||(n.cssHooks[a+b].set=Na)}),n.fn.extend({css:function(a,b){return K(this,function(a,b,c){var d,e,f={},g=0;if(n.isArray(b)){for(d=Ca(a),e=b.length;e>g;g++)f[b[g]]=n.css(a,b[g],!1,d);return f}return void 0!==c?n.style(a,b,c):n.css(a,b)},a,b,arguments.length>1)},show:function(){return Qa(this,!0)},hide:function(){return Qa(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){V(this)?n(this).show():n(this).hide()})}});function Ra(a,b,c,d,e){return new Ra.prototype.init(a,b,c,d,e)}n.Tween=Ra,Ra.prototype={constructor:Ra,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||n.easing._default,this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(n.cssNumber[c]?"":"px")},cur:function(){var a=Ra.propHooks[this.prop];return a&&a.get?a.get(this):Ra.propHooks._default.get(this)},run:function(a){var b,c=Ra.propHooks[this.prop];return this.options.duration?this.pos=b=n.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):this.pos=b=a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):Ra.propHooks._default.set(this),this}},Ra.prototype.init.prototype=Ra.prototype,Ra.propHooks={_default:{get:function(a){var b;return 1!==a.elem.nodeType||null!=a.elem[a.prop]&&null==a.elem.style[a.prop]?a.elem[a.prop]:(b=n.css(a.elem,a.prop,""),b&&"auto"!==b?b:0)},set:function(a){n.fx.step[a.prop]?n.fx.step[a.prop](a):1!==a.elem.nodeType||null==a.elem.style[n.cssProps[a.prop]]&&!n.cssHooks[a.prop]?a.elem[a.prop]=a.now:n.style(a.elem,a.prop,a.now+a.unit)}}},Ra.propHooks.scrollTop=Ra.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},n.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2},_default:"swing"},n.fx=Ra.prototype.init,n.fx.step={};var Sa,Ta,Ua=/^(?:toggle|show|hide)$/,Va=/queueHooks$/;function Wa(){return a.setTimeout(function(){Sa=void 0}),Sa=n.now()}function Xa(a,b){var c,d=0,e={height:a};for(b=b?1:0;4>d;d+=2-b)c=U[d],e["margin"+c]=e["padding"+c]=a;return b&&(e.opacity=e.width=a),e}function Ya(a,b,c){for(var d,e=(_a.tweeners[b]||[]).concat(_a.tweeners["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function Za(a,b,c){var d,e,f,g,h,i,j,k,l=this,m={},o=a.style,p=a.nodeType&&V(a),q=N.get(a,"fxshow");c.queue||(h=n._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,l.always(function(){l.always(function(){h.unqueued--,n.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[o.overflow,o.overflowX,o.overflowY],j=n.css(a,"display"),k="none"===j?N.get(a,"olddisplay")||za(a.nodeName):j,"inline"===k&&"none"===n.css(a,"float")&&(o.display="inline-block")),c.overflow&&(o.overflow="hidden",l.always(function(){o.overflow=c.overflow[0],o.overflowX=c.overflow[1],o.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],Ua.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(p?"hide":"show")){if("show"!==e||!q||void 0===q[d])continue;p=!0}m[d]=q&&q[d]||n.style(a,d)}else j=void 0;if(n.isEmptyObject(m))"inline"===("none"===j?za(a.nodeName):j)&&(o.display=j);else{q?"hidden"in q&&(p=q.hidden):q=N.access(a,"fxshow",{}),f&&(q.hidden=!p),p?n(a).show():l.done(function(){n(a).hide()}),l.done(function(){var b;N.remove(a,"fxshow");for(b in m)n.style(a,b,m[b])});for(d in m)g=Ya(p?q[d]:0,d,l),d in q||(q[d]=g.start,p&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function $a(a,b){var c,d,e,f,g;for(c in a)if(d=n.camelCase(c),e=b[d],f=a[c],n.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=n.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function _a(a,b,c){var d,e,f=0,g=_a.prefilters.length,h=n.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=Sa||Wa(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:n.extend({},b),opts:n.extend(!0,{specialEasing:{},easing:n.easing._default},c),originalProperties:b,originalOptions:c,startTime:Sa||Wa(),duration:c.duration,tweens:[],createTween:function(b,c){var d=n.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?(h.notifyWith(a,[j,1,0]),h.resolveWith(a,[j,b])):h.rejectWith(a,[j,b]),this}}),k=j.props;for($a(k,j.opts.specialEasing);g>f;f++)if(d=_a.prefilters[f].call(j,a,k,j.opts))return n.isFunction(d.stop)&&(n._queueHooks(j.elem,j.opts.queue).stop=n.proxy(d.stop,d)),d;return n.map(k,Ya,j),n.isFunction(j.opts.start)&&j.opts.start.call(a,j),n.fx.timer(n.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}n.Animation=n.extend(_a,{tweeners:{"*":[function(a,b){var c=this.createTween(a,b);return W(c.elem,a,T.exec(b),c),c}]},tweener:function(a,b){n.isFunction(a)?(b=a,a=["*"]):a=a.match(G);for(var c,d=0,e=a.length;e>d;d++)c=a[d],_a.tweeners[c]=_a.tweeners[c]||[],_a.tweeners[c].unshift(b)},prefilters:[Za],prefilter:function(a,b){b?_a.prefilters.unshift(a):_a.prefilters.push(a)}}),n.speed=function(a,b,c){var d=a&&"object"==typeof a?n.extend({},a):{complete:c||!c&&b||n.isFunction(a)&&a,duration:a,easing:c&&b||b&&!n.isFunction(b)&&b};return d.duration=n.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in n.fx.speeds?n.fx.speeds[d.duration]:n.fx.speeds._default,null!=d.queue&&d.queue!==!0||(d.queue="fx"),d.old=d.complete,d.complete=function(){n.isFunction(d.old)&&d.old.call(this),d.queue&&n.dequeue(this,d.queue)},d},n.fn.extend({fadeTo:function(a,b,c,d){return this.filter(V).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=n.isEmptyObject(a),f=n.speed(b,c,d),g=function(){var b=_a(this,n.extend({},a),f);(e||N.get(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=n.timers,g=N.get(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&Va.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));!b&&c||n.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=N.get(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=n.timers,g=d?d.length:0;for(c.finish=!0,n.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),n.each(["toggle","show","hide"],function(a,b){var c=n.fn[b];n.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(Xa(b,!0),a,d,e)}}),n.each({slideDown:Xa("show"),slideUp:Xa("hide"),slideToggle:Xa("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){n.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),n.timers=[],n.fx.tick=function(){var a,b=0,c=n.timers;for(Sa=n.now();b<c.length;b++)a=c[b],a()||c[b]!==a||c.splice(b--,1);c.length||n.fx.stop(),Sa=void 0},n.fx.timer=function(a){n.timers.push(a),a()?n.fx.start():n.timers.pop()},n.fx.interval=13,n.fx.start=function(){Ta||(Ta=a.setInterval(n.fx.tick,n.fx.interval))},n.fx.stop=function(){a.clearInterval(Ta),Ta=null},n.fx.speeds={slow:600,fast:200,_default:400},n.fn.delay=function(b,c){return b=n.fx?n.fx.speeds[b]||b:b,c=c||"fx",this.queue(c,function(c,d){var e=a.setTimeout(c,b);d.stop=function(){a.clearTimeout(e)}})},function(){var a=d.createElement("input"),b=d.createElement("select"),c=b.appendChild(d.createElement("option"));a.type="checkbox",l.checkOn=""!==a.value,l.optSelected=c.selected,b.disabled=!0,l.optDisabled=!c.disabled,a=d.createElement("input"),a.value="t",a.type="radio",l.radioValue="t"===a.value}();var ab,bb=n.expr.attrHandle;n.fn.extend({attr:function(a,b){return K(this,n.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){n.removeAttr(this,a)})}}),n.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(3!==f&&8!==f&&2!==f)return"undefined"==typeof a.getAttribute?n.prop(a,b,c):(1===f&&n.isXMLDoc(a)||(b=b.toLowerCase(),e=n.attrHooks[b]||(n.expr.match.bool.test(b)?ab:void 0)),void 0!==c?null===c?void n.removeAttr(a,b):e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:(a.setAttribute(b,c+""),c):e&&"get"in e&&null!==(d=e.get(a,b))?d:(d=n.find.attr(a,b),null==d?void 0:d))},attrHooks:{type:{set:function(a,b){if(!l.radioValue&&"radio"===b&&n.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(G);if(f&&1===a.nodeType)while(c=f[e++])d=n.propFix[c]||c,n.expr.match.bool.test(c)&&(a[d]=!1),a.removeAttribute(c)}}),ab={set:function(a,b,c){return b===!1?n.removeAttr(a,c):a.setAttribute(c,c),c}},n.each(n.expr.match.bool.source.match(/\w+/g),function(a,b){var c=bb[b]||n.find.attr;bb[b]=function(a,b,d){var e,f;return d||(f=bb[b],bb[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,bb[b]=f),e}});var cb=/^(?:input|select|textarea|button)$/i,db=/^(?:a|area)$/i;n.fn.extend({prop:function(a,b){return K(this,n.prop,a,b,arguments.length>1)},removeProp:function(a){return this.each(function(){delete this[n.propFix[a]||a]})}}),n.extend({prop:function(a,b,c){var d,e,f=a.nodeType;if(3!==f&&8!==f&&2!==f)return 1===f&&n.isXMLDoc(a)||(b=n.propFix[b]||b,e=n.propHooks[b]),
void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){var b=n.find.attr(a,"tabindex");return b?parseInt(b,10):cb.test(a.nodeName)||db.test(a.nodeName)&&a.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),l.optSelected||(n.propHooks.selected={get:function(a){var b=a.parentNode;return b&&b.parentNode&&b.parentNode.selectedIndex,null},set:function(a){var b=a.parentNode;b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex)}}),n.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){n.propFix[this.toLowerCase()]=this});var eb=/[\t\r\n\f]/g;function fb(a){return a.getAttribute&&a.getAttribute("class")||""}n.fn.extend({addClass:function(a){var b,c,d,e,f,g,h,i=0;if(n.isFunction(a))return this.each(function(b){n(this).addClass(a.call(this,b,fb(this)))});if("string"==typeof a&&a){b=a.match(G)||[];while(c=this[i++])if(e=fb(c),d=1===c.nodeType&&(" "+e+" ").replace(eb," ")){g=0;while(f=b[g++])d.indexOf(" "+f+" ")<0&&(d+=f+" ");h=n.trim(d),e!==h&&c.setAttribute("class",h)}}return this},removeClass:function(a){var b,c,d,e,f,g,h,i=0;if(n.isFunction(a))return this.each(function(b){n(this).removeClass(a.call(this,b,fb(this)))});if(!arguments.length)return this.attr("class","");if("string"==typeof a&&a){b=a.match(G)||[];while(c=this[i++])if(e=fb(c),d=1===c.nodeType&&(" "+e+" ").replace(eb," ")){g=0;while(f=b[g++])while(d.indexOf(" "+f+" ")>-1)d=d.replace(" "+f+" "," ");h=n.trim(d),e!==h&&c.setAttribute("class",h)}}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):n.isFunction(a)?this.each(function(c){n(this).toggleClass(a.call(this,c,fb(this),b),b)}):this.each(function(){var b,d,e,f;if("string"===c){d=0,e=n(this),f=a.match(G)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else void 0!==a&&"boolean"!==c||(b=fb(this),b&&N.set(this,"__className__",b),this.setAttribute&&this.setAttribute("class",b||a===!1?"":N.get(this,"__className__")||""))})},hasClass:function(a){var b,c,d=0;b=" "+a+" ";while(c=this[d++])if(1===c.nodeType&&(" "+fb(c)+" ").replace(eb," ").indexOf(b)>-1)return!0;return!1}});var gb=/\r/g,hb=/[\x20\t\r\n\f]+/g;n.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=n.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,n(this).val()):a,null==e?e="":"number"==typeof e?e+="":n.isArray(e)&&(e=n.map(e,function(a){return null==a?"":a+""})),b=n.valHooks[this.type]||n.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=n.valHooks[e.type]||n.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(gb,""):null==c?"":c)}}}),n.extend({valHooks:{option:{get:function(a){var b=n.find.attr(a,"value");return null!=b?b:n.trim(n.text(a)).replace(hb," ")}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],(c.selected||i===e)&&(l.optDisabled?!c.disabled:null===c.getAttribute("disabled"))&&(!c.parentNode.disabled||!n.nodeName(c.parentNode,"optgroup"))){if(b=n(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=n.makeArray(b),g=e.length;while(g--)d=e[g],(d.selected=n.inArray(n.valHooks.option.get(d),f)>-1)&&(c=!0);return c||(a.selectedIndex=-1),f}}}}),n.each(["radio","checkbox"],function(){n.valHooks[this]={set:function(a,b){return n.isArray(b)?a.checked=n.inArray(n(a).val(),b)>-1:void 0}},l.checkOn||(n.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})});var ib=/^(?:focusinfocus|focusoutblur)$/;n.extend(n.event,{trigger:function(b,c,e,f){var g,h,i,j,l,m,o,p=[e||d],q=k.call(b,"type")?b.type:b,r=k.call(b,"namespace")?b.namespace.split("."):[];if(h=i=e=e||d,3!==e.nodeType&&8!==e.nodeType&&!ib.test(q+n.event.triggered)&&(q.indexOf(".")>-1&&(r=q.split("."),q=r.shift(),r.sort()),l=q.indexOf(":")<0&&"on"+q,b=b[n.expando]?b:new n.Event(q,"object"==typeof b&&b),b.isTrigger=f?2:3,b.namespace=r.join("."),b.rnamespace=b.namespace?new RegExp("(^|\\.)"+r.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=e),c=null==c?[b]:n.makeArray(c,[b]),o=n.event.special[q]||{},f||!o.trigger||o.trigger.apply(e,c)!==!1)){if(!f&&!o.noBubble&&!n.isWindow(e)){for(j=o.delegateType||q,ib.test(j+q)||(h=h.parentNode);h;h=h.parentNode)p.push(h),i=h;i===(e.ownerDocument||d)&&p.push(i.defaultView||i.parentWindow||a)}g=0;while((h=p[g++])&&!b.isPropagationStopped())b.type=g>1?j:o.bindType||q,m=(N.get(h,"events")||{})[b.type]&&N.get(h,"handle"),m&&m.apply(h,c),m=l&&h[l],m&&m.apply&&L(h)&&(b.result=m.apply(h,c),b.result===!1&&b.preventDefault());return b.type=q,f||b.isDefaultPrevented()||o._default&&o._default.apply(p.pop(),c)!==!1||!L(e)||l&&n.isFunction(e[q])&&!n.isWindow(e)&&(i=e[l],i&&(e[l]=null),n.event.triggered=q,e[q](),n.event.triggered=void 0,i&&(e[l]=i)),b.result}},simulate:function(a,b,c){var d=n.extend(new n.Event,c,{type:a,isSimulated:!0});n.event.trigger(d,null,b)}}),n.fn.extend({trigger:function(a,b){return this.each(function(){n.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?n.event.trigger(a,b,c,!0):void 0}}),n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){n.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),n.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}}),l.focusin="onfocusin"in a,l.focusin||n.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){n.event.simulate(b,a.target,n.event.fix(a))};n.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=N.access(d,b);e||d.addEventListener(a,c,!0),N.access(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=N.access(d,b)-1;e?N.access(d,b,e):(d.removeEventListener(a,c,!0),N.remove(d,b))}}});var jb=a.location,kb=n.now(),lb=/\?/;n.parseJSON=function(a){return JSON.parse(a+"")},n.parseXML=function(b){var c;if(!b||"string"!=typeof b)return null;try{c=(new a.DOMParser).parseFromString(b,"text/xml")}catch(d){c=void 0}return c&&!c.getElementsByTagName("parsererror").length||n.error("Invalid XML: "+b),c};var mb=/#.*$/,nb=/([?&])_=[^&]*/,ob=/^(.*?):[ \t]*([^\r\n]*)$/gm,pb=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,qb=/^(?:GET|HEAD)$/,rb=/^\/\//,sb={},tb={},ub="*/".concat("*"),vb=d.createElement("a");vb.href=jb.href;function wb(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(G)||[];if(n.isFunction(c))while(d=f[e++])"+"===d[0]?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function xb(a,b,c,d){var e={},f=a===tb;function g(h){var i;return e[h]=!0,n.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function yb(a,b){var c,d,e=n.ajaxSettings.flatOptions||{};for(c in b)void 0!==b[c]&&((e[c]?a:d||(d={}))[c]=b[c]);return d&&n.extend(!0,a,d),a}function zb(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===d&&(d=a.mimeType||b.getResponseHeader("Content-Type"));if(d)for(e in h)if(h[e]&&h[e].test(d)){i.unshift(e);break}if(i[0]in c)f=i[0];else{for(e in c){if(!i[0]||a.converters[e+" "+i[0]]){f=e;break}g||(g=e)}f=f||g}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function Ab(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}n.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:jb.href,type:"GET",isLocal:pb.test(jb.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":ub,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":n.parseJSON,"text xml":n.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?yb(yb(a,n.ajaxSettings),b):yb(n.ajaxSettings,a)},ajaxPrefilter:wb(sb),ajaxTransport:wb(tb),ajax:function(b,c){"object"==typeof b&&(c=b,b=void 0),c=c||{};var e,f,g,h,i,j,k,l,m=n.ajaxSetup({},c),o=m.context||m,p=m.context&&(o.nodeType||o.jquery)?n(o):n.event,q=n.Deferred(),r=n.Callbacks("once memory"),s=m.statusCode||{},t={},u={},v=0,w="canceled",x={readyState:0,getResponseHeader:function(a){var b;if(2===v){if(!h){h={};while(b=ob.exec(g))h[b[1].toLowerCase()]=b[2]}b=h[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===v?g:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return v||(a=u[c]=u[c]||a,t[a]=b),this},overrideMimeType:function(a){return v||(m.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>v)for(b in a)s[b]=[s[b],a[b]];else x.always(a[x.status]);return this},abort:function(a){var b=a||w;return e&&e.abort(b),z(0,b),this}};if(q.promise(x).complete=r.add,x.success=x.done,x.error=x.fail,m.url=((b||m.url||jb.href)+"").replace(mb,"").replace(rb,jb.protocol+"//"),m.type=c.method||c.type||m.method||m.type,m.dataTypes=n.trim(m.dataType||"*").toLowerCase().match(G)||[""],null==m.crossDomain){j=d.createElement("a");try{j.href=m.url,j.href=j.href,m.crossDomain=vb.protocol+"//"+vb.host!=j.protocol+"//"+j.host}catch(y){m.crossDomain=!0}}if(m.data&&m.processData&&"string"!=typeof m.data&&(m.data=n.param(m.data,m.traditional)),xb(sb,m,c,x),2===v)return x;k=n.event&&m.global,k&&0===n.active++&&n.event.trigger("ajaxStart"),m.type=m.type.toUpperCase(),m.hasContent=!qb.test(m.type),f=m.url,m.hasContent||(m.data&&(f=m.url+=(lb.test(f)?"&":"?")+m.data,delete m.data),m.cache===!1&&(m.url=nb.test(f)?f.replace(nb,"$1_="+kb++):f+(lb.test(f)?"&":"?")+"_="+kb++)),m.ifModified&&(n.lastModified[f]&&x.setRequestHeader("If-Modified-Since",n.lastModified[f]),n.etag[f]&&x.setRequestHeader("If-None-Match",n.etag[f])),(m.data&&m.hasContent&&m.contentType!==!1||c.contentType)&&x.setRequestHeader("Content-Type",m.contentType),x.setRequestHeader("Accept",m.dataTypes[0]&&m.accepts[m.dataTypes[0]]?m.accepts[m.dataTypes[0]]+("*"!==m.dataTypes[0]?", "+ub+"; q=0.01":""):m.accepts["*"]);for(l in m.headers)x.setRequestHeader(l,m.headers[l]);if(m.beforeSend&&(m.beforeSend.call(o,x,m)===!1||2===v))return x.abort();w="abort";for(l in{success:1,error:1,complete:1})x[l](m[l]);if(e=xb(tb,m,c,x)){if(x.readyState=1,k&&p.trigger("ajaxSend",[x,m]),2===v)return x;m.async&&m.timeout>0&&(i=a.setTimeout(function(){x.abort("timeout")},m.timeout));try{v=1,e.send(t,z)}catch(y){if(!(2>v))throw y;z(-1,y)}}else z(-1,"No Transport");function z(b,c,d,h){var j,l,t,u,w,y=c;2!==v&&(v=2,i&&a.clearTimeout(i),e=void 0,g=h||"",x.readyState=b>0?4:0,j=b>=200&&300>b||304===b,d&&(u=zb(m,x,d)),u=Ab(m,u,x,j),j?(m.ifModified&&(w=x.getResponseHeader("Last-Modified"),w&&(n.lastModified[f]=w),w=x.getResponseHeader("etag"),w&&(n.etag[f]=w)),204===b||"HEAD"===m.type?y="nocontent":304===b?y="notmodified":(y=u.state,l=u.data,t=u.error,j=!t)):(t=y,!b&&y||(y="error",0>b&&(b=0))),x.status=b,x.statusText=(c||y)+"",j?q.resolveWith(o,[l,y,x]):q.rejectWith(o,[x,y,t]),x.statusCode(s),s=void 0,k&&p.trigger(j?"ajaxSuccess":"ajaxError",[x,m,j?l:t]),r.fireWith(o,[x,y]),k&&(p.trigger("ajaxComplete",[x,m]),--n.active||n.event.trigger("ajaxStop")))}return x},getJSON:function(a,b,c){return n.get(a,b,c,"json")},getScript:function(a,b){return n.get(a,void 0,b,"script")}}),n.each(["get","post"],function(a,b){n[b]=function(a,c,d,e){return n.isFunction(c)&&(e=e||d,d=c,c=void 0),n.ajax(n.extend({url:a,type:b,dataType:e,data:c,success:d},n.isPlainObject(a)&&a))}}),n._evalUrl=function(a){return n.ajax({url:a,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})},n.fn.extend({wrapAll:function(a){var b;return n.isFunction(a)?this.each(function(b){n(this).wrapAll(a.call(this,b))}):(this[0]&&(b=n(a,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstElementChild)a=a.firstElementChild;return a}).append(this)),this)},wrapInner:function(a){return n.isFunction(a)?this.each(function(b){n(this).wrapInner(a.call(this,b))}):this.each(function(){var b=n(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=n.isFunction(a);return this.each(function(c){n(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){n.nodeName(this,"body")||n(this).replaceWith(this.childNodes)}).end()}}),n.expr.filters.hidden=function(a){return!n.expr.filters.visible(a)},n.expr.filters.visible=function(a){return a.offsetWidth>0||a.offsetHeight>0||a.getClientRects().length>0};var Bb=/%20/g,Cb=/\[\]$/,Db=/\r?\n/g,Eb=/^(?:submit|button|image|reset|file)$/i,Fb=/^(?:input|select|textarea|keygen)/i;function Gb(a,b,c,d){var e;if(n.isArray(b))n.each(b,function(b,e){c||Cb.test(a)?d(a,e):Gb(a+"["+("object"==typeof e&&null!=e?b:"")+"]",e,c,d)});else if(c||"object"!==n.type(b))d(a,b);else for(e in b)Gb(a+"["+e+"]",b[e],c,d)}n.param=function(a,b){var c,d=[],e=function(a,b){b=n.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=n.ajaxSettings&&n.ajaxSettings.traditional),n.isArray(a)||a.jquery&&!n.isPlainObject(a))n.each(a,function(){e(this.name,this.value)});else for(c in a)Gb(c,a[c],b,e);return d.join("&").replace(Bb,"+")},n.fn.extend({serialize:function(){return n.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=n.prop(this,"elements");return a?n.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!n(this).is(":disabled")&&Fb.test(this.nodeName)&&!Eb.test(a)&&(this.checked||!X.test(a))}).map(function(a,b){var c=n(this).val();return null==c?null:n.isArray(c)?n.map(c,function(a){return{name:b.name,value:a.replace(Db,"\r\n")}}):{name:b.name,value:c.replace(Db,"\r\n")}}).get()}}),n.ajaxSettings.xhr=function(){try{return new a.XMLHttpRequest}catch(b){}};var Hb={0:200,1223:204},Ib=n.ajaxSettings.xhr();l.cors=!!Ib&&"withCredentials"in Ib,l.ajax=Ib=!!Ib,n.ajaxTransport(function(b){var c,d;return l.cors||Ib&&!b.crossDomain?{send:function(e,f){var g,h=b.xhr();if(h.open(b.type,b.url,b.async,b.username,b.password),b.xhrFields)for(g in b.xhrFields)h[g]=b.xhrFields[g];b.mimeType&&h.overrideMimeType&&h.overrideMimeType(b.mimeType),b.crossDomain||e["X-Requested-With"]||(e["X-Requested-With"]="XMLHttpRequest");for(g in e)h.setRequestHeader(g,e[g]);c=function(a){return function(){c&&(c=d=h.onload=h.onerror=h.onabort=h.onreadystatechange=null,"abort"===a?h.abort():"error"===a?"number"!=typeof h.status?f(0,"error"):f(h.status,h.statusText):f(Hb[h.status]||h.status,h.statusText,"text"!==(h.responseType||"text")||"string"!=typeof h.responseText?{binary:h.response}:{text:h.responseText},h.getAllResponseHeaders()))}},h.onload=c(),d=h.onerror=c("error"),void 0!==h.onabort?h.onabort=d:h.onreadystatechange=function(){4===h.readyState&&a.setTimeout(function(){c&&d()})},c=c("abort");try{h.send(b.hasContent&&b.data||null)}catch(i){if(c)throw i}},abort:function(){c&&c()}}:void 0}),n.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(a){return n.globalEval(a),a}}}),n.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET")}),n.ajaxTransport("script",function(a){if(a.crossDomain){var b,c;return{send:function(e,f){b=n("<script>").prop({charset:a.scriptCharset,src:a.url}).on("load error",c=function(a){b.remove(),c=null,a&&f("error"===a.type?404:200,a.type)}),d.head.appendChild(b[0])},abort:function(){c&&c()}}}});var Jb=[],Kb=/(=)\?(?=&|$)|\?\?/;n.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=Jb.pop()||n.expando+"_"+kb++;return this[a]=!0,a}}),n.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(Kb.test(b.url)?"url":"string"==typeof b.data&&0===(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&Kb.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=n.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(Kb,"$1"+e):b.jsonp!==!1&&(b.url+=(lb.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||n.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){void 0===f?n(a).removeProp(e):a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,Jb.push(e)),g&&n.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),n.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||d;var e=x.exec(a),f=!c&&[];return e?[b.createElement(e[1])]:(e=ca([a],b,f),f&&f.length&&n(f).remove(),n.merge([],e.childNodes))};var Lb=n.fn.load;n.fn.load=function(a,b,c){if("string"!=typeof a&&Lb)return Lb.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>-1&&(d=n.trim(a.slice(h)),a=a.slice(0,h)),n.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(e="POST"),g.length>0&&n.ajax({url:a,type:e||"GET",dataType:"html",data:b}).done(function(a){f=arguments,g.html(d?n("<div>").append(n.parseHTML(a)).find(d):a)}).always(c&&function(a,b){g.each(function(){c.apply(this,f||[a.responseText,b,a])})}),this},n.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){n.fn[b]=function(a){return this.on(b,a)}}),n.expr.filters.animated=function(a){return n.grep(n.timers,function(b){return a===b.elem}).length};function Mb(a){return n.isWindow(a)?a:9===a.nodeType&&a.defaultView}n.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=n.css(a,"position"),l=n(a),m={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=n.css(a,"top"),i=n.css(a,"left"),j=("absolute"===k||"fixed"===k)&&(f+i).indexOf("auto")>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),n.isFunction(b)&&(b=b.call(a,c,n.extend({},h))),null!=b.top&&(m.top=b.top-h.top+g),null!=b.left&&(m.left=b.left-h.left+e),"using"in b?b.using.call(a,m):l.css(m)}},n.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){n.offset.setOffset(this,a,b)});var b,c,d=this[0],e={top:0,left:0},f=d&&d.ownerDocument;if(f)return b=f.documentElement,n.contains(b,d)?(e=d.getBoundingClientRect(),c=Mb(f),{top:e.top+c.pageYOffset-b.clientTop,left:e.left+c.pageXOffset-b.clientLeft}):e},position:function(){if(this[0]){var a,b,c=this[0],d={top:0,left:0};return"fixed"===n.css(c,"position")?b=c.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),n.nodeName(a[0],"html")||(d=a.offset()),d.top+=n.css(a[0],"borderTopWidth",!0),d.left+=n.css(a[0],"borderLeftWidth",!0)),{top:b.top-d.top-n.css(c,"marginTop",!0),left:b.left-d.left-n.css(c,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent;while(a&&"static"===n.css(a,"position"))a=a.offsetParent;return a||Ea})}}),n.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,b){var c="pageYOffset"===b;n.fn[a]=function(d){return K(this,function(a,d,e){var f=Mb(a);return void 0===e?f?f[b]:a[d]:void(f?f.scrollTo(c?f.pageXOffset:e,c?e:f.pageYOffset):a[d]=e)},a,d,arguments.length)}}),n.each(["top","left"],function(a,b){n.cssHooks[b]=Ga(l.pixelPosition,function(a,c){return c?(c=Fa(a,b),Ba.test(c)?n(a).position()[b]+"px":c):void 0})}),n.each({Height:"height",Width:"width"},function(a,b){n.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){n.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return K(this,function(b,c,d){var e;return n.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?n.css(b,c,g):n.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),n.fn.extend({bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)},size:function(){return this.length}}),n.fn.andSelf=n.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return n});var Nb=a.jQuery,Ob=a.$;return n.noConflict=function(b){return a.$===n&&(a.$=Ob),b&&a.jQuery===n&&(a.jQuery=Nb),n},b||(a.jQuery=a.$=n),n});

/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2001 Robert Penner
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
 */
/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 */

if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

+function ($) {
  'use strict';
  var version = $.fn.jquery.split(' ')[0].split('.')
  if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1) || (version[0] > 3)) {
    throw new Error('Bootstrap\'s JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4')
  }
}(jQuery);

/* ========================================================================
 * Bootstrap: transition.js v3.3.7
 * http://getbootstrap.com/javascript/#transitions
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
  // ============================================================

  function transitionEnd() {
    var el = document.createElement('bootstrap')

    var transEndEventNames = {
      WebkitTransition : 'webkitTransitionEnd',
      MozTransition    : 'transitionend',
      OTransition      : 'oTransitionEnd otransitionend',
      transition       : 'transitionend'
    }

    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] }
      }
    }

    return false // explicit for ie8 (  ._.)
  }

  // http://blog.alexmaccaw.com/css-transitions
  $.fn.emulateTransitionEnd = function (duration) {
    var called = false
    var $el = this
    $(this).one('bsTransitionEnd', function () { called = true })
    var callback = function () { if (!called) $($el).trigger($.support.transition.end) }
    setTimeout(callback, duration)
    return this
  }

  $(function () {
    $.support.transition = transitionEnd()

    if (!$.support.transition) return

    $.event.special.bsTransitionEnd = {
      bindType: $.support.transition.end,
      delegateType: $.support.transition.end,
      handle: function (e) {
        if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
      }
    }
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: alert.js v3.3.7
 * http://getbootstrap.com/javascript/#alerts
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // ALERT CLASS DEFINITION
  // ======================

  var dismiss = '[data-dismiss="alert"]'
  var Alert   = function (el) {
    $(el).on('click', dismiss, this.close)
  }

  Alert.VERSION = '3.3.7'

  Alert.TRANSITION_DURATION = 150

  Alert.prototype.close = function (e) {
    var $this    = $(this)
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = $(selector === '#' ? [] : selector)

    if (e) e.preventDefault()

    if (!$parent.length) {
      $parent = $this.closest('.alert')
    }

    $parent.trigger(e = $.Event('close.bs.alert'))

    if (e.isDefaultPrevented()) return

    $parent.removeClass('in')

    function removeElement() {
      // detach from parent, fire event then clean up data
      $parent.detach().trigger('closed.bs.alert').remove()
    }

    $.support.transition && $parent.hasClass('fade') ?
      $parent
        .one('bsTransitionEnd', removeElement)
        .emulateTransitionEnd(Alert.TRANSITION_DURATION) :
      removeElement()
  }


  // ALERT PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.alert')

      if (!data) $this.data('bs.alert', (data = new Alert(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.alert

  $.fn.alert             = Plugin
  $.fn.alert.Constructor = Alert


  // ALERT NO CONFLICT
  // =================

  $.fn.alert.noConflict = function () {
    $.fn.alert = old
    return this
  }


  // ALERT DATA-API
  // ==============

  $(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close)

}(jQuery);

/* ========================================================================
 * Bootstrap: button.js v3.3.7
 * http://getbootstrap.com/javascript/#buttons
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // BUTTON PUBLIC CLASS DEFINITION
  // ==============================

  var Button = function (element, options) {
    this.$element  = $(element)
    this.options   = $.extend({}, Button.DEFAULTS, options)
    this.isLoading = false
  }

  Button.VERSION  = '3.3.7'

  Button.DEFAULTS = {
    loadingText: 'loading...'
  }

  Button.prototype.setState = function (state) {
    var d    = 'disabled'
    var $el  = this.$element
    var val  = $el.is('input') ? 'val' : 'html'
    var data = $el.data()

    state += 'Text'

    if (data.resetText == null) $el.data('resetText', $el[val]())

    // push to event loop to allow forms to submit
    setTimeout($.proxy(function () {
      $el[val](data[state] == null ? this.options[state] : data[state])

      if (state == 'loadingText') {
        this.isLoading = true
        $el.addClass(d).attr(d, d).prop(d, true)
      } else if (this.isLoading) {
        this.isLoading = false
        $el.removeClass(d).removeAttr(d).prop(d, false)
      }
    }, this), 0)
  }

  Button.prototype.toggle = function () {
    var changed = true
    var $parent = this.$element.closest('[data-toggle="buttons"]')

    if ($parent.length) {
      var $input = this.$element.find('input')
      if ($input.prop('type') == 'radio') {
        if ($input.prop('checked')) changed = false
        $parent.find('.active').removeClass('active')
        this.$element.addClass('active')
      } else if ($input.prop('type') == 'checkbox') {
        if (($input.prop('checked')) !== this.$element.hasClass('active')) changed = false
        this.$element.toggleClass('active')
      }
      $input.prop('checked', this.$element.hasClass('active'))
      if (changed) $input.trigger('change')
    } else {
      this.$element.attr('aria-pressed', !this.$element.hasClass('active'))
      this.$element.toggleClass('active')
    }
  }


  // BUTTON PLUGIN DEFINITION
  // ========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.button')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.button', (data = new Button(this, options)))

      if (option == 'toggle') data.toggle()
      else if (option) data.setState(option)
    })
  }

  var old = $.fn.button

  $.fn.button             = Plugin
  $.fn.button.Constructor = Button


  // BUTTON NO CONFLICT
  // ==================

  $.fn.button.noConflict = function () {
    $.fn.button = old
    return this
  }


  // BUTTON DATA-API
  // ===============

  $(document)
    .on('click.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      var $btn = $(e.target).closest('.btn')
      Plugin.call($btn, 'toggle')
      if (!($(e.target).is('input[type="radio"], input[type="checkbox"]'))) {
        // Prevent double click on radios, and the double selections (so cancellation) on checkboxes
        e.preventDefault()
        // The target component still receive the focus
        if ($btn.is('input,button')) $btn.trigger('focus')
        else $btn.find('input:visible,button:visible').first().trigger('focus')
      }
    })
    .on('focus.bs.button.data-api blur.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      $(e.target).closest('.btn').toggleClass('focus', /^focus(in)?$/.test(e.type))
    })

}(jQuery);

/* ========================================================================
 * Bootstrap: carousel.js v3.3.7
 * http://getbootstrap.com/javascript/#carousel
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CAROUSEL CLASS DEFINITION
  // =========================

  var Carousel = function (element, options) {
    this.$element    = $(element)
    this.$indicators = this.$element.find('.carousel-indicators')
    this.options     = options
    this.paused      = null
    this.sliding     = null
    this.interval    = null
    this.$active     = null
    this.$items      = null

    this.options.keyboard && this.$element.on('keydown.bs.carousel', $.proxy(this.keydown, this))

    this.options.pause == 'hover' && !('ontouchstart' in document.documentElement) && this.$element
      .on('mouseenter.bs.carousel', $.proxy(this.pause, this))
      .on('mouseleave.bs.carousel', $.proxy(this.cycle, this))
  }

  Carousel.VERSION  = '3.3.7'

  Carousel.TRANSITION_DURATION = 600

  Carousel.DEFAULTS = {
    interval: 5000,
    pause: 'hover',
    wrap: true,
    keyboard: true
  }

  Carousel.prototype.keydown = function (e) {
    if (/input|textarea/i.test(e.target.tagName)) return
    switch (e.which) {
      case 37: this.prev(); break
      case 39: this.next(); break
      default: return
    }

    e.preventDefault()
  }

  Carousel.prototype.cycle = function (e) {
    e || (this.paused = false)

    this.interval && clearInterval(this.interval)

    this.options.interval
      && !this.paused
      && (this.interval = setInterval($.proxy(this.next, this), this.options.interval))

    return this
  }

  Carousel.prototype.getItemIndex = function (item) {
    this.$items = item.parent().children('.item')
    return this.$items.index(item || this.$active)
  }

  Carousel.prototype.getItemForDirection = function (direction, active) {
    var activeIndex = this.getItemIndex(active)
    var willWrap = (direction == 'prev' && activeIndex === 0)
                || (direction == 'next' && activeIndex == (this.$items.length - 1))
    if (willWrap && !this.options.wrap) return active
    var delta = direction == 'prev' ? -1 : 1
    var itemIndex = (activeIndex + delta) % this.$items.length
    return this.$items.eq(itemIndex)
  }

  Carousel.prototype.to = function (pos) {
    var that        = this
    var activeIndex = this.getItemIndex(this.$active = this.$element.find('.item.active'))

    if (pos > (this.$items.length - 1) || pos < 0) return

    if (this.sliding)       return this.$element.one('slid.bs.carousel', function () { that.to(pos) }) // yes, "slid"
    if (activeIndex == pos) return this.pause().cycle()

    return this.slide(pos > activeIndex ? 'next' : 'prev', this.$items.eq(pos))
  }

  Carousel.prototype.pause = function (e) {
    e || (this.paused = true)

    if (this.$element.find('.next, .prev').length && $.support.transition) {
      this.$element.trigger($.support.transition.end)
      this.cycle(true)
    }

    this.interval = clearInterval(this.interval)

    return this
  }

  Carousel.prototype.next = function () {
    if (this.sliding) return
    return this.slide('next')
  }

  Carousel.prototype.prev = function () {
    if (this.sliding) return
    return this.slide('prev')
  }

  Carousel.prototype.slide = function (type, next) {
    var $active   = this.$element.find('.item.active')
    var $next     = next || this.getItemForDirection(type, $active)
    var isCycling = this.interval
    var direction = type == 'next' ? 'left' : 'right'
    var that      = this

    if ($next.hasClass('active')) return (this.sliding = false)

    var relatedTarget = $next[0]
    var slideEvent = $.Event('slide.bs.carousel', {
      relatedTarget: relatedTarget,
      direction: direction
    })
    this.$element.trigger(slideEvent)
    if (slideEvent.isDefaultPrevented()) return

    this.sliding = true

    isCycling && this.pause()

    if (this.$indicators.length) {
      this.$indicators.find('.active').removeClass('active')
      var $nextIndicator = $(this.$indicators.children()[this.getItemIndex($next)])
      $nextIndicator && $nextIndicator.addClass('active')
    }

    var slidEvent = $.Event('slid.bs.carousel', { relatedTarget: relatedTarget, direction: direction }) // yes, "slid"
    if ($.support.transition && this.$element.hasClass('slide')) {
      $next.addClass(type)
      $next[0].offsetWidth // force reflow
      $active.addClass(direction)
      $next.addClass(direction)
      $active
        .one('bsTransitionEnd', function () {
          $next.removeClass([type, direction].join(' ')).addClass('active')
          $active.removeClass(['active', direction].join(' '))
          that.sliding = false
          setTimeout(function () {
            that.$element.trigger(slidEvent)
          }, 0)
        })
        .emulateTransitionEnd(Carousel.TRANSITION_DURATION)
    } else {
      $active.removeClass('active')
      $next.addClass('active')
      this.sliding = false
      this.$element.trigger(slidEvent)
    }

    isCycling && this.cycle()

    return this
  }


  // CAROUSEL PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.carousel')
      var options = $.extend({}, Carousel.DEFAULTS, $this.data(), typeof option == 'object' && option)
      var action  = typeof option == 'string' ? option : options.slide

      if (!data) $this.data('bs.carousel', (data = new Carousel(this, options)))
      if (typeof option == 'number') data.to(option)
      else if (action) data[action]()
      else if (options.interval) data.pause().cycle()
    })
  }

  var old = $.fn.carousel

  $.fn.carousel             = Plugin
  $.fn.carousel.Constructor = Carousel


  // CAROUSEL NO CONFLICT
  // ====================

  $.fn.carousel.noConflict = function () {
    $.fn.carousel = old
    return this
  }


  // CAROUSEL DATA-API
  // =================

  var clickHandler = function (e) {
    var href
    var $this   = $(this)
    var $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) // strip for ie7
    if (!$target.hasClass('carousel')) return
    var options = $.extend({}, $target.data(), $this.data())
    var slideIndex = $this.attr('data-slide-to')
    if (slideIndex) options.interval = false

    Plugin.call($target, options)

    if (slideIndex) {
      $target.data('bs.carousel').to(slideIndex)
    }

    e.preventDefault()
  }

  $(document)
    .on('click.bs.carousel.data-api', '[data-slide]', clickHandler)
    .on('click.bs.carousel.data-api', '[data-slide-to]', clickHandler)

  $(window).on('load', function () {
    $('[data-ride="carousel"]').each(function () {
      var $carousel = $(this)
      Plugin.call($carousel, $carousel.data())
    })
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: collapse.js v3.3.7
 * http://getbootstrap.com/javascript/#collapse
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

/* jshint latedef: false */

+function ($) {
  'use strict';

  // COLLAPSE PUBLIC CLASS DEFINITION
  // ================================

  var Collapse = function (element, options) {
    this.$element      = $(element)
    this.options       = $.extend({}, Collapse.DEFAULTS, options)
    this.$trigger      = $('[data-toggle="collapse"][href="#' + element.id + '"],' +
                           '[data-toggle="collapse"][data-target="#' + element.id + '"]')
    this.transitioning = null

    if (this.options.parent) {
      this.$parent = this.getParent()
    } else {
      this.addAriaAndCollapsedClass(this.$element, this.$trigger)
    }

    if (this.options.toggle) this.toggle()
  }

  Collapse.VERSION  = '3.3.7'

  Collapse.TRANSITION_DURATION = 350

  Collapse.DEFAULTS = {
    toggle: true
  }

  Collapse.prototype.dimension = function () {
    var hasWidth = this.$element.hasClass('width')
    return hasWidth ? 'width' : 'height'
  }

  Collapse.prototype.show = function () {
    if (this.transitioning || this.$element.hasClass('in')) return

    var activesData
    var actives = this.$parent && this.$parent.children('.panel').children('.in, .collapsing')

    if (actives && actives.length) {
      activesData = actives.data('bs.collapse')
      if (activesData && activesData.transitioning) return
    }

    var startEvent = $.Event('show.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    if (actives && actives.length) {
      Plugin.call(actives, 'hide')
      activesData || actives.data('bs.collapse', null)
    }

    var dimension = this.dimension()

    this.$element
      .removeClass('collapse')
      .addClass('collapsing')[dimension](0)
      .attr('aria-expanded', true)

    this.$trigger
      .removeClass('collapsed')
      .attr('aria-expanded', true)

    this.transitioning = 1

    var complete = function () {
      this.$element
        .removeClass('collapsing')
        .addClass('collapse in')[dimension]('')
      this.transitioning = 0
      this.$element
        .trigger('shown.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    var scrollSize = $.camelCase(['scroll', dimension].join('-'))

    this.$element
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)[dimension](this.$element[0][scrollSize])
  }

  Collapse.prototype.hide = function () {
    if (this.transitioning || !this.$element.hasClass('in')) return

    var startEvent = $.Event('hide.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    var dimension = this.dimension()

    this.$element[dimension](this.$element[dimension]())[0].offsetHeight

    this.$element
      .addClass('collapsing')
      .removeClass('collapse in')
      .attr('aria-expanded', false)

    this.$trigger
      .addClass('collapsed')
      .attr('aria-expanded', false)

    this.transitioning = 1

    var complete = function () {
      this.transitioning = 0
      this.$element
        .removeClass('collapsing')
        .addClass('collapse')
        .trigger('hidden.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    this.$element
      [dimension](0)
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)
  }

  Collapse.prototype.toggle = function () {
    this[this.$element.hasClass('in') ? 'hide' : 'show']()
  }

  Collapse.prototype.getParent = function () {
    return $(this.options.parent)
      .find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]')
      .each($.proxy(function (i, element) {
        var $element = $(element)
        this.addAriaAndCollapsedClass(getTargetFromTrigger($element), $element)
      }, this))
      .end()
  }

  Collapse.prototype.addAriaAndCollapsedClass = function ($element, $trigger) {
    var isOpen = $element.hasClass('in')

    $element.attr('aria-expanded', isOpen)
    $trigger
      .toggleClass('collapsed', !isOpen)
      .attr('aria-expanded', isOpen)
  }

  function getTargetFromTrigger($trigger) {
    var href
    var target = $trigger.attr('data-target')
      || (href = $trigger.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') // strip for ie7

    return $(target)
  }


  // COLLAPSE PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.collapse')
      var options = $.extend({}, Collapse.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data && options.toggle && /show|hide/.test(option)) options.toggle = false
      if (!data) $this.data('bs.collapse', (data = new Collapse(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.collapse

  $.fn.collapse             = Plugin
  $.fn.collapse.Constructor = Collapse


  // COLLAPSE NO CONFLICT
  // ====================

  $.fn.collapse.noConflict = function () {
    $.fn.collapse = old
    return this
  }


  // COLLAPSE DATA-API
  // =================

  $(document).on('click.bs.collapse.data-api', '[data-toggle="collapse"]', function (e) {
    var $this   = $(this)

    if (!$this.attr('data-target')) e.preventDefault()

    var $target = getTargetFromTrigger($this)
    var data    = $target.data('bs.collapse')
    var option  = data ? 'toggle' : $this.data()

    Plugin.call($target, option)
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: dropdown.js v3.3.7
 * http://getbootstrap.com/javascript/#dropdowns
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // DROPDOWN CLASS DEFINITION
  // =========================

  var backdrop = '.dropdown-backdrop'
  var toggle   = '[data-toggle="dropdown"]'
  var Dropdown = function (element) {
    $(element).on('click.bs.dropdown', this.toggle)
  }

  Dropdown.VERSION = '3.3.7'

  function getParent($this) {
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = selector && $(selector)

    return $parent && $parent.length ? $parent : $this.parent()
  }

  function clearMenus(e) {
    if (e && e.which === 3) return
    $(backdrop).remove()
    $(toggle).each(function () {
      var $this         = $(this)
      var $parent       = getParent($this)
      var relatedTarget = { relatedTarget: this }

      if (!$parent.hasClass('open')) return

      if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return

      $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this.attr('aria-expanded', 'false')
      $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget))
    })
  }

  Dropdown.prototype.toggle = function (e) {
    var $this = $(this)

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    clearMenus()

    if (!isActive) {
      if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
        // if mobile we use a backdrop because click events don't delegate
        $(document.createElement('div'))
          .addClass('dropdown-backdrop')
          .insertAfter($(this))
          .on('click', clearMenus)
      }

      var relatedTarget = { relatedTarget: this }
      $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this
        .trigger('focus')
        .attr('aria-expanded', 'true')

      $parent
        .toggleClass('open')
        .trigger($.Event('shown.bs.dropdown', relatedTarget))
    }

    return false
  }

  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return

    var $this = $(this)

    e.preventDefault()
    e.stopPropagation()

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    if (!isActive && e.which != 27 || isActive && e.which == 27) {
      if (e.which == 27) $parent.find(toggle).trigger('focus')
      return $this.trigger('click')
    }

    var desc = ' li:not(.disabled):visible a'
    var $items = $parent.find('.dropdown-menu' + desc)

    if (!$items.length) return

    var index = $items.index(e.target)

    if (e.which == 38 && index > 0)                 index--         // up
    if (e.which == 40 && index < $items.length - 1) index++         // down
    if (!~index)                                    index = 0

    $items.eq(index).trigger('focus')
  }


  // DROPDOWN PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.dropdown')

      if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.dropdown

  $.fn.dropdown             = Plugin
  $.fn.dropdown.Constructor = Dropdown


  // DROPDOWN NO CONFLICT
  // ====================

  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old
    return this
  }


  // APPLY TO STANDARD DROPDOWN ELEMENTS
  // ===================================

  $(document)
    .on('click.bs.dropdown.data-api', clearMenus)
    .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
    .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
    .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
    .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)

}(jQuery);

/* ========================================================================
 * Bootstrap: modal.js v3.3.7
 * http://getbootstrap.com/javascript/#modals
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // MODAL CLASS DEFINITION
  // ======================

  var Modal = function (element, options) {
    this.options             = options
    this.$body               = $(document.body)
    this.$element            = $(element)
    this.$dialog             = this.$element.find('.modal-dialog')
    this.$backdrop           = null
    this.isShown             = null
    this.originalBodyPad     = null
    this.scrollbarWidth      = 0
    this.ignoreBackdropClick = false

    if (this.options.remote) {
      this.$element
        .find('.modal-content')
        .load(this.options.remote, $.proxy(function () {
          this.$element.trigger('loaded.bs.modal')
        }, this))
    }
  }

  Modal.VERSION  = '3.3.7'

  Modal.TRANSITION_DURATION = 300
  Modal.BACKDROP_TRANSITION_DURATION = 150

  Modal.DEFAULTS = {
    backdrop: true,
    keyboard: true,
    show: true
  }

  Modal.prototype.toggle = function (_relatedTarget) {
    return this.isShown ? this.hide() : this.show(_relatedTarget)
  }

  Modal.prototype.show = function (_relatedTarget) {
    var that = this
    var e    = $.Event('show.bs.modal', { relatedTarget: _relatedTarget })

    this.$element.trigger(e)

    if (this.isShown || e.isDefaultPrevented()) return

    this.isShown = true

    this.checkScrollbar()
    this.setScrollbar()
    this.$body.addClass('modal-open')

    this.escape()
    this.resize()

    this.$element.on('click.dismiss.bs.modal', '[data-dismiss="modal"]', $.proxy(this.hide, this))

    this.$dialog.on('mousedown.dismiss.bs.modal', function () {
      that.$element.one('mouseup.dismiss.bs.modal', function (e) {
        if ($(e.target).is(that.$element)) that.ignoreBackdropClick = true
      })
    })

    this.backdrop(function () {
      var transition = $.support.transition && that.$element.hasClass('fade')

      if (!that.$element.parent().length) {
        that.$element.appendTo(that.$body) // don't move modals dom position
      }

      that.$element
        .show()
        .scrollTop(0)

      that.adjustDialog()

      if (transition) {
        that.$element[0].offsetWidth // force reflow
      }

      that.$element.addClass('in')

      that.enforceFocus()

      var e = $.Event('shown.bs.modal', { relatedTarget: _relatedTarget })

      transition ?
        that.$dialog // wait for modal to slide in
          .one('bsTransitionEnd', function () {
            that.$element.trigger('focus').trigger(e)
          })
          .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
        that.$element.trigger('focus').trigger(e)
    })
  }

  Modal.prototype.hide = function (e) {
    if (e) e.preventDefault()

    e = $.Event('hide.bs.modal')

    this.$element.trigger(e)

    if (!this.isShown || e.isDefaultPrevented()) return

    this.isShown = false

    this.escape()
    this.resize()

    $(document).off('focusin.bs.modal')

    this.$element
      .removeClass('in')
      .off('click.dismiss.bs.modal')
      .off('mouseup.dismiss.bs.modal')

    this.$dialog.off('mousedown.dismiss.bs.modal')

    $.support.transition && this.$element.hasClass('fade') ?
      this.$element
        .one('bsTransitionEnd', $.proxy(this.hideModal, this))
        .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
      this.hideModal()
  }

  Modal.prototype.enforceFocus = function () {
    $(document)
      .off('focusin.bs.modal') // guard against infinite focus loop
      .on('focusin.bs.modal', $.proxy(function (e) {
        if (document !== e.target &&
            this.$element[0] !== e.target &&
            !this.$element.has(e.target).length) {
          this.$element.trigger('focus')
        }
      }, this))
  }

  Modal.prototype.escape = function () {
    if (this.isShown && this.options.keyboard) {
      this.$element.on('keydown.dismiss.bs.modal', $.proxy(function (e) {
        e.which == 27 && this.hide()
      }, this))
    } else if (!this.isShown) {
      this.$element.off('keydown.dismiss.bs.modal')
    }
  }

  Modal.prototype.resize = function () {
    if (this.isShown) {
      $(window).on('resize.bs.modal', $.proxy(this.handleUpdate, this))
    } else {
      $(window).off('resize.bs.modal')
    }
  }

  Modal.prototype.hideModal = function () {
    var that = this
    this.$element.hide()
    this.backdrop(function () {
      that.$body.removeClass('modal-open')
      that.resetAdjustments()
      that.resetScrollbar()
      that.$element.trigger('hidden.bs.modal')
    })
  }

  Modal.prototype.removeBackdrop = function () {
    this.$backdrop && this.$backdrop.remove()
    this.$backdrop = null
  }

  Modal.prototype.backdrop = function (callback) {
    var that = this
    var animate = this.$element.hasClass('fade') ? 'fade' : ''

    if (this.isShown && this.options.backdrop) {
      var doAnimate = $.support.transition && animate

      this.$backdrop = $(document.createElement('div'))
        .addClass('modal-backdrop ' + animate)
        .appendTo(this.$body)

      this.$element.on('click.dismiss.bs.modal', $.proxy(function (e) {
        if (this.ignoreBackdropClick) {
          this.ignoreBackdropClick = false
          return
        }
        if (e.target !== e.currentTarget) return
        this.options.backdrop == 'static'
          ? this.$element[0].focus()
          : this.hide()
      }, this))

      if (doAnimate) this.$backdrop[0].offsetWidth // force reflow

      this.$backdrop.addClass('in')

      if (!callback) return

      doAnimate ?
        this.$backdrop
          .one('bsTransitionEnd', callback)
          .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
        callback()

    } else if (!this.isShown && this.$backdrop) {
      this.$backdrop.removeClass('in')

      var callbackRemove = function () {
        that.removeBackdrop()
        callback && callback()
      }
      $.support.transition && this.$element.hasClass('fade') ?
        this.$backdrop
          .one('bsTransitionEnd', callbackRemove)
          .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
        callbackRemove()

    } else if (callback) {
      callback()
    }
  }

  // these following methods are used to handle overflowing modals

  Modal.prototype.handleUpdate = function () {
    this.adjustDialog()
  }

  Modal.prototype.adjustDialog = function () {
    var modalIsOverflowing = this.$element[0].scrollHeight > document.documentElement.clientHeight

    this.$element.css({
      paddingLeft:  !this.bodyIsOverflowing && modalIsOverflowing ? this.scrollbarWidth : '',
      paddingRight: this.bodyIsOverflowing && !modalIsOverflowing ? this.scrollbarWidth : ''
    })
  }

  Modal.prototype.resetAdjustments = function () {
    this.$element.css({
      paddingLeft: '',
      paddingRight: ''
    })
  }

  Modal.prototype.checkScrollbar = function () {
    var fullWindowWidth = window.innerWidth
    if (!fullWindowWidth) { // workaround for missing window.innerWidth in IE8
      var documentElementRect = document.documentElement.getBoundingClientRect()
      fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left)
    }
    this.bodyIsOverflowing = document.body.clientWidth < fullWindowWidth
    this.scrollbarWidth = this.measureScrollbar()
  }

  Modal.prototype.setScrollbar = function () {
    var bodyPad = parseInt((this.$body.css('padding-right') || 0), 10)
    this.originalBodyPad = document.body.style.paddingRight || ''
    if (this.bodyIsOverflowing) this.$body.css('padding-right', bodyPad + this.scrollbarWidth)
  }

  Modal.prototype.resetScrollbar = function () {
    this.$body.css('padding-right', this.originalBodyPad)
  }

  Modal.prototype.measureScrollbar = function () { // thx walsh
    var scrollDiv = document.createElement('div')
    scrollDiv.className = 'modal-scrollbar-measure'
    this.$body.append(scrollDiv)
    var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth
    this.$body[0].removeChild(scrollDiv)
    return scrollbarWidth
  }


  // MODAL PLUGIN DEFINITION
  // =======================

  function Plugin(option, _relatedTarget) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.modal')
      var options = $.extend({}, Modal.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data) $this.data('bs.modal', (data = new Modal(this, options)))
      if (typeof option == 'string') data[option](_relatedTarget)
      else if (options.show) data.show(_relatedTarget)
    })
  }

  var old = $.fn.modal

  $.fn.modal             = Plugin
  $.fn.modal.Constructor = Modal


  // MODAL NO CONFLICT
  // =================

  $.fn.modal.noConflict = function () {
    $.fn.modal = old
    return this
  }


  // MODAL DATA-API
  // ==============

  $(document).on('click.bs.modal.data-api', '[data-toggle="modal"]', function (e) {
    var $this   = $(this)
    var href    = $this.attr('href')
    var $target = $($this.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$)/, ''))) // strip for ie7
    var option  = $target.data('bs.modal') ? 'toggle' : $.extend({ remote: !/#/.test(href) && href }, $target.data(), $this.data())

    if ($this.is('a')) e.preventDefault()

    $target.one('show.bs.modal', function (showEvent) {
      if (showEvent.isDefaultPrevented()) return // only register focus restorer if modal will actually get shown
      $target.one('hidden.bs.modal', function () {
        $this.is(':visible') && $this.trigger('focus')
      })
    })
    Plugin.call($target, option, this)
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: tooltip.js v3.3.7
 * http://getbootstrap.com/javascript/#tooltip
 * Inspired by the original jQuery.tipsy by Jason Frame
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // TOOLTIP PUBLIC CLASS DEFINITION
  // ===============================

  var Tooltip = function (element, options) {
    this.type       = null
    this.options    = null
    this.enabled    = null
    this.timeout    = null
    this.hoverState = null
    this.$element   = null
    this.inState    = null

    this.init('tooltip', element, options)
  }

  Tooltip.VERSION  = '3.3.7'

  Tooltip.TRANSITION_DURATION = 150

  Tooltip.DEFAULTS = {
    animation: true,
    placement: 'top',
    selector: false,
    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
    trigger: 'hover focus',
    title: '',
    delay: 0,
    html: false,
    container: false,
    viewport: {
      selector: 'body',
      padding: 0
    }
  }

  Tooltip.prototype.init = function (type, element, options) {
    this.enabled   = true
    this.type      = type
    this.$element  = $(element)
    this.options   = this.getOptions(options)
    this.$viewport = this.options.viewport && $($.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : (this.options.viewport.selector || this.options.viewport))
    this.inState   = { click: false, hover: false, focus: false }

    if (this.$element[0] instanceof document.constructor && !this.options.selector) {
      throw new Error('`selector` option must be specified when initializing ' + this.type + ' on the window.document object!')
    }

    var triggers = this.options.trigger.split(' ')

    for (var i = triggers.length; i--;) {
      var trigger = triggers[i]

      if (trigger == 'click') {
        this.$element.on('click.' + this.type, this.options.selector, $.proxy(this.toggle, this))
      } else if (trigger != 'manual') {
        var eventIn  = trigger == 'hover' ? 'mouseenter' : 'focusin'
        var eventOut = trigger == 'hover' ? 'mouseleave' : 'focusout'

        this.$element.on(eventIn  + '.' + this.type, this.options.selector, $.proxy(this.enter, this))
        this.$element.on(eventOut + '.' + this.type, this.options.selector, $.proxy(this.leave, this))
      }
    }

    this.options.selector ?
      (this._options = $.extend({}, this.options, { trigger: 'manual', selector: '' })) :
      this.fixTitle()
  }

  Tooltip.prototype.getDefaults = function () {
    return Tooltip.DEFAULTS
  }

  Tooltip.prototype.getOptions = function (options) {
    options = $.extend({}, this.getDefaults(), this.$element.data(), options)

    if (options.delay && typeof options.delay == 'number') {
      options.delay = {
        show: options.delay,
        hide: options.delay
      }
    }

    return options
  }

  Tooltip.prototype.getDelegateOptions = function () {
    var options  = {}
    var defaults = this.getDefaults()

    this._options && $.each(this._options, function (key, value) {
      if (defaults[key] != value) options[key] = value
    })

    return options
  }

  Tooltip.prototype.enter = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $(obj.currentTarget).data('bs.' + this.type)

    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
      $(obj.currentTarget).data('bs.' + this.type, self)
    }

    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusin' ? 'focus' : 'hover'] = true
    }

    if (self.tip().hasClass('in') || self.hoverState == 'in') {
      self.hoverState = 'in'
      return
    }

    clearTimeout(self.timeout)

    self.hoverState = 'in'

    if (!self.options.delay || !self.options.delay.show) return self.show()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'in') self.show()
    }, self.options.delay.show)
  }

  Tooltip.prototype.isInStateTrue = function () {
    for (var key in this.inState) {
      if (this.inState[key]) return true
    }

    return false
  }

  Tooltip.prototype.leave = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $(obj.currentTarget).data('bs.' + this.type)

    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
      $(obj.currentTarget).data('bs.' + this.type, self)
    }

    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusout' ? 'focus' : 'hover'] = false
    }

    if (self.isInStateTrue()) return

    clearTimeout(self.timeout)

    self.hoverState = 'out'

    if (!self.options.delay || !self.options.delay.hide) return self.hide()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'out') self.hide()
    }, self.options.delay.hide)
  }

  Tooltip.prototype.show = function () {
    var e = $.Event('show.bs.' + this.type)

    if (this.hasContent() && this.enabled) {
      this.$element.trigger(e)

      var inDom = $.contains(this.$element[0].ownerDocument.documentElement, this.$element[0])
      if (e.isDefaultPrevented() || !inDom) return
      var that = this

      var $tip = this.tip()

      var tipId = this.getUID(this.type)

      this.setContent()
      $tip.attr('id', tipId)
      this.$element.attr('aria-describedby', tipId)

      if (this.options.animation) $tip.addClass('fade')

      var placement = typeof this.options.placement == 'function' ?
        this.options.placement.call(this, $tip[0], this.$element[0]) :
        this.options.placement

      var autoToken = /\s?auto?\s?/i
      var autoPlace = autoToken.test(placement)
      if (autoPlace) placement = placement.replace(autoToken, '') || 'top'

      $tip
        .detach()
        .css({ top: 0, left: 0, display: 'block' })
        .addClass(placement)
        .data('bs.' + this.type, this)

      this.options.container ? $tip.appendTo(this.options.container) : $tip.insertAfter(this.$element)
      this.$element.trigger('inserted.bs.' + this.type)

      var pos          = this.getPosition()
      var actualWidth  = $tip[0].offsetWidth
      var actualHeight = $tip[0].offsetHeight

      if (autoPlace) {
        var orgPlacement = placement
        var viewportDim = this.getPosition(this.$viewport)

        placement = placement == 'bottom' && pos.bottom + actualHeight > viewportDim.bottom ? 'top'    :
                    placement == 'top'    && pos.top    - actualHeight < viewportDim.top    ? 'bottom' :
                    placement == 'right'  && pos.right  + actualWidth  > viewportDim.width  ? 'left'   :
                    placement == 'left'   && pos.left   - actualWidth  < viewportDim.left   ? 'right'  :
                    placement

        $tip
          .removeClass(orgPlacement)
          .addClass(placement)
      }

      var calculatedOffset = this.getCalculatedOffset(placement, pos, actualWidth, actualHeight)

      this.applyPlacement(calculatedOffset, placement)

      var complete = function () {
        var prevHoverState = that.hoverState
        that.$element.trigger('shown.bs.' + that.type)
        that.hoverState = null

        if (prevHoverState == 'out') that.leave(that)
      }

      $.support.transition && this.$tip.hasClass('fade') ?
        $tip
          .one('bsTransitionEnd', complete)
          .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
        complete()
    }
  }

  Tooltip.prototype.applyPlacement = function (offset, placement) {
    var $tip   = this.tip()
    var width  = $tip[0].offsetWidth
    var height = $tip[0].offsetHeight

    // manually read margins because getBoundingClientRect includes difference
    var marginTop = parseInt($tip.css('margin-top'), 10)
    var marginLeft = parseInt($tip.css('margin-left'), 10)

    // we must check for NaN for ie 8/9
    if (isNaN(marginTop))  marginTop  = 0
    if (isNaN(marginLeft)) marginLeft = 0

    offset.top  += marginTop
    offset.left += marginLeft

    // $.fn.offset doesn't round pixel values
    // so we use setOffset directly with our own function B-0
    $.offset.setOffset($tip[0], $.extend({
      using: function (props) {
        $tip.css({
          top: Math.round(props.top),
          left: Math.round(props.left)
        })
      }
    }, offset), 0)

    $tip.addClass('in')

    // check to see if placing tip in new offset caused the tip to resize itself
    var actualWidth  = $tip[0].offsetWidth
    var actualHeight = $tip[0].offsetHeight

    if (placement == 'top' && actualHeight != height) {
      offset.top = offset.top + height - actualHeight
    }

    var delta = this.getViewportAdjustedDelta(placement, offset, actualWidth, actualHeight)

    if (delta.left) offset.left += delta.left
    else offset.top += delta.top

    var isVertical          = /top|bottom/.test(placement)
    var arrowDelta          = isVertical ? delta.left * 2 - width + actualWidth : delta.top * 2 - height + actualHeight
    var arrowOffsetPosition = isVertical ? 'offsetWidth' : 'offsetHeight'

    $tip.offset(offset)
    this.replaceArrow(arrowDelta, $tip[0][arrowOffsetPosition], isVertical)
  }

  Tooltip.prototype.replaceArrow = function (delta, dimension, isVertical) {
    this.arrow()
      .css(isVertical ? 'left' : 'top', 50 * (1 - delta / dimension) + '%')
      .css(isVertical ? 'top' : 'left', '')
  }

  Tooltip.prototype.setContent = function () {
    var $tip  = this.tip()
    var title = this.getTitle()

    $tip.find('.tooltip-inner')[this.options.html ? 'html' : 'text'](title)
    $tip.removeClass('fade in top bottom left right')
  }

  Tooltip.prototype.hide = function (callback) {
    var that = this
    var $tip = $(this.$tip)
    var e    = $.Event('hide.bs.' + this.type)

    function complete() {
      if (that.hoverState != 'in') $tip.detach()
      if (that.$element) { // TODO: Check whether guarding this code with this `if` is really necessary.
        that.$element
          .removeAttr('aria-describedby')
          .trigger('hidden.bs.' + that.type)
      }
      callback && callback()
    }

    this.$element.trigger(e)

    if (e.isDefaultPrevented()) return

    $tip.removeClass('in')

    $.support.transition && $tip.hasClass('fade') ?
      $tip
        .one('bsTransitionEnd', complete)
        .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
      complete()

    this.hoverState = null

    return this
  }

  Tooltip.prototype.fixTitle = function () {
    var $e = this.$element
    if ($e.attr('title') || typeof $e.attr('data-original-title') != 'string') {
      $e.attr('data-original-title', $e.attr('title') || '').attr('title', '')
    }
  }

  Tooltip.prototype.hasContent = function () {
    return this.getTitle()
  }

  Tooltip.prototype.getPosition = function ($element) {
    $element   = $element || this.$element

    var el     = $element[0]
    var isBody = el.tagName == 'BODY'

    var elRect    = el.getBoundingClientRect()
    if (elRect.width == null) {
      // width and height are missing in IE8, so compute them manually; see https://github.com/twbs/bootstrap/issues/14093
      elRect = $.extend({}, elRect, { width: elRect.right - elRect.left, height: elRect.bottom - elRect.top })
    }
    var isSvg = window.SVGElement && el instanceof window.SVGElement
    // Avoid using $.offset() on SVGs since it gives incorrect results in jQuery 3.
    // See https://github.com/twbs/bootstrap/issues/20280
    var elOffset  = isBody ? { top: 0, left: 0 } : (isSvg ? null : $element.offset())
    var scroll    = { scroll: isBody ? document.documentElement.scrollTop || document.body.scrollTop : $element.scrollTop() }
    var outerDims = isBody ? { width: $(window).width(), height: $(window).height() } : null

    return $.extend({}, elRect, scroll, outerDims, elOffset)
  }

  Tooltip.prototype.getCalculatedOffset = function (placement, pos, actualWidth, actualHeight) {
    return placement == 'bottom' ? { top: pos.top + pos.height,   left: pos.left + pos.width / 2 - actualWidth / 2 } :
           placement == 'top'    ? { top: pos.top - actualHeight, left: pos.left + pos.width / 2 - actualWidth / 2 } :
           placement == 'left'   ? { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth } :
        /* placement == 'right' */ { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width }

  }

  Tooltip.prototype.getViewportAdjustedDelta = function (placement, pos, actualWidth, actualHeight) {
    var delta = { top: 0, left: 0 }
    if (!this.$viewport) return delta

    var viewportPadding = this.options.viewport && this.options.viewport.padding || 0
    var viewportDimensions = this.getPosition(this.$viewport)

    if (/right|left/.test(placement)) {
      var topEdgeOffset    = pos.top - viewportPadding - viewportDimensions.scroll
      var bottomEdgeOffset = pos.top + viewportPadding - viewportDimensions.scroll + actualHeight
      if (topEdgeOffset < viewportDimensions.top) { // top overflow
        delta.top = viewportDimensions.top - topEdgeOffset
      } else if (bottomEdgeOffset > viewportDimensions.top + viewportDimensions.height) { // bottom overflow
        delta.top = viewportDimensions.top + viewportDimensions.height - bottomEdgeOffset
      }
    } else {
      var leftEdgeOffset  = pos.left - viewportPadding
      var rightEdgeOffset = pos.left + viewportPadding + actualWidth
      if (leftEdgeOffset < viewportDimensions.left) { // left overflow
        delta.left = viewportDimensions.left - leftEdgeOffset
      } else if (rightEdgeOffset > viewportDimensions.right) { // right overflow
        delta.left = viewportDimensions.left + viewportDimensions.width - rightEdgeOffset
      }
    }

    return delta
  }

  Tooltip.prototype.getTitle = function () {
    var title
    var $e = this.$element
    var o  = this.options

    title = $e.attr('data-original-title')
      || (typeof o.title == 'function' ? o.title.call($e[0]) :  o.title)

    return title
  }

  Tooltip.prototype.getUID = function (prefix) {
    do prefix += ~~(Math.random() * 1000000)
    while (document.getElementById(prefix))
    return prefix
  }

  Tooltip.prototype.tip = function () {
    if (!this.$tip) {
      this.$tip = $(this.options.template)
      if (this.$tip.length != 1) {
        throw new Error(this.type + ' `template` option must consist of exactly 1 top-level element!')
      }
    }
    return this.$tip
  }

  Tooltip.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.tooltip-arrow'))
  }

  Tooltip.prototype.enable = function () {
    this.enabled = true
  }

  Tooltip.prototype.disable = function () {
    this.enabled = false
  }

  Tooltip.prototype.toggleEnabled = function () {
    this.enabled = !this.enabled
  }

  Tooltip.prototype.toggle = function (e) {
    var self = this
    if (e) {
      self = $(e.currentTarget).data('bs.' + this.type)
      if (!self) {
        self = new this.constructor(e.currentTarget, this.getDelegateOptions())
        $(e.currentTarget).data('bs.' + this.type, self)
      }
    }

    if (e) {
      self.inState.click = !self.inState.click
      if (self.isInStateTrue()) self.enter(self)
      else self.leave(self)
    } else {
      self.tip().hasClass('in') ? self.leave(self) : self.enter(self)
    }
  }

  Tooltip.prototype.destroy = function () {
    var that = this
    clearTimeout(this.timeout)
    this.hide(function () {
      that.$element.off('.' + that.type).removeData('bs.' + that.type)
      if (that.$tip) {
        that.$tip.detach()
      }
      that.$tip = null
      that.$arrow = null
      that.$viewport = null
      that.$element = null
    })
  }


  // TOOLTIP PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.tooltip')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.tooltip', (data = new Tooltip(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tooltip

  $.fn.tooltip             = Plugin
  $.fn.tooltip.Constructor = Tooltip


  // TOOLTIP NO CONFLICT
  // ===================

  $.fn.tooltip.noConflict = function () {
    $.fn.tooltip = old
    return this
  }

}(jQuery);

/* ========================================================================
 * Bootstrap: popover.js v3.3.7
 * http://getbootstrap.com/javascript/#popovers
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // POPOVER PUBLIC CLASS DEFINITION
  // ===============================

  var Popover = function (element, options) {
    this.init('popover', element, options)
  }

  if (!$.fn.tooltip) throw new Error('Popover requires tooltip.js')

  Popover.VERSION  = '3.3.7'

  Popover.DEFAULTS = $.extend({}, $.fn.tooltip.Constructor.DEFAULTS, {
    placement: 'right',
    trigger: 'click',
    content: '',
    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
  })


  // NOTE: POPOVER EXTENDS tooltip.js
  // ================================

  Popover.prototype = $.extend({}, $.fn.tooltip.Constructor.prototype)

  Popover.prototype.constructor = Popover

  Popover.prototype.getDefaults = function () {
    return Popover.DEFAULTS
  }

  Popover.prototype.setContent = function () {
    var $tip    = this.tip()
    var title   = this.getTitle()
    var content = this.getContent()

    $tip.find('.popover-title')[this.options.html ? 'html' : 'text'](title)
    $tip.find('.popover-content').children().detach().end()[ // we use append for html objects to maintain js events
      this.options.html ? (typeof content == 'string' ? 'html' : 'append') : 'text'
    ](content)

    $tip.removeClass('fade top bottom left right in')

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!$tip.find('.popover-title').html()) $tip.find('.popover-title').hide()
  }

  Popover.prototype.hasContent = function () {
    return this.getTitle() || this.getContent()
  }

  Popover.prototype.getContent = function () {
    var $e = this.$element
    var o  = this.options

    return $e.attr('data-content')
      || (typeof o.content == 'function' ?
            o.content.call($e[0]) :
            o.content)
  }

  Popover.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.arrow'))
  }


  // POPOVER PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.popover')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.popover', (data = new Popover(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.popover

  $.fn.popover             = Plugin
  $.fn.popover.Constructor = Popover


  // POPOVER NO CONFLICT
  // ===================

  $.fn.popover.noConflict = function () {
    $.fn.popover = old
    return this
  }

}(jQuery);

/* ========================================================================
 * Bootstrap: scrollspy.js v3.3.7
 * http://getbootstrap.com/javascript/#scrollspy
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // SCROLLSPY CLASS DEFINITION
  // ==========================

  function ScrollSpy(element, options) {
    this.$body          = $(document.body)
    this.$scrollElement = $(element).is(document.body) ? $(window) : $(element)
    this.options        = $.extend({}, ScrollSpy.DEFAULTS, options)
    this.selector       = (this.options.target || '') + ' .nav li > a'
    this.offsets        = []
    this.targets        = []
    this.activeTarget   = null
    this.scrollHeight   = 0

    this.$scrollElement.on('scroll.bs.scrollspy', $.proxy(this.process, this))
    this.refresh()
    this.process()
  }

  ScrollSpy.VERSION  = '3.3.7'

  ScrollSpy.DEFAULTS = {
    offset: 10
  }

  ScrollSpy.prototype.getScrollHeight = function () {
    return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
  }

  ScrollSpy.prototype.refresh = function () {
    var that          = this
    var offsetMethod  = 'offset'
    var offsetBase    = 0

    this.offsets      = []
    this.targets      = []
    this.scrollHeight = this.getScrollHeight()

    if (!$.isWindow(this.$scrollElement[0])) {
      offsetMethod = 'position'
      offsetBase   = this.$scrollElement.scrollTop()
    }

    this.$body
      .find(this.selector)
      .map(function () {
        var $el   = $(this)
        var href  = $el.data('target') || $el.attr('href')
        var $href = /^#./.test(href) && $(href)

        return ($href
          && $href.length
          && $href.is(':visible')
          && [[$href[offsetMethod]().top + offsetBase, href]]) || null
      })
      .sort(function (a, b) { return a[0] - b[0] })
      .each(function () {
        that.offsets.push(this[0])
        that.targets.push(this[1])
      })
  }

  ScrollSpy.prototype.process = function () {
    var scrollTop    = this.$scrollElement.scrollTop() + this.options.offset
    var scrollHeight = this.getScrollHeight()
    var maxScroll    = this.options.offset + scrollHeight - this.$scrollElement.height()
    var offsets      = this.offsets
    var targets      = this.targets
    var activeTarget = this.activeTarget
    var i

    if (this.scrollHeight != scrollHeight) {
      this.refresh()
    }

    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets[targets.length - 1]) && this.activate(i)
    }

    if (activeTarget && scrollTop < offsets[0]) {
      this.activeTarget = null
      return this.clear()
    }

    for (i = offsets.length; i--;) {
      activeTarget != targets[i]
        && scrollTop >= offsets[i]
        && (offsets[i + 1] === undefined || scrollTop < offsets[i + 1])
        && this.activate(targets[i])
    }
  }

  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target

    this.clear()

    var selector = this.selector +
      '[data-target="' + target + '"],' +
      this.selector + '[href="' + target + '"]'

    var active = $(selector)
      .parents('li')
      .addClass('active')

    if (active.parent('.dropdown-menu').length) {
      active = active
        .closest('li.dropdown')
        .addClass('active')
    }

    active.trigger('activate.bs.scrollspy')
  }

  ScrollSpy.prototype.clear = function () {
    $(this.selector)
      .parentsUntil(this.options.target, '.active')
      .removeClass('active')
  }


  // SCROLLSPY PLUGIN DEFINITION
  // ===========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.scrollspy')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.scrollspy', (data = new ScrollSpy(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.scrollspy

  $.fn.scrollspy             = Plugin
  $.fn.scrollspy.Constructor = ScrollSpy


  // SCROLLSPY NO CONFLICT
  // =====================

  $.fn.scrollspy.noConflict = function () {
    $.fn.scrollspy = old
    return this
  }


  // SCROLLSPY DATA-API
  // ==================

  $(window).on('load.bs.scrollspy.data-api', function () {
    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this)
      Plugin.call($spy, $spy.data())
    })
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: tab.js v3.3.7
 * http://getbootstrap.com/javascript/#tabs
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // TAB CLASS DEFINITION
  // ====================

  var Tab = function (element) {
    // jscs:disable requireDollarBeforejQueryAssignment
    this.element = $(element)
    // jscs:enable requireDollarBeforejQueryAssignment
  }

  Tab.VERSION = '3.3.7'

  Tab.TRANSITION_DURATION = 150

  Tab.prototype.show = function () {
    var $this    = this.element
    var $ul      = $this.closest('ul:not(.dropdown-menu)')
    var selector = $this.data('target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    if ($this.parent('li').hasClass('active')) return

    var $previous = $ul.find('.active:last a')
    var hideEvent = $.Event('hide.bs.tab', {
      relatedTarget: $this[0]
    })
    var showEvent = $.Event('show.bs.tab', {
      relatedTarget: $previous[0]
    })

    $previous.trigger(hideEvent)
    $this.trigger(showEvent)

    if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return

    var $target = $(selector)

    this.activate($this.closest('li'), $ul)
    this.activate($target, $target.parent(), function () {
      $previous.trigger({
        type: 'hidden.bs.tab',
        relatedTarget: $this[0]
      })
      $this.trigger({
        type: 'shown.bs.tab',
        relatedTarget: $previous[0]
      })
    })
  }

  Tab.prototype.activate = function (element, container, callback) {
    var $active    = container.find('> .active')
    var transition = callback
      && $.support.transition
      && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

    function next() {
      $active
        .removeClass('active')
        .find('> .dropdown-menu > .active')
          .removeClass('active')
        .end()
        .find('[data-toggle="tab"]')
          .attr('aria-expanded', false)

      element
        .addClass('active')
        .find('[data-toggle="tab"]')
          .attr('aria-expanded', true)

      if (transition) {
        element[0].offsetWidth // reflow for transition
        element.addClass('in')
      } else {
        element.removeClass('fade')
      }

      if (element.parent('.dropdown-menu').length) {
        element
          .closest('li.dropdown')
            .addClass('active')
          .end()
          .find('[data-toggle="tab"]')
            .attr('aria-expanded', true)
      }

      callback && callback()
    }

    $active.length && transition ?
      $active
        .one('bsTransitionEnd', next)
        .emulateTransitionEnd(Tab.TRANSITION_DURATION) :
      next()

    $active.removeClass('in')
  }


  // TAB PLUGIN DEFINITION
  // =====================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.tab')

      if (!data) $this.data('bs.tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tab

  $.fn.tab             = Plugin
  $.fn.tab.Constructor = Tab


  // TAB NO CONFLICT
  // ===============

  $.fn.tab.noConflict = function () {
    $.fn.tab = old
    return this
  }


  // TAB DATA-API
  // ============

  var clickHandler = function (e) {
    e.preventDefault()
    Plugin.call($(this), 'show')
  }

  $(document)
    .on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler)
    .on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)

}(jQuery);

/* ========================================================================
 * Bootstrap: affix.js v3.3.7
 * http://getbootstrap.com/javascript/#affix
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // AFFIX CLASS DEFINITION
  // ======================

  var Affix = function (element, options) {
    this.options = $.extend({}, Affix.DEFAULTS, options)

    this.$target = $(this.options.target)
      .on('scroll.bs.affix.data-api', $.proxy(this.checkPosition, this))
      .on('click.bs.affix.data-api',  $.proxy(this.checkPositionWithEventLoop, this))

    this.$element     = $(element)
    this.affixed      = null
    this.unpin        = null
    this.pinnedOffset = null

    this.checkPosition()
  }

  Affix.VERSION  = '3.3.7'

  Affix.RESET    = 'affix affix-top affix-bottom'

  Affix.DEFAULTS = {
    offset: 0,
    target: window
  }

  Affix.prototype.getState = function (scrollHeight, height, offsetTop, offsetBottom) {
    var scrollTop    = this.$target.scrollTop()
    var position     = this.$element.offset()
    var targetHeight = this.$target.height()

    if (offsetTop != null && this.affixed == 'top') return scrollTop < offsetTop ? 'top' : false

    if (this.affixed == 'bottom') {
      if (offsetTop != null) return (scrollTop + this.unpin <= position.top) ? false : 'bottom'
      return (scrollTop + targetHeight <= scrollHeight - offsetBottom) ? false : 'bottom'
    }

    var initializing   = this.affixed == null
    var colliderTop    = initializing ? scrollTop : position.top
    var colliderHeight = initializing ? targetHeight : height

    if (offsetTop != null && scrollTop <= offsetTop) return 'top'
    if (offsetBottom != null && (colliderTop + colliderHeight >= scrollHeight - offsetBottom)) return 'bottom'

    return false
  }

  Affix.prototype.getPinnedOffset = function () {
    if (this.pinnedOffset) return this.pinnedOffset
    this.$element.removeClass(Affix.RESET).addClass('affix')
    var scrollTop = this.$target.scrollTop()
    var position  = this.$element.offset()
    return (this.pinnedOffset = position.top - scrollTop)
  }

  Affix.prototype.checkPositionWithEventLoop = function () {
    setTimeout($.proxy(this.checkPosition, this), 1)
  }

  Affix.prototype.checkPosition = function () {
    if (!this.$element.is(':visible')) return

    var height       = this.$element.height()
    var offset       = this.options.offset
    var offsetTop    = offset.top
    var offsetBottom = offset.bottom
    var scrollHeight = Math.max($(document).height(), $(document.body).height())

    if (typeof offset != 'object')         offsetBottom = offsetTop = offset
    if (typeof offsetTop == 'function')    offsetTop    = offset.top(this.$element)
    if (typeof offsetBottom == 'function') offsetBottom = offset.bottom(this.$element)

    var affix = this.getState(scrollHeight, height, offsetTop, offsetBottom)

    if (this.affixed != affix) {
      if (this.unpin != null) this.$element.css('top', '')

      var affixType = 'affix' + (affix ? '-' + affix : '')
      var e         = $.Event(affixType + '.bs.affix')

      this.$element.trigger(e)

      if (e.isDefaultPrevented()) return

      this.affixed = affix
      this.unpin = affix == 'bottom' ? this.getPinnedOffset() : null

      this.$element
        .removeClass(Affix.RESET)
        .addClass(affixType)
        .trigger(affixType.replace('affix', 'affixed') + '.bs.affix')
    }

    if (affix == 'bottom') {
      this.$element.offset({
        top: scrollHeight - height - offsetBottom
      })
    }
  }


  // AFFIX PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.affix')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.affix', (data = new Affix(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.affix

  $.fn.affix             = Plugin
  $.fn.affix.Constructor = Affix


  // AFFIX NO CONFLICT
  // =================

  $.fn.affix.noConflict = function () {
    $.fn.affix = old
    return this
  }


  // AFFIX DATA-API
  // ==============

  $(window).on('load', function () {
    $('[data-spy="affix"]').each(function () {
      var $spy = $(this)
      var data = $spy.data()

      data.offset = data.offset || {}

      if (data.offsetBottom != null) data.offset.bottom = data.offsetBottom
      if (data.offsetTop    != null) data.offset.top    = data.offsetTop

      Plugin.call($spy, data)
    })
  })

}(jQuery);

/*
     _ _      _       _
 ___| (_) ___| | __  (_)___
/ __| | |/ __| |/ /  | / __|
\__ \ | | (__|   < _ | \__ \
|___/_|_|\___|_|\_(_)/ |___/
                   |__/

 Version: 1.6.0
  Author: Ken Wheeler
 Website: http://kenwheeler.github.io
    Docs: http://kenwheeler.github.io/slick
    Repo: http://github.com/kenwheeler/slick
  Issues: http://github.com/kenwheeler/slick/issues

 */
/* global window, document, define, jQuery, setInterval, clearInterval */
(function(factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports !== 'undefined') {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery);
    }

}(function($) {
    'use strict';
    var Slick = window.Slick || {};

    Slick = (function() {

        var instanceUid = 0;

        function Slick(element, settings) {

            var _ = this, dataSettings;

            _.defaults = {
                accessibility: true,
                adaptiveHeight: false,
                appendArrows: $(element),
                appendDots: $(element),
                arrows: true,
                asNavFor: null,
                prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
                autoplay: false,
                autoplaySpeed: 3000,
                centerMode: false,
                centerPadding: '50px',
                cssEase: 'ease',
                customPaging: function(slider, i) {
                    return $('<button type="button" data-role="none" role="button" tabindex="0" />').text(i + 1);
                },
                dots: false,
                dotsClass: 'slick-dots',
                draggable: true,
                easing: 'linear',
                edgeFriction: 0.35,
                fade: false,
                focusOnSelect: false,
                infinite: true,
                initialSlide: 0,
                lazyLoad: 'ondemand',
                mobileFirst: false,
                pauseOnHover: true,
                pauseOnFocus: true,
                pauseOnDotsHover: false,
                respondTo: 'window',
                responsive: null,
                rows: 1,
                rtl: false,
                slide: '',
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 500,
                swipe: true,
                swipeToSlide: false,
                touchMove: true,
                touchThreshold: 5,
                useCSS: true,
                useTransform: true,
                variableWidth: false,
                vertical: false,
                verticalSwiping: false,
                waitForAnimate: true,
                zIndex: 1000
            };

            _.initials = {
                animating: false,
                dragging: false,
                autoPlayTimer: null,
                currentDirection: 0,
                currentLeft: null,
                currentSlide: 0,
                direction: 1,
                $dots: null,
                listWidth: null,
                listHeight: null,
                loadIndex: 0,
                $nextArrow: null,
                $prevArrow: null,
                slideCount: null,
                slideWidth: null,
                $slideTrack: null,
                $slides: null,
                sliding: false,
                slideOffset: 0,
                swipeLeft: null,
                $list: null,
                touchObject: {},
                transformsEnabled: false,
                unslicked: false
            };

            $.extend(_, _.initials);

            _.activeBreakpoint = null;
            _.animType = null;
            _.animProp = null;
            _.breakpoints = [];
            _.breakpointSettings = [];
            _.cssTransitions = false;
            _.focussed = false;
            _.interrupted = false;
            _.hidden = 'hidden';
            _.paused = true;
            _.positionProp = null;
            _.respondTo = null;
            _.rowCount = 1;
            _.shouldClick = true;
            _.$slider = $(element);
            _.$slidesCache = null;
            _.transformType = null;
            _.transitionType = null;
            _.visibilityChange = 'visibilitychange';
            _.windowWidth = 0;
            _.windowTimer = null;

            dataSettings = $(element).data('slick') || {};

            _.options = $.extend({}, _.defaults, settings, dataSettings);

            _.currentSlide = _.options.initialSlide;

            _.originalSettings = _.options;

            if (typeof document.mozHidden !== 'undefined') {
                _.hidden = 'mozHidden';
                _.visibilityChange = 'mozvisibilitychange';
            } else if (typeof document.webkitHidden !== 'undefined') {
                _.hidden = 'webkitHidden';
                _.visibilityChange = 'webkitvisibilitychange';
            }

            _.autoPlay = $.proxy(_.autoPlay, _);
            _.autoPlayClear = $.proxy(_.autoPlayClear, _);
            _.autoPlayIterator = $.proxy(_.autoPlayIterator, _);
            _.changeSlide = $.proxy(_.changeSlide, _);
            _.clickHandler = $.proxy(_.clickHandler, _);
            _.selectHandler = $.proxy(_.selectHandler, _);
            _.setPosition = $.proxy(_.setPosition, _);
            _.swipeHandler = $.proxy(_.swipeHandler, _);
            _.dragHandler = $.proxy(_.dragHandler, _);
            _.keyHandler = $.proxy(_.keyHandler, _);

            _.instanceUid = instanceUid++;

            // A simple way to check for HTML strings
            // Strict HTML recognition (must start with <)
            // Extracted from jQuery v1.11 source
            _.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/;


            _.registerBreakpoints();
            _.init(true);

        }

        return Slick;

    }());

    Slick.prototype.activateADA = function() {
        var _ = this;

        _.$slideTrack.find('.slick-active').attr({
            'aria-hidden': 'false'
        }).find('a, input, button, select').attr({
            'tabindex': '0'
        });

    };

    Slick.prototype.addSlide = Slick.prototype.slickAdd = function(markup, index, addBefore) {

        var _ = this;

        if (typeof(index) === 'boolean') {
            addBefore = index;
            index = null;
        } else if (index < 0 || (index >= _.slideCount)) {
            return false;
        }

        _.unload();

        if (typeof(index) === 'number') {
            if (index === 0 && _.$slides.length === 0) {
                $(markup).appendTo(_.$slideTrack);
            } else if (addBefore) {
                $(markup).insertBefore(_.$slides.eq(index));
            } else {
                $(markup).insertAfter(_.$slides.eq(index));
            }
        } else {
            if (addBefore === true) {
                $(markup).prependTo(_.$slideTrack);
            } else {
                $(markup).appendTo(_.$slideTrack);
            }
        }

        _.$slides = _.$slideTrack.children(this.options.slide);

        _.$slideTrack.children(this.options.slide).detach();

        _.$slideTrack.append(_.$slides);

        _.$slides.each(function(index, element) {
            $(element).attr('data-slick-index', index);
        });

        _.$slidesCache = _.$slides;

        _.reinit();

    };

    Slick.prototype.animateHeight = function() {
        var _ = this;
        if (_.options.slidesToShow === 1 && _.options.adaptiveHeight === true && _.options.vertical === false) {
            var targetHeight = _.$slides.eq(_.currentSlide).outerHeight(true);
            _.$list.animate({
                height: targetHeight
            }, _.options.speed);
        }
    };

    Slick.prototype.animateSlide = function(targetLeft, callback) {

        var animProps = {},
            _ = this;

        _.animateHeight();

        if (_.options.rtl === true && _.options.vertical === false) {
            targetLeft = -targetLeft;
        }
        if (_.transformsEnabled === false) {
            if (_.options.vertical === false) {
                _.$slideTrack.animate({
                    left: targetLeft
                }, _.options.speed, _.options.easing, callback);
            } else {
                _.$slideTrack.animate({
                    top: targetLeft
                }, _.options.speed, _.options.easing, callback);
            }

        } else {

            if (_.cssTransitions === false) {
                if (_.options.rtl === true) {
                    _.currentLeft = -(_.currentLeft);
                }
                $({
                    animStart: _.currentLeft
                }).animate({
                    animStart: targetLeft
                }, {
                    duration: _.options.speed,
                    easing: _.options.easing,
                    step: function(now) {
                        now = Math.ceil(now);
                        if (_.options.vertical === false) {
                            animProps[_.animType] = 'translate(' +
                                now + 'px, 0px)';
                            _.$slideTrack.css(animProps);
                        } else {
                            animProps[_.animType] = 'translate(0px,' +
                                now + 'px)';
                            _.$slideTrack.css(animProps);
                        }
                    },
                    complete: function() {
                        if (callback) {
                            callback.call();
                        }
                    }
                });

            } else {

                _.applyTransition();
                targetLeft = Math.ceil(targetLeft);

                if (_.options.vertical === false) {
                    animProps[_.animType] = 'translate3d(' + targetLeft + 'px, 0px, 0px)';
                } else {
                    animProps[_.animType] = 'translate3d(0px,' + targetLeft + 'px, 0px)';
                }
                _.$slideTrack.css(animProps);

                if (callback) {
                    setTimeout(function() {

                        _.disableTransition();

                        callback.call();
                    }, _.options.speed);
                }

            }

        }

    };

    Slick.prototype.getNavTarget = function() {

        var _ = this,
            asNavFor = _.options.asNavFor;

        if ( asNavFor && asNavFor !== null ) {
            asNavFor = $(asNavFor).not(_.$slider);
        }

        return asNavFor;

    };

    Slick.prototype.asNavFor = function(index) {

        var _ = this,
            asNavFor = _.getNavTarget();

        if ( asNavFor !== null && typeof asNavFor === 'object' ) {
            asNavFor.each(function() {
                var target = $(this).slick('getSlick');
                if(!target.unslicked) {
                    target.slideHandler(index, true);
                }
            });
        }

    };

    Slick.prototype.applyTransition = function(slide) {

        var _ = this,
            transition = {};

        if (_.options.fade === false) {
            transition[_.transitionType] = _.transformType + ' ' + _.options.speed + 'ms ' + _.options.cssEase;
        } else {
            transition[_.transitionType] = 'opacity ' + _.options.speed + 'ms ' + _.options.cssEase;
        }

        if (_.options.fade === false) {
            _.$slideTrack.css(transition);
        } else {
            _.$slides.eq(slide).css(transition);
        }

    };

    Slick.prototype.autoPlay = function() {

        var _ = this;

        _.autoPlayClear();

        if ( _.slideCount > _.options.slidesToShow ) {
            _.autoPlayTimer = setInterval( _.autoPlayIterator, _.options.autoplaySpeed );
        }

    };

    Slick.prototype.autoPlayClear = function() {

        var _ = this;

        if (_.autoPlayTimer) {
            clearInterval(_.autoPlayTimer);
        }

    };

    Slick.prototype.autoPlayIterator = function() {

        var _ = this,
            slideTo = _.currentSlide + _.options.slidesToScroll;

        if ( !_.paused && !_.interrupted && !_.focussed ) {

            if ( _.options.infinite === false ) {

                if ( _.direction === 1 && ( _.currentSlide + 1 ) === ( _.slideCount - 1 )) {
                    _.direction = 0;
                }

                else if ( _.direction === 0 ) {

                    slideTo = _.currentSlide - _.options.slidesToScroll;

                    if ( _.currentSlide - 1 === 0 ) {
                        _.direction = 1;
                    }

                }

            }

            _.slideHandler( slideTo );

        }

    };

    Slick.prototype.buildArrows = function() {

        var _ = this;

        if (_.options.arrows === true ) {

            _.$prevArrow = $(_.options.prevArrow).addClass('slick-arrow');
            _.$nextArrow = $(_.options.nextArrow).addClass('slick-arrow');

            if( _.slideCount > _.options.slidesToShow ) {

                _.$prevArrow.removeClass('slick-hidden').removeAttr('aria-hidden tabindex');
                _.$nextArrow.removeClass('slick-hidden').removeAttr('aria-hidden tabindex');

                if (_.htmlExpr.test(_.options.prevArrow)) {
                    _.$prevArrow.prependTo(_.options.appendArrows);
                }

                if (_.htmlExpr.test(_.options.nextArrow)) {
                    _.$nextArrow.appendTo(_.options.appendArrows);
                }

                if (_.options.infinite !== true) {
                    _.$prevArrow
                        .addClass('slick-disabled')
                        .attr('aria-disabled', 'true');
                }

            } else {

                _.$prevArrow.add( _.$nextArrow )

                    .addClass('slick-hidden')
                    .attr({
                        'aria-disabled': 'true',
                        'tabindex': '-1'
                    });

            }

        }

    };

    Slick.prototype.buildDots = function() {

        var _ = this,
            i, dot;

        if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {

            _.$slider.addClass('slick-dotted');

            dot = $('<ul />').addClass(_.options.dotsClass);

            for (i = 0; i <= _.getDotCount(); i += 1) {
                dot.append($('<li />').append(_.options.customPaging.call(this, _, i)));
            }

            _.$dots = dot.appendTo(_.options.appendDots);

            _.$dots.find('li').first().addClass('slick-active').attr('aria-hidden', 'false');

        }

    };

    Slick.prototype.buildOut = function() {

        var _ = this;

        _.$slides =
            _.$slider
                .children( _.options.slide + ':not(.slick-cloned)')
                .addClass('slick-slide');

        _.slideCount = _.$slides.length;

        _.$slides.each(function(index, element) {
            $(element)
                .attr('data-slick-index', index)
                .data('originalStyling', $(element).attr('style') || '');
        });

        _.$slider.addClass('slick-slider');

        _.$slideTrack = (_.slideCount === 0) ?
            $('<div class="slick-track"/>').appendTo(_.$slider) :
            _.$slides.wrapAll('<div class="slick-track"/>').parent();

        _.$list = _.$slideTrack.wrap(
            '<div aria-live="polite" class="slick-list"/>').parent();
        _.$slideTrack.css('opacity', 0);

        if (_.options.centerMode === true || _.options.swipeToSlide === true) {
            _.options.slidesToScroll = 1;
        }

        $('img[data-lazy]', _.$slider).not('[src]').addClass('slick-loading');

        _.setupInfinite();

        _.buildArrows();

        _.buildDots();

        _.updateDots();


        _.setSlideClasses(typeof _.currentSlide === 'number' ? _.currentSlide : 0);

        if (_.options.draggable === true) {
            _.$list.addClass('draggable');
        }

    };

    Slick.prototype.buildRows = function() {

        var _ = this, a, b, c, newSlides, numOfSlides, originalSlides,slidesPerSection;

        newSlides = document.createDocumentFragment();
        originalSlides = _.$slider.children();

        if(_.options.rows > 1) {

            slidesPerSection = _.options.slidesPerRow * _.options.rows;
            numOfSlides = Math.ceil(
                originalSlides.length / slidesPerSection
            );

            for(a = 0; a < numOfSlides; a++){
                var slide = document.createElement('div');
                for(b = 0; b < _.options.rows; b++) {
                    var row = document.createElement('div');
                    for(c = 0; c < _.options.slidesPerRow; c++) {
                        var target = (a * slidesPerSection + ((b * _.options.slidesPerRow) + c));
                        if (originalSlides.get(target)) {
                            row.appendChild(originalSlides.get(target));
                        }
                    }
                    slide.appendChild(row);
                }
                newSlides.appendChild(slide);
            }

            _.$slider.empty().append(newSlides);
            _.$slider.children().children().children()
                .css({
                    'width':(100 / _.options.slidesPerRow) + '%',
                    'display': 'inline-block'
                });

        }

    };

    Slick.prototype.checkResponsive = function(initial, forceUpdate) {

        var _ = this,
            breakpoint, targetBreakpoint, respondToWidth, triggerBreakpoint = false;
        var sliderWidth = _.$slider.width();
        var windowWidth = window.innerWidth || $(window).width();

        if (_.respondTo === 'window') {
            respondToWidth = windowWidth;
        } else if (_.respondTo === 'slider') {
            respondToWidth = sliderWidth;
        } else if (_.respondTo === 'min') {
            respondToWidth = Math.min(windowWidth, sliderWidth);
        }

        if ( _.options.responsive &&
            _.options.responsive.length &&
            _.options.responsive !== null) {

            targetBreakpoint = null;

            for (breakpoint in _.breakpoints) {
                if (_.breakpoints.hasOwnProperty(breakpoint)) {
                    if (_.originalSettings.mobileFirst === false) {
                        if (respondToWidth < _.breakpoints[breakpoint]) {
                            targetBreakpoint = _.breakpoints[breakpoint];
                        }
                    } else {
                        if (respondToWidth > _.breakpoints[breakpoint]) {
                            targetBreakpoint = _.breakpoints[breakpoint];
                        }
                    }
                }
            }

            if (targetBreakpoint !== null) {
                if (_.activeBreakpoint !== null) {
                    if (targetBreakpoint !== _.activeBreakpoint || forceUpdate) {
                        _.activeBreakpoint =
                            targetBreakpoint;
                        if (_.breakpointSettings[targetBreakpoint] === 'unslick') {
                            _.unslick(targetBreakpoint);
                        } else {
                            _.options = $.extend({}, _.originalSettings,
                                _.breakpointSettings[
                                    targetBreakpoint]);
                            if (initial === true) {
                                _.currentSlide = _.options.initialSlide;
                            }
                            _.refresh(initial);
                        }
                        triggerBreakpoint = targetBreakpoint;
                    }
                } else {
                    _.activeBreakpoint = targetBreakpoint;
                    if (_.breakpointSettings[targetBreakpoint] === 'unslick') {
                        _.unslick(targetBreakpoint);
                    } else {
                        _.options = $.extend({}, _.originalSettings,
                            _.breakpointSettings[
                                targetBreakpoint]);
                        if (initial === true) {
                            _.currentSlide = _.options.initialSlide;
                        }
                        _.refresh(initial);
                    }
                    triggerBreakpoint = targetBreakpoint;
                }
            } else {
                if (_.activeBreakpoint !== null) {
                    _.activeBreakpoint = null;
                    _.options = _.originalSettings;
                    if (initial === true) {
                        _.currentSlide = _.options.initialSlide;
                    }
                    _.refresh(initial);
                    triggerBreakpoint = targetBreakpoint;
                }
            }

            // only trigger breakpoints during an actual break. not on initialize.
            if( !initial && triggerBreakpoint !== false ) {
                _.$slider.trigger('breakpoint', [_, triggerBreakpoint]);
            }
        }

    };

    Slick.prototype.changeSlide = function(event, dontAnimate) {

        var _ = this,
            $target = $(event.currentTarget),
            indexOffset, slideOffset, unevenOffset;

        // If target is a link, prevent default action.
        if($target.is('a')) {
            event.preventDefault();
        }

        // If target is not the <li> element (ie: a child), find the <li>.
        if(!$target.is('li')) {
            $target = $target.closest('li');
        }

        unevenOffset = (_.slideCount % _.options.slidesToScroll !== 0);
        indexOffset = unevenOffset ? 0 : (_.slideCount - _.currentSlide) % _.options.slidesToScroll;

        switch (event.data.message) {

            case 'previous':
                slideOffset = indexOffset === 0 ? _.options.slidesToScroll : _.options.slidesToShow - indexOffset;
                if (_.slideCount > _.options.slidesToShow) {
                    _.slideHandler(_.currentSlide - slideOffset, false, dontAnimate);
                }
                break;

            case 'next':
                slideOffset = indexOffset === 0 ? _.options.slidesToScroll : indexOffset;
                if (_.slideCount > _.options.slidesToShow) {
                    _.slideHandler(_.currentSlide + slideOffset, false, dontAnimate);
                }
                break;

            case 'index':
                var index = event.data.index === 0 ? 0 :
                    event.data.index || $target.index() * _.options.slidesToScroll;

                _.slideHandler(_.checkNavigable(index), false, dontAnimate);
                $target.children().trigger('focus');
                break;

            default:
                return;
        }

    };

    Slick.prototype.checkNavigable = function(index) {

        var _ = this,
            navigables, prevNavigable;

        navigables = _.getNavigableIndexes();
        prevNavigable = 0;
        if (index > navigables[navigables.length - 1]) {
            index = navigables[navigables.length - 1];
        } else {
            for (var n in navigables) {
                if (index < navigables[n]) {
                    index = prevNavigable;
                    break;
                }
                prevNavigable = navigables[n];
            }
        }

        return index;
    };

    Slick.prototype.cleanUpEvents = function() {

        var _ = this;

        if (_.options.dots && _.$dots !== null) {

            $('li', _.$dots)
                .off('click.slick', _.changeSlide)
                .off('mouseenter.slick', $.proxy(_.interrupt, _, true))
                .off('mouseleave.slick', $.proxy(_.interrupt, _, false));

        }

        _.$slider.off('focus.slick blur.slick');

        if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {
            _.$prevArrow && _.$prevArrow.off('click.slick', _.changeSlide);
            _.$nextArrow && _.$nextArrow.off('click.slick', _.changeSlide);
        }

        _.$list.off('touchstart.slick mousedown.slick', _.swipeHandler);
        _.$list.off('touchmove.slick mousemove.slick', _.swipeHandler);
        _.$list.off('touchend.slick mouseup.slick', _.swipeHandler);
        _.$list.off('touchcancel.slick mouseleave.slick', _.swipeHandler);

        _.$list.off('click.slick', _.clickHandler);

        $(document).off(_.visibilityChange, _.visibility);

        _.cleanUpSlideEvents();

        if (_.options.accessibility === true) {
            _.$list.off('keydown.slick', _.keyHandler);
        }

        if (_.options.focusOnSelect === true) {
            $(_.$slideTrack).children().off('click.slick', _.selectHandler);
        }

        $(window).off('orientationchange.slick.slick-' + _.instanceUid, _.orientationChange);

        $(window).off('resize.slick.slick-' + _.instanceUid, _.resize);

        $('[draggable!=true]', _.$slideTrack).off('dragstart', _.preventDefault);

        $(window).off('load.slick.slick-' + _.instanceUid, _.setPosition);
        $(document).off('ready.slick.slick-' + _.instanceUid, _.setPosition);

    };

    Slick.prototype.cleanUpSlideEvents = function() {

        var _ = this;

        _.$list.off('mouseenter.slick', $.proxy(_.interrupt, _, true));
        _.$list.off('mouseleave.slick', $.proxy(_.interrupt, _, false));

    };

    Slick.prototype.cleanUpRows = function() {

        var _ = this, originalSlides;

        if(_.options.rows > 1) {
            originalSlides = _.$slides.children().children();
            originalSlides.removeAttr('style');
            _.$slider.empty().append(originalSlides);
        }

    };

    Slick.prototype.clickHandler = function(event) {

        var _ = this;

        if (_.shouldClick === false) {
            event.stopImmediatePropagation();
            event.stopPropagation();
            event.preventDefault();
        }

    };

    Slick.prototype.destroy = function(refresh) {

        var _ = this;

        _.autoPlayClear();

        _.touchObject = {};

        _.cleanUpEvents();

        $('.slick-cloned', _.$slider).detach();

        if (_.$dots) {
            _.$dots.remove();
        }


        if ( _.$prevArrow && _.$prevArrow.length ) {

            _.$prevArrow
                .removeClass('slick-disabled slick-arrow slick-hidden')
                .removeAttr('aria-hidden aria-disabled tabindex')
                .css('display','');

            if ( _.htmlExpr.test( _.options.prevArrow )) {
                _.$prevArrow.remove();
            }
        }

        if ( _.$nextArrow && _.$nextArrow.length ) {

            _.$nextArrow
                .removeClass('slick-disabled slick-arrow slick-hidden')
                .removeAttr('aria-hidden aria-disabled tabindex')
                .css('display','');

            if ( _.htmlExpr.test( _.options.nextArrow )) {
                _.$nextArrow.remove();
            }

        }


        if (_.$slides) {

            _.$slides
                .removeClass('slick-slide slick-active slick-center slick-visible slick-current')
                .removeAttr('aria-hidden')
                .removeAttr('data-slick-index')
                .each(function(){
                    $(this).attr('style', $(this).data('originalStyling'));
                });

            _.$slideTrack.children(this.options.slide).detach();

            _.$slideTrack.detach();

            _.$list.detach();

            _.$slider.append(_.$slides);
        }

        _.cleanUpRows();

        _.$slider.removeClass('slick-slider');
        _.$slider.removeClass('slick-initialized');
        _.$slider.removeClass('slick-dotted');

        _.unslicked = true;

        if(!refresh) {
            _.$slider.trigger('destroy', [_]);
        }

    };

    Slick.prototype.disableTransition = function(slide) {

        var _ = this,
            transition = {};

        transition[_.transitionType] = '';

        if (_.options.fade === false) {
            _.$slideTrack.css(transition);
        } else {
            _.$slides.eq(slide).css(transition);
        }

    };

    Slick.prototype.fadeSlide = function(slideIndex, callback) {

        var _ = this;

        if (_.cssTransitions === false) {

            _.$slides.eq(slideIndex).css({
                zIndex: _.options.zIndex
            });

            _.$slides.eq(slideIndex).animate({
                opacity: 1
            }, _.options.speed, _.options.easing, callback);

        } else {

            _.applyTransition(slideIndex);

            _.$slides.eq(slideIndex).css({
                opacity: 1,
                zIndex: _.options.zIndex
            });

            if (callback) {
                setTimeout(function() {

                    _.disableTransition(slideIndex);

                    callback.call();
                }, _.options.speed);
            }

        }

    };

    Slick.prototype.fadeSlideOut = function(slideIndex) {

        var _ = this;

        if (_.cssTransitions === false) {

            _.$slides.eq(slideIndex).animate({
                opacity: 0,
                zIndex: _.options.zIndex - 2
            }, _.options.speed, _.options.easing);

        } else {

            _.applyTransition(slideIndex);

            _.$slides.eq(slideIndex).css({
                opacity: 0,
                zIndex: _.options.zIndex - 2
            });

        }

    };

    Slick.prototype.filterSlides = Slick.prototype.slickFilter = function(filter) {

        var _ = this;

        if (filter !== null) {

            _.$slidesCache = _.$slides;

            _.unload();

            _.$slideTrack.children(this.options.slide).detach();

            _.$slidesCache.filter(filter).appendTo(_.$slideTrack);

            _.reinit();

        }

    };

    Slick.prototype.focusHandler = function() {

        var _ = this;

        _.$slider
            .off('focus.slick blur.slick')
            .on('focus.slick blur.slick',
                '*:not(.slick-arrow)', function(event) {

            event.stopImmediatePropagation();
            var $sf = $(this);

            setTimeout(function() {

                if( _.options.pauseOnFocus ) {
                    _.focussed = $sf.is(':focus');
                    _.autoPlay();
                }

            }, 0);

        });
    };

    Slick.prototype.getCurrent = Slick.prototype.slickCurrentSlide = function() {

        var _ = this;
        return _.currentSlide;

    };

    Slick.prototype.getDotCount = function() {

        var _ = this;

        var breakPoint = 0;
        var counter = 0;
        var pagerQty = 0;

        if (_.options.infinite === true) {
            while (breakPoint < _.slideCount) {
                ++pagerQty;
                breakPoint = counter + _.options.slidesToScroll;
                counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
            }
        } else if (_.options.centerMode === true) {
            pagerQty = _.slideCount;
        } else if(!_.options.asNavFor) {
            pagerQty = 1 + Math.ceil((_.slideCount - _.options.slidesToShow) / _.options.slidesToScroll);
        }else {
            while (breakPoint < _.slideCount) {
                ++pagerQty;
                breakPoint = counter + _.options.slidesToScroll;
                counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
            }
        }

        return pagerQty - 1;

    };

    Slick.prototype.getLeft = function(slideIndex) {

        var _ = this,
            targetLeft,
            verticalHeight,
            verticalOffset = 0,
            targetSlide;

        _.slideOffset = 0;
        verticalHeight = _.$slides.first().outerHeight(true);

        if (_.options.infinite === true) {
            if (_.slideCount > _.options.slidesToShow) {
                _.slideOffset = (_.slideWidth * _.options.slidesToShow) * -1;
                verticalOffset = (verticalHeight * _.options.slidesToShow) * -1;
            }
            if (_.slideCount % _.options.slidesToScroll !== 0) {
                if (slideIndex + _.options.slidesToScroll > _.slideCount && _.slideCount > _.options.slidesToShow) {
                    if (slideIndex > _.slideCount) {
                        _.slideOffset = ((_.options.slidesToShow - (slideIndex - _.slideCount)) * _.slideWidth) * -1;
                        verticalOffset = ((_.options.slidesToShow - (slideIndex - _.slideCount)) * verticalHeight) * -1;
                    } else {
                        _.slideOffset = ((_.slideCount % _.options.slidesToScroll) * _.slideWidth) * -1;
                        verticalOffset = ((_.slideCount % _.options.slidesToScroll) * verticalHeight) * -1;
                    }
                }
            }
        } else {
            if (slideIndex + _.options.slidesToShow > _.slideCount) {
                _.slideOffset = ((slideIndex + _.options.slidesToShow) - _.slideCount) * _.slideWidth;
                verticalOffset = ((slideIndex + _.options.slidesToShow) - _.slideCount) * verticalHeight;
            }
        }

        if (_.slideCount <= _.options.slidesToShow) {
            _.slideOffset = 0;
            verticalOffset = 0;
        }

        if (_.options.centerMode === true && _.options.infinite === true) {
            _.slideOffset += _.slideWidth * Math.floor(_.options.slidesToShow / 2) - _.slideWidth;
        } else if (_.options.centerMode === true) {
            _.slideOffset = 0;
            _.slideOffset += _.slideWidth * Math.floor(_.options.slidesToShow / 2);
        }

        if (_.options.vertical === false) {
            targetLeft = ((slideIndex * _.slideWidth) * -1) + _.slideOffset;
        } else {
            targetLeft = ((slideIndex * verticalHeight) * -1) + verticalOffset;
        }

        if (_.options.variableWidth === true) {

            if (_.slideCount <= _.options.slidesToShow || _.options.infinite === false) {
                targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex);
            } else {
                targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex + _.options.slidesToShow);
            }

            if (_.options.rtl === true) {
                if (targetSlide[0]) {
                    targetLeft = (_.$slideTrack.width() - targetSlide[0].offsetLeft - targetSlide.width()) * -1;
                } else {
                    targetLeft =  0;
                }
            } else {
                targetLeft = targetSlide[0] ? targetSlide[0].offsetLeft * -1 : 0;
            }

            if (_.options.centerMode === true) {
                if (_.slideCount <= _.options.slidesToShow || _.options.infinite === false) {
                    targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex);
                } else {
                    targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex + _.options.slidesToShow + 1);
                }

                if (_.options.rtl === true) {
                    if (targetSlide[0]) {
                        targetLeft = (_.$slideTrack.width() - targetSlide[0].offsetLeft - targetSlide.width()) * -1;
                    } else {
                        targetLeft =  0;
                    }
                } else {
                    targetLeft = targetSlide[0] ? targetSlide[0].offsetLeft * -1 : 0;
                }

                targetLeft += (_.$list.width() - targetSlide.outerWidth()) / 2;
            }
        }

        return targetLeft;

    };

    Slick.prototype.getOption = Slick.prototype.slickGetOption = function(option) {

        var _ = this;

        return _.options[option];

    };

    Slick.prototype.getNavigableIndexes = function() {

        var _ = this,
            breakPoint = 0,
            counter = 0,
            indexes = [],
            max;

        if (_.options.infinite === false) {
            max = _.slideCount;
        } else {
            breakPoint = _.options.slidesToScroll * -1;
            counter = _.options.slidesToScroll * -1;
            max = _.slideCount * 2;
        }

        while (breakPoint < max) {
            indexes.push(breakPoint);
            breakPoint = counter + _.options.slidesToScroll;
            counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
        }

        return indexes;

    };

    Slick.prototype.getSlick = function() {

        return this;

    };

    Slick.prototype.getSlideCount = function() {

        var _ = this,
            slidesTraversed, swipedSlide, centerOffset;

        centerOffset = _.options.centerMode === true ? _.slideWidth * Math.floor(_.options.slidesToShow / 2) : 0;

        if (_.options.swipeToSlide === true) {
            _.$slideTrack.find('.slick-slide').each(function(index, slide) {
                if (slide.offsetLeft - centerOffset + ($(slide).outerWidth() / 2) > (_.swipeLeft * -1)) {
                    swipedSlide = slide;
                    return false;
                }
            });

            slidesTraversed = Math.abs($(swipedSlide).attr('data-slick-index') - _.currentSlide) || 1;

            return slidesTraversed;

        } else {
            return _.options.slidesToScroll;
        }

    };

    Slick.prototype.goTo = Slick.prototype.slickGoTo = function(slide, dontAnimate) {

        var _ = this;

        _.changeSlide({
            data: {
                message: 'index',
                index: parseInt(slide)
            }
        }, dontAnimate);

    };

    Slick.prototype.init = function(creation) {

        var _ = this;

        if (!$(_.$slider).hasClass('slick-initialized')) {

            $(_.$slider).addClass('slick-initialized');

            _.buildRows();
            _.buildOut();
            _.setProps();
            _.startLoad();
            _.loadSlider();
            _.initializeEvents();
            _.updateArrows();
            _.updateDots();
            _.checkResponsive(true);
            _.focusHandler();

        }

        if (creation) {
            _.$slider.trigger('init', [_]);
        }

        if (_.options.accessibility === true) {
            _.initADA();
        }

        if ( _.options.autoplay ) {

            _.paused = false;
            _.autoPlay();

        }

    };

    Slick.prototype.initADA = function() {
        var _ = this;
        _.$slides.add(_.$slideTrack.find('.slick-cloned')).attr({
            'aria-hidden': 'true',
            'tabindex': '-1'
        }).find('a, input, button, select').attr({
            'tabindex': '-1'
        });

        _.$slideTrack.attr('role', 'listbox');

        _.$slides.not(_.$slideTrack.find('.slick-cloned')).each(function(i) {
            $(this).attr({
                'role': 'option',
                'aria-describedby': 'slick-slide' + _.instanceUid + i + ''
            });
        });

        if (_.$dots !== null) {
            _.$dots.attr('role', 'tablist').find('li').each(function(i) {
                $(this).attr({
                    'role': 'presentation',
                    'aria-selected': 'false',
                    'aria-controls': 'navigation' + _.instanceUid + i + '',
                    'id': 'slick-slide' + _.instanceUid + i + ''
                });
            })
                .first().attr('aria-selected', 'true').end()
                .find('button').attr('role', 'button').end()
                .closest('div').attr('role', 'toolbar');
        }
        _.activateADA();

    };

    Slick.prototype.initArrowEvents = function() {

        var _ = this;

        if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {
            _.$prevArrow
               .off('click.slick')
               .on('click.slick', {
                    message: 'previous'
               }, _.changeSlide);
            _.$nextArrow
               .off('click.slick')
               .on('click.slick', {
                    message: 'next'
               }, _.changeSlide);
        }

    };

    Slick.prototype.initDotEvents = function() {

        var _ = this;

        if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {
            $('li', _.$dots).on('click.slick', {
                message: 'index'
            }, _.changeSlide);
        }

        if ( _.options.dots === true && _.options.pauseOnDotsHover === true ) {

            $('li', _.$dots)
                .on('mouseenter.slick', $.proxy(_.interrupt, _, true))
                .on('mouseleave.slick', $.proxy(_.interrupt, _, false));

        }

    };

    Slick.prototype.initSlideEvents = function() {

        var _ = this;

        if ( _.options.pauseOnHover ) {

            _.$list.on('mouseenter.slick', $.proxy(_.interrupt, _, true));
            _.$list.on('mouseleave.slick', $.proxy(_.interrupt, _, false));

        }

    };

    Slick.prototype.initializeEvents = function() {

        var _ = this;

        _.initArrowEvents();

        _.initDotEvents();
        _.initSlideEvents();

        _.$list.on('touchstart.slick mousedown.slick', {
            action: 'start'
        }, _.swipeHandler);
        _.$list.on('touchmove.slick mousemove.slick', {
            action: 'move'
        }, _.swipeHandler);
        _.$list.on('touchend.slick mouseup.slick', {
            action: 'end'
        }, _.swipeHandler);
        _.$list.on('touchcancel.slick mouseleave.slick', {
            action: 'end'
        }, _.swipeHandler);

        _.$list.on('click.slick', _.clickHandler);

        $(document).on(_.visibilityChange, $.proxy(_.visibility, _));

        if (_.options.accessibility === true) {
            _.$list.on('keydown.slick', _.keyHandler);
        }

        if (_.options.focusOnSelect === true) {
            $(_.$slideTrack).children().on('click.slick', _.selectHandler);
        }

        $(window).on('orientationchange.slick.slick-' + _.instanceUid, $.proxy(_.orientationChange, _));

        $(window).on('resize.slick.slick-' + _.instanceUid, $.proxy(_.resize, _));

        $('[draggable!=true]', _.$slideTrack).on('dragstart', _.preventDefault);

        $(window).on('load.slick.slick-' + _.instanceUid, _.setPosition);
        $(document).on('ready.slick.slick-' + _.instanceUid, _.setPosition);

    };

    Slick.prototype.initUI = function() {

        var _ = this;

        if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {

            _.$prevArrow.show();
            _.$nextArrow.show();

        }

        if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {

            _.$dots.show();

        }

    };

    Slick.prototype.keyHandler = function(event) {

        var _ = this;
         //Dont slide if the cursor is inside the form fields and arrow keys are pressed
        if(!event.target.tagName.match('TEXTAREA|INPUT|SELECT')) {
            if (event.keyCode === 37 && _.options.accessibility === true) {
                _.changeSlide({
                    data: {
                        message: _.options.rtl === true ? 'next' :  'previous'
                    }
                });
            } else if (event.keyCode === 39 && _.options.accessibility === true) {
                _.changeSlide({
                    data: {
                        message: _.options.rtl === true ? 'previous' : 'next'
                    }
                });
            }
        }

    };

    Slick.prototype.lazyLoad = function() {

        var _ = this,
            loadRange, cloneRange, rangeStart, rangeEnd;

        function loadImages(imagesScope) {

            $('img[data-lazy]', imagesScope).each(function() {

                var image = $(this),
                    imageSource = $(this).attr('data-lazy'),
                    imageToLoad = document.createElement('img');

                imageToLoad.onload = function() {

                    image
                        .animate({ opacity: 0 }, 100, function() {
                            image
                                .attr('src', imageSource)
                                .animate({ opacity: 1 }, 200, function() {
                                    image
                                        .removeAttr('data-lazy')
                                        .removeClass('slick-loading');
                                });
                            _.$slider.trigger('lazyLoaded', [_, image, imageSource]);
                        });

                };

                imageToLoad.onerror = function() {

                    image
                        .removeAttr( 'data-lazy' )
                        .removeClass( 'slick-loading' )
                        .addClass( 'slick-lazyload-error' );

                    _.$slider.trigger('lazyLoadError', [ _, image, imageSource ]);

                };

                imageToLoad.src = imageSource;

            });

        }

        if (_.options.centerMode === true) {
            if (_.options.infinite === true) {
                rangeStart = _.currentSlide + (_.options.slidesToShow / 2 + 1);
                rangeEnd = rangeStart + _.options.slidesToShow + 2;
            } else {
                rangeStart = Math.max(0, _.currentSlide - (_.options.slidesToShow / 2 + 1));
                rangeEnd = 2 + (_.options.slidesToShow / 2 + 1) + _.currentSlide;
            }
        } else {
            rangeStart = _.options.infinite ? _.options.slidesToShow + _.currentSlide : _.currentSlide;
            rangeEnd = Math.ceil(rangeStart + _.options.slidesToShow);
            if (_.options.fade === true) {
                if (rangeStart > 0) rangeStart--;
                if (rangeEnd <= _.slideCount) rangeEnd++;
            }
        }

        loadRange = _.$slider.find('.slick-slide').slice(rangeStart, rangeEnd);
        loadImages(loadRange);

        if (_.slideCount <= _.options.slidesToShow) {
            cloneRange = _.$slider.find('.slick-slide');
            loadImages(cloneRange);
        } else
        if (_.currentSlide >= _.slideCount - _.options.slidesToShow) {
            cloneRange = _.$slider.find('.slick-cloned').slice(0, _.options.slidesToShow);
            loadImages(cloneRange);
        } else if (_.currentSlide === 0) {
            cloneRange = _.$slider.find('.slick-cloned').slice(_.options.slidesToShow * -1);
            loadImages(cloneRange);
        }

    };

    Slick.prototype.loadSlider = function() {

        var _ = this;

        _.setPosition();

        _.$slideTrack.css({
            opacity: 1
        });

        _.$slider.removeClass('slick-loading');

        _.initUI();

        if (_.options.lazyLoad === 'progressive') {
            _.progressiveLazyLoad();
        }

    };

    Slick.prototype.next = Slick.prototype.slickNext = function() {

        var _ = this;

        _.changeSlide({
            data: {
                message: 'next'
            }
        });

    };

    Slick.prototype.orientationChange = function() {

        var _ = this;

        _.checkResponsive();
        _.setPosition();

    };

    Slick.prototype.pause = Slick.prototype.slickPause = function() {

        var _ = this;

        _.autoPlayClear();
        _.paused = true;

    };

    Slick.prototype.play = Slick.prototype.slickPlay = function() {

        var _ = this;

        _.autoPlay();
        _.options.autoplay = true;
        _.paused = false;
        _.focussed = false;
        _.interrupted = false;

    };

    Slick.prototype.postSlide = function(index) {

        var _ = this;

        if( !_.unslicked ) {

            _.$slider.trigger('afterChange', [_, index]);

            _.animating = false;

            _.setPosition();

            _.swipeLeft = null;

            if ( _.options.autoplay ) {
                _.autoPlay();
            }

            if (_.options.accessibility === true) {
                _.initADA();
            }

        }

    };

    Slick.prototype.prev = Slick.prototype.slickPrev = function() {

        var _ = this;

        _.changeSlide({
            data: {
                message: 'previous'
            }
        });

    };

    Slick.prototype.preventDefault = function(event) {

        event.preventDefault();

    };

    Slick.prototype.progressiveLazyLoad = function( tryCount ) {

        tryCount = tryCount || 1;

        var _ = this,
            $imgsToLoad = $( 'img[data-lazy]', _.$slider ),
            image,
            imageSource,
            imageToLoad;

        if ( $imgsToLoad.length ) {

            image = $imgsToLoad.first();
            imageSource = image.attr('data-lazy');
            imageToLoad = document.createElement('img');

            imageToLoad.onload = function() {

                image
                    .attr( 'src', imageSource )
                    .removeAttr('data-lazy')
                    .removeClass('slick-loading');

                if ( _.options.adaptiveHeight === true ) {
                    _.setPosition();
                }

                _.$slider.trigger('lazyLoaded', [ _, image, imageSource ]);
                _.progressiveLazyLoad();

            };

            imageToLoad.onerror = function() {

                if ( tryCount < 3 ) {

                    /**
                     * try to load the image 3 times,
                     * leave a slight delay so we don't get
                     * servers blocking the request.
                     */
                    setTimeout( function() {
                        _.progressiveLazyLoad( tryCount + 1 );
                    }, 500 );

                } else {

                    image
                        .removeAttr( 'data-lazy' )
                        .removeClass( 'slick-loading' )
                        .addClass( 'slick-lazyload-error' );

                    _.$slider.trigger('lazyLoadError', [ _, image, imageSource ]);

                    _.progressiveLazyLoad();

                }

            };

            imageToLoad.src = imageSource;

        } else {

            _.$slider.trigger('allImagesLoaded', [ _ ]);

        }

    };

    Slick.prototype.refresh = function( initializing ) {

        var _ = this, currentSlide, lastVisibleIndex;

        lastVisibleIndex = _.slideCount - _.options.slidesToShow;

        // in non-infinite sliders, we don't want to go past the
        // last visible index.
        if( !_.options.infinite && ( _.currentSlide > lastVisibleIndex )) {
            _.currentSlide = lastVisibleIndex;
        }

        // if less slides than to show, go to start.
        if ( _.slideCount <= _.options.slidesToShow ) {
            _.currentSlide = 0;

        }

        currentSlide = _.currentSlide;

        _.destroy(true);

        $.extend(_, _.initials, { currentSlide: currentSlide });

        _.init();

        if( !initializing ) {

            _.changeSlide({
                data: {
                    message: 'index',
                    index: currentSlide
                }
            }, false);

        }

    };

    Slick.prototype.registerBreakpoints = function() {

        var _ = this, breakpoint, currentBreakpoint, l,
            responsiveSettings = _.options.responsive || null;

        if ( $.type(responsiveSettings) === 'array' && responsiveSettings.length ) {

            _.respondTo = _.options.respondTo || 'window';

            for ( breakpoint in responsiveSettings ) {

                l = _.breakpoints.length-1;
                currentBreakpoint = responsiveSettings[breakpoint].breakpoint;

                if (responsiveSettings.hasOwnProperty(breakpoint)) {

                    // loop through the breakpoints and cut out any existing
                    // ones with the same breakpoint number, we don't want dupes.
                    while( l >= 0 ) {
                        if( _.breakpoints[l] && _.breakpoints[l] === currentBreakpoint ) {
                            _.breakpoints.splice(l,1);
                        }
                        l--;
                    }

                    _.breakpoints.push(currentBreakpoint);
                    _.breakpointSettings[currentBreakpoint] = responsiveSettings[breakpoint].settings;

                }

            }

            _.breakpoints.sort(function(a, b) {
                return ( _.options.mobileFirst ) ? a-b : b-a;
            });

        }

    };

    Slick.prototype.reinit = function() {

        var _ = this;

        _.$slides =
            _.$slideTrack
                .children(_.options.slide)
                .addClass('slick-slide');

        _.slideCount = _.$slides.length;

        if (_.currentSlide >= _.slideCount && _.currentSlide !== 0) {
            _.currentSlide = _.currentSlide - _.options.slidesToScroll;
        }

        if (_.slideCount <= _.options.slidesToShow) {
            _.currentSlide = 0;
        }

        _.registerBreakpoints();

        _.setProps();
        _.setupInfinite();
        _.buildArrows();
        _.updateArrows();
        _.initArrowEvents();
        _.buildDots();
        _.updateDots();
        _.initDotEvents();
        _.cleanUpSlideEvents();
        _.initSlideEvents();

        _.checkResponsive(false, true);

        if (_.options.focusOnSelect === true) {
            $(_.$slideTrack).children().on('click.slick', _.selectHandler);
        }

        _.setSlideClasses(typeof _.currentSlide === 'number' ? _.currentSlide : 0);

        _.setPosition();
        _.focusHandler();

        _.paused = !_.options.autoplay;
        _.autoPlay();

        _.$slider.trigger('reInit', [_]);

    };

    Slick.prototype.resize = function() {

        var _ = this;

        if ($(window).width() !== _.windowWidth) {
            clearTimeout(_.windowDelay);
            _.windowDelay = window.setTimeout(function() {
                _.windowWidth = $(window).width();
                _.checkResponsive();
                if( !_.unslicked ) { _.setPosition(); }
            }, 50);
        }
    };

    Slick.prototype.removeSlide = Slick.prototype.slickRemove = function(index, removeBefore, removeAll) {

        var _ = this;

        if (typeof(index) === 'boolean') {
            removeBefore = index;
            index = removeBefore === true ? 0 : _.slideCount - 1;
        } else {
            index = removeBefore === true ? --index : index;
        }

        if (_.slideCount < 1 || index < 0 || index > _.slideCount - 1) {
            return false;
        }

        _.unload();

        if (removeAll === true) {
            _.$slideTrack.children().remove();
        } else {
            _.$slideTrack.children(this.options.slide).eq(index).remove();
        }

        _.$slides = _.$slideTrack.children(this.options.slide);

        _.$slideTrack.children(this.options.slide).detach();

        _.$slideTrack.append(_.$slides);

        _.$slidesCache = _.$slides;

        _.reinit();

    };

    Slick.prototype.setCSS = function(position) {

        var _ = this,
            positionProps = {},
            x, y;

        if (_.options.rtl === true) {
            position = -position;
        }
        x = _.positionProp == 'left' ? Math.ceil(position) + 'px' : '0px';
        y = _.positionProp == 'top' ? Math.ceil(position) + 'px' : '0px';

        positionProps[_.positionProp] = position;

        if (_.transformsEnabled === false) {
            _.$slideTrack.css(positionProps);
        } else {
            positionProps = {};
            if (_.cssTransitions === false) {
                positionProps[_.animType] = 'translate(' + x + ', ' + y + ')';
                _.$slideTrack.css(positionProps);
            } else {
                positionProps[_.animType] = 'translate3d(' + x + ', ' + y + ', 0px)';
                _.$slideTrack.css(positionProps);
            }
        }

    };

    Slick.prototype.setDimensions = function() {

        var _ = this;

        if (_.options.vertical === false) {
            if (_.options.centerMode === true) {
                _.$list.css({
                    padding: ('0px ' + _.options.centerPadding)
                });
            }
        } else {
            _.$list.height(_.$slides.first().outerHeight(true) * _.options.slidesToShow);
            if (_.options.centerMode === true) {
                _.$list.css({
                    padding: (_.options.centerPadding + ' 0px')
                });
            }
        }

        _.listWidth = _.$list.width();
        _.listHeight = _.$list.height();


        if (_.options.vertical === false && _.options.variableWidth === false) {
            _.slideWidth = Math.ceil(_.listWidth / _.options.slidesToShow);
            _.$slideTrack.width(Math.ceil((_.slideWidth * _.$slideTrack.children('.slick-slide').length)));

        } else if (_.options.variableWidth === true) {
            _.$slideTrack.width(5000 * _.slideCount);
        } else {
            _.slideWidth = Math.ceil(_.listWidth);
            _.$slideTrack.height(Math.ceil((_.$slides.first().outerHeight(true) * _.$slideTrack.children('.slick-slide').length)));
        }

        var offset = _.$slides.first().outerWidth(true) - _.$slides.first().width();
        if (_.options.variableWidth === false) _.$slideTrack.children('.slick-slide').width(_.slideWidth - offset);

    };

    Slick.prototype.setFade = function() {

        var _ = this,
            targetLeft;

        _.$slides.each(function(index, element) {
            targetLeft = (_.slideWidth * index) * -1;
            if (_.options.rtl === true) {
                $(element).css({
                    position: 'relative',
                    right: targetLeft,
                    top: 0,
                    zIndex: _.options.zIndex - 2,
                    opacity: 0
                });
            } else {
                $(element).css({
                    position: 'relative',
                    left: targetLeft,
                    top: 0,
                    zIndex: _.options.zIndex - 2,
                    opacity: 0
                });
            }
        });

        _.$slides.eq(_.currentSlide).css({
            zIndex: _.options.zIndex - 1,
            opacity: 1
        });

    };

    Slick.prototype.setHeight = function() {

        var _ = this;

        if (_.options.slidesToShow === 1 && _.options.adaptiveHeight === true && _.options.vertical === false) {
            var targetHeight = _.$slides.eq(_.currentSlide).outerHeight(true);
            _.$list.css('height', targetHeight);
        }

    };

    Slick.prototype.setOption =
    Slick.prototype.slickSetOption = function() {

        /**
         * accepts arguments in format of:
         *
         *  - for changing a single option's value:
         *     .slick("setOption", option, value, refresh )
         *
         *  - for changing a set of responsive options:
         *     .slick("setOption", 'responsive', [{}, ...], refresh )
         *
         *  - for updating multiple values at once (not responsive)
         *     .slick("setOption", { 'option': value, ... }, refresh )
         */

        var _ = this, l, item, option, value, refresh = false, type;

        if( $.type( arguments[0] ) === 'object' ) {

            option =  arguments[0];
            refresh = arguments[1];
            type = 'multiple';

        } else if ( $.type( arguments[0] ) === 'string' ) {

            option =  arguments[0];
            value = arguments[1];
            refresh = arguments[2];

            if ( arguments[0] === 'responsive' && $.type( arguments[1] ) === 'array' ) {

                type = 'responsive';

            } else if ( typeof arguments[1] !== 'undefined' ) {

                type = 'single';

            }

        }

        if ( type === 'single' ) {

            _.options[option] = value;


        } else if ( type === 'multiple' ) {

            $.each( option , function( opt, val ) {

                _.options[opt] = val;

            });


        } else if ( type === 'responsive' ) {

            for ( item in value ) {

                if( $.type( _.options.responsive ) !== 'array' ) {

                    _.options.responsive = [ value[item] ];

                } else {

                    l = _.options.responsive.length-1;

                    // loop through the responsive object and splice out duplicates.
                    while( l >= 0 ) {

                        if( _.options.responsive[l].breakpoint === value[item].breakpoint ) {

                            _.options.responsive.splice(l,1);

                        }

                        l--;

                    }

                    _.options.responsive.push( value[item] );

                }

            }

        }

        if ( refresh ) {

            _.unload();
            _.reinit();

        }

    };

    Slick.prototype.setPosition = function() {

        var _ = this;

        _.setDimensions();

        _.setHeight();

        if (_.options.fade === false) {
            _.setCSS(_.getLeft(_.currentSlide));
        } else {
            _.setFade();
        }

        _.$slider.trigger('setPosition', [_]);

    };

    Slick.prototype.setProps = function() {

        var _ = this,
            bodyStyle = document.body.style;

        _.positionProp = _.options.vertical === true ? 'top' : 'left';

        if (_.positionProp === 'top') {
            _.$slider.addClass('slick-vertical');
        } else {
            _.$slider.removeClass('slick-vertical');
        }

        if (bodyStyle.WebkitTransition !== undefined ||
            bodyStyle.MozTransition !== undefined ||
            bodyStyle.msTransition !== undefined) {
            if (_.options.useCSS === true) {
                _.cssTransitions = true;
            }
        }

        if ( _.options.fade ) {
            if ( typeof _.options.zIndex === 'number' ) {
                if( _.options.zIndex < 3 ) {
                    _.options.zIndex = 3;
                }
            } else {
                _.options.zIndex = _.defaults.zIndex;
            }
        }

        if (bodyStyle.OTransform !== undefined) {
            _.animType = 'OTransform';
            _.transformType = '-o-transform';
            _.transitionType = 'OTransition';
            if (bodyStyle.perspectiveProperty === undefined && bodyStyle.webkitPerspective === undefined) _.animType = false;
        }
        if (bodyStyle.MozTransform !== undefined) {
            _.animType = 'MozTransform';
            _.transformType = '-moz-transform';
            _.transitionType = 'MozTransition';
            if (bodyStyle.perspectiveProperty === undefined && bodyStyle.MozPerspective === undefined) _.animType = false;
        }
        if (bodyStyle.webkitTransform !== undefined) {
            _.animType = 'webkitTransform';
            _.transformType = '-webkit-transform';
            _.transitionType = 'webkitTransition';
            if (bodyStyle.perspectiveProperty === undefined && bodyStyle.webkitPerspective === undefined) _.animType = false;
        }
        if (bodyStyle.msTransform !== undefined) {
            _.animType = 'msTransform';
            _.transformType = '-ms-transform';
            _.transitionType = 'msTransition';
            if (bodyStyle.msTransform === undefined) _.animType = false;
        }
        if (bodyStyle.transform !== undefined && _.animType !== false) {
            _.animType = 'transform';
            _.transformType = 'transform';
            _.transitionType = 'transition';
        }
        _.transformsEnabled = _.options.useTransform && (_.animType !== null && _.animType !== false);
    };


    Slick.prototype.setSlideClasses = function(index) {

        var _ = this,
            centerOffset, allSlides, indexOffset, remainder;

        allSlides = _.$slider
            .find('.slick-slide')
            .removeClass('slick-active slick-center slick-current')
            .attr('aria-hidden', 'true');

        _.$slides
            .eq(index)
            .addClass('slick-current');

        if (_.options.centerMode === true) {

            centerOffset = Math.floor(_.options.slidesToShow / 2);

            if (_.options.infinite === true) {

                if (index >= centerOffset && index <= (_.slideCount - 1) - centerOffset) {

                    _.$slides
                        .slice(index - centerOffset, index + centerOffset + 1)
                        .addClass('slick-active')
                        .attr('aria-hidden', 'false');

                } else {

                    indexOffset = _.options.slidesToShow + index;
                    allSlides
                        .slice(indexOffset - centerOffset + 1, indexOffset + centerOffset + 2)
                        .addClass('slick-active')
                        .attr('aria-hidden', 'false');

                }

                if (index === 0) {

                    allSlides
                        .eq(allSlides.length - 1 - _.options.slidesToShow)
                        .addClass('slick-center');

                } else if (index === _.slideCount - 1) {

                    allSlides
                        .eq(_.options.slidesToShow)
                        .addClass('slick-center');

                }

            }

            _.$slides
                .eq(index)
                .addClass('slick-center');

        } else {

            if (index >= 0 && index <= (_.slideCount - _.options.slidesToShow)) {

                _.$slides
                    .slice(index, index + _.options.slidesToShow)
                    .addClass('slick-active')
                    .attr('aria-hidden', 'false');

            } else if (allSlides.length <= _.options.slidesToShow) {

                allSlides
                    .addClass('slick-active')
                    .attr('aria-hidden', 'false');

            } else {

                remainder = _.slideCount % _.options.slidesToShow;
                indexOffset = _.options.infinite === true ? _.options.slidesToShow + index : index;

                if (_.options.slidesToShow == _.options.slidesToScroll && (_.slideCount - index) < _.options.slidesToShow) {

                    allSlides
                        .slice(indexOffset - (_.options.slidesToShow - remainder), indexOffset + remainder)
                        .addClass('slick-active')
                        .attr('aria-hidden', 'false');

                } else {

                    allSlides
                        .slice(indexOffset, indexOffset + _.options.slidesToShow)
                        .addClass('slick-active')
                        .attr('aria-hidden', 'false');

                }

            }

        }

        if (_.options.lazyLoad === 'ondemand') {
            _.lazyLoad();
        }

    };

    Slick.prototype.setupInfinite = function() {

        var _ = this,
            i, slideIndex, infiniteCount;

        if (_.options.fade === true) {
            _.options.centerMode = false;
        }

        if (_.options.infinite === true && _.options.fade === false) {

            slideIndex = null;

            if (_.slideCount > _.options.slidesToShow) {

                if (_.options.centerMode === true) {
                    infiniteCount = _.options.slidesToShow + 1;
                } else {
                    infiniteCount = _.options.slidesToShow;
                }

                for (i = _.slideCount; i > (_.slideCount -
                        infiniteCount); i -= 1) {
                    slideIndex = i - 1;
                    $(_.$slides[slideIndex]).clone(true).attr('id', '')
                        .attr('data-slick-index', slideIndex - _.slideCount)
                        .prependTo(_.$slideTrack).addClass('slick-cloned');
                }
                for (i = 0; i < infiniteCount; i += 1) {
                    slideIndex = i;
                    $(_.$slides[slideIndex]).clone(true).attr('id', '')
                        .attr('data-slick-index', slideIndex + _.slideCount)
                        .appendTo(_.$slideTrack).addClass('slick-cloned');
                }
                _.$slideTrack.find('.slick-cloned').find('[id]').each(function() {
                    $(this).attr('id', '');
                });

            }

        }

    };

    Slick.prototype.interrupt = function( toggle ) {

        var _ = this;

        if( !toggle ) {
            _.autoPlay();
        }
        _.interrupted = toggle;

    };

    Slick.prototype.selectHandler = function(event) {

        var _ = this;

        var targetElement =
            $(event.target).is('.slick-slide') ?
                $(event.target) :
                $(event.target).parents('.slick-slide');

        var index = parseInt(targetElement.attr('data-slick-index'));

        if (!index) index = 0;

        if (_.slideCount <= _.options.slidesToShow) {

            _.setSlideClasses(index);
            _.asNavFor(index);
            return;

        }

        _.slideHandler(index);

    };

    Slick.prototype.slideHandler = function(index, sync, dontAnimate) {

        var targetSlide, animSlide, oldSlide, slideLeft, targetLeft = null,
            _ = this, navTarget;

        sync = sync || false;

        if (_.animating === true && _.options.waitForAnimate === true) {
            return;
        }

        if (_.options.fade === true && _.currentSlide === index) {
            return;
        }

        if (_.slideCount <= _.options.slidesToShow) {
            return;
        }

        if (sync === false) {
            _.asNavFor(index);
        }

        targetSlide = index;
        targetLeft = _.getLeft(targetSlide);
        slideLeft = _.getLeft(_.currentSlide);

        _.currentLeft = _.swipeLeft === null ? slideLeft : _.swipeLeft;

        if (_.options.infinite === false && _.options.centerMode === false && (index < 0 || index > _.getDotCount() * _.options.slidesToScroll)) {
            if (_.options.fade === false) {
                targetSlide = _.currentSlide;
                if (dontAnimate !== true) {
                    _.animateSlide(slideLeft, function() {
                        _.postSlide(targetSlide);
                    });
                } else {
                    _.postSlide(targetSlide);
                }
            }
            return;
        } else if (_.options.infinite === false && _.options.centerMode === true && (index < 0 || index > (_.slideCount - _.options.slidesToScroll))) {
            if (_.options.fade === false) {
                targetSlide = _.currentSlide;
                if (dontAnimate !== true) {
                    _.animateSlide(slideLeft, function() {
                        _.postSlide(targetSlide);
                    });
                } else {
                    _.postSlide(targetSlide);
                }
            }
            return;
        }

        if ( _.options.autoplay ) {
            clearInterval(_.autoPlayTimer);
        }

        if (targetSlide < 0) {
            if (_.slideCount % _.options.slidesToScroll !== 0) {
                animSlide = _.slideCount - (_.slideCount % _.options.slidesToScroll);
            } else {
                animSlide = _.slideCount + targetSlide;
            }
        } else if (targetSlide >= _.slideCount) {
            if (_.slideCount % _.options.slidesToScroll !== 0) {
                animSlide = 0;
            } else {
                animSlide = targetSlide - _.slideCount;
            }
        } else {
            animSlide = targetSlide;
        }

        _.animating = true;

        _.$slider.trigger('beforeChange', [_, _.currentSlide, animSlide]);

        oldSlide = _.currentSlide;
        _.currentSlide = animSlide;

        _.setSlideClasses(_.currentSlide);

        if ( _.options.asNavFor ) {

            navTarget = _.getNavTarget();
            navTarget = navTarget.slick('getSlick');

            if ( navTarget.slideCount <= navTarget.options.slidesToShow ) {
                navTarget.setSlideClasses(_.currentSlide);
            }

        }

        _.updateDots();
        _.updateArrows();

        if (_.options.fade === true) {
            if (dontAnimate !== true) {

                _.fadeSlideOut(oldSlide);

                _.fadeSlide(animSlide, function() {
                    _.postSlide(animSlide);
                });

            } else {
                _.postSlide(animSlide);
            }
            _.animateHeight();
            return;
        }

        if (dontAnimate !== true) {
            _.animateSlide(targetLeft, function() {
                _.postSlide(animSlide);
            });
        } else {
            _.postSlide(animSlide);
        }

    };

    Slick.prototype.startLoad = function() {

        var _ = this;

        if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {

            _.$prevArrow.hide();
            _.$nextArrow.hide();

        }

        if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {

            _.$dots.hide();

        }

        _.$slider.addClass('slick-loading');

    };

    Slick.prototype.swipeDirection = function() {

        var xDist, yDist, r, swipeAngle, _ = this;

        xDist = _.touchObject.startX - _.touchObject.curX;
        yDist = _.touchObject.startY - _.touchObject.curY;
        r = Math.atan2(yDist, xDist);

        swipeAngle = Math.round(r * 180 / Math.PI);
        if (swipeAngle < 0) {
            swipeAngle = 360 - Math.abs(swipeAngle);
        }

        if ((swipeAngle <= 45) && (swipeAngle >= 0)) {
            return (_.options.rtl === false ? 'left' : 'right');
        }
        if ((swipeAngle <= 360) && (swipeAngle >= 315)) {
            return (_.options.rtl === false ? 'left' : 'right');
        }
        if ((swipeAngle >= 135) && (swipeAngle <= 225)) {
            return (_.options.rtl === false ? 'right' : 'left');
        }
        if (_.options.verticalSwiping === true) {
            if ((swipeAngle >= 35) && (swipeAngle <= 135)) {
                return 'down';
            } else {
                return 'up';
            }
        }

        return 'vertical';

    };

    Slick.prototype.swipeEnd = function(event) {

        var _ = this,
            slideCount,
            direction;

        _.dragging = false;
        _.interrupted = false;
        _.shouldClick = ( _.touchObject.swipeLength > 10 ) ? false : true;

        if ( _.touchObject.curX === undefined ) {
            return false;
        }

        if ( _.touchObject.edgeHit === true ) {
            _.$slider.trigger('edge', [_, _.swipeDirection() ]);
        }

        if ( _.touchObject.swipeLength >= _.touchObject.minSwipe ) {

            direction = _.swipeDirection();

            switch ( direction ) {

                case 'left':
                case 'down':

                    slideCount =
                        _.options.swipeToSlide ?
                            _.checkNavigable( _.currentSlide + _.getSlideCount() ) :
                            _.currentSlide + _.getSlideCount();

                    _.currentDirection = 0;

                    break;

                case 'right':
                case 'up':

                    slideCount =
                        _.options.swipeToSlide ?
                            _.checkNavigable( _.currentSlide - _.getSlideCount() ) :
                            _.currentSlide - _.getSlideCount();

                    _.currentDirection = 1;

                    break;

                default:


            }

            if( direction != 'vertical' ) {

                _.slideHandler( slideCount );
                _.touchObject = {};
                _.$slider.trigger('swipe', [_, direction ]);

            }

        } else {

            if ( _.touchObject.startX !== _.touchObject.curX ) {

                _.slideHandler( _.currentSlide );
                _.touchObject = {};

            }

        }

    };

    Slick.prototype.swipeHandler = function(event) {

        var _ = this;

        if ((_.options.swipe === false) || ('ontouchend' in document && _.options.swipe === false)) {
            return;
        } else if (_.options.draggable === false && event.type.indexOf('mouse') !== -1) {
            return;
        }

        _.touchObject.fingerCount = event.originalEvent && event.originalEvent.touches !== undefined ?
            event.originalEvent.touches.length : 1;

        _.touchObject.minSwipe = _.listWidth / _.options
            .touchThreshold;

        if (_.options.verticalSwiping === true) {
            _.touchObject.minSwipe = _.listHeight / _.options
                .touchThreshold;
        }

        switch (event.data.action) {

            case 'start':
                _.swipeStart(event);
                break;

            case 'move':
                _.swipeMove(event);
                break;

            case 'end':
                _.swipeEnd(event);
                break;

        }

    };

    Slick.prototype.swipeMove = function(event) {

        var _ = this,
            edgeWasHit = false,
            curLeft, swipeDirection, swipeLength, positionOffset, touches;

        touches = event.originalEvent !== undefined ? event.originalEvent.touches : null;

        if (!_.dragging || touches && touches.length !== 1) {
            return false;
        }

        curLeft = _.getLeft(_.currentSlide);

        _.touchObject.curX = touches !== undefined ? touches[0].pageX : event.clientX;
        _.touchObject.curY = touches !== undefined ? touches[0].pageY : event.clientY;

        _.touchObject.swipeLength = Math.round(Math.sqrt(
            Math.pow(_.touchObject.curX - _.touchObject.startX, 2)));

        if (_.options.verticalSwiping === true) {
            _.touchObject.swipeLength = Math.round(Math.sqrt(
                Math.pow(_.touchObject.curY - _.touchObject.startY, 2)));
        }

        swipeDirection = _.swipeDirection();

        if (swipeDirection === 'vertical') {
            return;
        }

        if (event.originalEvent !== undefined && _.touchObject.swipeLength > 4) {
            event.preventDefault();
        }

        positionOffset = (_.options.rtl === false ? 1 : -1) * (_.touchObject.curX > _.touchObject.startX ? 1 : -1);
        if (_.options.verticalSwiping === true) {
            positionOffset = _.touchObject.curY > _.touchObject.startY ? 1 : -1;
        }


        swipeLength = _.touchObject.swipeLength;

        _.touchObject.edgeHit = false;

        if (_.options.infinite === false) {
            if ((_.currentSlide === 0 && swipeDirection === 'right') || (_.currentSlide >= _.getDotCount() && swipeDirection === 'left')) {
                swipeLength = _.touchObject.swipeLength * _.options.edgeFriction;
                _.touchObject.edgeHit = true;
            }
        }

        if (_.options.vertical === false) {
            _.swipeLeft = curLeft + swipeLength * positionOffset;
        } else {
            _.swipeLeft = curLeft + (swipeLength * (_.$list.height() / _.listWidth)) * positionOffset;
        }
        if (_.options.verticalSwiping === true) {
            _.swipeLeft = curLeft + swipeLength * positionOffset;
        }

        if (_.options.fade === true || _.options.touchMove === false) {
            return false;
        }

        if (_.animating === true) {
            _.swipeLeft = null;
            return false;
        }

        _.setCSS(_.swipeLeft);

    };

    Slick.prototype.swipeStart = function(event) {

        var _ = this,
            touches;

        _.interrupted = true;

        if (_.touchObject.fingerCount !== 1 || _.slideCount <= _.options.slidesToShow) {
            _.touchObject = {};
            return false;
        }

        if (event.originalEvent !== undefined && event.originalEvent.touches !== undefined) {
            touches = event.originalEvent.touches[0];
        }

        _.touchObject.startX = _.touchObject.curX = touches !== undefined ? touches.pageX : event.clientX;
        _.touchObject.startY = _.touchObject.curY = touches !== undefined ? touches.pageY : event.clientY;

        _.dragging = true;

    };

    Slick.prototype.unfilterSlides = Slick.prototype.slickUnfilter = function() {

        var _ = this;

        if (_.$slidesCache !== null) {

            _.unload();

            _.$slideTrack.children(this.options.slide).detach();

            _.$slidesCache.appendTo(_.$slideTrack);

            _.reinit();

        }

    };

    Slick.prototype.unload = function() {

        var _ = this;

        $('.slick-cloned', _.$slider).remove();

        if (_.$dots) {
            _.$dots.remove();
        }

        if (_.$prevArrow && _.htmlExpr.test(_.options.prevArrow)) {
            _.$prevArrow.remove();
        }

        if (_.$nextArrow && _.htmlExpr.test(_.options.nextArrow)) {
            _.$nextArrow.remove();
        }

        _.$slides
            .removeClass('slick-slide slick-active slick-visible slick-current')
            .attr('aria-hidden', 'true')
            .css('width', '');

    };

    Slick.prototype.unslick = function(fromBreakpoint) {

        var _ = this;
        _.$slider.trigger('unslick', [_, fromBreakpoint]);
        _.destroy();

    };

    Slick.prototype.updateArrows = function() {

        var _ = this,
            centerOffset;

        centerOffset = Math.floor(_.options.slidesToShow / 2);

        if ( _.options.arrows === true &&
            _.slideCount > _.options.slidesToShow &&
            !_.options.infinite ) {

            _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');
            _.$nextArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

            if (_.currentSlide === 0) {

                _.$prevArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
                _.$nextArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

            } else if (_.currentSlide >= _.slideCount - _.options.slidesToShow && _.options.centerMode === false) {

                _.$nextArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
                _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

            } else if (_.currentSlide >= _.slideCount - 1 && _.options.centerMode === true) {

                _.$nextArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
                _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

            }

        }

    };

    Slick.prototype.updateDots = function() {

        var _ = this;

        if (_.$dots !== null) {

            _.$dots
                .find('li')
                .removeClass('slick-active')
                .attr('aria-hidden', 'true');

            _.$dots
                .find('li')
                .eq(Math.floor(_.currentSlide / _.options.slidesToScroll))
                .addClass('slick-active')
                .attr('aria-hidden', 'false');

        }

    };

    Slick.prototype.visibility = function() {

        var _ = this;

        if ( _.options.autoplay ) {

            if ( document[_.hidden] ) {

                _.interrupted = true;

            } else {

                _.interrupted = false;

            }

        }

    };

    $.fn.slick = function() {
        var _ = this,
            opt = arguments[0],
            args = Array.prototype.slice.call(arguments, 1),
            l = _.length,
            i,
            ret;
        for (i = 0; i < l; i++) {
            if (typeof opt == 'object' || typeof opt == 'undefined')
                _[i].slick = new Slick(_[i], opt);
            else
                ret = _[i].slick[opt].apply(_[i].slick, args);
            if (typeof ret != 'undefined') return ret;
        }
        return _;
    };

}));

/*
 * Toastr
 * Copyright 2012-2015
 * Authors: John Papa, Hans Fjällemark, and Tim Ferrell.
 * All Rights Reserved.
 * Use, reproduction, distribution, and modification of this code is subject to the terms and
 * conditions of the MIT license, available at http://www.opensource.org/licenses/mit-license.php
 *
 * ARIA Support: Greta Krafsig
 *
 * Project: https://github.com/CodeSeven/toastr
 */
/* global define */
(function (define) {
    define(['jquery'], function ($) {
        return (function () {
            var $container;
            var listener;
            var toastId = 0;
            var toastType = {
                error: 'error',
                info: 'info',
                success: 'success',
                warning: 'warning'
            };

            var toastr = {
                clear: clear,
                remove: remove,
                error: error,
                getContainer: getContainer,
                info: info,
                options: {},
                subscribe: subscribe,
                success: success,
                version: '2.1.3',
                warning: warning
            };

            var previousToast;

            return toastr;

            ////////////////

            function error(message, title, optionsOverride) {
                return notify({
                    type: toastType.error,
                    iconClass: getOptions().iconClasses.error,
                    message: message,
                    optionsOverride: optionsOverride,
                    title: title
                });
            }

            function getContainer(options, create) {
                if (!options) { options = getOptions(); }
                $container = $('#' + options.containerId);
                if ($container.length) {
                    return $container;
                }
                if (create) {
                    $container = createContainer(options);
                }
                return $container;
            }

            function info(message, title, optionsOverride) {
                return notify({
                    type: toastType.info,
                    iconClass: getOptions().iconClasses.info,
                    message: message,
                    optionsOverride: optionsOverride,
                    title: title
                });
            }

            function subscribe(callback) {
                listener = callback;
            }

            function success(message, title, optionsOverride) {
                return notify({
                    type: toastType.success,
                    iconClass: getOptions().iconClasses.success,
                    message: message,
                    optionsOverride: optionsOverride,
                    title: title
                });
            }

            function warning(message, title, optionsOverride) {
                return notify({
                    type: toastType.warning,
                    iconClass: getOptions().iconClasses.warning,
                    message: message,
                    optionsOverride: optionsOverride,
                    title: title
                });
            }

            function clear($toastElement, clearOptions) {
                var options = getOptions();
                if (!$container) { getContainer(options); }
                if (!clearToast($toastElement, options, clearOptions)) {
                    clearContainer(options);
                }
            }

            function remove($toastElement) {
                var options = getOptions();
                if (!$container) { getContainer(options); }
                if ($toastElement && $(':focus', $toastElement).length === 0) {
                    removeToast($toastElement);
                    return;
                }
                if ($container.children().length) {
                    $container.remove();
                }
            }

            // internal functions

            function clearContainer (options) {
                var toastsToClear = $container.children();
                for (var i = toastsToClear.length - 1; i >= 0; i--) {
                    clearToast($(toastsToClear[i]), options);
                }
            }

            function clearToast ($toastElement, options, clearOptions) {
                var force = clearOptions && clearOptions.force ? clearOptions.force : false;
                if ($toastElement && (force || $(':focus', $toastElement).length === 0)) {
                    $toastElement[options.hideMethod]({
                        duration: options.hideDuration,
                        easing: options.hideEasing,
                        complete: function () { removeToast($toastElement); }
                    });
                    return true;
                }
                return false;
            }

            function createContainer(options) {
                $container = $('<div/>')
                    .attr('id', options.containerId)
                    .addClass(options.positionClass);

                $container.appendTo($(options.target));
                return $container;
            }

            function getDefaults() {
                return {
                    tapToDismiss: true,
                    toastClass: 'toast',
                    containerId: 'toast-container',
                    debug: false,

                    showMethod: 'fadeIn', //fadeIn, slideDown, and show are built into jQuery
                    showDuration: 300,
                    showEasing: 'swing', //swing and linear are built into jQuery
                    onShown: undefined,
                    hideMethod: 'fadeOut',
                    hideDuration: 1000,
                    hideEasing: 'swing',
                    onHidden: undefined,
                    closeMethod: false,
                    closeDuration: false,
                    closeEasing: false,
                    closeOnHover: true,

                    extendedTimeOut: 1000,
                    iconClasses: {
                        error: 'toast-error',
                        info: 'toast-info',
                        success: 'toast-success',
                        warning: 'toast-warning'
                    },
                    iconClass: 'toast-info',
                    positionClass: 'toast-top-right',
                    timeOut: 5000, // Set timeOut and extendedTimeOut to 0 to make it sticky
                    titleClass: 'toast-title',
                    messageClass: 'toast-message',
                    escapeHtml: false,
                    target: 'body',
                    closeHtml: '<button type="button">&times;</button>',
                    closeClass: 'toast-close-button',
                    newestOnTop: true,
                    preventDuplicates: false,
                    progressBar: false,
                    progressClass: 'toast-progress',
                    rtl: false
                };
            }

            function publish(args) {
                if (!listener) { return; }
                listener(args);
            }

            function notify(map) {
                var options = getOptions();
                var iconClass = map.iconClass || options.iconClass;

                if (typeof (map.optionsOverride) !== 'undefined') {
                    options = $.extend(options, map.optionsOverride);
                    iconClass = map.optionsOverride.iconClass || iconClass;
                }

                if (shouldExit(options, map)) { return; }

                toastId++;

                $container = getContainer(options, true);

                var intervalId = null;
                var $toastElement = $('<div/>');
                var $titleElement = $('<div/>');
                var $messageElement = $('<div/>');
                var $progressElement = $('<div/>');
                var $closeElement = $(options.closeHtml);
                var progressBar = {
                    intervalId: null,
                    hideEta: null,
                    maxHideTime: null
                };
                var response = {
                    toastId: toastId,
                    state: 'visible',
                    startTime: new Date(),
                    options: options,
                    map: map
                };

                personalizeToast();

                displayToast();

                handleEvents();

                publish(response);

                if (options.debug && console) {
                    console.log(response);
                }

                return $toastElement;

                function escapeHtml(source) {
                    if (source == null) {
                        source = '';
                    }

                    return source
                        .replace(/&/g, '&amp;')
                        .replace(/"/g, '&quot;')
                        .replace(/'/g, '&#39;')
                        .replace(/</g, '&lt;')
                        .replace(/>/g, '&gt;');
                }

                function personalizeToast() {
                    setIcon();
                    setTitle();
                    setMessage();
                    setCloseButton();
                    setProgressBar();
                    setRTL();
                    setSequence();
                    setAria();
                }

                function setAria() {
                    var ariaValue = '';
                    switch (map.iconClass) {
                        case 'toast-success':
                        case 'toast-info':
                            ariaValue =  'polite';
                            break;
                        default:
                            ariaValue = 'assertive';
                    }
                    $toastElement.attr('aria-live', ariaValue);
                }

                function handleEvents() {
                    if (options.closeOnHover) {
                        $toastElement.hover(stickAround, delayedHideToast);
                    }

                    if (!options.onclick && options.tapToDismiss) {
                        $toastElement.click(hideToast);
                    }

                    if (options.closeButton && $closeElement) {
                        $closeElement.click(function (event) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (event.cancelBubble !== undefined && event.cancelBubble !== true) {
                                event.cancelBubble = true;
                            }

                            if (options.onCloseClick) {
                                options.onCloseClick(event);
                            }

                            hideToast(true);
                        });
                    }

                    if (options.onclick) {
                        $toastElement.click(function (event) {
                            options.onclick(event);
                            hideToast();
                        });
                    }
                }

                function displayToast() {
                    $toastElement.hide();

                    $toastElement[options.showMethod](
                        {duration: options.showDuration, easing: options.showEasing, complete: options.onShown}
                    );

                    if (options.timeOut > 0) {
                        intervalId = setTimeout(hideToast, options.timeOut);
                        progressBar.maxHideTime = parseFloat(options.timeOut);
                        progressBar.hideEta = new Date().getTime() + progressBar.maxHideTime;
                        if (options.progressBar) {
                            progressBar.intervalId = setInterval(updateProgress, 10);
                        }
                    }
                }

                function setIcon() {
                    if (map.iconClass) {
                        $toastElement.addClass(options.toastClass).addClass(iconClass);
                    }
                }

                function setSequence() {
                    if (options.newestOnTop) {
                        $container.prepend($toastElement);
                    } else {
                        $container.append($toastElement);
                    }
                }

                function setTitle() {
                    if (map.title) {
                        var suffix = map.title;
                        if (options.escapeHtml) {
                            suffix = escapeHtml(map.title);
                        }
                        $titleElement.append(suffix).addClass(options.titleClass);
                        $toastElement.append($titleElement);
                    }
                }

                function setMessage() {
                    if (map.message) {
                        var suffix = map.message;
                        if (options.escapeHtml) {
                            suffix = escapeHtml(map.message);
                        }
                        $messageElement.append(suffix).addClass(options.messageClass);
                        $toastElement.append($messageElement);
                    }
                }

                function setCloseButton() {
                    if (options.closeButton) {
                        $closeElement.addClass(options.closeClass).attr('role', 'button');
                        $toastElement.prepend($closeElement);
                    }
                }

                function setProgressBar() {
                    if (options.progressBar) {
                        $progressElement.addClass(options.progressClass);
                        $toastElement.prepend($progressElement);
                    }
                }

                function setRTL() {
                    if (options.rtl) {
                        $toastElement.addClass('rtl');
                    }
                }

                function shouldExit(options, map) {
                    if (options.preventDuplicates) {
                        if (map.message === previousToast) {
                            return true;
                        } else {
                            previousToast = map.message;
                        }
                    }
                    return false;
                }

                function hideToast(override) {
                    var method = override && options.closeMethod !== false ? options.closeMethod : options.hideMethod;
                    var duration = override && options.closeDuration !== false ?
                        options.closeDuration : options.hideDuration;
                    var easing = override && options.closeEasing !== false ? options.closeEasing : options.hideEasing;
                    if ($(':focus', $toastElement).length && !override) {
                        return;
                    }
                    clearTimeout(progressBar.intervalId);
                    return $toastElement[method]({
                        duration: duration,
                        easing: easing,
                        complete: function () {
                            removeToast($toastElement);
                            clearTimeout(intervalId);
                            if (options.onHidden && response.state !== 'hidden') {
                                options.onHidden();
                            }
                            response.state = 'hidden';
                            response.endTime = new Date();
                            publish(response);
                        }
                    });
                }

                function delayedHideToast() {
                    if (options.timeOut > 0 || options.extendedTimeOut > 0) {
                        intervalId = setTimeout(hideToast, options.extendedTimeOut);
                        progressBar.maxHideTime = parseFloat(options.extendedTimeOut);
                        progressBar.hideEta = new Date().getTime() + progressBar.maxHideTime;
                    }
                }

                function stickAround() {
                    clearTimeout(intervalId);
                    progressBar.hideEta = 0;
                    $toastElement.stop(true, true)[options.showMethod](
                        {duration: options.showDuration, easing: options.showEasing}
                    );
                }

                function updateProgress() {
                    var percentage = ((progressBar.hideEta - (new Date().getTime())) / progressBar.maxHideTime) * 100;
                    $progressElement.width(percentage + '%');
                }
            }

            function getOptions() {
                return $.extend({}, getDefaults(), toastr.options);
            }

            function removeToast($toastElement) {
                if (!$container) { $container = getContainer(); }
                if ($toastElement.is(':visible')) {
                    return;
                }
                $toastElement.remove();
                $toastElement = null;
                if ($container.children().length === 0) {
                    $container.remove();
                    previousToast = undefined;
                }
            }

        })();
    });
}(typeof define === 'function' && define.amd ? define : function (deps, factory) {
    if (typeof module !== 'undefined' && module.exports) { //Node
        module.exports = factory(require('jquery'));
    } else {
        window.toastr = factory(window.jQuery);
    }
}));

/*!
 * Bootstrap Confirmation
 * Copyright 2013 Nimit Suwannagate <ethaizone@hotmail.com>
 * Copyright 2014-2016 Damien "Mistic" Sorel <contact@git.strangeplanet.fr>
 * Licensed under the Apache License, Version 2.0
 */

(function($) {
  'use strict';

  var activeConfirmation;

  // Confirmation extends popover.js
  if (!$.fn.popover) throw new Error('Confirmation requires popover.js');

  // CONFIRMATION PUBLIC CLASS DEFINITION
  // ===============================
  var Confirmation = function(element, options) {
    options.trigger = 'click';

    this.init(element, options);
  };

  Confirmation.VERSION = '2.4.0';

  /**
   * Map between keyboard events "keyCode|which" and "key"
   */
  Confirmation.KEYMAP = {
    13: 'Enter',
    27: 'Escape',
    39: 'ArrowRight',
    40: 'ArrowDown'
  };

  Confirmation.DEFAULTS = $.extend({}, $.fn.popover.Constructor.DEFAULTS, {
    placement: 'top',
    title: 'Are you sure?',
    popout: false,
    singleton: false,
    copyAttributes: 'href target',
    buttons: null,
    onConfirm: $.noop,
    onCancel: $.noop,
    btnOkClass: 'btn-xs btn-primary',
    btnOkIcon: 'glyphicon glyphicon-ok',
    btnOkLabel: 'Yes',
    btnCancelClass: 'btn-xs btn-default',
    btnCancelIcon: 'glyphicon glyphicon-remove',
    btnCancelLabel: 'No',
    // @formatter:off
    // href="#" allows the buttons to be focused
    template: '<div class="popover confirmation">' +
      '<div class="arrow"></div>' +
      '<h3 class="popover-title"></h3>' +
      '<div class="popover-content">' +
        '<p class="confirmation-content"></p>' +
        '<div class="confirmation-buttons text-center">' +
          '<div class="btn-group">' +
            '<a href="#" class="btn" data-apply="confirmation"></a>' +
            '<a href="#" class="btn" data-dismiss="confirmation"></a>' +
          '</div>' +
        '</div>' +
      '</div>' +
    '</div>'
    // @formatter:on
  });

  Confirmation.prototype = $.extend({}, $.fn.popover.Constructor.prototype);
  Confirmation.prototype.constructor = Confirmation;

  /**
   * Expose defaults
   * @returns {object}
   */
  Confirmation.prototype.getDefaults = function() {
    return Confirmation.DEFAULTS;
  };

  /**
   * Init the component
   * @param element {jQuery}
   * @param options {object}
   */
  Confirmation.prototype.init = function(element, options) {
    $.fn.popover.Constructor.prototype.init.call(this, 'confirmation', element, options);

    if ((this.options.popout || this.options.singleton) && !options.rootSelector) {
      throw new Error('The rootSelector option is required to use popout and singleton features since jQuery 3.');
    }

    // keep trace of selectors
    this.options._isDelegate = false;
    if (options.selector) { // container of buttons
      this.options._selector = this._options._selector = options.rootSelector + ' ' + options.selector;
    }
    else if (options._selector) { // children of container
      this.options._selector = options._selector;
      this.options._isDelegate = true;
    }
    else { // standalone
      this.options._selector = options.rootSelector;
    }

    var self = this;

    if (!this.options.selector) {
      // store copied attributes
      this.options._attributes = {};
      if (this.options.copyAttributes) {
        if (typeof this.options.copyAttributes === 'string') {
          this.options.copyAttributes = this.options.copyAttributes.split(' ');
        }
      }
      else {
        this.options.copyAttributes = [];
      }

      this.options.copyAttributes.forEach(function(attr) {
        this.options._attributes[attr] = this.$element.attr(attr);
      }, this);

      // cancel original event
      this.$element.on(this.options.trigger, function(e, ack) {
        if (!ack) {
          e.preventDefault();
          e.stopPropagation();
          e.stopImmediatePropagation();
        }
      });

      // manage singleton
      this.$element.on('show.bs.confirmation', function(e) {
        if (self.options.singleton) {
          // close all other popover already initialized
          $(self.options._selector).not($(this)).filter(function() {
            return $(this).data('bs.confirmation') !== undefined;
          }).confirmation('hide');
        }
      });
    }
    else {
      // cancel original event
      this.$element.on(this.options.trigger, this.options.selector, function(e, ack) {
        if (!ack) {
          e.preventDefault();
          e.stopPropagation();
          e.stopImmediatePropagation();
        }
      });
    }

    if (!this.options._isDelegate) {
      // manage popout
      this.eventBody = false;
      this.uid = this.$element[0].id || this.getUID('group_');

      this.$element.on('shown.bs.confirmation', function(e) {
        if (self.options.popout && !self.eventBody) {
          self.eventBody = $('body').on('click.bs.confirmation.' + self.uid, function(e) {
            if ($(self.options._selector).is(e.target)) {
              return;
            }

            // close all popover already initialized
            $(self.options._selector).filter(function() {
              return $(this).data('bs.confirmation') !== undefined;
            }).confirmation('hide');

            $('body').off('click.bs.' + self.uid);
            self.eventBody = false;
          });
        }
      });
    }
  };

  /**
   * Overrides, always show
   * @returns {boolean}
   */
  Confirmation.prototype.hasContent = function() {
    return true;
  };

  /**
   * Sets the popover content
   */
  Confirmation.prototype.setContent = function() {
    var self = this;
    var $tip = this.tip();
    var title = this.getTitle();
    var content = this.getContent();

    $tip.find('.popover-title')[this.options.html ? 'html' : 'text'](title);

    $tip.find('.confirmation-content').toggle(!!content).children().detach().end()[
      // we use append for html objects to maintain js events
      this.options.html ? (typeof content == 'string' ? 'html' : 'append') : 'text'
      ](content);

    $tip.on('click', function(e) {
      e.stopPropagation();
    });

    if (this.options.buttons) {
      // configure custom buttons
      var $group = $tip.find('.confirmation-buttons .btn-group').empty();

      this.options.buttons.forEach(function(button) {
        $group.append(
          $('<a href="#"></a>')
            .addClass(button.class || 'btn btn-xs btn-default')
            .html(button.label || '')
            .attr(button.attr || {})
            .prepend($('<i></i>').addClass(button.icon), ' ')
            .one('click', function(e) {
              if ($(this).attr('href') === '#') {
                e.preventDefault();
              }

              if (button.onClick) {
                button.onClick.call(self.$element);
              }

              if (button.cancel) {
                self.getOnCancel.call(self).call(self.$element);
                self.$element.trigger('canceled.bs.confirmation');
              }
              else {
                self.getOnConfirm.call(self).call(self.$element);
                self.$element.trigger('confirmed.bs.confirmation');
              }

              if (self.inState) { // Bootstrap 3.3.5
                self.inState.click = false;
              }

              self.hide();
            })
        );
      }, this);
    }
    else {
      // configure 'ok' button
      $tip.find('[data-apply="confirmation"]')
        .addClass(this.options.btnOkClass)
        .html(this.options.btnOkLabel)
        .attr(this.options._attributes)
        .prepend($('<i></i>').addClass(this.options.btnOkIcon), ' ')
        .off('click')
        .one('click', function(e) {
          if ($(this).attr('href') === '#') {
            e.preventDefault();
          }

          self.getOnConfirm.call(self).call(self.$element);
          self.$element.trigger('confirmed.bs.confirmation');

          self.$element.trigger(self.options.trigger, [true]);

          self.hide();
        });

      // configure 'cancel' button
      $tip.find('[data-dismiss="confirmation"]')
        .addClass(this.options.btnCancelClass)
        .html(this.options.btnCancelLabel)
        .prepend($('<i></i>').addClass(this.options.btnCancelIcon), ' ')
        .off('click')
        .one('click', function(e) {
          e.preventDefault();

          self.getOnCancel.call(self).call(self.$element);
          self.$element.trigger('canceled.bs.confirmation');

          if (self.inState) { // Bootstrap 3.3.5
            self.inState.click = false;
          }

          self.hide();
        });
    }

    $tip.removeClass('fade top bottom left right in');

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!$tip.find('.popover-title').html()) {
      $tip.find('.popover-title').hide();
    }

    // bind key navigation
    activeConfirmation = this;
    $(window)
      .off('keyup.bs.confirmation')
      .on('keyup.bs.confirmation', this._onKeyup.bind(this));
  };

  /**
   * Remove key binding on destroy
   */
  Confirmation.prototype.destroy = function() {
    if (activeConfirmation === this) {
      activeConfirmation = undefined;
      $(window).off('keyup.bs.confirmation');
    }
    $.fn.popover.Constructor.prototype.destroy.call(this);
  };

  /**
   * Remove key binding on hide
   */
  Confirmation.prototype.hide = function() {
    if (activeConfirmation === this) {
      activeConfirmation = undefined;
      $(window).off('keyup.bs.confirmation');
    }
    $.fn.popover.Constructor.prototype.hide.call(this);
  };

  /**
   * Navigate through buttons with keyboard
   * @param event
   * @private
   */
  Confirmation.prototype._onKeyup = function(event) {
    if (!this.$tip) {
      activeConfirmation = undefined;
      $(window).off('keyup.bs.confirmation');
      return;
    }

    var key = event.key || Confirmation.KEYMAP[event.keyCode || event.which];

    var $group = this.$tip.find('.confirmation-buttons .btn-group');
    var $active = $group.find('.active');
    var $next;

    switch (key) {
      case 'Escape':
        this.hide();
        break;

      case 'ArrowRight':
        if ($active.length && $active.next().length) {
          $next = $active.next();
        }
        else {
          $next = $group.children().first();
        }
        $active.removeClass('active');
        $next.addClass('active').focus();
        break;

      case 'ArrowLeft':
        if ($active.length && $active.prev().length) {
          $next = $active.prev();
        }
        else {
          $next = $group.children().last();
        }
        $active.removeClass('active');
        $next.addClass('active').focus();
        break;
    }
  };

  /**
   * Gets the on-confirm callback
   * @returns {function}
   */
  Confirmation.prototype.getOnConfirm = function() {
    if (this.$element.attr('data-on-confirm')) {
      return getFunctionFromString(this.$element.attr('data-on-confirm'));
    }
    else {
      return this.options.onConfirm;
    }
  };

  /**
   * Gets the on-cancel callback
   * @returns {function}
   */
  Confirmation.prototype.getOnCancel = function() {
    if (this.$element.attr('data-on-cancel')) {
      return getFunctionFromString(this.$element.attr('data-on-cancel'));
    }
    else {
      return this.options.onCancel;
    }
  };

  /**
   * Generates an anonymous function from a function name
   * function name may contain dots (.) to navigate through objects
   * root context is window
   */
  function getFunctionFromString(functionName) {
    var context = window;
    var namespaces = functionName.split('.');
    var func = namespaces.pop();

    for (var i = 0, l = namespaces.length; i < l; i++) {
      context = context[namespaces[i]];
    }

    return function() {
      context[func].call(this);
    };
  }


  // CONFIRMATION PLUGIN DEFINITION
  // =========================

  var old = $.fn.confirmation;

  $.fn.confirmation = function(option) {
    var options = (typeof option == 'object' && option) || {};
    options.rootSelector = this.selector || options.rootSelector; // this.selector removed in jQuery > 3

    return this.each(function() {
      var $this = $(this);
      var data = $this.data('bs.confirmation');

      if (!data && option == 'destroy') {
        return;
      }
      if (!data) {
        $this.data('bs.confirmation', (data = new Confirmation(this, options)));
      }
      if (typeof option == 'string') {
        data[option]();

        if (option == 'hide' && data.inState) { //data.inState doesn't exist in Bootstrap < 3.3.5
          data.inState.click = false;
        }
      }
    });
  };

  $.fn.confirmation.Constructor = Confirmation;


  // CONFIRMATION NO CONFLICT
  // ===================

  $.fn.confirmation.noConflict = function() {
    $.fn.confirmation = old;
    return this;
  };

}(jQuery));

(function() {
  var $, AbstractChosen, Chosen, SelectParser, _ref,
    __hasProp = {}.hasOwnProperty,
    __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

  SelectParser = (function() {
    function SelectParser() {
      this.options_index = 0;
      this.parsed = [];
    }

    SelectParser.prototype.add_node = function(child) {
      if (child.nodeName.toUpperCase() === "OPTGROUP") {
        return this.add_group(child);
      } else {
        return this.add_option(child);
      }
    };

    SelectParser.prototype.add_group = function(group) {
      var group_position, option, _i, _len, _ref, _results;
      group_position = this.parsed.length;
      this.parsed.push({
        array_index: group_position,
        group: true,
        label: this.escapeExpression(group.label),
        title: group.title ? group.title : void 0,
        children: 0,
        disabled: group.disabled,
        classes: group.className
      });
      _ref = group.childNodes;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        option = _ref[_i];
        _results.push(this.add_option(option, group_position, group.disabled));
      }
      return _results;
    };

    SelectParser.prototype.add_option = function(option, group_position, group_disabled) {
      if (option.nodeName.toUpperCase() === "OPTION") {
        if (option.text !== "") {
          if (group_position != null) {
            this.parsed[group_position].children += 1;
          }
          this.parsed.push({
            array_index: this.parsed.length,
            options_index: this.options_index,
            value: option.value,
            text: option.text,
            html: option.innerHTML,
            title: option.title ? option.title : void 0,
            selected: option.selected,
            disabled: group_disabled === true ? group_disabled : option.disabled,
            group_array_index: group_position,
            group_label: group_position != null ? this.parsed[group_position].label : null,
            classes: option.className,
            style: option.style.cssText
          });
        } else {
          this.parsed.push({
            array_index: this.parsed.length,
            options_index: this.options_index,
            empty: true
          });
        }
        return this.options_index += 1;
      }
    };

    SelectParser.prototype.escapeExpression = function(text) {
      var map, unsafe_chars;
      if ((text == null) || text === false) {
        return "";
      }
      if (!/[\&\<\>\"\'\`]/.test(text)) {
        return text;
      }
      map = {
        "<": "&lt;",
        ">": "&gt;",
        '"': "&quot;",
        "'": "&#x27;",
        "`": "&#x60;"
      };
      unsafe_chars = /&(?!\w+;)|[\<\>\"\'\`]/g;
      return text.replace(unsafe_chars, function(chr) {
        return map[chr] || "&amp;";
      });
    };

    return SelectParser;

  })();

  SelectParser.select_to_array = function(select) {
    var child, parser, _i, _len, _ref;
    parser = new SelectParser();
    _ref = select.childNodes;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      child = _ref[_i];
      parser.add_node(child);
    }
    return parser.parsed;
  };

  AbstractChosen = (function() {
    function AbstractChosen(form_field, options) {
      this.form_field = form_field;
      this.options = options != null ? options : {};
      if (!AbstractChosen.browser_is_supported()) {
        return;
      }
      this.is_multiple = this.form_field.multiple;
      this.set_default_text();
      this.set_default_values();
      this.setup();
      this.set_up_html();
      this.register_observers();
      this.on_ready();
    }

    AbstractChosen.prototype.set_default_values = function() {
      var _this = this;
      this.click_test_action = function(evt) {
        return _this.test_active_click(evt);
      };
      this.activate_action = function(evt) {
        return _this.activate_field(evt);
      };
      this.active_field = false;
      this.mouse_on_container = false;
      this.results_showing = false;
      this.result_highlighted = null;
      this.allow_single_deselect = (this.options.allow_single_deselect != null) && (this.form_field.options[0] != null) && this.form_field.options[0].text === "" ? this.options.allow_single_deselect : false;
      this.disable_search_threshold = this.options.disable_search_threshold || 0;
      this.disable_search = this.options.disable_search || false;
      this.enable_split_word_search = this.options.enable_split_word_search != null ? this.options.enable_split_word_search : true;
      this.group_search = this.options.group_search != null ? this.options.group_search : true;
      this.search_contains = this.options.search_contains || false;
      this.single_backstroke_delete = this.options.single_backstroke_delete != null ? this.options.single_backstroke_delete : true;
      this.max_selected_options = this.options.max_selected_options || Infinity;
      this.inherit_select_classes = this.options.inherit_select_classes || false;
      this.display_selected_options = this.options.display_selected_options != null ? this.options.display_selected_options : true;
      this.display_disabled_options = this.options.display_disabled_options != null ? this.options.display_disabled_options : true;
      this.include_group_label_in_selected = this.options.include_group_label_in_selected || false;
      this.max_shown_results = this.options.max_shown_results || Number.POSITIVE_INFINITY;
      return this.case_sensitive_search = this.options.case_sensitive_search || false;
    };

    AbstractChosen.prototype.set_default_text = function() {
      if (this.form_field.getAttribute("data-placeholder")) {
        this.default_text = this.form_field.getAttribute("data-placeholder");
      } else if (this.is_multiple) {
        this.default_text = this.options.placeholder_text_multiple || this.options.placeholder_text || AbstractChosen.default_multiple_text;
      } else {
        this.default_text = this.options.placeholder_text_single || this.options.placeholder_text || AbstractChosen.default_single_text;
      }
      return this.results_none_found = this.form_field.getAttribute("data-no_results_text") || this.options.no_results_text || AbstractChosen.default_no_result_text;
    };

    AbstractChosen.prototype.choice_label = function(item) {
      if (this.include_group_label_in_selected && (item.group_label != null)) {
        return "<b class='group-name'>" + item.group_label + "</b>" + item.html;
      } else {
        return item.html;
      }
    };

    AbstractChosen.prototype.mouse_enter = function() {
      return this.mouse_on_container = true;
    };

    AbstractChosen.prototype.mouse_leave = function() {
      return this.mouse_on_container = false;
    };

    AbstractChosen.prototype.input_focus = function(evt) {
      var _this = this;
      if (this.is_multiple) {
        if (!this.active_field) {
          return setTimeout((function() {
            return _this.container_mousedown();
          }), 50);
        }
      } else {
        if (!this.active_field) {
          return this.activate_field();
        }
      }
    };

    AbstractChosen.prototype.input_blur = function(evt) {
      var _this = this;
      if (!this.mouse_on_container) {
        this.active_field = false;
        return setTimeout((function() {
          return _this.blur_test();
        }), 100);
      }
    };

    AbstractChosen.prototype.results_option_build = function(options) {
      var content, data, data_content, shown_results, _i, _len, _ref;
      content = '';
      shown_results = 0;
      _ref = this.results_data;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        data = _ref[_i];
        data_content = '';
        if (data.group) {
          data_content = this.result_add_group(data);
        } else {
          data_content = this.result_add_option(data);
        }
        if (data_content !== '') {
          shown_results++;
          content += data_content;
        }
        if (options != null ? options.first : void 0) {
          if (data.selected && this.is_multiple) {
            this.choice_build(data);
          } else if (data.selected && !this.is_multiple) {
            this.single_set_selected_text(this.choice_label(data));
          }
        }
        if (shown_results >= this.max_shown_results) {
          break;
        }
      }
      return content;
    };

    AbstractChosen.prototype.result_add_option = function(option) {
      var classes, option_el;
      if (!option.search_match) {
        return '';
      }
      if (!this.include_option_in_results(option)) {
        return '';
      }
      classes = [];
      if (!option.disabled && !(option.selected && this.is_multiple)) {
        classes.push("active-result");
      }
      if (option.disabled && !(option.selected && this.is_multiple)) {
        classes.push("disabled-result");
      }
      if (option.selected) {
        classes.push("result-selected");
      }
      if (option.group_array_index != null) {
        classes.push("group-option");
      }
      if (option.classes !== "") {
        classes.push(option.classes);
      }
      option_el = document.createElement("li");
      option_el.className = classes.join(" ");
      option_el.style.cssText = option.style;
      option_el.setAttribute("data-option-array-index", option.array_index);
      option_el.innerHTML = option.search_text;
      if (option.title) {
        option_el.title = option.title;
      }
      return this.outerHTML(option_el);
    };

    AbstractChosen.prototype.result_add_group = function(group) {
      var classes, group_el;
      if (!(group.search_match || group.group_match)) {
        return '';
      }
      if (!(group.active_options > 0)) {
        return '';
      }
      classes = [];
      classes.push("group-result");
      if (group.classes) {
        classes.push(group.classes);
      }
      group_el = document.createElement("li");
      group_el.className = classes.join(" ");
      group_el.innerHTML = group.search_text;
      if (group.title) {
        group_el.title = group.title;
      }
      return this.outerHTML(group_el);
    };

    AbstractChosen.prototype.results_update_field = function() {
      this.set_default_text();
      if (!this.is_multiple) {
        this.results_reset_cleanup();
      }
      this.result_clear_highlight();
      this.results_build();
      if (this.results_showing) {
        return this.winnow_results();
      }
    };

    AbstractChosen.prototype.reset_single_select_options = function() {
      var result, _i, _len, _ref, _results;
      _ref = this.results_data;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        result = _ref[_i];
        if (result.selected) {
          _results.push(result.selected = false);
        } else {
          _results.push(void 0);
        }
      }
      return _results;
    };

    AbstractChosen.prototype.results_toggle = function() {
      if (this.results_showing) {
        return this.results_hide();
      } else {
        return this.results_show();
      }
    };

    AbstractChosen.prototype.results_search = function(evt) {
      if (this.results_showing) {
        return this.winnow_results();
      } else {
        return this.results_show();
      }
    };

    AbstractChosen.prototype.winnow_results = function() {
      var escapedSearchText, option, regex, results, results_group, searchText, startpos, text, zregex, _i, _len, _ref;
      this.no_results_clear();
      results = 0;
      searchText = this.get_search_text();
      escapedSearchText = searchText.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
      zregex = new RegExp(escapedSearchText, 'i');
      regex = this.get_search_regex(escapedSearchText);
      _ref = this.results_data;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        option = _ref[_i];
        option.search_match = false;
        results_group = null;
        if (this.include_option_in_results(option)) {
          if (option.group) {
            option.group_match = false;
            option.active_options = 0;
          }
          if ((option.group_array_index != null) && this.results_data[option.group_array_index]) {
            results_group = this.results_data[option.group_array_index];
            if (results_group.active_options === 0 && results_group.search_match) {
              results += 1;
            }
            results_group.active_options += 1;
          }
          option.search_text = option.group ? option.label : option.html;
          if (!(option.group && !this.group_search)) {
            option.search_match = this.search_string_match(option.search_text, regex);
            if (option.search_match && !option.group) {
              results += 1;
            }
            if (option.search_match) {
              if (searchText.length) {
                startpos = option.search_text.search(zregex);
                text = option.search_text.substr(0, startpos + searchText.length) + '</em>' + option.search_text.substr(startpos + searchText.length);
                option.search_text = text.substr(0, startpos) + '<em>' + text.substr(startpos);
              }
              if (results_group != null) {
                results_group.group_match = true;
              }
            } else if ((option.group_array_index != null) && this.results_data[option.group_array_index].search_match) {
              option.search_match = true;
            }
          }
        }
      }
      this.result_clear_highlight();
      if (results < 1 && searchText.length) {
        this.update_results_content("");
        return this.no_results(searchText);
      } else {
        this.update_results_content(this.results_option_build());
        return this.winnow_results_set_highlight();
      }
    };

    AbstractChosen.prototype.get_search_regex = function(escaped_search_string) {
      var regex_anchor, regex_flag;
      regex_anchor = this.search_contains ? "" : "^";
      regex_flag = this.case_sensitive_search ? "" : "i";
      return new RegExp(regex_anchor + escaped_search_string, regex_flag);
    };

    AbstractChosen.prototype.search_string_match = function(search_string, regex) {
      var part, parts, _i, _len;
      if (regex.test(search_string)) {
        return true;
      } else if (this.enable_split_word_search && (search_string.indexOf(" ") >= 0 || search_string.indexOf("[") === 0)) {
        parts = search_string.replace(/\[|\]/g, "").split(" ");
        if (parts.length) {
          for (_i = 0, _len = parts.length; _i < _len; _i++) {
            part = parts[_i];
            if (regex.test(part)) {
              return true;
            }
          }
        }
      }
    };

    AbstractChosen.prototype.choices_count = function() {
      var option, _i, _len, _ref;
      if (this.selected_option_count != null) {
        return this.selected_option_count;
      }
      this.selected_option_count = 0;
      _ref = this.form_field.options;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        option = _ref[_i];
        if (option.selected) {
          this.selected_option_count += 1;
        }
      }
      return this.selected_option_count;
    };

    AbstractChosen.prototype.choices_click = function(evt) {
      evt.preventDefault();
      if (!(this.results_showing || this.is_disabled)) {
        return this.results_show();
      }
    };

    AbstractChosen.prototype.keyup_checker = function(evt) {
      var stroke, _ref;
      stroke = (_ref = evt.which) != null ? _ref : evt.keyCode;
      this.search_field_scale();
      switch (stroke) {
        case 8:
          if (this.is_multiple && this.backstroke_length < 1 && this.choices_count() > 0) {
            return this.keydown_backstroke();
          } else if (!this.pending_backstroke) {
            this.result_clear_highlight();
            return this.results_search();
          }
          break;
        case 13:
          evt.preventDefault();
          if (this.results_showing) {
            return this.result_select(evt);
          }
          break;
        case 27:
          if (this.results_showing) {
            this.results_hide();
          }
          return true;
        case 9:
        case 38:
        case 40:
        case 16:
        case 91:
        case 17:
        case 18:
          break;
        default:
          return this.results_search();
      }
    };

    AbstractChosen.prototype.clipboard_event_checker = function(evt) {
      var _this = this;
      return setTimeout((function() {
        return _this.results_search();
      }), 50);
    };

    AbstractChosen.prototype.container_width = function() {
      if (this.options.width != null) {
        return this.options.width;
      } else {
        return "" + this.form_field.offsetWidth + "px";
      }
    };

    AbstractChosen.prototype.include_option_in_results = function(option) {
      if (this.is_multiple && (!this.display_selected_options && option.selected)) {
        return false;
      }
      if (!this.display_disabled_options && option.disabled) {
        return false;
      }
      if (option.empty) {
        return false;
      }
      return true;
    };

    AbstractChosen.prototype.search_results_touchstart = function(evt) {
      this.touch_started = true;
      return this.search_results_mouseover(evt);
    };

    AbstractChosen.prototype.search_results_touchmove = function(evt) {
      this.touch_started = false;
      return this.search_results_mouseout(evt);
    };

    AbstractChosen.prototype.search_results_touchend = function(evt) {
      if (this.touch_started) {
        return this.search_results_mouseup(evt);
      }
    };

    AbstractChosen.prototype.outerHTML = function(element) {
      var tmp;
      if (element.outerHTML) {
        return element.outerHTML;
      }
      tmp = document.createElement("div");
      tmp.appendChild(element);
      return tmp.innerHTML;
    };

    AbstractChosen.browser_is_supported = function() {
      if ("Microsoft Internet Explorer" === window.navigator.appName) {
        return document.documentMode >= 8;
      }
      if (/iP(od|hone)/i.test(window.navigator.userAgent) || /IEMobile/i.test(window.navigator.userAgent) || /Windows Phone/i.test(window.navigator.userAgent) || /BlackBerry/i.test(window.navigator.userAgent) || /BB10/i.test(window.navigator.userAgent) || /Android.*Mobile/i.test(window.navigator.userAgent)) {
        return false;
      }
      return true;
    };

    AbstractChosen.default_multiple_text = "Select Some Options";

    AbstractChosen.default_single_text = "Select an Option";

    AbstractChosen.default_no_result_text = "No results match";

    return AbstractChosen;

  })();

  $ = jQuery;

  $.fn.extend({
    chosen: function(options) {
      if (!AbstractChosen.browser_is_supported()) {
        return this;
      }
      return this.each(function(input_field) {
        var $this, chosen;
        $this = $(this);
        chosen = $this.data('chosen');
        if (options === 'destroy') {
          if (chosen instanceof Chosen) {
            chosen.destroy();
          }
          return;
        }
        if (!(chosen instanceof Chosen)) {
          $this.data('chosen', new Chosen(this, options));
        }
      });
    }
  });

  Chosen = (function(_super) {
    __extends(Chosen, _super);

    function Chosen() {
      _ref = Chosen.__super__.constructor.apply(this, arguments);
      return _ref;
    }

    Chosen.prototype.setup = function() {
      this.form_field_jq = $(this.form_field);
      this.current_selectedIndex = this.form_field.selectedIndex;
      return this.is_rtl = this.form_field_jq.hasClass("chosen-rtl");
    };

    Chosen.prototype.set_up_html = function() {
      var container_classes, container_props;
      container_classes = ["chosen-container"];
      container_classes.push("chosen-container-" + (this.is_multiple ? "multi" : "single"));
      if (this.inherit_select_classes && this.form_field.className) {
        container_classes.push(this.form_field.className);
      }
      if (this.is_rtl) {
        container_classes.push("chosen-rtl");
      }
      container_props = {
        'class': container_classes.join(' '),
        'style': "width: " + (this.container_width()) + ";",
        'title': this.form_field.title
      };
      if (this.form_field.id.length) {
        container_props.id = this.form_field.id.replace(/[^\w]/g, '_') + "_chosen";
      }
      this.container = $("<div />", container_props);
      if (this.is_multiple) {
        this.container.html('<ul class="chosen-choices"><li class="search-field"><input type="text" value="' + this.default_text + '" class="default" autocomplete="off" style="width:25px;" /></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div>');
      } else {
        this.container.html('<a class="chosen-single chosen-default"><span>' + this.default_text + '</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" /></div><ul class="chosen-results"></ul></div>');
      }
      this.form_field_jq.hide().after(this.container);
      this.dropdown = this.container.find('div.chosen-drop').first();
      this.search_field = this.container.find('input').first();
      this.search_results = this.container.find('ul.chosen-results').first();
      this.search_field_scale();
      this.search_no_results = this.container.find('li.no-results').first();
      if (this.is_multiple) {
        this.search_choices = this.container.find('ul.chosen-choices').first();
        this.search_container = this.container.find('li.search-field').first();
      } else {
        this.search_container = this.container.find('div.chosen-search').first();
        this.selected_item = this.container.find('.chosen-single').first();
      }
      this.results_build();
      this.set_tab_index();
      return this.set_label_behavior();
    };

    Chosen.prototype.on_ready = function() {
      return this.form_field_jq.trigger("chosen:ready", {
        chosen: this
      });
    };

    Chosen.prototype.register_observers = function() {
      var _this = this;
      this.container.bind('touchstart.chosen', function(evt) {
        _this.container_mousedown(evt);
        return evt.preventDefault();
      });
      this.container.bind('touchend.chosen', function(evt) {
        _this.container_mouseup(evt);
        return evt.preventDefault();
      });
      this.container.bind('mousedown.chosen', function(evt) {
        _this.container_mousedown(evt);
      });
      this.container.bind('mouseup.chosen', function(evt) {
        _this.container_mouseup(evt);
      });
      this.container.bind('mouseenter.chosen', function(evt) {
        _this.mouse_enter(evt);
      });
      this.container.bind('mouseleave.chosen', function(evt) {
        _this.mouse_leave(evt);
      });
      this.search_results.bind('mouseup.chosen', function(evt) {
        _this.search_results_mouseup(evt);
      });
      this.search_results.bind('mouseover.chosen', function(evt) {
        _this.search_results_mouseover(evt);
      });
      this.search_results.bind('mouseout.chosen', function(evt) {
        _this.search_results_mouseout(evt);
      });
      this.search_results.bind('mousewheel.chosen DOMMouseScroll.chosen', function(evt) {
        _this.search_results_mousewheel(evt);
      });
      this.search_results.bind('touchstart.chosen', function(evt) {
        _this.search_results_touchstart(evt);
      });
      this.search_results.bind('touchmove.chosen', function(evt) {
        _this.search_results_touchmove(evt);
      });
      this.search_results.bind('touchend.chosen', function(evt) {
        _this.search_results_touchend(evt);
      });
      this.form_field_jq.bind("chosen:updated.chosen", function(evt) {
        _this.results_update_field(evt);
      });
      this.form_field_jq.bind("chosen:activate.chosen", function(evt) {
        _this.activate_field(evt);
      });
      this.form_field_jq.bind("chosen:open.chosen", function(evt) {
        _this.container_mousedown(evt);
      });
      this.form_field_jq.bind("chosen:close.chosen", function(evt) {
        _this.input_blur(evt);
      });
      this.search_field.bind('blur.chosen', function(evt) {
        _this.input_blur(evt);
      });
      this.search_field.bind('keyup.chosen', function(evt) {
        _this.keyup_checker(evt);
      });
      this.search_field.bind('keydown.chosen', function(evt) {
        _this.keydown_checker(evt);
      });
      this.search_field.bind('focus.chosen', function(evt) {
        _this.input_focus(evt);
      });
      this.search_field.bind('cut.chosen', function(evt) {
        _this.clipboard_event_checker(evt);
      });
      this.search_field.bind('paste.chosen', function(evt) {
        _this.clipboard_event_checker(evt);
      });
      if (this.is_multiple) {
        return this.search_choices.bind('click.chosen', function(evt) {
          _this.choices_click(evt);
        });
      } else {
        return this.container.bind('click.chosen', function(evt) {
          evt.preventDefault();
        });
      }
    };

    Chosen.prototype.destroy = function() {
      $(this.container[0].ownerDocument).unbind("click.chosen", this.click_test_action);
      if (this.search_field[0].tabIndex) {
        this.form_field_jq[0].tabIndex = this.search_field[0].tabIndex;
      }
      this.container.remove();
      this.form_field_jq.removeData('chosen');
      return this.form_field_jq.show();
    };

    Chosen.prototype.search_field_disabled = function() {
      this.is_disabled = this.form_field_jq[0].disabled;
      if (this.is_disabled) {
        this.container.addClass('chosen-disabled');
        this.search_field[0].disabled = true;
        if (!this.is_multiple) {
          this.selected_item.unbind("focus.chosen", this.activate_action);
        }
        return this.close_field();
      } else {
        this.container.removeClass('chosen-disabled');
        this.search_field[0].disabled = false;
        if (!this.is_multiple) {
          return this.selected_item.bind("focus.chosen", this.activate_action);
        }
      }
    };

    Chosen.prototype.container_mousedown = function(evt) {
      if (!this.is_disabled) {
        if (evt && evt.type === "mousedown" && !this.results_showing) {
          evt.preventDefault();
        }
        if (!((evt != null) && ($(evt.target)).hasClass("search-choice-close"))) {
          if (!this.active_field) {
            if (this.is_multiple) {
              this.search_field.val("");
            }
            $(this.container[0].ownerDocument).bind('click.chosen', this.click_test_action);
            this.results_show();
          } else if (!this.is_multiple && evt && (($(evt.target)[0] === this.selected_item[0]) || $(evt.target).parents("a.chosen-single").length)) {
            evt.preventDefault();
            this.results_toggle();
          }
          return this.activate_field();
        }
      }
    };

    Chosen.prototype.container_mouseup = function(evt) {
      if (evt.target.nodeName === "ABBR" && !this.is_disabled) {
        return this.results_reset(evt);
      }
    };

    Chosen.prototype.search_results_mousewheel = function(evt) {
      var delta;
      if (evt.originalEvent) {
        delta = evt.originalEvent.deltaY || -evt.originalEvent.wheelDelta || evt.originalEvent.detail;
      }
      if (delta != null) {
        evt.preventDefault();
        if (evt.type === 'DOMMouseScroll') {
          delta = delta * 40;
        }
        return this.search_results.scrollTop(delta + this.search_results.scrollTop());
      }
    };

    Chosen.prototype.blur_test = function(evt) {
      if (!this.active_field && this.container.hasClass("chosen-container-active")) {
        return this.close_field();
      }
    };

    Chosen.prototype.close_field = function() {
      $(this.container[0].ownerDocument).unbind("click.chosen", this.click_test_action);
      this.active_field = false;
      this.results_hide();
      this.container.removeClass("chosen-container-active");
      this.clear_backstroke();
      this.show_search_field_default();
      return this.search_field_scale();
    };

    Chosen.prototype.activate_field = function() {
      this.container.addClass("chosen-container-active");
      this.active_field = true;
      this.search_field.val(this.search_field.val());
      return this.search_field.focus();
    };

    Chosen.prototype.test_active_click = function(evt) {
      var active_container;
      active_container = $(evt.target).closest('.chosen-container');
      if (active_container.length && this.container[0] === active_container[0]) {
        return this.active_field = true;
      } else {
        return this.close_field();
      }
    };

    Chosen.prototype.results_build = function() {
      this.parsing = true;
      this.selected_option_count = null;
      this.results_data = SelectParser.select_to_array(this.form_field);
      if (this.is_multiple) {
        this.search_choices.find("li.search-choice").remove();
      } else if (!this.is_multiple) {
        this.single_set_selected_text();
        if (this.disable_search || this.form_field.options.length <= this.disable_search_threshold) {
          this.search_field[0].readOnly = true;
          this.container.addClass("chosen-container-single-nosearch");
        } else {
          this.search_field[0].readOnly = false;
          this.container.removeClass("chosen-container-single-nosearch");
        }
      }
      this.update_results_content(this.results_option_build({
        first: true
      }));
      this.search_field_disabled();
      this.show_search_field_default();
      this.search_field_scale();
      return this.parsing = false;
    };

    Chosen.prototype.result_do_highlight = function(el) {
      var high_bottom, high_top, maxHeight, visible_bottom, visible_top;
      if (el.length) {
        this.result_clear_highlight();
        this.result_highlight = el;
        this.result_highlight.addClass("highlighted");
        maxHeight = parseInt(this.search_results.css("maxHeight"), 10);
        visible_top = this.search_results.scrollTop();
        visible_bottom = maxHeight + visible_top;
        high_top = this.result_highlight.position().top + this.search_results.scrollTop();
        high_bottom = high_top + this.result_highlight.outerHeight();
        if (high_bottom >= visible_bottom) {
          return this.search_results.scrollTop((high_bottom - maxHeight) > 0 ? high_bottom - maxHeight : 0);
        } else if (high_top < visible_top) {
          return this.search_results.scrollTop(high_top);
        }
      }
    };

    Chosen.prototype.result_clear_highlight = function() {
      if (this.result_highlight) {
        this.result_highlight.removeClass("highlighted");
      }
      return this.result_highlight = null;
    };

    Chosen.prototype.results_show = function() {
      if (this.is_multiple && this.max_selected_options <= this.choices_count()) {
        this.form_field_jq.trigger("chosen:maxselected", {
          chosen: this
        });
        return false;
      }
      this.container.addClass("chosen-with-drop");
      this.results_showing = true;
      this.search_field.focus();
      this.search_field.val(this.search_field.val());
      this.winnow_results();
      return this.form_field_jq.trigger("chosen:showing_dropdown", {
        chosen: this
      });
    };

    Chosen.prototype.update_results_content = function(content) {
      return this.search_results.html(content);
    };

    Chosen.prototype.results_hide = function() {
      if (this.results_showing) {
        this.result_clear_highlight();
        this.container.removeClass("chosen-with-drop");
        this.form_field_jq.trigger("chosen:hiding_dropdown", {
          chosen: this
        });
      }
      return this.results_showing = false;
    };

    Chosen.prototype.set_tab_index = function(el) {
      var ti;
      if (this.form_field.tabIndex) {
        ti = this.form_field.tabIndex;
        this.form_field.tabIndex = -1;
        return this.search_field[0].tabIndex = ti;
      }
    };

    Chosen.prototype.set_label_behavior = function() {
      var _this = this;
      this.form_field_label = this.form_field_jq.parents("label");
      if (!this.form_field_label.length && this.form_field.id.length) {
        this.form_field_label = $("label[for='" + this.form_field.id + "']");
      }
      if (this.form_field_label.length > 0) {
        return this.form_field_label.bind('click.chosen', function(evt) {
          if (_this.is_multiple) {
            return _this.container_mousedown(evt);
          } else {
            return _this.activate_field();
          }
        });
      }
    };

    Chosen.prototype.show_search_field_default = function() {
      if (this.is_multiple && this.choices_count() < 1 && !this.active_field) {
        this.search_field.val(this.default_text);
        return this.search_field.addClass("default");
      } else {
        this.search_field.val("");
        return this.search_field.removeClass("default");
      }
    };

    Chosen.prototype.search_results_mouseup = function(evt) {
      var target;
      target = $(evt.target).hasClass("active-result") ? $(evt.target) : $(evt.target).parents(".active-result").first();
      if (target.length) {
        this.result_highlight = target;
        this.result_select(evt);
        return this.search_field.focus();
      }
    };

    Chosen.prototype.search_results_mouseover = function(evt) {
      var target;
      target = $(evt.target).hasClass("active-result") ? $(evt.target) : $(evt.target).parents(".active-result").first();
      if (target) {
        return this.result_do_highlight(target);
      }
    };

    Chosen.prototype.search_results_mouseout = function(evt) {
      if ($(evt.target).hasClass("active-result" || $(evt.target).parents('.active-result').first())) {
        return this.result_clear_highlight();
      }
    };

    Chosen.prototype.choice_build = function(item) {
      var choice, close_link,
        _this = this;
      choice = $('<li />', {
        "class": "search-choice"
      }).html("<span>" + (this.choice_label(item)) + "</span>");
      if (item.disabled) {
        choice.addClass('search-choice-disabled');
      } else {
        close_link = $('<a />', {
          "class": 'search-choice-close',
          'data-option-array-index': item.array_index
        });
        close_link.bind('click.chosen', function(evt) {
          return _this.choice_destroy_link_click(evt);
        });
        choice.append(close_link);
      }
      return this.search_container.before(choice);
    };

    Chosen.prototype.choice_destroy_link_click = function(evt) {
      evt.preventDefault();
      evt.stopPropagation();
      if (!this.is_disabled) {
        return this.choice_destroy($(evt.target));
      }
    };

    Chosen.prototype.choice_destroy = function(link) {
      if (this.result_deselect(link[0].getAttribute("data-option-array-index"))) {
        this.show_search_field_default();
        if (this.is_multiple && this.choices_count() > 0 && this.search_field.val().length < 1) {
          this.results_hide();
        }
        link.parents('li').first().remove();
        return this.search_field_scale();
      }
    };

    Chosen.prototype.results_reset = function() {
      this.reset_single_select_options();
      this.form_field.options[0].selected = true;
      this.single_set_selected_text();
      this.show_search_field_default();
      this.results_reset_cleanup();
      this.form_field_jq.trigger("change");
      if (this.active_field) {
        return this.results_hide();
      }
    };

    Chosen.prototype.results_reset_cleanup = function() {
      this.current_selectedIndex = this.form_field.selectedIndex;
      return this.selected_item.find("abbr").remove();
    };

    Chosen.prototype.result_select = function(evt) {
      var high, item;
      if (this.result_highlight) {
        high = this.result_highlight;
        this.result_clear_highlight();
        if (this.is_multiple && this.max_selected_options <= this.choices_count()) {
          this.form_field_jq.trigger("chosen:maxselected", {
            chosen: this
          });
          return false;
        }
        if (this.is_multiple) {
          high.removeClass("active-result");
        } else {
          this.reset_single_select_options();
        }
        high.addClass("result-selected");
        item = this.results_data[high[0].getAttribute("data-option-array-index")];
        item.selected = true;
        this.form_field.options[item.options_index].selected = true;
        this.selected_option_count = null;
        if (this.is_multiple) {
          this.choice_build(item);
        } else {
          this.single_set_selected_text(this.choice_label(item));
        }
        if (!((evt.metaKey || evt.ctrlKey) && this.is_multiple)) {
          this.results_hide();
        }
        this.show_search_field_default();
        if (this.is_multiple || this.form_field.selectedIndex !== this.current_selectedIndex) {
          this.form_field_jq.trigger("change", {
            'selected': this.form_field.options[item.options_index].value
          });
        }
        this.current_selectedIndex = this.form_field.selectedIndex;
        evt.preventDefault();
        return this.search_field_scale();
      }
    };

    Chosen.prototype.single_set_selected_text = function(text) {
      if (text == null) {
        text = this.default_text;
      }
      if (text === this.default_text) {
        this.selected_item.addClass("chosen-default");
      } else {
        this.single_deselect_control_build();
        this.selected_item.removeClass("chosen-default");
      }
      return this.selected_item.find("span").html(text);
    };

    Chosen.prototype.result_deselect = function(pos) {
      var result_data;
      result_data = this.results_data[pos];
      if (!this.form_field.options[result_data.options_index].disabled) {
        result_data.selected = false;
        this.form_field.options[result_data.options_index].selected = false;
        this.selected_option_count = null;
        this.result_clear_highlight();
        if (this.results_showing) {
          this.winnow_results();
        }
        this.form_field_jq.trigger("change", {
          deselected: this.form_field.options[result_data.options_index].value
        });
        this.search_field_scale();
        return true;
      } else {
        return false;
      }
    };

    Chosen.prototype.single_deselect_control_build = function() {
      if (!this.allow_single_deselect) {
        return;
      }
      if (!this.selected_item.find("abbr").length) {
        this.selected_item.find("span").first().after("<abbr class=\"search-choice-close\"></abbr>");
      }
      return this.selected_item.addClass("chosen-single-with-deselect");
    };

    Chosen.prototype.get_search_text = function() {
      return $('<div/>').text($.trim(this.search_field.val())).html();
    };

    Chosen.prototype.winnow_results_set_highlight = function() {
      var do_high, selected_results;
      selected_results = !this.is_multiple ? this.search_results.find(".result-selected.active-result") : [];
      do_high = selected_results.length ? selected_results.first() : this.search_results.find(".active-result").first();
      if (do_high != null) {
        return this.result_do_highlight(do_high);
      }
    };

    Chosen.prototype.no_results = function(terms) {
      var no_results_html;
      no_results_html = $('<li class="no-results">' + this.results_none_found + ' "<span></span>"</li>');
      no_results_html.find("span").first().html(terms);
      this.search_results.append(no_results_html);
      return this.form_field_jq.trigger("chosen:no_results", {
        chosen: this
      });
    };

    Chosen.prototype.no_results_clear = function() {
      return this.search_results.find(".no-results").remove();
    };

    Chosen.prototype.keydown_arrow = function() {
      var next_sib;
      if (this.results_showing && this.result_highlight) {
        next_sib = this.result_highlight.nextAll("li.active-result").first();
        if (next_sib) {
          return this.result_do_highlight(next_sib);
        }
      } else {
        return this.results_show();
      }
    };

    Chosen.prototype.keyup_arrow = function() {
      var prev_sibs;
      if (!this.results_showing && !this.is_multiple) {
        return this.results_show();
      } else if (this.result_highlight) {
        prev_sibs = this.result_highlight.prevAll("li.active-result");
        if (prev_sibs.length) {
          return this.result_do_highlight(prev_sibs.first());
        } else {
          if (this.choices_count() > 0) {
            this.results_hide();
          }
          return this.result_clear_highlight();
        }
      }
    };

    Chosen.prototype.keydown_backstroke = function() {
      var next_available_destroy;
      if (this.pending_backstroke) {
        this.choice_destroy(this.pending_backstroke.find("a").first());
        return this.clear_backstroke();
      } else {
        next_available_destroy = this.search_container.siblings("li.search-choice").last();
        if (next_available_destroy.length && !next_available_destroy.hasClass("search-choice-disabled")) {
          this.pending_backstroke = next_available_destroy;
          if (this.single_backstroke_delete) {
            return this.keydown_backstroke();
          } else {
            return this.pending_backstroke.addClass("search-choice-focus");
          }
        }
      }
    };

    Chosen.prototype.clear_backstroke = function() {
      if (this.pending_backstroke) {
        this.pending_backstroke.removeClass("search-choice-focus");
      }
      return this.pending_backstroke = null;
    };

    Chosen.prototype.keydown_checker = function(evt) {
      var stroke, _ref1;
      stroke = (_ref1 = evt.which) != null ? _ref1 : evt.keyCode;
      this.search_field_scale();
      if (stroke !== 8 && this.pending_backstroke) {
        this.clear_backstroke();
      }
      switch (stroke) {
        case 8:
          this.backstroke_length = this.search_field.val().length;
          break;
        case 9:
          if (this.results_showing && !this.is_multiple) {
            this.result_select(evt);
          }
          this.mouse_on_container = false;
          break;
        case 13:
          if (this.results_showing) {
            evt.preventDefault();
          }
          break;
        case 32:
          if (this.disable_search) {
            evt.preventDefault();
          }
          break;
        case 38:
          evt.preventDefault();
          this.keyup_arrow();
          break;
        case 40:
          evt.preventDefault();
          this.keydown_arrow();
          break;
      }
    };

    Chosen.prototype.search_field_scale = function() {
      var div, f_width, h, style, style_block, styles, w, _i, _len;
      if (this.is_multiple) {
        h = 0;
        w = 0;
        style_block = "position:absolute; left: -1000px; top: -1000px; display:none;";
        styles = ['font-size', 'font-style', 'font-weight', 'font-family', 'line-height', 'text-transform', 'letter-spacing'];
        for (_i = 0, _len = styles.length; _i < _len; _i++) {
          style = styles[_i];
          style_block += style + ":" + this.search_field.css(style) + ";";
        }
        div = $('<div />', {
          'style': style_block
        });
        div.text(this.search_field.val());
        $('body').append(div);
        w = div.width() + 25;
        div.remove();
        f_width = this.container.outerWidth();
        if (w > f_width - 10) {
          w = f_width - 10;
        }
        return this.search_field.css({
          'width': w + 'px'
        });
      }
    };

    return Chosen;

  })(AbstractChosen);

}).call(this);

/*! jQuery UI - v1.12.1 - 2016-12-15
* http://jqueryui.com
* Includes: widget.js, data.js, scroll-parent.js, widgets/sortable.js, widgets/mouse.js
* Copyright jQuery Foundation and other contributors; Licensed MIT */

(function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define([ "jquery" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
}(function( $ ) {

$.ui = $.ui || {};

var version = $.ui.version = "1.12.1";


/*!
 * jQuery UI Widget 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Widget
//>>group: Core
//>>description: Provides a factory for creating stateful widgets with a common API.
//>>docs: http://api.jqueryui.com/jQuery.widget/
//>>demos: http://jqueryui.com/widget/



var widgetUuid = 0;
var widgetSlice = Array.prototype.slice;

$.cleanData = ( function( orig ) {
	return function( elems ) {
		var events, elem, i;
		for ( i = 0; ( elem = elems[ i ] ) != null; i++ ) {
			try {

				// Only trigger remove when necessary to save time
				events = $._data( elem, "events" );
				if ( events && events.remove ) {
					$( elem ).triggerHandler( "remove" );
				}

			// Http://bugs.jquery.com/ticket/8235
			} catch ( e ) {}
		}
		orig( elems );
	};
} )( $.cleanData );

$.widget = function( name, base, prototype ) {
	var existingConstructor, constructor, basePrototype;

	// ProxiedPrototype allows the provided prototype to remain unmodified
	// so that it can be used as a mixin for multiple widgets (#8876)
	var proxiedPrototype = {};

	var namespace = name.split( "." )[ 0 ];
	name = name.split( "." )[ 1 ];
	var fullName = namespace + "-" + name;

	if ( !prototype ) {
		prototype = base;
		base = $.Widget;
	}

	if ( $.isArray( prototype ) ) {
		prototype = $.extend.apply( null, [ {} ].concat( prototype ) );
	}

	// Create selector for plugin
	$.expr[ ":" ][ fullName.toLowerCase() ] = function( elem ) {
		return !!$.data( elem, fullName );
	};

	$[ namespace ] = $[ namespace ] || {};
	existingConstructor = $[ namespace ][ name ];
	constructor = $[ namespace ][ name ] = function( options, element ) {

		// Allow instantiation without "new" keyword
		if ( !this._createWidget ) {
			return new constructor( options, element );
		}

		// Allow instantiation without initializing for simple inheritance
		// must use "new" keyword (the code above always passes args)
		if ( arguments.length ) {
			this._createWidget( options, element );
		}
	};

	// Extend with the existing constructor to carry over any static properties
	$.extend( constructor, existingConstructor, {
		version: prototype.version,

		// Copy the object used to create the prototype in case we need to
		// redefine the widget later
		_proto: $.extend( {}, prototype ),

		// Track widgets that inherit from this widget in case this widget is
		// redefined after a widget inherits from it
		_childConstructors: []
	} );

	basePrototype = new base();

	// We need to make the options hash a property directly on the new instance
	// otherwise we'll modify the options hash on the prototype that we're
	// inheriting from
	basePrototype.options = $.widget.extend( {}, basePrototype.options );
	$.each( prototype, function( prop, value ) {
		if ( !$.isFunction( value ) ) {
			proxiedPrototype[ prop ] = value;
			return;
		}
		proxiedPrototype[ prop ] = ( function() {
			function _super() {
				return base.prototype[ prop ].apply( this, arguments );
			}

			function _superApply( args ) {
				return base.prototype[ prop ].apply( this, args );
			}

			return function() {
				var __super = this._super;
				var __superApply = this._superApply;
				var returnValue;

				this._super = _super;
				this._superApply = _superApply;

				returnValue = value.apply( this, arguments );

				this._super = __super;
				this._superApply = __superApply;

				return returnValue;
			};
		} )();
	} );
	constructor.prototype = $.widget.extend( basePrototype, {

		// TODO: remove support for widgetEventPrefix
		// always use the name + a colon as the prefix, e.g., draggable:start
		// don't prefix for widgets that aren't DOM-based
		widgetEventPrefix: existingConstructor ? ( basePrototype.widgetEventPrefix || name ) : name
	}, proxiedPrototype, {
		constructor: constructor,
		namespace: namespace,
		widgetName: name,
		widgetFullName: fullName
	} );

	// If this widget is being redefined then we need to find all widgets that
	// are inheriting from it and redefine all of them so that they inherit from
	// the new version of this widget. We're essentially trying to replace one
	// level in the prototype chain.
	if ( existingConstructor ) {
		$.each( existingConstructor._childConstructors, function( i, child ) {
			var childPrototype = child.prototype;

			// Redefine the child widget using the same prototype that was
			// originally used, but inherit from the new version of the base
			$.widget( childPrototype.namespace + "." + childPrototype.widgetName, constructor,
				child._proto );
		} );

		// Remove the list of existing child constructors from the old constructor
		// so the old child constructors can be garbage collected
		delete existingConstructor._childConstructors;
	} else {
		base._childConstructors.push( constructor );
	}

	$.widget.bridge( name, constructor );

	return constructor;
};

$.widget.extend = function( target ) {
	var input = widgetSlice.call( arguments, 1 );
	var inputIndex = 0;
	var inputLength = input.length;
	var key;
	var value;

	for ( ; inputIndex < inputLength; inputIndex++ ) {
		for ( key in input[ inputIndex ] ) {
			value = input[ inputIndex ][ key ];
			if ( input[ inputIndex ].hasOwnProperty( key ) && value !== undefined ) {

				// Clone objects
				if ( $.isPlainObject( value ) ) {
					target[ key ] = $.isPlainObject( target[ key ] ) ?
						$.widget.extend( {}, target[ key ], value ) :

						// Don't extend strings, arrays, etc. with objects
						$.widget.extend( {}, value );

				// Copy everything else by reference
				} else {
					target[ key ] = value;
				}
			}
		}
	}
	return target;
};

$.widget.bridge = function( name, object ) {
	var fullName = object.prototype.widgetFullName || name;
	$.fn[ name ] = function( options ) {
		var isMethodCall = typeof options === "string";
		var args = widgetSlice.call( arguments, 1 );
		var returnValue = this;

		if ( isMethodCall ) {

			// If this is an empty collection, we need to have the instance method
			// return undefined instead of the jQuery instance
			if ( !this.length && options === "instance" ) {
				returnValue = undefined;
			} else {
				this.each( function() {
					var methodValue;
					var instance = $.data( this, fullName );

					if ( options === "instance" ) {
						returnValue = instance;
						return false;
					}

					if ( !instance ) {
						return $.error( "cannot call methods on " + name +
							" prior to initialization; " +
							"attempted to call method '" + options + "'" );
					}

					if ( !$.isFunction( instance[ options ] ) || options.charAt( 0 ) === "_" ) {
						return $.error( "no such method '" + options + "' for " + name +
							" widget instance" );
					}

					methodValue = instance[ options ].apply( instance, args );

					if ( methodValue !== instance && methodValue !== undefined ) {
						returnValue = methodValue && methodValue.jquery ?
							returnValue.pushStack( methodValue.get() ) :
							methodValue;
						return false;
					}
				} );
			}
		} else {

			// Allow multiple hashes to be passed on init
			if ( args.length ) {
				options = $.widget.extend.apply( null, [ options ].concat( args ) );
			}

			this.each( function() {
				var instance = $.data( this, fullName );
				if ( instance ) {
					instance.option( options || {} );
					if ( instance._init ) {
						instance._init();
					}
				} else {
					$.data( this, fullName, new object( options, this ) );
				}
			} );
		}

		return returnValue;
	};
};

$.Widget = function( /* options, element */ ) {};
$.Widget._childConstructors = [];

$.Widget.prototype = {
	widgetName: "widget",
	widgetEventPrefix: "",
	defaultElement: "<div>",

	options: {
		classes: {},
		disabled: false,

		// Callbacks
		create: null
	},

	_createWidget: function( options, element ) {
		element = $( element || this.defaultElement || this )[ 0 ];
		this.element = $( element );
		this.uuid = widgetUuid++;
		this.eventNamespace = "." + this.widgetName + this.uuid;

		this.bindings = $();
		this.hoverable = $();
		this.focusable = $();
		this.classesElementLookup = {};

		if ( element !== this ) {
			$.data( element, this.widgetFullName, this );
			this._on( true, this.element, {
				remove: function( event ) {
					if ( event.target === element ) {
						this.destroy();
					}
				}
			} );
			this.document = $( element.style ?

				// Element within the document
				element.ownerDocument :

				// Element is window or document
				element.document || element );
			this.window = $( this.document[ 0 ].defaultView || this.document[ 0 ].parentWindow );
		}

		this.options = $.widget.extend( {},
			this.options,
			this._getCreateOptions(),
			options );

		this._create();

		if ( this.options.disabled ) {
			this._setOptionDisabled( this.options.disabled );
		}

		this._trigger( "create", null, this._getCreateEventData() );
		this._init();
	},

	_getCreateOptions: function() {
		return {};
	},

	_getCreateEventData: $.noop,

	_create: $.noop,

	_init: $.noop,

	destroy: function() {
		var that = this;

		this._destroy();
		$.each( this.classesElementLookup, function( key, value ) {
			that._removeClass( value, key );
		} );

		// We can probably remove the unbind calls in 2.0
		// all event bindings should go through this._on()
		this.element
			.off( this.eventNamespace )
			.removeData( this.widgetFullName );
		this.widget()
			.off( this.eventNamespace )
			.removeAttr( "aria-disabled" );

		// Clean up events and states
		this.bindings.off( this.eventNamespace );
	},

	_destroy: $.noop,

	widget: function() {
		return this.element;
	},

	option: function( key, value ) {
		var options = key;
		var parts;
		var curOption;
		var i;

		if ( arguments.length === 0 ) {

			// Don't return a reference to the internal hash
			return $.widget.extend( {}, this.options );
		}

		if ( typeof key === "string" ) {

			// Handle nested keys, e.g., "foo.bar" => { foo: { bar: ___ } }
			options = {};
			parts = key.split( "." );
			key = parts.shift();
			if ( parts.length ) {
				curOption = options[ key ] = $.widget.extend( {}, this.options[ key ] );
				for ( i = 0; i < parts.length - 1; i++ ) {
					curOption[ parts[ i ] ] = curOption[ parts[ i ] ] || {};
					curOption = curOption[ parts[ i ] ];
				}
				key = parts.pop();
				if ( arguments.length === 1 ) {
					return curOption[ key ] === undefined ? null : curOption[ key ];
				}
				curOption[ key ] = value;
			} else {
				if ( arguments.length === 1 ) {
					return this.options[ key ] === undefined ? null : this.options[ key ];
				}
				options[ key ] = value;
			}
		}

		this._setOptions( options );

		return this;
	},

	_setOptions: function( options ) {
		var key;

		for ( key in options ) {
			this._setOption( key, options[ key ] );
		}

		return this;
	},

	_setOption: function( key, value ) {
		if ( key === "classes" ) {
			this._setOptionClasses( value );
		}

		this.options[ key ] = value;

		if ( key === "disabled" ) {
			this._setOptionDisabled( value );
		}

		return this;
	},

	_setOptionClasses: function( value ) {
		var classKey, elements, currentElements;

		for ( classKey in value ) {
			currentElements = this.classesElementLookup[ classKey ];
			if ( value[ classKey ] === this.options.classes[ classKey ] ||
					!currentElements ||
					!currentElements.length ) {
				continue;
			}

			// We are doing this to create a new jQuery object because the _removeClass() call
			// on the next line is going to destroy the reference to the current elements being
			// tracked. We need to save a copy of this collection so that we can add the new classes
			// below.
			elements = $( currentElements.get() );
			this._removeClass( currentElements, classKey );

			// We don't use _addClass() here, because that uses this.options.classes
			// for generating the string of classes. We want to use the value passed in from
			// _setOption(), this is the new value of the classes option which was passed to
			// _setOption(). We pass this value directly to _classes().
			elements.addClass( this._classes( {
				element: elements,
				keys: classKey,
				classes: value,
				add: true
			} ) );
		}
	},

	_setOptionDisabled: function( value ) {
		this._toggleClass( this.widget(), this.widgetFullName + "-disabled", null, !!value );

		// If the widget is becoming disabled, then nothing is interactive
		if ( value ) {
			this._removeClass( this.hoverable, null, "ui-state-hover" );
			this._removeClass( this.focusable, null, "ui-state-focus" );
		}
	},

	enable: function() {
		return this._setOptions( { disabled: false } );
	},

	disable: function() {
		return this._setOptions( { disabled: true } );
	},

	_classes: function( options ) {
		var full = [];
		var that = this;

		options = $.extend( {
			element: this.element,
			classes: this.options.classes || {}
		}, options );

		function processClassString( classes, checkOption ) {
			var current, i;
			for ( i = 0; i < classes.length; i++ ) {
				current = that.classesElementLookup[ classes[ i ] ] || $();
				if ( options.add ) {
					current = $( $.unique( current.get().concat( options.element.get() ) ) );
				} else {
					current = $( current.not( options.element ).get() );
				}
				that.classesElementLookup[ classes[ i ] ] = current;
				full.push( classes[ i ] );
				if ( checkOption && options.classes[ classes[ i ] ] ) {
					full.push( options.classes[ classes[ i ] ] );
				}
			}
		}

		this._on( options.element, {
			"remove": "_untrackClassesElement"
		} );

		if ( options.keys ) {
			processClassString( options.keys.match( /\S+/g ) || [], true );
		}
		if ( options.extra ) {
			processClassString( options.extra.match( /\S+/g ) || [] );
		}

		return full.join( " " );
	},

	_untrackClassesElement: function( event ) {
		var that = this;
		$.each( that.classesElementLookup, function( key, value ) {
			if ( $.inArray( event.target, value ) !== -1 ) {
				that.classesElementLookup[ key ] = $( value.not( event.target ).get() );
			}
		} );
	},

	_removeClass: function( element, keys, extra ) {
		return this._toggleClass( element, keys, extra, false );
	},

	_addClass: function( element, keys, extra ) {
		return this._toggleClass( element, keys, extra, true );
	},

	_toggleClass: function( element, keys, extra, add ) {
		add = ( typeof add === "boolean" ) ? add : extra;
		var shift = ( typeof element === "string" || element === null ),
			options = {
				extra: shift ? keys : extra,
				keys: shift ? element : keys,
				element: shift ? this.element : element,
				add: add
			};
		options.element.toggleClass( this._classes( options ), add );
		return this;
	},

	_on: function( suppressDisabledCheck, element, handlers ) {
		var delegateElement;
		var instance = this;

		// No suppressDisabledCheck flag, shuffle arguments
		if ( typeof suppressDisabledCheck !== "boolean" ) {
			handlers = element;
			element = suppressDisabledCheck;
			suppressDisabledCheck = false;
		}

		// No element argument, shuffle and use this.element
		if ( !handlers ) {
			handlers = element;
			element = this.element;
			delegateElement = this.widget();
		} else {
			element = delegateElement = $( element );
			this.bindings = this.bindings.add( element );
		}

		$.each( handlers, function( event, handler ) {
			function handlerProxy() {

				// Allow widgets to customize the disabled handling
				// - disabled as an array instead of boolean
				// - disabled class as method for disabling individual parts
				if ( !suppressDisabledCheck &&
						( instance.options.disabled === true ||
						$( this ).hasClass( "ui-state-disabled" ) ) ) {
					return;
				}
				return ( typeof handler === "string" ? instance[ handler ] : handler )
					.apply( instance, arguments );
			}

			// Copy the guid so direct unbinding works
			if ( typeof handler !== "string" ) {
				handlerProxy.guid = handler.guid =
					handler.guid || handlerProxy.guid || $.guid++;
			}

			var match = event.match( /^([\w:-]*)\s*(.*)$/ );
			var eventName = match[ 1 ] + instance.eventNamespace;
			var selector = match[ 2 ];

			if ( selector ) {
				delegateElement.on( eventName, selector, handlerProxy );
			} else {
				element.on( eventName, handlerProxy );
			}
		} );
	},

	_off: function( element, eventName ) {
		eventName = ( eventName || "" ).split( " " ).join( this.eventNamespace + " " ) +
			this.eventNamespace;
		element.off( eventName ).off( eventName );

		// Clear the stack to avoid memory leaks (#10056)
		this.bindings = $( this.bindings.not( element ).get() );
		this.focusable = $( this.focusable.not( element ).get() );
		this.hoverable = $( this.hoverable.not( element ).get() );
	},

	_delay: function( handler, delay ) {
		function handlerProxy() {
			return ( typeof handler === "string" ? instance[ handler ] : handler )
				.apply( instance, arguments );
		}
		var instance = this;
		return setTimeout( handlerProxy, delay || 0 );
	},

	_hoverable: function( element ) {
		this.hoverable = this.hoverable.add( element );
		this._on( element, {
			mouseenter: function( event ) {
				this._addClass( $( event.currentTarget ), null, "ui-state-hover" );
			},
			mouseleave: function( event ) {
				this._removeClass( $( event.currentTarget ), null, "ui-state-hover" );
			}
		} );
	},

	_focusable: function( element ) {
		this.focusable = this.focusable.add( element );
		this._on( element, {
			focusin: function( event ) {
				this._addClass( $( event.currentTarget ), null, "ui-state-focus" );
			},
			focusout: function( event ) {
				this._removeClass( $( event.currentTarget ), null, "ui-state-focus" );
			}
		} );
	},

	_trigger: function( type, event, data ) {
		var prop, orig;
		var callback = this.options[ type ];

		data = data || {};
		event = $.Event( event );
		event.type = ( type === this.widgetEventPrefix ?
			type :
			this.widgetEventPrefix + type ).toLowerCase();

		// The original event may come from any element
		// so we need to reset the target on the new event
		event.target = this.element[ 0 ];

		// Copy original event properties over to the new event
		orig = event.originalEvent;
		if ( orig ) {
			for ( prop in orig ) {
				if ( !( prop in event ) ) {
					event[ prop ] = orig[ prop ];
				}
			}
		}

		this.element.trigger( event, data );
		return !( $.isFunction( callback ) &&
			callback.apply( this.element[ 0 ], [ event ].concat( data ) ) === false ||
			event.isDefaultPrevented() );
	}
};

$.each( { show: "fadeIn", hide: "fadeOut" }, function( method, defaultEffect ) {
	$.Widget.prototype[ "_" + method ] = function( element, options, callback ) {
		if ( typeof options === "string" ) {
			options = { effect: options };
		}

		var hasOptions;
		var effectName = !options ?
			method :
			options === true || typeof options === "number" ?
				defaultEffect :
				options.effect || defaultEffect;

		options = options || {};
		if ( typeof options === "number" ) {
			options = { duration: options };
		}

		hasOptions = !$.isEmptyObject( options );
		options.complete = callback;

		if ( options.delay ) {
			element.delay( options.delay );
		}

		if ( hasOptions && $.effects && $.effects.effect[ effectName ] ) {
			element[ method ]( options );
		} else if ( effectName !== method && element[ effectName ] ) {
			element[ effectName ]( options.duration, options.easing, callback );
		} else {
			element.queue( function( next ) {
				$( this )[ method ]();
				if ( callback ) {
					callback.call( element[ 0 ] );
				}
				next();
			} );
		}
	};
} );

var widget = $.widget;


/*!
 * jQuery UI :data 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: :data Selector
//>>group: Core
//>>description: Selects elements which have data stored under the specified key.
//>>docs: http://api.jqueryui.com/data-selector/


var data = $.extend( $.expr[ ":" ], {
	data: $.expr.createPseudo ?
		$.expr.createPseudo( function( dataName ) {
			return function( elem ) {
				return !!$.data( elem, dataName );
			};
		} ) :

		// Support: jQuery <1.8
		function( elem, i, match ) {
			return !!$.data( elem, match[ 3 ] );
		}
} );

/*!
 * jQuery UI Scroll Parent 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: scrollParent
//>>group: Core
//>>description: Get the closest ancestor element that is scrollable.
//>>docs: http://api.jqueryui.com/scrollParent/



var scrollParent = $.fn.scrollParent = function( includeHidden ) {
	var position = this.css( "position" ),
		excludeStaticParent = position === "absolute",
		overflowRegex = includeHidden ? /(auto|scroll|hidden)/ : /(auto|scroll)/,
		scrollParent = this.parents().filter( function() {
			var parent = $( this );
			if ( excludeStaticParent && parent.css( "position" ) === "static" ) {
				return false;
			}
			return overflowRegex.test( parent.css( "overflow" ) + parent.css( "overflow-y" ) +
				parent.css( "overflow-x" ) );
		} ).eq( 0 );

	return position === "fixed" || !scrollParent.length ?
		$( this[ 0 ].ownerDocument || document ) :
		scrollParent;
};




// This file is deprecated
var ie = $.ui.ie = !!/msie [\w.]+/.exec( navigator.userAgent.toLowerCase() );

/*!
 * jQuery UI Mouse 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Mouse
//>>group: Widgets
//>>description: Abstracts mouse-based interactions to assist in creating certain widgets.
//>>docs: http://api.jqueryui.com/mouse/



var mouseHandled = false;
$( document ).on( "mouseup", function() {
	mouseHandled = false;
} );

var widgetsMouse = $.widget( "ui.mouse", {
	version: "1.12.1",
	options: {
		cancel: "input, textarea, button, select, option",
		distance: 1,
		delay: 0
	},
	_mouseInit: function() {
		var that = this;

		this.element
			.on( "mousedown." + this.widgetName, function( event ) {
				return that._mouseDown( event );
			} )
			.on( "click." + this.widgetName, function( event ) {
				if ( true === $.data( event.target, that.widgetName + ".preventClickEvent" ) ) {
					$.removeData( event.target, that.widgetName + ".preventClickEvent" );
					event.stopImmediatePropagation();
					return false;
				}
			} );

		this.started = false;
	},

	// TODO: make sure destroying one instance of mouse doesn't mess with
	// other instances of mouse
	_mouseDestroy: function() {
		this.element.off( "." + this.widgetName );
		if ( this._mouseMoveDelegate ) {
			this.document
				.off( "mousemove." + this.widgetName, this._mouseMoveDelegate )
				.off( "mouseup." + this.widgetName, this._mouseUpDelegate );
		}
	},

	_mouseDown: function( event ) {

		// don't let more than one widget handle mouseStart
		if ( mouseHandled ) {
			return;
		}

		this._mouseMoved = false;

		// We may have missed mouseup (out of window)
		( this._mouseStarted && this._mouseUp( event ) );

		this._mouseDownEvent = event;

		var that = this,
			btnIsLeft = ( event.which === 1 ),

			// event.target.nodeName works around a bug in IE 8 with
			// disabled inputs (#7620)
			elIsCancel = ( typeof this.options.cancel === "string" && event.target.nodeName ?
				$( event.target ).closest( this.options.cancel ).length : false );
		if ( !btnIsLeft || elIsCancel || !this._mouseCapture( event ) ) {
			return true;
		}

		this.mouseDelayMet = !this.options.delay;
		if ( !this.mouseDelayMet ) {
			this._mouseDelayTimer = setTimeout( function() {
				that.mouseDelayMet = true;
			}, this.options.delay );
		}

		if ( this._mouseDistanceMet( event ) && this._mouseDelayMet( event ) ) {
			this._mouseStarted = ( this._mouseStart( event ) !== false );
			if ( !this._mouseStarted ) {
				event.preventDefault();
				return true;
			}
		}

		// Click event may never have fired (Gecko & Opera)
		if ( true === $.data( event.target, this.widgetName + ".preventClickEvent" ) ) {
			$.removeData( event.target, this.widgetName + ".preventClickEvent" );
		}

		// These delegates are required to keep context
		this._mouseMoveDelegate = function( event ) {
			return that._mouseMove( event );
		};
		this._mouseUpDelegate = function( event ) {
			return that._mouseUp( event );
		};

		this.document
			.on( "mousemove." + this.widgetName, this._mouseMoveDelegate )
			.on( "mouseup." + this.widgetName, this._mouseUpDelegate );

		event.preventDefault();

		mouseHandled = true;
		return true;
	},

	_mouseMove: function( event ) {

		// Only check for mouseups outside the document if you've moved inside the document
		// at least once. This prevents the firing of mouseup in the case of IE<9, which will
		// fire a mousemove event if content is placed under the cursor. See #7778
		// Support: IE <9
		if ( this._mouseMoved ) {

			// IE mouseup check - mouseup happened when mouse was out of window
			if ( $.ui.ie && ( !document.documentMode || document.documentMode < 9 ) &&
					!event.button ) {
				return this._mouseUp( event );

			// Iframe mouseup check - mouseup occurred in another document
			} else if ( !event.which ) {

				// Support: Safari <=8 - 9
				// Safari sets which to 0 if you press any of the following keys
				// during a drag (#14461)
				if ( event.originalEvent.altKey || event.originalEvent.ctrlKey ||
						event.originalEvent.metaKey || event.originalEvent.shiftKey ) {
					this.ignoreMissingWhich = true;
				} else if ( !this.ignoreMissingWhich ) {
					return this._mouseUp( event );
				}
			}
		}

		if ( event.which || event.button ) {
			this._mouseMoved = true;
		}

		if ( this._mouseStarted ) {
			this._mouseDrag( event );
			return event.preventDefault();
		}

		if ( this._mouseDistanceMet( event ) && this._mouseDelayMet( event ) ) {
			this._mouseStarted =
				( this._mouseStart( this._mouseDownEvent, event ) !== false );
			( this._mouseStarted ? this._mouseDrag( event ) : this._mouseUp( event ) );
		}

		return !this._mouseStarted;
	},

	_mouseUp: function( event ) {
		this.document
			.off( "mousemove." + this.widgetName, this._mouseMoveDelegate )
			.off( "mouseup." + this.widgetName, this._mouseUpDelegate );

		if ( this._mouseStarted ) {
			this._mouseStarted = false;

			if ( event.target === this._mouseDownEvent.target ) {
				$.data( event.target, this.widgetName + ".preventClickEvent", true );
			}

			this._mouseStop( event );
		}

		if ( this._mouseDelayTimer ) {
			clearTimeout( this._mouseDelayTimer );
			delete this._mouseDelayTimer;
		}

		this.ignoreMissingWhich = false;
		mouseHandled = false;
		event.preventDefault();
	},

	_mouseDistanceMet: function( event ) {
		return ( Math.max(
				Math.abs( this._mouseDownEvent.pageX - event.pageX ),
				Math.abs( this._mouseDownEvent.pageY - event.pageY )
			) >= this.options.distance
		);
	},

	_mouseDelayMet: function( /* event */ ) {
		return this.mouseDelayMet;
	},

	// These are placeholder methods, to be overriden by extending plugin
	_mouseStart: function( /* event */ ) {},
	_mouseDrag: function( /* event */ ) {},
	_mouseStop: function( /* event */ ) {},
	_mouseCapture: function( /* event */ ) { return true; }
} );


/*!
 * jQuery UI Sortable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Sortable
//>>group: Interactions
//>>description: Enables items in a list to be sorted using the mouse.
//>>docs: http://api.jqueryui.com/sortable/
//>>demos: http://jqueryui.com/sortable/
//>>css.structure: ../../themes/base/sortable.css



var widgetsSortable = $.widget( "ui.sortable", $.ui.mouse, {
	version: "1.12.1",
	widgetEventPrefix: "sort",
	ready: false,
	options: {
		appendTo: "parent",
		axis: false,
		connectWith: false,
		containment: false,
		cursor: "auto",
		cursorAt: false,
		dropOnEmpty: true,
		forcePlaceholderSize: false,
		forceHelperSize: false,
		grid: false,
		handle: false,
		helper: "original",
		items: "> *",
		opacity: false,
		placeholder: false,
		revert: false,
		scroll: true,
		scrollSensitivity: 20,
		scrollSpeed: 20,
		scope: "default",
		tolerance: "intersect",
		zIndex: 1000,

		// Callbacks
		activate: null,
		beforeStop: null,
		change: null,
		deactivate: null,
		out: null,
		over: null,
		receive: null,
		remove: null,
		sort: null,
		start: null,
		stop: null,
		update: null
	},

	_isOverAxis: function( x, reference, size ) {
		return ( x >= reference ) && ( x < ( reference + size ) );
	},

	_isFloating: function( item ) {
		return ( /left|right/ ).test( item.css( "float" ) ) ||
			( /inline|table-cell/ ).test( item.css( "display" ) );
	},

	_create: function() {
		this.containerCache = {};
		this._addClass( "ui-sortable" );

		//Get the items
		this.refresh();

		//Let's determine the parent's offset
		this.offset = this.element.offset();

		//Initialize mouse events for interaction
		this._mouseInit();

		this._setHandleClassName();

		//We're ready to go
		this.ready = true;

	},

	_setOption: function( key, value ) {
		this._super( key, value );

		if ( key === "handle" ) {
			this._setHandleClassName();
		}
	},

	_setHandleClassName: function() {
		var that = this;
		this._removeClass( this.element.find( ".ui-sortable-handle" ), "ui-sortable-handle" );
		$.each( this.items, function() {
			that._addClass(
				this.instance.options.handle ?
					this.item.find( this.instance.options.handle ) :
					this.item,
				"ui-sortable-handle"
			);
		} );
	},

	_destroy: function() {
		this._mouseDestroy();

		for ( var i = this.items.length - 1; i >= 0; i-- ) {
			this.items[ i ].item.removeData( this.widgetName + "-item" );
		}

		return this;
	},

	_mouseCapture: function( event, overrideHandle ) {
		var currentItem = null,
			validHandle = false,
			that = this;

		if ( this.reverting ) {
			return false;
		}

		if ( this.options.disabled || this.options.type === "static" ) {
			return false;
		}

		//We have to refresh the items data once first
		this._refreshItems( event );

		//Find out if the clicked node (or one of its parents) is a actual item in this.items
		$( event.target ).parents().each( function() {
			if ( $.data( this, that.widgetName + "-item" ) === that ) {
				currentItem = $( this );
				return false;
			}
		} );
		if ( $.data( event.target, that.widgetName + "-item" ) === that ) {
			currentItem = $( event.target );
		}

		if ( !currentItem ) {
			return false;
		}
		if ( this.options.handle && !overrideHandle ) {
			$( this.options.handle, currentItem ).find( "*" ).addBack().each( function() {
				if ( this === event.target ) {
					validHandle = true;
				}
			} );
			if ( !validHandle ) {
				return false;
			}
		}

		this.currentItem = currentItem;
		this._removeCurrentsFromItems();
		return true;

	},

	_mouseStart: function( event, overrideHandle, noActivation ) {

		var i, body,
			o = this.options;

		this.currentContainer = this;

		//We only need to call refreshPositions, because the refreshItems call has been moved to
		// mouseCapture
		this.refreshPositions();

		//Create and append the visible helper
		this.helper = this._createHelper( event );

		//Cache the helper size
		this._cacheHelperProportions();

		/*
		 * - Position generation -
		 * This block generates everything position related - it's the core of draggables.
		 */

		//Cache the margins of the original element
		this._cacheMargins();

		//Get the next scrolling parent
		this.scrollParent = this.helper.scrollParent();

		//The element's absolute position on the page minus margins
		this.offset = this.currentItem.offset();
		this.offset = {
			top: this.offset.top - this.margins.top,
			left: this.offset.left - this.margins.left
		};

		$.extend( this.offset, {
			click: { //Where the click happened, relative to the element
				left: event.pageX - this.offset.left,
				top: event.pageY - this.offset.top
			},
			parent: this._getParentOffset(),

			// This is a relative to absolute position minus the actual position calculation -
			// only used for relative positioned helper
			relative: this._getRelativeOffset()
		} );

		// Only after we got the offset, we can change the helper's position to absolute
		// TODO: Still need to figure out a way to make relative sorting possible
		this.helper.css( "position", "absolute" );
		this.cssPosition = this.helper.css( "position" );

		//Generate the original position
		this.originalPosition = this._generatePosition( event );
		this.originalPageX = event.pageX;
		this.originalPageY = event.pageY;

		//Adjust the mouse offset relative to the helper if "cursorAt" is supplied
		( o.cursorAt && this._adjustOffsetFromHelper( o.cursorAt ) );

		//Cache the former DOM position
		this.domPosition = {
			prev: this.currentItem.prev()[ 0 ],
			parent: this.currentItem.parent()[ 0 ]
		};

		// If the helper is not the original, hide the original so it's not playing any role during
		// the drag, won't cause anything bad this way
		if ( this.helper[ 0 ] !== this.currentItem[ 0 ] ) {
			this.currentItem.hide();
		}

		//Create the placeholder
		this._createPlaceholder();

		//Set a containment if given in the options
		if ( o.containment ) {
			this._setContainment();
		}

		if ( o.cursor && o.cursor !== "auto" ) { // cursor option
			body = this.document.find( "body" );

			// Support: IE
			this.storedCursor = body.css( "cursor" );
			body.css( "cursor", o.cursor );

			this.storedStylesheet =
				$( "<style>*{ cursor: " + o.cursor + " !important; }</style>" ).appendTo( body );
		}

		if ( o.opacity ) { // opacity option
			if ( this.helper.css( "opacity" ) ) {
				this._storedOpacity = this.helper.css( "opacity" );
			}
			this.helper.css( "opacity", o.opacity );
		}

		if ( o.zIndex ) { // zIndex option
			if ( this.helper.css( "zIndex" ) ) {
				this._storedZIndex = this.helper.css( "zIndex" );
			}
			this.helper.css( "zIndex", o.zIndex );
		}

		//Prepare scrolling
		if ( this.scrollParent[ 0 ] !== this.document[ 0 ] &&
				this.scrollParent[ 0 ].tagName !== "HTML" ) {
			this.overflowOffset = this.scrollParent.offset();
		}

		//Call callbacks
		this._trigger( "start", event, this._uiHash() );

		//Recache the helper size
		if ( !this._preserveHelperProportions ) {
			this._cacheHelperProportions();
		}

		//Post "activate" events to possible containers
		if ( !noActivation ) {
			for ( i = this.containers.length - 1; i >= 0; i-- ) {
				this.containers[ i ]._trigger( "activate", event, this._uiHash( this ) );
			}
		}

		//Prepare possible droppables
		if ( $.ui.ddmanager ) {
			$.ui.ddmanager.current = this;
		}

		if ( $.ui.ddmanager && !o.dropBehaviour ) {
			$.ui.ddmanager.prepareOffsets( this, event );
		}

		this.dragging = true;

		this._addClass( this.helper, "ui-sortable-helper" );

		// Execute the drag once - this causes the helper not to be visiblebefore getting its
		// correct position
		this._mouseDrag( event );
		return true;

	},

	_mouseDrag: function( event ) {
		var i, item, itemElement, intersection,
			o = this.options,
			scrolled = false;

		//Compute the helpers position
		this.position = this._generatePosition( event );
		this.positionAbs = this._convertPositionTo( "absolute" );

		if ( !this.lastPositionAbs ) {
			this.lastPositionAbs = this.positionAbs;
		}

		//Do scrolling
		if ( this.options.scroll ) {
			if ( this.scrollParent[ 0 ] !== this.document[ 0 ] &&
					this.scrollParent[ 0 ].tagName !== "HTML" ) {

				if ( ( this.overflowOffset.top + this.scrollParent[ 0 ].offsetHeight ) -
						event.pageY < o.scrollSensitivity ) {
					this.scrollParent[ 0 ].scrollTop =
						scrolled = this.scrollParent[ 0 ].scrollTop + o.scrollSpeed;
				} else if ( event.pageY - this.overflowOffset.top < o.scrollSensitivity ) {
					this.scrollParent[ 0 ].scrollTop =
						scrolled = this.scrollParent[ 0 ].scrollTop - o.scrollSpeed;
				}

				if ( ( this.overflowOffset.left + this.scrollParent[ 0 ].offsetWidth ) -
						event.pageX < o.scrollSensitivity ) {
					this.scrollParent[ 0 ].scrollLeft = scrolled =
						this.scrollParent[ 0 ].scrollLeft + o.scrollSpeed;
				} else if ( event.pageX - this.overflowOffset.left < o.scrollSensitivity ) {
					this.scrollParent[ 0 ].scrollLeft = scrolled =
						this.scrollParent[ 0 ].scrollLeft - o.scrollSpeed;
				}

			} else {

				if ( event.pageY - this.document.scrollTop() < o.scrollSensitivity ) {
					scrolled = this.document.scrollTop( this.document.scrollTop() - o.scrollSpeed );
				} else if ( this.window.height() - ( event.pageY - this.document.scrollTop() ) <
						o.scrollSensitivity ) {
					scrolled = this.document.scrollTop( this.document.scrollTop() + o.scrollSpeed );
				}

				if ( event.pageX - this.document.scrollLeft() < o.scrollSensitivity ) {
					scrolled = this.document.scrollLeft(
						this.document.scrollLeft() - o.scrollSpeed
					);
				} else if ( this.window.width() - ( event.pageX - this.document.scrollLeft() ) <
						o.scrollSensitivity ) {
					scrolled = this.document.scrollLeft(
						this.document.scrollLeft() + o.scrollSpeed
					);
				}

			}

			if ( scrolled !== false && $.ui.ddmanager && !o.dropBehaviour ) {
				$.ui.ddmanager.prepareOffsets( this, event );
			}
		}

		//Regenerate the absolute position used for position checks
		this.positionAbs = this._convertPositionTo( "absolute" );

		//Set the helper position
		if ( !this.options.axis || this.options.axis !== "y" ) {
			this.helper[ 0 ].style.left = this.position.left + "px";
		}
		if ( !this.options.axis || this.options.axis !== "x" ) {
			this.helper[ 0 ].style.top = this.position.top + "px";
		}

		//Rearrange
		for ( i = this.items.length - 1; i >= 0; i-- ) {

			//Cache variables and intersection, continue if no intersection
			item = this.items[ i ];
			itemElement = item.item[ 0 ];
			intersection = this._intersectsWithPointer( item );
			if ( !intersection ) {
				continue;
			}

			// Only put the placeholder inside the current Container, skip all
			// items from other containers. This works because when moving
			// an item from one container to another the
			// currentContainer is switched before the placeholder is moved.
			//
			// Without this, moving items in "sub-sortables" can cause
			// the placeholder to jitter between the outer and inner container.
			if ( item.instance !== this.currentContainer ) {
				continue;
			}

			// Cannot intersect with itself
			// no useless actions that have been done before
			// no action if the item moved is the parent of the item checked
			if ( itemElement !== this.currentItem[ 0 ] &&
				this.placeholder[ intersection === 1 ? "next" : "prev" ]()[ 0 ] !== itemElement &&
				!$.contains( this.placeholder[ 0 ], itemElement ) &&
				( this.options.type === "semi-dynamic" ?
					!$.contains( this.element[ 0 ], itemElement ) :
					true
				)
			) {

				this.direction = intersection === 1 ? "down" : "up";

				if ( this.options.tolerance === "pointer" || this._intersectsWithSides( item ) ) {
					this._rearrange( event, item );
				} else {
					break;
				}

				this._trigger( "change", event, this._uiHash() );
				break;
			}
		}

		//Post events to containers
		this._contactContainers( event );

		//Interconnect with droppables
		if ( $.ui.ddmanager ) {
			$.ui.ddmanager.drag( this, event );
		}

		//Call callbacks
		this._trigger( "sort", event, this._uiHash() );

		this.lastPositionAbs = this.positionAbs;
		return false;

	},

	_mouseStop: function( event, noPropagation ) {

		if ( !event ) {
			return;
		}

		//If we are using droppables, inform the manager about the drop
		if ( $.ui.ddmanager && !this.options.dropBehaviour ) {
			$.ui.ddmanager.drop( this, event );
		}

		if ( this.options.revert ) {
			var that = this,
				cur = this.placeholder.offset(),
				axis = this.options.axis,
				animation = {};

			if ( !axis || axis === "x" ) {
				animation.left = cur.left - this.offset.parent.left - this.margins.left +
					( this.offsetParent[ 0 ] === this.document[ 0 ].body ?
						0 :
						this.offsetParent[ 0 ].scrollLeft
					);
			}
			if ( !axis || axis === "y" ) {
				animation.top = cur.top - this.offset.parent.top - this.margins.top +
					( this.offsetParent[ 0 ] === this.document[ 0 ].body ?
						0 :
						this.offsetParent[ 0 ].scrollTop
					);
			}
			this.reverting = true;
			$( this.helper ).animate(
				animation,
				parseInt( this.options.revert, 10 ) || 500,
				function() {
					that._clear( event );
				}
			);
		} else {
			this._clear( event, noPropagation );
		}

		return false;

	},

	cancel: function() {

		if ( this.dragging ) {

			this._mouseUp( new $.Event( "mouseup", { target: null } ) );

			if ( this.options.helper === "original" ) {
				this.currentItem.css( this._storedCSS );
				this._removeClass( this.currentItem, "ui-sortable-helper" );
			} else {
				this.currentItem.show();
			}

			//Post deactivating events to containers
			for ( var i = this.containers.length - 1; i >= 0; i-- ) {
				this.containers[ i ]._trigger( "deactivate", null, this._uiHash( this ) );
				if ( this.containers[ i ].containerCache.over ) {
					this.containers[ i ]._trigger( "out", null, this._uiHash( this ) );
					this.containers[ i ].containerCache.over = 0;
				}
			}

		}

		if ( this.placeholder ) {

			//$(this.placeholder[0]).remove(); would have been the jQuery way - unfortunately,
			// it unbinds ALL events from the original node!
			if ( this.placeholder[ 0 ].parentNode ) {
				this.placeholder[ 0 ].parentNode.removeChild( this.placeholder[ 0 ] );
			}
			if ( this.options.helper !== "original" && this.helper &&
					this.helper[ 0 ].parentNode ) {
				this.helper.remove();
			}

			$.extend( this, {
				helper: null,
				dragging: false,
				reverting: false,
				_noFinalSort: null
			} );

			if ( this.domPosition.prev ) {
				$( this.domPosition.prev ).after( this.currentItem );
			} else {
				$( this.domPosition.parent ).prepend( this.currentItem );
			}
		}

		return this;

	},

	serialize: function( o ) {

		var items = this._getItemsAsjQuery( o && o.connected ),
			str = [];
		o = o || {};

		$( items ).each( function() {
			var res = ( $( o.item || this ).attr( o.attribute || "id" ) || "" )
				.match( o.expression || ( /(.+)[\-=_](.+)/ ) );
			if ( res ) {
				str.push(
					( o.key || res[ 1 ] + "[]" ) +
					"=" + ( o.key && o.expression ? res[ 1 ] : res[ 2 ] ) );
			}
		} );

		if ( !str.length && o.key ) {
			str.push( o.key + "=" );
		}

		return str.join( "&" );

	},

	toArray: function( o ) {

		var items = this._getItemsAsjQuery( o && o.connected ),
			ret = [];

		o = o || {};

		items.each( function() {
			ret.push( $( o.item || this ).attr( o.attribute || "id" ) || "" );
		} );
		return ret;

	},

	/* Be careful with the following core functions */
	_intersectsWith: function( item ) {

		var x1 = this.positionAbs.left,
			x2 = x1 + this.helperProportions.width,
			y1 = this.positionAbs.top,
			y2 = y1 + this.helperProportions.height,
			l = item.left,
			r = l + item.width,
			t = item.top,
			b = t + item.height,
			dyClick = this.offset.click.top,
			dxClick = this.offset.click.left,
			isOverElementHeight = ( this.options.axis === "x" ) || ( ( y1 + dyClick ) > t &&
				( y1 + dyClick ) < b ),
			isOverElementWidth = ( this.options.axis === "y" ) || ( ( x1 + dxClick ) > l &&
				( x1 + dxClick ) < r ),
			isOverElement = isOverElementHeight && isOverElementWidth;

		if ( this.options.tolerance === "pointer" ||
			this.options.forcePointerForContainers ||
			( this.options.tolerance !== "pointer" &&
				this.helperProportions[ this.floating ? "width" : "height" ] >
				item[ this.floating ? "width" : "height" ] )
		) {
			return isOverElement;
		} else {

			return ( l < x1 + ( this.helperProportions.width / 2 ) && // Right Half
				x2 - ( this.helperProportions.width / 2 ) < r && // Left Half
				t < y1 + ( this.helperProportions.height / 2 ) && // Bottom Half
				y2 - ( this.helperProportions.height / 2 ) < b ); // Top Half

		}
	},

	_intersectsWithPointer: function( item ) {
		var verticalDirection, horizontalDirection,
			isOverElementHeight = ( this.options.axis === "x" ) ||
				this._isOverAxis(
					this.positionAbs.top + this.offset.click.top, item.top, item.height ),
			isOverElementWidth = ( this.options.axis === "y" ) ||
				this._isOverAxis(
					this.positionAbs.left + this.offset.click.left, item.left, item.width ),
			isOverElement = isOverElementHeight && isOverElementWidth;

		if ( !isOverElement ) {
			return false;
		}

		verticalDirection = this._getDragVerticalDirection();
		horizontalDirection = this._getDragHorizontalDirection();

		return this.floating ?
			( ( horizontalDirection === "right" || verticalDirection === "down" ) ? 2 : 1 )
			: ( verticalDirection && ( verticalDirection === "down" ? 2 : 1 ) );

	},

	_intersectsWithSides: function( item ) {

		var isOverBottomHalf = this._isOverAxis( this.positionAbs.top +
				this.offset.click.top, item.top + ( item.height / 2 ), item.height ),
			isOverRightHalf = this._isOverAxis( this.positionAbs.left +
				this.offset.click.left, item.left + ( item.width / 2 ), item.width ),
			verticalDirection = this._getDragVerticalDirection(),
			horizontalDirection = this._getDragHorizontalDirection();

		if ( this.floating && horizontalDirection ) {
			return ( ( horizontalDirection === "right" && isOverRightHalf ) ||
				( horizontalDirection === "left" && !isOverRightHalf ) );
		} else {
			return verticalDirection && ( ( verticalDirection === "down" && isOverBottomHalf ) ||
				( verticalDirection === "up" && !isOverBottomHalf ) );
		}

	},

	_getDragVerticalDirection: function() {
		var delta = this.positionAbs.top - this.lastPositionAbs.top;
		return delta !== 0 && ( delta > 0 ? "down" : "up" );
	},

	_getDragHorizontalDirection: function() {
		var delta = this.positionAbs.left - this.lastPositionAbs.left;
		return delta !== 0 && ( delta > 0 ? "right" : "left" );
	},

	refresh: function( event ) {
		this._refreshItems( event );
		this._setHandleClassName();
		this.refreshPositions();
		return this;
	},

	_connectWith: function() {
		var options = this.options;
		return options.connectWith.constructor === String ?
			[ options.connectWith ] :
			options.connectWith;
	},

	_getItemsAsjQuery: function( connected ) {

		var i, j, cur, inst,
			items = [],
			queries = [],
			connectWith = this._connectWith();

		if ( connectWith && connected ) {
			for ( i = connectWith.length - 1; i >= 0; i-- ) {
				cur = $( connectWith[ i ], this.document[ 0 ] );
				for ( j = cur.length - 1; j >= 0; j-- ) {
					inst = $.data( cur[ j ], this.widgetFullName );
					if ( inst && inst !== this && !inst.options.disabled ) {
						queries.push( [ $.isFunction( inst.options.items ) ?
							inst.options.items.call( inst.element ) :
							$( inst.options.items, inst.element )
								.not( ".ui-sortable-helper" )
								.not( ".ui-sortable-placeholder" ), inst ] );
					}
				}
			}
		}

		queries.push( [ $.isFunction( this.options.items ) ?
			this.options.items
				.call( this.element, null, { options: this.options, item: this.currentItem } ) :
			$( this.options.items, this.element )
				.not( ".ui-sortable-helper" )
				.not( ".ui-sortable-placeholder" ), this ] );

		function addItems() {
			items.push( this );
		}
		for ( i = queries.length - 1; i >= 0; i-- ) {
			queries[ i ][ 0 ].each( addItems );
		}

		return $( items );

	},

	_removeCurrentsFromItems: function() {

		var list = this.currentItem.find( ":data(" + this.widgetName + "-item)" );

		this.items = $.grep( this.items, function( item ) {
			for ( var j = 0; j < list.length; j++ ) {
				if ( list[ j ] === item.item[ 0 ] ) {
					return false;
				}
			}
			return true;
		} );

	},

	_refreshItems: function( event ) {

		this.items = [];
		this.containers = [ this ];

		var i, j, cur, inst, targetData, _queries, item, queriesLength,
			items = this.items,
			queries = [ [ $.isFunction( this.options.items ) ?
				this.options.items.call( this.element[ 0 ], event, { item: this.currentItem } ) :
				$( this.options.items, this.element ), this ] ],
			connectWith = this._connectWith();

		//Shouldn't be run the first time through due to massive slow-down
		if ( connectWith && this.ready ) {
			for ( i = connectWith.length - 1; i >= 0; i-- ) {
				cur = $( connectWith[ i ], this.document[ 0 ] );
				for ( j = cur.length - 1; j >= 0; j-- ) {
					inst = $.data( cur[ j ], this.widgetFullName );
					if ( inst && inst !== this && !inst.options.disabled ) {
						queries.push( [ $.isFunction( inst.options.items ) ?
							inst.options.items
								.call( inst.element[ 0 ], event, { item: this.currentItem } ) :
							$( inst.options.items, inst.element ), inst ] );
						this.containers.push( inst );
					}
				}
			}
		}

		for ( i = queries.length - 1; i >= 0; i-- ) {
			targetData = queries[ i ][ 1 ];
			_queries = queries[ i ][ 0 ];

			for ( j = 0, queriesLength = _queries.length; j < queriesLength; j++ ) {
				item = $( _queries[ j ] );

				// Data for target checking (mouse manager)
				item.data( this.widgetName + "-item", targetData );

				items.push( {
					item: item,
					instance: targetData,
					width: 0, height: 0,
					left: 0, top: 0
				} );
			}
		}

	},

	refreshPositions: function( fast ) {

		// Determine whether items are being displayed horizontally
		this.floating = this.items.length ?
			this.options.axis === "x" || this._isFloating( this.items[ 0 ].item ) :
			false;

		//This has to be redone because due to the item being moved out/into the offsetParent,
		// the offsetParent's position will change
		if ( this.offsetParent && this.helper ) {
			this.offset.parent = this._getParentOffset();
		}

		var i, item, t, p;

		for ( i = this.items.length - 1; i >= 0; i-- ) {
			item = this.items[ i ];

			//We ignore calculating positions of all connected containers when we're not over them
			if ( item.instance !== this.currentContainer && this.currentContainer &&
					item.item[ 0 ] !== this.currentItem[ 0 ] ) {
				continue;
			}

			t = this.options.toleranceElement ?
				$( this.options.toleranceElement, item.item ) :
				item.item;

			if ( !fast ) {
				item.width = t.outerWidth();
				item.height = t.outerHeight();
			}

			p = t.offset();
			item.left = p.left;
			item.top = p.top;
		}

		if ( this.options.custom && this.options.custom.refreshContainers ) {
			this.options.custom.refreshContainers.call( this );
		} else {
			for ( i = this.containers.length - 1; i >= 0; i-- ) {
				p = this.containers[ i ].element.offset();
				this.containers[ i ].containerCache.left = p.left;
				this.containers[ i ].containerCache.top = p.top;
				this.containers[ i ].containerCache.width =
					this.containers[ i ].element.outerWidth();
				this.containers[ i ].containerCache.height =
					this.containers[ i ].element.outerHeight();
			}
		}

		return this;
	},

	_createPlaceholder: function( that ) {
		that = that || this;
		var className,
			o = that.options;

		if ( !o.placeholder || o.placeholder.constructor === String ) {
			className = o.placeholder;
			o.placeholder = {
				element: function() {

					var nodeName = that.currentItem[ 0 ].nodeName.toLowerCase(),
						element = $( "<" + nodeName + ">", that.document[ 0 ] );

						that._addClass( element, "ui-sortable-placeholder",
								className || that.currentItem[ 0 ].className )
							._removeClass( element, "ui-sortable-helper" );

					if ( nodeName === "tbody" ) {
						that._createTrPlaceholder(
							that.currentItem.find( "tr" ).eq( 0 ),
							$( "<tr>", that.document[ 0 ] ).appendTo( element )
						);
					} else if ( nodeName === "tr" ) {
						that._createTrPlaceholder( that.currentItem, element );
					} else if ( nodeName === "img" ) {
						element.attr( "src", that.currentItem.attr( "src" ) );
					}

					if ( !className ) {
						element.css( "visibility", "hidden" );
					}

					return element;
				},
				update: function( container, p ) {

					// 1. If a className is set as 'placeholder option, we don't force sizes -
					// the class is responsible for that
					// 2. The option 'forcePlaceholderSize can be enabled to force it even if a
					// class name is specified
					if ( className && !o.forcePlaceholderSize ) {
						return;
					}

					//If the element doesn't have a actual height by itself (without styles coming
					// from a stylesheet), it receives the inline height from the dragged item
					if ( !p.height() ) {
						p.height(
							that.currentItem.innerHeight() -
							parseInt( that.currentItem.css( "paddingTop" ) || 0, 10 ) -
							parseInt( that.currentItem.css( "paddingBottom" ) || 0, 10 ) );
					}
					if ( !p.width() ) {
						p.width(
							that.currentItem.innerWidth() -
							parseInt( that.currentItem.css( "paddingLeft" ) || 0, 10 ) -
							parseInt( that.currentItem.css( "paddingRight" ) || 0, 10 ) );
					}
				}
			};
		}

		//Create the placeholder
		that.placeholder = $( o.placeholder.element.call( that.element, that.currentItem ) );

		//Append it after the actual current item
		that.currentItem.after( that.placeholder );

		//Update the size of the placeholder (TODO: Logic to fuzzy, see line 316/317)
		o.placeholder.update( that, that.placeholder );

	},

	_createTrPlaceholder: function( sourceTr, targetTr ) {
		var that = this;

		sourceTr.children().each( function() {
			$( "<td>&#160;</td>", that.document[ 0 ] )
				.attr( "colspan", $( this ).attr( "colspan" ) || 1 )
				.appendTo( targetTr );
		} );
	},

	_contactContainers: function( event ) {
		var i, j, dist, itemWithLeastDistance, posProperty, sizeProperty, cur, nearBottom,
			floating, axis,
			innermostContainer = null,
			innermostIndex = null;

		// Get innermost container that intersects with item
		for ( i = this.containers.length - 1; i >= 0; i-- ) {

			// Never consider a container that's located within the item itself
			if ( $.contains( this.currentItem[ 0 ], this.containers[ i ].element[ 0 ] ) ) {
				continue;
			}

			if ( this._intersectsWith( this.containers[ i ].containerCache ) ) {

				// If we've already found a container and it's more "inner" than this, then continue
				if ( innermostContainer &&
						$.contains(
							this.containers[ i ].element[ 0 ],
							innermostContainer.element[ 0 ] ) ) {
					continue;
				}

				innermostContainer = this.containers[ i ];
				innermostIndex = i;

			} else {

				// container doesn't intersect. trigger "out" event if necessary
				if ( this.containers[ i ].containerCache.over ) {
					this.containers[ i ]._trigger( "out", event, this._uiHash( this ) );
					this.containers[ i ].containerCache.over = 0;
				}
			}

		}

		// If no intersecting containers found, return
		if ( !innermostContainer ) {
			return;
		}

		// Move the item into the container if it's not there already
		if ( this.containers.length === 1 ) {
			if ( !this.containers[ innermostIndex ].containerCache.over ) {
				this.containers[ innermostIndex ]._trigger( "over", event, this._uiHash( this ) );
				this.containers[ innermostIndex ].containerCache.over = 1;
			}
		} else {

			// When entering a new container, we will find the item with the least distance and
			// append our item near it
			dist = 10000;
			itemWithLeastDistance = null;
			floating = innermostContainer.floating || this._isFloating( this.currentItem );
			posProperty = floating ? "left" : "top";
			sizeProperty = floating ? "width" : "height";
			axis = floating ? "pageX" : "pageY";

			for ( j = this.items.length - 1; j >= 0; j-- ) {
				if ( !$.contains(
						this.containers[ innermostIndex ].element[ 0 ], this.items[ j ].item[ 0 ] )
				) {
					continue;
				}
				if ( this.items[ j ].item[ 0 ] === this.currentItem[ 0 ] ) {
					continue;
				}

				cur = this.items[ j ].item.offset()[ posProperty ];
				nearBottom = false;
				if ( event[ axis ] - cur > this.items[ j ][ sizeProperty ] / 2 ) {
					nearBottom = true;
				}

				if ( Math.abs( event[ axis ] - cur ) < dist ) {
					dist = Math.abs( event[ axis ] - cur );
					itemWithLeastDistance = this.items[ j ];
					this.direction = nearBottom ? "up" : "down";
				}
			}

			//Check if dropOnEmpty is enabled
			if ( !itemWithLeastDistance && !this.options.dropOnEmpty ) {
				return;
			}

			if ( this.currentContainer === this.containers[ innermostIndex ] ) {
				if ( !this.currentContainer.containerCache.over ) {
					this.containers[ innermostIndex ]._trigger( "over", event, this._uiHash() );
					this.currentContainer.containerCache.over = 1;
				}
				return;
			}

			itemWithLeastDistance ?
				this._rearrange( event, itemWithLeastDistance, null, true ) :
				this._rearrange( event, null, this.containers[ innermostIndex ].element, true );
			this._trigger( "change", event, this._uiHash() );
			this.containers[ innermostIndex ]._trigger( "change", event, this._uiHash( this ) );
			this.currentContainer = this.containers[ innermostIndex ];

			//Update the placeholder
			this.options.placeholder.update( this.currentContainer, this.placeholder );

			this.containers[ innermostIndex ]._trigger( "over", event, this._uiHash( this ) );
			this.containers[ innermostIndex ].containerCache.over = 1;
		}

	},

	_createHelper: function( event ) {

		var o = this.options,
			helper = $.isFunction( o.helper ) ?
				$( o.helper.apply( this.element[ 0 ], [ event, this.currentItem ] ) ) :
				( o.helper === "clone" ? this.currentItem.clone() : this.currentItem );

		//Add the helper to the DOM if that didn't happen already
		if ( !helper.parents( "body" ).length ) {
			$( o.appendTo !== "parent" ?
				o.appendTo :
				this.currentItem[ 0 ].parentNode )[ 0 ].appendChild( helper[ 0 ] );
		}

		if ( helper[ 0 ] === this.currentItem[ 0 ] ) {
			this._storedCSS = {
				width: this.currentItem[ 0 ].style.width,
				height: this.currentItem[ 0 ].style.height,
				position: this.currentItem.css( "position" ),
				top: this.currentItem.css( "top" ),
				left: this.currentItem.css( "left" )
			};
		}

		if ( !helper[ 0 ].style.width || o.forceHelperSize ) {
			helper.width( this.currentItem.width() );
		}
		if ( !helper[ 0 ].style.height || o.forceHelperSize ) {
			helper.height( this.currentItem.height() );
		}

		return helper;

	},

	_adjustOffsetFromHelper: function( obj ) {
		if ( typeof obj === "string" ) {
			obj = obj.split( " " );
		}
		if ( $.isArray( obj ) ) {
			obj = { left: +obj[ 0 ], top: +obj[ 1 ] || 0 };
		}
		if ( "left" in obj ) {
			this.offset.click.left = obj.left + this.margins.left;
		}
		if ( "right" in obj ) {
			this.offset.click.left = this.helperProportions.width - obj.right + this.margins.left;
		}
		if ( "top" in obj ) {
			this.offset.click.top = obj.top + this.margins.top;
		}
		if ( "bottom" in obj ) {
			this.offset.click.top = this.helperProportions.height - obj.bottom + this.margins.top;
		}
	},

	_getParentOffset: function() {

		//Get the offsetParent and cache its position
		this.offsetParent = this.helper.offsetParent();
		var po = this.offsetParent.offset();

		// This is a special case where we need to modify a offset calculated on start, since the
		// following happened:
		// 1. The position of the helper is absolute, so it's position is calculated based on the
		// next positioned parent
		// 2. The actual offset parent is a child of the scroll parent, and the scroll parent isn't
		// the document, which means that the scroll is included in the initial calculation of the
		// offset of the parent, and never recalculated upon drag
		if ( this.cssPosition === "absolute" && this.scrollParent[ 0 ] !== this.document[ 0 ] &&
				$.contains( this.scrollParent[ 0 ], this.offsetParent[ 0 ] ) ) {
			po.left += this.scrollParent.scrollLeft();
			po.top += this.scrollParent.scrollTop();
		}

		// This needs to be actually done for all browsers, since pageX/pageY includes this
		// information with an ugly IE fix
		if ( this.offsetParent[ 0 ] === this.document[ 0 ].body ||
				( this.offsetParent[ 0 ].tagName &&
				this.offsetParent[ 0 ].tagName.toLowerCase() === "html" && $.ui.ie ) ) {
			po = { top: 0, left: 0 };
		}

		return {
			top: po.top + ( parseInt( this.offsetParent.css( "borderTopWidth" ), 10 ) || 0 ),
			left: po.left + ( parseInt( this.offsetParent.css( "borderLeftWidth" ), 10 ) || 0 )
		};

	},

	_getRelativeOffset: function() {

		if ( this.cssPosition === "relative" ) {
			var p = this.currentItem.position();
			return {
				top: p.top - ( parseInt( this.helper.css( "top" ), 10 ) || 0 ) +
					this.scrollParent.scrollTop(),
				left: p.left - ( parseInt( this.helper.css( "left" ), 10 ) || 0 ) +
					this.scrollParent.scrollLeft()
			};
		} else {
			return { top: 0, left: 0 };
		}

	},

	_cacheMargins: function() {
		this.margins = {
			left: ( parseInt( this.currentItem.css( "marginLeft" ), 10 ) || 0 ),
			top: ( parseInt( this.currentItem.css( "marginTop" ), 10 ) || 0 )
		};
	},

	_cacheHelperProportions: function() {
		this.helperProportions = {
			width: this.helper.outerWidth(),
			height: this.helper.outerHeight()
		};
	},

	_setContainment: function() {

		var ce, co, over,
			o = this.options;
		if ( o.containment === "parent" ) {
			o.containment = this.helper[ 0 ].parentNode;
		}
		if ( o.containment === "document" || o.containment === "window" ) {
			this.containment = [
				0 - this.offset.relative.left - this.offset.parent.left,
				0 - this.offset.relative.top - this.offset.parent.top,
				o.containment === "document" ?
					this.document.width() :
					this.window.width() - this.helperProportions.width - this.margins.left,
				( o.containment === "document" ?
					( this.document.height() || document.body.parentNode.scrollHeight ) :
					this.window.height() || this.document[ 0 ].body.parentNode.scrollHeight
				) - this.helperProportions.height - this.margins.top
			];
		}

		if ( !( /^(document|window|parent)$/ ).test( o.containment ) ) {
			ce = $( o.containment )[ 0 ];
			co = $( o.containment ).offset();
			over = ( $( ce ).css( "overflow" ) !== "hidden" );

			this.containment = [
				co.left + ( parseInt( $( ce ).css( "borderLeftWidth" ), 10 ) || 0 ) +
					( parseInt( $( ce ).css( "paddingLeft" ), 10 ) || 0 ) - this.margins.left,
				co.top + ( parseInt( $( ce ).css( "borderTopWidth" ), 10 ) || 0 ) +
					( parseInt( $( ce ).css( "paddingTop" ), 10 ) || 0 ) - this.margins.top,
				co.left + ( over ? Math.max( ce.scrollWidth, ce.offsetWidth ) : ce.offsetWidth ) -
					( parseInt( $( ce ).css( "borderLeftWidth" ), 10 ) || 0 ) -
					( parseInt( $( ce ).css( "paddingRight" ), 10 ) || 0 ) -
					this.helperProportions.width - this.margins.left,
				co.top + ( over ? Math.max( ce.scrollHeight, ce.offsetHeight ) : ce.offsetHeight ) -
					( parseInt( $( ce ).css( "borderTopWidth" ), 10 ) || 0 ) -
					( parseInt( $( ce ).css( "paddingBottom" ), 10 ) || 0 ) -
					this.helperProportions.height - this.margins.top
			];
		}

	},

	_convertPositionTo: function( d, pos ) {

		if ( !pos ) {
			pos = this.position;
		}
		var mod = d === "absolute" ? 1 : -1,
			scroll = this.cssPosition === "absolute" &&
				!( this.scrollParent[ 0 ] !== this.document[ 0 ] &&
				$.contains( this.scrollParent[ 0 ], this.offsetParent[ 0 ] ) ) ?
					this.offsetParent :
					this.scrollParent,
			scrollIsRootNode = ( /(html|body)/i ).test( scroll[ 0 ].tagName );

		return {
			top: (

				// The absolute mouse position
				pos.top	+

				// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.relative.top * mod +

				// The offsetParent's offset without borders (offset + border)
				this.offset.parent.top * mod -
				( ( this.cssPosition === "fixed" ?
					-this.scrollParent.scrollTop() :
					( scrollIsRootNode ? 0 : scroll.scrollTop() ) ) * mod )
			),
			left: (

				// The absolute mouse position
				pos.left +

				// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.relative.left * mod +

				// The offsetParent's offset without borders (offset + border)
				this.offset.parent.left * mod	-
				( ( this.cssPosition === "fixed" ?
					-this.scrollParent.scrollLeft() : scrollIsRootNode ? 0 :
					scroll.scrollLeft() ) * mod )
			)
		};

	},

	_generatePosition: function( event ) {

		var top, left,
			o = this.options,
			pageX = event.pageX,
			pageY = event.pageY,
			scroll = this.cssPosition === "absolute" &&
				!( this.scrollParent[ 0 ] !== this.document[ 0 ] &&
				$.contains( this.scrollParent[ 0 ], this.offsetParent[ 0 ] ) ) ?
					this.offsetParent :
					this.scrollParent,
				scrollIsRootNode = ( /(html|body)/i ).test( scroll[ 0 ].tagName );

		// This is another very weird special case that only happens for relative elements:
		// 1. If the css position is relative
		// 2. and the scroll parent is the document or similar to the offset parent
		// we have to refresh the relative offset during the scroll so there are no jumps
		if ( this.cssPosition === "relative" && !( this.scrollParent[ 0 ] !== this.document[ 0 ] &&
				this.scrollParent[ 0 ] !== this.offsetParent[ 0 ] ) ) {
			this.offset.relative = this._getRelativeOffset();
		}

		/*
		 * - Position constraining -
		 * Constrain the position to a mix of grid, containment.
		 */

		if ( this.originalPosition ) { //If we are not dragging yet, we won't check for options

			if ( this.containment ) {
				if ( event.pageX - this.offset.click.left < this.containment[ 0 ] ) {
					pageX = this.containment[ 0 ] + this.offset.click.left;
				}
				if ( event.pageY - this.offset.click.top < this.containment[ 1 ] ) {
					pageY = this.containment[ 1 ] + this.offset.click.top;
				}
				if ( event.pageX - this.offset.click.left > this.containment[ 2 ] ) {
					pageX = this.containment[ 2 ] + this.offset.click.left;
				}
				if ( event.pageY - this.offset.click.top > this.containment[ 3 ] ) {
					pageY = this.containment[ 3 ] + this.offset.click.top;
				}
			}

			if ( o.grid ) {
				top = this.originalPageY + Math.round( ( pageY - this.originalPageY ) /
					o.grid[ 1 ] ) * o.grid[ 1 ];
				pageY = this.containment ?
					( ( top - this.offset.click.top >= this.containment[ 1 ] &&
						top - this.offset.click.top <= this.containment[ 3 ] ) ?
							top :
							( ( top - this.offset.click.top >= this.containment[ 1 ] ) ?
								top - o.grid[ 1 ] : top + o.grid[ 1 ] ) ) :
								top;

				left = this.originalPageX + Math.round( ( pageX - this.originalPageX ) /
					o.grid[ 0 ] ) * o.grid[ 0 ];
				pageX = this.containment ?
					( ( left - this.offset.click.left >= this.containment[ 0 ] &&
						left - this.offset.click.left <= this.containment[ 2 ] ) ?
							left :
							( ( left - this.offset.click.left >= this.containment[ 0 ] ) ?
								left - o.grid[ 0 ] : left + o.grid[ 0 ] ) ) :
								left;
			}

		}

		return {
			top: (

				// The absolute mouse position
				pageY -

				// Click offset (relative to the element)
				this.offset.click.top -

				// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.relative.top -

				// The offsetParent's offset without borders (offset + border)
				this.offset.parent.top +
				( ( this.cssPosition === "fixed" ?
					-this.scrollParent.scrollTop() :
					( scrollIsRootNode ? 0 : scroll.scrollTop() ) ) )
			),
			left: (

				// The absolute mouse position
				pageX -

				// Click offset (relative to the element)
				this.offset.click.left -

				// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.relative.left -

				// The offsetParent's offset without borders (offset + border)
				this.offset.parent.left +
				( ( this.cssPosition === "fixed" ?
					-this.scrollParent.scrollLeft() :
					scrollIsRootNode ? 0 : scroll.scrollLeft() ) )
			)
		};

	},

	_rearrange: function( event, i, a, hardRefresh ) {

		a ? a[ 0 ].appendChild( this.placeholder[ 0 ] ) :
			i.item[ 0 ].parentNode.insertBefore( this.placeholder[ 0 ],
				( this.direction === "down" ? i.item[ 0 ] : i.item[ 0 ].nextSibling ) );

		//Various things done here to improve the performance:
		// 1. we create a setTimeout, that calls refreshPositions
		// 2. on the instance, we have a counter variable, that get's higher after every append
		// 3. on the local scope, we copy the counter variable, and check in the timeout,
		// if it's still the same
		// 4. this lets only the last addition to the timeout stack through
		this.counter = this.counter ? ++this.counter : 1;
		var counter = this.counter;

		this._delay( function() {
			if ( counter === this.counter ) {

				//Precompute after each DOM insertion, NOT on mousemove
				this.refreshPositions( !hardRefresh );
			}
		} );

	},

	_clear: function( event, noPropagation ) {

		this.reverting = false;

		// We delay all events that have to be triggered to after the point where the placeholder
		// has been removed and everything else normalized again
		var i,
			delayedTriggers = [];

		// We first have to update the dom position of the actual currentItem
		// Note: don't do it if the current item is already removed (by a user), or it gets
		// reappended (see #4088)
		if ( !this._noFinalSort && this.currentItem.parent().length ) {
			this.placeholder.before( this.currentItem );
		}
		this._noFinalSort = null;

		if ( this.helper[ 0 ] === this.currentItem[ 0 ] ) {
			for ( i in this._storedCSS ) {
				if ( this._storedCSS[ i ] === "auto" || this._storedCSS[ i ] === "static" ) {
					this._storedCSS[ i ] = "";
				}
			}
			this.currentItem.css( this._storedCSS );
			this._removeClass( this.currentItem, "ui-sortable-helper" );
		} else {
			this.currentItem.show();
		}

		if ( this.fromOutside && !noPropagation ) {
			delayedTriggers.push( function( event ) {
				this._trigger( "receive", event, this._uiHash( this.fromOutside ) );
			} );
		}
		if ( ( this.fromOutside ||
				this.domPosition.prev !==
				this.currentItem.prev().not( ".ui-sortable-helper" )[ 0 ] ||
				this.domPosition.parent !== this.currentItem.parent()[ 0 ] ) && !noPropagation ) {

			// Trigger update callback if the DOM position has changed
			delayedTriggers.push( function( event ) {
				this._trigger( "update", event, this._uiHash() );
			} );
		}

		// Check if the items Container has Changed and trigger appropriate
		// events.
		if ( this !== this.currentContainer ) {
			if ( !noPropagation ) {
				delayedTriggers.push( function( event ) {
					this._trigger( "remove", event, this._uiHash() );
				} );
				delayedTriggers.push( ( function( c ) {
					return function( event ) {
						c._trigger( "receive", event, this._uiHash( this ) );
					};
				} ).call( this, this.currentContainer ) );
				delayedTriggers.push( ( function( c ) {
					return function( event ) {
						c._trigger( "update", event, this._uiHash( this ) );
					};
				} ).call( this, this.currentContainer ) );
			}
		}

		//Post events to containers
		function delayEvent( type, instance, container ) {
			return function( event ) {
				container._trigger( type, event, instance._uiHash( instance ) );
			};
		}
		for ( i = this.containers.length - 1; i >= 0; i-- ) {
			if ( !noPropagation ) {
				delayedTriggers.push( delayEvent( "deactivate", this, this.containers[ i ] ) );
			}
			if ( this.containers[ i ].containerCache.over ) {
				delayedTriggers.push( delayEvent( "out", this, this.containers[ i ] ) );
				this.containers[ i ].containerCache.over = 0;
			}
		}

		//Do what was originally in plugins
		if ( this.storedCursor ) {
			this.document.find( "body" ).css( "cursor", this.storedCursor );
			this.storedStylesheet.remove();
		}
		if ( this._storedOpacity ) {
			this.helper.css( "opacity", this._storedOpacity );
		}
		if ( this._storedZIndex ) {
			this.helper.css( "zIndex", this._storedZIndex === "auto" ? "" : this._storedZIndex );
		}

		this.dragging = false;

		if ( !noPropagation ) {
			this._trigger( "beforeStop", event, this._uiHash() );
		}

		//$(this.placeholder[0]).remove(); would have been the jQuery way - unfortunately,
		// it unbinds ALL events from the original node!
		this.placeholder[ 0 ].parentNode.removeChild( this.placeholder[ 0 ] );

		if ( !this.cancelHelperRemoval ) {
			if ( this.helper[ 0 ] !== this.currentItem[ 0 ] ) {
				this.helper.remove();
			}
			this.helper = null;
		}

		if ( !noPropagation ) {
			for ( i = 0; i < delayedTriggers.length; i++ ) {

				// Trigger all delayed events
				delayedTriggers[ i ].call( this, event );
			}
			this._trigger( "stop", event, this._uiHash() );
		}

		this.fromOutside = false;
		return !this.cancelHelperRemoval;

	},

	_trigger: function() {
		if ( $.Widget.prototype._trigger.apply( this, arguments ) === false ) {
			this.cancel();
		}
	},

	_uiHash: function( _inst ) {
		var inst = _inst || this;
		return {
			helper: inst.helper,
			placeholder: inst.placeholder || $( [] ),
			position: inst.position,
			originalPosition: inst.originalPosition,
			offset: inst.positionAbs,
			item: inst.currentItem,
			sender: _inst ? _inst.element : null
		};
	}

} );




}));
/*


   Magic Zoom Plus v5.2.1 DEMO
   Copyright 2016 Magic Toolbox
   Buy a license: https://www.magictoolbox.com/magiczoomplus/
   License agreement: https://www.magictoolbox.com/license/


*/
eval(function(m,a,g,i,c,k){c=function(e){return(e<a?'':c(parseInt(e/a)))+((e=e%a)>35?String.fromCharCode(e+29):e.toString(36))};if(!''.replace(/^/,String)){while(g--){k[c(g)]=i[g]||c(g)}i=[function(e){return k[e]}];c=function(){return'\\w+'};g=1};while(g--){if(i[g]){m=m.replace(new RegExp('\\b'+c(g)+'\\b','g'),i[g])}}return m}('1j.9G=(17(){1c y,A;y=A=(17(){1c U={4J:"jA.3-b5",cm:0,8N:{},$bA:17(Y){1a(Y.$64||(Y.$64=++O.cm))},8Q:17(Y){1a(O.8N[Y]||(O.8N[Y]={}))},$F:17(){},$1l:17(){1a 1l},$1r:17(){1a 1r},cC:"cO-"+1p.5R(1p.6n()*1t bG().cJ()),3y:17(Y){1a(2E!=Y)},aV:17(Z,Y){1a(2E!=Z)?Z:Y},9n:17(Y){1a!!(Y)},1P:17(Y){if(!O.3y(Y)){1a 1l}if(Y.$4F){1a Y.$4F}if(!!Y.6a){if(1==Y.6a){1a"6f"}if(3==Y.6a){1a"cL"}}if(Y.1I&&Y.cg){1a"jz"}if(Y.1I&&Y.9T){1a"21"}if((Y 5n 1j.6M||Y 5n 1j.b9)&&Y.5g===O.3R){1a"3Z"}if(Y 5n 1j.6b){1a"4a"}if(Y 5n 1j.b9){1a"17"}if(Y 5n 1j.5Y){1a"1N"}if(O.1e.59){if(O.3y(Y.dE)){1a"1z"}}1k{if(Y===1j.1z||Y.5g==1j.1v||Y.5g==1j.f3||Y.5g==1j.ee||Y.5g==1j.jy||Y.5g==1j.jw){1a"1z"}}if(Y 5n 1j.bG){1a"cM"}if(Y 5n 1j.fi){1a"jx"}if(Y===1j){1a"1j"}if(Y===1n){1a"1n"}1a 8A(Y)},24:17(ad,ac){if(!(ad 5n 1j.6b)){ad=[ad]}if(!ac){1a ad[0]}1S(1c ab=0,Z=ad.1I;ab<Z;ab++){if(!O.3y(ad)){8b}1S(1c aa in ac){if(!6M.2A.3X.2c(ac,aa)){8b}3o{ad[ab][aa]=ac[aa]}3G(Y){}}}1a ad[0]},9g:17(ac,ab){if(!(ac 5n 1j.6b)){ac=[ac]}1S(1c aa=0,Y=ac.1I;aa<Y;aa++){if(!O.3y(ac[aa])){8b}if(!ac[aa].2A){8b}1S(1c Z in(ab||{})){if(!ac[aa].2A[Z]){ac[aa].2A[Z]=ab[Z]}}}1a ac[0]},co:17(aa,Z){if(!O.3y(aa)){1a aa}1S(1c Y in(Z||{})){if(!aa[Y]){aa[Y]=Z[Y]}}1a aa},$3o:17(){1S(1c Z=0,Y=21.1I;Z<Y;Z++){3o{1a 21[Z]()}3G(aa){}}1a 1h},$A:17(aa){if(!O.3y(aa)){1a O.$([])}if(aa.cj){1a O.$(aa.cj())}if(aa.cg){1c Z=aa.1I||0,Y=1t 6b(Z);5z(Z--){Y[Z]=aa[Z]}1a O.$(Y)}1a O.$(6b.2A.bn.2c(aa))},6C:17(){1a 1t bG().cJ()},4h:17(ac){1c aa;4D(O.1P(ac)){1C"8y":aa={};1S(1c ab in ac){aa[ab]=O.4h(ac[ab])}1H;1C"4a":aa=[];1S(1c Z=0,Y=ac.1I;Z<Y;Z++){aa[Z]=O.4h(ac[Z])}1H;1T:1a ac}1a O.$(aa)},$:17(aa){1c Y=1r;if(!O.3y(aa)){1a 1h}if(aa.$c4){1a aa}4D(O.1P(aa)){1C"4a":aa=O.co(aa,O.24(O.6b,{$c4:O.$F}));aa.3d=aa.cP;1a aa;1H;1C"1N":1c Z=1n.dg(aa);if(O.3y(Z)){1a O.$(Z)}1a 1h;1H;1C"1j":1C"1n":O.$bA(aa);aa=O.24(aa,O.3z);1H;1C"6f":O.$bA(aa);aa=O.24(aa,O.43);1H;1C"1z":aa=O.24(aa,O.1v);1H;1C"cL":1C"17":1C"4a":1C"cM":1T:Y=1l;1H}if(Y){1a O.24(aa,{$c4:O.$F})}1k{1a aa}},$1t:17(Y,aa,Z){1a O.$(O.ds.8I(Y)).8r(aa||{}).1y(Z||{})},6Q:17(Z,ab,af){1c ac,aa,ad,ae=[],Y=-1;af||(af=O.cC);ac=O.$(af)||O.$1t("2n",{id:af,1u:"8S/6l"}).26((1n.iD||1n.3F),"1G");aa=ac.cx||ac.cA;if("1N"!=O.1P(ab)){1S(1c ad in ab){ae.3c(ad+":"+ab[ad])}ab=ae.7Q(";")}if(aa.cw){Y=aa.cw(Z+" {"+ab+"}",aa.iY.1I)}1k{Y=aa.j0(Z,ab)}1a Y},j4:17(ab,Y){1c aa,Z;aa=O.$(ab);if("6f"!==O.1P(aa)){1a}Z=aa.cx||aa.cA;if(Z.cq){Z.cq(Y)}1k{if(Z.cp){Z.cp(Y)}}},kn:17(){1a"lu-lx-l1-lc-la".4q(/[le]/g,17(aa){1c Z=1p.6n()*16|0,Y=aa=="x"?Z:(Z&3|8);1a Y.8h(16)}).7C()},6A:(17(){1c Y;1a 17(Z){if(!Y){Y=1n.8I("a")}Y.3D("79",Z);1a("!!"+Y.79).4q("!!","")}})(),l7:17(aa){1c ab=0,Y=aa.1I;1S(1c Z=0;Z<Y;++Z){ab=31*ab+aa.ej(Z);ab%=l2}1a ab}};1c O=U;1c P=U.$;if(!1j.cN){1j.cN=U;1j.$cO=U.$}O.6b={$4F:"4a",4A:17(ab,ac){1c Y=13.1I;1S(1c Z=13.1I,aa=(ac<0)?1p.1V(0,Z+ac):ac||0;aa<Z;aa++){if(13[aa]===ab){1a aa}}1a-1},5S:17(Y,Z){1a 13.4A(Y,Z)!=-1},cP:17(Y,ab){1S(1c aa=0,Z=13.1I;aa<Z;aa++){if(aa in 13){Y.2c(ab,13[aa],aa,13)}}},2X:17(Y,ad){1c ac=[];1S(1c ab=0,Z=13.1I;ab<Z;ab++){if(ab in 13){1c aa=13[ab];if(Y.2c(ad,13[ab],ab,13)){ac.3c(aa)}}}1a ac},kU:17(Y,ac){1c ab=[];1S(1c aa=0,Z=13.1I;aa<Z;aa++){if(aa in 13){ab[aa]=Y.2c(ac,13[aa],aa,13)}}1a ab}};O.9g(5Y,{$4F:"1N",4O:17(){1a 13.4q(/^\\s+|\\s+$/g,"")},eq:17(Y,Z){1a(Z||1l)?(13.8h()===Y.8h()):(13.5j().8h()===Y.5j().8h())},5M:17(){1a 13.4q(/-\\D/g,17(Y){1a Y.a0(1).7C()})},9A:17(){1a 13.4q(/[A-Z]/g,17(Y){1a("-"+Y.a0(0).5j())})},ku:17(Y){1a 5W(13,Y||10)},ks:17(){1a 2v(13)},cI:17(){1a!13.4q(/1r/i,"").4O()},4N:17(Z,Y){Y=Y||"";1a(Y+13+Y).4A(Y+Z+Y)>-1}});U.9g(b9,{$4F:"17",1E:17(){1c Z=O.$A(21),Y=13,aa=Z.6R();1a 17(){1a Y.6B(aa||1h,Z.5w(O.$A(21)))}},2J:17(){1c Z=O.$A(21),Y=13,aa=Z.6R();1a 17(ab){1a Y.6B(aa||1h,O.$([ab||(O.1e.2D?1j.1z:1h)]).5w(Z))}},2I:17(){1c Z=O.$A(21),Y=13,aa=Z.6R();1a 1j.4B(17(){1a Y.6B(Y,Z)},aa||0)},di:17(){1c Z=O.$A(21),Y=13;1a 17(){1a Y.2I.6B(Y,Z)}},cZ:17(){1c Z=O.$A(21),Y=13,aa=Z.6R();1a 1j.eT(17(){1a Y.6B(Y,Z)},aa||0)}});1c V={},N=2y.it.5j(),M=N.3H(/(3Q|6t|59|bh)\\/(\\d+\\.?\\d*)/i),R=N.3H(/(kA|aU)\\/(\\d+\\.?\\d*)/i)||N.3H(/(dB|5y|9Z|cQ|7a|aU)\\/(\\d+\\.?\\d*)/i),T=N.3H(/4J\\/(\\d+\\.?\\d*)/i),I=1n.5r.2n;17 J(Z){1c Y=Z.a0(0).7C()+Z.bn(1);1a Z in I||("dG"+Y)in I||("dC"+Y)in I||("62"+Y)in I||("O"+Y)in I}O.1e={2O:{kF:!!(1n.kE),iZ:!!(1j.bO),aI:!!(1n.ei),52:!!(1n.hI||1n.fO||1n.9W||1n.dt||1n.fS||1n.fX||1n.fK||1n.fU||1n.fB),dk:!!(1j.fA)&&!!(1j.gu)&&(1j.97&&"g4"in 1t 97),1Y:J("1Y"),2j:J("2j"),9p:J("9p"),cE:J("cE"),57:1l,dP:1l,83:1l,5Q:1l,7y:(17(){1a 1n.gd.gs("aA://az.at.av/gf/gh/gg#g9","1.1")})()},aQ:17(){1a"g8"in 1j||(1j.cG&&1n 5n cG)||(2y.gi>0)||(2y.gj>0)}(),3e:N.3H(/(6H|bb\\d+|gt).+|gv|gy\\/|gx|gm|gk|gn|go|gq|gz|ip(dL|ea|ad)|fI|fH|fT |fM|hU|hS|3e.+cQ|hR|7a m(hE|in)i|hW( ii)?|cl|p(ig|i0)\\/|hZ|hX|hY|i8(4|6)0|i7|gS|gQ\\.(1e|3M)|h0|gY|gW (ce|cl)|gI|h1/)?1r:1l,7q:(M&&M[1])?M[1].5j():(1j.7a)?"bh":!!(1j.h2)?"59":(2E!==1n.hl||1h!=1j.hk)?"6t":(1h!==1j.hh||!2y.hi)?"3Q":"hq",4J:(M&&M[2])?2v(M[2]):0,4t:(R&&R[1])?R[1].5j():"",76:(R&&R[2])?2v(R[2]):0,8m:"",b4:"",4X:"",2D:0,4T:N.3H(/ip(?:ad|ea|dL)/)?"8V":(N.3H(/(?:h8|6H)/)||2y.4T.3H(/ft|an|hb/i)||["kQ"])[0].5j(),d1:1n.9N&&"dJ"==1n.9N.5j(),dQ:0,4b:17(){1a(1n.9N&&"dJ"==1n.9N.5j())?1n.3F:1n.5r},57:1j.57||1j.hc||1j.hd||1j.he||1j.h9||2E,8T:1j.8T||1j.dN||1j.dN||1j.h4||1j.h3||1j.h5||2E,2m:1l,7M:17(){if(O.1e.2m){1a}1c ab,aa;O.1e.2m=1r;O.3F=O.$(1n.3F);O.an=O.$(1j);3o{1c Z=O.$1t("33").1y({1f:2K,1g:2K,7i:"6u",2k:"5t",1G:-h6}).26(1n.3F);O.1e.dQ=Z.dh-Z.dn;Z.2U()}3G(Y){}3o{ab=O.$1t("33");aa=ab.2n;aa.dI="dO:2b(bd://),2b(bd://),h7 2b(bd://)";O.1e.2O.dP=(/(2b\\s*\\(.*?){3}/).3n(aa.dO);aa=1h;ab=1h}3G(Y){}if(!O.1e.7F){O.1e.7F=O.9z("2j").9A()}3o{ab=O.$1t("33");ab.2n.dI=O.9z("2X").9A()+":5p(hg);";O.1e.2O.83=!!ab.2n.1I&&(!O.1e.2D||O.1e.2D>9);ab=1h}3G(Y){}if(!O.1e.2O.83){O.$(1n.5r).1B("6W-hp-3h")}3o{O.1e.2O.5Q=(17(){1c ac=O.$1t("5Q");1a!!(ac.dH&&ac.dH("2d"))})()}3G(Y){}if(2E===1j.hr&&2E!==1j.hs){V.2W="hn"}O.3z.2Y.2c(O.$(1n),"9r")}};(17(){1c ad=[],ac,ab,Z;17 Y(){1a!!(21.9T.aB)}4D(O.1e.7q){1C"59":if(!O.1e.4J){O.1e.4J=!!(1j.97)?3:2}1H;1C"6t":O.1e.4J=(R&&R[2])?2v(R[2]):0;1H}O.1e[O.1e.7q]=1r;if(R&&"dB"===R[1]){O.1e.4t="5y"}if(!!1j.5y){O.1e.5y=1r}if(R&&"aU"===R[1]){O.1e.4t="7a";O.1e.7a=1r}if("9Z"===O.1e.4t&&(T&&T[1])){O.1e.76=2v(T[1])}if("6H"==O.1e.4T&&O.1e.3Q&&(T&&T[1])){O.1e.7S=1r}ac=({6t:["-dD-","dC","dD"],3Q:["-3Q-","dG","3Q"],59:["-62-","62","62"],bh:["-o-","O","o"]})[O.1e.7q]||["","",""];O.1e.8m=ac[0];O.1e.b4=ac[1];O.1e.4X=ac[2];O.1e.2D=(!O.1e.59)?2E:(1n.dw)?1n.dw:17(){1c ae=0;if(O.1e.d1){1a 5}4D(O.1e.4J){1C 2:ae=6;1H;1C 3:ae=7;1H}1a ae}();ad.3c(O.1e.4T+"-3h");if(O.1e.3e){ad.3c("3e-3h")}if(O.1e.7S){ad.3c("6H-1e-3h")}if(O.1e.2D){O.1e.4t="ie";O.1e.76=O.1e.2D;ad.3c("ie"+O.1e.2D+"-3h");1S(ab=11;ab>O.1e.2D;ab--){ad.3c("lt-ie"+ab+"-3h")}}if(O.1e.3Q&&O.1e.4J<gJ){O.1e.2O.52=1l}if(O.1e.57){O.1e.57.2c(1j,17(){O.1e.2O.57=1r})}if(O.1e.2O.7y){ad.3c("7y-3h")}1k{ad.3c("6W-7y-3h")}Z=(1n.5r.67||"").3H(/\\S+/g)||[];1n.5r.67=O.$(Z).5w(ad).7Q(" ");3o{1n.5r.3D("3w-3h-cV",O.1e.4t);1n.5r.3D("3w-3h-cV-gK",O.1e.76)}3G(aa){}if(O.1e.2D&&O.1e.2D<9){1n.8I("5U");1n.8I("fy")}})();(17(){O.1e.52={9o:O.1e.2O.52,4Z:17(){1a!!(1n.gL||1n[O.1e.4X+"gM"]||1n.52||1n.gH||1n[O.1e.4X+"gG"])},bp:17(Y,Z){Z||(Z={});if(13.9o){O.$(1n).1D(13.c2,13.dp=17(aa){if(13.4Z()){Z.bs&&Z.bs()}1k{O.$(1n).1O(13.c2,13.dp);Z.bt&&Z.bt()}}.2J(13));O.$(1n).1D(13.bZ,13.6v=17(aa){Z.7U&&Z.7U();O.$(1n).1O(13.bZ,13.6v)}.2J(13));(Y[O.1e.4X+"gC"]||Y[O.1e.4X+"gB"]||Y.gD||17(){}).2c(Y)}1k{if(Z.7U){Z.7U()}}},eO:(1n.9W||1n.dt||1n[O.1e.4X+"gF"]||1n[O.1e.4X+"gN"]||17(){}).1E(1n),c2:1n.e4?"gO":(1n.9W?"":O.1e.4X)+"gX",bZ:1n.e4?"gZ":(1n.9W?"":O.1e.4X)+"gV",gU:O.1e.4X,gP:1h}})();1c X=/\\S+/g,L=/^(3S(db|cX|d9|dY)gR)|((7O|8w)(db|cX|d9|dY))$/,Q={"gT":("2E"===8A(I.dX))?"ht":"dX"},S={et:1r,i5:1r,2s:1r,f1:1r,1m:1r},K=(1j.dW)?17(aa,Y){1c Z=1j.dW(aa,1h);1a Z?Z.i4(Y)||Z[Y]:1h}:17(ab,Z){1c aa=ab.i6,Y=1h;Y=aa?aa[Z]:1h;if(1h==Y&&ab.2n&&ab.2n[Z]){Y=ab.2n[Z]}1a Y};17 W(aa){1c Y,Z;Z=(O.1e.3Q&&"2X"==aa)?1l:(aa in I);if(!Z){Y=O.1e.b4+aa.a0(0).7C()+aa.bn(1);if(Y in I){1a Y}}1a aa}O.9z=W;O.43={dM:17(Y){1a!(Y||"").4N(" ")&&(13.67||"").4N(Y," ")},1B:17(ac){1c Z=(13.67||"").3H(X)||[],ab=(ac||"").3H(X)||[],Y=ab.1I,aa=0;1S(;aa<Y;aa++){if(!O.$(Z).5S(ab[aa])){Z.3c(ab[aa])}}13.67=Z.7Q(" ");1a 13},1R:17(ad){1c Z=(13.67||"").3H(X)||[],ac=(ad||"").3H(X)||[],Y=ac.1I,ab=0,aa;1S(;ab<Y;ab++){if((aa=O.$(Z).4A(ac[ab]))>-1){Z.9M(aa,1)}}13.67=ad?Z.7Q(" "):"";1a 13},i3:17(Y){1a 13.dM(Y)?13.1R(Y):13.1B(Y)},3r:17(Z){1c aa=Z.5M(),Y=1h;Z=Q[aa]||(Q[aa]=W(aa));Y=K(13,Z);if("2C"===Y){Y=1h}if(1h!==Y){if("2s"==Z){1a O.3y(Y)?2v(Y):1}if(L.3n(Z)){Y=5W(Y,10)?Y:"65"}}1a Y},3O:17(Z,Y){1c ab=Z.5M();3o{if("2s"==Z){13.cK(Y);1a 13}Z=Q[ab]||(Q[ab]=W(ab));13.2n[Z]=Y+(("66"==O.1P(Y)&&!S[ab])?"2w":"")}3G(aa){}1a 13},1y:17(Z){1S(1c Y in Z){13.3O(Y,Z[Y])}1a 13},i2:17(){1c Y={};O.$A(21).3d(17(Z){Y[Z]=13.3r(Z)},13);1a Y},cK:17(aa,Y){1c Z;Y=Y||1l;13.2n.2s=aa;aa=5W(2v(aa)*2K);if(Y){if(0===aa){if("3v"!=13.2n.4y){13.2n.4y="3v"}}1k{if("5u"!=13.2n.4y){13.2n.4y="5u"}}}if(O.1e.2D&&O.1e.2D<9){if(!9s(aa)){if(!~13.2n.2X.4A("bT")){13.2n.2X+=" cu:cs.cv.bT(9X="+aa+")"}1k{13.2n.2X=13.2n.2X.4q(/9X=\\d*/i,"9X="+aa)}}1k{13.2n.2X=13.2n.2X.4q(/cu:cs.cv.bT\\(9X=\\d*\\)/i,"").4O();if(""===13.2n.2X){13.2n.5V("2X")}}}1a 13},8r:17(Y){1S(1c Z in Y){if("3Z"===Z){13.1B(""+Y[Z])}1k{13.3D(Z,""+Y[Z])}}1a 13},i1:17(){1c Z=0,Y=0;Z=13.3r("1Y-5d");Y=13.3r("1Y-bM");Z=Z.4A("62")>-1?2v(Z):Z.4A("s")>-1?2v(Z)*cb:0;Y=Y.4A("62")>-1?2v(Y):Y.4A("s")>-1?2v(Y)*cb:0;1a Z+Y},4u:17(){1a 13.1y({6x:"2Z",4y:"3v"})},5J:17(){1a 13.1y({6x:"",4y:"5u"})},1F:17(){1a{1f:13.dh,1g:13.ia}},8D:17(Z){1c Y=13.1F();Y.1f-=(2v(13.3r("3S-1M-1f")||0)+2v(13.3r("3S-2M-1f")||0));Y.1g-=(2v(13.3r("3S-1G-1f")||0)+2v(13.3r("3S-2N-1f")||0));if(!Z){Y.1f-=(2v(13.3r("7O-1M")||0)+2v(13.3r("7O-2M")||0));Y.1g-=(2v(13.3r("7O-1G")||0)+2v(13.3r("7O-2N")||0))}1a Y},7B:17(){1a{1G:13.8n,1M:13.8e}},im:17(){1c Y=13,Z={1G:0,1M:0};do{Z.1M+=Y.8e||0;Z.1G+=Y.8n||0;Y=Y.4H}5z(Y);1a Z},8j:17(){1c ac=13,Z=0,ab=0;if(O.3y(1n.5r.7w)){1c Y=13.7w(),aa=O.$(1n).7B(),ad=O.1e.4b();1a{1G:Y.1G+aa.y-ad.il,1M:Y.1M+aa.x-ad.io}}do{Z+=ac.iq||0;ab+=ac.ir||0;ac=ac.ik}5z(ac&&!(/^(?:3F|bz)$/i).3n(ac.aW));1a{1G:ab,1M:Z}},7p:17(){1c Z=13.8j();1c Y=13.1F();1a{1G:Z.1G,2N:Z.1G+Y.1g,1M:Z.1M,2M:Z.1M+Y.1f}},5v:17(Z){3o{13.ij=Z}3G(Y){13.ic=Z}1a 13},2U:17(){1a(13.4H)?13.4H.b7(13):13},5h:17(){O.$A(13.ib).3d(17(Y){if(3==Y.6a||8==Y.6a){1a}O.$(Y).5h()});13.2U();13.cf();if(13.$64){O.8N[13.$64]=1h;5a O.8N[13.$64]}1a 1h},3g:17(aa,Z){Z=Z||"2N";1c Y=13.4o;("1G"==Z&&Y)?13.ih(aa,Y):13.bN(aa);1a 13},26:17(aa,Z){1c Y=O.$(aa).3g(13,Z);1a 13},ec:17(Y){13.3g(Y.4H.8t(13,Y));1a 13},9h:17(Y){if("6f"!==O.1P("1N"==O.1P(Y)?Y=1n.dg(Y):Y)){1a 1l}1a(13==Y)?1l:(13.5S&&!(O.1e.dq))?(13.5S(Y)):(13.df)?!!(13.df(Y)&16):O.$A(13.8p(Y.aW)).5S(Y)}};O.43.hV=O.43.3r;O.43.hD=O.43.1y;if(!1j.43){1j.43=O.$F;if(O.1e.7q.3Q){1j.1n.8I("hC")}1j.43.2A=(O.1e.7q.3Q)?1j["[[hF.2A]]"]:{}}O.9g(1j.43,{$4F:"6f"});O.3z={1F:17(){if(O.1e.aQ||O.1e.hG||O.1e.dq){1a{1f:1j.5e,1g:1j.4R}}1a{1f:O.1e.4b().dn,1g:O.1e.4b().hw}},7B:17(){1a{x:1j.hv||O.1e.4b().8e,y:1j.hx||O.1e.4b().8n}},hy:17(){1c Y=13.1F();1a{1f:1p.1V(O.1e.4b().hz,Y.1f),1g:1p.1V(O.1e.4b().hH,Y.1g)}}};O.24(1n,{$4F:"1n"});O.24(1j,{$4F:"1j"});O.24([O.43,O.3z],{2e:17(ab,Z){1c Y=O.8Q(13.$64),aa=Y[ab];if(2E!==Z&&2E===aa){aa=Y[ab]=Z}1a(O.3y(aa)?aa:1h)},3f:17(aa,Z){1c Y=O.8Q(13.$64);Y[aa]=Z;1a 13},36:17(Z){1c Y=O.8Q(13.$64);5a Y[Z];1a 13}});if(!(1j.c0&&1j.c0.2A&&1j.c0.2A.aH)){O.24([O.43,O.3z],{aH:17(Y){1a O.$A(13.9D("*")).2X(17(aa){3o{1a(1==aa.6a&&aa.67.4N(Y," "))}3G(Z){}})}})}O.24([O.43,O.3z],{9H:17(){1a 13.aH(21[0])},8p:17(){1a 13.9D(21[0])}});if(O.1e.52.9o&&!1n.e1){O.43.e1=17(){O.1e.52.bp(13)}}O.1v={$4F:"1z",5X:O.$1l,2g:17(){1a 13.5c().3U()},5c:17(){if(13.dR){13.dR()}1k{13.dE=1r}1a 13},3U:17(){if(13.dF){13.dF()}1k{13.hO=1l}1a 13},4C:17(){13.5X=O.$1r;1a 13},7x:17(){1c Z,Y;Z=((/3t/i).3n(13.1u))?13.2L[0]:13;1a(!O.3y(Z))?{x:0,y:0}:{x:Z.2H,y:Z.2G}},5C:17(){1c Z,Y;Z=((/3t/i).3n(13.1u))?13.2L[0]:13;1a(!O.3y(Z))?{x:0,y:0}:{x:Z.4U||Z.2H+O.1e.4b().8e,y:Z.5b||Z.2G+O.1e.4b().8n}},bf:17(){1c Y=13.4c||13.hK;5z(Y&&3==Y.6a){Y=Y.4H}1a Y},80:17(){1c Z=1h;4D(13.1u){1C"7H":1C"hJ":1C"hL":Z=13.9R||13.hM;1H;1C"8O":1C"b8":1C"fe":Z=13.9R||13.hN;1H;1T:1a Z}3o{5z(Z&&3==Z.6a){Z=Z.4H}}3G(Y){Z=1h}1a Z},6Y:17(){if(!13.dz&&13.2u!==2E){1a(13.2u&1?1:(13.2u&2?3:(13.2u&4?2:0)))}1a 13.dz},g3:17(){1a(13.2i&&("3t"===13.2i||13.2i===13.5k))||(/3t/i).3n(13.1u)},fP:17(){1a 13.2i?(("3t"===13.2i||13.5k===13.2i)&&13.9S):1===13.2L.1I&&(13.6d.1I?13.6d[0].3K==13.2L[0].3K:1r)}};O.bC="dK";O.aJ="fQ";O.9B="";if(!1n.dK){O.bC="fN";O.aJ="fL";O.9B="7Z"}O.1v.1x={1u:"",x:1h,y:1h,2Q:1h,2u:1h,4c:1h,9R:1h,$4F:"1z.4j",5X:O.$1l,5T:O.$([]),4f:17(Y){1c Z=Y;13.5T.3c(Z)},2g:17(){1a 13.5c().3U()},5c:17(){13.5T.3d(17(Z){3o{Z.5c()}3G(Y){}});1a 13},3U:17(){13.5T.3d(17(Z){3o{Z.3U()}3G(Y){}});1a 13},4C:17(){13.5X=O.$1r;1a 13},7x:17(){1a{x:13.2H,y:13.2G}},5C:17(){1a{x:13.x,y:13.y}},bf:17(){1a 13.4c},80:17(){1a 13.9R},6Y:17(){1a 13.2u},f0:17(){1a 13.5T.1I>0?13.5T[0].bf():2E}};O.24([O.43,O.3z],{1D:17(aa,ac,ad,ag){1c af,Y,ab,ae,Z;if("1N"==O.1P(aa)){Z=aa.8g(" ");if(Z.1I>1){aa=Z}}if(O.1P(aa)=="4a"){O.$(aa).3d(13.1D.2J(13,ac,ad,ag));1a 13}if(!aa||!ac||O.1P(aa)!="1N"||O.1P(ac)!="17"){1a 13}if(aa=="9r"&&O.1e.2m){ac.2c(13);1a 13}aa=V[aa]||aa;ad=5W(ad||50);if(!ac.$9x){ac.$9x=1p.5R(1p.6n()*O.6C())}af=O.3z.2e.2c(13,"8E",{});Y=af[aa];if(!Y){af[aa]=Y=O.$([]);ab=13;if(O.1v.1x[aa]){O.1v.1x[aa].1L.5N.2c(13,ag)}1k{Y.3i=17(ah){ah=O.24(ah||1j.e,{$4F:"1z"});O.3z.2Y.2c(ab,aa,O.$(ah))};13[O.bC](O.9B+aa,Y.3i,1l)}}ae={1u:aa,fn:ac,bF:ad,ci:ac.$9x};Y.3c(ae);Y.fY(17(ai,ah){1a ai.bF-ah.bF});1a 13},1O:17(ae){1c ac=O.3z.2e.2c(13,"8E",{}),aa,Y,Z,af,ad,ab;ad=21.1I>1?21[1]:-2K;if("1N"==O.1P(ae)){ab=ae.8g(" ");if(ab.1I>1){ae=ab}}if(O.1P(ae)=="4a"){O.$(ae).3d(13.1O.2J(13,ad));1a 13}ae=V[ae]||ae;if(!ae||O.1P(ae)!="1N"||!ac||!ac[ae]){1a 13}aa=ac[ae]||[];1S(Z=0;Z<aa.1I;Z++){Y=aa[Z];if(-2K==ad||!!ad&&ad.$9x===Y.ci){af=aa.9M(Z--,1)}}if(0===aa.1I){if(O.1v.1x[ae]){O.1v.1x[ae].1L.2U.2c(13)}1k{13[O.aJ](O.9B+ae,aa.3i,1l)}5a ac[ae]}1a 13},2Y:17(ac,ae){1c ab=O.3z.2e.2c(13,"8E",{}),aa,Y,Z;ac=V[ac]||ac;if(!ac||O.1P(ac)!="1N"||!ab||!ab[ac]){1a 13}3o{ae=O.24(ae||{},{1u:ac})}3G(ad){}if(2E===ae.2Q){ae.2Q=O.6C()}aa=ab[ac]||[];1S(Z=0;Z<aa.1I&&!(ae.5X&&ae.5X());Z++){aa[Z].fn.2c(13,ae)}},aT:17(Z,Y){1c ac=("9r"==Z)?1l:1r,ab=13,aa;Z=V[Z]||Z;if(!ac){O.3z.2Y.2c(13,Z);1a 13}if(ab===1n&&1n.9u&&!ab.bm){ab=1n.5r}if(1n.9u){aa=1n.9u(Z);aa.72(Y,1r,1r)}1k{aa=1n.fC();aa.a1=Z}if(1n.9u){ab.bm(aa)}1k{ab.fE("7Z"+Y,aa)}1a aa},cf:17(){1c Z=O.3z.2e.2c(13,"8E");if(!Z){1a 13}1S(1c Y in Z){O.3z.1O.2c(13,Y)}O.3z.36.2c(13,"8E");1a 13}});(17(Y){if("89"===1n.8B){1a Y.1e.7M.2I(1)}if(Y.1e.3Q&&Y.1e.4J<fJ){(17(){(Y.$(["2l","89"]).5S(1n.8B))?Y.1e.7M():21.9T.2I(50)})()}1k{if(Y.1e.59&&Y.1e.2D<9&&1j==1G){(17(){(Y.$3o(17(){Y.1e.4b().fG("1M");1a 1r}))?Y.1e.7M():21.9T.2I(50)})()}1k{Y.3z.1D.2c(Y.$(1n),"fD",Y.1e.7M);Y.3z.1D.2c(Y.$(1j),"6c",Y.1e.7M)}}})(U);O.3R=17(){1c ac=1h,Z=O.$A(21);if("3Z"==O.1P(Z[0])){ac=Z.6R()}1c Y=17(){1S(1c af in 13){13[af]=O.4h(13[af])}if(13.5g.$3L){13.$3L={};1c ah=13.5g.$3L;1S(1c ag in ah){1c ae=ah[ag];4D(O.1P(ae)){1C"17":13.$3L[ag]=O.3R.e5(13,ae);1H;1C"8y":13.$3L[ag]=O.4h(ae);1H;1C"4a":13.$3L[ag]=O.4h(ae);1H}}}1c ad=(13.3P)?13.3P.6B(13,21):13;5a 13.aB;1a ad};if(!Y.2A.3P){Y.2A.3P=O.$F}if(ac){1c ab=17(){};ab.2A=ac.2A;Y.2A=1t ab;Y.$3L={};1S(1c aa in ac.2A){Y.$3L[aa]=ac.2A[aa]}}1k{Y.$3L=1h}Y.5g=O.3R;Y.2A.5g=Y;O.24(Y.2A,Z[0]);O.24(Y,{$4F:"3Z"});1a Y};U.3R.e5=17(Y,Z){1a 17(){1c ab=13.aB;1c aa=Z.6B(Y,21);1a aa}};(17(ab){1c aa=ab.$;1c Y=5,Z=bV;ab.1v.1x.1Q=1t ab.3R(ab.24(ab.1v.1x,{1u:"1Q",3P:17(ae,ad){1c ac=ad.5C();13.x=ac.x;13.y=ac.y;13.2H=ad.2H;13.2G=ad.2G;13.2Q=ad.2Q;13.2u=ad.6Y();13.4c=ae;13.4f(ad)}}));ab.1v.1x.1Q.1L={1w:{7k:Z,2u:1},5N:17(ac){13.3f("1z:1Q:1w",ab.24(ab.4h(ab.1v.1x.1Q.1L.1w),ac||{}));13.1D("6J",ab.1v.1x.1Q.1L.3i,1);13.1D("69",ab.1v.1x.1Q.1L.3i,1);13.1D("2S",ab.1v.1x.1Q.1L.ay,1);if(ab.1e.59&&ab.1e.2D<9){13.1D("9L",ab.1v.1x.1Q.1L.3i,1)}},2U:17(){13.1O("6J",ab.1v.1x.1Q.1L.3i);13.1O("69",ab.1v.1x.1Q.1L.3i);13.1O("2S",ab.1v.1x.1Q.1L.ay);if(ab.1e.59&&ab.1e.2D<9){13.1O("9L",ab.1v.1x.1Q.1L.3i)}},ay:17(ac){ac.3U()},3i:17(af){1c ae,ac,ad;ac=13.2e("1z:1Q:1w");if(af.1u!="9L"&&af.6Y()!=ac.2u){1a}if(13.2e("1z:1Q:bQ")){13.36("1z:1Q:bQ");1a}if("6J"==af.1u){ae=1t ab.1v.1x.1Q(13,af);13.3f("1z:1Q:8P",ae)}1k{if("69"==af.1u){ae=13.2e("1z:1Q:8P");if(!ae){1a}ad=af.5C();13.36("1z:1Q:8P");ae.4f(af);if(af.2Q-ae.2Q<=ac.7k&&1p.8L(1p.4M(ad.x-ae.x,2)+1p.4M(ad.y-ae.y,2))<=Y){13.2Y("1Q",ae)}1n.2Y("69",af)}1k{if(af.1u=="9L"){ae=1t ab.1v.1x.1Q(13,af);13.2Y("1Q",ae)}}}}}})(U);(17(Z){1c Y=Z.$;Z.1v.1x.2T=1t Z.3R(Z.24(Z.1v.1x,{1u:"2T",2p:"3J",6z:1l,3P:17(ad,ac,ab){1c aa=ac.5C();13.x=aa.x;13.y=aa.y;13.2H=ac.2H;13.2G=ac.2G;13.2Q=ac.2Q;13.2u=ac.6Y();13.4c=ad;13.4f(ac);13.2p=ab}}));Z.1v.1x.2T.1L={5N:17(){1c ab=Z.1v.1x.2T.1L.d5.2J(13),aa=Z.1v.1x.2T.1L.9U.2J(13);13.1D("6J",Z.1v.1x.2T.1L.aF,1);13.1D("69",Z.1v.1x.2T.1L.9U,1);1n.1D("6I",ab,1);1n.1D("69",aa,1);13.3f("1z:2T:4w:1n:5F",ab);13.3f("1z:2T:4w:1n:7l",aa)},2U:17(){13.1O("6J",Z.1v.1x.2T.1L.aF);13.1O("69",Z.1v.1x.2T.1L.9U);Y(1n).1O("6I",13.2e("1z:2T:4w:1n:5F")||Z.$F);Y(1n).1O("69",13.2e("1z:2T:4w:1n:7l")||Z.$F);13.36("1z:2T:4w:1n:5F");13.36("1z:2T:4w:1n:7l")},aF:17(ab){1c aa;if(1!=ab.6Y()){1a}aa=1t Z.1v.1x.2T(13,ab,"3J");13.3f("1z:2T:3J",aa)},9U:17(ab){1c aa;aa=13.2e("1z:2T:3J");if(!aa){1a}ab.3U();aa=1t Z.1v.1x.2T(13,ab,"8Z");13.36("1z:2T:3J");13.2Y("2T",aa)},d5:17(ab){1c aa;aa=13.2e("1z:2T:3J");if(!aa){1a}ab.3U();if(!aa.6z){aa.6z=1r;13.2Y("2T",aa)}aa=1t Z.1v.1x.2T(13,ab,"dl");13.2Y("2T",aa)}}})(U);(17(Z){1c Y=Z.$;Z.1v.1x.4g=1t Z.3R(Z.24(Z.1v.1x,{1u:"4g",7v:1l,7u:1h,3P:17(ac,ab){1c aa=ab.5C();13.x=aa.x;13.y=aa.y;13.2H=ab.2H;13.2G=ab.2G;13.2Q=ab.2Q;13.2u=ab.6Y();13.4c=ac;13.4f(ab)}}));Z.1v.1x.4g.1L={1w:{7k:7s},5N:17(aa){13.3f("1z:4g:1w",Z.24(Z.4h(Z.1v.1x.4g.1L.1w),aa||{}));13.1D("1Q",Z.1v.1x.4g.1L.3i,1)},2U:17(){13.1O("1Q",Z.1v.1x.4g.1L.3i)},3i:17(ac){1c ab,aa;ab=13.2e("1z:4g:1z");aa=13.2e("1z:4g:1w");if(!ab){ab=1t Z.1v.1x.4g(13,ac);ab.7u=4B(17(){ab.7v=1r;ac.5X=Z.$1l;13.2Y("1Q",ac);13.36("1z:4g:1z")}.1E(13),aa.7k+10);13.3f("1z:4g:1z",ab);ac.4C()}1k{48(ab.7u);13.36("1z:4g:1z");if(!ab.7v){ab.4f(ac);ac.4C().2g();13.2Y("4g",ab)}1k{}}}}})(U);(17(ae){1c ad=ae.$;17 Y(af){1a af.2i?(("3t"===af.2i||af.5k===af.2i)&&af.9S):1===af.2L.1I&&(af.6d.1I?af.6d[0].3K==af.2L[0].3K:1r)}17 aa(af){if(af.2i){1a("3t"===af.2i||af.5k===af.2i)?af.8R:1h}1k{1a af.2L[0].3K}}17 ab(af){if(af.2i){1a("3t"===af.2i||af.5k===af.2i)?af:1h}1k{1a af.2L[0]}}ae.1v.1x.1Z=1t ae.3R(ae.24(ae.1v.1x,{1u:"1Z",id:1h,3P:17(ag,af){1c ah=ab(af);13.id=ah.8R||ah.3K;13.x=ah.4U;13.y=ah.5b;13.4U=ah.4U;13.5b=ah.5b;13.2H=ah.2H;13.2G=ah.2G;13.2Q=af.2Q;13.2u=0;13.4c=ag;13.4f(af)}}));1c Z=10,ac=7s;ae.1v.1x.1Z.1L={5N:17(af){13.1D(["5f",1j.2y.3b?"6E":"7I"],ae.1v.1x.1Z.1L.7n,1);13.1D(["6r",1j.2y.3b?"5L":"6q"],ae.1v.1x.1Z.1L.6K,1);13.1D("2S",ae.1v.1x.1Z.1L.c8,1)},2U:17(){13.1O(["5f",1j.2y.3b?"6E":"7I"],ae.1v.1x.1Z.1L.7n);13.1O(["6r",1j.2y.3b?"5L":"6q"],ae.1v.1x.1Z.1L.6K);13.1O("2S",ae.1v.1x.1Z.1L.c8)},c8:17(af){af.3U()},7n:17(af){if(!Y(af)){13.36("1z:1Z:1z");1a}13.3f("1z:1Z:1z",1t ae.1v.1x.1Z(13,af));13.3f("1z:1Q:bQ",1r)},6K:17(ai){1c ag=ae.6C(),ah=13.2e("1z:1Z:1z"),af=13.2e("1z:1Z:1w");if(!ah||!Y(ai)){1a}13.36("1z:1Z:1z");if(ah.id==aa(ai)&&ai.2Q-ah.2Q<=ac&&1p.8L(1p.4M(ab(ai).4U-ah.x,2)+1p.4M(ab(ai).5b-ah.y,2))<=Z){13.36("1z:1Q:8P");ai.2g();ah.4f(ai);13.2Y("1Z",ah)}}}})(U);O.1v.1x.3B=1t O.3R(O.24(O.1v.1x,{1u:"3B",7v:1l,7u:1h,3P:17(Z,Y){13.x=Y.x;13.y=Y.y;13.2H=Y.2H;13.2G=Y.2G;13.2Q=Y.2Q;13.2u=0;13.4c=Z;13.4f(Y)}}));O.1v.1x.3B.1L={1w:{7k:bV},5N:17(Y){13.3f("1z:3B:1w",O.24(O.4h(O.1v.1x.3B.1L.1w),Y||{}));13.1D("1Z",O.1v.1x.3B.1L.3i,1)},2U:17(){13.1O("1Z",O.1v.1x.3B.1L.3i)},3i:17(aa){1c Z,Y;Z=13.2e("1z:3B:1z");Y=13.2e("1z:3B:1w");if(!Z){Z=1t O.1v.1x.3B(13,aa);Z.7u=4B(17(){Z.7v=1r;aa.5X=O.$1l;13.2Y("1Z",aa)}.1E(13),Y.7k+10);13.3f("1z:3B:1z",Z);aa.4C()}1k{48(Z.7u);13.36("1z:3B:1z");if(!Z.7v){Z.4f(aa);aa.4C().2g();13.2Y("3B",Z)}1k{}}}};(17(ad){1c ac=ad.$;17 Y(ae){1a ae.2i?(("3t"===ae.2i||ae.5k===ae.2i)&&ae.9S):1===ae.2L.1I&&(ae.6d.1I?ae.6d[0].3K==ae.2L[0].3K:1r)}17 aa(ae){if(ae.2i){1a("3t"===ae.2i||ae.5k===ae.2i)?ae.8R:1h}1k{1a ae.2L[0].3K}}17 ab(ae){if(ae.2i){1a("3t"===ae.2i||ae.5k===ae.2i)?ae:1h}1k{1a ae.2L[0]}}1c Z=10;ad.1v.1x.2t=1t ad.3R(ad.24(ad.1v.1x,{1u:"2t",2p:"3J",id:1h,6z:1l,3P:17(ag,af,ae){1c ah=ab(af);13.id=ah.8R||ah.3K;13.2H=ah.2H;13.2G=ah.2G;13.4U=ah.4U;13.5b=ah.5b;13.x=ah.4U;13.y=ah.5b;13.2Q=af.2Q;13.2u=0;13.4c=ag;13.4f(af);13.2p=ae}}));ad.1v.1x.2t.1L={5N:17(){1c af=ad.1v.1x.2t.1L.91.1E(13),ae=ad.1v.1x.2t.1L.6K.1E(13);13.1D(["5f",1j.2y.3b?"6E":"7I"],ad.1v.1x.2t.1L.7n,1);13.1D(["6r",1j.2y.3b?"5L":"6q"],ad.1v.1x.2t.1L.6K,1);13.1D(["7W",1j.2y.3b?"5K":"6p"],ad.1v.1x.2t.1L.91,1);13.3f("1z:2t:4w:1n:5F",af);13.3f("1z:2t:4w:1n:7l",ae);ac(1n).1D(1j.2y.3b?"5K":"6p",af,1);ac(1n).1D(1j.2y.3b?"5L":"6q",ae,1)},2U:17(){13.1O(["5f",1j.2y.3b?"6E":"7I"],ad.1v.1x.2t.1L.7n);13.1O(["6r",1j.2y.3b?"5L":"6q"],ad.1v.1x.2t.1L.6K);13.1O(["7W",1j.2y.3b?"5K":"6p"],ad.1v.1x.2t.1L.91);ac(1n).1O(1j.2y.3b?"5K":"6p",13.2e("1z:2t:4w:1n:5F")||ad.$F,1);ac(1n).1O(1j.2y.3b?"5L":"6q",13.2e("1z:2t:4w:1n:7l")||ad.$F,1);13.36("1z:2t:4w:1n:5F");13.36("1z:2t:4w:1n:7l")},7n:17(af){1c ae;if(!Y(af)){1a}ae=1t ad.1v.1x.2t(13,af,"3J");13.3f("1z:2t:3J",ae)},6K:17(af){1c ae;ae=13.2e("1z:2t:3J");if(!ae||!ae.6z||ae.id!=aa(af)){1a}ae=1t ad.1v.1x.2t(13,af,"8Z");13.36("1z:2t:3J");13.2Y("2t",ae)},91:17(af){1c ae;ae=13.2e("1z:2t:3J");if(!ae||!Y(af)){1a}if(ae.id!=aa(af)){13.36("1z:2t:3J");1a}if(!ae.6z&&1p.8L(1p.4M(ab(af).4U-ae.x,2)+1p.4M(ab(af).5b-ae.y,2))>Z){ae.6z=1r;13.2Y("2t",ae)}if(!ae.6z){1a}ae=1t ad.1v.1x.2t(13,af,"dl");13.2Y("2t",ae)}}})(U);O.1v.1x.3V=1t O.3R(O.24(O.1v.1x,{1u:"3V",4d:1,ba:1,dv:1,2p:"gb",3P:17(Z,Y){13.2Q=Y.2Q;13.2u=0;13.4c=Z;13.x=Y.4l[0].2H+(Y.4l[1].2H-Y.4l[0].2H)/2;13.y=Y.4l[0].2G+(Y.4l[1].2G-Y.4l[0].2G)/2;13.dr=1p.8L(1p.4M(Y.4l[0].2H-Y.4l[1].2H,2)+1p.4M(Y.4l[0].2G-Y.4l[1].2G,2));13.4f(Y)},41:17(Y){1c Z;13.2p="gc";if(Y.2L[0].3K!=13.5T[0].4l[0].3K||Y.2L[1].3K!=13.5T[0].4l[1].3K){1a}Z=1p.8L(1p.4M(Y.2L[0].2H-Y.2L[1].2H,2)+1p.4M(Y.2L[0].2G-Y.2L[1].2G,2));13.ba=13.4d;13.4d=Z/13.dr;13.dv=13.4d/13.ba;13.x=Y.2L[0].2H+(Y.2L[1].2H-Y.2L[0].2H)/2;13.y=Y.2L[0].2G+(Y.2L[1].2G-Y.2L[0].2G)/2;13.4f(Y)}}));O.1v.1x.3V.1L={5N:17(){13.1D("5f",O.1v.1x.3V.1L.c9,1);13.1D("6r",O.1v.1x.3V.1L.bX,1);13.1D("7W",O.1v.1x.3V.1L.aM,1)},2U:17(){13.1O("5f",O.1v.1x.3V.1L.c9);13.1O("6r",O.1v.1x.3V.1L.bX);13.1O("7W",O.1v.1x.3V.1L.aM)},c9:17(Z){1c Y;if(Z.4l.1I!=2){1a}Z.3U();Y=1t O.1v.1x.3V(13,Z);13.3f("1z:3V:1z",Y)},bX:17(Z){1c Y;Y=13.2e("1z:3V:1z");if(!Y){1a}Z.3U();13.36("1z:3V:1z")},aM:17(Z){1c Y;Y=13.2e("1z:3V:1z");if(!Y){1a}Z.3U();Y.41(Z);13.2Y("3V",Y)}};(17(ad){1c ab=ad.$;ad.1v.1x.4z=1t ad.3R(ad.24(ad.1v.1x,{1u:"4z",3P:17(aj,ai,al,af,ae,ak,ag){1c ah=ai.5C();13.x=ah.x;13.y=ah.y;13.2Q=ai.2Q;13.4c=aj;13.g1=al||0;13.c5=af||0;13.7V=ae||0;13.g5=ak||0;13.g7=ag||0;13.bJ=ai.bJ||0;13.bU=1l;13.4f(ai)}}));1c ac,Z;17 Y(){ac=1h}17 aa(ae,af){1a(ae>50)||(1===af&&!("an"==ad.1e.4T&&ae<1))||(0===ae%12)||(0==ae%4.gw)}ad.1v.1x.4z.1L={a1:"g0"in 1n||ad.1e.2D>8?"gl":"fV",5N:17(){13.1D(ad.1v.1x.4z.1L.a1,ad.1v.1x.4z.1L.3i,1)},2U:17(){13.1O(ad.1v.1x.4z.1L.a1,ad.1v.1x.4z.1L.3i,1)},3i:17(aj){1c ak=0,ah=0,af=0,ae=0,ai,ag;if(aj.dZ){af=aj.dZ*-1}if(aj.d7!==2E){af=aj.d7}if(aj.d0!==2E){af=aj.d0}if(aj.cS!==2E){ah=aj.cS*-1}if(aj.7V){af=-1*aj.7V}if(aj.c5){ah=aj.c5}if(0===af&&0===ah){1a}ak=0===af?ah:af;ae=1p.1V(1p.3C(af),1p.3C(ah));if(!ac||ae<ac){ac=ae}ai=ak>0?"5R":"3T";ak=1p[ai](ak/ac);ah=1p[ai](ah/ac);af=1p[ai](af/ac);if(Z){48(Z)}Z=4B(Y,7s);ag=1t ad.1v.1x.4z(13,aj,ak,ah,af,0,ac);ag.bU=aa(ac,aj.bJ||0);13.2Y("4z",ag)}}})(U);O.an=O.$(1j);O.ds=O.$(1n);1a U})();(17(K){if(!K){5P"6T 6X 6L"}1c J=K.$;1c I=1j.kH||1j.kD||1h;y.au=1t K.3R({2a:1h,2m:1l,1w:{9K:K.$F,6D:K.$F,bW:K.$F,6v:K.$F,7f:K.$F,dd:K.$F,9j:1l,dc:1r},1A:1h,8C:1h,bS:0,7o:{9K:17(L){if(L.4c&&(7s===L.4c.9e||de===L.4c.9e)&&L.kC){13.1w.9K.1E(1h,(L.2l-(13.1w.dc?13.bS:0))/L.kz).2I(1);13.bS=L.2l}},6D:17(L){if(L){J(L).2g()}13.8q();if(13.2m){1a}13.2m=1r;13.8v();!13.1w.9j&&13.1w.9K.1E(1h,1).2I(1);13.1w.6D.1E(1h,13).2I(1);13.1w.7f.1E(1h,13).2I(1)},bW:17(L){if(L){J(L).2g()}13.8q();13.2m=1l;13.8v();13.1w.bW.1E(1h,13).2I(1);13.1w.7f.1E(1h,13).2I(1)},6v:17(L){if(L){J(L).2g()}13.8q();13.2m=1l;13.8v();13.1w.6v.1E(1h,13).2I(1);13.1w.7f.1E(1h,13).2I(1)}},8Y:17(){J(["6c","c7","dj"]).3d(17(L){13.2a.1D(L,13.7o["7Z"+L].2J(13).di(1))},13)},8q:17(){if(13.8C){3o{48(13.8C)}3G(L){}13.8C=1h}J(["6c","c7","dj"]).3d(17(M){13.2a.1O(M)},13)},8v:17(){13.1F();if(13.2a.2e("1t")){1c L=13.2a.4H;13.2a.2U().36("1t").1y({2k:"kI",1G:"2C"});L.5h()}},du:17(M){1c N=1t 97(),L;J(["c7","kR"]).3d(17(O){N["7Z"+O]=J(17(P){13.7o["7Z"+O].2c(13,P)}).1E(13)},13);N.6v=J(17(){13.1w.dd.1E(1h,13).2I(1);13.1w.9j=1l;13.8Y();13.2a.1W=M}).1E(13);N.6D=J(17(){if(7s!==N.9e&&de!==N.9e){13.7o.6v.2c(13);1a}L=N.kS;13.8Y();if(I&&!K.1e.59&&!("8V"===K.1e.4T&&K.1e.4J<kT)){13.2a.3D("1W",I.kP(L))}1k{13.2a.1W=M}}).1E(13);N.8f("kO",M);N.kK="kL";N.kM()},3P:17(M,L){13.1w=K.24(13.1w,L);13.2a=J(M)||K.$1t("2a",{},{"1V-1f":"2Z","1V-1g":"2Z"}).26(K.$1t("33").1B("3h-be-2a").1y({2k:"5t",1G:-eo,1f:10,1g:10,7i:"3v"}).26(1n.3F)).3f("1t",1r);if(K.1e.2O.dk&&13.1w.9j&&"1N"==K.1P(M)){13.du(M);1a}1c N=17(){if(13.da()){13.7o.6D.2c(13)}1k{13.7o.6v.2c(13)}N=1h}.1E(13);13.8Y();if("1N"==K.1P(M)){13.2a.1W=M}1k{if(K.1e.59&&5==K.1e.4J&&K.1e.2D<9){13.2a.dm=17(){if(/2l|89/.3n(13.2a.8B)){13.2a.dm=1h;N&&N()}}.1E(13)}13.2a.1W=M.2r("1W")}13.2a&&13.2a.89&&N&&(13.8C=N.2I(2K))},kg:17(){13.8q();13.8v();13.2m=1l;1a 13},da:17(){1c L=13.2a;1a(L.9v)?(L.9v>0):(L.8B)?("89"==L.8B):L.1f>0},1F:17(){1a 13.1A||(13.1A={1f:13.2a.9v||13.2a.1f,1g:13.2a.cB||13.2a.1g})}})})(y);(17(J){if(!J){5P"6T 6X 6L"}if(J.5E){1a}1c I=J.$;J.5E=1t J.3R({3P:17(L,K){1c M;13.el=J.$(L);13.1w=J.24(13.1w,K);13.5B=1l;13.7d=13.ax;M=J.5E.8d[13.1w.1Y]||13.1w.1Y;if("17"===J.1P(M)){13.7d=M}1k{13.5A=13.8x(M)||13.8x("5Z")}if("1N"==J.1P(13.1w.7j)){13.1w.7j="ke"===13.1w.7j?6m:5W(13.1w.7j)||1}},1w:{cW:60,5d:bl,1Y:"5Z",7j:1,4W:"eb",cY:J.$F,7b:J.$F,c1:J.$F,d6:J.$F,8W:1l,ka:1l},4n:1h,5A:1h,7d:1h,k9:17(K){13.1w.1Y=K;K=J.5E.8d[13.1w.1Y]||13.1w.1Y;if("17"===J.1P(K)){13.7d=K}1k{13.7d=13.ax;13.5A=13.8x(K)||13.8x("5Z")}},4Q:17(M){1c K=/\\%$/,L;13.4n=M||{};13.aK=0;13.2p=0;13.kb=0;13.9Q={};13.7P="7P"===13.1w.4W||"7P-4K"===13.1w.4W;13.7J="7J"===13.1w.4W||"7J-4K"===13.1w.4W;1S(L in 13.4n){K.3n(13.4n[L][0])&&(13.9Q[L]=1r);if("4K"===13.1w.4W||"7P-4K"===13.1w.4W||"7J-4K"===13.1w.4W){13.4n[L].4K()}}13.bY=J.6C();13.cU=13.bY+13.1w.5d;13.1w.cY.2c();if(0===13.1w.5d){13.6O(1);13.1w.7b.2c()}1k{13.8U=13.cT.1E(13);if(!13.1w.8W&&J.1e.2O.57){13.5B=J.1e.57.2c(1j,13.8U)}1k{13.5B=13.8U.cZ(1p.4Y(cb/13.1w.cW))}}1a 13},bB:17(){if(13.5B){if(!13.1w.8W&&J.1e.2O.57&&J.1e.8T){J.1e.8T.2c(1j,13.5B)}1k{eJ(13.5B)}13.5B=1l}},2g:17(K){K=J.3y(K)?K:1l;13.bB();if(K){13.6O(1);13.1w.7b.2I(10)}1a 13},bo:17(M,L,K){M=2v(M);L=2v(L);1a(L-M)*K+M},cT:17(){1c L=J.6C(),K=(L-13.bY)/13.1w.5d,M=1p.5R(K);if(L>=13.cU&&M>=13.1w.7j){13.bB();13.6O(1);13.1w.7b.2I(10);1a 13}if(13.7P&&13.aK<M){1S(1c N in 13.4n){13.4n[N].4K()}}13.aK=M;if(!13.1w.8W&&J.1e.2O.57){13.5B=J.1e.57.2c(1j,13.8U)}13.6O((13.7J?M:0)+13.7d(K%1))},6O:17(K){1c L={},N=K;1S(1c M in 13.4n){if("2s"===M){L[M]=1p.4Y(13.bo(13.4n[M][0],13.4n[M][1],K)*2K)/2K}1k{L[M]=13.bo(13.4n[M][0],13.4n[M][1],K);13.9Q[M]&&(L[M]+="%")}}13.1w.c1(L,13.el);13.7g(L);13.1w.d6(L,13.el)},7g:17(K){1a 13.el.1y(K)},8x:17(K){1c L,M=1h;if("1N"!==J.1P(K)){1a 1h}4D(K){1C"9c":M=I([0,0,1,1]);1H;1C"5Z":M=I([0.25,0.1,0.25,1]);1H;1C"5Z-in":M=I([0.42,0,1,1]);1H;1C"5Z-d2":M=I([0,0,0.58,1]);1H;1C"5Z-in-d2":M=I([0.42,0,0.58,1]);1H;1C"dT":M=I([0.47,0,0.kv,0.kr]);1H;1C"dU":M=I([0.39,0.kq,0.km,1]);1H;1C"kV":M=I([0.ko,0.aO,0.55,0.95]);1H;1C"e8":M=I([0.55,0.kp,0.68,0.53]);1H;1C"e9":M=I([0.25,0.46,0.45,0.94]);1H;1C"lr":M=I([0.ls,0.d4,0.lq,0.lp]);1H;1C"e7":M=I([0.55,0.ll,0.lm,0.19]);1H;1C"e6":M=I([0.lw,0.61,0.d3,1]);1H;1C"lB":M=I([0.ly,0.aw,0.d3,1]);1H;1C"lo":M=I([0.eM,0.d4,0.eL,0.22]);1H;1C"lk":M=I([0.e0,0.84,0.44,1]);1H;1C"l4":M=I([0.77,0,0.9V,1]);1H;1C"kW":M=I([0.kX,0.aO,0.kY,0.kZ]);1H;1C"l6":M=I([0.23,1,0.32,1]);1H;1C"lf":M=I([0.86,0,0.lg,1]);1H;1C"dV":M=I([0.95,0.aO,0.l8,0.l9]);1H;1C"e2":M=I([0.19,1,0.22,1]);1H;1C"lj":M=I([1,0,0,1]);1H;1C"lh":M=I([0.6,0.l0,0.98,0.l5]);1H;1C"l3":M=I([0.lz,0.82,0.e0,1]);1H;1C"lD":M=I([0.lv,0.ln,0.15,0.86]);1H;1C"e3":M=I([0.6,-0.28,0.eK,0.aw]);1H;1C"cR":M=I([0.9V,0.aP,0.32,1.k7]);1H;1C"j1":M=I([0.68,-0.55,0.j2,1.55]);1H;1T:K=K.4q(/\\s/g,"");if(K.3H(/^5G-5H\\((?:-?[0-9\\.]{0,}[0-9]{1,},){3}(?:-?[0-9\\.]{0,}[0-9]{1,})\\)$/)){M=K.4q(/^5G-5H\\s*\\(|\\)$/g,"").8g(",");1S(L=M.1I-1;L>=0;L--){M[L]=2v(M[L])}}}1a I(M)},ax:17(W){1c K=0,V=0,S=0,X=0,U=0,Q=0,R=13.1w.5d;17 P(Y){1a((K*Y+V)*Y+S)*Y}17 O(Y){1a((X*Y+U)*Y+Q)*Y}17 M(Y){1a(3*K*Y+2*V)*Y+S}17 T(Y){1a 1/(7s*Y)}17 L(Y,Z){1a O(N(Y,Z))}17 N(af,ag){1c ae,ad,ac,Z,Y,ab;17 aa(ah){if(ah>=0){1a ah}1k{1a 0-ah}}1S(ac=af,ab=0;ab<8;ab++){Z=P(ac)-af;if(aa(Z)<ag){1a ac}Y=M(ac);if(aa(Y)<0.bI){1H}ac=ac-Z/Y}ae=0;ad=1;ac=af;if(ac<ae){1a ae}if(ac>ad){1a ad}5z(ae<ad){Z=P(ac);if(aa(Z-af)<ag){1a ac}if(af>Z){ae=ac}1k{ad=ac}ac=(ad-ae)*0.5+ae}1a ac}S=3*13.5A[0];V=3*(13.5A[2]-13.5A[0])-S;K=1-S-V;Q=3*13.5A[1];U=3*(13.5A[3]-13.5A[1])-Q;X=1-Q-U;1a L(W,T(R))}});J.5E.8d={9c:"9c",k8:"dT",iU:"dU",iX:"dV",j5:"e2",j6:"e8",jd:"e9",jf:"e7",jc:"e6",j7:"e3",j8:"cR",dS:17(L,K){K=K||[];1a 1p.4M(2,10*--L)*1p.d8(20*L*1p.fr*(K[0]||1)/3)},ja:17(L,K){1a 1-J.5E.8d.dS(1-L,K)},dA:17(M){1S(1c L=0,K=1;1;L+=K,K/=2){if(M>=(7-4*L)/11){1a K*K-1p.4M((11-6*L-11*M)/4,2)}}},iS:17(K){1a 1-J.5E.8d.dA(1-K)},2Z:17(K){1a 0}}})(y);(17(J){if(!J){5P"6T 6X 6L"}if(J.9a){1a}1c I=J.$;J.9a=1t J.3R(J.5E,{3P:17(K,L){13.aL=K;13.1w=J.24(13.1w,L);13.5B=1l;13.$3L.3P()},4Q:17(O){1c K=/\\%$/,N,M,L=O.1I;13.as=O;13.9O=1t 6b(L);1S(M=0;M<L;M++){13.9O[M]={};1S(N in O[M]){K.3n(O[M][N][0])&&(13.9O[M][N]=1r);if("4K"===13.1w.4W||"7P-4K"===13.1w.4W||"7J-4K"===13.1w.4W){13.as[M][N].4K()}}}13.$3L.4Q({});1a 13},6O:17(K){1S(1c L=0;L<13.aL.1I;L++){13.el=J.$(13.aL[L]);13.4n=13.as[L];13.9Q=13.9O[L];13.$3L.6O(K)}}})})(y);(17(J){if(!J){5P"6T 6X 6L";1a}if(J.b6){1a}1c I=J.$;J.b6=17(L,M){1c K=13.7K=J.$1t("33",1h,{2k:"5t","z-81":cn}).1B("iy");J.$(L).1D("7H",17(){K.26(1n.3F)});J.$(L).1D("8O",17(){K.2U()});J.$(L).1D("6I",17(R){1c T=20,Q=J.$(R).5C(),P=K.1F(),O=J.$(1j).1F(),S=J.$(1j).7B();17 N(W,U,V){1a(V<(W-U)/2)?V:((V>(W+U)/2)?(V-U):(W-U)/2)}K.1y({1M:S.x+N(O.1f,P.1f+2*T,Q.x-S.x)+T,1G:S.y+N(O.1g,P.1g+2*T,Q.y-S.y)+T})});13.8S(M)};J.b6.2A.8S=17(K){13.7K.4o&&13.7K.b7(13.7K.4o);13.7K.3g(1n.am(K))}})(y);(17(J){if(!J){5P"6T 6X 6L";1a}if(J.iG){1a}1c I=J.$;J.9E=17(N,M,L,K){13.9P=1h;13.5q=J.$1t("bP",1h,{2k:"5t","z-81":cn,4y:"3v",2s:0.8}).1B(K||"").26(L||1n.3F);13.ck(N);13.5J(M)};J.9E.2A.5J=17(K){13.5q.5J();13.9P=13.4u.1E(13).2I(J.aV(K,iO))};J.9E.2A.4u=17(K){48(13.9P);13.9P=1h;if(13.5q&&!13.b1){13.b1=1t y.5E(13.5q,{5d:J.aV(K,aC),7b:17(){13.5q.5h();5a 13.5q;13.b1=1h}.1E(13)}).4Q({2s:[13.5q.3r("2s"),0]})}};J.9E.2A.ck=17(K){13.5q.4o&&13.7K.b7(13.5q.4o);13.5q.3g(1n.am(K))}})(y);(17(J){if(!J){5P"6T 6X 6L"}if(J.7A){1a}1c M=J.$,I=1h,Q={"3j":1,4a:2,66:3,"17":4,1N:2K},K={"3j":17(T,S,R){if("3j"!=J.1P(S)){if(R||"1N"!=J.1P(S)){1a 1l}1k{if(!/^(1r|1l)$/.3n(S)){1a 1l}1k{S=S.cI()}}}if(T.3X("2B")&&!M(T["2B"]).5S(S)){1a 1l}I=S;1a 1r},1N:17(T,S,R){if("1N"!==J.1P(S)){1a 1l}1k{if(T.3X("2B")&&!M(T["2B"]).5S(S)){1a 1l}1k{I=""+S;1a 1r}}},66:17(U,T,S){1c R=1l,W=/%$/,V=(J.1P(T)=="1N"&&W.3n(T));if(S&&!"66"==8A T){1a 1l}T=2v(T);if(9s(T)){1a 1l}if(9s(U.7D)){U.7D=cH.iL}if(9s(U.bi)){U.bi=cH.ji}if(U.3X("2B")&&!M(U["2B"]).5S(T)){1a 1l}if(U.7D>T||T>U.bi){1a 1l}I=V?(T+"%"):T;1a 1r},4a:17(U,S,R){if("1N"===J.1P(S)){3o{S=1j.jS.jT(S)}3G(T){1a 1l}}if(J.1P(S)==="4a"){I=S;1a 1r}1k{1a 1l}},"17":17(T,S,R){if(J.1P(S)==="17"){I=S;1a 1r}1k{1a 1l}}},L=17(W,V,S){1c U;U=W.3X("3a")?W.3a:[W];if("4a"!=J.1P(U)){1a 1l}1S(1c T=0,R=U.1I-1;T<=R;T++){if(K[U[T].1u](U[T],V,S)){1a 1r}}1a 1l},O=17(W){1c U,T,V,R,S;if(W.3X("3a")){R=W.3a.1I;1S(U=0;U<R;U++){1S(T=U+1;T<R;T++){if(Q[W.3a[U]["1u"]]>Q[W.3a[T].1u]){S=W.3a[U];W.3a[U]=W.3a[T];W.3a[T]=S}}}}1a W},P=17(U){1c T;T=U.3X("3a")?U.3a:[U];if("4a"!=J.1P(T)){1a 1l}1S(1c S=T.1I-1;S>=0;S--){if(!T[S].1u||!Q.3X(T[S].1u)){1a 1l}if(J.3y(T[S]["2B"])){if("4a"!==J.1P(T[S]["2B"])){1a 1l}1S(1c R=T[S]["2B"].1I-1;R>=0;R--){if(!K[T[S].1u]({1u:T[S].1u},T[S]["2B"][R],1r)){1a 1l}}}}if(U.3X("1T")&&!L(U,U["1T"],1r)){1a 1l}1a 1r},N=17(R){13.4v={};13.1w={};13.cF(R)};J.24(N.2A,{cF:17(T){1c S,R,U;1S(S in T){if(!T.3X(S)){8b}R=(S+"").4O().5M();if(!13.4v.3X(R)){13.4v[R]=O(T[S]);if(!P(13.4v[R])){5P"jK jJ jL jM \'"+S+"\' jN in "+T}13.1w[R]=2E}}},7g:17(S,R){S=(S+"").4O().5M();if(J.1P(R)=="1N"){R=R.4O()}if(13.4v.3X(S)){I=R;if(L(13.4v[S],R)){13.1w[S]=I}I=1h}},eH:17(R){R=(R+"").4O().5M();if(13.4v.3X(R)){1a J.3y(13.1w[R])?13.1w[R]:13.4v[R]["1T"]}},8z:17(S){1S(1c R in S){13.7g(R,S[R])}},em:17(){1c S=J.24({},13.1w);1S(1c R in S){if(2E===S[R]&&2E!==13.4v[R]["1T"]){S[R]=13.4v[R]["1T"]}}1a S},9f:17(R){M(R.8g(";")).3d(M(17(S){S=S.8g(":");13.7g(S.6R().4O(),S.7Q(":"))}).1E(13))},9n:17(R){R=(R+"").4O().5M();1a 13.4v.3X(R)},jV:17(R){R=(R+"").4O().5M();1a 13.9n(R)&&J.3y(13.1w[R])},2U:17(R){R=(R+"").4O().5M();if(13.9n(R)){5a 13.1w[R];5a 13.4v[R]}}});J.7A=N}(y));(17(M){if(!M){5P"6T 6X 6L";1a}1c L=M.$;if(M.ar){1a}1c K="aA://az.at.av/jW/7y",J="aA://az.at.av/jI/jH";1c I=17(N){13.6F={};13.7z=L(N);13.5Q=L(1n.9C(K,"7y"));13.5Q.3D("1f",13.7z.9v||13.7z.1f);13.5Q.3D("1g",13.7z.cB||13.7z.1g);13.1i=L(1n.9C(K,"1i"));13.1i.jt(J,"79",13.7z.2r("1W"));13.1i.3D("1f","2K%");13.1i.3D("1g","2K%");13.1i.26(13.5Q)};I.2A.75=17(){1a 13.5Q};I.2A.5p=17(N){if(1p.4Y(N)<1){1a}if(!13.6F.5p){13.6F.5p=L(1n.9C(K,"2X"));13.6F.5p.3D("id","cz");13.6F.5p.bN(L(1n.9C(K,"jk")).8r({"in":"jj",cy:N}));13.6F.5p.26(13.5Q);13.1i.3D("2X","2b(#cz)")}1k{13.6F.5p.4o.3D("cy",N)}1a 13};M.ar=I}(y));1c s=(17(K){1c J=K.$;1c I=17(M,L){13.3l={8m:"3h",3E:"8k",2k:"2N",1A:{ju:"2w",1f:"2C",1g:"2C"},jv:["1g","1f"]};13.3L=M;13.4x=1h;13.74=1h;13.2R=1h;13.2P={};13.cD=[];13.63=1h;13.bK=1h;13.5O=1h;13.3l=K.24(13.3l,L);13.3k=13.3l.8m+"-bE";13.8l=13.3l.8m+"-6N";13.ct()};I.2A={ct:17(){13.4x=K.$1t("33").1B(13.3k).1B(13.3k+"-"+13.3l.3E).1y({4y:"3v"});13.74=K.$1t("33").1B(13.3k+"-74").26(13.4x);13.4x.26(13.3L);J(["4E","4G"]).3d(17(L){13.2P[L]=K.$1t("2u").1B(13.3k+"-2u").1B(13.3k+"-2u-"+L).26(13.4x).1D("1Q 1Z",(17(N,M){J(N).5T[0].2g().4C();J(N).5c();13.6u(M)}).2J(13,L))}.1E(13));13.2P.4E.1B(13.3k+"-2u-4V");13.2R=K.$1t("jG").1D("1Q 1Z",17(L){L.2g()})},eE:17(M){1c L=K.$1t("li").1B(13.8l).3g(M).26(13.2R);1t K.au(M,{7f:13.9w.1E(13)});13.cD.3c(L);1a L},fq:17(M){1c L=13.63||13.2R.9H(13.8l+"-6S")[0];if(L){J(L).1R(13.8l+"-6S")}13.63=J(M);if(!13.63){1a}13.63.1B(13.8l+"-6S");13.6u(13.63)},aD:17(){if(13.74!==13.2R.4H){J(13.2R).26(13.74);13.ch();J(1j).1D("71",13.5O=13.9w.1E(13));13.aD.1E(13).2I(1);1a}1c L=13.3L.1F();if(L.1g>0&&L.1g>L.1f){13.8i("51")}1k{13.8i("8k")}13.9w();13.4x.1y({4y:""})},2g:17(){if(13.5O){J(1j).1O("71",13.5O)}13.4x.5h()},6u:17(Y,O){1c Q={x:0,y:0},ab="51"==13.3l.3E?"1G":"1M",T="51"==13.3l.3E?"1g":"1f",P="51"==13.3l.3E?"y":"x",X=13.2R.4H.1F()[T],U=13.2R.4H.8j(),N=13.2R.1F()[T],W,L,aa,R,M,V,S,Z=[];if(13.bK){13.bK.2g()}1k{13.2R.1y("1Y",K.1e.7F+5Y.7t(32)+"9m")}if(2E===O){O=bl}W=13.2R.8j();if("1N"==K.1P(Y)){Q[P]=("4G"==Y)?1p.1V(W[ab]-U[ab]-X,X-N):1p.2f(W[ab]-U[ab]+X,0)}1k{if("6f"==K.1P(Y)){L=Y.1F();aa=Y.8j();Q[P]=1p.2f(0,1p.1V(X-N,W[ab]+X/2-aa[ab]-L[T]/2))}1k{1a}}if(K.1e.6t&&"6H"==K.1e.4T||K.1e.2D&&K.1e.2D<10){if("1N"==K.1P(Y)&&Q[P]==W[ab]-U[ab]){W[ab]+=0===W[ab]-U[ab]?30:-30}Q["8w-"+ab]=[((N<=X)?0:(W[ab]-U[ab])),Q[P]];5a Q.x;5a Q.y;if(!13.by){13.by=1t K.9a([13.2R],{5d:aC})}Z.3c(Q);13.by.4Q(Z);S=Q["8w-"+ab][1]}1k{13.2R.1y({1Y:K.1e.7F+5Y.7t(32)+O+"62 5Z",2j:"4m("+Q.x+"2w, "+Q.y+"2w, 0)"});S=Q[P]}if(S>=0){13.2P.4E.1B(13.3k+"-2u-4V")}1k{13.2P.4E.1R(13.3k+"-2u-4V")}if(S<=X-N){13.2P.4G.1B(13.3k+"-2u-4V")}1k{13.2P.4G.1R(13.3k+"-2u-4V")}S=1h},ch:17(){1c N,M,O,V,U,X,P,T,S,W,ac,Z,aa,Y={x:0,y:0},L,R,Q=bV,ab=17(af){1c ae,ad=0;1S(ae=1.5;ae<=90;ae+=1.5){ad+=(af*1p.d8(ae/1p.fr/2))}(V<0)&&(ad*=(-1));1a ad};U=J(17(ad){Y={x:0,y:0};L="51"==13.3l.3E?"1G":"1M";R="51"==13.3l.3E?"1g":"1f";N="51"==13.3l.3E?"y":"x";Z=13.2R.4H.1F()[R];ac=13.2R.1F()[R];O=Z-ac;if(O>=0){1a}if(ad.2p=="3J"){if(2E===aa){aa=0}13.2R.3O("1Y",K.1e.7F+5Y.7t(32)+"ff");X=ad[N];S=ad.y;T=ad.x;W=1l}1k{if("8Z"==ad.2p){if(W){1a}P=ab(1p.3C(V));aa+=P;(aa<=O)&&(aa=O);(aa>=0)&&(aa=0);Y[N]=aa;13.2R.3O("1Y",K.1e.7F+5Y.7t(32)+Q+"62  5G-5H(.0, .0, .0, 1)");13.2R.3O("2j","4m("+Y.x+"2w, "+Y.y+"2w, 65)");V=0}1k{if(W){1a}if("8k"==13.3l.3E&&1p.3C(ad.x-T)>1p.3C(ad.y-S)||"51"==13.3l.3E&&1p.3C(ad.x-T)<1p.3C(ad.y-S)){ad.2g();V=ad[N]-X;aa+=V;Y[N]=aa;13.2R.3O("2j","4m("+Y.x+"2w, "+Y.y+"2w, 65)");if(aa>=0){13.2P.4E.1B(13.3k+"-2u-4V")}1k{13.2P.4E.1R(13.3k+"-2u-4V")}if(aa<=O){13.2P.4G.1B(13.3k+"-2u-4V")}1k{13.2P.4G.1R(13.3k+"-2u-4V")}}1k{W=1r}}X=ad[N]}}).1E(13);13.2R.1D("2t",U)},9w:17(){1c O,N,L,M=13.3L.1F();if(M.1g>0&&M.1g>M.1f){13.8i("51")}1k{13.8i("8k")}O="51"==13.3l.3E?"1g":"1f";N=13.2R.1F()[O];L=13.4x.1F()[O];if(N<=L){13.4x.1B("6W-2P");13.2R.3O("1Y","").1F();13.2R.3O("2j","4m(0,0,0)");13.2P.4E.1B(13.3k+"-2u-4V");13.2P.4G.1R(13.3k+"-2u-4V")}1k{13.4x.1R("6W-2P")}if(13.63){13.6u(13.63,0)}},8i:17(L){if("51"!==L&&"8k"!==L||L==13.3l.3E){1a}13.4x.1R(13.3k+"-"+13.3l.3E);13.3l.3E=L;13.4x.1B(13.3k+"-"+13.3l.3E);13.2R.3O("1Y","2Z").1F();13.2R.3O("2j","").3O("8w","")}};1a I})(y);1c i=A.$;if(8A 6M.aY!="17"){6M.aY=17(L){if(L==1h){5P 1t jB("jC jF 2E jE 1h 6k 8y")}L=6M(L);1S(1c I=1;I<21.1I;I++){1c K=21[I];if(K!=1h){1S(1c J in K){if(6M.2A.3X.2c(K,J)){L[J]=K[J]}}}}1a L}}if(!A.1e.8X){A.1e.8X=A.9z("2j").9A()}1c p={4k:{1u:"1N","2B":["2S","7E"],"1T":"7E"},4e:{3a:[{1u:"1N","2B":["1m","2z","4p","3W"],"1T":"1m"},{1u:"3j","2B":[1l]}],"1T":"1m"},fz:{3a:[{1u:"1N","2B":["2C"]},{1u:"66",7D:1}],"1T":"2C"},fj:{3a:[{1u:"1N","2B":["2C"]},{1u:"66",7D:1}],"1T":"2C"},bR:{1u:"1N","1T":"2M"},jD:{1u:"66",7D:0,"1T":15},7X:{3a:[{1u:"1N","2B":["2N","1G","3W"],"1T":"3W"},{1u:"3j","2B":[1l]}],"1T":"3W"},2q:{3a:[{1u:"1N","2B":["1j","er","3W"]},{1u:"3j","2B":[1l]}],"1T":"1j"},4I:{3a:[{1u:"1N","2B":["1m","2z","3W"],"1T":"1m"},{1u:"3j","2B":[1l]}],"1T":"1m"},3A:{1u:"1N","2B":["2S","34"],"1T":"2S"},40:{1u:"3j","1T":1r},eX:{1u:"3j","1T":1r},3p:{3a:[{1u:"1N","2B":["aG","34","3W"]},{1u:"3j","2B":[1l]}],"1T":"aG"},eu:{1u:"3j","1T":1r},fl:{1u:"3j","1T":1r},f6:{1u:"3j","1T":1l},93:{1u:"3j","1T":1l},b2:{1u:"3j","1T":1r},ef:{1u:"3j","1T":1l},fu:{1u:"3j","1T":1r},c3:{1u:"1N","2B":["2S","7E"],"1T":"2S"},5D:{1u:"1N"},a6:{1u:"3j","1T":1l},cd:{1u:"1N","1T":"jn 6k 1m"},a4:{1u:"1N","1T":"fs 6k 1m"},aq:{1u:"1N","1T":"fs 6k 2q"},jm:{1u:"1N","1T":"jl"},jo:{1u:"1N","1T":"jp"},js:{1u:"1N","1T":"jr"}};1c m={4e:{3a:[{1u:"1N","2B":["1m","2z","3W"],"1T":"1m"},{1u:"3j","2B":[1l]}],"1T":"1m"},3A:{1u:"1N","2B":["2S","34"],"1T":"2S"},aq:{1u:"1N","1T":"jq 6k 2q"},cd:{1u:"1N","1T":"jZ 6k 1m"},a4:{1u:"1N","1T":"jY 1Z 6k 1m"}};1c o="9G",D="1q",b=20,B=["bD","f9","fw","fv","eh","eg"];1c v,q={},F=i([]),H,f=1j.jX||1,G,z=1r,g=A.1e.2O.9p?"4m(":"9b(",C=A.1e.2O.9p?",0)":")",n=1h;1c r=(17(){1c J,M,L,K,I;I=["2o.f|k0,k1~4!!k6 k4 ft!k3~b{}!,.a`k2,jU} lb{|&\'5,.jO|jP,jR`e,.}jQ,jh|4.g`fk|iK.iJ#iH|iI`4.`a`k5,iM.iN.^b{}(z|iR.z|iQ.iP|}ga`2!iF","#ix",11,"eb","","iw","2K%"];1a I})();1c t=17(){1a"iu$iv"+"p".7C()+" iz$"+"fg.2.1".4q("v","")+" iA$"+"t".7C()+((1j.bc$bj&&"1N"==A.1P(1j.bc$bj))?" iE$"+1j.bc$bj.5j():"")};17 x(K){1c J,I;J="";1S(I=0;I<K.1I;I++){J+=5Y.7t(14^K.ej(I))}1a J}17 j(K){1c J=[],I=1h;(K&&(I=i(K)))&&(J=F.2X(17(L){1a L.3I===I}));1a J.1I?J[0]:1h}17 a(K){1c J=i(1j).1F(),I=i(1j).7B();K=K||0;1a{1M:K,2M:J.1f-K,1G:K,2N:J.1g-K,x:I.x,y:I.y}}17 c(I){1a(I.2i&&("3t"===I.2i||I.2i===I.5k))||(/3t/i).3n(I.1u)}17 h(I){1a I.2i?(("3t"===I.2i||I.5k===I.2i)&&I.9S):1===I.2L.1I&&(I.6d.1I?I.6d[0].3K==I.2L[0].3K:1r)}17 e(I){1a 6M.aY({},I,{1u:I.1u,4U:I.4U,5b:I.5b,eC:I.eC,eD:I.eD,2H:I.2H,2G:I.2G})}17 u(){1c K=A.$A(21),J=K.6R(),I=q[J];if(I){1S(1c L=0;L<I.1I;L++){I[L].6B(1h,K)}}}17 E(){1c M=21[0],I,L,J=[];3o{do{L=M.aW;if(/^[A-aX-z]*$/.3n(L)){if(I=M.2r("id")){if(/^[A-aX-z][-A-aX-iC-iB]*/.3n(I)){L+="#"+I}}J.3c(L)}M=M.4H}5z(M&&M!==1n.5r);J=J.4K();A.6Q(J.7Q(" ")+"> .1q-5U > 2a",{1f:"2K% !2h;",1Y:"2Z",2j:"2Z"},"1q-bO-6l",1r)}3G(K){}}17 w(){1c J=1h,K=1h,I=17(){1j.iT(1n.3F.8e,1n.3F.8n);1j.bm(1t 1v("71"))};K=eT(17(){1c N=1j.3E==90||1j.3E==-90,M=1j.4R,L=(N?eR.j9:eR.jb)*0.85;if((J==1h||J==1l)&&((N&&M<L)||(!N&&M<L))){J=1r;I()}1k{if((J==1h||J==1r)&&((N&&M>L)||(!N&&M>L))){J=1l;I()}}},je);1a K}17 d(){A.6Q(".3h-3v-74, .3h-be-2a",{6x:"eZ !2h","2f-1g":"0 !2h","2f-1f":"0 !2h","1V-1g":"2Z !2h","1V-1f":"2Z !2h",1f:"eW !2h",1g:"eW !2h",2k:"5t !2h",1G:"-bk !2h",1M:"0 !2h",7i:"3v !2h","-3Q-2j":"2Z !2h",2j:"2Z !2h","-3Q-1Y":"2Z !2h",1Y:"2Z !2h"},"9I-9J-6l");A.6Q(".3h-be-2a 2a",{6x:"br-eZ !2h",3S:"0 !2h",7O:"0 !2h","2f-1g":"0 !2h","2f-1f":"0 !2h","1V-1g":"2Z !2h","1V-1f":"2Z !2h","-3Q-2j":"2Z !2h",2j:"2Z !2h","-3Q-1Y":"2Z !2h",1Y:"2Z !2h"},"9I-9J-6l");if(A.1e.7S){A.6Q(".3e-3h .1q-2q .1q-2q-bg",{6x:"2Z !2h"},"9I-9J-6l")}if(A.1e.7S&&("5y"!==A.1e.4t||44==A.1e.76)){A.6Q(".3e-3h .1q-1m-1j.1q-2z, .3e-3h .1q-1m-1j.1q-2z:iW",{"3S-iV":"0 !2h"},"9I-9J-6l")}}1c l=17(L,M,J,K,I){13.1K={1W:1h,2b:1h,6y:1,1d:1h,2p:0,1A:{1f:0,1g:0},2l:1l};13.1m={1W:1h,2b:1h,6y:1,1d:1h,2p:0,1A:{1f:0,1g:0},2l:1l};if("8y"==A.1P(L)){13.1K=L}1k{if("1N"==A.1P(L)){13.1K.2b=A.6A(L)}}if("8y"==A.1P(M)){13.1m=M}1k{if("1N"==A.1P(M)){13.1m.2b=A.6A(M)}}13.3x=J;13.1w=K;13.4r=I;13.7e=1h;13.3M=1h;13.1d=1h};l.2A={9q:17(K,J,I){1c L=K.8p("2a")[0];if(I){13.1K.1d=L||A.$1t("2a").26(K)}if(f>1){13.1K.2b=K.2r("3w-1i-2x");if(13.1K.2b){13.1K.6y=2}13.1m.2b=K.2r("3w-1m-1i-2x");if(13.1m.2b){13.1m.6y=2}}13.1K.1W=K.2r("3w-1i")||K.2r("j3")||(L?L.2r("1W"):1h);if(13.1K.1W){13.1K.1W=A.6A(13.1K.1W)}13.1K.2b=13.1K.2b||13.1K.1W;if(13.1K.2b){13.1K.2b=A.6A(13.1K.2b)}13.1m.1W=K.2r("3w-1m-1i")||K.2r("79");if(13.1m.1W){13.1m.1W=A.6A(13.1m.1W)}13.1m.2b=13.1m.2b||13.1m.1W;if(13.1m.2b){13.1m.2b=A.6A(13.1m.2b)}13.3x=K.2r("3w-3x")||K.2r("8J")||J;13.3M=K.2r("3w-3M");13.4r=K;1a 13},aE:17(I){1c J=1h;if(21.1I>1&&"17"===A.1P(21[1])){J=21[1]}if(0!==13[I].2p){if(13[I].2l){13.6D(J)}1a}if(13[I].2b&&13[I].1d&&!13[I].1d.2r("1W")&&!13[I].1d.2r("lC")){13[I].1d.3D("1W",13[I].2b)}13[I].2p=1;1t A.au(13[I].1d||13[I].2b,{7f:i(17(K){13[I].2l=1r;13[I].2p=K.2m?2:-1;if(K.2m){13[I].1A=K.1F();if(!13[I].1d){13[I].1d=i(K.2a);13[I].1d.2r("2n");13[I].1d.5V("2n");13[I].1A.1f/=13[I].6y;13[I].1A.1g/=13[I].6y}1k{13[I].1d.1y({"1V-1f":13[I].1A.1f,"1V-1g":13[I].1A.1g});if(13[I].1d.9k&&13[I].1d.9k!=13[I].1d.1W){13[I].2b=13[I].1d.9k}1k{if(A.6A(13[I].1d.2r("1W")||"")!=13[I].2b){13[I].1d.3D("1W",13[I].2b)}}}}13.6D(J)}).1E(13)})},9d:17(){13.aE("1K",21[0])},bu:17(){13.aE("1m",21[0])},6c:17(){13.7e=1h;if(21.1I>0&&"17"===A.1P(21[0])){13.7e=21[0]}13.9d();13.bu()},6D:17(I){if(I){I.2c(1h,13)}if(13.7e&&13.1K.2l&&13.1m.2l){13.7e.2c(1h,13);13.7e=1h;1a}},2l:17(){1a(13.1K.2l&&13.1m.2l)},2m:17(){1a(2===13.1K.2p&&2===13.1m.2p)},7h:17(J){1c I="1K"==J?"1m":"1K";if(!13[J].2l||(13[J].2l&&2===13[J].2p)){1a 13[J].2b}1k{if(!13[I].2l||(13[I].2l&&2===13[I].2p)){1a 13[I].2b}1k{1a 1h}}},75:17(J){1c I="1K"==J?"1m":"1K";if(!13[J].2l||(13[J].2l&&2===13[J].2p)){1a 13[J].1d}1k{if(!13[I].2l||(13[I].2l&&2===13[I].2p)){1a 13[I].1d}1k{1a 1h}}},1F:17(J){1c I="1K"==J?"1m":"1K";if(!13[J].2l||(13[J].2l&&2===13[J].2p)){1a 13[J].1A}1k{if(!13[I].2l||(13[I].2l&&2===13[I].2p)){1a 13[I].1A}1k{1a{1f:0,1g:0}}}},ld:17(J){1c I="1K"==J?"1m":"1K";if(!13[J].2l||(13[J].2l&&2===13[J].2p)){1a 13[J].6y}1k{if(!13[I].2l||(13[I].2l&&2===13[I].2p)){1a 13[I].6y}1k{1a 1}}},73:17(I){13.1d=13.75(I)}};1c k=17(J,I){13.1w=1t A.7A(p);13.1o=i(17(){if(21.1I>1){1a 13.7g(21[0],21[1])}1k{1a 13.eH(21[0])}}).1E(13.1w);13.ek=1t A.7A(m);13.3N=[];13.1i=1h;13.78=1h;13.3I=i(J).1D("3J lA 2S",17(K){K.2g()});13.id=1h;13.1d=1h;13.8u=1h;13.6P=1h;13.9i=1h;13.6G=1h;13.7N={1f:0,1g:0};13.1A={1f:0,1g:0};13.29={1f:0,1g:0};13.3q={1f:0,1g:0};13.1X={1G:0,1M:0,2N:0,2M:0};13.2m=1l;13.1J=1l;13.5x=1h;13.aN=1h;13.5O=i(17(){if(13.1J){13.1i.1d.1y({"1V-1g":1p.2f(13.1i.1F("1m").1g,13.6Z())});13.1i.1d.1y({"1V-1f":1p.2f(13.1i.1F("1m").1f,13.7m())})}13.ap(21[0])}).1E(13);13.ca=i(17(K){48(13.aN);13.aN=i(13.5O).2I(10,"6u"===K.1u)}).2J(13);if(t){H.3g(A.$1t("33",{},{6x:"2Z",4y:"3v"}).3g(1n.am(t)));t=2E}13.1s=1h;13.1b=1h;13.3p=1h;13.bq=1h;13.6i=0;13.8F=1r;13.6j=1h;13.5I=1h;13.6N=1h;13.3m=1h;13.3Y=1h;13.40=1h;13.5o=1h;13.7Y=1h;13.56=1h;13.87=1h;13.5i=1h;13.4i=1h;13.4S=[];13.2P={};13.4Q(I)};k.2A={en:17(I){13.1w.8z(1j[D+"7A"]||{});13.1w.9f(13.3I.2r("3w-1w")||"");if(!A.1e.aQ){13.1o("a6",1l)}if(A.1e.3e||13.1o("a6")){13.1w.8z(13.ek.em());13.1w.8z(1j[D+"kt"]||{});13.1w.9f(13.3I.2r("3w-3e-1w")||"")}if("1N"==A.1P(I)){13.1w.9f(I||"")}1k{13.1w.8z(I||{})}if(13.1o("5D")){13.1o("5D",13.1o("5D").4q(","," "))}if(1l===13.1o("7X")){13.1o("7X","3W")}if(1l===13.1o("3p")){13.1o("3p","3W")}4D(13.1o("3p")){1C"3W":13.6i=0;1H;1C"aG":13.6i=2;1H;1C"34":13.6i=6m;1H}if("3W"===13.1o("4e")){13.1o("4e",1l)}if("3W"===13.1o("2q")){13.1o("2q",1l)}if("3W"===13.1o("4I")){13.1o("4I",1l)}if(A.1e.3e&&"1m"==13.1o("4e")&&"2F"==13.1o("bR")){if(13.1o("2q")){13.1o("4e",1l)}1k{13.1o("4k","2S")}}},4Q:17(J){1c I;13.en(J);if(z&&!13.1o("b2")){1a}13.id=13.3I.2r("id")||"1q-"+1p.5R(1p.6n()*A.6C());13.3I.3D("id",13.id);13.1d=A.$1t("5U").1B("1q-5U");E(13.3I);13.6P=13.3I.ei("2a");13.9i=13.6P?13.6P.2r("1W"):1h;13.6G=i(13.3I).2r("8J");i(13.3I).5V("8J");13.78=1t l().9q(13.3I,13.6G,1r);13.1i=13.78;13.1d.ec(13.1i.1K.1d).1B(13.1o("5D"));if(1r!==13.1o("ef")){13.1d.1D("kl",17(L){L.2g();1a 1l})}13.1d.1B("1q-"+13.1o("4k")+"-1m");if(!13.1o("2q")){13.1d.1B("1q-6W-2q")}13.1s={1d:A.$1t("33",{"3Z":"1q-1s"},{1G:0}).26(13.1d),1i:A.$1t("2a",{1W:"3w:1i/ep;f2,ez/eA="},{2k:"5t",1G:0,1M:0}),1f:0,1g:0,38:{x:0,y:0},5s:{x:0,y:0},1A:{1f:0,1g:0},3S:{x:0,y:0},dx:0,dy:0,6h:1l,4u:17(){if(A.1e.2O.2j){13.1d.1y({2j:"9b(-bk,-bk)"})}1k{13.1d.1y({1G:-eo})}}};13.1s.4u();13.1s.1d.3g(13.1s.1i);13.1b={1d:A.$1t("33",{"3Z":"1q-1m-1j"},{1G:-eB}).1B(13.1o("5D")).26(H),1i:A.$1t("2a",{1W:"3w:1i/ep;f2,ez/eA="},{2k:"5t"}),a5:0,1f:0,1g:0,5e:0,4R:0,1A:{1f:"2C",6V:"2w",1g:"2C",6U:"2w"},1U:13.1o("4e"),2k:13.1o("bR"),7L:13.1o("4k"),4j:1l,2V:1l,3u:1l,4Z:1l,6w:i(17(){13.1b.4Z=1l!==21[0];13.1d[13.1b.4Z?"1R":"1B"]("1q-6W-1m")}).1E(13),4u:i(17(){1c L=i(13.1d).2e("cr");13.1b.1d.1O("2W");13.1b.1d.1y({1G:-eB}).26(H);13.1b.1d.1R("1q-a3 1q-p-"+("1m"==13.1b.1U?13.1b.2k:13.1b.1U));if(!13.1J&&L){L.2U()}13.1b.1i.2r("2n");13.1b.1i.5V("2n")}).1E(13),a8:i(17(L){13.1d[1l===L?"1B":"1R"]("1q-6W-1m");13.1d["2z"==L?"1B":"1R"]("1q-2z-1m");13.1b.1d["2z"==L?"1B":"1R"]("1q-2z");13.1b.1d["4p"==L?"1B":"1R"]("1q-4p");if("1m"!=L){13.1d.1R("1q-2F-1m");13.1b.1d.1R("1q-2F")}13.1b.1U=L;if(1l===L){13.1b.6w(1l)}}).1E(13)};13.1b.1d.3g(13.1b.1i);13.1b.a8(13.1o("4e"));13.1b.1i.5V("1f");13.1b.1i.5V("1g");if("2E"!==8A(r)){1c K=1p.5R(1p.6n()*A.6C());i(13.1d).3f("cr",A.$1t(((1p.5R(1p.6n()*b3)+1)%2)?"bP":"33").8r({id:"8s"+K}).1y({6x:"br",7i:"3v",4y:"5u",fp:r[1],kk:r[2],et:r[3],kd:"kc-kf",2k:"5t",1G:8,1M:8,8w:"2C",1f:"2C",kj:"2M","ki-1g":"kh",f1:fx}).5v(x(r[0])));if(i(i(13.1d).2e("cr")).8p("a")[0]){i(i(i(13.1d).2e("cr")).8p("a")[0]).1D("1Z 1Q",17(L){L.5c();1j.8f(13.79)}).8r({id:"bv"+K})}A.6Q("#"+13.id+" > 5U.1q-5U > #"+("8s"+K)+",#"+13.id+" > 5U.1q-5U > #"+("8s"+K)+" > #"+("bv"+K)+",bz 3F .1q-2q > #"+("8s"+K)+",bz 3F .1q-2q > #"+("8s"+K)+" > #"+("bv"+K),{6x:"br !2h;",4y:"5u !2h;",fp:r[1]+" !2h;","kw-1A":r[2]+"2w !2h;","z-81":"fx !2h;"},"1q-bO-6l",1r)}if((I=(""+13.1o("fz")).3H(/^([0-9]+)?(2w|%)?$/))){13.1b.1A.6V=I[2]||"2w";13.1b.1A.1f=(2v(I[1])||"2C")}if((I=(""+13.1o("fj")).3H(/^([0-9]+)?(2w|%)?$/))){13.1b.1A.6U=I[2]||"2w";13.1b.1A.1g=(2v(I[1])||"2C")}if("2z"==13.1b.1U){13.1d.1B("1q-2z-1m");13.1b.1d.1B("1q-2z");if("2C"===13.1b.1A.1f){13.1b.1A.6V="%";13.1b.1A.1f=70}if("2C"===13.1b.1A.1g){13.1b.1A.6U="%"}}1k{if(13.1o("1m-2k").3H(/^#/)){if(13.1b.4j=i(13.1o("1m-2k").4q(/^#/,""))){if(i(13.1b.4j).1F().1g>50){if("2C"===13.1b.1A.1f){13.1b.1A.6V="%";13.1b.1A.1f=2K}if("2C"===13.1b.1A.1g){13.1b.1A.6U="%";13.1b.1A.1g=2K}}}1k{13.1o("1m-2k","2M")}}if("4p"==13.1b.1U){if("2C"===13.1b.1A.1f){13.1b.1A.6V="2w"}if("2C"===13.1b.1A.1g){13.1b.1A.6U="2w"}}if("1m"==13.1b.1U){if("2C"===13.1b.1A.1f||"2F"==13.1o("1m-2k")){13.1b.1A.6V="%";13.1b.1A.1f=2K}if("2C"===13.1b.1A.1g||"2F"==13.1o("1m-2k")){13.1b.1A.6U="%";13.1b.1A.1g=2K}}if("2F"==13.1o("1m-2k")){13.1d.1B("1q-2F-1m")}}13.1b.2k=13.1b.4j?"4j":13.1o("1m-2k");13.1s.3S.x=2v(13.1s.1d.3r("3S-1M-1f")||"0");13.1s.3S.y=2v(13.1s.1d.3r("3S-1G-1f")||"0");13.1i.9d(17(){if(2!==13.1i.1K.2p){1a}13.1i.73("1K");13.1A=13.1i.1d.1F();13.fa();13.2m=1r;if(1r===13.1o("93")){u("bD",13.id);13.6o()}}.1E(13));if(1r!==13.1o("93")||"34"==13.1o("4k")){13.1i.6c(i(17(L){13.7c(L,1r)}).1E(13));13.5I=i(13.8G).1E(13).2I(8H)}13.fb()},2g:17(){13.f8();if(13.1b){13.1b.1d.5h()}if(13.4i){13.4i.2g();13.4i=1h}if(13.3m){13.3m.5h()}if(13.1J){i(A.1e.4b()).1y({7i:""})}i(13.3N).3d(17(I){i(I.4r).1R("1q-6N-6S").1R(13.1o("5D")||"1q-$kx-6l-3Z-6k-2U$")},13);if(13.6P){13.3I.3g(13.6P);if(13.9i){13.6P.3D("1W",13.9i)}}if(13.6G){13.3I.3D("8J",13.6G)}if(13.1d){13.1d.5h()}},7c:17(J,K){1c I=13.1i;if(2!==J.1m.2p){13.1i=J;13.2m=1r;13.1b.6w(1l);1a}13.1i=J;13.1i.73(13.1J?"1m":"1K");13.1b.1i.1W=13.1i.7h("1m");13.1b.1d.1R("1q-4p");13.1b.1i.2r("2n");13.1b.1i.5V("2n");13.1b.1d.1F();4B(i(17(){1c M=13.1b.1i.1F(),L;13.3q=13.1i.1F("1m");if(M.1f*M.1g>1&&M.1f*M.1g<13.3q.1f*13.3q.1g){13.3q=M}13.29=A.4h(13.3q);if("4p"==13.1b.1U){13.1b.1d.1B("1q-4p")}13.fo();13.1s.1i.1W=13.1i.1d.9k||13.1i.1d.1W;13.1b.6w(13.1b.1U&&!(13.1J&&"4p"==13.1b.1U));13.2m=1r;13.5x=1h;13.5O();13.1d.1B("1q-2m");13.bx();if(I!==13.1i){u("f9",13.id,I.4r,13.1i.4r);if(13.92){L=13.92;13.92=1h;13.41(L.1i,L.fd)}}1k{if(!!K){u("bD",13.id)}}if(13.72){13.1d.2Y(13.72.1u,13.72)}1k{if(13.1J&&"34"==13.1o("3A")){13.4L()}1k{if(!!K){13.6o()}}}}).1E(13),kN)},fb:17(){1c J=13.id,I,K;K=1t fi("1m\\\\-id(\\\\s+)?:(\\\\s+)?"+J+"($|;)");if(A.1e.2O.aI){I=A.$A(1n.b0(\'[3w-1m-id="\'+13.id+\'"]\'));I=i(I).5w(A.$A(1n.b0(\'[bL*="1m-id"]\')).2X(17(L){1a K.3n(L.2r("bL")||"")}))}1k{I=A.$A(1n.9D("A")).2X(17(L){1a J==L.2r("3w-1m-id")||K.3n(L.2r("bL")||"")})}i(I).3d(17(M){1c L,N;i(M).1D("2S",17(O){O.3U()});L=1t l().9q(M,13.6G);if(13.1i.1m.1W.4N(L.1m.1W)&&13.1i.1K.1W.4N(L.1K.1W)){i(L.4r).1B("1q-6N-6S");L=13.1i;L.4r=M}if(!L.3M&&13.1i.3M){L.3M=13.1i.3M}N=i(17(){13.41(L)}).1E(13);i(M).1D("6J",17(O){if("fc"in O){O.fc()}},5);i(M).1D("1Z "+("7E"==13.1o("c3")?"7H 8O":"1Q"),i(17(P,O){if(13.6g){48(13.6g)}13.6g=1l;if("7H"==P.1u){13.6g=i(N).2I(O)}1k{if("1Z"==P.1u||"1Q"==P.1u){N()}}}).2J(13,60)).1B(13.1o("5D")).1B("1q-6N");L.9d();if(1r!==13.1o("93")){L.bu()}13.3N.3c(L)},13)},41:17(I,J){if(!13.2m){13.92={1i:I,fd:J};1a}if(!I||I===13.1i){1a 1l}13.49(1h,1r);13.2m=1l;13.1d.1R("1q-2m");13.5I=i(13.8G).1E(13).2I(8H);I.6c(i(17(Q){1c K,R,P,M,L,O,N=(A.1e.2D<10)?"1F":"7w";13.bx();Q.73("1K");if(!Q.1d){13.2m=1r;13.1d.1B("1q-2m");1a}13.ao(Q);K=13.1i.1d[N]();if(13.1J){Q.73("1m");P=A.$1t("33").1B("1q-2q-bg");if(A.1e.2O.83||A.1e.2D<10){P.3g(A.$1t("2a",{1W:Q.7h("1m")}).1y({2s:0}))}1k{P.3g(1t A.ar(Q.1d).5p(b).75().1y({2s:0}))}i(P).1y({"z-81":-99}).26(13.3m)}if(13.1J&&"1m"===13.1b.1U&&"34"===13.1o("3A")){i(Q.1d).1y({2s:0}).26(13.1d);R=K;L=[Q.1d,13.1i.1d];O=[{2s:[0,1]},{2s:[1,0]}];i(Q.1d).1y({"1V-1f":1p.2f(Q.1F("1m").1f,13.7m()),"1V-1g":1p.2f(Q.1F("1m").1g,13.6Z())})}1k{13.1d.1y({1g:13.1d[N]().1g});13.1i.1d.1y({2k:"5t",1G:0,1M:0,2N:0,2M:0,1f:"2K%",1g:"2K%","1V-1f":"","1V-1g":""});i(Q.1d).1y({"1V-1f":1p.2f(Q.1F(13.1J?"1m":"1K").1f,13.1J?13.7m():6m),"1V-1g":1p.2f(Q.1F(13.1J?"1m":"1K").1g,13.1J?13.6Z():6m),2k:"kJ",1G:0,1M:0,2s:0,2j:""}).26(13.1d);R=i(Q.1d)[N]();if(!J){i(Q.1d).1y({"2f-1f":K.1f,1g:K.1g,"1V-1f":K.1f,"1V-1g":""})}13.1d.1y({1g:"",7i:""}).1F();i(Q.1d).1F();L=[Q.1d,13.1i.1d];O=[A.24({2s:[0,1]},J?{4d:[0.6,1]}:{"2f-1f":[K.1f,R.1f],"1V-1f":[K.1f,R.1f],1g:[K.1g,R.1g]}),{2s:[1,0]}]}if(13.1J){if(13.3Y.4o&&P.4o){M=i(13.3Y.4o).3r("2s");if(A.1e.6t){L=L.5w([P.4o]);O=O.5w([{2s:[0.cc,M]}])}1k{L=L.5w([P.4o,13.3Y.4o]);O=O.5w([{2s:[0.cc,M]},{2s:[M,0.cc]}])}}}1t A.9a(L,{5d:(J||13.1o("fu"))?J?8H:kB:0,1Y:J?"5G-5H(0.9V, 0.aP, 0.f5, 1)":(K.1f==R.1f)?"9c":"5G-5H(0.25, .1, .1, 1)",7b:i(17(){13.1i.1d.2U().2r("2n");13.1i.1d.5V("2n");i(Q.1d).1y(13.1J?{1f:"2C",1g:"2C"}:{1f:"",1g:""}).1y({"2f-1f":"","2f-1g":"",2s:"","1V-1f":1p.2f(Q.1F(13.1J?"1m":"1K").1f,13.1J?13.7m():6m),"1V-1g":1p.2f(Q.1F(13.1J?"1m":"1K").1g,13.1J?13.6Z():6m)});if(13.1J){13.3Y.2U();13.3Y=2E;13.3Y=P.3O("z-81",-2K);i(13.3Y.4o).1y({2s:""});if(13.40){if(Q.3x){if(Q.3M){13.40.5v("").3g(A.$1t("a",{79:Q.3M}).1D("1Z 1Q",13.9F.1E(13)).5v(Q.3x))}1k{13.40.5v(Q.3x).1B("1q-5J")}}1k{13.40.1R("1q-5J")}}}13.7c(Q)}).1E(13),c1:i(17(S,T){if(2E!==S.4d){T.3O("2j","4d("+S.4d+")")}})}).4Q(O)}).1E(13))},ao:17(J){1c I=1l;i(13.3N).3d(17(K){i(K.4r).1R("1q-6N-6S");if(K===J){I=1r}});if(I&&J.4r){i(J.4r).1B("1q-6N-6S")}if(13.4i){13.4i.fq(J.eG)}},fo:17(I){if(13.1i.3x&&"3W"!==13.1o("7X")&&"2z"!==13.1b.1U){if(!13.1b.3x){13.1b.3x=A.$1t("33",{"3Z":"1q-3x"}).26(13.1b.1d.1B("3x-"+13.1o("7X")))}13.1b.3x.5v(13.1i.3x)}},6o:17(I,L,J){1c K;if(!13.1J){if(13.6i<=0){1a}if(1r!==J){13.6i--}}if(2E===L||1h===L){if(!13.1b.2V&&!13.1b.3u){if(13.1o("4e")&&(13.1b.4Z||!13.1i.2l())){if("7E"==13.1b.7L){L=13.1o("cd")}1k{if("2S"==13.1b.7L){L=13.1o("a4")}}}1k{L=13.1o("2q")?13.1o("aq"):""}}1k{L=13.1o("2q")?13.1o("aq"):""}}if(!L){13.bw();1a}K=13.1d;if(!13.3p){13.3p=A.$1t("33",{"3Z":"1q-3p"});13.bq=A.$1t("bP",{"3Z":"1q-3p-ky"}).3g(1n.am(L)).26(13.3p);i(13.3p).26(13.1d)}1k{i(13.bq).5v(L)}13.3p.1y({"1Y-bM":""}).1R("1q-3p-3v");if(13.1J){K=13.56}1k{if((13.1b.2V||13.1b.3u)&&"2z"!==13.1b.1U&&"2F"==13.1b.2k){K=13.1b.1d}}if(1r===I){4B(i(17(){13.3p.1B("1q-3p-3v")}).1E(13),16)}13.3p.26(K)},bw:17(){if(13.3p){13.3p.1y({"1Y-bM":"ff"}).1B("1q-3p-3v")}},8G:17(){if(!13.6j){13.6j=A.$1t("33",{"3Z":"1q-kG"});13.1d.3g(13.6j);13.6j.1F()}13.6j.1B("f4")},bx:17(){48(13.5I);13.5I=1h;if(13.6j){i(13.6j).1R("f4")}},7G:17(K,O){1c N=A.4h(13.1b.1A),M=(!13.1J&&13.1b.4j)?i(13.1b.4j).1F():{1f:0,1g:0},J,I,L=13.1A,P={x:0,y:0};O=O||13.1b.2k;13.7N=13.1i.1d.1F();13.1A=13.1i.1d.1F();13.1X=13.1i.1d.7w();if(!M.1g){M=13.1A}if(1l===13.1o("fl")||1l===13.1b.1U||"4p"===13.1b.1U){K=1l}if("4p"==13.1b.1U){if("2C"===N.1f){N.1f=13.3q.1f}if("2C"===N.1g){N.1g=13.3q.1g}}if(13.1J&&"2z"==13.1b.1U){N.1f=70;N.1g="2C"}if("2z"==13.1b.1U&&"2C"===N.1g){13.1b.1f=2v(N.1f/2K)*1p.2f(M.1f,M.1g);13.1b.1g=13.1b.1f}1k{if("1m"==13.1b.1U&&"2F"==O){13.1A=13.1d.1F();M=13.1A;13.1X=13.1d.7w();13.1b.1f=M.1f;13.1b.1g=M.1g}1k{13.1b.1f=("%"===N.6V)?2v(N.1f/2K)*M.1f:5W(N.1f);13.1b.1g=("%"===N.6U)?2v(N.1g/2K)*M.1g:5W(N.1g)}}if("4p"==13.1b.1U){I=1p.2f(1p.2f(13.1b.1f/13.3q.1f,13.1b.1g/13.3q.1g),1);13.1b.1f=13.3q.1f*I;13.1b.1g=13.3q.1g*I}13.1b.1f=1p.3T(13.1b.1f);13.1b.1g=1p.3T(13.1b.1g);13.1b.a5=13.1b.1f/13.1b.1g;13.1b.1d.1y({1f:13.1b.1f,1g:13.1b.1g});if(K){M=13.1J?13.3m.1F():13.1b.1d.1F();if(!13.1J&&(13.7N.1f*13.7N.1g)/(13.3q.1f*13.3q.1g)>0.8){13.29.1f=1.5*13.3q.1f;13.29.1g=1.5*13.3q.1g}1k{13.29=A.4h(13.3q)}}if(1l!==13.1b.1U&&!13.1b.2V&&!(13.1J&&"34"==13.1o("3A"))){if((13.7N.1f*13.7N.1g)/(13.29.1f*13.29.1g)>0.8){13.29=A.4h(13.3q);13.1b.6w(1l)}1k{13.1b.6w(1r)}}13.1b.1i.1y({1f:13.29.1f,1g:13.29.1g});J=13.1b.1d.8D();13.1b.5e=1p.3T(J.1f);13.1b.4R=1p.3T(J.1g);13.1s.1f=1p.3T(13.1b.5e/(13.29.1f/13.1A.1f));13.1s.1g=1p.3T(13.1b.4R/(13.29.1g/13.1A.1g));13.1s.1d.1y({1f:13.1s.1f,1g:13.1s.1g});13.1s.1i.1y(13.1A);A.24(13.1s,13.1s.1d.1F());if(13.1b.2V){48(13.4P);13.4P=1h;if(13.1s.6h){13.1s.38.x*=(13.1A.1f/L.1f);13.1s.38.y*=(13.1A.1g/L.1g);P.x=13.1s.5s.x;P.y=13.1s.5s.y}1k{P.x=13.1X.1M+13.1s.1f/2+(13.1s.38.x*(13.1A.1f/L.1f));P.y=13.1X.1G+13.1s.1g/2+(13.1s.38.y*(13.1A.1g/L.1g))}13.8M(1h,P)}},ap:17(M){1c P,O,I,N,L,K,J=i(13.1d).2e("cr");I=a(5);L=13.1b.2k;N=13.1J?"2F":13.1b.4j?"4j":13.1o("1m-2k");K=13.1J&&"1m"==13.1b.1U?13.3m:1n.3F;if(13.1J){I.y=0;I.x=0}if(!M){13.7G(1r,N)}P=13.1X.1G;if("2z"!==13.1b.1U){if(M){13.7G(1l);1a}4D(N){1C"2F":1C"4j":P=0;O=0;1H;1C"1G":P=13.1X.1G-13.1b.1g-13.1o("1m-5m");if(I.1G>P){P=13.1X.2N+13.1o("1m-5m");N="2N"}O=13.1X.1M;1H;1C"2N":P=13.1X.2N+13.1o("1m-5m");if(I.2N<P+13.1b.1g){P=13.1X.1G-13.1b.1g-13.1o("1m-5m");N="1G"}O=13.1X.1M;1H;1C"1M":O=13.1X.1M-13.1b.1f-13.1o("1m-5m");if(I.1M>O&&I.2M>=13.1X.2M+13.1o("1m-5m")+13.1b.1f){O=13.1X.2M+13.1o("1m-5m");N="2M"}1H;1C"2M":1T:O=13.1X.2M+13.1o("1m-5m");if(I.2M<O+13.1b.1f&&I.1M<=13.1X.1M-13.1b.1f-13.1o("1m-5m")){O=13.1X.1M-13.1b.1f-13.1o("1m-5m");N="1M"}1H}4D(13.1o("1m-2k")){1C"1G":1C"2N":if(I.1G>P||I.2N<P+13.1b.1g){N="2F"}1H;1C"1M":1C"2M":if(I.1M>O||I.2M<O+13.1b.1f){N="2F"}1H}13.1b.2k=N;if(!13.1b.3u&&!13.1b.2V){if(A.1e.3e&&!13.1J&&"1m"==13.1b.1U){if(13.1o("2q")){13.1b.6w("2F"!==N)}1k{if("2S"!==13.1o("4k")){13.1b.7L="2F"===N?"2S":13.1o("4k");13.a2();13.9Y();13.7R("2S"===13.1b.7L);13.88("2S"===13.1b.7L&&!13.1o("2q"))}}13.6o(1l,1h,1r)}1a}13.7G(1l);if(M){1a}if("4j"==N){K=13.1b.4j;I.y=0;I.x=0}if("2F"==N){if("4p"!==13.1b.1U){13.1b.1d.1B("1q-2F");13.1d.1B("1q-2F-1m")}13.1s.4u();P=13.1X.1G+I.y;O=13.1X.1M+I.x;if(!13.1J&&A.1e.2D&&A.1e.2D<11){P=0;O=0;K=13.1d}}1k{P+=I.y;O+=I.x;13.1d.1R("1q-2F-1m");13.1b.1d.1R("1q-2F")}13.1b.1d.1y({1G:P,1M:O})}1k{13.7G(1l);K=13.1d}13.1b.1d[13.1J?"1B":"1R"]("1q-1J");if(!13.1J&&J){J.26("1m"==13.1b.1U&&"2F"==N?13.1b.1d:13.1d,((1p.5R(1p.6n()*b3)+1)%2)?"1G":"2N")}13.1b.1d.26(K)},f7:17(O){1c K,I,M,L,N=1l,J=O.bU?5:3/54;i(O).2g();J=(2K+J*1p.3C(O.7V))/2K;if(O.7V<0){J=1/J}if("2z"==13.1b.1U){I=1p.1V(2K,1p.4Y(13.1b.1f*J));I=1p.2f(I,13.1A.1f*0.9);M=I/13.1b.a5;13.1b.1f=1p.3T(I);13.1b.1g=1p.3T(M);13.1b.1d.1y({1f:13.1b.1f,1g:13.1b.1g});K=13.1b.1d.8D();13.1b.5e=1p.3T(K.1f);13.1b.4R=1p.3T(K.1g);N=1r}1k{if(!13.1J&&"1m"==13.1b.1U){I=1p.1V(50,1p.4Y(13.1s.1f*J));I=1p.2f(I,13.1A.1f*0.9);M=I/13.1b.a5;13.29.1f=1p.3T((13.1b.5e/I)*13.1A.1f);13.29.1g=1p.3T((13.1b.4R/M)*13.1A.1g);13.1b.1i.1y({1f:13.29.1f,1g:13.29.1g})}1k{1a}}L=i(1j).7B();13.1s.1f=1p.3T(13.1b.5e/(13.29.1f/13.1A.1f));13.1s.1g=1p.3T(13.1b.4R/(13.29.1g/13.1A.1g));13.1s.1d.1y({1f:13.1s.1f,1g:13.1s.1g});A.24(13.1s,13.1s.1d.1F());if(13.1b.2V){48(13.4P);13.4P=1h;if(N){13.4P=1r}13.8M(1h,{x:O.x-L.x,y:O.y-L.y});if(N){13.4P=1h}}},7R:17(K){1c J;1c I=K?"3B 1Q":"5f"+(1j.2y.3b?" 6E":1j.2y.a7?" 7I":"")+(1j.2y.3b?" 5K":1j.2y.a7?" 6p":" 6I");1c L=13.1d.2e("1q:5l:4L:fn",(!K)?i(17(M){if(c(M)&&!h(M)){1a}if(M&&"3t"===M.2i&&"6E"!==M.1u){1a}J=(A.1e.2D<9)?A.24({},M):M;if(!13.5x){48(13.5x);13.5x=4B(i(17(){13.4L(J)}).1E(13),fZ)}}).2J(13):i(13.4L).2J(13));13.1d.3f("1q:5l:4L:1z",I).1D(I,L,10)},a2:17(J){1c I=13.1d.2e("1q:5l:4L:1z"),K=13.1d.2e("1q:5l:4L:fn");13.1d.1O(I,K);13.1d.36("1q:5l:4L:fn")},88:17(J){1c I=J?"3B 1Q":"6r"+(1j.2y.3b?" 5L b8 5K":1j.2y.a7?" 6q fe 6p":" 8O 6I");1c K=13.1d.2e("1q:5l:49:fn",i(17(M){if(c(M)&&!h(M)){1a}if(M&&M.1u==="5L"&&M.2i!=="3t"){1a}if(M&&(M.1u==="5K"||M.1u==="6p"||M.1u==="6I")){if(!13.2m||!13.1b.4Z||!13.1b.2V){1a}1c L=M.7x();if(L.x<13.1X.1M||L.x>13.1X.2M||L.y<13.1X.1G||L.y>13.1X.2N){13.49(M);1a}}1k{if(13.1b.1d!==M.80()&&!((13.1b.2k==="2F"||13.1b.1U==="2z")&&13.1b.1d.9h(M.80()))&&!13.1d.9h(M.80())){13.49(M);1a}}}).2J(13));13.1d.3f("1q:5l:49:1z",I).1D(I,K,20)},9Y:17(){1c I=13.1d.2e("1q:5l:49:1z"),J=13.1d.2e("1q:5l:49:fn");13.1d.1O(I,J);13.1d.36("1q:5l:49:fn")},fa:17(){13.ex=13.5F.1E(13);13.1d.1D(["5f",1j.2y.3b?"6E":"7I"],i(17(I){if((A.1e.7S||"6H"===A.1e.4T&&A.1e.6t)&&13.1o("4e")&&"2S"!==13.1o("4k")&&"5f"===I.1u){I.3U();if(A.1e.6t){I.5c()}}if(!13.1b.2V){1a}if("2F"===13.1b.2k){13.1s.5s=I.7x()}}).2J(13),10);13.1d.1D(["6r",1j.2y.3b?"5L":"6q"],i(17(I){if(c(I)&&h(I)){13.1s.7r=1l}}).2J(13),10);13.1d.1D("7W "+("6H"===A.1e.4T?"":1j.2y.3b?"5K":1j.2y.a7?"6p":"6I"),i(13.8M).2J(13));if(13.1o("4e")){13.7R("2S"===13.1o("4k"));13.88("2S"===13.1o("4k")&&!13.1o("2q"))}13.1d.1D("6J",17(I){I.5c()},10).1D("1Q",i(17(I){13.1d.aT("f3","2S");if(13.1J){13.3m.2Y("1Q",I)}}).1E(13),15);if(13.1o("2q")){13.1d.1D("1Z 1Q",i(13.2q).2J(13),15)}1k{13.1d.1D("1Z 1Q",i(13.9F).2J(13),15)}if(13.3N.1I>1){13.aR()}if(!A.1e.3e&&13.1o("f6")){13.1d.1D("4z",13.f7.2J(13))}i(1j).1D(A.1e.3e?"71":"71 6u",13.ca)},f8:17(){if(13.1d){13.1d.1O("4z")}i(1j).1O("71 6u",13.ca);i(13.3N).3d(17(I){i(I.4r).cf()})},4L:17(O){1c P,N,L,M,I,J=0,K=0;if(!13.2m||!13.1b.4Z||13.1b.2V||13.1b.3u){if(!13.1i.2l()){if(O){13.72=e(O);O.4C()}13.1i.6c(13.7c.1E(13));if(!13.5I){13.5I=i(13.8G).1E(13).2I(8H)}}1a}if(O&&"5K"==O.1u&&"3t"==O.2i){1a}if(!13.1o("4e")&&13.1o("2q")&&!13.1J){13.1b.2V=1r;1a}13.1b.3u=1r;if(13.1J&&"1m"==13.1b.1U){M=13.1i.1d.7p();13.5o.1B("1q-1m-in");I=13.56.7p();K=((M.1M+M.2M)/2-(I.1M+I.2M)/2);J=((M.1G+M.2N)/2-(I.1G+I.2N)/2)}13.1b.1i.1O("2W");13.1b.1d.1R("1q-a3").1O("2W");13.1b.1d.1B("1q-3u");13.1d.1B("1q-3u");13.ap();N=("1m"==13.1b.1U)?13.1b.2k:13.1b.1U;if(A.1e.2O.1Y&&!(13.1J&&"34"==13.1o("3A"))){if("2F"==N){L=13.1i.1d.1F();13.1b.1i.1y({2j:"4m(0,"+J+"2w, 0) 4d("+L.1f/13.29.1f+", "+L.1g/13.29.1g+")"}).1F();13.1b.1i.1D("2W",i(17(){13.1b.1i.1O("2W");13.1b.1d.1R("1q-3u 1q-p-"+N);13.1b.3u=1l;13.1b.2V=1r}).1E(13));13.1b.1d.1B("1q-p-"+N).1F();if(!A.1e.3e&&A.1e.5y&&("5y"===A.1e.4t||"7a"===A.1e.4t)){13.1b.3u=1l;13.1b.2V=1r}}1k{13.1b.1d.1D("2W",i(17(){13.1b.1d.1O("2W");13.1b.1d.1R("1q-3u 1q-p-"+N)}).1E(13));13.1b.1d.1y({1Y:"2Z"});13.1b.1d.1B("1q-p-"+N).1F();13.1b.1d.1y({1Y:""}).1F();13.1b.1d.1R("1q-p-"+N);13.1b.3u=1l;13.1b.2V=1r}}1k{13.1b.1d.1R("1q-3u");13.1b.3u=1l;13.1b.2V=1r}if(!13.1J){13.6o(1r)}if(O){O.2g().4C();P=O.7x();if("2z"==13.1b.1U&&(/1Z/i).3n(O.1u)){P.y-=13.1b.1g/2+10}if("2F"==N&&((/1Z/i).3n(O.1u)||c(O))){13.1s.38={x:0,y:0};P.x=-(P.x-13.1X.1M-13.1A.1f/2)*(13.29.1f/13.1A.1f);P.y=-(P.y-13.1X.1G-13.1A.1g/2)*(13.29.1g/13.1A.1g)}}1k{P={x:13.1X.1M+(13.1X.2M-13.1X.1M)/2,y:13.1X.1G+(13.1X.2N-13.1X.1G)/2};if(A.1e.3e&&13.1J&&"34"===13.1o("3A")){13.1s.6h=1r;13.1s.38={x:0,y:0};P.x=-(P.x-13.1X.1M-13.1A.1f/2)*(13.29.1f/13.1A.1f);P.y=-(P.y-13.1X.1G-13.1A.1g/2)*(13.29.1g/13.1A.1g)}}13.1d.1R("1q-3u").1B("1q-2V");P.x+=-K;P.y+=-J;13.1s.5s={x:0,y:0};13.1s.dx=0;13.1s.dy=0;13.8M(O,P,1r);u("fw",13.id)},49:17(K,P){1c N,L,I,J,M=0,O=0,Q=13.1b.2V;13.72=1h;if(!13.2m){1a}if(K&&"b8"==K.1u&&"3t"==K.2i){1a}48(13.4P);13.4P=1h;48(13.5x);13.5x=1h;13.1b.3u=1l;13.1b.2V=1l;if(1r!==P&&!13.1J){if(Q){if(A.1e.3e&&!13.1J&&"1m"==13.1b.1U){13.ap()}1k{13.6o()}}}if(!13.1b.4Z){1a}if(K){K.2g()}13.1b.1i.1O("2W");13.1b.1d.1R("1q-3u").1O("2W");if(13.1J){J=13.56.7p();if("34"!==13.1o("3A")){13.5o.1R("1q-1m-in")}13.1i.1d.1y({"1V-1g":13.6Z()});I=13.1i.1d.7p();O=((I.1M+I.2M)/2-(J.1M+J.2M)/2);M=((I.1G+I.2N)/2-(J.1G+J.2N)/2)}N=("1m"==13.1b.1U)?13.1b.2k:13.1b.1U;if(A.1e.2O.1Y&&K&&!(13.1J&&"34"==13.1o("3A"))){if("2F"==N){13.1b.1i.1D("2W",i(17(){13.1b.1i.1O("2W");13.1d.1R("1q-2V");4B(i(17(){13.1b.4u()}).1E(13),32)}).1E(13));L=13.1i.1d.1F();13.1b.1d.1B("1q-a3 1q-p-"+N).1F();13.1b.1i.1y({2j:"4m(0,"+M+"2w,0) 4d("+L.1f/13.29.1f+", "+L.1g/13.29.1g+")"})}1k{13.1b.1d.1D("2W",i(17(){13.1b.4u();13.1d.1R("1q-2V")}).1E(13));13.1b.1d.3r("2s");13.1b.1d.1B("1q-a3 1q-p-"+N);13.1d.1R("1q-2V")}}1k{13.1b.4u();13.1d.1R("1q-2V")}13.1s.dx=0;13.1s.dy=0;13.1s.5s={x:0,y:0};13.1s.4u();if(Q){u("fv",13.id)}},8M:17(S,R,Q){1c K=R,M,L,O=0,J,N=0,I,T,P=1l;if(!13.1b.2V&&!Q){1a}if(S){i(S).3U().5c();if(c(S)&&!h(S)){1a}P=(/1Z/i).3n(S.1u)||c(S);if(P&&!13.1s.7r){13.1s.7r=P}if(!K){K=S.7x()}}if("4p"==13.1b.1U){1a}if("1m"==13.1b.1U&&"2F"===13.1b.2k&&(S&&P||!S&&13.1s.6h)){13.1s.6h=1r;M=13.1s.38.x+(K.x-13.1s.5s.x);L=13.1s.38.y+(K.y-13.1s.5s.y);13.1s.5s=K;O=1p.2f(0,13.1b.5e-13.29.1f)/2;J=-O;N=1p.2f(0,13.1b.4R-13.29.1g)/2;I=-N}1k{13.1s.6h=1l;if("2z"==13.1b.1U){K.y=1p.1V(13.1X.1G,1p.2f(K.y,13.1X.2N));K.x=1p.1V(13.1X.1M,1p.2f(K.x,13.1X.2M))}M=K.x-13.1X.1M;L=K.y-13.1X.1G;J=13.1A.1f-13.1s.1f;I=13.1A.1g-13.1s.1g;M-=13.1s.1f/2;L-=13.1s.1g/2}if("2z"!==13.1b.1U){M=1p.1V(O,1p.2f(M,J));L=1p.1V(N,1p.2f(L,I))}13.1s.38.x=M=1p.4Y(M);13.1s.38.y=L=1p.4Y(L);if("1m"==13.1b.1U&&"2F"!=13.1b.2k){if(A.1e.2O.2j){13.1s.1d.1y({2j:"9b("+13.1s.38.x+"2w,"+13.1s.38.y+"2w)"});13.1s.1i.1y({2j:"9b("+-(13.1s.38.x+13.1s.3S.x)+"2w, "+-(13.1s.38.y+13.1s.3S.y)+"2w)"})}1k{13.1s.1d.1y({1G:13.1s.38.y,1M:13.1s.38.x});13.1s.1i.1y({1G:-(13.1s.38.y+13.1s.3S.y),1M:-(13.1s.38.x+13.1s.3S.x)})}}if("2z"==13.1b.1U){if(13.1s.7r&&!(S&&"3B"==S.1u)){K.y-=13.1b.1g/2+10}13.1b.1d.1y({1G:K.y-13.1X.1G-13.1b.1g/2,1M:K.x-13.1X.1M-13.1b.1f/2})}if(!13.4P){13.1s.dx=0;13.1s.dy=0;13.5F(1)}},5F:17(L){1c K;1c J;1c I;1c M;if(!ge(L)){if(13.1s.6h){L=13.1s.7r?0.4:0.16}1k{L=13.1o("eu")?0.2:13.1s.7r?0.4:0.8}}K=((13.1s.38.x-13.1s.dx)*L);J=((13.1s.38.y-13.1s.dy)*L);13.1s.dx+=K;13.1s.dy+=J;if(!13.4P||1p.3C(K)>0.bI||1p.3C(J)>0.bI){if(13.1s.6h){I=13.1s.dx;M=13.1s.dy}1k{I=(13.1s.dx*(13.29.1f/13.1A.1f)-1p.1V(0,13.29.1f-13.1b.5e)/2);M=(13.1s.dy*(13.29.1g/13.1A.1g)-1p.1V(0,13.29.1g-13.1b.4R)/2);if(13.1b.1U==="2z"){I=1p.4Y(I);M=1p.4Y(M)}I=-I;M=-M}13.1b.1i.1y(A.1e.2O.2j?{2j:g+I+"2w,"+M+"2w"+C+" 4d(1)"}:{1M:-(13.1s.dx*(13.29.1f/13.1A.1f)+1p.2f(0,13.29.1f-13.1b.5e)/2),1G:-(13.1s.dy*(13.29.1g/13.1A.1g)+1p.2f(0,13.29.1g-13.1b.4R)/2)})}if("2z"==13.1b.1U){1a}13.4P=4B(13.ex,16)},aR:17(){1c U,K,P=30,M=g6,R,S="",J={},I,O,T=0,V={1Y:A.1e.8X+5Y.7t(32)+"eV 5G-5H(.18,.35,.58,1)"},L,Q,N=i(17(W){if(!13.2m||13.1b.2V){1a}if(W.2p=="3J"){48(13.5x);13.5x=1h;T=0;J={x:W.x,y:W.y,eU:W.2Q};U=13.1A.1f;K=U/2;13.1i.1d.1O("2W");13.1i.1d.3O("1Y","");13.1i.1d.3O("2j","4m(0, 0, 0)");Q=1h}1k{I=(W.x-J.x);O={x:0,y:0,z:0};if(1h===Q){Q=(1p.3C(W.x-J.x)<1p.3C(W.y-J.y))}if(Q){1a}W.2g();if("8Z"==W.2p){T=0;L=1h;R=W.2Q-J.eU;if(1p.3C(I)>K||(R<M&&1p.3C(I)>P)){if((S=(I>0)?"eS":(I<=0)?"gr":"")){if(S=="eS"){L=13.8c();T+=U*10}1k{L=13.8a();T-=U*10}}}O.x=T;O.eY=-90*(O.x/U);13.1i.1d.1D("2W",i(17(X){13.1i.1d.1O("2W");13.1i.1d.3O("1Y","");if(L){13.1i.1d.1y({2j:"4m("+O.x+"2w, 65, 65)"});13.41(L,1r)}}).1E(13));13.1i.1d.1y(V);13.1i.1d.1y({"1Y-5d":O.x?"gp":"eV",2s:1-0.7*1p.3C(O.x/U),2j:"4m("+O.x+"2w, 65, 65)"});I=0;1a}O.x=I;O.z=-50*1p.3C(O.x/K);O.eY=-60*(O.x/K);13.1i.1d.1y({2s:1-0.7*1p.3C(O.x/K),2j:"4m("+O.x+"2w, 65, "+O.z+"2w)"})}}).1E(13);13.1d.1D("2t",N)},ew:17(){1c J,I;if(13.3N.1I){13.4S=13.3N}1k{J=13.3I.2r("3w-9t");if(J){if(A.1e.2O.aI){I=A.$A(1n.b0(\'.9G[3w-9t="\'+J+\'"], .9y[3w-9t="\'+J+\'"]\'))}1k{I=A.$A(1n.9D("A")).2X(17(K){1a J==K.2r("3w-9t")})}i(I).3d(17(L){1c K,M;K=j(L);if(K&&K.3N.1I>0){1a}if(K){M=1t l(K.1i.1K.2b,K.1i.1m.2b,K.1i.3x,1h,K.1i.4r);M.3M=K.1i.3M}1k{M=1t l().9q(L,K?K.6G:1h)}if(13.1i.1m.1W.4N(M.1m.2b)&&13.1i.1K.1W.4N(M.1K.2b)){M=13.1i}13.4S.3c(M)},13);13.78=13.1i}}if(13.4S.1I>1){13.5o.1B("eF-bE");13.5i=A.$1t("33",{"3Z":"1q-2q-fF"}).26(13.5o);13.4i=1t s(13.5i);i(13.4S).3d(17(K){1c L=i(17(M){13.ao(K);13.41(K)}).1E(13);K.eG=13.4i.eE(A.$1t("2a",{1W:K.7h("1K")}).1D("1Z 1Q",17(M){M.2g()}).1D("1Z "+("7E"==13.1o("c3")?"7H 8O":"1Q"),i(17(N,M){if(13.6g){48(13.6g)}13.6g=1l;if("7H"==N.1u){13.6g=i(L).2I(M)}1k{if("1Z"==N.1u||"1Q"==N.1u){L()}}}).2J(13,60)))},13);13.2P.4G.5J();13.2P.4E.5J()}1k{13.5o.1R("eF-bE");13.2P.4G.4u();13.2P.4E.4u()}},ed:17(){1c I;if(13.4i){13.4i.2g();13.4i=1h}if(13.5i){13.5i.2U();13.5i=1h}if(13.4S.1I>1&&!13.3N.1I){13.1d.1O("2t");13.1i.1d.2U().2r("2n");13.1i.1d.5V("2n");13.78.1d.26(13.1d);13.7c(13.78);5z(I=13.4S.fW()){if(I!==13.78){if(I.1K.1d){I.1K.1d.5h();I.1K.1d=1h}if(I.1m.1d){I.1m.1d.5h();I.1m.1d=1h}I=1h}}}13.4S=[]},6e:17(){if(!13.2m||!13.1J){1a}if(A.1e.4T==="8V"&&A.1e.4t==="9Z"&&5W(A.1e.76)===7){eJ(n);n=1h}i(1n).1O("aS",13.a9);13.49(1h,1r);13.2m=1l;if(y.1e.52.9o&&y.1e.52.4Z()){y.1e.52.eO()}1k{if(A.1e.2O.1Y){13.1d.1O("2W").1y({1Y:""});13.1d.1D("2W",13.7T);if(A.1e.3Q){4B(i(17(){13.7T()}).1E(13),fR)}13.3Y.1O("2W").1y({1Y:""});13.3Y.1y({1Y:"eN 0.6s 5G-5H(0.eM, 0.is, 0.eL, 0.hP) 0.9m"}).1F();13.1d.1y({1Y:"eN .3s 5G-5H(0.bl, 0, 0.eK, 0.aw) 9m"}).1F();if(1l!==13.1b.1U&&"34"==13.1o("3A")&&"2z"!==13.1o("4I")){13.1i.1d.1y({"1V-1g":13.1i.1F("1m").1g});13.1i.1d.1y({"1V-1f":13.1i.1F("1m").1f})}13.3Y.1y({2s:0.4});13.1d.1y({2s:0.hT,2j:"4d(0.4)"})}1k{13.7T()}}},2q:17(K){if(!13.1i.2l()||!13.2m||13.1J){if(!13.1i.2l()){if(K){13.72=e(K);K.4C()}13.1i.6c(13.7c.1E(13));if(!13.5I){13.5I=i(13.8G).1E(13).2I(8H)}}1a}if(K){K.4C()}1c I=i(13.1d).2e("cr"),J=1n.gA();13.bw();13.6i--;13.49(1h,1r);13.a2();13.9Y();13.2m=1l;if(!13.3m){13.3m=A.$1t("33").1B("1q-2q").1B(13.1o("5D")).1y({2s:0});13.5o=A.$1t("33").1B("1q-2q-ey").26(13.3m);13.87=A.$1t("33").1B("1q-2q-hA").26(13.5o);i(["4E","4G","6e"]).3d(17(M){1c L="1q-2u";13.2P[M]=A.$1t("2u",{8J:13.1o("8S-hB-"+M)}).1B(L).1B(L+"-"+M);J.bN(13.2P[M]);4D(M){1C"4E":13.2P[M].1D("1Z 1Q",17(N){N.2g();13.41(13.8c())}.2J(13));1H;1C"4G":13.2P[M].1D("1Z 1Q",17(N){N.2g();13.41(13.8a())}.2J(13));1H;1C"6e":13.2P[M].1D("1Z 1Q",17(N){N.2g();13.6e()}.2J(13));1H}},13);13.87.3g(J);13.3m.1D("4z 5f 3B",i(17(L){i(L).2g()}));if(13.1o("eX")){13.3m.1D("1Z 1Q",17(N){1c M=N.5C(),L=i("2z"===13.1o("4I")?13.1b.1d:13.1b.1i).7p();if("34"!==13.1o("3A")&&L.1G<=M.y&&M.y<=L.2N&&L.1M<=M.x&&M.x<=L.2M){N.4C();13.49(N);1a}if("34"!==13.1o("3A")&&13.1d.9h(N.f0())){1a}N.2g();13.6e()}.2J(13))}13.a9=i(17(M){1c L=1h;if(27!==M.8K&&37!==M.8K&&39!==M.8K){1a}i(M).2g();if(27===M.8K){13.6e()}1k{L=(37===M.8K)?13.8c():13.8a();if(L){13.41(L)}}}).2J(13);13.8o=i(17(){1c L;13.1d.1O("2W").1y({1Y:"",2j:"4m(0, 0, 0)"});if(13.1J){1a}13.1J=1r;13.3m.1R("1q-2q-i9").1y({2s:1});13.1b.a8(13.1o("4I"));13.29=A.4h(13.3q);13.5O();if(13.40&&13.1i.3x){if(13.1i.3M){13.40.3g(A.$1t("a",{79:13.1i.3M}).1D("1Z 1Q",13.9F.1E(13)).5v(13.1i.3x))}1k{13.40.5v(13.1i.3x)}13.40.1B("1q-5J")}if("34"!==13.1o("3A")){13.7R(1r);13.88(1r)}13.2m=1r;if("34"===13.1o("3A")){if(1l!==13.1b.1U){13.1b.6w(1r)}if(A.1e.3e&&13.8F){13.8F=1l}13.4L()}if((A.1e.3e||13.1o("a6"))&&13.1b.4Z){if(13.8F||13.6i>0){13.6o(1r,13.1o("a4"))}13.8F=1l}13.87.1R("1q-3v").1B("1q-9l 1q-5u");13.5i&&13.5i.1R("1q-3v").1B("1q-9l 1q-5u");if(13.4i){13.4i.aD();13.ao(13.1i)}if(I){I.26(13.3m,((1p.5R(1p.6n()*b3)+1)%2)?"1G":"2N")}if(13.4S.1I&&!13.3N.1I){13.aR()}i(1n).1D("aS",13.a9);if("8V"==A.1e.4T&&"9Z"==A.1e.4t&&7==5W(A.1e.76)){n=w()}u("eh",13.id)}).1E(13);13.7T=i(17(){13.1d.1O("2W");if(!13.1J){1a}if(13.1J){i(1n).1O("aS",13.a9);13.49(1h,1r)}13.ed();13.1J=1l;13.1b.a8(13.1o("4e"));13.1d.8t(13.1i.75("1K"),13.1i.1d);13.1i.73("1K");i(13.1i.1d).1y({1f:"",1g:"","1V-1f":1p.2f(13.1i.1F("1K").1f),"1V-1g":1p.2f(13.1i.1F("1K").1g)});13.1s.1i.1W=13.1i.7h("1K");13.1d.1y({2s:"",1Y:""});13.1d.1y({2j:"4m(0, 0, 0)"});i(13.3I).8t(13.1d,13.8u);13.7G(1r);if(13.40){13.40.2U();13.40=1h}13.a2();13.9Y();if("34"==13.1o("4k")){13.4L()}1k{if(1l!==13.1o("4e")){13.7R("2S"===13.1o("4k"));13.88("2S"===13.1o("4k")&&!13.1o("2q"))}}13.6o();13.3Y.1O("2W");13.3m.2U();13.3Y.2U();13.3Y=1h;i(A.1e.4b()).1R("1q-1J-es-8f");13.2m=1r;if(A.1e.2D<10){13.5O()}1k{i(1j).aT("ee","71")}u("eg",13.id)}).1E(13);13.7Y=A.$1t("33",{"3Z":"1q-1i-ey"}).26(13.5o);13.56=A.$1t("5U").26(13.7Y);13.8u=13.1d.hu(1l)}13.ew();i(A.1e.4b()).1B("1q-1J-es-8f");i(1n.3F).1F();if("er"==13.1o("2q")){13.bH();y.1e.52.bp(13.3m,{bs:i(17(){13.8o()}).1E(13),bt:13.7T,7U:i(17(){13.c6()}).1E(13)})}1k{4B(i(17(){13.bH();13.c6()}).1E(13),96)}},bH:17(){1c J,I;J=A.$1t("2a",{1W:13.1i.7h("1m")});13.3Y=A.$1t("33").1B("1q-2q-bg").3g((A.1e.2O.83||A.1e.2D<10)?J:1t A.ar(J).5p(b).75()).26(13.3m);if("34"===13.1o("3A")&&1l!==13.1o("4I")){13.5o.1B("1q-34-1m"+("1m"===13.1o("4I")?" 1q-1m-in":"")).1F()}I=i(13.1d)[(A.1e.2D<10)?"1F":"7w"]();i(13.8u).1y({1f:I.1f,1g:I.1g});13.1d.8t(13.1i.75("1m"),13.1i.1d);13.1i.73("1m");13.3m.26(1n.3F);13.7m=17(){1c K=13.7Y;if(i(13.56).1F().1f>50){K=13.56}1a 17(){1a"34"==13.1o("3A")&&1l!==13.1o("4I")&&"2z"!==13.1o("4I")?6m:1p.4Y(i(K).8D().1f)}}.2c(13);13.6Z=17(){1c K=13.7Y;if(i(13.56).1F().1g>50){K=13.56}1a 17(){1a"34"==13.1o("3A")&&1l!==13.1o("4I")&&"2z"!==13.1o("4I")?6m:1p.4Y(i(K).8D().1g)}}.2c(13);13.87.1R("1q-9l 1q-5u").1B("1q-3v");13.5i&&13.5i.1R("1q-9l 1q-5u").1B("1q-3v");13.1i.1d.1y({"1V-1g":1p.2f(13.1i.1F("1m").1g,13.6Z())});13.1i.1d.1y({"1V-1f":1p.2f(13.1i.1F("1m").1f,13.7m())});13.56.3g(i(13.3I).8t(13.8u,13.1d));if(13.1o("40")){13.40=A.$1t("fy",{"3Z":"1q-3x"}).26(13.56)}},c6:17(){13.1d.1y({1Y:""});13.1d.1y({2j:"4d(0.6)"}).1F();13.1d.1y({1Y:A.1e.8X+" 0.4s 5G-5H(0.9V, 0.aP, 0.f5, 1) 9m"});if(A.1e.2O.1Y){13.1d.1D("2W",13.8o);if(A.1e.5y&&(A.1e.4t==="5y"||A.1e.4t==="7a")){4B(i(17(){13.8o()}).1E(13),aC)}}1k{13.8o.2I(16,13)}13.3m.1y({2s:1});13.1d.1y({2j:"4d(1)"})},9F:17(){if(13.1i.3M){1j.8f(13.1i.3M,"hj")}},8a:17(){1c I=(13.1J?13.4S:13.3N).2X(17(L){1a(-1!==L.1K.2p||-1!==L.1m.2p)}),J=I.1I,K=i(I).4A(13.1i)+1;1a(1>=J)?1h:I[(K>=J)?0:K]},8c:17(){1c I=(13.1J?13.4S:13.3N).2X(17(L){1a(-1!==L.1K.2p||-1!==L.1m.2p)}),J=I.1I,K=i(I).4A(13.1i)-1;1a(1>=J)?1h:I[(K<0)?J-1:K]},fh:17(J,K){1c I=13.3N.2X(17(L){1a((L.1m.1W.4N(J)||L.1m.2b.4N(J))&&(L.1K.1W.4N(K)||L.1K.2b.4N(K)))})||[];1a I[0]||((K&&J&&"1N"===A.1P(K)&&"1N"===A.1P(J))?1t l(K,J):1h)},aZ:17(J){1c I=13.3N.2X(17(K){1a(K.4r===J)})||[];1a I[0]},fm:17(I){1a 13.3N[I]}};v={4J:"fg.2.1 (hm) ho",4Q:17(L,J){1c K=1h,I=[];A.$A((L?[i(L)]:A.$A(1n.9H("9G")).5w(A.$A(1n.9H("9y"))))).3d((17(M){if(i(M)){if(!j(M)){K=1t k(M,J);if(z&&!K.1o("b2")){K.2g();K=1h}1k{F.3c(K);I.3c(K)}}}}).1E(13));1a L?I[0]:I},2g:17(L){1c J,K,I;if(L){(K=j(L))&&(K=F.9M(F.4A(K),1))&&K[0].2g()&&(5a K[0]);1a}5z(J=F.1I){K=F.9M(J-1,1);K[0].2g();5a K[0]}},hf:17(I){13.2g(I);1a 13.4Q(I)},41:17(N,M,L,J){1c K=j(N),I;if(K){I="6f"===A.1P(M)?K.aZ(M):K.fh(M,L);if(I){K.41(I)}}},ha:17(L,K){1c J=j(L),I;if(J){4D(A.1P(K)){1C"6f":I=J.aZ(K);1H;1C"66":I=J.fm(K);1H;1T:}if(I){J.41(I)}}},4E:17(J){1c I;(I=j(J))&&I.41(I.8c())},4G:17(J){1c I;(I=j(J))&&I.41(I.8a())},gE:17(J){1c I;(I=j(J))&&I.4L()},hQ:17(J){1c I;(I=j(J))&&I.49()},2q:17(J){1c I;(I=j(J))&&I.2q()},6e:17(J){1c I;(I=j(J))&&I.6e()},ev:17(I,J){if(!q[I]){q[I]=[]}if("17"==A.1P(J)){q[I].3c(J)}},g2:17(I){1a!!j(I)}};i(1n).1D("9r",17(){1c J=1j[D+"7A"]||{};t=t();d();H=A.$1t("33",{"3Z":"3h-3v-74"}).26(1n.3F);G=(A.1e.3e&&1j.eI&&1j.eI("(1V-eP-1f: eQ), (1V-eP-1g: eQ)").jg);if(A.1e.3e){A.24(p,m)}1S(1c I=0;I<B.1I;I++){if(J[B[I]]&&A.$F!==J[B[I]]){v.ev(B[I],J[B[I]])}}v.4Q();z=1l});1j.9y=1j.9y||{};1a v})();',62,1342,'|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||this||||function|||return|zoomBox|var|node|browser|width|height|null|image|window|else|false|zoom|document|option|Math|mz|true|lens|new|type|Event|options|Custom|jSetCss|event|size|jAddClass|case|jAddEvent|jBind|jGetSize|top|break|length|expanded|small|handler|left|string|jRemoveEvent|jTypeOf|btnclick|jRemoveClass|for|default|mode|max|src|boundaries|transition|tap||arguments|||extend||jAppendTo|||zoomSize|img|url|call||jFetch|min|stop|important|pointerType|transform|position|loaded|ready|style||state|expand|getAttribute|opacity|touchdrag|button|parseFloat|px||navigator|magnifier|prototype|enum|auto|ieMode|undefined|inner|clientY|clientX|jDelay|jBindAsEvent|100|changedTouches|right|bottom|features|buttons|timeStamp|context|click|mousedrag|jRemove|active|transitionend|filter|jCallEvent|none||||div|always||jDel||pos||oneOf|pointerEnabled|push|jEach|mobile|jStore|append|magic|handle|boolean|rootCSS|settings|expandBox|test|try|hint|zoomSizeOrigin|jGetCss||touch|activating|hidden|data|caption|defined|Doc|expandZoomOn|dbltap|abs|setAttribute|orientation|body|catch|match|placeholder|dragstart|identifier|parent|link|additionalImages|jSetCssProp|init|webkit|Class|border|ceil|stopDefaults|touchpinch|off|hasOwnProperty|expandBg|class|expandCaption|update||Element|||||clearTimeout|deactivate|array|getDoc|target|scale|zoomMode|pushToEvents|dblbtnclick|detach|expandThumbs|custom|zoomOn|touches|translate3d|styles|firstChild|preview|replace|origin||uaName|hide|schema|listeners|root|visibility|mousescroll|indexOf|setTimeout|stopQueue|switch|prev|J_TYPE|next|parentNode|expandZoomMode|version|reverse|activate|pow|has|jTrim|moveTimer|start|innerHeight|expandGallery|platform|pageX|disabled|direction|domPrefix|round|enabled||vertical|fullScreen||||expandFigure|requestAnimationFrame||trident|delete|pageY|stopDistribution|duration|innerWidth|touchstart|constructor|kill|expandNav|toLowerCase|MSPOINTER_TYPE_TOUCH|handlers|distance|instanceof|expandStage|blur|messageBox|documentElement|spos|absolute|visible|changeContent|concat|activateTimer|chrome|while|cubicBezier|timer|jGetPageXY|cssClass|FX|move|cubic|bezier|loadTimer|show|pointermove|pointerup|jCamelize|add|resizeCallback|throw|canvas|floor|contains|events|figure|removeAttribute|parseInt|isQueueStopped|String|ease|||ms|selectedItem|J_UUID|0px|number|className||mouseup|nodeType|Array|load|targetTouches|close|element|updateTimer|innertouch|hintRuns|loadingBox|to|css|Infinity|random|showHint|MSPointerMove|MSPointerUp|touchend||gecko|scroll|onerror|enable|display|dppx|dragged|getAbsoluteURL|apply|now|onload|pointerdown|filters|originalTitle|android|mousemove|mousedown|onTouchEnd|found|Object|thumb|render|originalImg|addCSS|shift|selected|MagicJS|hunits|wunits|no|not|getButton|expandMaxHeight||resize|initEvent|setCurNode|wrapper|getNode|uaVersion||primaryImage|href|opera|onComplete|setupZoom|easeFn|callback|oncomplete|set|getURL|overflow|cycles|threshold|end|expandMaxWidth|onTouchStart|_handlers|jGetRect|engine|touchmovement|200|fromCharCode|tm|timedout|getBoundingClientRect|getClientXY|svg|originalImage|Options|jGetScroll|toUpperCase|minimum|hover|cssTransformProp|setSize|mouseover|MSPointerDown|continuous|tooltip|trigger|onready|normalSize|padding|alternate|join|registerActivateEvent|androidBrowser|onClose|fallback|deltaY|touchmove|zoomCaption|expandImageStage|on|getRelated|index||cssFilters||||expandControls|registerDeactivateEvent|complete|getNext|continue|getPrev|Transition|scrollLeft|open|split|toString|setOrientation|jGetPosition|horizontal|itemCSS|cssPrefix|scrollTop|onExpand|byTag|_unbind|setProps|crMz|replaceChild|stubNode|_cleanup|margin|parseCubicBezier|object|fromJSON|typeof|readyState|_timer|getInnerSize|_EVENTS_|mobileZoomHint|showLoading|400|createElement|title|keyCode|sqrt|animate|storage|mouseout|btnclickEvent|getStorage|pointerId|text|cancelAnimationFrame|loopBind|ios|forceAnimation|cssTransform|_bind|dragend||onTouchMove|nextImage|lazyZoom||||XMLHttpRequest|||PFX|translate|linear|loadSmall|status|fromString|implement|hasChild|originalImgSrc|xhr|currentSrc|fade|0s|exists|capable|perspective|parseNode|domready|isNaN|gallery|createEvent|naturalWidth|reflow|J_EUID|MagicZoomPlus|normalizeCSS|dashize|_event_prefix_|createElementNS|getElementsByTagName|Message|openLink|MagicZoom|byClass|magiczoom|reset|onprogress|dblclick|splice|compatMode|pStyles_arr|hideTimer|pStyles|relatedTarget|isPrimary|callee|handleMouseUp|175|exitFullscreen|Opacity|unregisterDeactivateEvent|safari|charAt|eventType|unregisterActivateEvent|deactivating|textClickZoomHint|aspectRatio|forceTouch|msPointerEnabled|setMode|keyboardCallback|||||||||||||createTextNode|win|setActiveThumb|reflowZoom|textExpandHint|SVGImage|styles_arr|w3|ImageLoader|org|045|cubicBezierAtTime|onclick|www|http|caller|500|run|loadImg|handleMouseDown|once|getElementsByClassName|query|_event_del_|cycle|el_arr|handleTouchMove|resizeTimer|05|885|touchScreen|swipe|keydown|jRaiseEvent|opr|ifndef|tagName|Za|assign|imageByOrigin|querySelectorAll|hideFX|autostart|101|cssDomPrefix||Tooltip|removeChild|pointerout|Function|previousScale||mgctlbx|https|temporary|getTarget||presto|maximum|Pltm|10000px|600|dispatchEvent|slice|calc|request|hintMessage|inline|onEnter|onExit|loadZoom|mzCrA|hideHint|hideLoading|selectorsMoveFX|html|uuid|stopAnimation|_event_add_|onZoomReady|thumbs|priority|Date|prepareExpandedView|000001|deltaMode|scrollFX|rel|delay|appendChild|runtime|span|ignore|zoomPosition|loadedBytes|Alpha|isMouse|300|onabort|handleTouchEnd|startTime|errorEventName|HTMLElement|onBeforeRender|changeEventName|selectorTrigger|J_EXT|deltaX|expandToWindow|abort|onClick|handleTouchStart|onResize|1000|0001|textHoverZoomHint||jClearEvents|item|initDrag|euid|toArray|setMessage|phone|UUID|999|nativize|removeRule|deleteRule||DXImageTransform|setupContent|progid|Microsoft|insertRule|sheet|stdDeviation|filterBlur|styleSheet|naturalHeight|stylesId|items|animation|parseSchema|DocumentTouch|Number|jToBool|getTime|jSetOpacity|textnode|date|magicJS|mjs|forEach|firefox|easeOutBack|wheelDeltaX|loop|finishTime|ua|fps|Bottom|onStart|interval|wheelDeltaY|backCompat|out|355|03|handleMouseMove|onAfterRender|wheelDelta|cos|Left|isReady|Top|progressiveLoad|onxhrerror|304|compareDocumentPosition|getElementById|offsetWidth|jDefer|error|xhr2|dragmove|onreadystatechange|clientWidth||onchange|webkit419|_initialDistance|doc|cancelFullScreen|loadBlob|curScale|documentMode|||which|bounceIn|crios|Moz|moz|cancelBubble|preventDefault|Webkit|getContext|cssText|backcompat|addEventListener|hone|jHasClass|mozCancelAnimationFrame|background|multibackground|scrollbarsWidth|stopPropagation|elasticIn|easeInSine|easeOutSine|easeInExpo|getComputedStyle|styleFloat|Right|detail|165|requestFullScreen|easeOutExpo|easeInBack|msExitFullscreen|wrap|easeOutCubic|easeInCubic|easeInQuad|easeOutQuad|od|normal|enclose|destroyExpandGallery|UIEvent|rightClick|onExpandClose|onExpandOpen|querySelector|charCodeAt|touchOptions||getJSON|loadOptions|10000|gif||fullscreen|view|fontWeight|smoothing|registerCallback|setupExpandGallery|moveBind|stage|R0lGODlhAQABAAD|ACwAAAAAAQABAAACADs|100000|screenX|screenY|addItem|with|selector|get|matchMedia|clearInterval|735|685|895|all|cancel|device|767px|screen|backward|setInterval|ts|300ms|10px|closeOnClickOutside|deg|block|getOriginalTarget|zIndex|base64|MouseEvent|shown|320|variableZoom|changeZoomLevel|unregisterEvents|onUpdate|registerEvents|setupSelectors|stopImmediatePropagation|onswipe|MSPointerOut|0ms|v5|imageByURL|RegExp|zoomHeight||upscale|imageByIndex||setCaption|color|selectItem|PI|Click|mac|transitionEffect|onZoomOut|onZoomIn|2147483647|figcaption|zoomWidth|ProgressEvent|msCancelFullScreen|createEventObject|DOMContentLoaded|fireEvent|thumbnails|doScroll|kindle|iris|420|mozCancelFullScreen|detachEvent|maemo|attachEvent|msFullscreenEnabled|isPrimaryTouch|removeEventListener|260|webkitexitFullscreen|lge|oCancelFullScreen|mousewheel|pop|webkitCancelFullScreen|sort|120|onwheel|delta|running|isTouchEvent|withCredentials|deltaZ|201|deltaFactor|ontouchstart|Image||pinchstart|pinchupdate|implementation|isFinite|TR|feature|SVG11|maxTouchPoints|msMaxTouchPoints|compal|wheel|blazer|elaine|fennec|100ms|hiptop|forward|hasFeature|meego|FormData|avantgo|000244140625|blackberry|bada|iemobile|createDocumentFragment|RequestFullScreen|RequestFullscreen|requestFullscreen|zoomIn|ExitFullscreen|FullScreen|webkitIsFullScreen|xda|536|ver|fullscreenElement|FullscreenElement|CancelFullScreen|MSFullscreenChange|activeElement|up|Width|treo|float|prefix|fullscreenerror|windows|fullscreenchange|wap|MSFullscreenError|vodafone|xiino|ActiveXObject|msCancelAnimationFrame|oCancelAnimationFrame|webkitCancelRequestAnimationFrame|9999|red|webos|msRequestAnimationFrame|switchTo|linux|mozRequestAnimationFrame|webkitRequestAnimationFrame|oRequestAnimationFrame|refresh|2px|WebKitPoint|taintEnabled|_self|mozInnerScreenY|getBoxObjectFor|Plus|webkitTransitionEnd|DEMO|cssfilters|unknown|TransitionEvent|WebKitTransitionEvent|cssFloat|cloneNode|pageXOffset|clientHeight|pageYOffset|jGetFullSize|scrollWidth|controls|btn|iframe|jSetStyle|ob|DOMElement|presto925|scrollHeight|fullscreenEnabled|pointerover|srcElement|MSPointerOver|fromElement|toElement|returnValue|220|zoomOut|netfront|mmp|01|midp|jGetStyle|palm|pocket|psp|plucker|re|jGetTransitionDuration|jGetStyles|jToggleClass|getPropertyValue|lineHeight|currentStyle|symbian|series|opening|offsetHeight|childNodes|innerText||||ixi|insertBefore|os|innerHTML|offsetParent|clientTop|jGetFullScroll||clientLeft||offsetLeft|offsetTop|030|userAgent|mgctlbxN|MZ|center|ff0000|MagicToolboxTooltip|mgctlbxV|mgctlbxL|9_|z0|head|mgctlbxP|o0|MessageBox|jkma|ozga|zkvz|gz5|NEGATIVE_INFINITY|0Coigm|Taac|5000|xk|gob|ojk5|bounceOut|scrollTo|sineOut|radius|before|expoIn|cssRules|air|addRule|easeInOutBack|265|rev|removeCSS|expoOut|quadIn|backIn|backOut|availWidth|elasticOut|availHeight|cubicOut|quadOut|250|cubicIn|matches|maba|POSITIVE_INFINITY|SourceGraphic|feGaussianBlur|Close|textBtnClose|Hover|textBtnNext|Next|Tap|Previous|textBtnPrev|setAttributeNS|units|sides|KeyEvent|regexp|KeyboardEvent|collection|v3|TypeError|Cannot|zoomDistance|or|convert|ul|xlink|1999|definition|Incorrect|of|the|parameter|zo|ikz3|zwbk3|Qlbo|JSON|parse|zfg|isset|2000|devicePixelRatio|Double|Touch|kh3|fzz|mbgme3|coigmtaac|coigmzaablav||yyy|275|sineIn|setTransition|roundCss|curFrame|sans|fontFamily|infinite|serif|destroy|2em|line|textAlign|fontSize|contextmenu|565|generateUUID|445|085|575|715|toFloat|MobileOptions|jToInt|745|font|dummy|message|total|edge|350|lengthComputable|webkitURL|evaluate|xpath|loading|URL|static|relative|responseType|blob|send|256|GET|createObjectURL|other|progress|response|537|map|easeInOutSine|easeInQuint|755|855|06|04|4xxx|4294967296|easeOutCirc|easeInOutQuart|335|easeOutQuint|getHashCode|795|035|xxxxxxxxxxxx||yxxx|getRatio|xy|easeInOutQuint|07|easeInCirc||easeInOutExpo|easeOutQuart|055|675|135|easeInQuart|955|515|easeInOutQuad|455||xxxxxxxx|785|215|xxxx|645|075|selectstart|easeInOutCubic|srcset|easeInOutCirc'.split('|'),0,{}))
