document.addEventListener("DOMContentLoaded",function(){
    sidebarCollapse = document.getElementById("sidebarCollapse");
    sidebar = document.getElementById("sidebar");
    inhopdong = document.querySelector('.inhopdong');
    addcontract = document.querySelector('.addcontract').innerHTML;
    head = document.querySelector('head').innerHTML;
    // Phần siderbar
    sidebarCollapse.onclick = function(){
        sidebar.classList.toggle("active");
    }
    //Phần in ấn
    console.log(head);
    inhopdong.onclick = function(){
    	printWindow = open('','');
    	printWindow.document.write(head+addcontract);
    	// totalcontent = document.body.innerHTML;
    	// document.querySelector('body').innerHTML = addcontract;
    	printWindow.print();
    	printWindow.close();

    	// document.body.innerHTML = totalcontent;
    }
},false)