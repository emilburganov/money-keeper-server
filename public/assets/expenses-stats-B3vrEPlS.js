import{r as c,aj as m,s as x,u as b,j as d,a as f,ab as h,F as C}from"./index-B-hmDOvL.js";import{C as L,b as y,L as j,c as B,d as k,e as w,p as T,a as v,f as $}from"./index-Ipos_J1W.js";const g=()=>{const t=c.useContext(m);if(!t)throw new Error("Expense Store has not been installed!");return t},_=x(t=>{const{reset:a,isValid:n,handleSubmit:i,onSubmit:o}=t,{createExpense:e}=g(),{t:r}=b(),[s,u]=c.useState(!1),l=async p=>{p.preventDefault(),u(!0),await i(e)(),u(!1),n&&(o(),a())};return d.jsx(f,{isLoading:s,onClick:l,loadingText:r("crud.buttons.createButtonLoadingText"),children:r("crud.buttons.createButton")})}),A=x(t=>{const{t:a}=b(),{id:n,reset:i,isValid:o,handleSubmit:e,onSubmit:r}=t,{updateExpense:s}=g(),[u,l]=c.useState(!1),p=async E=>{E.preventDefault(),l(!0),await e(S=>s(S,n))(),l(!1),o&&(r(),i())};return d.jsx(f,{onClick:p,isLoading:u,loadingText:a("crud.buttons.updateButtonLoadingText"),children:a("crud.buttons.updateButton")})});L.register(y,j,B,k,w,T,v);const D=x(()=>{const{t}=b(),{getExpensesStats:a,expensesStats:n}=g(),[i,o]=c.useState(!1),{user:e}=h();c.useEffect(()=>{(async()=>(o(!0),await a(),o(!1)))()},[e.currency]);const r={labels:n.labels,datasets:[{label:t("stats.expenses"),data:n.values,borderColor:"rgba(255, 99, 132, 1)",backgroundColor:"rgba(255, 99, 132, 0.2)"}]};if(!i)return d.jsx(C,{h:400,justifyContent:"center",children:d.jsx($,{data:r,options:{maintainAspectRatio:!1,animation:{duration:0},scales:{y:{ticks:{callback:s=>`${s} ${e.currency.code}`}}},plugins:{tooltip:{callbacks:{label:s=>`${s.formattedValue} ${e.currency.code}`}}}},width:"100%"})})});export{_ as C,D as E,A as U,g as u};
