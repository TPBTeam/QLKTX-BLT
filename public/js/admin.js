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
    console.log("<head>"+head+"</head>");
    inhopdong.onclick = function(){
    	printWindow = open('','','width=1000,height=500');
    	printWindow.document.write("<head>"+head+"<style>input{border:none !important;}</style>"+"</head>"+"<body>"+"<div class=\"addcontract\">"+addcontract+"</div>"+"</body>");
    	printWindow.print();
    	// printWindow.close();

    	// document.body.innerHTML = totalcontent;
    }
},false)