export default () => {
    document.getElementById("search").addEventListener('click',function (event){
        event.stopPropagation();
        document.getElementById('search-drop').classList.toggle('active');
    });
    document.getElementById("body").addEventListener('click',function (){
        document.getElementById('search-drop').classList.remove('active');
    });
    document.getElementById("search-drop").addEventListener('click',function (event){
        event.stopPropagation();
    });
};
