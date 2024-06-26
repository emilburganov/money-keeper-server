import{u as y,r as S,b as v,j as s,B as E,S as d,R as H,F as _,d as L,L as P,f as k}from"./index-D7c0h0Uw.js";import{C as M}from"./index-D8cS2rxp.js";import{I as C,a as B,H as I}from"./index-31ZZfQUz.js";import{u as z,F as n,a as i,I as t,b as l,o as A}from"./yup-CnYg6ZIy.js";import{H as G}from"./chunk-7OLJDQMT-7CO27-G1.js";const T=()=>{var g,p,h,x,f,j,u,w;const{t:r}=y(),[c,F]=S.useState(!1),[m,b]=S.useState(!1),{colorMode:o}=v(),{register:a,handleSubmit:R,formState:{errors:e}}=z({resolver:A(k)});return s.jsx(E,{as:"form",rounded:"lg",bg:o==="light"?"gray.50":"gray.700",boxShadow:"lg",p:5,children:s.jsxs(d,{spacing:4,children:[s.jsxs(n,{isInvalid:!!((g=e.name)!=null&&g.message),children:[s.jsxs(i,{children:[r("pages.registration.form.fields.name"),":"]}),s.jsx(t,{...a("name"),type:"text",placeholder:"Username",focusBorderColor:o==="light"?"green.500":"green.200"}),e.name&&s.jsx(l,{children:(p=e.name)==null?void 0:p.message})]}),s.jsxs(n,{isInvalid:!!((h=e.email)!=null&&h.message),children:[s.jsxs(i,{children:[r("pages.registration.form.fields.email"),":"]}),s.jsx(t,{...a("email"),type:"text",placeholder:"Example@gmail.com",focusBorderColor:o==="light"?"green.500":"green.200"}),e.email&&s.jsx(l,{children:(x=e.email)==null?void 0:x.message})]}),s.jsxs(n,{isInvalid:!!((f=e.password)!=null&&f.message),children:[s.jsxs(i,{children:[r("pages.registration.form.fields.password"),":"]}),s.jsxs(C,{children:[s.jsx(t,{...a("password"),type:c?"text":"password",placeholder:"********",focusBorderColor:o==="light"?"green.500":"green.200"}),s.jsx(B,{h:"full",children:s.jsx(I,{show:c,setShow:F})})]}),e.password&&s.jsx(l,{children:(j=e.password)==null?void 0:j.message})]}),s.jsxs(n,{isInvalid:!!((u=e.password_confirmation)!=null&&u.message),children:[s.jsxs(i,{children:[r("pages.registration.form.fields.password_confirmation"),":"]}),s.jsxs(C,{children:[s.jsx(t,{...a("password_confirmation"),type:m?"text":"password",placeholder:"********",focusBorderColor:o==="light"?"green.500":"green.200"}),s.jsx(B,{h:"full",children:s.jsx(I,{show:m,setShow:b})})]}),e.password_confirmation&&s.jsx(l,{children:(w=e.password_confirmation)==null?void 0:w.message})]}),s.jsx(d,{spacing:10,pt:2,children:s.jsx(H,{handleSubmit:R})}),s.jsxs(_,{pt:6,align:"center",wrap:"wrap",gap:1,children:[r("pages.registration.form.redirect"),s.jsx(L,{as:P,to:"/login",children:r("pages.login.form.button")})]})]})})};function K(){const{t:r}=y();return s.jsx(M,{children:s.jsxs(d,{align:"canter",justify:"center",minH:"100vh",maxW:"lg",spacing:8,mx:"auto",py:6,children:[s.jsx(d,{align:"center",children:s.jsx(G,{fontSize:"4xl",textAlign:"center",children:r("pages.registration.form.title")})}),s.jsx(T,{})]})})}export{K as default};
