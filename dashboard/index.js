 const fullName = document.getElementById('fullName').textContent;
const [firstName, , lastName] = fullName.split(' '); // Using array destructuring to skip the middle name
const initials = firstName[0] + lastName[0];
document.getElementById('profileImage').innerHTML = initials.toUpperCase();

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

const toggleSidebar = document.querySelector('.hamburger-logo'); 
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
