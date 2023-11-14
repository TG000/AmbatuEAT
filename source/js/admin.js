// ====================== Admin Menu Dropdown ========================== //

if (window.matchMedia("(min-width: 1305px)").matches) {
    const adminNavBtn = document.querySelectorAll("#admin-nav-btn");
    const adminDropdown = document.querySelectorAll("#admin-dropdown");
    const adminNavBtnArr = Array.prototype.slice.call(adminNavBtn);
    
    var dropdownHeight = [];
    
    window.onload = () => {
        adminDropdown.forEach(element => {
            dropdownHeight.push(window.getComputedStyle(element).height);
    
            element.style.maxHeight = '0px';
            element.style.overflow = 'hidden';
        });
    }
    
    adminNavBtn.forEach(element => {
        element.addEventListener('click', () => {
            var lastActiveBtn;
            var index = adminNavBtnArr.indexOf(element);
            var dropdownMenu = element.nextElementSibling;
    
            for (var i = 0; i < adminNavBtn.length; i++) {
                if (adminNavBtn[i].classList.contains("admin-nav-active")) {
                    lastActiveBtn = adminNavBtn[i];
                    break;
                }
            }
    
            for (var i = 0; i < adminNavBtn.length; i++) {
                adminNavBtn[i].classList.remove("admin-nav-active");
                adminDropdown[i].style.maxHeight = '0px';
            }
    
            if (element === lastActiveBtn) {
                element.classList.remove("admin-nav-active");
                dropdownMenu.style.maxHeight = '0px';
            }
            else {
                element.classList.add("admin-nav-active");
                dropdownMenu.style.maxHeight = dropdownHeight[index];
            }
        });
    });
}
else {
    const adminNavBtn = document.querySelectorAll("#admin-nav-btn");
    const adminDropdown = document.querySelectorAll("#admin-dropdown");
    const adminNavBtnArr = Array.prototype.slice.call(adminNavBtn);
    
    var dropdownHeight = [];
    
    window.onload = () => {
        adminDropdown.forEach(element => {
            dropdownHeight.push(window.getComputedStyle(element).height);
    
            element.style.maxHeight = '0px';
        });
    }
    
    adminNavBtn.forEach(element => {
        element.addEventListener('click', () => {
            var lastActiveBtn;
            var index = adminNavBtnArr.indexOf(element);
            var dropdownMenu = element.nextElementSibling;
    
            for (var i = 0; i < adminNavBtn.length; i++) {
                if (adminNavBtn[i].classList.contains("admin-nav-active")) {
                    lastActiveBtn = adminNavBtn[i];
                    break;
                }
            }
    
            for (var i = 0; i < adminNavBtn.length; i++) {
                adminNavBtn[i].classList.remove("admin-nav-active");
                adminDropdown[i].style.maxHeight = '0px';
            }
    
            if (element === lastActiveBtn) {
                element.classList.remove("admin-nav-active");
                dropdownMenu.style.maxHeight = '0px';
            }
            else {
                element.classList.add("admin-nav-active");
                dropdownMenu.style.maxHeight = dropdownHeight[index];
            }
        });
    });
}