const currentLocation = location.href;
const menuItem = document.getElementsByClassName('active-link');
const menuLength = menuItem.length;
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation){
        menuItem[i].className = "aaactive";
    }
}