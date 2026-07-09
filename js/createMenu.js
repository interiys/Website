const menuItems = document.querySelectorAll("#nav-menu>span")
menuItems.forEach(item=>{
    for (let i=1;i<item.children.length;i++){
        item.children[i].style.top = 100*i+"%"
    }
    item.addEventListener("mouseenter", function() {
        for (let i=1;i<this.children.length;i++){
            this.children[i].style.display = 'block'
        }
    });
    item.addEventListener("mouseleave", function() {
        for (let i=1;i<this.children.length;i++){
            this.children[i].style.display = 'none'
        }
    });
    item.addEventListener("click", function() {
        for (let i=1;i<this.children.length;i++){
            this.children[i].style.display = this.children[i].style.display === 'block' ? 'none' : 'block';
        }
    });
})