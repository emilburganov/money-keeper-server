import{s as h,u as p,r as u,j as e,a as j,t as v,F as y,T as A,b as L,B as w,S as m,v as H,U as N,w as U,A as P,x as R}from"./index-D7c0h0Uw.js";import{C as W}from"./index-D8cS2rxp.js";import{u as f}from"./hooks-C1lstcpR.js";import{C as S}from"./models-CjZ-GPCS.js";import{D as X,S as G,C as q,a as J,E as K,M as I,b as T,c as F,d as D,e as O}from"./chunk-7YYN6TNS-Cc4cFlMG.js";import{H as Q}from"./chunk-7OLJDQMT-7CO27-G1.js";import{B}from"./chunk-Z6RXEUPO-BuwZFS1J.js";import{S as Y,C as Z,a as _}from"./chunk-3RSXBRAN-CVbEPzcG.js";import{u as k,o as z,F as b,a as M,I as V,b as E}from"./yup-CnYg6ZIy.js";const $=h(r=>{const{reset:t,isValid:s,handleSubmit:a,onSubmit:o}=r,{createCategory:n}=f(),{t:l}=p(),[i,d]=u.useState(!1),c=async g=>{g.preventDefault(),d(!0),await a(n)(),d(!1),s&&(o(),t())};return e.jsx(j,{isLoading:i,onClick:c,loadingText:l("crud.buttons.createButtonLoadingText"),children:l("crud.buttons.createButton")})}),ee=({category:r})=>{const{deleteCategory:t}=f(),{t:s}=p(),[a,o]=u.useState(!1),n=async()=>{o(!0),await t(r),o(!1)};return e.jsx(j,{onClick:n,colorScheme:"red",isLoading:a,loadingText:s("crud.buttons.deleteButtonLoadingText"),children:e.jsx(X,{})})},te=h(r=>{const{t}=p(),{id:s,reset:a,isValid:o,handleSubmit:n,onSubmit:l}=r,{updateCategory:i}=f(),[d,c]=u.useState(!1),g=async x=>{x.preventDefault(),c(!0),await n(C=>i(C,s))(),c(!1),o&&(l(),a())};return e.jsx(j,{onClick:g,isLoading:d,loadingText:t("crud.buttons.updateButtonLoadingText"),children:t("crud.buttons.updateButton")})}),se=h(({setCategory:r,onOpen:t})=>{const{categories:s,getCategories:a}=f(),[o,n]=u.useState(!1);return u.useEffect(()=>{(async()=>(n(!0),await a(),n(!1)))()},[]),o?e.jsx(v,{}):e.jsx(y,{direction:"column",gap:4,children:e.jsx(G,{columns:{base:1,sm:2,lg:3,xl:4},spacing:"20px",children:s.map(l=>e.jsx(ae,{category:l,onOpen:t,setCategory:r},l.id))})})}),ae=({setCategory:r,category:t,onOpen:s})=>{const{t:a}=p(),o=()=>{r(t),s()};return e.jsx(Y,{initialScale:.9,in:!0,children:e.jsxs(Z,{borderColor:"red",children:[e.jsx(q,{children:e.jsxs(Q,{size:"sm",as:y,gap:2,align:"center",justifyContent:"space-between",children:[e.jsx(A,{overflow:"hidden",whiteSpace:"nowrap",textOverflow:"ellipsis",children:t.title}),t.type===S.INCOMES&&e.jsx(B,{fontSize:"0.7em",colorScheme:"green",px:2,py:1,children:a("models.type.Incomes")}),t.type===S.EXPENSES&&e.jsx(B,{fontSize:"0.7em",colorScheme:"red",px:2,py:1,children:a("models.type.Expenses")})]})}),e.jsxs(J,{gap:5,children:[e.jsx(j,{onClick:o,children:e.jsx(K,{})}),e.jsx(ee,{category:t})]})]})})},oe=h(({isOpen:r,onClose:t})=>{var c,g,x,C;const{t:s}=p(),{colorMode:a}=L(),{register:o,handleSubmit:n,reset:l,formState:{errors:i,isValid:d}}=k({resolver:z(H)});return e.jsxs(I,{isOpen:r,onClose:t,isCentered:!0,size:"sm",children:[e.jsx(T,{}),e.jsxs(F,{maxW:{base:"calc(100% - 32px)",sm:400},children:[e.jsx(D,{pt:5,px:5,pb:0,children:s("pages.categories.createModal.form.title")}),e.jsx(O,{top:5,right:5}),e.jsx(y,{direction:"column",gap:4,children:e.jsx(w,{rounded:"lg",bg:a==="light"?"gray.50":"gray.700",boxShadow:"lg",p:5,children:e.jsxs(m,{spacing:4,children:[e.jsxs(b,{isInvalid:!!((c=i.title)!=null&&c.message),children:[e.jsxs(M,{children:[s("pages.categories.createModal.form.fields.title"),":"]}),e.jsx(V,{...o("title"),placeholder:s("pages.categories.createModal.form.placeholders.title"),focusBorderColor:a==="light"?"green.500":"green.200"}),i.title&&e.jsx(E,{children:(g=i.title)==null?void 0:g.message})]}),e.jsxs(b,{isInvalid:!!((x=i.type)!=null&&x.message),children:[e.jsxs(M,{children:[s("pages.categories.createModal.form.fields.type"),":"]}),e.jsxs(_,{...o("type"),focusBorderColor:a==="light"?"green.500":"green.200",children:[e.jsx("option",{value:S.INCOMES,children:s("models.type.Incomes")}),e.jsx("option",{value:S.EXPENSES,children:s("models.type.Expenses")})]}),i.type&&e.jsx(E,{children:(C=i.type)==null?void 0:C.message})]}),e.jsx(m,{spacing:10,pt:2,children:e.jsx($,{reset:l,isValid:d,handleSubmit:n,onSubmit:t})})]})})})]})]})}),re=h(({category:r,isOpen:t,onClose:s})=>{var g,x;const{t:a}=p(),{colorMode:o}=L(),{register:n,handleSubmit:l,reset:i,formState:{errors:d,isValid:c}}=k({resolver:z(N),defaultValues:{title:r.title}});return e.jsxs(I,{isOpen:t,onClose:s,isCentered:!0,size:"sm",children:[e.jsx(T,{}),e.jsxs(F,{maxW:{base:"calc(100% - 32px)",sm:400},children:[e.jsx(D,{pt:5,px:5,pb:0,children:a("pages.categories.editModal.form.title")}),e.jsx(O,{top:5,right:5}),e.jsx(y,{direction:"column",gap:4,children:e.jsx(w,{rounded:"lg",bg:o==="light"?"gray.50":"gray.700",boxShadow:"lg",p:5,children:e.jsxs(m,{spacing:4,children:[e.jsxs(b,{isInvalid:!!((g=d.title)!=null&&g.message),children:[e.jsxs(M,{children:[a("pages.categories.editModal.form.fields.title"),":"]}),e.jsx(V,{...n("title"),placeholder:a("pages.categories.editModal.form.placeholders.title"),focusBorderColor:o==="light"?"green.500":"green.200"}),d.title&&e.jsx(E,{children:(x=d.title)==null?void 0:x.message})]}),e.jsx(m,{spacing:10,pt:2,children:e.jsx(te,{id:r.id,reset:i,isValid:c,handleSubmit:l,onSubmit:s})})]})})})]})]})});function me(){const{t:r}=p(),[t,s]=u.useState(null),{isOpen:a,onOpen:o,onClose:n}=U(),{categories:l,getCategories:i}=f(),[d,c]=u.useState(!1),g=()=>{n(),s(null)};return u.useEffect(()=>{(async()=>(c(!0),await i(),c(!1)))()},[]),d?e.jsx(v,{}):e.jsx(W,{children:e.jsxs(m,{pt:2,gap:6,children:[!l.length&&e.jsxs(P,{borderRadius:"md",status:"info",children:[e.jsx(R,{}),r("advices.createCategoryAdvice")]}),e.jsx(j,{onClick:o,children:r("crud.buttons.createButton")}),e.jsx(oe,{isOpen:a&&!t,onClose:n}),t&&e.jsx(re,{category:t,isOpen:a,onClose:g}),e.jsx(se,{onOpen:o,setCategory:s})]})})}export{me as default};