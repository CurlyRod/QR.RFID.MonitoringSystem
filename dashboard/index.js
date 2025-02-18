// const listItems = document.querySelectorAll(".sidebar-list li"); 

// listItems.forEach((item) => {
//      item.addEventListener("click", ()=> {
//         let isActive = item.classList.contains("active");  
 
       
//         listItems.forEach((el)=>{
//             el.classList.remove("active"); 
//         });  

//         if(isActive) item.classList.remove("active"); 
//         else item.classList.add("active");
//      });
// }); 

// const toggleSidebar =  document.querySelector('.toggle-sidebar'); 
// const sidebar = document.querySelector('.sidebar'); 


// toggleSidebar.addEventListener("click", ()=>{  
      
//     listItems.forEach((el)=>{
//         el.classList.remove("active"); 
//     });  
//       sidebar.classList.toggle("close"); 
      
// }); 



const listItems = document.querySelectorAll(".sidebar-list li"); 


listItems.forEach((item) => {
    item.addEventListener("click", () => {
        let isActive = item.classList.contains("active");  

        // Remove 'active' class from all list items
        listItems.forEach((el) => {
            el.classList.remove("active"); 
        });  


        if (isActive) item.classList.remove("active"); 
        else item.classList.add("active");
    });
}); 

const toggleSidebar = document.querySelector('.toggle-sidebar'); 
const sidebar = document.querySelector('.sidebar'); 

toggleSidebar.addEventListener("click", () => {
    // Remove active class from all list items before toggling the sidebar
    listItems.forEach((el) => {
        el.classList.remove("active"); 
    });  

    // Set a timeout to delay the sidebar closing action
    setTimeout(() => {
        sidebar.classList.toggle("close");
    }, 300);  // Adjust the delay as needed (in milliseconds)
});
