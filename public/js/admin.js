// $(document).ready(function () {

//     $('#sidebarCollapse').on('click', function () {
//         $('#sidebar').toggleClass('active');
//     });

// });


document.addEventListener("DOMContentLoaded",function(){
    sidebarCollapse = document.getElementById("sidebarCollapse");
    sidebar = document.getElementById("sidebar");
    sidebarCollapse.onclick = function(){
        sidebar.classList.toggle("active");
    }
},false)