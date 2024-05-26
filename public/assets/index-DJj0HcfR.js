import{g as S,h as m,i as C,o as R,k as g,l as b,m as w,r as y,j as e,n as x,p as E,q as A}from"./index-B-hmDOvL.js";var[G,M]=S({name:"InputGroupStylesContext",errorMessage:`useInputGroupStyles returned is 'undefined'. Seems you forgot to wrap the components in "<InputGroup />" `}),k=m(function(n,l){const a=C("Input",n),{children:i,className:o,...f}=R(n),d=g("chakra-input__group",o),t={},I=b(i),r=a.field;I.forEach(s=>{var p,c;a&&(r&&s.type.id==="InputLeftElement"&&(t.paddingStart=(p=r.height)!=null?p:r.h),r&&s.type.id==="InputRightElement"&&(t.paddingEnd=(c=r.height)!=null?c:r.h),s.type.id==="InputRightAddon"&&(t.borderEndRadius=0),s.type.id==="InputLeftAddon"&&(t.borderStartRadius=0))});const N=I.map(s=>{var p,c;const v=w({size:((p=s.props)==null?void 0:p.size)||n.size,variant:((c=s.props)==null?void 0:c.variant)||n.variant});return s.type.id!=="Input"?y.cloneElement(s,v):y.cloneElement(s,Object.assign(v,t,s.props))});return e.jsx(x.div,{className:d,ref:l,__css:{width:"100%",display:"flex",position:"relative",isolation:"isolate",...a.group},"data-group":!0,...f,children:e.jsx(G,{value:a,children:N})})});k.displayName="InputGroup";var z=x("div",{baseStyle:{display:"flex",alignItems:"center",justifyContent:"center",position:"absolute",top:"0",zIndex:2}}),h=m(function(n,l){var a,i;const{placement:o="left",...f}=n,d=M(),t=d.field,r={[o==="left"?"insetStart":"insetEnd"]:"0",width:(a=t==null?void 0:t.height)!=null?a:t==null?void 0:t.h,height:(i=t==null?void 0:t.height)!=null?i:t==null?void 0:t.h,fontSize:t==null?void 0:t.fontSize,...d.element};return e.jsx(z,{ref:l,__css:r,...f})});h.id="InputElement";h.displayName="InputElement";var _=m(function(n,l){const{className:a,...i}=n,o=g("chakra-input__left-element",a);return e.jsx(h,{ref:l,placement:"left",className:o,...i})});_.id="InputLeftElement";_.displayName="InputLeftElement";var j=m(function(n,l){const{className:a,...i}=n,o=g("chakra-input__right-element",a);return e.jsx(h,{ref:l,placement:"right",className:o,...i})});j.id="InputRightElement";j.displayName="InputRightElement";var L=E({displayName:"ViewOffIcon",path:e.jsxs("g",{fill:"currentColor",children:[e.jsx("path",{d:"M23.2,10.549a20.954,20.954,0,0,0-4.3-3.6l4-3.995a1,1,0,1,0-1.414-1.414l-.018.018a.737.737,0,0,1-.173.291l-19.5,19.5c-.008.007-.018.009-.026.017a1,1,0,0,0,1.631,1.088l4.146-4.146a11.26,11.26,0,0,0,4.31.939h.3c4.256,0,8.489-2.984,11.051-5.8A2.171,2.171,0,0,0,23.2,10.549ZM16.313,13.27a4.581,4.581,0,0,1-3,3.028,4.3,4.3,0,0,1-3.1-.19.253.253,0,0,1-.068-.407l5.56-5.559a.252.252,0,0,1,.407.067A4.3,4.3,0,0,1,16.313,13.27Z"}),e.jsx("path",{d:"M7.615,13.4a.244.244,0,0,0,.061-.24A4.315,4.315,0,0,1,7.5,12,4.5,4.5,0,0,1,12,7.5a4.276,4.276,0,0,1,1.16.173.244.244,0,0,0,.24-.062l1.941-1.942a.254.254,0,0,0-.1-.421A10.413,10.413,0,0,0,12,4.75C7.7,4.692,3.4,7.7.813,10.549a2.15,2.15,0,0,0-.007,2.9,21.209,21.209,0,0,0,3.438,3.03.256.256,0,0,0,.326-.029Z"})]})}),V=E({displayName:"ViewIcon",path:e.jsxs("g",{fill:"currentColor",children:[e.jsx("path",{d:"M23.432,10.524C20.787,7.614,16.4,4.538,12,4.6,7.6,4.537,3.213,7.615.568,10.524a2.211,2.211,0,0,0,0,2.948C3.182,16.351,7.507,19.4,11.839,19.4h.308c4.347,0,8.671-3.049,11.288-5.929A2.21,2.21,0,0,0,23.432,10.524ZM7.4,12A4.6,4.6,0,1,1,12,16.6,4.6,4.6,0,0,1,7.4,12Z"}),e.jsx("circle",{cx:"12",cy:"12",r:"2"})]})});const O=({show:u,setShow:n})=>e.jsx(A,{onClick:()=>n(l=>!l),variant:"ghost",_hover:{bg:"transparent"},children:u?e.jsx(V,{}):e.jsx(L,{})});export{O as H,k as I,j as a};
