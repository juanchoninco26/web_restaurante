const click_menu=document.getElementById("click_menu");
//const menu_items=document.querySelector(".menu_items");
const menu =document.getElementById("menu");

click_menu.addEventListener("click",()=>{
    if(menu.className==="close header"){
        menu.className="open header";
        menu_items.className="menu_items_display";
    }else{
        menu.className="close header";
        menu_items.className="menu_items";   
    }
})