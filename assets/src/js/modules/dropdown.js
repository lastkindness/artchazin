export default () => {
    let dropdowns = document.querySelectorAll(".dropdown");
    let body = document.querySelector("body");
    dropdowns.forEach(function (item,num){
        let title = item.querySelector(".dropdown__title");
        item.addEventListener("click",function (event){
            event.stopPropagation();
        })
        title.addEventListener("click", function (event){
            event.stopPropagation();
            let parent = this.parentElement;
            if (parent.classList.contains("active")) {
                parent.classList.remove("active");
            }
            else {
                parent.classList.add("active");
            }
        });
    });
    body.addEventListener("click",function (event){
        dropdowns.forEach(function (item,num){
            item.classList.remove("active");
        })
    })
};
