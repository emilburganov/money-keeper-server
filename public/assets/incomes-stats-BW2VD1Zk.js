import{r as l,ai as h,s as b,u as g,j as d,a as f,ab as C,F as L}from"./index-D7c0h0Uw.js";import{C as I,b as y,L as j,c as B,d as k,e as w,p as E,a as T,f as v}from"./index-C09T05R0.js";const p=()=>{const a=l.useContext(h);if(!a)throw new Error("Income Store has not been installed!");return a},V=b(a=>{const{reset:s,isValid:o,handleSubmit:i,onSubmit:c}=a,{createIncome:t}=p(),{t:r}=g(),[n,e]=l.useState(!1),u=async m=>{m.preventDefault(),e(!0),await i(t)(),e(!1),o&&(c(),s())};return d.jsx(f,{isLoading:n,onClick:u,loadingText:r("crud.buttons.createButtonLoadingText"),children:r("crud.buttons.createButton")})}),_=b(a=>{const{t:s}=g(),{id:o,reset:i,isValid:c,handleSubmit:t,onSubmit:r}=a,{updateIncome:n}=p(),[e,u]=l.useState(!1),m=async S=>{S.preventDefault(),u(!0),await t(x=>n(x,o))(),u(!1),c&&(r(),i())};return d.jsx(f,{onClick:m,isLoading:e,loadingText:s("crud.buttons.updateButtonLoadingText"),children:s("crud.buttons.updateButton")})});I.register(y,j,B,k,w,E,T);const A=b(()=>{const{t:a}=g(),{getIncomesStats:s,incomesStats:o}=p(),[i,c]=l.useState(!1),{user:t}=C();l.useEffect(()=>{(async()=>(c(!0),await s(),c(!1)))()},[t.currency]);const r={labels:o.labels,datasets:[{label:a("stats.incomes"),data:o.values,borderColor:"rgba(54, 162, 235, 1)",backgroundColor:"rgba(54, 162, 235, 0.2)"}]};if(!i)return d.jsx(L,{h:400,justifyContent:"center",children:d.jsx(v,{data:r,options:{maintainAspectRatio:!1,animation:{duration:0},scales:{y:{ticks:{callback:n=>{var e;return`${n} ${(e=t==null?void 0:t.currency)==null?void 0:e.code}`}}}},plugins:{tooltip:{callbacks:{label:n=>{var e;return`${n.formattedValue} ${(e=t==null?void 0:t.currency)==null?void 0:e.code}`}}}}},width:"100%"})})});export{V as C,A as I,_ as U,p as u};