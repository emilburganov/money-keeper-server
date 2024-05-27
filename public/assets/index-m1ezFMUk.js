import{u as z,r as x,j as e,a as H,s as O,b as q,F as k,B as J,S as L,y as ge,t as K,T as D,z as xe,w as me,A as U,x as W,d as X,L as G}from"./index-D7c0h0Uw.js";import{C as he}from"./index-D8cS2rxp.js";import{u as V}from"./index-C09T05R0.js";import{C as P}from"./models-CjZ-GPCS.js";import{u as R}from"./hooks-C1lstcpR.js";import{u as Q,C as pe,U as je}from"./incomes-stats-BW2VD1Zk.js";import{u as Y,o as Z,F as f,a as y,I as $,b as C,c as ee}from"./yup-CnYg6ZIy.js";import{N as se,a as te,b as re,c as ae,d as oe,C as fe,S as ye,e as Ce,f as Se,g as be}from"./chunk-GF2QC326-BEAHCXZB.js";import{D as Ie,M as ne,b as ce,c as ie,d as le,e as de,S as Me,C as ve,a as Be,E as Ee}from"./chunk-7YYN6TNS-Cc4cFlMG.js";import{a as T,S as _e,C as we}from"./chunk-3RSXBRAN-CVbEPzcG.js";import{H as Ae}from"./chunk-7OLJDQMT-7CO27-G1.js";import{B as Fe}from"./chunk-Z6RXEUPO-BuwZFS1J.js";const Le=({income:s})=>{const{deleteIncome:t}=Q(),{t:i}=z(),[l,d]=x.useState(!1),h=async()=>{d(!0),await t(s),d(!1)};return e.jsx(H,{display:"flex",gap:2,onClick:h,colorScheme:"red",isLoading:l,loadingText:i("crud.buttons.deleteButtonLoadingText"),children:e.jsx(Ie,{})})},Ne=O(({isOpen:s,onClose:t})=>{var N,v,B,E,_,w,A,F;const{categories:i,getCategories:l}=R(),{accounts:d,getAccounts:h}=V(),{t:o}=z(),{colorMode:n}=q(),[m,S]=x.useState(null),{register:u,handleSubmit:j,reset:M,formState:{errors:r,isValid:a}}=Y({resolver:Z(ge)});x.useEffect(()=>{(async()=>(await l(),await h()))()},[]),x.useEffect(()=>{b(1)},[d]);const b=c=>{const p=d.find(g=>g.id===c);p&&S(p.currency)};return e.jsxs(ne,{isOpen:s,onClose:t,isCentered:!0,size:"sm",children:[e.jsx(ce,{}),e.jsxs(ie,{maxW:{base:"calc(100% - 32px)",sm:400},children:[e.jsx(le,{pt:5,px:5,pb:0,children:o("pages.incomes.createModal.form.title")}),e.jsx(de,{top:5,right:5}),e.jsx(k,{direction:"column",gap:4,children:e.jsx(J,{rounded:"lg",bg:n==="light"?"gray.50":"gray.700",boxShadow:"lg",p:5,children:e.jsxs(L,{spacing:4,children:[e.jsxs(f,{isInvalid:!!((N=r.title)!=null&&N.message),children:[e.jsxs(y,{children:[o("pages.incomes.createModal.form.fields.title"),":"]}),e.jsx($,{...u("title"),type:"text",focusBorderColor:n==="light"?"green.500":"green.200",placeholder:o("pages.incomes.createModal.form.placeholders.title")}),r.title&&e.jsx(C,{children:(v=r.title)==null?void 0:v.message})]}),e.jsxs(f,{isInvalid:!!((B=r.amount)!=null&&B.message),children:[e.jsxs(y,{children:[o("pages.incomes.createModal.form.fields.amount"),":"]}),e.jsxs(se,{defaultValue:1e3,precision:2,min:0,max:1e9,step:10,focusBorderColor:n==="light"?"green.500":"green.200",children:[e.jsx(te,{...u("amount")}),e.jsxs(re,{children:[e.jsx(ae,{}),e.jsx(oe,{})]})]}),r.amount&&e.jsx(C,{children:(E=r.amount)==null?void 0:E.message})]}),e.jsxs(f,{isInvalid:!!((_=r.category_id)!=null&&_.message),children:[e.jsxs(y,{children:[o("pages.incomes.createModal.form.fields.category"),":"]}),e.jsx(T,{...u("category_id"),focusBorderColor:n==="light"?"green.500":"green.200",children:i.filter(c=>c.type!==P.EXPENSES).map(({id:c,title:p})=>e.jsx("option",{value:c,children:p},c))}),r.category_id&&e.jsx(C,{children:(w=r.category_id)==null?void 0:w.message})]}),e.jsxs(f,{isInvalid:!!((A=r.account_id)!=null&&A.message),children:[e.jsxs(y,{children:[o("pages.incomes.createModal.form.fields.account"),":"]}),e.jsx(T,{...u("account_id"),focusBorderColor:n==="light"?"green.500":"green.200",onChange:c=>b(Number(c.target.value)),children:d.map(({id:c,title:p})=>e.jsx("option",{value:c,children:p},c))}),m&&e.jsxs(ee,{children:[o("pages.incomes.createModal.form.accountCurrency")," - ",m.title," (",m.code,")"]}),r.account_id&&e.jsx(C,{children:(F=r.account_id)==null?void 0:F.message})]}),e.jsx(L,{spacing:10,pt:2,children:e.jsx(pe,{reset:M,isValid:a,handleSubmit:j,onSubmit:t})})]})})})]})]})}),Te=O(({setIncome:s,onOpen:t})=>{const{incomes:i,getIncomes:l}=Q(),[d,h]=x.useState(!1);return x.useEffect(()=>{(async()=>(h(!0),await l(),h(!1)))()},[]),d?e.jsx(K,{}):e.jsx(k,{direction:"column",gap:4,children:e.jsx(Me,{columns:{base:1,sm:2,lg:3,xl:4},spacing:"20px",children:i.map(o=>e.jsx(ze,{income:o,onOpen:t,setIncome:s},o.id))})})}),ze=({setIncome:s,income:t,onOpen:i})=>{const l=()=>{s(t),i()};return e.jsx(_e,{initialScale:.9,in:!0,children:e.jsxs(we,{borderColor:"red",children:[e.jsx(ve,{children:e.jsxs(Ae,{size:"sm",as:k,gap:2,align:"center",justifyContent:"space-between",children:[e.jsx(D,{overflow:"hidden",whiteSpace:"nowrap",textOverflow:"ellipsis",children:t.title}),e.jsx(Fe,{fontSize:"0.7em",colorScheme:"green",px:2,py:1,children:t.category.title})]})}),e.jsx(fe,{py:0,children:e.jsxs(ye,{children:[e.jsx(Ce,{children:t.account.title}),e.jsxs(Se,{children:["+ ",t.amount," ",t.account.currency.code]}),e.jsx(be,{children:t.created_at})]})}),e.jsxs(Be,{gap:5,children:[e.jsx(H,{onClick:l,children:e.jsx(Ee,{})}),e.jsx(Le,{income:t})]})]})})},ke=O(({income:s,isOpen:t,onClose:i})=>{var v,B,E,_,w,A,F,c,p;const{accounts:l,getAccounts:d}=V(),{categories:h,getCategories:o}=R(),{t:n}=z(),{colorMode:m}=q(),[S,u]=x.useState((v=s==null?void 0:s.account)==null?void 0:v.currency),{register:j,handleSubmit:M,reset:r,formState:{errors:a,isValid:b}}=Y({resolver:Z(xe),defaultValues:{title:s.title,amount:String(s.amount),category_id:s.category.id,account_id:s.account.id}});x.useEffect(()=>{(async()=>(await d(),await o()))()},[]);const N=g=>{const I=l.find(ue=>ue.id===g);I&&u(I.currency)};return e.jsxs(ne,{isOpen:t,onClose:i,isCentered:!0,size:"sm",children:[e.jsx(ce,{}),e.jsxs(ie,{maxW:{base:"calc(100% - 32px)",sm:400},children:[e.jsx(le,{pt:5,px:5,pb:0,children:n("pages.incomes.editModal.form.title")}),e.jsx(de,{top:5,right:5}),e.jsx(k,{direction:"column",gap:4,children:e.jsx(J,{rounded:"lg",bg:m==="light"?"gray.50":"gray.700",boxShadow:"lg",p:5,children:e.jsxs(L,{spacing:4,children:[e.jsxs(f,{isInvalid:!!((B=a.title)!=null&&B.message),children:[e.jsxs(y,{children:[n("pages.incomes.editModal.form.fields.title"),":"]}),e.jsx($,{...j("title"),type:"text",focusBorderColor:m==="light"?"green.500":"green.200",placeholder:n("pages.incomes.editModal.form.placeholders.title")}),a.title&&e.jsx(C,{children:(E=a.title)==null?void 0:E.message})]}),e.jsxs(f,{isInvalid:!!((_=a.amount)!=null&&_.message),children:[e.jsxs(y,{children:[n("pages.incomes.editModal.form.fields.amount"),":"]}),e.jsxs(se,{precision:2,min:0,max:1e9,step:10,focusBorderColor:m==="light"?"green.500":"green.200",children:[e.jsx(te,{...j("amount")}),e.jsxs(re,{children:[e.jsx(ae,{}),e.jsx(oe,{})]})]}),a.amount&&e.jsx(C,{children:(w=a.amount)==null?void 0:w.message})]}),e.jsxs(f,{isInvalid:!!((A=a.category_id)!=null&&A.message),children:[e.jsxs(y,{children:[n("pages.incomes.editModal.form.fields.category"),":"]}),e.jsx(T,{...j("category_id"),focusBorderColor:m==="light"?"green.500":"green.200",children:h.filter(g=>g.type!==P.EXPENSES).map(({id:g,title:I})=>e.jsx("option",{value:g,children:I},g))}),a.category_id&&e.jsx(C,{children:(F=a.category_id)==null?void 0:F.message})]}),e.jsxs(f,{isInvalid:!!((c=a.account_id)!=null&&c.message),children:[e.jsxs(y,{children:[n("pages.incomes.editModal.form.fields.account"),":"]}),e.jsx(T,{...j("account_id"),focusBorderColor:m==="light"?"green.500":"green.200",onChange:g=>N(Number(g.target.value)),children:l.map(({id:g,title:I})=>e.jsx("option",{value:g,children:I},g))}),S&&e.jsxs(ee,{children:[n("pages.incomes.editModal.form.accountCurrency")," - ",S.title," (",S.code,")"]}),a.account_id&&e.jsx(C,{children:(p=a.account_id)==null?void 0:p.message})]}),e.jsx(L,{spacing:10,pt:2,children:e.jsx(je,{id:s.id,reset:r,isValid:b,handleSubmit:M,onSubmit:i})})]})})})]})]})});function Ke(){const{t:s}=z(),[t,i]=x.useState(null),{isOpen:l,onOpen:d,onClose:h}=me(),{categories:o,getCategories:n}=R(),{accounts:m,getAccounts:S}=V(),[u,j]=x.useState(),[M,r]=x.useState(!1),a=()=>{h(),i(null)};return x.useEffect(()=>{r(!0),j(o.filter(b=>b.type===P.INCOMES)),r(!1)},[o]),x.useEffect(()=>{(async()=>(r(!0),await n(),await S(),r(!1)))()},[]),M?e.jsx(K,{}):e.jsx(he,{children:e.jsxs(L,{pt:2,gap:6,children:[!(u!=null&&u.length)&&e.jsxs(U,{borderRadius:"md",status:"info",children:[e.jsx(W,{}),e.jsxs(D,{children:[s("advices.createIncomeCategoryFirstAdvice")," ",e.jsx("br",{}),e.jsx(X,{as:G,fontSize:"md",to:"/categories",children:s("header.navigation.categories")})]})]}),!m.length&&e.jsxs(U,{borderRadius:"md",status:"info",children:[e.jsx(W,{}),e.jsxs(D,{children:[s("advices.createAccountFirstAdvice")," ",e.jsx("br",{}),e.jsx(X,{as:G,fontSize:"md",to:"/accounts",children:s("header.navigation.accounts")})]})]}),(u==null?void 0:u.length)&&m.length&&e.jsx(H,{display:"flex",gap:2,onClick:d,children:s("crud.buttons.createButton")}),e.jsx(Ne,{isOpen:l&&!t,onClose:h}),t&&e.jsx(ke,{income:t,isOpen:l,onClose:a}),e.jsx(Te,{onOpen:d,setIncome:i})]})})}export{Ke as default};