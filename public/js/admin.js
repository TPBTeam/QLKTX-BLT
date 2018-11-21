document.addEventListener("DOMContentLoaded",function(){
    sidebarCollapse = document.getElementById("sidebarCollapse");
    sidebar = document.getElementById("sidebar");
    inhopdong = document.querySelector('.inhopdong');
    addcontract = document.querySelector('.addcontract').innerHTML;
    // Phần siderbar
    sidebarCollapse.onclick = function(){
        sidebar.classList.toggle("active");
    }
    //Phần in ấn
    console.log(addcontract);
    inhopdong.onclick = function(){
    	totalcontent = document.body.innerHTML;
    	document.querySelector('body').innerHTML = addcontract;
    	window.print();
    	document.body.innerHTML = totalcontent;
    }
},false)