import{u as Je,s as er}from"./chunk-3RSXBRAN-CVbEPzcG.js";import{r as c,j as y,X as _e,Y as ue,k as N,Z as z,_ as X,h as _,n as A,$ as Ce,a0 as tr,a1 as rr,a2 as nr,a3 as et,a4 as ar,Q as He,V as $,g as tt,i as or,a5 as ir,a6 as ur,a7 as cr,p as rt}from"./index-D7c0h0Uw.js";var sr={enter:({transition:e,transitionEnd:t,delay:r}={})=>{var n;return{opacity:1,transition:(n=e==null?void 0:e.enter)!=null?n:z.enter(X.enter,r),transitionEnd:t==null?void 0:t.enter}},exit:({transition:e,transitionEnd:t,delay:r}={})=>{var n;return{opacity:0,transition:(n=e==null?void 0:e.exit)!=null?n:z.exit(X.exit,r),transitionEnd:t==null?void 0:t.exit}}},nt={initial:"exit",animate:"enter",exit:"exit",variants:sr},lr=c.forwardRef(function(t,r){const{unmountOnExit:n,in:a,className:o,transition:u,transitionEnd:i,delay:l,...f}=t,d=a||n?"enter":"exit",s=n?a&&n:!0,m={transition:u,transitionEnd:i,delay:l};return y.jsx(_e,{custom:m,children:s&&y.jsx(ue.div,{ref:r,className:N("chakra-fade",o),custom:m,...nt,animate:d,...f})})});lr.displayName="Fade";var fr={initial:({offsetX:e,offsetY:t,transition:r,transitionEnd:n,delay:a})=>{var o;return{opacity:0,x:e,y:t,transition:(o=r==null?void 0:r.exit)!=null?o:z.exit(X.exit,a),transitionEnd:n==null?void 0:n.exit}},enter:({transition:e,transitionEnd:t,delay:r})=>{var n;return{opacity:1,x:0,y:0,transition:(n=e==null?void 0:e.enter)!=null?n:z.enter(X.enter,r),transitionEnd:t==null?void 0:t.enter}},exit:({offsetY:e,offsetX:t,transition:r,transitionEnd:n,reverse:a,delay:o})=>{var u;const i={x:t,y:e};return{opacity:0,transition:(u=r==null?void 0:r.exit)!=null?u:z.exit(X.exit,o),...a?{...i,transitionEnd:n==null?void 0:n.exit}:{transitionEnd:{...i,...n==null?void 0:n.exit}}}}},Y={initial:"initial",animate:"enter",exit:"exit",variants:fr},dr=c.forwardRef(function(t,r){const{unmountOnExit:n,in:a,reverse:o=!0,className:u,offsetX:i=0,offsetY:l=8,transition:f,transitionEnd:d,delay:s,...m}=t,h=n?a&&n:!0,g=a||n?"enter":"exit",v={offsetX:i,offsetY:l,reverse:o,transition:f,transitionEnd:d,delay:s};return y.jsx(_e,{custom:v,children:h&&y.jsx(ue.div,{ref:r,className:N("chakra-offset-slide",u),custom:v,...Y,animate:g,...m})})});dr.displayName="SlideFade";var Ca=_(function(t,r){const{className:n,justify:a,...o}=t,u=Je();return y.jsx(A.div,{ref:r,className:N("chakra-card__footer",n),__css:{display:"flex",justifyContent:a,...u.footer},...o})}),Fa=_(function(t,r){const{className:n,...a}=t,o=Je();return y.jsx(A.div,{ref:r,className:N("chakra-card__header",n),__css:o.header,...a})});function vr(e,t){if(e==null)return{};var r={},n=Object.keys(e),a,o;for(o=0;o<n.length;o++)a=n[o],!(t.indexOf(a)>=0)&&(r[a]=e[a]);return r}var Fe="data-focus-lock",at="data-focus-lock-disabled",mr="data-no-focus-lock",hr="data-autofocus-inside",pr="data-no-autofocus";function he(e,t){return typeof e=="function"?e(t):e&&(e.current=t),e}function gr(e,t){var r=c.useState(function(){return{value:e,callback:t,facade:{get current(){return r.value},set current(n){var a=r.value;a!==n&&(r.value=n,r.callback(n,a))}}}})[0];return r.callback=t,r.facade}var Ue=new WeakMap;function ot(e,t){var r=gr(null,function(n){return e.forEach(function(a){return he(a,n)})});return c.useLayoutEffect(function(){var n=Ue.get(r);if(n){var a=new Set(n),o=new Set(e),u=r.current;a.forEach(function(i){o.has(i)||he(i,null)}),o.forEach(function(i){a.has(i)||he(i,u)})}Ue.set(r,e)},[e]),r}var pe={width:"1px",height:"0px",padding:0,overflow:"hidden",position:"fixed",top:"1px",left:"1px"},M=function(){return M=Object.assign||function(t){for(var r,n=1,a=arguments.length;n<a;n++){r=arguments[n];for(var o in r)Object.prototype.hasOwnProperty.call(r,o)&&(t[o]=r[o])}return t},M.apply(this,arguments)};function it(e,t){var r={};for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&t.indexOf(n)<0&&(r[n]=e[n]);if(e!=null&&typeof Object.getOwnPropertySymbols=="function")for(var a=0,n=Object.getOwnPropertySymbols(e);a<n.length;a++)t.indexOf(n[a])<0&&Object.prototype.propertyIsEnumerable.call(e,n[a])&&(r[n[a]]=e[n[a]]);return r}function yr(e,t,r){if(r||arguments.length===2)for(var n=0,a=t.length,o;n<a;n++)(o||!(n in t))&&(o||(o=Array.prototype.slice.call(t,0,n)),o[n]=t[n]);return e.concat(o||Array.prototype.slice.call(t))}function ut(e){return e}function ct(e,t){t===void 0&&(t=ut);var r=[],n=!1,a={read:function(){if(n)throw new Error("Sidecar: could not `read` from an `assigned` medium. `read` could be used only with `useMedium`.");return r.length?r[r.length-1]:e},useMedium:function(o){var u=t(o,n);return r.push(u),function(){r=r.filter(function(i){return i!==u})}},assignSyncMedium:function(o){for(n=!0;r.length;){var u=r;r=[],u.forEach(o)}r={push:function(i){return o(i)},filter:function(){return r}}},assignMedium:function(o){n=!0;var u=[];if(r.length){var i=r;r=[],i.forEach(o),u=r}var l=function(){var d=u;u=[],d.forEach(o)},f=function(){return Promise.resolve().then(l)};f(),r={push:function(d){u.push(d),f()},filter:function(d){return u=u.filter(d),r}}}};return a}function Ie(e,t){return t===void 0&&(t=ut),ct(e,t)}function st(e){e===void 0&&(e={});var t=ct(null);return t.options=M({async:!0,ssr:!1},e),t}var lt=function(e){var t=e.sideCar,r=it(e,["sideCar"]);if(!t)throw new Error("Sidecar: please provide `sideCar` property to import the right car");var n=t.read();if(!n)throw new Error("Sidecar medium not found");return c.createElement(n,M({},r))};lt.isSideCarExport=!0;function br(e,t){return e.useMedium(t),lt}var ft=Ie({},function(e){var t=e.target,r=e.currentTarget;return{target:t,currentTarget:r}}),dt=Ie(),Sr=Ie(),wr=st({async:!0}),xr=[],ce=c.forwardRef(function(t,r){var n,a=c.useState(),o=a[0],u=a[1],i=c.useRef(),l=c.useRef(!1),f=c.useRef(null),d=t.children,s=t.disabled,m=t.noFocusGuards,h=t.persistentFocus,g=t.crossFrame,v=t.autoFocus;t.allowTextSelection;var p=t.group,b=t.className,x=t.whiteList,C=t.hasPositiveIndices,F=t.shards,w=F===void 0?xr:F,E=t.as,P=E===void 0?"div":E,k=t.lockProps,S=k===void 0?{}:k,U=t.sideCar,T=t.returnFocus,Ht=t.focusOptions,de=t.onActivation,ve=t.onDeactivation,Ut=c.useState({}),Vt=Ut[0],$t=c.useCallback(function(){f.current=f.current||document&&document.activeElement,i.current&&de&&de(i.current),l.current=!0},[de]),Yt=c.useCallback(function(){l.current=!1,ve&&ve(i.current)},[ve]);c.useEffect(function(){s||(f.current=null)},[]);var zt=c.useCallback(function(I){var V=f.current;if(V&&V.focus){var me=typeof T=="function"?T(V):T;if(me){var Ge=typeof me=="object"?me:void 0;f.current=null,I?Promise.resolve().then(function(){return V.focus(Ge)}):V.focus(Ge)}}},[T]),Xt=c.useCallback(function(I){l.current&&ft.useMedium(I)},[]),qt=dt.useMedium,Zt=c.useCallback(function(I){i.current!==I&&(i.current=I,u(I))},[]),Kt=Ce((n={},n[at]=s&&"disabled",n[Fe]=p,n),S),je=m!==!0,Qt=je&&m!=="tail",Jt=ot([r,Zt]);return c.createElement(c.Fragment,null,je&&[c.createElement("div",{key:"guard-first","data-focus-guard":!0,tabIndex:s?-1:0,style:pe}),C?c.createElement("div",{key:"guard-nearest","data-focus-guard":!0,tabIndex:s?-1:1,style:pe}):null],!s&&c.createElement(U,{id:Vt,sideCar:wr,observed:o,disabled:s,persistentFocus:h,crossFrame:g,autoFocus:v,whiteList:x,shards:w,onActivation:$t,onDeactivation:Yt,returnFocus:zt,focusOptions:Ht}),c.createElement(P,Ce({ref:Jt},Kt,{className:b,onBlur:qt,onFocus:Xt}),d),Qt&&c.createElement("div",{"data-focus-guard":!0,tabIndex:s?-1:0,style:pe}))});ce.propTypes={};ce.defaultProps={children:void 0,disabled:!1,returnFocus:!1,focusOptions:void 0,noFocusGuards:!1,autoFocus:!0,persistentFocus:!1,crossFrame:!0,hasPositiveIndices:void 0,allowTextSelection:void 0,group:void 0,className:void 0,whiteList:void 0,shards:void 0,as:"div",lockProps:{},onActivation:void 0,onDeactivation:void 0};function Ee(e,t){return Ee=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(n,a){return n.__proto__=a,n},Ee(e,t)}function Cr(e,t){e.prototype=Object.create(t.prototype),e.prototype.constructor=e,Ee(e,t)}function q(e){"@babel/helpers - typeof";return q=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(t){return typeof t}:function(t){return t&&typeof Symbol=="function"&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},q(e)}function Fr(e,t){if(q(e)!="object"||!e)return e;var r=e[Symbol.toPrimitive];if(r!==void 0){var n=r.call(e,t||"default");if(q(n)!="object")return n;throw new TypeError("@@toPrimitive must return a primitive value.")}return(t==="string"?String:Number)(e)}function Er(e){var t=Fr(e,"string");return q(t)=="symbol"?t:t+""}function Pr(e,t,r){return t=Er(t),t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function Mr(e,t){function r(n){return n.displayName||n.name||"Component"}return function(a){var o=[],u;function i(){u=e(o.map(function(f){return f.props})),t(u)}var l=function(f){Cr(d,f);function d(){return f.apply(this,arguments)||this}d.peek=function(){return u};var s=d.prototype;return s.componentDidMount=function(){o.push(this),i()},s.componentDidUpdate=function(){i()},s.componentWillUnmount=function(){var h=o.indexOf(this);o.splice(h,1),i()},s.render=function(){return tr.createElement(a,this.props)},d}(c.PureComponent);return Pr(l,"displayName","SideEffect("+r(a)+")"),l}}var O=function(e){for(var t=Array(e.length),r=0;r<e.length;++r)t[r]=e[r];return t},ae=function(e){return Array.isArray(e)?e:[e]},vt=function(e){return Array.isArray(e)?e[0]:e},Or=function(e){if(e.nodeType!==Node.ELEMENT_NODE)return!1;var t=window.getComputedStyle(e,null);return!t||!t.getPropertyValue?!1:t.getPropertyValue("display")==="none"||t.getPropertyValue("visibility")==="hidden"},mt=function(e){return e.parentNode&&e.parentNode.nodeType===Node.DOCUMENT_FRAGMENT_NODE?e.parentNode.host:e.parentNode},ht=function(e){return e===document||e&&e.nodeType===Node.DOCUMENT_NODE},kr=function(e,t){return!e||ht(e)||!Or(e)&&t(mt(e))},pt=function(e,t){var r=e.get(t);if(r!==void 0)return r;var n=kr(t,pt.bind(void 0,e));return e.set(t,n),n},Nr=function(e,t){return e&&!ht(e)?Ar(e)?t(mt(e)):!1:!0},gt=function(e,t){var r=e.get(t);if(r!==void 0)return r;var n=Nr(t,gt.bind(void 0,e));return e.set(t,n),n},yt=function(e){return e.dataset},_r=function(e){return e.tagName==="BUTTON"},bt=function(e){return e.tagName==="INPUT"},St=function(e){return bt(e)&&e.type==="radio"},Ir=function(e){return!((bt(e)||_r(e))&&(e.type==="hidden"||e.disabled))},Ar=function(e){var t=e.getAttribute(pr);return![!0,"true",""].includes(t)},Ae=function(e){var t;return!!(e&&(!((t=yt(e))===null||t===void 0)&&t.focusGuard))},oe=function(e){return!Ae(e)},Tr=function(e){return!!e},Rr=function(e,t){var r=e.tabIndex-t.tabIndex,n=e.index-t.index;if(r){if(!e.tabIndex)return 1;if(!t.tabIndex)return-1}return r||n},wt=function(e,t,r){return O(e).map(function(n,a){return{node:n,index:a,tabIndex:r&&n.tabIndex===-1?(n.dataset||{}).focusGuard?0:-1:n.tabIndex}}).filter(function(n){return!t||n.tabIndex>=0}).sort(Rr)},Dr=["button:enabled","select:enabled","textarea:enabled","input:enabled","a[href]","area[href]","summary","iframe","object","embed","audio[controls]","video[controls]","[tabindex]","[contenteditable]","[autofocus]"],Te=Dr.join(","),Lr="".concat(Te,", [data-focus-guard]"),xt=function(e,t){return O((e.shadowRoot||e).children).reduce(function(r,n){return r.concat(n.matches(t?Lr:Te)?[n]:[],xt(n))},[])},Br=function(e,t){var r;return e instanceof HTMLIFrameElement&&(!((r=e.contentDocument)===null||r===void 0)&&r.body)?se([e.contentDocument.body],t):[e]},se=function(e,t){return e.reduce(function(r,n){var a,o=xt(n,t),u=(a=[]).concat.apply(a,o.map(function(i){return Br(i,t)}));return r.concat(u,n.parentNode?O(n.parentNode.querySelectorAll(Te)).filter(function(i){return i===n}):[])},[])},Wr=function(e){var t=e.querySelectorAll("[".concat(hr,"]"));return O(t).map(function(r){return se([r])}).reduce(function(r,n){return r.concat(n)},[])},Re=function(e,t){return O(e).filter(function(r){return pt(t,r)}).filter(function(r){return Ir(r)})},Ve=function(e,t){return t===void 0&&(t=new Map),O(e).filter(function(r){return gt(t,r)})},Pe=function(e,t,r){return wt(Re(se(e,r),t),!0,r)},$e=function(e,t){return wt(Re(se(e),t),!1)},jr=function(e,t){return Re(Wr(e),t)},W=function(e,t){return e.shadowRoot?W(e.shadowRoot,t):Object.getPrototypeOf(e).contains!==void 0&&Object.getPrototypeOf(e).contains.call(e,t)?!0:O(e.children).some(function(r){var n;if(r instanceof HTMLIFrameElement){var a=(n=r.contentDocument)===null||n===void 0?void 0:n.body;return a?W(a,t):!1}return W(r,t)})},Gr=function(e){for(var t=new Set,r=e.length,n=0;n<r;n+=1)for(var a=n+1;a<r;a+=1){var o=e[n].compareDocumentPosition(e[a]);(o&Node.DOCUMENT_POSITION_CONTAINED_BY)>0&&t.add(a),(o&Node.DOCUMENT_POSITION_CONTAINS)>0&&t.add(n)}return e.filter(function(u,i){return!t.has(i)})},Ct=function(e){return e.parentNode?Ct(e.parentNode):e},De=function(e){var t=ae(e);return t.filter(Boolean).reduce(function(r,n){var a=n.getAttribute(Fe);return r.push.apply(r,a?Gr(O(Ct(n).querySelectorAll("[".concat(Fe,'="').concat(a,'"]:not([').concat(at,'="disabled"])')))):[n]),r},[])},Hr=function(e){try{return e()}catch{return}},Z=function(e){if(e===void 0&&(e=document),!(!e||!e.activeElement)){var t=e.activeElement;return t.shadowRoot?Z(t.shadowRoot):t instanceof HTMLIFrameElement&&Hr(function(){return t.contentWindow.document})?Z(t.contentWindow.document):t}},Ur=function(e,t){return e===t},Vr=function(e,t){return!!O(e.querySelectorAll("iframe")).some(function(r){return Ur(r,t)})},Ft=function(e,t){return t===void 0&&(t=Z(vt(e).ownerDocument)),!t||t.dataset&&t.dataset.focusGuard?!1:De(e).some(function(r){return W(r,t)||Vr(r,t)})},$r=function(e){e===void 0&&(e=document);var t=Z(e);return t?O(e.querySelectorAll("[".concat(mr,"]"))).some(function(r){return W(r,t)}):!1},Yr=function(e,t){return t.filter(St).filter(function(r){return r.name===e.name}).filter(function(r){return r.checked})[0]||e},Le=function(e,t){return St(e)&&e.name?Yr(e,t):e},zr=function(e){var t=new Set;return e.forEach(function(r){return t.add(Le(r,e))}),e.filter(function(r){return t.has(r)})},Ye=function(e){return e[0]&&e.length>1?Le(e[0],e):e[0]},ze=function(e,t){return e.length>1?e.indexOf(Le(e[t],e)):t},Et="NEW_FOCUS",Xr=function(e,t,r,n){var a=e.length,o=e[0],u=e[a-1],i=Ae(r);if(!(r&&e.indexOf(r)>=0)){var l=r!==void 0?t.indexOf(r):-1,f=n?t.indexOf(n):l,d=n?e.indexOf(n):-1,s=l-f,m=t.indexOf(o),h=t.indexOf(u),g=zr(t),v=r!==void 0?g.indexOf(r):-1,p=v-(n?g.indexOf(n):l),b=ze(e,0),x=ze(e,a-1);if(l===-1||d===-1)return Et;if(!s&&d>=0)return d;if(l<=m&&i&&Math.abs(s)>1)return x;if(l>=h&&i&&Math.abs(s)>1)return b;if(s&&Math.abs(p)>1)return d;if(l<=m)return x;if(l>h)return b;if(s)return Math.abs(s)>1?d:(a+d+s)%a}},qr=function(e){return function(t){var r,n=(r=yt(t))===null||r===void 0?void 0:r.autofocus;return t.autofocus||n!==void 0&&n!=="false"||e.indexOf(t)>=0}},Zr=function(e,t,r){var n=e.map(function(o){var u=o.node;return u}),a=Ve(n.filter(qr(r)));return a&&a.length?Ye(a):Ye(Ve(t))},Me=function(e,t){return t===void 0&&(t=[]),t.push(e),e.parentNode&&Me(e.parentNode.host||e.parentNode,t),t},ge=function(e,t){for(var r=Me(e),n=Me(t),a=0;a<r.length;a+=1){var o=r[a];if(n.indexOf(o)>=0)return o}return!1},Pt=function(e,t,r){var n=ae(e),a=ae(t),o=n[0],u=!1;return a.filter(Boolean).forEach(function(i){u=ge(u||i,i)||u,r.filter(Boolean).forEach(function(l){var f=ge(o,l);f&&(!u||W(f,u)?u=f:u=ge(f,u))})}),u},Kr=function(e,t){return e.reduce(function(r,n){return r.concat(jr(n,t))},[])},Qr=function(e,t){var r=new Map;return t.forEach(function(n){return r.set(n.node,n)}),e.map(function(n){return r.get(n)}).filter(Tr)},Jr=function(e,t){var r=Z(ae(e).length>0?document:vt(e).ownerDocument),n=De(e).filter(oe),a=Pt(r||e,e,n),o=new Map,u=$e(n,o),i=Pe(n,o).filter(function(h){var g=h.node;return oe(g)});if(!(!i[0]&&(i=u,!i[0]))){var l=$e([a],o).map(function(h){var g=h.node;return g}),f=Qr(l,i),d=f.map(function(h){var g=h.node;return g}),s=Xr(d,l,r,t);if(s===Et){var m=Zr(u,d,Kr(n,o));if(m)return{node:m};console.warn("focus-lock: cannot find any node to move focus into");return}return s===void 0?s:f[s]}},en=function(e){var t=De(e).filter(oe),r=Pt(e,e,t),n=new Map,a=Pe([r],n,!0),o=Pe(t,n).filter(function(u){var i=u.node;return oe(i)}).map(function(u){var i=u.node;return i});return a.map(function(u){var i=u.node,l=u.index;return{node:i,index:l,lockItem:o.indexOf(i)>=0,guard:Ae(i)}})},tn=function(e,t){"focus"in e&&e.focus(t),"contentWindow"in e&&e.contentWindow&&e.contentWindow.focus()},ye=0,be=!1,Mt=function(e,t,r){r===void 0&&(r={});var n=Jr(e,t);if(!be&&n){if(ye>2){console.error("FocusLock: focus-fighting detected. Only one focus management system could be active. See https://github.com/theKashey/focus-lock/#focus-fighting"),be=!0,setTimeout(function(){be=!1},1);return}ye++,tn(n.node,r.focusOptions),ye--}};function Be(e){setTimeout(e,1)}var rn=function(){return document&&document.activeElement===document.body},nn=function(){return rn()||$r()},j=null,B=null,G=null,K=!1,an=function(){return!0},on=function(t){return(j.whiteList||an)(t)},un=function(t,r){G={observerNode:t,portaledElement:r}},cn=function(t){return G&&G.portaledElement===t};function Xe(e,t,r,n){var a=null,o=e;do{var u=n[o];if(u.guard)u.node.dataset.focusAutoGuard&&(a=u);else if(u.lockItem){if(o!==e)return;a=null}else break}while((o+=r)!==t);a&&(a.node.tabIndex=0)}var sn=function(t){return t&&"current"in t?t.current:t},ln=function(t){return t?!!K:K==="meanwhile"},fn=function e(t,r,n){return r&&(r.host===t&&(!r.activeElement||n.contains(r.activeElement))||r.parentNode&&e(t,r.parentNode,n))},dn=function(t,r){return r.some(function(n){return fn(t,n,n)})},ie=function(){var t=!1;if(j){var r=j,n=r.observed,a=r.persistentFocus,o=r.autoFocus,u=r.shards,i=r.crossFrame,l=r.focusOptions,f=n||G&&G.portaledElement,d=document&&document.activeElement;if(f){var s=[f].concat(u.map(sn).filter(Boolean));if((!d||on(d))&&(a||ln(i)||!nn()||!B&&o)&&(f&&!(Ft(s)||d&&dn(d,s)||cn(d))&&(document&&!B&&d&&!o?(d.blur&&d.blur(),document.body.focus()):(t=Mt(s,B,{focusOptions:l}),G={})),K=!1,B=document&&document.activeElement),document){var m=document&&document.activeElement,h=en(s),g=h.map(function(v){var p=v.node;return p}).indexOf(m);g>-1&&(h.filter(function(v){var p=v.guard,b=v.node;return p&&b.dataset.focusAutoGuard}).forEach(function(v){var p=v.node;return p.removeAttribute("tabIndex")}),Xe(g,h.length,1,h),Xe(g,-1,-1,h))}}}return t},Ot=function(t){ie()&&t&&(t.stopPropagation(),t.preventDefault())},We=function(){return Be(ie)},vn=function(t){var r=t.target,n=t.currentTarget;n.contains(r)||un(n,r)},mn=function(){return null},kt=function(){K="just",Be(function(){K="meanwhile"})},hn=function(){document.addEventListener("focusin",Ot),document.addEventListener("focusout",We),window.addEventListener("blur",kt)},pn=function(){document.removeEventListener("focusin",Ot),document.removeEventListener("focusout",We),window.removeEventListener("blur",kt)};function gn(e){return e.filter(function(t){var r=t.disabled;return!r})}function yn(e){var t=e.slice(-1)[0];t&&!j&&hn();var r=j,n=r&&t&&t.id===r.id;j=t,r&&!n&&(r.onDeactivation(),e.filter(function(a){var o=a.id;return o===r.id}).length||r.returnFocus(!t)),t?(B=null,(!n||r.observed!==t.observed)&&t.onActivation(),ie(),Be(ie)):(pn(),B=null)}ft.assignSyncMedium(vn);dt.assignMedium(We);Sr.assignMedium(function(e){return e({moveFocusInside:Mt,focusInside:Ft})});const bn=Mr(gn,yn)(mn);var Oe=c.forwardRef(function(t,r){return c.createElement(ce,Ce({sideCar:bn,ref:r},t))}),Nt=ce.propTypes||{};Nt.sideCar;vr(Nt,["sideCar"]);Oe.propTypes={};var qe,Sn=(qe=Oe.default)!=null?qe:Oe,_t=e=>{const{initialFocusRef:t,finalFocusRef:r,contentRef:n,restoreFocus:a,children:o,isDisabled:u,autoFocus:i,persistentFocus:l,lockFocusAcrossFrames:f}=e,d=c.useCallback(()=>{t!=null&&t.current?t.current.focus():n!=null&&n.current&&rr(n.current).length===0&&requestAnimationFrame(()=>{var g;(g=n.current)==null||g.focus()})},[t,n]),s=c.useCallback(()=>{var h;(h=r==null?void 0:r.current)==null||h.focus()},[r]),m=a&&!r;return y.jsx(Sn,{crossFrame:f,persistentFocus:l,autoFocus:i,disabled:u,onActivation:d,onDeactivation:s,returnFocus:m,children:o})};_t.displayName="FocusLock";var It=_(function(t,r){const{templateAreas:n,gap:a,rowGap:o,columnGap:u,column:i,row:l,autoFlow:f,autoRows:d,templateRows:s,autoColumns:m,templateColumns:h,...g}=t,v={display:"grid",gridTemplateAreas:n,gridGap:a,gridRowGap:o,gridColumnGap:u,gridAutoColumns:m,gridColumn:i,gridRow:l,gridAutoFlow:f,gridAutoRows:d,gridTemplateRows:s,gridTemplateColumns:h};return y.jsx(A.div,{ref:r,__css:v,...g})});It.displayName="Grid";var wn=_(function(t,r){const{columns:n,spacingX:a,spacingY:o,spacing:u,minChildWidth:i,...l}=t,f=nr(),d=i?Cn(i,f):Fn(n);return y.jsx(It,{ref:r,gap:u,columnGap:a,rowGap:o,templateColumns:d,...l})});wn.displayName="SimpleGrid";function xn(e){return typeof e=="number"?`${e}px`:e}function Cn(e,t){return et(e,r=>{const n=ar("sizes",r,xn(r))(t);return r===null?null:`repeat(auto-fit, minmax(${n}, 1fr))`})}function Fn(e){return et(e,t=>t===null?null:`repeat(${t}, minmax(0, 1fr))`)}var En={slideInBottom:{...Y,custom:{offsetY:16,reverse:!0}},slideInRight:{...Y,custom:{offsetX:16,reverse:!0}},slideInTop:{...Y,custom:{offsetY:-16,reverse:!0}},slideInLeft:{...Y,custom:{offsetX:-16,reverse:!0}},scale:{...er,custom:{initialScale:.95,reverse:!0}},none:{}},Pn=A(ue.section),Mn=e=>En[e||"none"],At=c.forwardRef((e,t)=>{const{preset:r,motionProps:n=Mn(r),...a}=e;return y.jsx(Pn,{ref:t,...n,...a})});At.displayName="ModalTransition";var On=Object.defineProperty,kn=(e,t,r)=>t in e?On(e,t,{enumerable:!0,configurable:!0,writable:!0,value:r}):e[t]=r,Nn=(e,t,r)=>(kn(e,t+"",r),r),_n=class{constructor(){Nn(this,"modals"),this.modals=new Map}add(e){return this.modals.set(e,this.modals.size+1),this.modals.size}remove(e){this.modals.delete(e)}isTopModal(e){return e?this.modals.get(e)===this.modals.size:!1}},ke=new _n;function Tt(e,t){const[r,n]=c.useState(0);return c.useEffect(()=>{const a=e.current;if(a){if(t){const o=ke.add(a);n(o)}return()=>{ke.remove(a),n(0)}}},[t,e]),r}var In=function(e){if(typeof document>"u")return null;var t=Array.isArray(e)?e[0]:e;return t.ownerDocument.body},R=new WeakMap,Q=new WeakMap,J={},Se=0,Rt=function(e){return e&&(e.host||Rt(e.parentNode))},An=function(e,t){return t.map(function(r){if(e.contains(r))return r;var n=Rt(r);return n&&e.contains(n)?n:(console.error("aria-hidden",r,"in not contained inside",e,". Doing nothing"),null)}).filter(function(r){return!!r})},Tn=function(e,t,r,n){var a=An(t,Array.isArray(e)?e:[e]);J[r]||(J[r]=new WeakMap);var o=J[r],u=[],i=new Set,l=new Set(a),f=function(s){!s||i.has(s)||(i.add(s),f(s.parentNode))};a.forEach(f);var d=function(s){!s||l.has(s)||Array.prototype.forEach.call(s.children,function(m){if(i.has(m))d(m);else{var h=m.getAttribute(n),g=h!==null&&h!=="false",v=(R.get(m)||0)+1,p=(o.get(m)||0)+1;R.set(m,v),o.set(m,p),u.push(m),v===1&&g&&Q.set(m,!0),p===1&&m.setAttribute(r,"true"),g||m.setAttribute(n,"true")}})};return d(t),i.clear(),Se++,function(){u.forEach(function(s){var m=R.get(s)-1,h=o.get(s)-1;R.set(s,m),o.set(s,h),m||(Q.has(s)||s.removeAttribute(n),Q.delete(s)),h||s.removeAttribute(r)}),Se--,Se||(R=new WeakMap,R=new WeakMap,Q=new WeakMap,J={})}},Rn=function(e,t,r){r===void 0&&(r="data-aria-hidden");var n=Array.from(Array.isArray(e)?e:[e]),a=In(e);return a?(n.push.apply(n,Array.from(a.querySelectorAll("[aria-live]"))),Tn(n,a,r,"aria-hidden")):function(){return null}};function Dn(e){const{isOpen:t,onClose:r,id:n,closeOnOverlayClick:a=!0,closeOnEsc:o=!0,useInert:u=!0,onOverlayClick:i,onEsc:l}=e,f=c.useRef(null),d=c.useRef(null),[s,m,h]=Bn(n,"chakra-modal","chakra-modal--header","chakra-modal--body");Ln(f,t&&u);const g=Tt(f,t),v=c.useRef(null),p=c.useCallback(S=>{v.current=S.target},[]),b=c.useCallback(S=>{S.key==="Escape"&&(S.stopPropagation(),o&&(r==null||r()),l==null||l())},[o,r,l]),[x,C]=c.useState(!1),[F,w]=c.useState(!1),E=c.useCallback((S={},U=null)=>({role:"dialog",...S,ref:He(U,f),id:s,tabIndex:-1,"aria-modal":!0,"aria-labelledby":x?m:void 0,"aria-describedby":F?h:void 0,onClick:$(S.onClick,T=>T.stopPropagation())}),[h,F,s,m,x]),P=c.useCallback(S=>{S.stopPropagation(),v.current===S.target&&ke.isTopModal(f.current)&&(a&&(r==null||r()),i==null||i())},[r,a,i]),k=c.useCallback((S={},U=null)=>({...S,ref:He(U,d),onClick:$(S.onClick,P),onKeyDown:$(S.onKeyDown,b),onMouseDown:$(S.onMouseDown,p)}),[b,p,P]);return{isOpen:t,onClose:r,headerId:m,bodyId:h,setBodyMounted:w,setHeaderMounted:C,dialogRef:f,overlayRef:d,getDialogProps:E,getDialogContainerProps:k,index:g}}function Ln(e,t){const r=e.current;c.useEffect(()=>{if(!(!e.current||!t))return Rn(e.current)},[t,e,r])}function Bn(e,...t){const r=c.useId(),n=e||r;return c.useMemo(()=>t.map(a=>`${a}-${n}`),[n,t])}var[Wn,le]=tt({name:"ModalStylesContext",errorMessage:`useModalStyles returned is 'undefined'. Seems you forgot to wrap the components in "<Modal />" `}),[jn,H]=tt({strict:!0,name:"ModalContext",errorMessage:"useModalContext: `context` is undefined. Seems you forgot to wrap modal components in `<Modal />`"}),Gn=e=>{const t={scrollBehavior:"outside",autoFocus:!0,trapFocus:!0,returnFocusOnClose:!0,blockScrollOnMount:!0,allowPinchZoom:!1,motionPreset:"scale",lockFocusAcrossFrames:!0,...e},{portalProps:r,children:n,autoFocus:a,trapFocus:o,initialFocusRef:u,finalFocusRef:i,returnFocusOnClose:l,blockScrollOnMount:f,allowPinchZoom:d,preserveScrollBarGap:s,motionPreset:m,lockFocusAcrossFrames:h,onCloseComplete:g}=t,v=or("Modal",t),b={...Dn(t),autoFocus:a,trapFocus:o,initialFocusRef:u,finalFocusRef:i,returnFocusOnClose:l,blockScrollOnMount:f,allowPinchZoom:d,preserveScrollBarGap:s,motionPreset:m,lockFocusAcrossFrames:h};return y.jsx(jn,{value:b,children:y.jsx(Wn,{value:v,children:y.jsx(_e,{onExitComplete:g,children:b.isOpen&&y.jsx(ir,{...r,children:n})})})})};Gn.displayName="Modal";var re="right-scroll-bar-position",ne="width-before-scroll-bar",Hn="with-scroll-bars-hidden",Un="--removed-body-scroll-bar-size",Dt=st(),we=function(){},fe=c.forwardRef(function(e,t){var r=c.useRef(null),n=c.useState({onScrollCapture:we,onWheelCapture:we,onTouchMoveCapture:we}),a=n[0],o=n[1],u=e.forwardProps,i=e.children,l=e.className,f=e.removeScrollBar,d=e.enabled,s=e.shards,m=e.sideCar,h=e.noIsolation,g=e.inert,v=e.allowPinchZoom,p=e.as,b=p===void 0?"div":p,x=e.gapMode,C=it(e,["forwardProps","children","className","removeScrollBar","enabled","shards","sideCar","noIsolation","inert","allowPinchZoom","as","gapMode"]),F=m,w=ot([r,t]),E=M(M({},C),a);return c.createElement(c.Fragment,null,d&&c.createElement(F,{sideCar:Dt,removeScrollBar:f,shards:s,noIsolation:h,inert:g,setCallbacks:o,allowPinchZoom:!!v,lockRef:r,gapMode:x}),u?c.cloneElement(c.Children.only(i),M(M({},E),{ref:w})):c.createElement(b,M({},E,{className:l,ref:w}),i))});fe.defaultProps={enabled:!0,removeScrollBar:!0,inert:!1};fe.classNames={fullWidth:ne,zeroRight:re};var Vn=function(){if(typeof __webpack_nonce__<"u")return __webpack_nonce__};function $n(){if(!document)return null;var e=document.createElement("style");e.type="text/css";var t=Vn();return t&&e.setAttribute("nonce",t),e}function Yn(e,t){e.styleSheet?e.styleSheet.cssText=t:e.appendChild(document.createTextNode(t))}function zn(e){var t=document.head||document.getElementsByTagName("head")[0];t.appendChild(e)}var Xn=function(){var e=0,t=null;return{add:function(r){e==0&&(t=$n())&&(Yn(t,r),zn(t)),e++},remove:function(){e--,!e&&t&&(t.parentNode&&t.parentNode.removeChild(t),t=null)}}},qn=function(){var e=Xn();return function(t,r){c.useEffect(function(){return e.add(t),function(){e.remove()}},[t&&r])}},Lt=function(){var e=qn(),t=function(r){var n=r.styles,a=r.dynamic;return e(n,a),null};return t},Zn={left:0,top:0,right:0,gap:0},xe=function(e){return parseInt(e||"",10)||0},Kn=function(e){var t=window.getComputedStyle(document.body),r=t[e==="padding"?"paddingLeft":"marginLeft"],n=t[e==="padding"?"paddingTop":"marginTop"],a=t[e==="padding"?"paddingRight":"marginRight"];return[xe(r),xe(n),xe(a)]},Qn=function(e){if(e===void 0&&(e="margin"),typeof window>"u")return Zn;var t=Kn(e),r=document.documentElement.clientWidth,n=window.innerWidth;return{left:t[0],top:t[1],right:t[2],gap:Math.max(0,n-r+t[2]-t[0])}},Jn=Lt(),ea=function(e,t,r,n){var a=e.left,o=e.top,u=e.right,i=e.gap;return r===void 0&&(r="margin"),`
  .`.concat(Hn,` {
   overflow: hidden `).concat(n,`;
   padding-right: `).concat(i,"px ").concat(n,`;
  }
  body {
    overflow: hidden `).concat(n,`;
    overscroll-behavior: contain;
    `).concat([t&&"position: relative ".concat(n,";"),r==="margin"&&`
    padding-left: `.concat(a,`px;
    padding-top: `).concat(o,`px;
    padding-right: `).concat(u,`px;
    margin-left:0;
    margin-top:0;
    margin-right: `).concat(i,"px ").concat(n,`;
    `),r==="padding"&&"padding-right: ".concat(i,"px ").concat(n,";")].filter(Boolean).join(""),`
  }
  
  .`).concat(re,` {
    right: `).concat(i,"px ").concat(n,`;
  }
  
  .`).concat(ne,` {
    margin-right: `).concat(i,"px ").concat(n,`;
  }
  
  .`).concat(re," .").concat(re,` {
    right: 0 `).concat(n,`;
  }
  
  .`).concat(ne," .").concat(ne,` {
    margin-right: 0 `).concat(n,`;
  }
  
  body {
    `).concat(Un,": ").concat(i,`px;
  }
`)},ta=function(e){var t=e.noRelative,r=e.noImportant,n=e.gapMode,a=n===void 0?"margin":n,o=c.useMemo(function(){return Qn(a)},[a]);return c.createElement(Jn,{styles:ea(o,!t,a,r?"":"!important")})},Ne=!1;if(typeof window<"u")try{var ee=Object.defineProperty({},"passive",{get:function(){return Ne=!0,!0}});window.addEventListener("test",ee,ee),window.removeEventListener("test",ee,ee)}catch{Ne=!1}var D=Ne?{passive:!1}:!1,ra=function(e){return e.tagName==="TEXTAREA"},Bt=function(e,t){var r=window.getComputedStyle(e);return r[t]!=="hidden"&&!(r.overflowY===r.overflowX&&!ra(e)&&r[t]==="visible")},na=function(e){return Bt(e,"overflowY")},aa=function(e){return Bt(e,"overflowX")},Ze=function(e,t){var r=t.ownerDocument,n=t;do{typeof ShadowRoot<"u"&&n instanceof ShadowRoot&&(n=n.host);var a=Wt(e,n);if(a){var o=jt(e,n),u=o[1],i=o[2];if(u>i)return!0}n=n.parentNode}while(n&&n!==r.body);return!1},oa=function(e){var t=e.scrollTop,r=e.scrollHeight,n=e.clientHeight;return[t,r,n]},ia=function(e){var t=e.scrollLeft,r=e.scrollWidth,n=e.clientWidth;return[t,r,n]},Wt=function(e,t){return e==="v"?na(t):aa(t)},jt=function(e,t){return e==="v"?oa(t):ia(t)},ua=function(e,t){return e==="h"&&t==="rtl"?-1:1},ca=function(e,t,r,n,a){var o=ua(e,window.getComputedStyle(t).direction),u=o*n,i=r.target,l=t.contains(i),f=!1,d=u>0,s=0,m=0;do{var h=jt(e,i),g=h[0],v=h[1],p=h[2],b=v-p-o*g;(g||b)&&Wt(e,i)&&(s+=b,m+=g),i instanceof ShadowRoot?i=i.host:i=i.parentNode}while(!l&&i!==document.body||l&&(t.contains(i)||t===i));return(d&&(Math.abs(s)<1||!a)||!d&&(Math.abs(m)<1||!a))&&(f=!0),f},te=function(e){return"changedTouches"in e?[e.changedTouches[0].clientX,e.changedTouches[0].clientY]:[0,0]},Ke=function(e){return[e.deltaX,e.deltaY]},Qe=function(e){return e&&"current"in e?e.current:e},sa=function(e,t){return e[0]===t[0]&&e[1]===t[1]},la=function(e){return`
  .block-interactivity-`.concat(e,` {pointer-events: none;}
  .allow-interactivity-`).concat(e,` {pointer-events: all;}
`)},fa=0,L=[];function da(e){var t=c.useRef([]),r=c.useRef([0,0]),n=c.useRef(),a=c.useState(fa++)[0],o=c.useState(Lt)[0],u=c.useRef(e);c.useEffect(function(){u.current=e},[e]),c.useEffect(function(){if(e.inert){document.body.classList.add("block-interactivity-".concat(a));var v=yr([e.lockRef.current],(e.shards||[]).map(Qe),!0).filter(Boolean);return v.forEach(function(p){return p.classList.add("allow-interactivity-".concat(a))}),function(){document.body.classList.remove("block-interactivity-".concat(a)),v.forEach(function(p){return p.classList.remove("allow-interactivity-".concat(a))})}}},[e.inert,e.lockRef.current,e.shards]);var i=c.useCallback(function(v,p){if("touches"in v&&v.touches.length===2)return!u.current.allowPinchZoom;var b=te(v),x=r.current,C="deltaX"in v?v.deltaX:x[0]-b[0],F="deltaY"in v?v.deltaY:x[1]-b[1],w,E=v.target,P=Math.abs(C)>Math.abs(F)?"h":"v";if("touches"in v&&P==="h"&&E.type==="range")return!1;var k=Ze(P,E);if(!k)return!0;if(k?w=P:(w=P==="v"?"h":"v",k=Ze(P,E)),!k)return!1;if(!n.current&&"changedTouches"in v&&(C||F)&&(n.current=w),!w)return!0;var S=n.current||w;return ca(S,p,v,S==="h"?C:F,!0)},[]),l=c.useCallback(function(v){var p=v;if(!(!L.length||L[L.length-1]!==o)){var b="deltaY"in p?Ke(p):te(p),x=t.current.filter(function(w){return w.name===p.type&&(w.target===p.target||p.target===w.shadowParent)&&sa(w.delta,b)})[0];if(x&&x.should){p.cancelable&&p.preventDefault();return}if(!x){var C=(u.current.shards||[]).map(Qe).filter(Boolean).filter(function(w){return w.contains(p.target)}),F=C.length>0?i(p,C[0]):!u.current.noIsolation;F&&p.cancelable&&p.preventDefault()}}},[]),f=c.useCallback(function(v,p,b,x){var C={name:v,delta:p,target:b,should:x,shadowParent:va(b)};t.current.push(C),setTimeout(function(){t.current=t.current.filter(function(F){return F!==C})},1)},[]),d=c.useCallback(function(v){r.current=te(v),n.current=void 0},[]),s=c.useCallback(function(v){f(v.type,Ke(v),v.target,i(v,e.lockRef.current))},[]),m=c.useCallback(function(v){f(v.type,te(v),v.target,i(v,e.lockRef.current))},[]);c.useEffect(function(){return L.push(o),e.setCallbacks({onScrollCapture:s,onWheelCapture:s,onTouchMoveCapture:m}),document.addEventListener("wheel",l,D),document.addEventListener("touchmove",l,D),document.addEventListener("touchstart",d,D),function(){L=L.filter(function(v){return v!==o}),document.removeEventListener("wheel",l,D),document.removeEventListener("touchmove",l,D),document.removeEventListener("touchstart",d,D)}},[]);var h=e.removeScrollBar,g=e.inert;return c.createElement(c.Fragment,null,g?c.createElement(o,{styles:la(a)}):null,h?c.createElement(ta,{gapMode:e.gapMode}):null)}function va(e){for(var t=null;e!==null;)e instanceof ShadowRoot&&(t=e.host,e=e.host),e=e.parentNode;return t}const ma=br(Dt,da);var Gt=c.forwardRef(function(e,t){return c.createElement(fe,M({},e,{ref:t,sideCar:ma}))});Gt.classNames=fe.classNames;function ha(e){const{autoFocus:t,trapFocus:r,dialogRef:n,initialFocusRef:a,blockScrollOnMount:o,allowPinchZoom:u,finalFocusRef:i,returnFocusOnClose:l,preserveScrollBarGap:f,lockFocusAcrossFrames:d,isOpen:s}=H(),[m,h]=ur();c.useEffect(()=>{!m&&h&&setTimeout(h)},[m,h]);const g=Tt(n,s);return y.jsx(_t,{autoFocus:t,isDisabled:!r,initialFocusRef:a,finalFocusRef:i,restoreFocus:l,contentRef:n,lockFocusAcrossFrames:d,children:y.jsx(Gt,{removeScrollBar:!f,allowPinchZoom:u,enabled:g===1&&o,forwardProps:!0,children:e.children})})}var pa=_((e,t)=>{const{className:r,children:n,containerProps:a,motionProps:o,...u}=e,{getDialogProps:i,getDialogContainerProps:l}=H(),f=i(u,t),d=l(a),s=N("chakra-modal__content",r),m=le(),h={display:"flex",flexDirection:"column",position:"relative",width:"100%",outline:0,...m.dialog},g={display:"flex",width:"100vw",height:"$100vh",position:"fixed",left:0,top:0,...m.dialogContainer},{motionPreset:v}=H();return y.jsx(ha,{children:y.jsx(A.div,{...d,className:"chakra-modal__content-container",tabIndex:-1,__css:g,children:y.jsx(At,{preset:v,motionProps:o,className:s,...f,__css:h,children:n})})})});pa.displayName="ModalContent";var ga=_((e,t)=>{const{className:r,...n}=e,{headerId:a,setHeaderMounted:o}=H();c.useEffect(()=>(o(!0),()=>o(!1)),[o]);const u=N("chakra-modal__header",r),l={flex:0,...le().header};return y.jsx(A.header,{ref:t,className:u,id:a,...n,__css:l})});ga.displayName="ModalHeader";var ya=A(ue.div),ba=_((e,t)=>{const{className:r,transition:n,motionProps:a,...o}=e,u=N("chakra-modal__overlay",r),l={pos:"fixed",left:"0",top:"0",w:"100vw",h:"100vh",...le().overlay},{motionPreset:f}=H(),s=a||(f==="none"?{}:nt);return y.jsx(ya,{...s,__css:l,ref:t,className:u,...o})});ba.displayName="ModalOverlay";var Sa=_((e,t)=>{const{onClick:r,className:n,...a}=e,{onClose:o}=H(),u=N("chakra-modal__close-btn",n),i=le();return y.jsx(cr,{ref:t,__css:i.closeButton,className:u,onClick:$(r,l=>{l.stopPropagation(),o()}),...a})});Sa.displayName="ModalCloseButton";var Ea=rt({displayName:"EditIcon",path:y.jsxs("g",{fill:"none",stroke:"currentColor",strokeLinecap:"round",strokeWidth:"2",children:[y.jsx("path",{d:"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"}),y.jsx("path",{d:"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"})]})}),Pa=rt({displayName:"DeleteIcon",path:y.jsx("g",{fill:"currentColor",children:y.jsx("path",{d:"M19.452 7.5H4.547a.5.5 0 00-.5.545l1.287 14.136A2 2 0 007.326 24h9.347a2 2 0 001.992-1.819L19.95 8.045a.5.5 0 00-.129-.382.5.5 0 00-.369-.163zm-9.2 13a.75.75 0 01-1.5 0v-9a.75.75 0 011.5 0zm5 0a.75.75 0 01-1.5 0v-9a.75.75 0 011.5 0zM22 4h-4.75a.25.25 0 01-.25-.25V2.5A2.5 2.5 0 0014.5 0h-5A2.5 2.5 0 007 2.5v1.25a.25.25 0 01-.25.25H2a1 1 0 000 2h20a1 1 0 000-2zM9 3.75V2.5a.5.5 0 01.5-.5h5a.5.5 0 01.5.5v1.25a.25.25 0 01-.25.25h-5.5A.25.25 0 019 3.75z"})})});export{Fa as C,Pa as D,Ea as E,Gn as M,wn as S,Ca as a,ba as b,pa as c,ga as d,Sa as e};