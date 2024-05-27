import{r as u,al as h,s as g,u as p,j as d,a as x,ab as m,F as A}from"./index-D7c0h0Uw.js";import{u as f,C as y,A as L,p as j,a as B,P as w}from"./index-C09T05R0.js";const k=()=>{const t=u.useContext(h);if(!t)throw new Error("Currency Store has not been installed!");return t},v=g(t=>{const{reset:a,isValid:o,handleSubmit:r,onSubmit:e}=t,{createAccount:s}=f(),{t:n}=p(),[c,i]=u.useState(!1),l=async b=>{b.preventDefault(),i(!0),await r(s)(),i(!1),o&&(e(),a())};return d.jsx(x,{isLoading:c,onClick:l,loadingText:n("crud.buttons.createButtonLoadingText"),children:n("crud.buttons.createButton")})}),U=g(t=>{const{t:a}=p(),{id:o,reset:r,isValid:e,handleSubmit:s,onSubmit:n}=t,{updateAccount:c}=f(),[i,l]=u.useState(!1),b=async C=>{C.preventDefault(),l(!0),await s(S=>c(S,o))(),l(!1),e&&(n(),r())};return d.jsx(x,{onClick:b,isLoading:i,loadingText:a("crud.buttons.updateButtonLoadingText"),children:a("crud.buttons.updateButton")})});y.register(L,j,B);const V=g(()=>{const{t}=p(),{accountsStats:a,getAccountsStats:o}=f(),[r,e]=u.useState(!1),{user:s}=m();u.useEffect(()=>{(async()=>(e(!0),await o(),e(!1)))()},[s.currency]);const n={labels:a.labels,datasets:[{label:t("stats.accounts"),data:a.values,backgroundColor:["rgba(255, 99, 132, 0.2)","rgba(54, 162, 235, 0.2)","rgba(255, 206, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(153, 102, 255, 0.2)","rgba(255, 159, 64, 0.2)"],borderColor:["rgba(255, 99, 132, 1)","rgba(54, 162, 235, 1)","rgba(255, 206, 86, 1)","rgba(75, 192, 192, 1)","rgba(153, 102, 255, 1)","rgba(255, 159, 64, 1)"]}]};if(!r)return d.jsx(A,{h:400,justifyContent:"center",children:d.jsx(w,{data:n,options:{maintainAspectRatio:!1,animation:{duration:0},plugins:{tooltip:{callbacks:{label:c=>`${c.formattedValue} ${s.currency.code}`}}}},width:"100%"})})});export{V as A,v as C,U,k as u};