const c = (el)=>document.querySelector(el);
const cs = (el)=>document.querySelectorAll(el);

modelsJson.map((item, produtos)=>{
    let modelsItem = document.querySelector('.models .models-item').cloneNode(true);
    document.querySelector('.models-area').append(modelsItem);
});