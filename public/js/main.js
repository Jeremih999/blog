const navItems = document.querySelector('.nav__items');
const openNavBtn = document.querySelector('#open__nav-btn');
const closeNavBtn = document.querySelector('#close__nav-btn');


// OPENS NAV DROPDOWN
const openNav = () => {
    navItems.style.display='flex';
    openNavBtn.style.display='none';
    closeNavBtn.style.display='inline-block';
}

// CLOSE NAV DROPDOWN
const closeNav = () => {
    navItems.style.display='none';
    openNavBtn.style.display='inline-block';
    closeNavBtn.style.display='none';
}

openNavBtn.addEventListener('click', openNav);
closeNavBtn.addEventListener('click', closeNav)



const sidebar= document.querySelector('aside');
const ShowSidebarBtn= document.querySelector('#show__sidebar-btn');
const HideSidebarBtn= document.querySelector('#hide__sidebar-btn');


const showSidebar=() => {
    sidebar.style.left = "0";
    ShowSidebarBtn.style.display="none";
    HideSidebarBtn.style.display="inline-block";
}


const hideSidebar=() => {
    sidebar.style.left = "-100%";
    ShowSidebarBtn.style.display="inline-block";
    HideSidebarBtn.style.display="none";
}

ShowSidebarBtn.addEventListener('click', showSidebar);
HideSidebarBtn.addEventListener('click', hideSidebar);